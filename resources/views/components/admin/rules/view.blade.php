{{-- @dd($diseaseRelations); --}}
@extends('pages.adminDashboard')

@section('content')
  <div class="w-full lg:mx-auto">
    <div class="mb-10 w-full">
      <div class="w-full rounded-sm border border-[#BBBBBB] bg-white p-3">
        <div class="flex items-center justify-between px-4">
          <h1 class="font-base mx-3 mt-3 mb-5 text-lg text-slate-800 lg:text-2xl">Rule Base Table</h1>
          <button type="button"
            class="my-2 mx-3 rounded-sm border-2 border-black bg-black py-3 px-5 text-white duration-300 ease-out hover:bg-white hover:text-black md:my-4">
            <a href="#list">List of Symptoms</a>

          </button>
          {{-- <form action="/users" method="get">
            <div class="w-full self-center">
              <div class="flex">
                <input type="text" id="search" name="search" placeholder="search for users"
                  class="my-2 w-full rounded-sm border-2 border-[#030723] bg-white p-3 focus:outline-none focus:ring focus:ring-blue-500 md:my-4" />
                <button type="submit"
                  class="my-2 mx-3 rounded-sm border-2 border-black bg-black py-3 px-5 text-white duration-300 ease-out hover:bg-white hover:text-black md:my-4">
                  Search
                </button>
              </div>
            </div>
          </form> --}}
        </div>
        @if (count($diseaseRelations))
          <table class="mb-3 w-full rounded-xl border text-slate-800">
            <thead class="text-slate-700">
              <tr>
                <th class="border bg-slate-50 px-6 py-3">
                  No
                </th>
                <th class="border bg-slate-50 px-6 py-3">
                  Diseases
                </th>
                @foreach ($symptomsInfo as $symptom)
                  <th class="border bg-slate-50 px-6 py-3">
                    {{ $symptom['symptoms_code'] }}
                  </th>
                @endforeach
                <th class="border bg-slate-50 px-6 py-3">
                  Action
                </th>
              </tr>
            </thead>
            <tbody>
              @foreach ($diseaseRelations as $disease)
                <tr class="px-6 py-3 text-center">
                  <td class="border px-6 py-2">{{ $loop->iteration }}</td>
                  <td class="border px-6 py-2">{{ $disease['name'] }}</td>
                  @foreach ($disease['rules'] as $rule)
                    <td class="content-start border px-6 py-2">{{ $rule ? '✓' : '-' }}</td>
                  @endforeach
                  <td class="content-start border px-6 py-2">
                    <a class="mx-2 text-yellow-400" href="/rules/{{ $disease['id'] }}/edit">
                      Edit
                    </a>
                  </td>
                </tr>
              @endforeach
            </tbody>
          @else
            <h1 class="mt-2 mb-4 border p-3 text-center text-lg font-light text-primary lg:text-2xl">There is no Rules.
            </h1>
        @endif
        </table>
      </div>

      <h2 id="list" class="font-md pt-24 mb-3 text-lg text-secondary lg:text-2xl">List of Symptoms
      </h2>
      <div class="mt-2 w-full rounded-sm border border-[#BBBBBB] bg-white p-3">
        @if (count($symptomsInfo))
          <table class="mb-3 w-full rounded-xl border text-slate-800">
            <thead class="text-slate-700">
              <tr>
                <th class="border bg-slate-50 px-6 py-3">
                  No
                </th>
                <th class="border bg-slate-50 px-6 py-3">
                  Symptoms Code
                </th>
                <th class="border bg-slate-50 px-6 py-3">
                  Symptoms
                </th>
              </tr>
            </thead>
            <tbody>
              @foreach ($symptomsInfo as $symptom)
                <tr class="px-6 py-3 text-center">
                  <td class="border px-6 py-2">{{ $loop->iteration }}</td>
                  <td class="border px-6 py-2">{{ $symptom['symptoms_code'] }}</td>
                  <td class="border px-6 py-2 text-justify">{{ $symptom['symptoms'] }}</td>
                </tr>
              @endforeach
            </tbody>
          </table>
        @else
          <h1 class="mt-2 mb-4 border p-3 text-center text-lg font-light text-primary lg:text-2xl">There is no Symptoms.
          </h1>
        @endif
      </div>

    </div>
  </div>
@endsection
