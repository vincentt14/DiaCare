@extends('layouts.app')

@section('content')
  <section class="pt-28 pb-24 lg:pt-36 lg:pb-32">
    <div class="container">
      <div class="flex flex-col lg:flex-row">
        <div class="w-full self-center px-4 lg:w-1/3">
          <h1 class="text-base font-medium text-primary md:text-xl">
            Welcome to
            <p class="mt-1 block text-4xl font-bold text-secondary lg:text-5xl">Dia<span class="text-primary">Care</span>.
            </p>
          </h1>
          <h2 class="mb-3 mt-2 text-lg font-light text-primary lg:text-2xl">Diagnose. <span class="font-bold capitalize">
              @if (auth()->user())
                {{ auth()->user()->name }}
              @else
                Guest
              @endif
            </span>
          </h2>
          @if (auth()->user() == null)
            <p class="mb-3 max-w-md text-slate-500">
              To get <span class="font-bold text-primary">Dashboard</span> feature you have to <a href="/login"
                class="font-bold text-secondary">Login.</a>
            </p>
          @elseif (auth()->user() !== null)
            <p class="mb-3 max-w-md text-slate-500">
              Go to <a href="/dashboard" class="font-bold capitalize text-secondary">{{ auth()->user()->name }}'s
                dashboard</a>.
            </p>
          @endif
        </div>

        <div class="w-full self-center px-4 lg:w-2/3">
          <h1 class="text-2xl font-bold text-primary lg:text-3xl">
          </h1>
          <div class="mt-8">
            <div class="w-full lg:mx-auto">
              <div class="mb-10 w-full">
                <div class="w-full rounded-sm border border-[#BBBBBB] bg-white p-3">
                  <div class="flex items-center justify-between">
                    <h1 class="font-base mx-3 mt-3 mb-5 text-lg text-slate-800 lg:text-2xl">Questions</h1>
                    <div class="w-full self-center">
                      <a href="/"
                        class="mx-3 py-3 px-5 rounded-sm border-2 border-black bg-black text-white duration-300 ease-out hover:bg-white hover:text-black">
                        Back to Home
                      </a>
                    </div>
                  </div>
                  @if ($diseases->count())
                    <table class="mt-3 mb-3 w-full rounded-xl border text-slate-800">
                      <thead class="text-slate-700">
                        <tr>
                          <th class="border bg-slate-50 px-6 py-3">
                            No
                          </th>
                          <th class="border bg-slate-50 px-6 py-3">
                            Questions
                          </th>
                          <th class="border bg-slate-50 px-6 py-3">
                            Answer
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($symptoms as $symptom)
                          <tr class="px-6 py-3 text-center">
                            <td class="border px-6 py-2">{{ $loop->iteration }}</td>
                            <td class="content-start border px-6 py-2 text-justify">{{ $symptom['symptoms'] }}</td>
                            <td class="border px-6 py-2 text-justify">{{ $symptom['type'] }}</td>
                          </tr>
                        @endforeach
                      </tbody>
                    @else
                      <h1 class="mt-2 mb-4 border p-3 text-center text-lg font-light text-primary lg:text-2xl">There is no
                        Users.
                      </h1>
                  @endif
                  </table>
                  {{-- {{ $diseases->links() }} --}}
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
  </section>
@endsection
