<div>
  {{-- Footer --}}
  <footer class="pt-8 bg-violet-falga">
    <div class="container mx-auto px-4 text-white">
      <div class="flex flex-wrap flex-col sm:flex-row text-left lg:text-left">
        <div class="order-last sm:order-first sm:w-1/2 lg:w-6/12 mb-10 px-4">
          <img data-src="{{ mix('img/logo-falga-white.png') }}" alt="Falga" class="lozad h-[60px] w-[171.1px] object-cover">
          <div class="flex mt-10 text-sm">
            <div class="font-semibold py-1 md:py-1 min-w-[80px]">Phone</div>
            <div class="py-1 md:py-1 mr-1">:</div>
            <div class="flex-1"><a href="tel:+62215760931" class="inline-block py-1 md:py-1">(021) 576-0931</a></div>
          </div>
          <div class="flex text-sm">
            <div class="font-semibold py-1 md:py-1 min-w-[80px]">Email</div>
            <div class="py-1 md:py-1 mr-1">:</div>
            <div class="flex-1"><a href="mailto:corporate.secretary@falga.co.id" class="inline-block py-1 md:py-1">corporate.secretary@falga.co.id</a></div>
          </div>
          <div class="flex text-sm items-start">
            <div class="font-semibold py-1 md:py-1 min-w-[80px]">Address</div>
            <div class="py-1 md:py-1 mr-1">:</div>
            <div class="flex-1 py-1 md:py-1">Dea Tower II 7th Floor, Jl. Mega Kuningan Barat No.1-2, Kuningan, Kecamatan Setiabudi, Daerah Khusus Ibukota Jakarta 12950</div>
          </div>
          <div class="flex text-sm">
            <div class="font-semibold py-1 md:py-1 min-w-[80px]">Website</div>
            <div class="py-1 md:py-1 mr-1">:</div>
            <div class="flex-1"><a href="{{ url('') }}" class="inline-block py-1 md:py-1">www.falga.co.id</a></div>
          </div>
        </div>
        <div class="sm:w-1/2 lg:w-6/12 sm:pl-10">
          <div class="flex flex-wrap items-top mb-6">
            <div class="w-auto lg:w-6/12 px-4">
              <span class="block text-blueGray-500 text-sm font-semibold">
                <a href="{{ url('about-us') }}" class="py-4 md:py-4 pb-2 md:pb-2 block">About Us</a>
              </span>
              <ul class="list-unstyled">
                <li>
                  <a href="{{ url('about-us') }}" class="block text-sm py-1 md:py-1">About Us</a>
                </li>
                <li>
                  <a href="{{ url('about-us#vision-missions') }}" class="block text-sm py-1 md:py-1">Vision & Missions</a>
                </li>
                <li>
                  <a href="{{ url('about-us#core-values') }}" class="block text-sm py-1 md:py-1">Core Values</a>
                </li>
                <li>
                  <a href="{{ url('about-us#key-person') }}" class="block text-sm py-1 md:py-1">Key Person</a>
                </li>
              </ul>
              <span class="block text-blueGray-500 text-sm font-semibold py-4 md:py-4 pb-2 md:pb-2 mt-3">
                <a href="{{ url('our-business') }}">Our Business</a>
              </span>
              <ul class="list-unstyled">
                <li>
                  <a href="{{ url('epci-business') }}" class="block text-sm py-1 md:py-1">EPCI Business</a>
                </li>
                <li>
                  <a href="{{ url('oil-and-gas-business') }}" class="block text-sm py-1 md:py-1">Oil & Gas Retail</a>
                </li>
                <li>
                  <a href="{{ url('industrial-rental') }}" class="block text-sm py-1 md:py-1">Industrial Equipment Rental</a>
                </li>
                <li>
                  <a href="{{ url('prop-business') }}" class="block text-sm py-1 md:py-1">Property & Hospitality</a>
                </li>
                <li>
                  <a href="{{ url('future-business') }}" class="block text-sm py-1 md:py-1">Future Business</a>
                </li>
                <li>
                  <a href="{{ url('projects') }}" class="block text-sm py-1 md:py-1">Project Portfolio</a>
                </li>
              </ul>
            </div>
            <div class="w-full lg:w-6/12 px-4">
              <span class="block text-sm font-semibold py-4 md:py-4 pb-2 md:pb-2 mt-3 md:mt-0">Sustainability</span>
              <ul class="list-unstyled">
                <li>
                  <a href="{{ url('sustainability?q=strategy-management#breadrumbs') }}" class="block text-sm py-1 md:py-1">Strategy & Management</a>
                </li>
                <li>
                  <a href="{{ url('sustainability?q=reports#breadrumbs') }}" class="block text-sm py-1 md:py-1">Reports</a>
                </li>
                {{-- <li>
                  <a href="{{ url('esg?q=governance#breadrumbs') }}" class="block text-sm py-1 md:py-1">Good Corporate Governance</a>
                </li> --}}
              </ul>
              {{-- <a href="{{ url('projects') }}" class="block text-sm font-semibold py-4 md:py-4 pb-2 md:pb-2 mt-4">Projects</a> --}}
              <a href="{{ url('media-and-information') }}" class="block text-sm font-semibold py-4 md:py-4 pb-2 md:pb-2 mt-3">Media</a>
              <ul class="list-unstyled">
                <li>
                  <a href="{{ url('media-and-information?q=news#breadrumbs') }}" class="block text-sm py-1 md:py-1">News</a>
                </li>
                <li>
                  <a href="{{ url('media-and-information?q=blog#breadrumbs') }}" class="block text-sm py-1 md:py-1">Blog</a>
                </li>
                <li>
                  <a href="{{ url('media-and-information?q=video#breadrumbs') }}" class="block text-sm py-1 md:py-1">Videos</a>
                </li>
              </ul>
              <a href="{{ url('career') }}" class="block text-sm font-semibold py-4 md:py-4 pb-2 md:pb-2 mt-3">Career</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="bg-white">
      <div class="container mx-auto">
        <div class="text-xs py-4 px-8">
          Copyright © {{ date('Y') }} | <a href="https://www.falga.co.id" class="font-black hover:text-gray-800" target="_blank">FALGA GROUP</a>
        </div>
      </div>
    </div>
  </footer>
</div>
