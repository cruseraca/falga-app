@push('styles')
<link href="{{ asset('css/our-business.css') }}" rel="stylesheet">
@endpush
{{-- Banner --}}
<div class="sm:w-full bg-our-business-banner bg-no-repeat bg-cover bg-top flex mt-[61px] md:mt-[77px]">
  <div class="container text-center h-[400px] lg:h-[766px] text-white flex flex-col justify-end items-center mx-auto" style="margin-bottom: 80px">
    <h1 class="font-poppins font-extrabold text-xl sm:text-2xl lg:text-4xl lg:leading-relaxed uppercase" style="text-shadow: 0px 1px 1px rgba(0, 0, 0, 0.7);">
      Building Agility, Resilience and Sustainability
      <br />Our Businesses
    </h1>
    <div class="mt-8 normal-case md:text-2xl" style="text-shadow: 0px 1px 1px rgba(0, 0, 0, 0.7);">
      FALGA is an Indonesian-incorporated Investment Holding Company that strives to continuously build viable
      large-scale businesses that deliver sustainable performance
    </div>
  </div>
</div>
@component('components.bread-crumbs', ["items" => [
[ "title" => "HOME", "href" => url("") ],
[ "title" => "OUR BUSINESS", "color" => "red-falga" ],
]])
@endcomponent
<div class="falga-container flex flex-col md:flex-row md:items-center py-10">
  <div class="epci-image my-4">
    <div class="epci-image-ar">
      <div class="epci-image-b"></div>
      <img class="epci-image-i" src="{{ asset('img/our-business/epci.png') }}" alt="">
    </div>
  </div>
  <div class="font-poppins flex-1 my-4 md:px-16">
    <div class="falga-section-title red-falga mb-4 md:mb-8">ENGINEERING, PROCUREMENT, CONSTRUCTION AND INSTALLMENT (EPCI)</div>
    <div class="text-justify text-sm md:text-lg mb-4 md:mb-8">FALGA has robust track record in EPCI projects of more than 110 EPC Infrastructure Projects in Indonesia partnering with Indonesian SOEs and Public/Private Companies since 1986. We have accumulated extensive project experience in infrastructure: LPG Tank Farm, Oil/Fuel Farm, Electric Motor, Jetty & Piers, Pipelines & Piping System, Fuel Gas & LPG Filling Station, etc</div>
    <div class="text-center flex justify-center md:justify-start">
      <a href="{{ url('epci-business') }}" class="falga-button uppercase text-xs">See All</a>
    </div>
  </div>
</div>
<div class="bg-gray-100">
  <div class="falga-container flex flex-col -z-9 py-10">
    <div class="ogr-image my-4">
      <div class="ogr-image-ar">
        <div class="ogr-image-b"></div>
        <img class="ogr-image-i" src="{{ asset('img/our-business/oil-gas.png') }}" alt="">
      </div>
    </div>
    <div class="font-poppins my-4 md:basis-1/2 md:px-16">
      <div class="text-xl text-rose-800 font-black mb-4 md:text-3xl text-center">OIL & GAS RETAIL</div>
      <div class="text-justify text-sm md:text-lg">FALGA owns and manages Fuel Gas Station (SPBU) and LPG Cylinder Retester Station (BPT LPG) across Indonesia compliant to the operational standards set by PERTAMINA as the Oil & Gas Indonesian SOE. Our Group continuously focuses on business process improvement in our existing stations and assesses potential new Oil & Gas Retail businesses.</div>
      <div class="text-center my-4 md:mt-8 flex justify-center">
        <a href="{{ url('oil-and-gas-business') }}" class="falga-button uppercase text-xs md:mx-auto">See All</a>
      </div>
    </div>
  </div>
</div>
<div class="falga-container flex flex-col md:flex-row py-10">
  <div class="ier-image md:order-last my-4">
    <div class="ier-image-ar">
      <div class="ier-image-b"></div>
      <img class="ier-image-i" src="{{ asset('img/our-business/industrial.jpeg') }}" alt="">
    </div>
  </div>
  <div class="font-poppins my-4 md:basis-1/2 md:px-16">
    <div class="text-xl text-rose-800 font-black mb-4 md:text-3xl md:text-right">INDUSTRIAL EQUIPMENT RENTAL</div>
    <div class="text-justify text-sm md:text-lg">FALGA provides industrial machinery and construction equipment rental services with functionality and quality. Our group offers wide assortment of industrial tools from ordinary machines like Generator Set to Specialized tools like Jacking System. We also offer full-service delivery by providing routine maintenance by our technicians on the construction equipment and tool rentals.</div>
    <div class="my-4 md:mt-8 md:float-right flex md:justify-end justify-center">
      <a href="{{ url('industrial-rental') }}" class="falga-button uppercase text-xs md:ml-0">See All</a>
    </div>
  </div>
</div>
<div class="bg-gray-100">
  <div class="falga-container flex flex-col md:flex-row py-10">
    <div class="pah-image my-4">
      <div class="pah-image-ar">
        <div class="pah-image-b"></div>
        <img class="pah-image-i" src="{{ asset('img/our-business/hospitality.jpg') }}" alt="">
      </div>
    </div>
    <div class="font-poppins my-4 md:basis-1/2 md:px-16">
      <div class="text-xl text-rose-800 font-black mb-4 md:text-3xl">PROPERTY AND HOSPITALITY</div>
      <div class="text-justify text-sm md:text-lg">FALGA owns and manages boarding houses and budget lodges that offer convenient, comfortable and affordable stay for our guests. As the demand for board housing increases in Indonesia, we strive to offer well-maintained facility and to continuously upgrade the housing quality by integrating smart technology.</div>
      <div class="text-center my-4 md:mt-8 flex md:justify-start justify-center">
        <a href="{{ url('prop-business') }}" class="falga-button uppercase text-xs md:ml-0">See All</a>
      </div>
    </div>
  </div>
</div>
<div class="falga-container flex flex-col py-10">
  <div class="fb-image my-4">
    <div class="fb-image-ar">
      <div class="fb-image-b"></div>
      <img class="fb-image-i" src="{{ asset('img/our-business/future.jpg') }}" alt="">
    </div>
  </div>
  <div class="font-poppins md:basis-1/2 my-4 md:px-24">
    <div class="text-xl text-rose-800 font-black mb-4 md:text-3xl text-center">FUTURE BUSINESS</div>
    <div class="text-justify text-sm md:text-lg">FALGA proactively explore and appraise new businesses that can drive sustainable values. Our group positions our management strategy to be agile to market movement and to be open to new business prospects.</div>
    <div class="text-center my-4 md:mt-8 flex justify-center">
      <a href="{{ url('future-business') }}" class="falga-button uppercase text-xs md:mx-auto">See All</a>
    </div>
  </div>
</div>
