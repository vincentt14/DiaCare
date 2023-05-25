{{-- @dd($symptomsInfo); --}}
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
      <div class="mt-5">
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
                    <select name="options" id="options-{{ $i }}" class="w-full rounded-md"
                      onchange="updateRuleListener(this, {{ $diseaseDetails['id'] }}, {{ $symptomsInfo[$i]['id'] }})">
                      @if ($diseaseDetails['rules'][$i] == 0)
                        <option value="1">Yes</option>
                        <option value="0" selected>No</option>
                      @else
                        <option value="1" selected>Yes</option>
                        <option value="0">No</option>
                      @endif
                    </select>
                  </td>
                </tr>
              @endfor
            </tbody>
          </table>
          <button id="submit-rule" type="button"
            class="w-full rounded-sm border-2 border-black bg-black py-3 px-8 text-white duration-300 ease-out hover:bg-white hover:text-black focus:outline-none focus:ring focus:ring-blue-500">
            Edit {{ $diseaseDetails['name'] }} Rule
          </button>
        </div>
        </form>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
      integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script>
      const rules = [];

      const updateRuleListener = (e, diseaseId, symptomId) => {
        const value = e.value;

        for (let i = 0; i < rules.length; i++) {
          if (rules[i].diseaseId === diseaseId && rules[i].symptomId === symptomId) {
            e.classList.remove('bg-green-100');
            e.classList.remove('border-green-500');
            rules.splice(i, 1);
            // console.table(rules);
            return;
          }
        }

        e.classList.add('bg-green-100');
        e.classList.add('border-green-500');
        rules.push({
          diseaseId,
          symptomId,
          value
        });
      }

      $(document).on('click', '#submit-rule', (e) => {
        e.preventDefault();

        if (rules.length === 0) {
          $(document).on('click', '#submit-rule', () => {
            window.location.replace('/rules');
          });
          return;
        }


        $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });

        $.ajax({
          type: "POST",
          url: "/rules-change",
          dataType: "json",
          data: {
            'data': rules
          },
          success: (response) => {
            console.log(response);
            if (response.status === 200) {
              window.location.replace("/rules")
            } else {
              alert("Gagal");
            }
          },
          error: (response) => {
            console.log(response);
          }
        });
      })
    </script>
  @endsection
