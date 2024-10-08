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
            <div class="flex-1"><a href="tel:+62215760931" class="inline-block py-1 md:py-1 hover:opacity-60">(021) 576-0931</a></div>
          </div>
          <div class="flex text-sm">
            <div class="font-semibold py-1 md:py-1 min-w-[80px]">Email</div>
            <div class="py-1 md:py-1 mr-1">:</div>
            <div class="flex-1"><a href="mailto:corporate.secretary@falga.co.id" class="inline-block py-1 md:py-1 hover:opacity-60">corporate.secretary@falga.co.id</a></div>
          </div>
          <div class="flex text-sm items-start">
            <div class="font-semibold py-1 md:py-1 min-w-[80px]">Address</div>
            <div class="py-1 md:py-1 mr-1">:</div>
            <div class="flex-1">
              <a
                href="https://maps.google.com/maps?ll=-6.22846,106.824097&z=16&t=m&hl=id&gl=ID&mapclient=embed&q=Dea%20Tower%20Jl.%20Mega%20Kuningan%20Barat%20No.1%20RT.5%2FRW.2%2C%20Kuningan%2C%20East%20Kuningan%20Setiabudi%2C%20South%20Jakarta%20City%2C%20Jakarta%2012950"
                rel=”noreferrer”
                class="inline-block py-1 md:py-1 text-sm hover:opacity-60"
              >
                Menara Palma 15th Floor, Jl. H. R. Rasuna Said Kav VI No.9, Kuningan, Setiabudi, Jakarta 12950
              </a>
            </div>
          </div>
          <div class="flex text-sm">
            <div class="font-semibold py-1 md:py-1 min-w-[80px]">Website</div>
            <div class="py-1 md:py-1 mr-1">:</div>
            <div class="flex-1"><a href="{{ url('') }}" class="inline-block py-1 md:py-1 hover:opacity-60">www.falga.co.id</a></div>
          </div>
          <div class="flex mt-2">
            <a href="https://www.instagram.com/falga.group" target="_blank" rel="noreferrer" class="w-9 h-9 flex items-center justify-center">
              <img data-src="{{ mix('img/social/instagram.svg') }}" class="lozad w-8 h-8" alt="I"></img>
            </a>
            <a href="https://www.facebook.com/falgagroup" target="_blank" rel="noreferrer" class="w-9 h-9 flex items-center justify-center">
              <img data-src="{{ mix('img/social/facebook.svg') }}" class="lozad w-8 h-8" alt="F"></img>
            </a>
            <a href="https://www.linkedin.com/company/falga-group" target="_blank" rel="noreferrer" class="w-9 h-9 flex items-center justify-center">
              <img data-src="{{ mix('img/social/linkedin.svg') }}" class="lozad w-8 h-8" alt="iN"></img>
            </a>
            <a href="https://www.youtube.com/channel/UCl12rlNzr1b4z55Je3psHzg" target="_blank" rel="noreferrer" class="w-9 h-9 flex items-center justify-center">
              <img data-src="{{ mix('img/social/youtube.svg') }}" class="lozad w-8 h-8" alt="YT"></img>
            </a>
            <a href="https://twitter.com/falgagroup" target="_blank" rel="noreferrer" class="w-9 h-9 flex items-center justify-center">
              <img data-src="{{ mix('img/social/twitter.svg') }}" class="lozad w-8 h-8" alt="T"></img>
            </a>
            <a href="mailto:corporate.secretary@falga.co.id" target="_blank" rel="noreferrer" class="w-9 h-9 flex items-center justify-center">
              <img data-src="{{ mix('img/social/gmail.svg') }}" class="lozad w-8 h-8" alt="M"></img>
            </a>
          </div>
        </div>
        <div class="sm:w-1/2 lg:w-6/12 sm:pl-10">
          <div class="flex flex-wrap items-top mb-6">
            <div class="w-auto lg:w-6/12 px-4">
              <span class="block text-blueGray-500 text-sm font-semibold">
                <a href="{{ url('about-us') }}" class="py-4 md:py-4 pb-2 md:pb-2 block hover:opacity-70">About Us</a>
              </span>
              <ul class="list-unstyled">
                <li>
                  <a href="{{ url('about-us') }}" class="block text-sm py-1 md:py-1 hover:opacity-70">About Us</a>
                </li>
                <li>
                  <a href="{{ url('about-us#vision-missions') }}" class="block text-sm py-1 md:py-1 hover:opacity-70">Vision & Missions</a>
                </li>
                <li>
                  <a href="{{ url('about-us#core-values') }}" class="block text-sm py-1 md:py-1 hover:opacity-70">Core Values</a>
                </li>
                <li>
                  <a href="{{ url('about-us#key-person') }}" class="block text-sm py-1 md:py-1 hover:opacity-70">Key Person</a>
                </li>
              </ul>
              <a href="{{ url('our-business') }}" class="block text-sm font-semibold py-4 md:py-4 pb-2 md:pb-2 mt-3 hover:opacity-70">Our Business</a>
              <ul class="list-unstyled">
                <li>
                  <a href="{{ url('epci-business') }}" class="block text-sm py-1 md:py-1 hover:opacity-70">EPCI Business</a>
                </li>
                <li>
                  <a href="{{ url('oil-and-gas-business') }}" class="block text-sm py-1 md:py-1 hover:opacity-70">Oil & Gas Retail</a>
                </li>
                <li>
                  <a href="{{ url('industrial-rental') }}" class="block text-sm py-1 md:py-1 hover:opacity-70">Industrial Equipment Rental</a>
                </li>
                <li>
                  <a href="{{ url('prop-business') }}" class="block text-sm py-1 md:py-1 hover:opacity-70">Property & Hospitality</a>
                </li>
                <li>
                  <a href="{{ url('future-business') }}" class="block text-sm py-1 md:py-1 hover:opacity-70">Future Business</a>
                </li>
                <li>
                  <a href="{{ url('projects') }}" class="block text-sm py-1 md:py-1 hover:opacity-70">Project Portfolio</a>
                </li>
              </ul>
            </div>
            <div class="w-full lg:w-6/12 px-4">
              <span class="block text-blueGray-500 text-sm font-semibold">
                <a href="{{ url('sustainability') }}" class="py-4 md:py-4 pb-2 md:pb-2 block hover:opacity-70">Sustainability</a>
              </span>
              {{-- <span class="block text-sm font-semibold py-4 md:py-4 pb-2 md:pb-2 mt-3 md:mt-0">Sustainability</span> --}}
              <ul class="list-unstyled">
                <li>
                  <a href="{{ url('sustainability?q=strategy-management#breadrumbs') }}" class="block text-sm py-1 md:py-1 hover:opacity-70">Strategy & Management</a>
                </li>
                <li>
                  <a href="{{ url('sustainability?q=reports#breadrumbs') }}" class="block text-sm py-1 md:py-1 hover:opacity-70">Reports</a>
                </li>
                {{-- <li>
                  <a href="{{ url('esg?q=governance#breadrumbs') }}" class="block text-sm py-1 md:py-1">Good Corporate Governance</a>
                </li> --}}
              </ul>
              {{-- <a href="{{ url('projects') }}" class="block text-sm font-semibold py-4 md:py-4 pb-2 md:pb-2 mt-4">Projects</a> --}}
              <a href="{{ url('media-and-information') }}" class="block text-sm font-semibold py-4 md:py-4 pb-2 md:pb-2 mt-3 hover:opacity-70">Media</a>
              <ul class="list-unstyled">
                <li>
                  <a href="{{ url('media-and-information?q=news#breadrumbs') }}" class="block text-sm py-1 md:py-1 hover:opacity-70">News</a>
                </li>
                {{-- <li>
                  <a href="{{ url('media-and-information?q=blog#breadrumbs') }}" class="block text-sm py-1 md:py-1 hover:opacity-70">Blog</a>
                </li> --}}
                <li>
                  <a href="{{ url('media-and-information?q=video#breadrumbs') }}" class="block text-sm py-1 md:py-1 hover:opacity-70">Videos</a>
                </li>
              </ul>
              <a href="{{ url('career') }}" class="block text-sm font-semibold py-4 md:py-4 pb-2 md:pb-2 mt-3 hover:opacity-70">Career</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="bg-white">
      <div class="container mx-auto">
        <div class="text-xs py-4 px-8">
          Copyright © {{ date('Y') }} | <a href="https://www.falga.co.id" class="font-black hover:text-gray-800 hover:opacity-70" target="_blank">FALGA GROUP</a>
        </div>
      </div>
    </div>
  </footer>
</div>
