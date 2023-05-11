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
        <h2 class="mt-2 text-lg font-light text-primary lg:text-2xl">Medicines.</h2>
      </div>
      <form action="/medicinesPage" method="get">
        <div class="w-full self-center px-4">
          <div class="flex flex-col md:flex-row">
            <input type="text" id="search" name="search" placeholder="search for medicines"
              class="bayangan_field my-2 w-full rounded-sm border-2 border-[#030723] bg-white p-3 focus:outline-none focus:ring focus:ring-blue-500 md:my-4 lg:w-1/2" />
            <button type="submit"
              class="btnnn my-2 mx-3 rounded-sm border-2 border-black bg-black py-3 px-5 text-white duration-300 ease-out hover:bg-white hover:text-black md:my-4">
              Search
            </button>
          </div>
        </div>
      </form>
      @if ($medicines->count())
        <div class="mx-4 mt-2">
          {{ $medicines->links() }}
        </div>
        <div class="mt-5 grid w-full grid-cols-1 flex-wrap gap-5 px-4 md:grid-cols-2 lg:grid-cols-4">
          @foreach ($medicines as $medicine)
            <div class="mb-5 flex flex-col justify-between rounded-sm border-2 border-primary bg-white p-4 shadow-lg">
              <div class="h-[170px] overflow-hidden rounded-sm border-2 border-secondary shadow-lg">
                <img src="https://source.unsplash.com/w8p9cQDLX7I" alt="{{ $medicine['name'] }}"
                  class="h-full w-full object-cover" />
              </div>
              <h3 class="mt-5 mb-3 text-xl font-semibold text-secondary">
                {{ $medicine['name'] }}
              </h3>
              <p class="my-3 text-justify text-primary">Composition: <span
                  class="font-light text-slate-700">{{ $medicine['composition'] }}</span>
              </p>
              <p class="my-3 text-justify text-primary">Dose: <span
                  class="font-light text-slate-700">{{ $medicine['dose'] }}</span>
              </p>
              @foreach ($diseases as $disease)
                @if ($medicine['disease_id'] == $disease['id'])
                  <p class="my-3 text-justify text-primary">This Med is for: <span
                      class="block font-base text-secondary">{{ $disease['diseases'] }}</span>
                  </p>
                @endif
              @endforeach
              <button
                class="w-full place-self-end rounded-sm border-2 border-black bg-black py-3 px-5 text-white duration-300 ease-out hover:bg-white hover:text-black hover:shadow-xl md:my-4">
                <a href="/medicines/{{ $medicine['id'] }}">Detail</a>
              </button>
            </div>
          @endforeach
        </div>
        <div class="mx-4 mt-2">
          {{ $medicines->links() }}
        </div>
      @else
        <div class="mx-4 mt-5 w-full rounded-sm border border-[#BBBBBB] bg-white p-3">
          <h1 class="mt-2 mb-4 text-center text-lg font-light text-primary lg:text-2xl">Medicines Not Found.</h1>
        </div>
      @endif
    </div>
  </section>
@endsection
