<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  @vite('resources/css/app.css')

  <link rel="shortcut icon" href="{{ asset('favicon.png') }}" />
  <title>DiaCare</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
</head>

<body>
  @include('components.navbar')

  @if (session()->has('success'))
    <div
      class="sticky left-1/2 top-20 z-20 flex min-h-[50px] w-[300px] -translate-x-1/2 justify-between gap-x-4 bg-secondary px-5 pt-3.5 pb-4 text-white">
      <p>{{ session('success') }}</p>
      <button class="h-fit hover:text-white/75" onclick="this.parentNode.parentNode.removeChild(this.parentNode)">
        X
      </button>
    </div>
  @elseif(session()->has('error'))
    <div
      class="sticky left-1/2 top-20 z-20 flex min-h-[50px] w-[300px] -translate-x-1/2 justify-between gap-x-4 bg-red-500 px-5 pt-3.5 pb-4 text-white">
      <p>{{ session('error') }}</p>
      <button class="h-fit hover:text-white/75" onclick="this.parentNode.parentNode.removeChild(this.parentNode)">
        X
      </button>
    </div>
  @endif
  <main>
    @yield('content')
  </main>

  @include('components.footer')
  <script src="js/script.js"></script>
  @vite('resources/js/app.js')
</body>

</html>
