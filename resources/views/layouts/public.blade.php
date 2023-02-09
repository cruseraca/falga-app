<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="csrf-token" content="{{ csrf_token() }}" />

  <link rel="canonical" href="<?php echo "https://www.".$_SERVER['HTTP_POST']; ?>" />

  @section('meta_title')
  <title>{{ config("app.name", "Falga") }} Group Indonesia | Falga</title>
  @show
  @section('meta_description')
  <meta name="description" content="Falga Group is Core Emphasis on Business Building through Sustainable Investing">
  @show
  @section('favicon')
  <link rel="icon" type="image/x-icon" href="{{ mix('favicon.ico') }}">
  @show

  <script type="application/json">
    {
      "@context": "https://schema.org",
      "@type": "Corporation",
      "name": "Falga Group",
      "alternateName": "Falga Group Indonesia",
      "url": "https://www.falga.co.id",
      "description": "FALGA GROUP is an Indonesian-incorporated investment holding company founded in 1986 with ownership interests in EPCI Contractor, Oil & Gas Retail, Properties and Industrial Equipment Rental companies. Our Group integrates agile operating models and proactively appraise future business opportunities.",
      "logo": "https://www.falga.co.id/favicon.ico?id=0d95f32e435f832d2df7002f231b65d2",
      "openingHoursSpecification": {
        "@type": "OpeningHoursSpecification",
        "dayOfWeek": [
          "Monday",
          "Tuesday",
          "Wednesday",
          "Thursday",
          "Friday",
          "Saturday",
          "Sunday"
        ],
        "opens": "07:30:00",
        "closes": "21:00:00"
      },
      "sameAs": [
        "https://www.instagram.com/falgagroup/",
        "https://mobile.twitter.com/falgagroup"
      ]
    }
  </script>

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
