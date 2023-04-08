{{-- @dd($disease); --}}
{{-- @dd($user); --}}

@extends('layouts.app')

@section('content')
  <section class="pt-28 pb-24 lg:pt-36 lg:pb-32">
    <div class="container">
      <div class="flex flex-wrap">
        <div class="w-full self-center px-4 lg:w-1/2">
          <h1 class="text-base font-medium text-primary md:text-xl">
            Welcome to
            <p class="mt-1 block text-4xl font-bold text-secondary lg:text-5xl">Dia<span class="text-primary">Care</span>.
            </p>
          </h1>
          <h2 class="mb-2 mt-2 text-lg font-light text-primary lg:text-2xl">A place that provides all about Diabetes
            Mellitus.</h2>
          <div class="mb-2 flex items-center">
            <h2 class="mb-1 text-lg font-light text-primary lg:text-2xl">You can &ZeroWidthSpace;</h2>
            <h2 class="typewrite"></h2>
          </div>
          <p class="mb-3 max-w-md text-slate-500">
            "A positive mindset can overcome the most dire of situations."
            <span class="mt-1 block text-secondary">- Scott Earle.</span>
          </p>
          <div class="flex flex-col md:flex-row">
            <button
              class="btnn mb-5 rounded-sm border-2 border-black bg-black py-3 px-8 text-white duration-300 ease-out hover:bg-white hover:text-black focus:outline-none focus:ring focus:ring-blue-500 lg:mb-8">
              <a href="#definition">What is Diabetes?</a>
            </button>
            <button
              class="btnn mb-5 rounded-sm border-2 border-black bg-black py-3 px-8 text-white duration-300 ease-out hover:bg-white hover:text-black focus:outline-none focus:ring focus:ring-blue-500 md:ml-10 lg:mb-8">
              <a href="/diagnose">Diagnose</a>
            </button>
          </div>
          @if (auth()->user() == null)
            <p class="mb-3 max-w-md text-slate-500">
              To get <span class="font-bold text-primary">Dashboard</span> feature you have to <a href="/login"
                class="font-bold text-secondary">Login.</a>
            </p>
          @elseif (auth()->user() !== null && auth()->user()->is_admin == 1)
            <p class="mb-3 max-w-md text-slate-500">
              Wellcome back <span class="font-bold uppercase text-primary">{{ auth()->user()->name }}</span>. Go to <a
                href="/adminDashboard" class="font-bold capitalize text-secondary">{{ auth()->user()->name }}'s
                Dashboard</a>.
            </p>
          @elseif (auth()->user() !== null)
            <p class="mb-3 max-w-md text-slate-500">
              Wellcome back <span class="font-bold uppercase text-primary">{{ auth()->user()->name }}</span>. Go to <a
                href="/dashboard" class="font-bold capitalize text-secondary">{{ auth()->user()->name }}'s dashboard</a>.
            </p>
          @endif
          @include('components.userInfo')
        </div>
        <div
          class="bayangan hidden w-full self-center rounded-sm border-2 border-primary bg-white px-4 md:block lg:w-1/2">
          {{-- Lottie --}}
          <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
          <lottie-player src="https://assets3.lottiefiles.com/packages/lf20_QU0V6MuXdA.json" background="transparent"
            speed="1" style="width: 400px; height: 400px;" loop autoplay class="mx-auto"></lottie-player>
        </div>
      </div>
    </div>
  </section>
  <section id="definition" class="bg-[#f2f6fc] pb-16 pt-32 lg:pb-28">
    <div class="container">
      <div class="w-full px-4">
        <div class="mb-5 max-w-xl">
          <h4 class="mb-2 text-lg font-semibold text-secondary">What is</h4>
          <h2 class="mt-1 mb-4 text-4xl font-bold text-primary lg:text-5xl">Diabetes?</h2>
          <p class="text-md font-mono font-medium text-slate-500 lg:text-lg">
            Also called: <span class="text-secondary">diabetes mellitus</span>
          </p>
        </div>
        <p class="text-justify text-lg font-light text-primary">Diabetes is a chronic (long-lasting) health condition that
          affects how your body turns food into energy. <br></br>

          Your body breaks down most of the food you eat into sugar (glucose) and releases it into your bloodstream. When
          your blood sugar goes up, it signals your pancreas to release insulin. Insulin acts like a key to let the blood
          sugar into your body’s cells for use as energy. <br></br>

          With diabetes, your body doesn’t make enough insulin or can’t use it as well as it should. When there isn’t
          enough insulin or cells stop responding to insulin, too much blood sugar stays in your bloodstream. Over time,
          that can cause serious health problems, such as heart disease, vision loss, and kidney disease.
        <p>
      </div>
      <div class="container">
        <div class="mt-10 grid grid-cols-3">
          @for ($i = 0; $i < count($disease); $i++)
            <button id="warna" class="mb-6 rounded-sm border-2 bg-black py-3 px-3 text-white"
              onclick="changeType({{ $i }})">
              <p class="text-xs md:text-base">{{ $disease[$i]['type'] }}</p>
            </button>
          @endfor
        </div>
      </div>
      <div id="typee"></div>
    </div>
  </section>

  <script>
    const a = @json($disease);
    const typee = document.getElementById('typee');
    const warna = document.getElementById('warna');
    console.log(warna);

    const changeColor = (id) => {
      warna.className = 'warna';
    }

    const changeType = (id) => {
      typee.innerHTML = "";

      typee.innerHTML += `
        <div class="container">
          <div class="w-full rounded-sm border border-[#BBBBBB] bg-white p-3">
            <div class="m-3">
              <p class="font-base mb-3 text-lg text-primary lg:text-2xl">${a[id].diseases}</p>
              <p class="text-justify text-lg font-light text-primary">${a[id].description}</p>
            </div>
          </div>
        </div>
      `;
    }
  </script>
@endsection
