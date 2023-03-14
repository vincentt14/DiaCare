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
        <h2 class="mb-5 mt-2 text-lg font-light text-primary lg:text-2xl">Discussion.</h2>
      </div>
      @yield('section')
    </div>
  </section>
@endsection
