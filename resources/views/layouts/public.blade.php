<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="csrf-token" content="{{ csrf_token() }}" />

  <title>{{ config("app.name", "Falga") }}</title>
  @section('meta_description')
  <meta name="description" content="Core Emphasis on Business Building through Sustainable Investing">
  @show
  @section('favicon')
  <link rel="icon" type="image/x-icon" href="{{ mix('favicon.ico') }}">
  @show

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  {{-- <link href="https://fonts.googleapis.com/css2?family=Istok+Web:wght@400;700&family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet" /> --}}

  <link rel="preload" href="https://fonts.googleapis.com/css2?family=Istok+Web:wght@400;700&family=Poppins:wght@300;400;600;700&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'" />
  <noscript>
    <link href="https://fonts.googleapis.com/css2?family=Istok+Web:wght@400;700&family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet" />
  </noscript>

  <link rel="prefetch" href="{{ mix('img/logo-falga.svg') }}" />

  <!-- Scripts -->
  <script src="{{ mix('js/app.js') }}" defer></script>

  <!-- Styles -->
  <link rel="stylesheet" href="{{ mix('css/app.css') }}" />

  <!-- push target to head -->
  @stack('styles')
</head>

<body>
  @livewire('components.navbar-flowbite')
  <div>
    {{ $slot }}
  </div>
  @livewire('components.footer')
  <script src="{{ mix('lib/js/jquery.min.min.js') }}"></script>
  <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/lozad/dist/lozad.min.js"></script>
  @stack('scripts')
</body>
</html>
