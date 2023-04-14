@extends('pages.adminDashboard')

@section('content')
  <button
    class="btnnn mb-3 rounded-sm border-2 border-black bg-black py-3 px-5 text-white duration-300 ease-out hover:bg-white hover:text-black">
    <a href="/diseases/create">Add Diseases</a>
  </button>
  <div class="w-full lg:mx-auto">
    <div class="mb-10 w-full">
      <div class="w-full rounded-sm border border-[#BBBBBB] bg-white p-3">
        @if ($diseases->count())
        <h1 class="font-base mt-3 mb-5 text-center text-lg text-slate-800 lg:text-2xl">Diseases Table</h1>
        <table class="w-full rounded-xl text-slate-800 mb-3">
            <thead class="text-slate-700">
              <tr>
                <th class="px-6 py-3 border bg-slate-50">
                  No
                </th>
                <th class="px-6 py-3 border bg-slate-50">
                  Diseases Code
                </th>
                <th class="px-6 py-3 border bg-slate-50">
                  Diseases
                </th>
                <th class="px-6 py-3 border bg-slate-50">
                  Action
                </th>
              </tr>
            </thead>
            <tbody>
              @foreach ($diseases as $disease)
                <tr class="px-6 py-3 text-center">
                  <td class="px-6 py-2 border">{{ $loop->iteration }}</td>
                  <td class="px-6 py-2 border">{{ $disease['diseases_code'] }}</td>
                  <td class="px-6 py-2 text-justify border">{{ $disease['diseases'] }}</td>
                  <td class="flex justify-center px-6 py-2 border">
                    <a class="mx-2 text-blue-400" href="/diseases/{{ $disease['id'] }}">
                      View
                    </a>
                    <a class="mx-2 text-yellow-400" href="/diseases/{{ $disease['id'] }}/edit">
                      Edit
                    </a>
                    <form class="mx-2 text-red-400" action="/diseases/{{ $disease['id'] }}" method="post"
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
            <h1 class="mt-2 mb-4 text-center text-lg font-light text-primary lg:text-2xl">There is no Diseases.</h1>
          @endif
        </table>
        {{ $diseases->links() }}
      </div>
    </div>
  </div>
@endsection

