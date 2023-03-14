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
        <h2 class="mb-5 mt-2 text-lg font-light text-primary lg:text-2xl">Medicines.</h2>
      </div>
      <div class="w-full self-center px-4">
        <div class="flex flex-col md:flex-row">
          <input type="text" placeholder="search for medicines"
            class="bayangan_field my-4 w-full rounded-sm border-2 border-[#030723] bg-white p-3 focus:outline-none focus:ring focus:ring-blue-500 lg:w-1/2" />

        </div>
      </div>
    </div>
  </section>
@endsection
