@extends('pages.adminDashboard')

@section('content')
  <h2 class="mb-5 mt-2 text-lg font-light text-primary lg:text-2xl"><span class="font-bold">Penyakit</span> Table</h2>
  <div class="w-full lg:mx-auto">
    <div class="mb-10 w-full px-4">
      <div class="w-full rounded-sm border border-[#BBBBBB] bg-white p-3">
        <table class="w-full rounded-xl text-slate-800">
          <thead class="text-secondary">
            <tr>
              <th class="px-6 py-3">
                No
              </th>
              <th class="px-6 py-3">
                Kode Penyakit
              </th>
              <th class="px-6 py-3">
                Penyakit
              </th>
              <th class="px-6 py-3">
                Action
              </th>
            </tr>
          </thead>
          <tbody>
            {{-- @foreach ($recyclers as $recycler) --}}
            <tr class="px-6 py-3 text-center">
              <td class="px-6 py-2">1</td>
              <td class="px-6 py-2">P001</td>
              <td class="px-6 py-2">Diabetes Mellitus 1</td>
              <td class="flex justify-center px-6 py-2">
                <a class="mx-2 text-yellow-400" href="#">
                  Edit
                </a>
                <form class="mx-2 text-red-400" action="#" method="post" class="d-inline">
                  @method('delete')
                  @csrf
                  <button onClick="return confirm('Are you sure?')">
                    Delete
                  </button>
                </form>
              </td>
            </tr>
            <tr class="px-6 py-3 text-center">
              <td class="px-6 py-2">2</td>
              <td class="px-6 py-2">P002</td>
              <td class="px-6 py-2">Diabetes Mellitus 2</td>
              <td class="flex justify-center px-6 py-2">
                <a class="mx-2 text-yellow-400" href="#">
                  Edit
                </a>
                <form class="mx-2 text-red-400" action="#" method="post" class="d-inline">
                  @method('delete')
                  @csrf
                  <button onClick="return confirm('Are you sure?')">
                    Delete
                  </button>
                </form>
              </td>
            </tr>
            {{-- @endforeach --}}
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection
