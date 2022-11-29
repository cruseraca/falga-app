@push('styles')
<link href="{{ asset('css/epci.css') }}" rel="stylesheet">
@endpush
{{-- Banner --}}
<div class="sm:w-full falga-banner bg-no-repeat bg-cover bg-top flex mt-[61px] md:mt-[77px]">
    <div class="falga-container text-center h-[400px] lg:h-[766px] text-white flex flex-col justify-end items-center" style="padding-bottom: 226px">
        <h1 class="font-poppins font-extrabold lg:text-4xl max-w-3xl lg:leading-relaxed uppercase">
            ENGINEERING, PROCUREMENT, CONSTRUCTION AND INSTALLMENT(EPCI)
        </h1>
    </div>
</div>
<div class="falga-container my-16 text-xl md:text-2xl font-poppins">
    FALGA EPCI Business has robust track record in Engineering, Procurement, Construction and Installation (EPCI) projects since 1986 with more than 110 EPCI Infrastructure Projects delivered with high quality services and solutions for Indonesian SOEs and Public/Private Companies. CSU is committed to provide comprehensive EPCI services for clients across infrastructure industry that deliver quality, certainty, safety and capital efficiency. Our team of highly skilled and experienced professionals combine multiple aspects of technical & non-technical resources to ensure delivery of project timeline and cost target while ensuring regulatory compliance in our deliverables.
</div>
<x-epci-item
    title="ENGINEERING"
    description="Our EPCI Business deploy schedule-driven engineering team that focuses on project quality, safety and punctuality in order to provide innovative and cost-effective engineering solutions. Our highly skilled and experienced engineers commits to provide high quality support and project implementation services to our clients."
    color="#5063A1"
    image="{{ url('img/epci-business/engineering.jpg') }}"
></x-epci-item>
<x-epci-item
    title="PROCUREMENT"
    description="Our EPCI Business capitalizes its experience in global procurement expertise, market knowledge and supply chain networks to provide the best value for clients' capital projects. Our procurement services strategically covers equipment, materials and services through strategic sourcing, contract management, logistics functions and material  management."
    color="#972540"
    image="{{ url('img/epci-business/procurement.jpg') }}"
    reverse="true"
></x-epci-item>
<x-epci-item
    title="CONSTRUCTION"
    description="Our EPCI Business mobilizes its network of construction resources to facilitate the effective mobilization of skilled construction teams and advanced methodologies. CSU has extensive experience in managing multicultural workforces and local considerations."
    color="#7D5082"
    image="{{ url('img/epci-business/construction.jpg') }}"
></x-epci-item>
<x-epci-item
    title="INSTALLATION"
    description="Our EPCI Business has proven quality processes for installing system that consistently deliver effective resources, tools and technical expertise. Our team provides installation services that focus on execution punctuality and quality that complement with our safety solutions."
    color="#584B8F"
    image="{{ url('img/epci-business/installation.jpg') }}"
    reverse="true"
></x-epci-item>
