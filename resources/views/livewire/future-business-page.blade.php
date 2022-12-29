{{-- Banner --}}
<div class="lozad md:w-full bg-no-repeat bg-cover bg-top flex mt-[61px] md:mt-[77px]" data-background-image="{{ mix('img/our-business/future-business.jpg') }}">
  <div class="container text-center h-[400px] text-white flex flex-col justify-end items-center mx-auto" style="margin-bottom: 80px">
    <h1 class="font-poppins font-extrabold text-xl md:text-2xl lg:text-4xl lg:leading-relaxed uppercase" style="text-shadow: 0px 4px 4px #000000;">
      Future Business
    </h1>
  </div>
</div>
@component('components.bread-crumbs', ["items" => [
[ "title" => "HOME", "href" => url("") ],
[ "title" => "OUR BUSINESS", "href" => url("our-business") ],
[ "title" => "FUTURE BUSINESS", "color" => "red-falga" ]
]])
@endcomponent
<div class="falga-container mx-auto mb-12 md:mb-24 mt-5 md:mt-10 flex flex-col">
  <h5 class="falga-section-title uppercase">New Business Building</h5>
  <p class="font-sans text-sm md:text-lg text-justify mt-4 md:mt-8">FALGA is a believer of new-business building that can potentially generate organic growth with sustainability at the center of our new businesses value proposition. We proactively explore and appraise new businesses that can drive sustainable values. We enthusiastically take part in building dynamic, innovative businesses that can reinvigorate our organization with clear and standard process for scaling new businesses. Our group positions our management strategy to be agile to market movement and to always be open to new business prospects.</p>
  <a href="{{ url('/#contact-us') }}" class="falga-button mt-4 md:mt-8 uppercase mr-auto">Contact Us</a>
</div>
