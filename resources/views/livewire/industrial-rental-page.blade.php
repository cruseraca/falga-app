@push('styles')
<link href="{{ asset('css/industrial.css') }}" rel="stylesheet">
@endpush
@push('scripts')
<script src="{{ asset('flickity/flickity.pkgd.min.js') }}"></script>
<script src="{{ asset('js/industrial.js') }}"></script>
@endpush
{{-- Banner --}}
<div class="md:w-full bg-[url('/img/industrial-rental/banner.jpg')] bg-no-repeat bg-cover bg-center flex mt-[61px] md:mt-[77px]">
  <div class="container text-center h-[400px] lg:h-[766px] text-white flex flex-col justify-end items-center mx-auto" style="margin-bottom: 80px">
    <h1 class="font-poppins font-extrabold text-xl md:text-2xl lg:text-4xl lg:leading-relaxed uppercase" style="text-shadow: 0px 4px 4px #000000;">
      INDUSTRIAL EQUIPMENT RENTAL
    </h1>
  </div>
</div>
<div class="falga-container my-5 md:my-10">
  <div class="falga-section-title mb-4 md:mb-8">Industrial Restal Business</div>
  <p class="font-sans text-[16px] text-justify">FALGA provides industrial machinery and construction equipment rental services with functionality and quality. Our group offers wide assortment of industrial tools from ordinary machines like Generator Set to Specialized tools like Jacking System. We also offer full-service delivery by providing routine maintenance by our technicians on the construction equipment and tool rentals.</p>
</div>
<div class="bg-gray-100">
  <div class="falga-container flex flex-wrap md:flex-row-reverse items-center py-10 md:py-16">
    <div class="hidden md:flex carousel-button-right1 cursor-pointer">
      <span class="fa-stack fa-xl my-auto">
        <i class="fa-solid fa-circle fa-stack-2x text-purple-falga"></i>
        <i class="fa-solid fa-angle-right fa-stack-1x text-white"></i>
      </span>
    </div>
    <div class="industrial-carousel md:my-6">
      <div class="industrial-carousel-ar">
        <div class="industrial-carousel-yes carousel1">
          <div class="carousel-cell1 w-full h-full">
            <img class="h-full w-full object-cover" src="{{ asset('img/industrial-rental/tank.jpg') }}" alt="">
          </div>
          <div class="carousel-cell1 w-full h-full">
            <img class="h-full w-full object-cover" src="{{ asset('img/industrial-rental/tank.jpg') }}" alt="">
          </div>
        </div>
      </div>
    </div>
    <div class="bg-[#595897] flex-1 h-[4px] md:h-auto md:w-[8px] min-w-[300px] md:min-w-[8px] md:max-w-[8px] rounded-[12px] my-4 md:my-0 md:mx-4 md:self-stretch"></div>
    <div class="flex-1 min-w-[300px] bg-white border border-gray-200 rounded-lg shadow-md overflow-hidden p-4 md:p-8 md:my-6 md:min-h-[288px]">
      <h5 class="mb-2 md:mb-4 falga-section-title">TANK CONSTRUCTION EQUIPMENT</h5>
      <ul class="font-sans list-disc list-outside text-[16px] pl-4 marker:text-[#595897]">
        <li>Hydraulic Jacking</li>
        <li>Automatic Girth Welding Machine</li>
        <li>Automatic Vertical Welding Machine</li>
        <li>Annular Bottom Plate Welding Machine</li>
        <li>Plate Rolling Machine</li>
        <li>H-Beam Bending Machine</li>
        <li>Bored Pile Machine</li>
      </ul>
    </div>
  </div>
</div>
<div class="falga-container flex flex-wrap md:flex-row-reverse items-center py-10 md:py-16">
  <div class="hidden md:flex carousel-button-right1 cursor-pointer">
    <span class="fa-stack fa-xl my-auto">
      <i class="fa-solid fa-circle fa-stack-2x text-purple-falga"></i>
      <i class="fa-solid fa-angle-right fa-stack-1x text-white"></i>
    </span>
  </div>
  <div class="industrial-carousel md:my-6">
    <div class="industrial-carousel-ar">
      <div class="industrial-carousel-yes carousel1">
        <div class="carousel-cell1 w-full h-full">
          <img class="h-full w-full object-cover" src="{{ asset('img/industrial-rental/material.jpg') }}" alt="">
        </div>
        <div class="carousel-cell1 w-full h-full">
          <img class="h-full w-full object-cover" src="{{ asset('img/industrial-rental/material.jpg') }}" alt="">
        </div>
      </div>
    </div>
  </div>
  <div class="bg-[#A55067] flex-1 h-[4px] md:h-auto md:w-[8px] min-w-[300px] md:min-w-[8px] md:max-w-[8px] rounded-[12px] my-4 md:my-0 md:mx-4 md:self-stretch"></div>
  <div class="flex-1 min-w-[300px] bg-white border border-gray-200 rounded-lg shadow-md overflow-hidden p-4 md:p-8 md:my-6 md:min-h-[288px]">
    <h5 class="mb-2 md:mb-4 falga-section-title">MATERIAL HANDLING</h5>
    <ul class="font-sans list-disc list-outside text-[16px] pl-4 marker:text-[#A55067]">
      <li>Chain Block</li>
      <li>Air Chain Hoist</li>
      <li>Lifting Lug</li>
      <li>Cable Feeder & Puller</li>
      <li>Electric Winch</li>
      <li>Grip Puller</li>
      <li>Tool Support</li>
    </ul>
  </div>
</div>
<div class="bg-gray-100">
  <div class="falga-container flex flex-wrap md:flex-row-reverse items-center py-10 md:py-16">
    <div class="hidden md:flex carousel-button-right2 cursor-pointer">
      <span class="fa-stack fa-xl my-auto">
        <i class="fa-solid fa-circle fa-stack-2x text-purple-falga"></i>
        <i class="fa-solid fa-angle-right fa-stack-1x text-white"></i>
      </span>
    </div>
    <div class="industrial-carousel md:my-6">
      <div class="industrial-carousel-ar">
        <div class="industrial-carousel-yes carousel2">
          <div class="carousel-cell2 w-full h-full">
            <img class="h-full w-full object-cover" src="{{ asset('img/industrial-rental/survey.jpg') }}" alt="">
          </div>
          <div class="carousel-cell2 w-full h-full">
            <img class="h-full w-full object-cover" src="{{ asset('img/industrial-rental/survey.jpg') }}" alt="">
          </div>
        </div>
      </div>
    </div>
    <div class="bg-[#8B547D] flex-1 h-[4px] md:h-auto md:w-[8px] min-w-[300px] md:min-w-[8px] md:max-w-[8px] rounded-[12px] my-4 md:my-0 md:mx-4 md:self-stretch"></div>
    <div class="flex-1 min-w-[300px] bg-white border border-gray-200 rounded-lg shadow-md overflow-hidden p-4 md:p-8 md:my-6 md:min-h-[288px]">
      <h5 class="mb-2 md:mb-4 falga-section-title">SURVEYING HANDLING</h5>
      <ul class="font-sans list-disc list-outside text-[16px] pl-4 marker:text-[#8B547D]">
        <li>Theodolites</li>
        <li>GPS Equipment</li>
        <li>Surveying Tripods</li>
        <li>Marking Paint</li>
        <li>Prism</li>
        <li>Automatic Levels</li>
      </ul>
    </div>
  </div>
</div>
<div class="falga-container flex flex-wrap md:flex-row-reverse items-center py-10 md:py-16">
  <div class="hidden md:flex carousel-button-right3 cursor-pointer">
    <span class="fa-stack fa-xl my-auto">
      <i class="fa-solid fa-circle fa-stack-2x text-purple-falga"></i>
      <i class="fa-solid fa-angle-right fa-stack-1x text-white"></i>
    </span>
  </div>
  <div class="industrial-carousel md:my-6">
    <div class="industrial-carousel-ar">
      <div class="industrial-carousel-yes carousel3">
        <div class="carousel-cell3 w-full h-full">
          <img class="h-full w-full object-cover" src="{{ asset('img/industrial-rental/power.jpg') }}" alt="">
        </div>
        <div class="carousel-cell3 w-full h-full">
          <img class="h-full w-full object-cover" src="{{ asset('img/industrial-rental/power.jpg') }}" alt="">
        </div>
      </div>
    </div>
  </div>
  <div class="bg-[#595897] flex-1 h-[4px] md:h-auto md:w-[8px] min-w-[300px] md:min-w-[8px] md:max-w-[8px] rounded-[12px] my-4 md:my-0 md:mx-4 md:self-stretch"></div>
  <div class="flex-1 min-w-[300px] bg-white border border-gray-200 rounded-lg shadow-md overflow-hidden p-4 md:p-8 md:my-6 md:min-h-[288px]">
    <h5 class="mb-2 md:mb-4 falga-section-title">RENTAL POWER EQUIPMENT</h5>
    <ul class="font-sans list-disc list-outside text-[16px] pl-4 marker:text-[#595897]">
      <li>Generators</li>
      <li>Air Conditioners</li>
      <li>Chillers</li>
      <li>Heaters</li>
      <li>Air Compressors</li>
    </ul>
  </div>
</div>
<div class="bg-gray-100">
  <div class="falga-container flex flex-wrap md:flex-row-reverse items-center py-10 md:py-16">
    <div class="hidden md:flex carousel-button-right4 cursor-pointer">
      <span class="fa-stack fa-xl my-auto">
        <i class="fa-solid fa-circle fa-stack-2x text-purple-falga"></i>
        <i class="fa-solid fa-angle-right fa-stack-1x text-white"></i>
      </span>
    </div>
    <div class="industrial-carousel md:my-6">
      <div class="industrial-carousel-ar">
        <div class="industrial-carousel-yes carousel4">
          <div class="carousel-cell4 w-full h-full">
            <img class="h-full w-full object-cover" src="{{ asset('img/industrial-rental/aerial.jpg') }}" alt="">
          </div>
          <div class="carousel-cell4 w-full h-full">
            <img class="h-full w-full object-cover" src="{{ asset('img/industrial-rental/aerial.jpg') }}" alt="">
          </div>
        </div>
      </div>
    </div>
    <div class="bg-[#A55067] flex-1 h-[4px] md:h-auto md:w-[8px] min-w-[300px] md:min-w-[8px] md:max-w-[8px] rounded-[12px] my-4 md:my-0 md:mx-4 md:self-stretch"></div>
    <div class="flex-1 min-w-[300px] bg-white border border-gray-200 rounded-lg shadow-md overflow-hidden p-4 md:p-8 md:my-6 md:min-h-[288px]">
      <h5 class="mb-2 md:mb-4 falga-section-title">AERIAL WORK PLATFORM</h5>
      <ul class="font-sans list-disc list-outside text-[16px] pl-4 marker:text-[#A55067]">
        <li>Scaffolding</li>
        <li>Ladders</li>
        <li>Aerial Attachments and Safety</li>
      </ul>
    </div>
  </div>
</div>
<div class="falga-container flex flex-wrap md:flex-row-reverse items-center py-10 md:py-16">
  <div class="hidden md:flex carousel-button-right5 cursor-pointer">
    <span class="fa-stack fa-xl my-auto">
      <i class="fa-solid fa-circle fa-stack-2x text-purple-falga"></i>
      <i class="fa-solid fa-angle-right fa-stack-1x text-white"></i>
    </span>
  </div>
  <div class="industrial-carousel md:my-6">
    <div class="industrial-carousel-ar">
      <div class="industrial-carousel-yes carousel5">
        <div class="carousel-cell5 w-full h-full">
          <img class="h-full w-full object-cover" src="{{ asset('img/industrial-rental/miscellaneous.jpg') }}" alt="">
        </div>
        <div class="carousel-cell5 w-full h-full">
          <img class="h-full w-full object-cover" src="{{ asset('img/industrial-rental/miscellaneous.jpg') }}" alt="">
        </div>
      </div>
    </div>
  </div>
  <div class="bg-[#8B547D] flex-1 h-[4px] md:h-auto md:w-[8px] min-w-[300px] md:min-w-[8px] md:max-w-[8px] rounded-[12px] my-4 md:my-0 md:mx-4 md:self-stretch"></div>
  <div class="flex-1 min-w-[300px] bg-white border border-gray-200 rounded-lg shadow-md overflow-hidden p-4 md:p-8 md:my-6 md:min-h-[288px]">
    <h5 class="mb-2 md:mb-4 falga-section-title">MISCELLANEOUS</h5>
    <ul class="font-sans list-disc list-outside text-[16px] pl-4 marker:text-[#8B547D]">
      <li>Container</li>
      <li>Cable Tray</li>
      <li>Seamless Pipe</li>
      <li>Portable Concrete Pump</li>
      <li>Submersible Pump</li>
      <li>Plasma Cutter</li>
      <li>Others</li>
    </ul>
  </div>
</div>
