@push('styles')
<link href="{{ asset('css/about-us.css') }}" rel="stylesheet">
@endpush
{{-- Banner --}}
<div class="sm:w-full falga-banner bg-no-repeat bg-cover bg-top flex mt-[61px] md:mt-[77px]">
  <div class="falga-container text-center h-[400px] lg:h-[566px] text-white flex flex-col justify-end items-center" style="margin-bottom: 80px">
    <h1 class="font-poppins font-extrabold lg:text-4xl max-w-3xl lg:leading-relaxed uppercase">
      ABOUT US
    </h1>
    <div class="mt-8 normal-case md:text-2xl">
      FALGA is an Indonesian-incorporated Investment Holding Company that strives to continuously build viable large-scale businesses that deliver sustainable performance
    </div>
  </div>
</div>
@component('components.bread-crumbs', ["items" => [
[ "title" => "HOME", "href" => url("") ],
[ "title" => "ABOUT US", "color" => "red-falga" ]
]])
@endcomponent
{{-- Vision & Mission --}}
<div id="vision-missions" class="falga-container pt-16 md:pt-20">
  <div class="flex items-center">
    <div class="falga-vm-left hidden lg:block">
      <div class="ellipse-0"></div>
      <div class="ellipse-1"></div>
      <div class="ellipse-2"></div>
    </div>
    <div class="falga-vm-v mr-8 hidden lg:block"></div>
    <div class="falga-vm-text">
      <div class="falga-section-title">VISION</div>
      <div class="mt-4 text-sm md:text-base md:pb-8">
        To be a world-class Business Builder that originates and empowers viable, large-scale enterprises that deliver sustainable performance.
      </div>
      <div class="falga-section-title mt-4">MISSIONS</div>
      <div class="mt-4 text-sm md:text-base">
        To drive strategic agility and operational excellence to withstand market dynamics and business turbulence
      </div>
      <div class="mt-3 text-sm md:text-base">
        To enhance talent capabilities and synergies through healthy and sustainable workforce ecosystem
      </div>
      <div class="mt-3 text-sm md:text-base">
        To encourage ESG integration in business and investment workflow
      </div>
      <div class="mt-3 text-sm md:text-base">
        To continue exploration of new business building through appraisals of business viability and sustainability
      </div>
    </div>
  </div>
</div>
{{-- Core Values --}}
<div id="core-values" class="falga-container pt-16 md:pt-20">
  <div class="falga-section-title text-center">CORE VALUES</div>
  <div class="mt-12 text-sm md:text-base">
    FALGA have adopted core values that have carried our group to thrive for the past 36 years. Our core values aim to shape agility, resilience and sustainability in our portfolio of businesses to continue to thrive in this disruptive era.
  </div>
  <div class="flex flex-wrap md:divide-x-[16px] divide-transparent items-stretch">
    <x-core-value-item title="Uplifting" description="Positive work environment that encourage meaningful relationship, ignite energy & elevate organization-wide performance"></x-core-value-item>
    <x-core-value-item title="Sustainability" description="Responsible management to incorporate ESG principles into enterprise-wide organization design & practices"></x-core-value-item>
    <x-core-value-item title="Excellence" description="Pursuant of superior quality in strategy, people, process, resources, technology, products & services"></x-core-value-item>
    <x-core-value-item title="Fluidity" description="Strategic agility, organizational dynamics and transformative capabilities to adapt with constantly rapid change"></x-core-value-item>
    <x-core-value-item title="Unity" description="Cohesive, collaborative culture in workforce diversity that unite different skills and expertise to deliver optimal performance"></x-core-value-item>
    <x-core-value-item title="Loyalty" description="Commitment to fulfill corporate obligations and ethical business practices to the broad spectrum of stakeholders"></x-core-value-item>
  </div>
</div>
{{-- Managing Partners --}}
<div id="key-person" class="falga-container pt-16 md:pt-20">
  <div class="falga-section-title text-center">MANAGING PARTNERS</div>
  <div class="flex flex-wrap flex-col-reverse divide-transparent justify-center items-stretch">
    <x-managing-partner-item name="Tommy Hesarid Simamora, B.SC, MBA" position="Partner" image="{{ url('/img/about-us/tommy.jpeg') }}" description="Tommy Simamora is an experienced Asset Management, Investment Banking and Private Equity Professional with work experiences in top global companies in United States such as Morgan Stanley US and Wells Fargo Securities US where he was involved in M&A, securitization, and capital raising transactions. Prior to leading FALGA Group, he started working professionally for KPMG Indonesia in 2014 when he moved back for good to Indonesia. He also worked in Mandiri Investasi from 2015-2022 which is Indonesian largest asset management company with more than IDR 75 trillion ($5 Billion) in consolidated AUM as General Partner for Private Equity & Infrastructure (listed & non-listed) funds. Through these funds, he accumulated executive experiences where he was appointed as the leadership board of multiple Investee Companies e.g., State-Owned Enterprises’ subsidiaries and strategic holding companies."></x-managing-partner-item>
    <x-managing-partner-item name="Ronald Edy Simamora, B.SC, M.SC" position="Partner" image="{{ url('/img/about-us/ronald.jpeg') }}" description="Ronald Simamora is a seasoned entrepreneur that have been contributing to FALGA Group growth process. After returning from the United States for good in 2008, He took position as FALGA Group’s Chief Operating Officer where he was responsible for the planning, organizing, and directing of our company's overall operations. He also started to lead our EPCI division major construction projects such as Oil Tanks, LPG (Spherical Tanks), Jetty, LPG & Fuel Oil Terminal (Farms) and Pipeline Systems in the amount of more than IDR 500 billion ($32 million). He also oversaw the development and implementation of FALGA Group business development starting from our EPCI Businesses to Oil & Gas Retail, Industrial Equipment Rental & Property Businesses. He was also an honorary lecturer in University of Indonesia (Ranked 1st in Indonesia) from 2009-2011 for Human-Computer Interaction and Multimedia Technology subjects."></x-managing-partner-item>
  </div>
</div>
{{-- Founder --}}
<div class="falga-container pt-14 md:pt-16 pb-14 md:pb-16">
  <div class="falga-section-title text-center mb-12 md:mb-14">FOUNDER</div>
  <div class="max-w-3xl falga-founder">
    <div class="falga-founder-c md:divide-x-[68px] divide-transparent">
      <img src="{{ url('/img/about-us/sarimin.jpeg') }}" class="falga-founder-i"></img>
      <div class="md:mt-0 mt-8 flex-1">
        <div class="falga-founder-name">Ir. Sarimin Simamora</div>
        <div class="text-justify">
          FALGA GROUP was founded in 1986 by Ir. Sarimin Simamora starting as an Engineering, Procurement, Construction and Installation (EPCI) Company in Indonesia. With his strong background in engineering, Mr. Simamora led FALGA to build several PPP infrastructure projects especially in Oil & Gas Infra. FALGA has since then extensively expanded its group’s subsidiaries and affiliates onto 4 business pillars: EPCI, Oil & Gas Retail, Industrial and Equipment Rental and Properties and Property & Hospitality.
        </div>
      </div>
    </div>
  </div>
</div>
