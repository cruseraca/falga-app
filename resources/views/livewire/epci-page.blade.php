@push('styles')
<x-embed-styles />
<link href="{{ mix('css/epci.css') }}" rel="stylesheet">
@endpush
{{-- Banner --}}
<div class="lozad sm:w-full bg-no-repeat bg-cover bg-top flex mt-[61px] md:mt-[77px]" data-background-image="{{ mix("img/epci-business/banner.jpg") }}">
    <div class="falga-container text-center h-[400px] lg:h-[766px] text-white flex flex-col justify-end items-center" style="padding-bottom: 226px">
        <h1 class="font-poppins font-extrabold lg:text-4xl max-w-3xl lg:leading-relaxed uppercase" style="text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">
            ENGINEERING, PROCUREMENT, CONSTRUCTION AND INSTALLATION(EPCI)
        </h1>
    </div>
</div>
@component('components.bread-crumbs', ["items" => [
[ "title" => "HOME", "href" => url("") ],
[ "title" => "OUR BUSINESS", "href" => url("our-business") ],
[ "title" => "EPCI BUSINESS", "color" => "red-falga" ]
]])
@endcomponent
<div class="falga-container my-16 text-sm md:text-base flex flex-col md:flex-row items-center justify-center">
    <div class="flex-1 w-full md:w-[200px] md:mr-12">
        <x-embed url="https://www.youtube.com/watch?v=ThpRlt9o2_0" />
    </div>
    <div class="flex-1 mt-8 md:mt-0">
        <p class="falga-section-title uppercase mb-4 md:mb-8">
            EPCI Business
        </p>
        <p class="text-justify">
            FALGA EPCI Business has robust track record in Engineering, Procurement, Construction and Installation (EPCI) projects since 1986 with more than 110 EPCI Infrastructure Projects delivered with high quality services and solutions for Indonesian SOEs and Public/Private Companies. CSU is committed to provide comprehensive EPCI services for clients across infrastructure industry that deliver quality, certainty, safety and capital efficiency. Our team of highly skilled and experienced professionals combine multiple aspects of technical & non-technical resources to ensure delivery of project timeline and cost target while ensuring regulatory compliance in our deliverables.
        </p>
        <div class="flex">
            <a href="https://csu.co.id" target="_blank" class="falga-button mt-8 uppercase">our subholding</a>
        </div>
    </div>
</div>
<x-epci-item title="ENGINEERING" description="Our EPCI Business deploy schedule-driven engineering team that focuses on project quality, safety and punctuality in order to provide innovative and cost-effective engineering solutions. Our highly skilled and experienced engineers commits to provide high quality support and project implementation services to our clients." color="#5063A1" image="{{ url('img/epci-business/engineering.jpg') }}"></x-epci-item>
<x-epci-item title="PROCUREMENT" description="Our EPCI Business capitalizes its experience in global procurement expertise, market knowledge and supply chain networks to provide the best value for clients' capital projects. Our procurement services strategically covers equipment, materials and services through strategic sourcing, contract management, logistics functions and material  management." color="#972540" image="{{ url('img/epci-business/procurement.png') }}" reverse="true"></x-epci-item>
<x-epci-item title="CONSTRUCTION" description="Our EPCI Business mobilizes its network of construction resources to facilitate the effective mobilization of skilled construction teams and advanced methodologies. CSU has extensive experience in managing multicultural workforces and local considerations." color="#7D5082" image="{{ url('img/epci-business/construction.jpg') }}"></x-epci-item>
<x-epci-item title="INSTALLATION" description="Our EPCI Business has proven quality processes for installing system that consistently deliver effective resources, tools and technical expertise. Our team provides installation services that focus on execution punctuality and quality that complement with our safety solutions." color="#584B8F" image="{{ url('img/epci-business/installation.jpg') }}" reverse="true"></x-epci-item>
<div class="falga-wd-divider"></div>
<div class="falga-container">
    <div class="falga-section-title red-falga text-center mb-8 mt-8 md:mt-24">
        WORK DIVISION
    </div>
    <div class="falga-wd mb-14">
        <img data-src="{{ url('img/epci-business/civil.png') }}" class="lozad falga-wd-civil" data-popover-target="popover-civil" data-popover-trigger="hover" data-popover-placement="bottom" />
        <div data-popover id="popover-civil" role="tooltip" class="falga-wd-popover absolute z-10 invisible inline-block w-64 text-sm font-light text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800">
            <div class="px-3 py-2 text-sm md:text-base font-normal">
                <p>Jetty, Piers & Ports, Residential & Commercial Buildings, Soil Investigation, DED, Platform Jetty Head, Piling Works, Concrete Works, Ladder: Access, Main Vertical, Interior Design, etc.</p>
            </div>
            <div data-popper-arrow></div>
        </div>
        <img data-src="{{ url('img/epci-business/electrical.png') }}" class="lozad falga-wd-electrical" data-popover-target="popover-electrical" data-popover-trigger="hover" data-popover-placement="bottom" />
        <div data-popover id="popover-electrical" role="tooltip" class="falga-wd-popover absolute z-10 invisible inline-block w-64 text-sm font-light text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800">
            <div class="px-3 py-2 text-sm md:text-base font-normal">
                <p>Variable Speed Drive (VSD), Switchgear, Capasitor Bank, Transformer, Uninterruptible Power Supply (UPS), Programmable Logic Controller (PLC), Cable & Lighting System, Grounding System, etc.</p>
            </div>
            <div data-popper-arrow></div>
        </div>
        <img data-src="{{ url('img/epci-business/instrumentation.png') }}" class="lozad falga-wd-instrumentation" data-popover-target="popover-instrumentation" data-popover-trigger="hover" data-popover-placement="bottom" />
        <div data-popover id="popover-instrumentation" role="tooltip" class="falga-wd-popover absolute z-10 invisible inline-block w-64 text-sm font-light text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800">
            <div class="px-3 py-2 text-sm md:text-base font-normal">
                <p>Automatic Tank Gauging (ATG), Custody Transfer, Radar Transmitter & Gauge, Metering System, Level, Flow, Motor Operated Valve (MOV), Surge Relief Valve, etc.</p>
            </div>
            <div data-popper-arrow></div>
        </div>
        <img data-src="{{ url('img/epci-business/work-division.png') }}" class="lozad falga-wd-c" />
        <img data-src="{{ url('img/epci-business/mechanical.png') }}" class="lozad falga-wd-mechanical" data-popover-target="popover-mechanical" data-popover-trigger="hover" data-popover-placement="bottom" />
        <div data-popover id="popover-mechanical" role="tooltip" class="falga-wd-popover absolute z-10 invisible inline-block w-64 text-sm font-light text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800">
            <div class="px-3 py-2 text-sm md:text-base font-normal">
                <p>LPG, Fuel & Aviation Tank Farms, Piperack & Piping Systems, Fuel Gas & LPG Filling Station, Horizontal Directional Drilling (HDD), Oil & LPG Tank Truck, Marine Loading Arm, etc.</p>
            </div>
            <div data-popper-arrow></div>
        </div>
        <img data-src="{{ url('img/epci-business/automation.png') }}" class="lozad falga-wd-automation" data-popover-target="popover-automation" data-popover-trigger="hover" data-popover-placement="bottom" />
        <div data-popover id="popover-automation" role="tooltip" class="falga-wd-popover absolute z-10 invisible inline-block w-64 text-sm font-light text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800">
            <div class="px-3 py-2 text-sm md:text-base font-normal">
                <p>Terminal Automation System (TAS), Safety Instrumented System (SIS), Fire and Gas System (FGS), Distributed Control System (DCS), HMI Operator Workstation (OWS), etc.</p>
            </div>
            <div data-popper-arrow></div>
        </div>
        <img data-src="{{ url('img/epci-business/others.png') }}" class="lozad falga-wd-others" data-popover-target="popover-others" data-popover-trigger="hover" data-popover-placement="bottom" />
        <div data-popover id="popover-others" role="tooltip" class="falga-wd-popover absolute z-10 invisible inline-block w-64 text-sm font-light text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800">
            <div class="px-3 py-2 text-sm md:text-base font-normal">
                <p>Marine Floating Hose, Hot Tapping, Non-Destructive Test (NDT), Hydrostatic Test, Post Weld Heat Treatment (PWHT), Marine Soil Investigation & test, Lateral Load Test, etc.</p>
            </div>
            <div data-popper-arrow></div>
        </div>
    </div>
</div>
