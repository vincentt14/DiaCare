{{-- @dd($medicines); --}}
@extends('pages.adminDashboard')

@section('content')

  <div class=" w-full lg:mx-auto">
    <div class="mb-10 w-full">
      <div class="w-full rounded-sm border border-[#BBBBBB] bg-white p-3">
        @if ($users->count())
          <h1 class="font-base mt-3 mb-5 text-center text-lg text-slate-800 lg:text-2xl">Users Table</h1>
          <table class="w-full rounded-xl text-slate-800 border mb-3">
            <thead class="text-slate-700">
              <tr>
                <th class="px-6 py-3 border bg-slate-50">
                  No
                </th>
                <th class="px-6 py-3 border bg-slate-50">
                  Name
                </th>
                <th class="px-6 py-3 border bg-slate-50">
                  Email
                </th>
                <th class="px-6 py-3 border bg-slate-50">
                  Result
                </th>
              </tr>
            </thead>
            <tbody>
              @foreach ($users as $user)
                <tr class="px-6 py-3 text-center">
                  <td class="px-6 py-2 border">{{ $loop->iteration }}</td>
                  <td class="px-6 py-2 border">{{ $user['name'] }}</td>
                  <td class="px-6 py-2 text-justify content-start border">{{ $user['email'] }}</td>
                  <td class="px-6 py-2 text-justify border">{{ $user['result'] }}</td>
                </tr>
              @endforeach
            </tbody>
          @else
            <h1 class="mt-2 mb-4 text-center text-lg font-light text-primary lg:text-2xl">There is no Medicines.</h1>
        @endif
        </table>
        {{ $users->links() }}
      </div>
    </div>
  </div>
@endsection
