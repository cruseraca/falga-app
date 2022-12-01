{{-- Banner --}}
<div
    class="md:w-full bg-[url('/img/our-business/prop-and-hospitality/banner.jpeg')] bg-no-repeat bg-cover bg-top flex mt-[61px] md:mt-[77px]">
    <div class="container text-center h-[400px] lg:h-[766px] text-white flex flex-col justify-end items-center mx-auto"
        style="margin-bottom: 80px">
        <h1 class="font-poppins font-extrabold text-xl md:text-2xl lg:text-4xl lg:leading-relaxed uppercase"
            style="text-shadow: 0px 4px 4px #000000;">
            PROPERTY AND HOSPITALITY
        </h1>
    </div>
</div>
@component('components.bread-crumbs', ["items" => [
    [ "title" => "HOME", "href" => url("") ],
    [ "title" => "OUR BUSINESS", "href" => url("our-business") ],
    [ "title" => "PROPERTY AND HOSPITALITY", "color" => "red-falga" ]
]])
@endcomponent
<div class="flex flex-col my-4 md:relative">
    <div class="flex relative h-[360px] w-full md:h-screen">
        <div class="absolute bg-rose-900 h-[75%] w-[20%] bottom-[50%] translate-y-1/2 right-[10%] md:right-[5%] md:bottom-[55%]">
        </div>
        <div class="z-10 w-[70%] h-[65%] m-auto md:mr-[10%] md:m-0 md:ml-auto md:mt-[10%] md:h-[566px] md:w-[60%]">
            <img class="object-cover h-full w-full" src="{{ asset('img/our-business/hospitality.jpg') }}" alt="">
        </div>
    </div>
    <div class="relative w-[85%] mx-auto bg-white border border-gray-200 rounded-lg shadow-md hover:bg-gray-100 overflow-hidden md:absolute md:z-20 md:top-[50%] md:left-[10%] md:w-[575px]">
        <div class="absolute h-full w-[5%] top-0 bg-gradient-to-b from-indigo-900 to to-pink-700 md:w-[20px]"></div>
        <div class="py-6 pl-10 pr-6">
            <h5 class="font-poppins mb-4 text-[28px] font-bold tracking-tight text-rose-900">BUDGET LODGES</h5>
            <p class="font-sans font-normal text-justify text-[16px]">FALGA owns and manages several budget lodges that offer comfortable & affordable residences with well maintained rooms & professional staff. Our house accommodation are fully furnished and equipped with friendly amenities such as Wifi, laundry facilities, coffee maker, smart lock, etc. We strive to provide pleasant and enjoyable experience to our tenants with competitive price.</p>
        </div>
    </div>
</div>
<div class="flex flex-col py-4 bg-gray-100 md:relative">
    <div class="flex flex-col relative h-[350px] w-full md:h-screen">
        <div class="absolute bg-[#584B8F] h-[75%] w-[20%] bottom-[50%] translate-y-1/2 left-[10%] md:left-[5%] md:bottom-[55%]">
        </div>
        <div class="z-10 w-[70%] h-[65%] m-auto md:ml-[10%] md:m-0 md:mr-auto md:mt-[10%] md:h-[566px] md:w-[60%]">
            <img class="object-cover h-full w-full" src="{{ asset('/img/our-business/prop-and-hospitality/house1.jpg') }}" alt="">
        </div>
    </div>
    <div class="relative w-[85%] mx-auto bg-white border border-gray-200 rounded-lg shadow-md hover:bg-gray-100 overflow-hidden md:absolute md:z-20 md:top-[50%] md:right-[10%] md:w-[575px]">
        <div class="absolute h-full w-[5%] top-0 right-0 bg-gradient-to-t from-indigo-900 to to-pink-700 md:w-[20px]"></div>
        <div class="py-6 pl-6 pr-10">
            <h5 class="font-poppins mb-4 text-[28px] font-bold tracking-tight text-rose-900">BOARDING HOUSES</h5>
            <p class="font-sans font-normal text-justify text-[16px]">FALGA owns and manages multiple boarding houses (guest houses) ranging from 15- to 35-room boarding houses. We offer ready-to-live-in rooms designed to accommodate our tenants for short-term or long stay. Our rooms are equipped with IoT enabled smart lock and smart TV to provide pleasant experience for our tenants.</p>
        </div>
    </div>
</div>
