{{-- Banner --}}
<div class="sm:w-full bg-our-business-banner bg-no-repeat bg-cover bg-top flex mt-[61px] md:mt-[77px]">
    <div class="container text-center h-[400px] lg:h-[766px] text-white flex flex-col justify-end items-center mx-auto" style="margin-bottom: 80px">
        <h1 class="font-poppins font-extrabold text-xl sm:text-2xl lg:text-4xl lg:leading-relaxed uppercase" style="text-shadow: 0px 4px 4px #000000;">
            Building Agility, Resilience and Sustainability
            <br />Our Businesses
        </h1>
        <div class="mt-8 normal-case md:text-2xl" style="text-shadow: 0px 4px 4px #000000;">
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
<div class="falga-container flex flex-col md:flex-row md:my-10">
    <div class="flex relative h-[300px] md:h-[576px] md:basis-1/2">
        <div class="w-[80%] m-auto md:ml-24">
            <img src="{{ asset('img/our-business/epci.jpg') }}" alt="">
        </div>
        <div class="absolute -z-50 top-8 right-4 md:top-14 md:right-0 bg-gradient-to-b from-indigo-900 to to-pink-700 h-[80%] w-2/5"></div>
    </div>
    <div class="font-poppins py-8 md:basis-1/2 md:p-16">
        <div class="text-xl text-rose-800 font-black mb-4 md:text-3xl">ENGINEERING, PROCUREMENT, CONSTRUCTION AND INSTALLMENT (EPCI)</div>
        <div class="text-justify md:text-lg">FALGA has robust track record in EPCI projects of more than 110 EPC Infrastructure Projects in Indonesia partnering with Indonesian SOEs and Public/Private Companies since 1986. We have accumulated extensive project experience in infrastructure: LPG Tank Farm, Oil/Fuel Farm, Electric Motor, Jetty & Piers, Pipelines & Piping System, Fuel Gas & LPG Filling Station, etc</div>
        <div class="text-center my-4 md:mt-10 flex justify-center md:justify-start">
            <a href="{{ url('epci-business') }}" class="falga-button uppercase text-xs md:ml-0">See All</a>
        </div>
    </div>
</div>
<div class="bg-gray-100">
    <div class="falga-container flex flex-col -z-9 md:pt-10">
        <div class="flex relative h-[200px] md:h-[576px] md:basis-1/2">
            <div class="w-[80%] md:h-[400px] md:w-[500px] m-auto z-10">
                <img class="object-cover object-right md:h-full" src="{{ asset('img/our-business/oil_gas.jpg') }}" alt="">
            </div>
            <div class="absolute -bottom-1 left-6 md:-bottom-8 md:left-[27%] bg-gradient-to-b from-indigo-900 to to-pink-700 h-[70%] w-[80%] md:w-[35%] md:h-[90%]"></div>
        </div>
        <div class="font-poppins py-8 md:basis-1/2 md:p-16">
            <div class="text-xl text-rose-800 font-black mb-4 md:text-3xl text-center">OIL & GAS RETAIL</div>
            <div class="text-justify md:text-lg">FALGA owns and manages Fuel Gas Station (SPBU) and LPG Cylinder Retester Station (BPT LPG) across Indonesia compliant to the operational standards set by PERTAMINA as the Oil & Gas Indonesian SOE. Our Group continuously focuses on business process improvement in our existing stations and assesses potential new Oil & Gas Retail businesses.</div>
            <div class="text-center my-4 md:mt-10 flex justify-center">
                <a href="{{ url('oil-and-gas-business') }}" class="falga-button uppercase text-xs md:mx-auto">See All</a>
            </div>
        </div>
    </div>
</div>
<div class="falga-container flex flex-col md:flex-row md:my-10">
    <div class="flex relative h-[300px] md:h-[576px] md:basis-1/2 md:order-last">
        <div class="m-auto w-[80%] md:ml-4 md:h-[400px] md:w-[500px]">
            <img class="object-cover h-full" src="{{ asset('img/our-business/industrial.jpeg') }}" alt="">
        </div>
        <div class="absolute -z-50 top-5 right-4 md:top-14 md:right-24 bg-gradient-to-b from-indigo-900 to to-pink-700 h-[85%] md:h-[80%] w-2/5"></div>
    </div>
    <div class="font-poppins py-8 md:basis-1/2 md:p-16">
        <div class="text-xl text-rose-800 font-black mb-4 md:text-3xl md:text-right">INDUSTRIAL EQUIPMENT RENTAL</div>
        <div class="text-justify md:text-lg">FALGA provides industrial machinery and construction equipment rental services with functionality and quality. Our group offers wide assortment of industrial tools from ordinary machines like Generator Set to Specialized tools like Jacking System. We also offer full-service delivery by providing routine maintenance by our technicians on the construction equipment and tool rentals.</div>
        <div class="my-4 md:mt-10 md:float-right flex md:justify-end justify-center">
            <a href="{{ url('industrial-rental') }}" class="falga-button uppercase text-xs md:ml-0">See All</a>
        </div>
    </div>
</div>
<div class="bg-gray-100">
    <div class="falga-container flex flex-col md:flex-row md:py-10">
        <div class="flex relative h-[300px] md:h-[576px] md:basis-1/2">
            <div class="w-[80%] m-auto md:ml-24 z-10 md:w-[500px] md:h-[400px]">
                <img class="object-cover h-full" src="{{ asset('img/our-business/hospitality.jpg') }}" alt="">
            </div>
            <div class="absolute top-8 right-4 md:top-14 md:right-0 bg-gradient-to-b from-indigo-900 to to-pink-700 h-[80%] w-2/5"></div>
        </div>
        <div class="font-poppins py-8 md:basis-1/2 md:p-16">
            <div class="text-xl text-rose-800 font-black mb-4 md:text-3xl">PROPERTY AND HOSPITALITY</div>
            <div class="text-justify md:text-lg">FALGA owns and manages boarding houses and budget lodges that offer convenient, comfortable and affordable stay for our guests. As the demand for board housing increases in Indonesia, we strive to offer well-maintained facility and to continuously upgrade the housing quality by integrating smart technology.</div>
            <div class="text-center my-4 md:mt-10 flex md:justify-start justify-center">
                <a href="{{ url('prop-business') }}" class="falga-button uppercase text-xs md:ml-0">See All</a>
            </div>
        </div>
    </div>
</div>
<div class="falga-container flex flex-col mt-20">
    <div class="flex relative h-[200px] md:h-[576px] md:basis-1/2">
        <div class="w-[80%] h-full md:h-[400px] md:w-[500px] m-auto z-10">
            <img class="h-full w-full object-cover md:h-full md:w-full" src="{{ asset('img/our-business/future.jpg') }}" alt="">
        </div>
        <div class="absolute -top-4 left-6 md:-top-8 md:left-[25%] bg-gradient-to-b from-indigo-900 to to-pink-700 h-[80%] w-[80%] md:w-[35%] md:h-[90%]"></div>
    </div>
    <div class="font-poppins py-8 md:basis-1/2 md:py-16 md:px-24">
        <div class="text-xl text-rose-800 font-black mb-4 md:text-3xl text-center">FUTURE BUSINESS</div>
        <div class="text-justify md:text-lg">FALGA proactively explore and appraise new businesses that can drive sustainable values. Our group positions our management strategy to be agile to market movement and to be open to new business prospects.</div>
        <div class="text-center my-4 md:mt-10 flex justify-center">
            <a href="{{ url('future-business') }}" class="falga-button uppercase text-xs md:mx-auto">See All</a>
        </div>
    </div>
</div>
