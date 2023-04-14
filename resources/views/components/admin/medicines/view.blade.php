{{-- @dd($medicines); --}}
@extends('pages.adminDashboard')

@section('content')
  <button
    class="btnnn mb-3 mt-2 rounded-sm border-2 border-black bg-black py-3 px-5 text-white duration-300 ease-out hover:bg-white hover:text-black">
    <a href="/medicines/create">Add Medicines</a>
  </button>
  <div class="w-full lg:mx-auto">
    <div class="mb-10 w-full">
      <div class="w-full rounded-sm border border-[#BBBBBB] bg-white p-3">
        @if ($medicines->count())
          <h1 class="mt-2 mb-4 text-center text-lg font-light text-primary lg:text-2xl">Medicines Table</h1>
          <table class="w-full rounded-xl text-slate-800 border mb-3">
            <thead class="text-secondary">
              <tr>
                <th class="px-6 py-3 border bg-slate-50">
                  No
                </th>
                <th class="px-6 py-3 border bg-slate-50">
                  Name
                </th>
                <th class="px-6 py-3 border bg-slate-50">
                  Composition
                </th>
                <th class="px-6 py-3 border bg-slate-50">
                  Dose
                </th>
                <th class="px-6 py-3 border bg-slate-50">
                  Action
                </th>
              </tr>
            </thead>
            <tbody>
              @foreach ($medicines as $medicine)
                <tr class="px-6 py-3 text-center">
                  <td class="px-6 py-2 border">{{ $loop->iteration }}</td>
                  <td class="px-6 py-2 border">{{ $medicine['name'] }}</td>
                  <td class="px-6 py-2 text-justify content-start border">{{ $medicine['composition'] }}</td>
                  <td class="px-6 py-2 text-justify border">{{ $medicine['dose'] }}</td>
                  <td class="flex justify-center px-6 py-2 border content-center">
                    <a class="mx-2 text-blue-400" href="/medicines/{{ $medicine['id'] }}">
                      View
                    </a>
                    <a class="mx-2 text-yellow-400" href="/medicines/{{ $medicine['id'] }}/edit">
                      Edit
                    </a>
                    <form class="mx-2 text-red-400" action="/medicines/{{ $medicine['id'] }}" method="post"
                      class="d-inline">
                      @method('delete')
                      @csrf
                      <button onClick="return confirm('Are you sure?')">
                        Delete
                      </button>
                    </form>
                  </td>
                </tr>
              @endforeach
            </tbody>
          @else
            <h1 class="mt-2 mb-4 text-center text-lg font-light text-primary lg:text-2xl">There is no Medicines.</h1>
        @endif
        </table>
        {{ $medicines->links() }}
      </div>
    </div>
  </div>
@endsection
