@push('styles')
<link href="{{ mix('css/about-us.css') }}" rel="stylesheet">
@endpush
{{-- Banner --}}
<div class="main-banner mt-[61px] md:mt-[77px]">
  <picture>
    <source srcset="{{ mix("img/about-us/banner-2.jpg") }}" />
    <img alt="" />
  </picture>
  <div class="main-banner-container">
    <div class="falga-container text-white text-center">
      <h1 class="font-poppins font-extrabold sm:text-2xl md:text-3xl lg:text-4xl lg:leading-relaxed uppercase md:mt-[30%]" style="text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">
        ABOUT US
      </h1>
      <div class="md:mt-8 normal-case sm:text-xl md:text-2xl" style="text-shadow: 0px 1px 1px rgba(0, 0, 0, 0.7);">
        FALGA is an Indonesian-incorporated Investment Holding Company that strives to continuously build viable large-scale businesses that deliver sustainable performance
      </div>
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
    FALGA GROUP's core values are to be USEFUL. These values have carried our group to thrive for almost 4 decades. Our core values aim to shape agility, resilience and sustainability in our portfolio of businesses to continue to thrive in this disruptive era.
  </div>
  <div class="flex flex-wrap md:divide-x-[16px] divide-transparent items-stretch">
    <x-core-value-item title="Uplifting" description="Positive work environment that encourage meaningful relationship, ignite energy & elevate corporate performance"></x-core-value-item>
    <x-core-value-item title="Stewardship" description="Responsible management that incorporate ethics, morals and sustainability into enterprise-wide design and practices"></x-core-value-item>
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
    <x-managing-partner-item name="Tommy Hesarid Simamora, B.SC, MBA" position="Partner" image="{{ url('/img/about-us/tommy.jpeg') }}" description="Tommy Simamora is an experienced Asset Management, Investment Banking and Private Equity Professional with work experiences in top global companies in United States such as Morgan Stanley US and Wells Fargo Securities US where he was involved in M&A, securitization, and capital raising transactions. Prior to leading FALGA Group, he started working professionally for KPMG Indonesia in 2014 when he moved back for good to Indonesia. He also worked in Mandiri Investasi from 2015-2022 which is Indonesian largest asset management company with more than IDR 75 trillion ($5 Billion) in consolidated AUM as General Partner for Private Equity & Infrastructure (listed & non-listed) funds. Through these funds, he accumulated executive experiences where he was appointed as the leadership board of multiple Investee Companies e.g., State-Owned Enterprises' subsidiaries and strategic holding companies."></x-managing-partner-item>
    <x-managing-partner-item name="Ronald Edy Simamora, B.SC, M.SC" position="Partner" image="{{ url('/img/about-us/ronald.jpeg') }}" description="Ronald Simamora is a seasoned entrepreneur that has been contributing to FALGA Group growth process. After returning from the United States for good in 2008, he took position as FALGA Group's Chief Operating Officer where he was responsible for the planning, organizing, and directing of our company's overall operations. He also started to lead our EPCI division major construction projects such as Oil Tanks, LPG (Spherical Tanks), Jetty, LPG & Fuel Oil Terminal (Farms) and Pipeline Systems in the amount of more than IDR 500 billion ($32 million). He also oversaw the development and implementation of FALGA Group business development starting from our EPCI Businesses to Oil & Gas Retail, Industrial Equipment Rental & Property Businesses. He was also an honorary lecturer in University of Indonesia (Ranked 1st in Indonesia) from 2009-2011 for Human-Computer Interaction and Multimedia Technology subjects."></x-managing-partner-item>
  </div>
</div>
{{-- Founder --}}
<div class="falga-container pt-14 md:pt-16 pb-14 md:pb-16">
  <div class="falga-section-title text-center mb-12 md:mb-14">FOUNDER</div>
  <x-managing-partner-item name="Ir. Sarimin Simamora" position="Founder" image="{{ url('/img/about-us/sarimin.jpeg') }}" description="FALGA GROUP was founded in 1986 by Ir. Sarimin Simamora with its initial line of business as an Engineering, Procurement, Construction and Installation (EPCI) Company in Indonesia. With his strong background in engineering, Mr. Simamora started to lead our group to undertake PPP infrastructure projects especially in Oil & Gas projects and mostly as the Main Contractor. He maintained his entrepreneurial edge and sustainability strategy to ensure the long-term survival and growth of FALGA Group for decades. FALGA has since then extensively expanded its group's subsidiaries and affiliates onto 4 business pillars: EPCI Businesses, Oil & Gas Retail, Industrial Equipment Rental and also Property & Hospitality. He left behind a legacy of entrepreneurial vision to continuously build viable businesses that can stand through disruptions and achieve a sustainable future."></x-managing-partner-item>
</div>
