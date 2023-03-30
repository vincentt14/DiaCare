<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  @vite('resources/css/app.css')

  <title>DiaCare</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

  {{-- trix --}}
  {{-- <link rel="stylesheet" type="text/css" href="/css/trix.css">
  <script type="text/javascript" src="/js/trix.js"></script> --}}

  {{-- <style>
    /* trix toolbar - non aktif image upload*/
    trix-toolbar [data-trix-button-group="file-tools"] {
      display: none
    }
  </style> --}}

</head>

<body>
  @include('components.navbar')

  <main>
    <section class="pt-28 pb-24 lg:pt-36 lg:pb-32">
      <div class="container">
        <div class="w-full self-center px-4">
          <h1 class="text-base font-medium text-primary md:text-xl">
            Welcome to
            <p class="mt-1 block text-4xl font-bold text-secondary lg:text-5xl">Dia<span
                class="text-primary">Care</span>.
            </p>
          </h1>
          <h2 class="mb-5 mt-2 text-lg font-light text-primary lg:text-2xl">Dashboard. <span
              class="font-bold">Admin</span>
          </h2>
        </div>
        <div class="w-full self-center px-4">
          <h1 class="text-2xl font-bold text-primary lg:text-3xl">
          </h1>
          <div class="mt-5">
            <div
              class="bayangan_field mx-auto mb-6 grid max-w-xl p-3 divide-x-2 grid-cols-3 border-2 border-black bg-white py-2md:max-w-2xl">
              <div class="font-base text-lg text-secondary flex items-center justify-center md:text-xl hover:text-primary">
                <a href="/symptoms">
                  Symptoms
                </a>
              </div>
              <div class="font-base text-lg text-secondary flex items-center justify-center md:text-xl hover:text-primary">
                <a href="/admin/diseases">
                  Diseases
                </a>
              </div>
              <div class="font-base text-lg text-secondary flex items-center justify-center md:text-xl hover:text-primary">
                <a href="/admin/medicines">
                  Medicines
                </a>
              </div>
            </div>

            @yield('content')

          </div>
        </div>
      </div>
    </section>
  </main>

  @include('components.footer')
  <script src="js/script.js"></script>
</body>

</html>
