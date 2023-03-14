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
  <link rel="stylesheet" type="text/css" href="/css/trix.css">
  <script type="text/javascript" src="/js/trix.js"></script>

  <style>
    /* trix toolbar - non aktif image upload*/
    trix-toolbar [data-trix-button-group="file-tools"] {
      display: none
    }
  </style>

</head>

<body>
  @include('components.navbar')

  <main>
    @yield('content')
  </main>

  @include('components.footer')
  <script src="js/script.js"></script>
</body>

</html>
