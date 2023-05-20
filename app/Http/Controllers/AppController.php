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
        $symptoms = Symptom::all();

        // cara 1
        // rules['disease_id'] di splice supaya ga ada duplikat, lalu di count
        // $rules.

        // setelah di count, di looping pertama, supaya pengecekannya sebanyak x kali
        // for($i = 0; $i < count($rules); $i++){
        // if($rules[$i]['disease_id'] == $i){ 
        // disini di cek kalau misalnya dia ketemu sama disease id, maka di push ke array of object
        // }
        // }

        // $dm1 = [];

        // $dm2 = [];

        // $dm3 = [];

        // $test = [];

        // cara 2
        // pakai array filter, jadi disetiap rules[$i] di filter kas pengkondisian rules[$i]['disease_id'] == 1 dst 

        // for($i = 0; $i < count($rules); $i++){

        // $group = [];

        // if($rules[$i]['disease_id'] ==  $i){
        //     array_push($group, $rules[$i]['disease_id'], $rules[$i]['rule_value']);
        // }
        // }

        // cara rucci

        // looping berdsaarkan disease
        // looping berdsaarkan symptom
        // buat pengkondisian di ke 2, tiap rule dengan disease i dan symptom j === data['symptom']['j'] value == 1 
        // flag = penamaan variabel untuk memberi tahu, woi iterasi INI, berarti per diseases, eh bro, di diseases yg ini, semua input user != dengan symptomnya, kalau semua ga sama, maka lanjut ke looping ke 2

        // flag = status, ['berhenti', 'seelsai']

        // for ($i = 0; $i < count($rules); $i++) {
        //     for ($j = 0; $j < count($data); $j++) {
        //         if ($rules[$i]['symptom_id'] == $data[$j]['symptomId'] && $rules[$i]['rule_value'] == $data[$j]['value']) {
        //             // DiagnoseResult::create([
        //             //     'user_id' => $id,
        //             //     'result' => $rules[$i]['disease_id']
        //             // ]);
        //             // break;
        //         } else {
        //             // DiagnoseResult::create([
        //             //     'user_id' => $id,
        //             //     'result' => 'Negative'
        //             // ]);
        //         }
        //     }
        // }


        // rule dari disesase ke i, dannnnnnn symptom ke j, apakaaahhhh ====== dengan data
        for ($i = 0; $i < count($diseases); $i++) {
            $results = '';
            $status = '';
            for ($j = 0; $j < count($symptoms); $j++) {
                if (
                    $rules[$j]['symptom_id'] == $data[$j]['symptomId'] &&
                    $rules[$j]['rule_value'] == $data[$j]['value']
                ) {
                    $status = 'udah ketemu';
                } else {
                    $status = 'stop, ga ketemu';
                    break;
                }
            }
            if ($status == 'udah ketemu') {
                $results = $diseases[$i]['diseases'];
            } else {
                continue;
            }
        }


        return response()->json([
            'status' => 200,
            'user_id' => $id,
            'message' => 'masuk user',
            'results' => $results,
            'data' => $request['data']
        ], 200);
    }

    public function forwardChainingGuest(Request $request)
    {





        return response()->json([
            'status' => 200,
            'message' => 'masuk guest',
            'data' => $request['data']
        ], 200);
    }
}