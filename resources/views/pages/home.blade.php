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
  <section class="pt-10 pb-24 lg:pt-36 lg:pb-32">
    <div class="container">
      <div class="flex flex-wrap">
        <div class="bayangan hidden w-full self-center rounded-sm border-2 border-primary bg-white p-4 md:block lg:w-1/4">
          {{-- Lottie --}}
          <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
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
                  class="flex w-full items-center justify-between rounded-t-md border border-b-0 border-secondary p-5 text-left font-medium text-gray-500 hover:bg-gray-100 focus:ring-2 focus:ring-secondary"
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
                  <p class="mb-2 text-gray-500">Regular exercise can increase insulin production and sensitivity of the body's cells to insulin. That way, blood sugar levels will be controlled properly, so you can avoid diabetes.</p>
                  <p class="mb-2 text-gray-500">In addition, exercise also helps burn calories to produce energy and store excess glucose as an energy reserve in the form of muscle protein as a reserve so it doesn't accumulate in the blood.</p>
                  <p class="text-gray-500">Do at least <span class="text-secondary">150 minutes</span> of exercise <span class="text-secondary">each week</span>, divided into <span class="text-secondary">5 sessions </span>or days, <span class="text-secondary">30 minutes per session</span>.</p>
                </div>
              </div>
              
              <h2 id="accordion-collapse-heading-2">
                <button type="button"
                  class="flex w-full items-center justify-between border border-b-0 border-secondary p-5 text-left font-medium text-gray-500 hover:bg-gray-100 focus:ring-2 focus:ring-secondary"
                  data-accordion-target="#accordion-collapse-body-2" aria-expanded="false"
                  aria-controls="accordion-collapse-body-2">
                  <span>Is there a Figma file available?</span>
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
                  <p class="mb-2 text-gray-500 dark:text-gray-400">Flowbite is first conceptualized and designed using
                    the Figma software so everything you see in the library has a design equivalent in our Figma file.</p>
                  <p class="text-gray-500 dark:text-gray-400">Check out the <a href="https://flowbite.com/figma/"
                      class="text-blue-600 hover:underline dark:text-blue-500">Figma design system</a> based on the
                    utility classes from Tailwind CSS and components from Flowbite.</p>
                </div>
              </div>

              <h2 id="accordion-collapse-heading-3">
                <button type="button"
                  class="flex w-full items-center justify-between border border-b-0 border-secondary p-5 text-left font-medium text-gray-500 hover:bg-gray-100 focus:ring-2 focus:ring-secondary"
                  data-accordion-target="#accordion-collapse-body-3" aria-expanded="false"
                  aria-controls="accordion-collapse-body-3">
                  <span>What are the differences between Flowbite and Tailwind UI?</span>
                  <svg data-accordion-icon class="h-6 w-6 shrink-0" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                      d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                      clip-rule="evenodd"></path>
                  </svg>
                </button>
              </h2>
              <div id="accordion-collapse-body-3" class="hidden" aria-labelledby="accordion-collapse-heading-3">
                <div class="border border-b-0 border-slate-500 p-5">The main difference is that the core components from
                  Flowbite are open source under the MIT license, whereas Tailwind UI is a paid product. Another
                  difference is that Flowbite relies on smaller and standalone components, whereas Tailwind UI offers
                  sections of pages.</p>
                  <p class="mb-2 text-gray-500 dark:text-gray-400">However, we actually recommend using both Flowbite,
                    Flowbite Pro, and even Tailwind UI as there is no technical reason stopping you from using the best of
                    two worlds.</p>
                  <p class="mb-2 text-gray-500 dark:text-gray-400">Learn more about these technologies:</p>
                  <ul class="list-disc pl-5 text-gray-500 dark:text-gray-400">
                    <li><a href="https://flowbite.com/pro/"
                        class="text-blue-600 hover:underline dark:text-blue-500">Flowbite Pro</a></li>
                    <li><a href="https://tailwindui.com/" rel="nofollow"
                        class="text-blue-600 hover:underline dark:text-blue-500">Tailwind UI</a></li>
                  </ul>
                </div>
              </div>

              <h2 id="accordion-collapse-heading-4">
                <button type="button"
                  class="flex w-full items-center justify-between border border-b-0 border-secondary p-5 text-left font-medium text-gray-500 hover:bg-gray-100 focus:ring-2 focus:ring-secondary"
                  data-accordion-target="#accordion-collapse-body-4" aria-expanded="false"
                  aria-controls="accordion-collapse-body-4">
                  <span>What are the differences between Flowbite and Tailwind UI?</span>
                  <svg data-accordion-icon class="h-6 w-6 shrink-0" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                      d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                      clip-rule="evenodd"></path>
                  </svg>
                </button>
              </h2>
              <div id="accordion-collapse-body-4" class="hidden" aria-labelledby="accordion-collapse-heading-4">
                <div class="border border-b-0 border-slate-500 p-5">The main difference is that the core components from
                  Flowbite are open source under the MIT license, whereas Tailwind UI is a paid product. Another
                  difference is that Flowbite relies on smaller and standalone components, whereas Tailwind UI offers
                  sections of pages.</p>
                  <p class="mb-2 text-gray-500 dark:text-gray-400">However, we actually recommend using both Flowbite,
                    Flowbite Pro, and even Tailwind UI as there is no technical reason stopping you from using the best of
                    two worlds.</p>
                  <p class="mb-2 text-gray-500 dark:text-gray-400">Learn more about these technologies:</p>
                  <ul class="list-disc pl-5 text-gray-500 dark:text-gray-400">
                    <li><a href="https://flowbite.com/pro/"
                        class="text-blue-600 hover:underline dark:text-blue-500">Flowbite Pro</a></li>
                    <li><a href="https://tailwindui.com/" rel="nofollow"
                        class="text-blue-600 hover:underline dark:text-blue-500">Tailwind UI</a></li>
                  </ul>
                </div>
              </div>

              <h2 id="accordion-collapse-heading-5">
                <button type="button"
                  class="flex w-full items-center justify-between border border-b-0 border-secondary p-5 text-left font-medium text-gray-500 hover:bg-gray-100 focus:ring-2 focus:ring-secondary"
                  data-accordion-target="#accordion-collapse-body-5" aria-expanded="false"
                  aria-controls="accordion-collapse-body-5">
                  <span>What are the differences between Flowbite and Tailwind UI?</span>
                  <svg data-accordion-icon class="h-6 w-6 shrink-0" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                      d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                      clip-rule="evenodd"></path>
                  </svg>
                </button>
              </h2>
              <div id="accordion-collapse-body-5" class="hidden" aria-labelledby="accordion-collapse-heading-5">
                <div class="border border-b-0 border-slate-500 p-5">The main difference is that the core components from
                  Flowbite are open source under the MIT license, whereas Tailwind UI is a paid product. Another
                  difference is that Flowbite relies on smaller and standalone components, whereas Tailwind UI offers
                  sections of pages.</p>
                  <p class="mb-2 text-gray-500 dark:text-gray-400">However, we actually recommend using both Flowbite,
                    Flowbite Pro, and even Tailwind UI as there is no technical reason stopping you from using the best of
                    two worlds.</p>
                  <p class="mb-2 text-gray-500 dark:text-gray-400">Learn more about these technologies:</p>
                  <ul class="list-disc pl-5 text-gray-500 dark:text-gray-400">
                    <li><a href="https://flowbite.com/pro/"
                        class="text-blue-600 hover:underline dark:text-blue-500">Flowbite Pro</a></li>
                    <li><a href="https://tailwindui.com/" rel="nofollow"
                        class="text-blue-600 hover:underline dark:text-blue-500">Tailwind UI</a></li>
                  </ul>
                </div>
              </div>

              <h2 id="accordion-collapse-heading-6">
                <button type="button"
                  class="flex w-full items-center justify-between border border-b-0 border-secondary p-5 text-left font-medium text-gray-500 hover:bg-gray-100 focus:ring-2 focus:ring-secondary"
                  data-accordion-target="#accordion-collapse-body-6" aria-expanded="false"
                  aria-controls="accordion-collapse-body-6">
                  <span>What are the differences between Flowbite and Tailwind UI?</span>
                  <svg data-accordion-icon class="h-6 w-6 shrink-0" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                      d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                      clip-rule="evenodd"></path>
                  </svg>
                </button>
              </h2>
              <div id="accordion-collapse-body-6" class="hidden" aria-labelledby="accordion-collapse-heading-6">
                <div class="border border-b-0 border-slate-500 p-5">The main difference is that the core components from
                  Flowbite are open source under the MIT license, whereas Tailwind UI is a paid product. Another
                  difference is that Flowbite relies on smaller and standalone components, whereas Tailwind UI offers
                  sections of pages.</p>
                  <p class="mb-2 text-gray-500 dark:text-gray-400">However, we actually recommend using both Flowbite,
                    Flowbite Pro, and even Tailwind UI as there is no technical reason stopping you from using the best of
                    two worlds.</p>
                  <p class="mb-2 text-gray-500 dark:text-gray-400">Learn more about these technologies:</p>
                  <ul class="list-disc pl-5 text-gray-500 dark:text-gray-400">
                    <li><a href="https://flowbite.com/pro/"
                        class="text-blue-600 hover:underline dark:text-blue-500">Flowbite Pro</a></li>
                    <li><a href="https://tailwindui.com/" rel="nofollow"
                        class="text-blue-600 hover:underline dark:text-blue-500">Tailwind UI</a></li>
                  </ul>
                </div>
              </div>

              <h2 id="accordion-collapse-heading-7">
                <button type="button"
                  class="flex w-full items-center justify-between border border-secondary p-5 text-left font-medium text-gray-500 hover:bg-gray-100 focus:ring-2 focus:ring-secondary"
                  data-accordion-target="#accordion-collapse-body-7" aria-expanded="false"
                  aria-controls="accordion-collapse-body-7">
                  <span>What are the differences between Flowbite and Tailwind UI?</span>
                  <svg data-accordion-icon class="h-6 w-6 shrink-0" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                      d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                      clip-rule="evenodd"></path>
                  </svg>
                </button>
              </h2>
              <div id="accordion-collapse-body-7" class="hidden" aria-labelledby="accordion-collapse-heading-7">
                <div class="border border-t-0 border-slate-500 p-5">The main difference is that the core components from
                  Flowbite are open source under the MIT license, whereas Tailwind UI is a paid product. Another
                  difference is that Flowbite relies on smaller and standalone components, whereas Tailwind UI offers
                  sections of pages.</p>
                  <p class="mb-2 text-gray-500 dark:text-gray-400">However, we actually recommend using both Flowbite,
                    Flowbite Pro, and even Tailwind UI as there is no technical reason stopping you from using the best of
                    two worlds.</p>
                  <p class="mb-2 text-gray-500 dark:text-gray-400">Learn more about these technologies:</p>
                  <ul class="list-disc pl-5 text-gray-500 dark:text-gray-400">
                    <li><a href="https://flowbite.com/pro/"
                        class="text-blue-600 hover:underline dark:text-blue-500">Flowbite Pro</a></li>
                    <li><a href="https://tailwindui.com/" rel="nofollow"
                        class="text-blue-600 hover:underline dark:text-blue-500">Tailwind UI</a></li>
                  </ul>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
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
