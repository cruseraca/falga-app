@push('styles')
<link href="{{ asset('css/home.css') }}" rel="stylesheet">
@endpush
@section('meta_description')
<meta name="description" content="Core Emphasis on Business Building through Sustainable Investing">
@overwrite
{{-- Hero --}}
<div class="sm:w-full bg-no-repeat bg-cover bg-top flex mt-[61px] md:mt-[77px] relative">
  <picture class="top-0 left-0 z-0 absolute w-full h-full">
    <source media="(min-width:1280px)" srcset="{{ asset('img/hero-image-2.1536.jpg') }}" class="w-full h-full" />
    <source media="(min-width:1024px)" srcset="{{ asset('img/hero-image-2.1280.jpg') }}" class="w-full h-full" />
    <source media="(min-width:768px)" srcset="{{ asset('img/hero-image-2.1024.jpg') }}" class="w-full h-full" />
    <source media="(min-width:640px)" srcset="{{ asset('img/hero-image-2.768.jpg') }}" class="w-full h-full" />
    <source media="(min-width:412px)" srcset="{{ asset('img/hero-image-2.640.jpg') }}" class="w-full h-full" />
    <source media="(min-width:0)" srcset="{{ asset('img/hero-image-2.412.jpg') }}" class="w-full h-full" />
    <img alt="" src="{{ asset('img/hero-image-2.jpg') }}" class="object-cover object-top w-full h-full" />
  </picture>
  <div class="falga-container relative z-10 text-center h-[400px] lg:h-[766px] text-white flex flex-col justify-end items-center uppercase" style="margin-bottom: 80px">
    <h1 class="font-poppins font-extrabold lg:text-4xl max-w-3xl lg:leading-relaxed">
      Core Emphasis on Business Building through Sustainable Investing
    </h1>
    <a href="{{ url("about-us") }}" class="falga-button mt-8 uppercase" style="padding-left: 28px">Learn More <svg style="width:24px;height:24px" viewBox="0 0 24 24">
        <path fill="currentColor" d="M10,17L15,12L10,7V17Z" />
      </svg>
    </a>
  </div>
</div>
{{-- Falga at glance --}}
<div class="text-center mt-12 md:mt-14">
  <p class="falga-section-title uppercase">
    Our Business Pillars
  </p>
</div>
<div class="home-glance">
  <a href="{{ url("about-us") }}" class="home-glance-image">
    <img class="lozad" alt="at glance" data-src="{{ asset('img/homepage/at-glance-1.png') }}" />
  </a>
  <a href="{{ url("epci-business") }}" class="home-glance-item home-glance-epci-business">
    <img class="lozad" alt="EPCI Business" data-src="{{ asset('img/homepage/epci-business-n.png') }}" class="home-glance-epci-business-img" />
  </a>
  <a href="{{ url("industrial-rental") }}" class="home-glance-item home-glance-industrial-rental">
    <img class="lozad" alt="industrial rental" data-src="{{ asset('img/homepage/industrial-rental-n.png') }}" />
  </a>
  <a href="{{ url("prop-business") }}" class="home-glance-item home-glance-property-hospitality">
    <img class="lozad" alt="property & hospitality" data-src="{{ asset('img/homepage/property-hospitality-n.png') }}" />
  </a>
  <a href="{{ url("oil-and-gas-business") }}" class="home-glance-item home-glance-oil-gas-rental">
    <img class="lozad" alt="oil & gas retail" data-src="{{ asset('img/homepage/oil-gas-rental-n.png') }}" />
  </a>
  <a href="{{ url("future-business") }}" class="home-glance-item home-glance-future-business">
    <img class="lozad" alt="future bussiness" data-src="{{ asset('img/homepage/future-bussiness-n.png') }}" />
  </a>
</div>
<div class="max-w-screen flex flex-col mx-auto my-6 md:my-20 font-poppins">
  <div class="flex flex-col divide-y px-6 md:flex-row md:divide-x md:divide-y-0 divide-red-falga font-sans text-sm md:text-base">
    <div class="py-6 md:basis-1/2 md:py-6 md:pr-10 md:pl-40 text-justify">
      <strong class="text-red-falga">FALGA GROUP</strong> is an Indonesian-incorporated
      investment holding company founded in 1986 with ownership interests
      in EPCI Contractor, Oil & Gas Retail, Properties and Industrial
      Equipment Rental companies. Our Group integrates agile operating
      models and proactively appraise future business opportunities.
    </div>
    <div class="py-6 md:basis-1/2 md:py-6 md:pl-10 md:pr-40 text-justify">
      <strong class="text-red-falga">FALGA GROUP</strong> core priorities are building viable
      large-scale businesses that can stand against industry disruptions
      and economic shocks through organizational agility and resilience.
      Our Group strives to expand our diversified business portfolio by
      mobilizing investment for further sustainable development.
    </div>
  </div>
</div>
{{-- Information --}}
<div class="container mx-auto my-10 sm:my-20">
  <div class="text-center my-10 px-4">
    <p class="falga-section-title">
      OUR FOCUS ON INDONESIA ECONOMIC PROSPECT
    </p>
  </div>
  <div class="flex flex-col sm:flex-row justify-between gap-4 px-20 sm:px-0">
    <div class="flex flex-col w-auto rounded-lg border py-5 shadow-box text-center">
      <div class="my-auto mx-6 xl:mx-16">
        <p class="font-black text-md">GDP per Capita (2021)</p>
        <p class="font-black text-2xl my-3 text-red-falga">$ 4,291</p>
        <p class="font-black text-xs">The Highest in South-East Asia</p>
        <p class="font-light text-xs">Source: World Bank</p>
      </div>
    </div>
    <div class="flex flex-col w-auto rounded-lg border py-5 px-2 shadow-box text-center">
      <div class="my-auto mx-6 xl:mx-16">
        <p class="font-black text-md">GDP Growth (2Q2022, yoy)</p>
        <p class="font-black text-2xl my-3 text-red-falga">5,44%</p>
        <p class="font-black text-xs">
          Stronger than numerous countries*
        </p>
        <p class="font-light text-xs">Source: World Bank</p>
      </div>
    </div>
    <div class="flex flex-col w-auto rounded-lg border py-5 px-2 shadow-box text-center">
      <div class="my-auto mx-6 xl:mx-16">
        <p class="font-black text-md">Internet Users (Jan 2022)</p>
        <p class="font-black text-2xl my-3 text-red-falga">204,7 M</p>
        <p class="font-black text-xs">
          Increased 2,1 million (1,0%) yoy
        </p>
        <p class="font-light text-xs">Source: Data Reportal</p>
      </div>
    </div>
    <div class="flex flex-col w-auto rounded-lg border py-5 px-2 shadow-box text-center">
      <div class="my-auto mx-6 xl:mx-16">
        <p class="font-black text-md">Population (2021)</p>
        <p class="font-black text-2xl my-3 text-red-falga">273 M</p>
        <p class="font-black text-xs">4th Highest in the World</p>
        <p class="font-light text-xs">Source: Worldometers</p>
      </div>
    </div>
  </div>
  <div class="flex flex-col sm:flex-row justify-between my-4 sm:my-10 gap-4 px-20 sm:px-0">
    <div class="flex flex-col w-auto rounded-lg border py-5 px-2 shadow-box text-center">
      <div class="my-auto mx-6 xl:mx-16">
        <p class="font-black text-md">
          Trade Balance<br />
          (Jun 2022)
        </p>
        <p class="font-black text-2xl my-3 text-red-falga">$ 24,89 B</p>
        <p class="font-black text-xs">Increased $ 13,05 B yoy</p>
        <p class="font-light text-xs">Source: BPS Indonesia</p>
      </div>
    </div>
    <div class="flex flex-col w-auto sm:w-1/4 rounded-lg border py-5 px-2 shadow-box text-center">
      <div class="my-auto mx-6 xl:mx-16">
        <p class="font-black text-md">
          Population below<br />40 years old (2021)
        </p>
        <p class="font-black text-2xl my-3 text-red-falga">64,68%</p>
        <p class="font-black text-xs">Which equal to 176 million</p>
        <p class="font-light text-xs">Source: BPS Indonesia</p>
      </div>
    </div>
    <div class="flex flex-col w-auto rounded-lg border py-5 px-2 shadow-box text-center">
      <div class="my-auto mx-6 xl:mx-16">
        <p class="font-black text-md">Digital Economy (2021)</p>
        <p class="font-black text-2xl my-3 text-red-falga">$ 70 B</p>
        <p class="font-black text-xs">Highest in South-East Asia</p>
        <p class="font-light text-xs">
          Source: Google, Temasek, and Bain
        </p>
      </div>
    </div>
    <div class="flex flex-col w-auto rounded-lg border py-5 px-2 shadow-box text-center">
      <div class="my-auto mx-6 xl:mx-16">
        <p class="font-black text-md">
          Infrastructure Development<br />
          (2016-2022)
        </p>
        <p class="font-black text-2xl my-3 text-red-falga">$ 54,6 B</p>
        <p class="font-light text-xs">
          exchange rate by Nov 23, 2022 ($1 = IDR 15.706)
        </p>
        <p class="font-black text-xs">
          Has been invested to 135<br />
          National Strategic Projects
        </p>
        <p class="font-light text-xs">
          Source: Coordinating Ministry for Economic Affairs RI
        </p>
      </div>
    </div>
  </div>
  <div class="text-xs mx-10 sm:mx-0">
    *) including USA, Singapore, South Korea, China, Taiwan, etc
  </div>
</div>
{{-- Slider Our Business --}}
<div class="sm:container mx-auto sm:my-20 sm:px-6">
  <div class="text-center mt-14 sm:mt-28 mb-12 sm:mb-14">
    <p class="falga-section-title uppercase">
      Our Business
    </p>
  </div>
  <div class="sm:relative flex">
    <div class="flex absolute invisible sm:visible left-0 top-1/2 sm:-translate-x-1/2 sm:-translate-y-1/2 carousel-button-left cursor-pointer">
      <span class="fa-stack fa-xl my-auto">
        <i class="fa-solid fa-circle fa-stack-2x text-purple-falga"></i>
        <i class="fa-solid fa-angle-left fa-stack-1x text-white"></i>
      </span>
    </div>
    <div class="flex absolute invisible sm:visible right-0 top-1/2 sm:translate-x-1/2 sm:-translate-y-1/2 carousel-button-right cursor-pointer">
      <span class="fa-stack fa-xl my-auto">
        <i class="fa-solid fa-circle fa-stack-2x text-purple-falga"></i>
        <i class="fa-solid fa-angle-right fa-stack-1x text-white"></i>
      </span>
    </div>
    <div class="carousel sm:w-[85%] mx-auto w-screen">
      <div class="carousel-cell w-2/3 sm:w-[30%] mx-1 sm:mx-4 rounded-xl flex overflow-hidden">
        <a href="{{ url("epci-business") }}" class="h-full w-full">
          <img data-src="{{ asset('img/slider/image-7-progressive.jpeg') }}" alt="EPCI Business" class="lozad h-full w-full object-cover object-center">
        </a>
        <div class="absolute bottom-10 inset-x-0 text-white text-center text-lg p-2 bg-black/20">
          <p>Engineering, Procurement, Construction, and Installation (EPCI)</p>
        </div>
      </div>
      <div class="carousel-cell w-2/3 sm:w-[30%] mx-1 sm:mx-4 rounded-xl flex overflow-hidden">
        <a href="{{ url("oil-and-gas-business") }}" class="h-full w-full">
          <img data-src="{{ asset('img/slider/pom-bensin-progressive.jpeg') }}" alt="Oil & Gas Retail" class="lozad h-full w-full object-cover object-center-bottom" />
        </a>
        <div class="absolute bottom-10 inset-x-0 text-white text-center text-lg p-2 bg-black/20">
          <p>Oil & Gas Retail</p>
        </div>
      </div>
      <div class="carousel-cell w-2/3 sm:w-[30%] mx-1 sm:mx-4 rounded-xl flex overflow-hidden">
        <a href="{{ url("industrial-rental") }}" class="h-full w-full">
          <img data-src="{{ asset('img/slider/industrial-progressive.jpeg') }}" alt="Industrial Equipment Rental" class="lozad h-full w-full object-cover object-center-bottom" />
        </a>
        <div class="absolute bottom-10 inset-x-0 text-white text-center text-lg p-2 bg-black/20">
          <p>Industrial Equipment Rental</p>
        </div>
      </div>
      <div class="carousel-cell w-2/3 sm:w-[30%] mx-1 sm:mx-4 rounded-xl flex overflow-hidden">
        <a href="{{ url("future-business") }}" class="h-full w-full">
          <img data-src="{{ asset('img/slider/future-progressive.jpeg') }}" alt="Future Bussiness" class="lozad h-full w-full object-fill" />
        </a>
        <div class="absolute bottom-10 inset-x-0 text-white text-center text-lg p-2 bg-black/20">
          <p>Future Bussiness</p>
        </div>
      </div>
      <div class="carousel-cell w-2/3 sm:w-[30%] mx-1 sm:mx-4 rounded-xl flex overflow-hidden">
        <a href="{{ url("prop-business") }}" class="h-full w-full">
          <img data-src="{{ asset('img/slider/property-progressive.jpeg') }}" alt="Property & Hospitality" class="lozad h-full w-full object-fill" />
        </a>
        <div class="absolute bottom-10 inset-x-0 text-white text-center text-lg p-2 bg-black/20">
          <p>Property & Hospitality</p>
        </div>
      </div>
    </div>
  </div>
  <div class="text-center my-10 flex justify-center">
    <a href="{{ url("our-business") }}" class="falga-button mt-8 uppercase">See All Business</a>
  </div>
</div>
{{-- Clients & Partners --}}
<div class="falga-container text-center my-4 sm:my-8">
  <p class="falga-section-title uppercase">
    Clients & Partners
  </p>
</div>
<div class="falga-container home-partners-container my-8 md:mt-12">
  <div class="home-partners">
    <div class="home-partners-row">
      <img data-src="{{ asset('img/logo/logo-pertamina.png') }}" alt="pertamina" class="lozad home-partners-items home-partners-items-pertamina" />
      <img data-src="{{ asset('img/logo/logo-schneider.png') }}" alt="schneider" class="lozad home-partners-items home-partners-items-schneider" />
    </div>
    <div class="home-partners-row">
      <img data-src="{{ asset('img/logo/logo-pgn.png') }}" alt="pgn" class="lozad home-partners-items home-partners-items-pgn" />
      <img data-src="{{ asset('img/logo/logo-wika.png') }}" alt="wika" class="lozad home-partners-items home-partners-items-wika" />
      <img data-src="{{ asset('img/logo/logo-waskita.png') }}" alt="waskita" class="lozad home-partners-items home-partners-items-waskita" />
      <img data-src="{{ asset('img/logo/logo-endress-2.png') }}" alt="endress hauser" class="lozad home-partners-items home-partners-items-siemens" />
      <img data-src="{{ asset('img/logo/logo-yokogawa.png') }}" alt="yokogawa" class="lozad home-partners-items home-partners-items-yokogawa" />
      <img data-src="{{ asset('img/logo/logo-patterson.png') }}" alt="patterson" class="lozad home-partners-items home-partners-items-patterson" />
      <img data-src="{{ asset('img/logo/logo-emco-2.png') }}" alt="emco" class="lozad home-partners-items home-partners-items-emco" />
      <img data-src="{{ asset('img/logo/logo-sulzer.png') }}" alt="sulzer" class="lozad home-partners-items home-partners-items-sulzer" />
      <img data-src="{{ asset('img/logo/logo-ingersoll-1.png') }}" alt="ingersoll" class="lozad home-partners-items home-partners-items-ingersoll" />
      <img data-src="{{ asset('img/logo/logo-deutz.svg') }}" alt="deutz" class="lozad home-partners-items home-partners-items-deutz" />
      <img data-src="{{ asset('img/logo/logo-kansai.png') }}" alt="kansai" class="lozad home-partners-items home-partners-items-kansai" />
      <img data-src="{{ asset('img/logo/logo-inter.png') }}" alt="inter" class="lozad home-partners-items home-partners-items-inter" />
    </div>
  </div>
</div>
{{-- Contact Us --}}
<div class="w-full bg-[url('/img/homepage/background-contact.jpeg')] bg-cover bg-no-repeat">
  <div class="container mx-auto sm:pb-16">
    <div class="flex flex-col sm:flex-row w-full">
      <div class="w-full order-last sm:order-first mb-10 sm:mt-16">
        <p class="falga-section-title text-center my-10">
          Site Map
        </p>
        <div class="w-4/5 h-[300px] sm:w-[500px] sm:h-[400px] mx-auto">
          <iframe class="lozad" title="FALGA" data-src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.2672018290027!2d106.82190816512019!3d-6.228460295491357!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3e4a175a33f%3A0xc96c83f443f46e81!2sDea%20Tower%2C%20Jl.%20Mega%20Kuningan%20Barat%20No.1%2C%20RT.5%2FRW.2%2C%20Kuningan%2C%20East%20Kuningan%2C%20Setiabudi%2C%20South%20Jakarta%20City%2C%20Jakarta%2012950!5e0!3m2!1sid!2sid!4v1668005572898!5m2!1sid!2sid" width="100%" height="100%" style="border: 0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
      <div id="contact-us" class="w-full p-10">
        <p class="falga-section-title text-center mb-10 sm:mt-16">
          Contact Us
        </p>
        <form id="contact-us-form" action="javascript:void(0)">
          @csrf
          <div class="mb-6">
            <label class="block text-md font-medium text-red-falga">Full Name</label>
            <input id="name" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter your full name" required />
            @error('name')
            <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</p>
            @enderror
          </div>
          <div class="mb-6">
            <label for="email" class="block text-md font-medium text-red-falga">Email</label>
            <input id="email" name="email" type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter your email" required />
            @error('email')
            <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</p>
            @enderror
          </div>
          <div class="mb-6">
            <label class="block text-md font-medium text-red-falga">Subject</label>
            <input id="subject" name="subject" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter your subject" required />
          </div>
          <div class="mb-6">
            <label class="block text-md font-medium text-red-falga">Message</label>
            <textarea id="message" name="message" rows="3" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter your message"></textarea>
          </div>
          <div class="text-center">
            <button id="submit" type="submit" class="falga-button mt-8 uppercase mx-auto" style="padding-left: 28px">
              Submit <i class="fa-solid fa-spinner fa-spin-pulse contact-spinner"></i>
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<div id="contact-us-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
  <div class="relative w-full h-full max-w-2xl md:h-auto m-auto">
    <!-- Modal content -->
    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
      <!-- Modal header -->
      <div class="flex items-start justify-between p-5 border-b rounded-t dark:border-gray-600">
        <h3 id="title" class="text-xl font-semibold text-gray-900 lg:text-2xl dark:text-white">
          Contact Us
        </h3>
      </div>
      <!-- Modal body -->
      <div class="p-6 space-y-6">
        <p id="description" class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
          Your message has been recorded.
        </p>
      </div>
      <!-- Modal footer -->
      <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
        <button id="dismiss" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Dismiss</button>
      </div>
    </div>
  </div>
</div>

@push('scripts')
<script src="{{ asset('flickity/flickity.pkgd.min.js') }}"></script>
<script src="{{ asset('js/homepage.js') }}"></script>
@endpush
