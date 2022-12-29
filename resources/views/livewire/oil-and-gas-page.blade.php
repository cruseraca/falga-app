@push('styles')
<link href="{{ mix('css/oil-gas.css') }}" rel="stylesheet">
@endpush
{{-- Banner --}}
<div class="lozad md:w-full bg-no-repeat bg-cover bg-top flex mt-[61px] md:mt-[77px]" data-background-image="{{ mix('img/our-business/oil-and-gas/oil_and_gas_banner.jpg') }}">
  <div class="container text-center h-[400px] lg:h-[766px] text-white flex flex-col justify-end items-center mx-auto" style="margin-bottom: 80px">
    <h1 class="font-poppins font-extrabold text-xl md:text-2xl lg:text-4xl lg:leading-relaxed uppercase" style="text-shadow: 0px 4px 4px #000000;">
      OIL AND GAS RETAIL
    </h1>
  </div>
</div>
@component('components.bread-crumbs', ["items" => [
[ "title" => "HOME", "href" => url("") ],
[ "title" => "OUR BUSINESS", "href" => url("our-business") ],
[ "title" => "OIL & GAS RETAIL", "color" => "red-falga" ]
]])
@endcomponent
<div class="falga-container my-5 md:my-10">
  <div class="falga-section-title mb-4 md:mb-8">Oil & Gas Retail</div>
  <p class="font-sans text-[16px] text-justify">FALGA owns and manages Fuel Gas Station (SPBU) and LPG Cylinder Retester Station (BPT LPG) accros Indonesia compliant to the operational standards set by PERTAMINA as the regulating Oil & Gas State Owned Enterprise. Our Group continuously on business pocess improvement in our existing stations and assesses potential new Oil & Gas Retail business.</p>
</div>
<div class="bg-gray-100">
  <div class="falga-container flex flex-col py-4 md:py-12 md:relative">
    <div class="item">
      <div class="item-i-bl">
        <div class="item-i-bl-ar">
          <img class="lozad item-i-bl-i" data-src="{{ mix('img/our-business/oil-and-gas/pom.png') }}" alt="">
        </div>
      </div>
      <div class="item-line bg-[#595897]"></div>
      <div class="item-content">
        <div class="item-content-line bg-[#595897]"></div>
        <h5 class="falga-section-title">FUEL GAS STATION</h5>
        <p class="font-sans font-normal text-justify md:text-lg mt-4 md:mt-8">
          FALGA owns and manages multiple Pertamina Fuel Gas Stations (SPBU) across Indonesia partnering with Pertamina under CODO scheme. Each station is compliant to the standard operational procedures, ethics and work standards set by PERTAMINA as the regulating Oil & Gas State Owned Enterprise. Each station is equipped with supporting facilities e.g. minimarkets, tire pressure refills, prayer rooms, etc
        </p>
      </div>
    </div>
  </div>
</div>
<div class="falga-container flex flex-col py-4 md:py-12 md:relative">
  <div class="item reverse">
    <div class="item-i-bh">
      <div class="item-i-bh-ar">
        <img class="lozad item-i-bl-i" data-src="{{ mix('img/our-business/oil-and-gas/gas.jpg') }}" alt="">
      </div>
    </div>
    <div class="item-line bg-[#8B547D]"></div>
    <div class="item-content">
      <div class="item-content-line bg-[#8B547D]"></div>
      <h5 class="falga-section-title">LPG RETESTER STATION</h5>
      <p class="font-sans font-normal text-justify md:text-lg mt-4 md:mt-8">
        FALGA owns and manages multiple LPG Retester Stations across Indonesia, which are Quality Assurance facilities where LPG gas cylinders are retested, repaint and/or repaired before distribution. Our station provides technical services for subsidized 3kg LPG cylinders and non-subsidized 5kg, 12kg and 50kg LPG cylinders. Our station adhere to the strict standards set by PERTAMINA.
      </p>
    </div>
  </div>
</div>
