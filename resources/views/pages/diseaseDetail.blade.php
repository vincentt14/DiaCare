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
        <div class="space-beetween flex my-2">
          <h2 class="my-3 text-lg font-light text-primary lg:text-2xl">Detail disease</h2>
          <button
            class="btnnn my-2 ml-5 rounded-sm border-2 border-black bg-black py-2 px-5 text-white duration-300 ease-out hover:bg-white hover:text-black">
            <a href="/diseases">Back</a>
          </button>
        </div>

      </div>

      <div class="container">
        <div class="w-full rounded-sm border border-[#BBBBBB] bg-white p-3">
          <div class="m-3">
            <p class="mb-3 text-lg font-bold text-primary lg:text-3xl">{{ $disease['diseases'] }}</p>
            <div class="h-[170px] overflow-hidden rounded-sm border-2 border-secondary shadow-lg">
              <img src="https://source.unsplash.com/bkc-m0iZ4Sk" alt="{{ $disease['diseases'] }}"
                class="h-full w-full object-cover" />
            </div>
            <p class="mt-5 text-justify text-lg font-bold text-primary">Type:</p>
            <p class="mt-1 text-justify text-lg font-light text-primary">{{ $disease['type'] }}</p>
            <p class="mt-5 text-justify text-lg font-bold text-primary">Description:</p>
            <p class="mt-1 text-justify text-lg font-light text-primary">{{ $disease['description'] }}</p>
          </div>
        </div>
      </div>
  </section>
@endsection
