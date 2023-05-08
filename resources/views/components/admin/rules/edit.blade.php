@extends('pages.adminDashboard')

@section('content')
  <div class="w-full self-center px-4">
    <div class="self-center">
      <div class="space-beetween flex">
        <h1 class="text-2xl font-bold text-primary lg:text-3xl">
          Edit <span class="text-secondary">Rule Base</span>
        </h1>
        <button
          class="btnnn ml-5 rounded-sm border-2 border-black bg-black py-2 px-5 text-white duration-300 ease-out hover:bg-white hover:text-black">
          <a href="/rules">Back</a>
        </button>
      </div>
      <form class="mt-5" method="post" action="/">
        @method('put')
        @csrf
        <div class="w-full rounded-sm border border-[#BBBBBB] bg-white p-4">
          <table class="mb-3 w-full rounded-xl border text-slate-800">
            <thead class="text-slate-700">
              <tr>
                <th class="border bg-slate-50 px-6 py-3">
                  No
                </th>
                <th class="border bg-slate-50 px-6 py-3">
                  Symptoms
                </th>
                <th class="border bg-slate-50 px-6 py-3 font-bold uppercase">
                  <span class="font-semibold text-secondary">{{ $diseaseDetails['diseases_code'] }}</span> -
                  {{ $diseaseDetails['name'] }}
                </th>
              </tr>
            </thead>
            <tbody>
              @for ($i = 0; $i < count($symptomsInfo); $i++)
                <tr class="px-6 py-3 text-center">
                  <td class="border px-6 py-2">{{ $i + 1 }}</td>
                  <td class="border px-6 py-2 text-justify"><span
                      class="font-semibold text-secondary">{{ $symptomsInfo[$i]['symptoms_code'] }}</span><br>{{ $symptomsInfo[$i]['symptoms'] }}
                  </td>
                  <td class="border px-6 py-2">
                    <select name="options" id="options" class="w-full rounded-md">
                      @if ($diseaseDetails['rules'][$i] == 0)
                        <option value="yes">Yes</option>
                        <option value="no" selected>No</option>
                      @else
                        <option value="yes" selected>Yes</option>
                        <option value="no">No</option>
                      @endif
                    </select>
                  </td>
                </tr>
              @endfor
            </tbody>
          </table>
          <button type="submit"
            class="w-full rounded-sm border-2 border-black bg-black py-3 px-8 text-white duration-300 ease-out hover:bg-white hover:text-black focus:outline-none focus:ring focus:ring-blue-500">
            Edit <span class="">{{ $diseaseDetails['name'] }}</span> Rule
          </button>
        </div>
      </form>
    </div>
  </div>

  <script>
    const data = @json($diseaseDetails);
    console.log(data);
    
    const diseaseRules = data.rules
    console.log(diseaseRules);

    let newDiseaseRules = diseaseRules.map((e) => {
      return e;
    })
    // console.log(newDiseaseRules);

    const options = document.getElementsByTagName('select');
    // console.log(options.length);

    // for (let i = 0; i < options.length; i++) {
    //   // console.log(options[i]);
    //   options[i].addEventListener('change', () => {
    //     // console.log(options[i].value)
    //     for(let j = 0; j < newDiseaseRules; j++){
    //       if (newDiseaseRules[j] == options[i]){
    //         // console.log('masoookk banggg')
    //         newDiseaseRules[j] = options[i].value
    //         // newDiseaseRules[j].push(options[i].value)
    //         console.log(options[i].value)
    //       }
    //     }
    //     console.log(newDiseaseRules)
    //   })
    // }


// 1. caritau cara bikin array 2 dimensi
// 2. caritau cara pakai


let a = [
  [`id penyakit`,`id gejala`]
]

console.log(a[2][1])
a[2][1] = 1


// a = [
//   [2,1,1]
// ]



  </script>
@endsection
