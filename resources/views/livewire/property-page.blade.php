@push('styles')
<link href="{{ mix('css/property.css') }}" rel="stylesheet">
@endpush
{{-- Banner --}}
<div class="main-banner mt-[61px] md:mt-[77px]">
  <picture>
    <source srcset="{{ mix("img/property/banner.png") }}" />
    <img alt="" />
  </picture>
  <div class="main-banner-container">
    <div class="falga-container">
      <h1 class="font-poppins text-white text-center font-extrabold sm:text-2xl md:text-3xl lg:text-4xl lg:leading-relaxed uppercase" style="text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">
        PROPERTY AND HOSPITALITY
      </h1>
    </div>
  </div>
</div>
@component('components.bread-crumbs', ["items" => [
[ "title" => "HOME", "href" => url("") ],
[ "title" => "OUR BUSINESS", "href" => url("our-business") ],
[ "title" => "PROPERTY AND HOSPITALITY", "color" => "red-falga" ]
]])
@endcomponent
<div class="falga-container my-5 md:my-10">
  <div class="falga-section-title mb-4 md:mb-8">Property & Hospitality</div>
  <p class="font-sans text-[16px] text-justify">FALGA owns and manages boarding houses and budget lodges that offer convenient, comforatable and affordable stay for our guests. As the demand for board housing increases in Indonesia, we strive to offer well-maintained facility and continuously upgrade the housing quality by integrating smart technology.</p>
</div>
<div class="falga-container flex flex-col py-4 md:py-12 md:relative">
  <div class="item">
    <div class="item-i-bl">
      <div class="item-i-bl-ar">
        <img class="lozad item-i-bl-i" data-src="{{ mix('img/our-business/hospitality.jpg') }}" alt="">
      </div>
    </div>
    <div class="item-line bg-[#7D5082]"></div>
    <div class="item-content">
      <div class="item-content-line bg-[#7D5082]"></div>
      <h5 class="falga-section-title">BUDGET LODGES</h5>
      <p class="font-sans font-normal text-justify md:text-lg mt-4 md:mt-8">FALGA owns and manages several budget lodges that offer comfortable & affordable residences with well maintained rooms & professional staff. Our house accommodation are fully furnished and equipped with friendly amenities such as Wifi, laundry facilities, coffee maker, smart lock, etc. We strive to provide pleasant and enjoyable experience to our tenants with competitive price.</p>
    </div>
  </div>
</div>
<div class="bg-gray-100">
  <div class="falga-container flex flex-col py-4 md:py-12 md:relative">
    <div class="item reverse">
      <div class="item-i-bh">
        <div class="item-i-bh-ar">
          <img class="lozad item-i-bl-i" data-src="{{ mix('img/our-business/prop-and-hospitality/house1.jpg') }}" alt="">
        </div>
      </div>
      <div class="item-line bg-[#584B8F]"></div>
      <div class="item-content">
        <div class="item-content-line bg-[#584B8F]"></div>
        <h5 class="falga-section-title">BOARDING HOUSES</h5>
        <p class="font-sans font-normal text-justify md:text-lg mt-4 md:mt-8">FALGA owns and manages multiple boarding houses (guest houses) ranging from 15- to 35-room boarding houses. We offer ready-to-live-in rooms designed to accommodate our tenants for short-term or long stay. Our rooms are equipped with IoT enabled smart lock and smart TV to provide pleasant experience for our tenants.</p>
      </div>
    </div>
  </div>
</div>
<div class="falga-container pb-4 pt-1 md:pb-12 md:pt-9 md:relative overflow-hidden">
  <div class="flex flex-wrap items-stretch -mx-4">
    <div class="relative flex-1 mx-4 min-w-[320px] pt-3">
      <div class="w-full relative pt-[101.34228187919%]">
        <img class="absolute w-full h-full top-0 right-0 bottom-0 left-0" src="{{ mix('img/property/jakarta.png') }}" alt="jakarta" />
      </div>
    </div>
    <div class="flex-1 flex items-center mx-4 min-w-[320px] pt-3">
      <div class="item-content item-content-map max-w-md">
        <div class="item-content-line bg-[#972540]"></div>
        <h5 class="falga-section-title">OUR LOCATIONS</h5>
        <p class="font-sans font-normal text-justify md:text-lg mt-4 md:mt-8">Located in Jakarta, Indonesia 22 Privately owned & managed</p>
        <div class="flex items-center mt-4"><img class="object-contain w-7 h-7 mr-2" src="{{ mix('img/property/key-g.png') }}" alt="k" /> 5 Budget Lodges</div>
        <div class="flex items-center mt-1"><img class="object-contain w-7 h-7 mr-2" src="{{ mix('img/property/key-r.png') }}" alt="r" /> 17 Boarding Houses</div>
      </div>
    </div>
  </div>
</div>
