@extends('layouts.app')

@section('content')
  <section class="pt-28 pb-24 lg:pt-36 lg:pb-32">
    <div class="container">
      <div class="w-full self-center px-4">
        <h1 class="text-base font-medium text-primary md:text-xl">
          Welcome to
          <p class="mt-1 block text-4xl font-bold text-secondary lg:text-5xl">Dia<span class="text-primary">Care</span>.
          </p>
        </h1>
        <h2 class="mb-5 mt-2 text-lg font-light text-primary lg:text-2xl">Dashboard. <span class="font-bold">Admin</span>
        </h2>
      </div>
      <div class="w-full self-center px-4">
        <h1 class="text-2xl font-bold text-primary lg:text-3xl">
        </h1>
        <div class="mt-5">

          <div
            class="bayangan_field mb-6 grid max-w-xl grid-cols-2 gap-0 border-2 border-black bg-white py-2 text-slate-500 md:max-w-2xl">
            <div class="font-base text-lg text-primary md:flex md:items-center md:justify-center md:text-xl">
              <a href="/admin/gejala">
                Gejala
              </a> 
            </div>
            <div class="font-base text-lg text-primary md:flex md:items-center md:justify-center md:text-xl">
              <a href="/admin/penyakit">
                Penyakit
              </a> 
            </div>
          </div>

          @yield('content')

        </div>
      </div>
    </div>
  </section>
@endsection
