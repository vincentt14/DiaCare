@extends('pages.adminDashboard')

@section('content')
  <div class="w-full self-center px-4">
    <div class="flex flex-wrap">
      <div class="self-center lg:w-2/3">
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
                @foreach ($symptomsInfo as $symptom)
                  <tr class="px-6 py-3 text-center">
                    <td class="border px-6 py-2">{{ $loop->iteration }}</td>
                    <td class="border px-6 py-2 text-justify"><span
                        class="font-semibold text-secondary">{{ $symptom['symptoms_code'] }}</span><br>{{ $symptom['symptoms'] }}
                    </td>
                    <td class="border px-6 py-2">
                      <select id="options" class="w-full rounded-md">
                        <option value="yes">Yes</option>
                        <option value="no">No</option>
                      </select>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
            <button type="submit"
              class="w-full rounded-sm border-2 border-black bg-black py-3 px-8 text-white duration-300 ease-out hover:bg-white hover:text-black focus:outline-none focus:ring focus:ring-blue-500">
              Edit <span class="text-secondary">{{ $diseaseDetails['name'] }}</span> Rule
            </button>
          </div>
        </form>
      </div>
      <div class="hidden w-full self-center md:block lg:w-1/3">
        <div class="mt-10 lg:right-0">
          <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
          <lottie-player src="https://assets5.lottiefiles.com/private_files/lf30_aw7xbqgf.json" background="transparent"
            speed="1" style="width: 300px; height: 300px;" loop autoplay class="mx-auto"></lottie-player>
        </div>
      </div>
    </div>
  </div>
@endsection
