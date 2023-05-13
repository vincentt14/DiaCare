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
        <div class="space-beetween my-2 flex">
          <h2 class="my-3 text-lg font-light text-primary lg:text-2xl">Detail medicine</h2>
          @if (auth()->user() == null || auth()->user()->is_admin == 0)
            <button
              class="btnnn my-2 ml-5 rounded-sm border-2 border-black bg-black py-2 px-5 text-white duration-300 ease-out hover:bg-white hover:text-black">
              <a href="/medicinesPage">Back</a>
            </button>
          @elseif(auth()->user()->is_admin == 1)
            <button
              class="btnnn my-2 ml-5 rounded-sm border-2 border-black bg-black py-2 px-5 text-white duration-300 ease-out hover:bg-white hover:text-black">
              <a href="/medicines">Back</a>
            </button>
          @endif
        </div>
      </div>

      <div class="container">
        <div class="w-full rounded-sm border border-[#BBBBBB] bg-white p-3">
          <div class="m-3">
            @if ($medicine['disease_id'] == 2)
              <p class="mb-3 text-lg font-bold text-primary lg:text-3xl"><span class="text-secondary">Type:
                </span>{{ $medicine['name'] }}</p>
            @else
              <p class="mb-3 text-lg font-bold text-primary lg:text-3xl">{{ $medicine['name'] }}</p>
            @endif
            <div class="h-[170px] overflow-hidden rounded-sm border-2 border-secondary shadow-lg">
              <img src="{{ $medicine['img'] }}" alt="{{ $medicine['name'] }}"
                class="h-full w-full object-cover" />
            </div>
            <p class="mt-5 text-justify text-lg font-bold text-primary">This Med is for:</p>
            @foreach ($diseases as $disease)
              @if ($medicine['disease_id'] == $disease['id'])
                <p class="font-base mt-1 text-justify text-lg text-secondary">{{ $disease['diseases'] }}</p>
              @endif
            @endforeach
            <p class="mt-5 text-justify text-lg font-bold text-primary">Description:</p>
            <p class="mt-1 text-justify text-lg font-light text-primary">{{ $medicine['description'] }}</p>
            @if ($medicine['disease_id'] == 2)
              <p class="mt-5 text-justify text-lg font-bold text-primary">Insulin:</p>
            @else
              <p class="mt-5 text-justify text-lg font-bold text-primary">Composition:</p>
            @endif
            <p class="mt-1 text-justify text-lg font-light text-primary">{{ $medicine['composition'] }}</p>
            <p class="mt-5 text-justify text-lg font-bold text-primary">Dose:</p>
            <p class="mt-1 text-justify text-lg font-light text-primary">{{ $medicine['dose'] }}</p>
          </div>
        </div>
      </div>
  </section>
@endsection
