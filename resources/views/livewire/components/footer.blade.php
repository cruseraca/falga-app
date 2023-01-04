<div>
  {{-- Footer --}}
  <footer class="pt-8 bg-violet-falga">
    <div class="container mx-auto px-4 text-white">
      <div class="flex flex-wrap flex-col sm:flex-row text-left lg:text-left">
        <div class="order-last sm:order-first sm:w-1/2 lg:w-6/12 px-4 mb-10">
          <img data-src="{{ mix('img/logo-falga-white.png') }}" alt="Falga" class="lozad h-[60px] w-[171.1px] object-cover">
          <div class="grid grid-cols-5 mt-10 text-sm">
            <div class="font-semibold py-4 md:py-2">Phone</div>
            <div class="col-span-4">: <a href="tel:+62215760931" class="inline-block py-4 md:py-2">(021) 576-0931</a></div>
            <div class="font-semibold py-4 md:py-2">Email</div>
            <div class="col-span-4">: <a href="mailto:corporate.secretary@falga.co.id" class="inline-block py-4 md:py-2">corporate.secretary@falga.co.id</a></div>
            <div class="font-semibold py-4 md:py-2">Address</div>
            <div class="col-span-4 py-4 md:py-2">: DEA Tower II 7th Floor, Jl. Mega Kuningan Barat No.1-2, Kuningan, Kecamatan Setiabudi, Daerah Khusus Ibukota Jakarta 12950</div>
            <div class="font-semibold py-4 md:py-2">Website</div>
            <div class="col-span-4">: <a href="{{ url('') }}" class="inline-block py-4 md:py-2">www.falga.co.id</a></div>
          </div>
        </div>
        <div class="sm:w-1/2 lg:w-6/12 sm:pl-10 pr-4">
          <div class="flex flex-wrap items-top mb-6">
            <div class="w-auto lg:w-6/12 px-4">
              <span class="block text-blueGray-500 text-sm font-semibold">
                <a href="{{ url('about-us') }}" class="py-4 md:py-2 block">About Us</a>
              </span>
              <ul class="list-unstyled">
                <li>
                  <a href="{{ url('about-us') }}" class="block text-sm py-4 md:py-1">About</a>
                </li>
                <li>
                  <a href="{{ url('about-us#vision-missions') }}" class="block text-sm py-4 md:py-1">Vision & Missions</a>
                </li>
                <li>
                  <a href="{{ url('about-us#core-values') }}" class="block text-sm py-4 md:py-1">Core Values</a>
                </li>
                <li>
                  <a href="{{ url('about-us#key-person') }}" class="block text-sm py-4 md:py-1">Key Person</a>
                </li>
              </ul>
              <span class="block text-sm font-semibold my-2 mt-4">Sustainability</span>
              <ul class="list-unstyled">
                <li>
                  <a href="{{ url('sustainability?q=report#breadrumbs') }}" class="block text-sm py-4 md:py-1">Report</a>
                </li>
                <li>
                  <a href="{{ url('sustainability?q=system#breadrumbs') }}" class="block text-sm py-4 md:py-1">System</a>
                </li>
                {{-- <li>
                  <a href="{{ url('esg?q=governance#breadrumbs') }}" class="block text-sm py-4 md:py-1">Good Corporate Governance</a>
                </li> --}}
              </ul>
              <a href="{{ url('career') }}" class="block text-sm font-semibold py-4 md:py-2 mt-4">Career</a>
            </div>
            <div class="w-full lg:w-6/12 px-4">
              <span class="block text-blueGray-500 text-sm font-semibold py-4 md:py-2">
                <a href="{{ url('our-business') }}">Our Business</a>
              </span>
              <ul class="list-unstyled">
                <li>
                  <a href="{{ url('epci-business') }}" class="block text-sm py-4 md:py-1">EPCI Business</a>
                </li>
                <li>
                  <a href="{{ url('oil-and-gas-business') }}" class="block text-sm py-4 md:py-1">Oil & Gas Retail</a>
                </li>
                <li>
                  <a href="{{ url('industrial-rental') }}" class="block text-sm py-4 md:py-1">Industrial Equipment Rental</a>
                </li>
                <li>
                  <a href="{{ url('prop-business') }}" class="block text-sm py-4 md:py-1">Property & Hospitality</a>
                </li>
                <li>
                  <a href="{{ url('future-business') }}" class="block text-sm py-4 md:py-1">Future Business</a>
                </li>
              </ul>
              <a href="{{ url('projects') }}" class="block text-sm font-semibold py-4 md:py-2 mt-4">Projects</a>
              <a href="{{ url('media-and-information') }}" class="block text-sm font-semibold py-4 md:py-2 mt-4">Media</a>
              <ul class="list-unstyled">
                <li>
                  <a href="{{ url('media-and-information?q=news#breadrumbs') }}" class="block text-sm py-4 md:py-1">News</a>
                </li>
                <li>
                  <a href="{{ url('media-and-information?q=blog#breadrumbs') }}" class="block text-sm py-4 md:py-1">Blog</a>
                </li>
                <li>
                  <a href="{{ url('media-and-information?q=video#breadrumbs') }}" class="block text-sm py-4 md:py-1">Videos</a>
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
          Copyright © {{ date('Y') }} | <a href="https://www.falga.co.id" class="font-black hover:text-gray-800" target="_blank">FALGA GROUP</a>
        </div>
      </div>
    </div>
  </footer>
</div>
