<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Disease;
use App\Models\Medicine;
use App\Models\Rule;
use App\Models\Symptom;
use App\Models\User;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index()
    {
        $user = User::all();
        $disease = Disease::all();
        $medicine = Medicine::all();
        return view('pages.home', [
            "disease" => $disease,
            "user" => $user,
            "medicine" => $medicine
        ]);
    }

    public function diagnose()
    {
        $users = User::all();
        $symptoms = Symptom::all();
        $diseases = Disease::all();
        return view('pages.diagnose', [
            "symptoms" => $symptoms,
            "diseases" => $diseases
        ]);
    }

    public function medicine()
    {
        $medicines = Medicine::orderby('name');

        if (request('search')) {
            $medicines->where('name', 'like', '%' . request('search') . '%');
        }

        return view('pages.medicinesPage', [
            'medicines' => $medicines->paginate(8)->withQueryString()
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
        // dd($diseaseRelation);

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

// public function update( $request, $disease)
// {
//     $rules = [
//         'diseases_code' => 'required',
//         'diseases' => 'required',
//         'type' => 'required',
//         'description' => 'required',
//     ];

//     $validatedData = $request->validate($rules);

//     $disease->update($validatedData);
//     return redirect('/diseases')->with('success', 'Diseases was updated successfully');
// }4
}