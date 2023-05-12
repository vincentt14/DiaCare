{{-- @dd($diagnoseResults); --}}
@extends('pages.adminDashboard')

@section('content')

  <div class="w-full lg:mx-auto">
    <div class="mb-10 w-full">
      <div class="w-full rounded-sm border border-[#BBBBBB] bg-white p-3">
        <div class="flex items-center justify-between px-4">
          <h1 class="font-base mx-3 mt-3 mb-5 text-lg text-slate-800 lg:text-2xl">Users Table</h1>
          <form action="/users" method="get">
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
          </form>
        </div>
        @if ($users->count())
          <table class="mb-3 w-full rounded-xl border text-slate-800">
            <thead class="text-slate-700">
              <tr>
                <th class="border bg-slate-50 px-6 py-3">
                  No
                </th>
                <th class="border bg-slate-50 px-6 py-3">
                  Name
                </th>
                <th class="border bg-slate-50 px-6 py-3">
                  Email
                </th>
                <th class="border bg-slate-50 px-6 py-3">
                  Latest Diagnose Date
                </th>
                <th class="border bg-slate-50 px-6 py-3">
                  Latest Result
                </th>
              </tr>
            </thead>
            <tbody>
              @foreach ($users as $user)
                <tr class="px-6 py-3 text-center">
                  <td class="border px-6 py-2">{{ $loop->iteration }}</td>
                  <td class="border px-6 py-2">{{ $user['name'] }}</td>
                  <td class="content-start border px-6 py-2 text-justify">{{ $user['email'] }}</td>
                  @foreach ($diagnoseResults as $diagnoseResult)
                    @if ($diagnoseResult['user_id'] == $user['id'])
                      <td class="border px-6 py-2 text-justify">
                        {{ date('d F Y', strtotime($diagnoseResult['updated_at'])) }}</td>
                      <td class="border px-6 py-2 text-justify">{{ $diagnoseResult['result'] }}</td>
                    @else
                      <td class="border px-6 py-2 text-justify text-slate-400">No Date</td>
                      <td class="border px-6 py-2 text-justify text-slate-400">No Result</td>
                    @endif
                  @endforeach
                </tr>
              @endforeach
            </tbody>
          @else
            <h1 class="mt-2 mb-4 border p-3 text-center text-lg font-light text-primary lg:text-2xl">There is no Users.
            </h1>
        @endif
        </table>
        {{ $users->links() }}
      </div>
    </div>
  </div>
@endsection
