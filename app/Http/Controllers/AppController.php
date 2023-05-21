<?php

namespace App\Http\Controllers;

use App\Models\DiagnoseResult;
use Illuminate\Support\Facades\DB;
use App\Models\Disease;
use App\Models\Medicine;
use App\Models\Rule;
use App\Models\Symptom;
use App\Models\User;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin')->except(['index', 'diagnose', 'medicine', 'about', 'forwardChaining', 'forwardChainingGuest']);
    }

    public function index()
    {
        $user = User::all();
        $disease = Disease::all();
        $medicine = Medicine::all();
        $diagnoseResults = DiagnoseResult::all();
        return view('pages.home', [
            "disease" => $disease,
            "user" => $user,
            "medicine" => $medicine,
            "diagnoseResults" => $diagnoseResults
        ]);
    }

    public function diagnose()
    {
        $diseases = Disease::all();
        $symptoms = Symptom::all();
        return view('pages.diagnose', [
            "symptoms" => $symptoms,
            'symptomsInfo' => $symptoms,
            'diseasesInfo' => $diseases,
        ]);
    }

    public function medicine()
    {
        $medicines = Medicine::orderby('disease_id');
        $diseases = Disease::all();

        if (request('search')) {
            $medicines->where('name', 'like', '%' . request('search') . '%');
        }

        return view('pages.medicinesPage', [
            'medicines' => $medicines->paginate(8)->withQueryString(),
            'diseases' => $diseases
        ]);
    }

    public function about()
    {
        return view('pages.about');
    }

    public function logicRelation()
    {
        $diseases = Disease::all();
        $symptoms = Symptom::all();
        $rules = Rule::all();

        $diseaseRelation = [];
        for ($i = 0; $i < count($diseases); $i++) {
            $diseaseRelation[$i]['id'] = $diseases[$i]['id'];
            $diseaseRelation[$i]['name'] = $diseases[$i]['diseases'];
            $diseaseRelation[$i]['rules'] = [];

            for ($j = 0; $j < count($symptoms); $j++) {
                $rule = 0;
                for ($k = 0; $k < count($rules); $k++) {
                    if (
                        $rules[$k]['symptom_id'] == $symptoms[$j]['id'] &&
                        $rules[$k]['disease_id'] == $diseases[$i]['id']
                    ) {
                        $rule = $rules[$k]['rule_value'];
                        break;
                    }
                }
                if (!$rule) {
                    array_push($diseaseRelation[$i]['rules'], 0);
                } else {
                    array_push($diseaseRelation[$i]['rules'], $rule);
                }
            }
        }

        $diseaseRelations = $diseaseRelation;
        $medicinesInfo = Medicine::all();
        $usersInfo = User::all();


        return view('components.admin.rules.view', [
            'diseaseRelations' => $diseaseRelations,
            'symptomsInfo' => $symptoms,
            'diseasesInfo' => $diseases,
            'medicinesInfo' => $medicinesInfo,
            'usersInfo' => $usersInfo
        ]);
    }

    public function edit(int $id)
    {
        $symptoms = Symptom::all();
        $rules = Rule::all();
        $diseases = Disease::all();
        $disease = DB::table('diseases')->where('id', '=', $id)->get()[0];

        $diseaseDetail = array(
            "id" => "$disease->id",
            "diseases_code" => $disease->diseases_code,
            "name" => $disease->diseases,
            "rules" => [],
        );

        for ($i = 0; $i < count($symptoms); $i++) {
            $rule = 0;
            for ($j = 0; $j < count($rules); $j++) {
                if (
                    $rules[$j]['symptom_id'] == $symptoms[$i]['id'] &&
                    $rules[$j]['disease_id'] == $disease->id
                ) {
                    $rule = $rules[$j]['rule_value'];
                    break;
                }
            }

            if (!$rule) {
                array_push($diseaseDetail['rules'], 0);
            } else {
                array_push($diseaseDetail['rules'], $rule);
            }
        }
        // dd($diseaseDetail);

        $diseaseDetails = $diseaseDetail;
        $medicinesInfo = Medicine::all();
        $usersInfo = User::all();


        return view('components.admin.rules.edit', [
            'diseaseDetails' => $diseaseDetails,
            'diseasesInfo' => $diseases,
            'symptomsInfo' => $symptoms,
            'medicinesInfo' => $medicinesInfo,
            'usersInfo' => $usersInfo
        ]);
    }

    public function update(Request $request)
    {
        $data = $request->data;

        for ($i = 0; $i < count($data); $i++) {
            Rule::updateOrCreate(
                [
                    'disease_id' => $data[$i]['diseaseId'],
                    'symptom_id' => $data[$i]['symptomId'],
                ],
                [
                    'rule_value' => $data[$i]['value']
                ]
            );
        }

        return response()->json([
            'status' => 200,
            'message' => 'Rule base was updated successfully',
        ], 200);

        // return redirect('/rules')->with('success', 'Rule base was updated successfully');
    }

    public function forwardChaining(Request $request, string $id)
    {
        $data = $request->data;
        $rules = Rule::all();
        $diseases = Disease::all();

        usort($data, function ($a, $b) {
            return $a['symptomId'] - $b['symptomId'];
        });

        $result = '';
        for ($i = 0; $i < count($diseases); $i++) {
            $stats = '';
            $test = [];
            for ($j = 0; $j < count($rules); $j++) {
                if ($diseases[$i]['id'] == $rules[$j]['disease_id']) {
                    array_push($test, [
                        'symptomId' => $rules[$j]['symptom_id'],
                        'value' => $rules[$j]['rule_value']
                    ]);
                }
            }
            for ($k = 0; $k < count($test); $k++) {
                if (
                    $test[$k]['symptomId'] == $data[$k]['symptomId'] &&
                    $test[$k]['value'] == $data[$k]['value']
                ) {
                    $stats = 'berhasil';
                } else {
                    $stats = 'gagal';
                    break;
                }
            }
            if ($stats == 'berhasil') {
                $result = $diseases[$i]['diseases'];
                break;
            } else {
                $result = 'Negative';
            }
        }

        DiagnoseResult::create([
            'user_id' => $id,
            'result' => $result
        ]);

        return response()->json([
            'status' => 200,
            'user_id' => $id,
            'stats' => $stats,
            'result' => $result,
            'test' => $test,
            'data' => $data
        ], 200);
    }

    //     public function forwardChainingGuest(Request $request)
//     {
//         return response()->json([
//             'status' => 200,
//             'message' => 'masuk guest',
//             'data' => $request['data']
//         ], 200);
//     }
}

// $sortedData = $data->sortBy('symptomId');

// untuk mencari kesamaan antara answers dan rule base
// 1. looping sebanyak jumlah penyakit
// 2. di dalam looping penyakit, looping sebanyak jumlah gejala
// 3. di dalamnya buat pengkondisian dimana jika diseases ke $i dan gejala ke $j 
// ?. apakah sama dengan inputan user
// ?. mempunyai value apa? kemudian sama ga dgn answer user

// buat pengkondisian di ke 2, tiap rule dengan disease i dan symptom j === data['symptom']['j'] value == 1 
// flag = penamaan variabel untuk memberi tahu, woi iterasi INI, berarti per diseases, eh bro, di diseases yg ini, semua input user != dengan symptomnya, kalau semua ga sama, maka lanjut ke looping ke 2

// flag = status, ['berhenti', 'seelsai']

// DiagnoseResult::create([
//     'user_id' => $id,
//     'result' => $rules[$i]['disease_id']
// ]);

// DiagnoseResult::create([
//     'user_id' => $id,
//     'result' => 'Negative'

// for ($j = 0; $j < count($symptoms); $j++){
//     for($k = 0; $k < count($rules); $k++){
//         if($rules[$k]['disease_id'] == $diseases[$i]['id']){
//             if($rules[$k]['symptom_id'] == $data[$j]['symptomId']){
//                 if($rules[$k]['rule_value'] == $data[$k]['value']){
//                     $stats = 'berhasil';
//                 }else {
//                     $stats = 'gagal';
//                     break;
//                 }
//             }
//         }
//     }
// }
// if($stats == 'berhasil'){
//     $result = $diseases[$i]['diseases'];
//     break;
// }


// for ($j = 0; $j < count($symptoms); $j++) {
//     $stats = '';
//     for ($k = 0; $k < count($rules); $k++) {
//         if (
//             $rules[$k]['diseases_id'] == $diseases[$i]['id'] 
//         ) {
//             if ($data[$j]['symptomId'] == $rules[$k]['symptom_id']) {
//                 if ($data[$j]['value'] !== $rules[$k]['rule_value']) {
//                     $stats = 'udah beda, skip, lanjut ke iterasi penyakit ke 2';
//                     break;
//                 }
//             break;
//             }
//         }
//     }
// }
// if ($stats == 'oke, lanjut') {
//     $result = $diseases[$i]['diseases'];
// } else {
//     continue;
// }


// for ($k = 0; $k < count($rules); $k++) {
//     if ($diseases[$i]['id'] == $rules[$k]['disease_id'] && $symptoms[$j]['id'] == $rules[$k]['symptom_id']) {
//         $check = $rules[$k]['rule_value'];
//         array_push($test, [
//             'diseaseId' => $rules[$k]['disease_id'],
//             'symptomId' => $rules[$k]['symptom_id'],
//             'value' => $rules[$k]['rule_value']
//         ]);
//     }
//     if ($data[$j]['symptomId'] == $rules[$k]['symptom_id'] && $data[$j]['value'] == $check) {
//         $stats = 'ketemu';
//         // $result = $diseases[$i]['diseases'];
//     } else {
//         $stats = 'berhenti';
//         // continue;
//     }
// }


// if (
//     $rules[$j]['symptom_id'] == $data[$j]['symptomId'] &&
//     $rules[$j]['rule_value'] == $data[$j]['value']
// ) {
//     $stats = 'ketemu';
//     array_push(
//         $test,
//         [
//             'symptomId' => $data[$j]['symptomId'],
//             'value' => $data[$j]['value']
//         ]
//     );
// } else {
//     $stats = 'berhenti';
//     continue;
// }

// if($rules[$j]['symptom_id'] == $data[$j]['symptomId']){
//     if($rules[$j]['rule_value'] == $data[$j]['value']){
//         $stats = 'jawabannya sesuai';
//         continue;
//     }else {
//         $stats = 'jawabannya ga sesuai';
//         break;
//     }
// }