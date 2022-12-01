<div>
    {{-- Footer --}}
    <footer class="pt-8 bg-violet-falga">
        <div class="container mx-auto px-4 text-white">
            <div class="flex flex-wrap flex-col sm:flex-row text-left lg:text-left">
                <div class="order-last sm:order-first sm:w-1/2 lg:w-6/12 px-4 mb-10">
                    <img src="{{ asset('img/logo-falga-white.png') }}" alt="" class="h-[60px] object-cover">
                    <div class="grid grid-cols-5 mt-10 text-sm">
                        <div class="font-semibold">Phone</div>
                        <div class="col-span-4">: <a href="tel:+6221576080">(021) 576-0880</a></div>
                        <div class="font-semibold">Email</div>
                        <div class="col-span-4">: <a href="mailto:corporate.secretary@falga.co.id">corporate.secretary@falga.co.id</a></div>
                        <div class="font-semibold">Address</div>
                        <div class="col-span-4">: Menara Dea Tower II, Mega Kuningan Street, Kuningan, Setiabudi, South
                            Jakarta, Jakarta</div>
                        <div class="font-semibold">Website</div>
                        <div class="col-span-4">: <a href="{{ url('') }}">www.falga.co.id</a></div>
                    </div>
                </div>
                <div class="sm:w-1/2 lg:w-6/12 sm:pl-10 pr-4">
                    <div class="flex flex-wrap items-top mb-6">
                        <div class="w-auto lg:w-6/12 px-4">
                            <span class="block text-blueGray-500 text-sm font-semibold mb-2">About Us</span>
                            <ul class="list-unstyled">
                                <li>
                                    <a href="{{ url('about-us') }}" class="block text-sm" href="">About</a>
                                </li>
                                <li>
                                    <a href="{{ url('about-us#vision-missions') }}" class="block text-sm" href="">Vision & Missions</a>
                                </li>
                                <li>
                                    <a href="{{ url('about-us#core-values') }}" class="block text-sm" href="">Core Values</a>
                                </li>
                                <li>
                                    <a href="{{ url('about-us#key-person') }}" class="block text-sm" href="">Key Person</a>
                                </li>
                            </ul>
                            <span class="block text-sm font-semibold mb-2 mt-4">ESG</span>
                            <ul class="list-unstyled">
                                <li>
                                    <a href="{{ url('esg?q=sustainability#breadrumbs') }}" class="block text-sm" href="">Sustainability Report</a>
                                </li>
                                <li>
                                    <a href="{{ url('esg?q=presentation#breadrumbs') }}" class="block text-sm" href="">Corporate Presentation</a>
                                </li>
                                <li>
                                    <a href="{{ url('esg?q=governance#breadrumbs') }}" class="block text-sm" href="">Good Corporate Governance</a>
                                </li>
                            </ul>
                            <a href="{{ url('career') }}" class="block text-sm font-semibold mb-2 mt-4">Career</a>
                        </div>
                        <div class="w-full lg:w-6/12 px-4">
                            <span class="block text-blueGray-500 text-sm font-semibold mb-2">Our Business</span>
                            <ul class="list-unstyled">
                                <li>
                                    <a href="{{ url('epci-business') }}" class="block text-sm" href="">EPCI Business</a>
                                </li>
                                <li>
                                    <a href="{{ url('oil-and-gas-business') }}" class="block text-sm" href="">Oil & Gas Retail</a>
                                </li>
                                <li>
                                    <a class="block text-sm" href="">Industrial Equipment Rental</a>
                                </li>
                                <li>
                                    <a href="{{ url('prop-business') }}" class="block text-sm" href="">Property & Hospitality</a>
                                </li>
                                <li>
                                    <a href="{{ url('future-business') }}" class="block text-sm" href="">Future Business</a>
                                </li>
                            </ul>
                            <a href="{{ url('media-and-information') }}" class="block text-sm font-semibold mb-2 mt-4">Media</a>
                            <ul class="list-unstyled">
                                <li>
                                    <a href="{{ url('media-and-information?q=portfolio#breadrumbs') }}" class="block text-sm" href="">Portofolio</a>
                                </li>
                                <li>
                                    <a href="{{ url('media-and-information?q=blog#breadrumbs') }}" class="block text-sm" href="">Blog</a>
                                </li>
                                <li>
                                    <a href="{{ url('media-and-information?q=video#breadrumbs') }}" class="block text-sm" href="">Videos</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-wrap items-center md:justify-between justify-center bg-white">
            <div class="w-full md:w-4/12 px-4 mx-auto text-center">
                <div class="text-xs py-4">
                    Copyright © <span id="get-current-year">2022</span><a href="https://www.falga.co.id" class="font-black hover:text-gray-800" target="_blank"> FALGA GROUP
                </div>
            </div>
        </div>
    </footer>
</div>
