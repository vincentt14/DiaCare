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
        <div class="mb-5">
          <h4 class="mb-2 text-lg font-semibold text-secondary">What is</h4>
          <div class="flex justify-between">
            <div>
              <h2 class="mt-1 mb-4 text-4xl font-bold text-primary lg:text-5xl">Diabetes?</h2>
              <p class="text-md font-mono font-medium text-slate-500 lg:text-lg">
                Also called: <span class="text-secondary">diabetes mellitus</span>
              </p>
            </div>
            <button type="button"
            class="btnn my-5 mx-3 rounded-sm border-2 border-black bg-black py-3 px-5 text-white duration-300 ease-out hover:bg-white hover:text-black">
            <a href="#prevent">How to Prevent</a>
          </button>
          </div>
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
          @for ($i = 1; $i < count($disease); $i++)
            <button id="warna" class="mb-0 rounded-sm border-2 bg-black py-3 px-3 text-white"
              onclick="changeType({{ $i }})">
              <p class="text-xs md:text-base">{{ $disease[$i]['type'] }}</p>
            </button>
          @endfor
        </div>
      </div>
      <div id="typee"></div>
    </div>
  </section>
  <section id="prevent" class="pt-16 pb-24 lg:pt-32 lg:pb-32">
    <div class="container">
      <div class="flex flex-wrap">
        <div class="bayangan hidden w-full self-center rounded-sm border-2 border-primary bg-white p-4 md:block lg:w-1/4">
          {{-- Lottie --}}
          {{-- <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script> --}}
          <lottie-player src="https://assets6.lottiefiles.com/private_files/lf30_hz2bzpsx.json" background="transparent"
            speed="1" style="width: 300px; height: 300px;" loop autoplay class="mx-auto"></lottie-player>
        </div>
        <div class="w-full self-center pl-8 pr-4 lg:w-3/4">
          <div class="w-full px-4">
            <div class="mb-5 max-w-xl">
              <h4 class="mb-2 text-lg font-semibold text-secondary">How to</h4>
              <h2 class="mt-1 mb-4 text-4xl font-bold text-primary lg:text-5xl">Prevent Diabetes?</h2>
            </div>
            {{-- FlowBite Accordion --}}
            <div id="accordion-collapse" data-accordion="collapse">
              <h2 id="accordion-collapse-heading-1">
                <button type="button"
                  class="flex w-full items-center justify-between rounded-t-md border border-b-0 border-secondary p-5 text-left font-medium text-gray-500 hover:bg-slate-100 focus:ring-2 focus:ring-secondary"
                  data-accordion-target="#accordion-collapse-body-1" aria-expanded="true"
                  aria-controls="accordion-collapse-body-1">
                  <span>Workout Routine</span>
                  <svg data-accordion-icon class="h-6 w-6 shrink-0 rotate-180" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                      d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                      clip-rule="evenodd"></path>
                  </svg>
                </button>
              </h2>
              <div id="accordion-collapse-body-1" class="hidden" aria-labelledby="accordion-collapse-heading-1">
                <div class="border border-b-0 border-slate-500 p-5">
                  <p class="mb-2 text-gray-500">Regular exercise can increase insulin production and sensitivity of the
                    body's cells to insulin. That way, blood sugar levels will be controlled properly, so you can avoid
                    diabetes.</p>
                  <p class="mb-2 text-gray-500">In addition, exercise also helps burn calories to produce energy and store
                    excess glucose as an energy reserve in the form of muscle protein as a reserve so it doesn't
                    accumulate in the blood.</p>
                  <p class="text-gray-500">Do at least <span class="text-secondary">150 minutes</span> of exercise <span
                      class="text-secondary">each week</span>, divided into <span class="text-secondary">5 sessions
                    </span>or days, <span class="text-secondary">30 minutes per session</span>.</p>
                </div>
              </div>

              <h2 id="accordion-collapse-heading-2">
                <button type="button"
                  class="flex w-full items-center justify-between border border-b-0 border-secondary p-5 text-left font-medium text-gray-500 hover:bg-slate-100 focus:ring-2 focus:ring-secondary"
                  data-accordion-target="#accordion-collapse-body-2" aria-expanded="false"
                  aria-controls="accordion-collapse-body-2">
                  <span>Maintaining Body Weight remains Ideal</span>
                  <svg data-accordion-icon class="h-6 w-6 shrink-0" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                      d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                      clip-rule="evenodd"></path>
                  </svg>
                </button>
              </h2>
              <div id="accordion-collapse-body-2" class="hidden" aria-labelledby="accordion-collapse-heading-2">
                <div class="border border-b-0 border-slate-500 p-5">
                  <p class="mb-2 text-gray-500">Obesity is one of the main causes of diabetes. This is because obesity
                    disrupts the work of metabolism so that the body's cells are unable to respond optimally to insulin.
                  </p>
                  <p class="text-gray-500">Therefore, the next tips for preventing diabetes naturally is to <span
                      class="text-secondary"> maintain an ideal body weight</span>. Also pay attention to the <span
                      class="text-secondary">intake of carbohydrates and sugar</span> that enter the body to avoid
                    obesity.</p>
                </div>
              </div>

              <h2 id="accordion-collapse-heading-3">
                <button type="button"
                  class="flex w-full items-center justify-between border border-b-0 border-secondary p-5 text-left font-medium text-gray-500 hover:bg-slate-100 focus:ring-2 focus:ring-secondary"
                  data-accordion-target="#accordion-collapse-body-3" aria-expanded="false"
                  aria-controls="accordion-collapse-body-3">
                  <span>Implement a Healthy Diet</span>
                  <svg data-accordion-icon class="h-6 w-6 shrink-0" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                      d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                      clip-rule="evenodd"></path>
                  </svg>
                </button>
              </h2>
              <div id="accordion-collapse-body-3" class="hidden" aria-labelledby="accordion-collapse-heading-3">
                <div class="border border-b-0 border-slate-500 p-5">
                  <p class="mb-2 text-gray-500">How to prevent diabetes early should also be accompanied by the adoption
                    of a healthy diet. Try to <span class="text-secondary">reduce fast food, high sugar and fat</span>.
                    Start<span class="text-secondary"> choosing foods with high nutritional content, such as protein,
                      fiber and vitamins</span>.
                  </p>
                </div>
              </div>

              <h2 id="accordion-collapse-heading-4">
                <button type="button"
                  class="flex w-full items-center justify-between border border-b-0 border-secondary p-5 text-left font-medium text-gray-500 hover:bg-slate-100 focus:ring-2 focus:ring-secondary"
                  data-accordion-target="#accordion-collapse-body-4" aria-expanded="false"
                  aria-controls="accordion-collapse-body-4">
                  <span>Check Blood Sugar Routinely</span>
                  <svg data-accordion-icon class="h-6 w-6 shrink-0" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                      d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                      clip-rule="evenodd"></path>
                  </svg>
                </button>
              </h2>
              <div id="accordion-collapse-body-4" class="hidden" aria-labelledby="accordion-collapse-heading-4">
                <div class="border border-b-0 border-slate-500 p-5">
                  <p class="mb-2 text-gray-500">Regular blood sugar checks are necessary to see the value of blood sugar
                    levels in the body. By doing regular checks, you can monitor the condition of your sugar levels and
                    detect diabetes earlier.
                  </p>
                  <p class="text-gray-500">Can be done <span class="text-secondary">once a year if you are in
                      good health and not at high risk of diabetes</span>. However, <span class="text-secondary">if you
                      have a
                      history of diabetes and are at high risk of developing it</span>, it is recommended to have more
                    <span class="text-secondary">frequent checks</span>.
                  </p>
                </div>
              </div>

              <h2 id="accordion-collapse-heading-5">
                <button type="button"
                  class="flex w-full items-center justify-between border border-b-0 border-secondary p-5 text-left font-medium text-gray-500 hover:bg-slate-100 focus:ring-2 focus:ring-secondary"
                  data-accordion-target="#accordion-collapse-body-5" aria-expanded="false"
                  aria-controls="accordion-collapse-body-5">
                  <span>Managing Stress</span>
                  <svg data-accordion-icon class="h-6 w-6 shrink-0" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                      d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                      clip-rule="evenodd"></path>
                  </svg>
                </button>
              </h2>
              <div id="accordion-collapse-body-5" class="hidden" aria-labelledby="accordion-collapse-heading-5">
                <div class="border border-b-0 border-slate-500 p-5">
                  <p class="mb-2 text-gray-500">When <span class="text-secondary">stressed</span>, the body will release
                    the <span class="text-secondary">hormone cortisol which can increase blood sugar levels</span>.
                    Therefore, one way to prevent diabetes is to manage stress well.
                  </p>
                </div>
              </div>

              <h2 id="accordion-collapse-heading-6">
                <button type="button"
                  class="flex w-full items-center justify-between border border-b-0 border-secondary p-5 text-left font-medium text-gray-500 hover:bg-slate-100 focus:ring-2 focus:ring-secondary"
                  data-accordion-target="#accordion-collapse-body-6" aria-expanded="false"
                  aria-controls="accordion-collapse-body-6">
                  <span>Maintaining Optimal Levels of Vitamin D</span>
                  <svg data-accordion-icon class="h-6 w-6 shrink-0" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                      d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                      clip-rule="evenodd"></path>
                  </svg>
                </button>
              </h2>
              <div id="accordion-collapse-body-6" class="hidden" aria-labelledby="accordion-collapse-heading-6">
                <div class="border border-b-0 border-slate-500 p-5">
                  <p class="mb-2 text-gray-500">This vitamin can <span class="text-secondary">increase the body's
                      sensitivity to insulin</span>. That way,
                    the risk of insulin resistance will decrease.
                  </p>
                  <p class="text-gray-500">Some food sources that have <span class="text-secondary">high vitamin
                      D</span> content include <span class="text-secondary">salmon, yogurt and fruits such as
                      avocados</span>.</p>
                </div>
              </div>

              <h2 id="accordion-collapse-heading-7">
                <button type="button"
                  class="flex w-full items-center justify-between border border-secondary p-5 text-left font-medium text-gray-500 hover:bg-slate-100 focus:ring-2 focus:ring-secondary"
                  data-accordion-target="#accordion-collapse-body-7" aria-expanded="false"
                  aria-controls="accordion-collapse-body-7">
                  <span>Stopping Smoking Habits</span>
                  <svg data-accordion-icon class="h-6 w-6 shrink-0" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                      d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                      clip-rule="evenodd"></path>
                  </svg>
                </button>
              </h2>
              <div id="accordion-collapse-body-7" class="hidden" aria-labelledby="accordion-collapse-heading-7">
                <div class="border border-t-0 border-slate-500 p-5">
                  <p class="mb-2 text-gray-500">Facts on the ground show that type 2 diabetes is experienced by many
                    smokers. If someone actively smokes, he has a <span class="text-secondary">higher risk of diabetes by
                      44% than non-smokers</span>.
                  </p>
                  <p class="text-gray-500">This risk can <span class="text-secondary">increase by 61%</span> if
                    cigarette consumption reaches <span class="text-secondary">more than 20 cigarettes per day</span>.
                    So, if you actively smoke, then the most effective way to prevent
                    diabetes is to stop the habit.</p>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script>
    const diseases = @json($disease);
    const typee = document.getElementById('typee');
    
    const changeType = (id) => {
      typee.innerHTML = "";
      
      typee.innerHTML += `
        <div class="container mt-5">
          <div class="w-full rounded-sm border border-[#BBBBBB] bg-white p-3">
            <div class="m-3">
              <p class="font-base mb-3 text-lg text-primary lg:text-2xl">${diseases[id].diseases}</p>
              <p class="text-justify text-lg font-light text-primary">${diseases[id].description}</p>
            </div>
            <button class="btnnn m-3 rounded-sm border-2 border-black bg-black py-2 px-5 text-white duration-300 ease-out hover:bg-white hover:text-black">
            <a href="/diseases/${diseases[id].id}">Detail ${diseases[id].diseases}</a>
          </button>
          </div>
        </div>
      `;
    }
  </script>
@endsection
