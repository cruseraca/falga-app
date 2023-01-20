<nav class="bg-white px-2 sm:px-4 py-2.5 dark:bg-gray-900 fixed w-screen z-[1000] top-0 left-0 border-b border-gray-200 dark:border-gray-600">
  <div class="falga-header flex flex-wrap justify-between items-center mx-auto h-auto">
    <a href="{{ url('') }}">
      <img class="h-[36px] w-[98.1833px] lg:h-[56px] lg:w-[152.733px] object-cover" src="{{ mix('img/logo-falga.svg') }}" alt="FALGA">
    </a>
    <div class="flex shrink">
      <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
        </svg>
      </button>
    </div>
    <div class="hidden justify-between items-center w-full md:max-w-[868px] md:flex md:flex-1 uppercase" id="navbar-sticky">
      <ul class="flex flex-col p-4 mt-4 bg-gray-50 rounded-lg border border-gray-100 md:items-center md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
        <li class="hidden md:block">
          <a href="{{ url('about-us') }}" data-popover-target="about-us-pop" type="button" class="text-sm md:text-xs lg:text-sm py-2 pr-4 pl-3 w-full text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-red-falga md:p-0 md:w-auto dark:text-gray-400 dark:hover:text-white dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent uppercase font-bold">About Us</a>
          <div data-popover id="about-us-pop" role="tooltip" class="absolute z-10 invisible inline-block w-64 text-sm font-light text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow opacity-0 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800">
            <div class="py-2">
              <ul class="py-1 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                <li>
                  <a href="{{ url('about-us') }}" class="block py-2 px-8 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white hover:text-red-falga border-b font-bold">About Us</a>
                </li>
                <li>
                  <a href="{{ url('about-us#vision-missions') }}" class="block py-2 px-8 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white hover:text-red-falga">Vision & Missions</a>
                </li>
                <li>
                  <a href="{{ url('about-us#core-values') }}" class="block py-2 px-8 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white hover:text-red-falga">Core Values</a>
                </li>
                <li>
                  <a href="{{ url('about-us#key-person') }}" class="block py-2 px-8 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white hover:text-red-falga">Key Person</a>
                </li>
              </ul>
            </div>
          </div>
        </li>
        <li class="md:hidden">
          <a href="{{ url('about-us') }}" class="block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-red-falga md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 font-bold">
            About Us
          </a>
        </li>
        <li class="hidden md:block">
          <a href="{{ url('our-business') }}" data-popover-target="our-business-pop" type="button" class="text-sm md:text-xs lg:text-sm py-2 pr-4 pl-3 w-full text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-red-falga md:p-0 md:w-auto dark:text-gray-400 dark:hover:text-white dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent uppercase font-bold">Our Business</a>
          <div data-popover id="our-business-pop" role="tooltip" class="absolute z-10 invisible inline-block w-64 text-sm font-light text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow opacity-0 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800">
            <div class="py-2">
              <ul class="py-1 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                <li>
                  <a href="{{ url('our-business') }}" class="block py-2 px-8 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white hover:text-red-falga border-b font-bold">Our Business</a>
                </li>
                <li>
                  <a href="{{ url('epci-business') }}" class="block py-2 px-8 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white hover:text-red-falga">EPCI Business</a>
                </li>
                <li>
                  <a href="{{ url('oil-and-gas-business') }}" class="block py-2 px-8 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white hover:text-red-falga">Oil & Gas Retail</a>
                </li>
                <li>
                  <a href="{{ url('industrial-rental') }}" class="block py-2 px-8 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white hover:text-red-falga">Industrial Rental</a>
                </li>
                <li>
                  <a href="{{ url('prop-business') }}" class="block py-2 px-8 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white hover:text-red-falga">Property & Hospitality</a>
                </li>
                <li>
                  <a href="{{ url('future-business') }}" class="block py-2 px-8 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white hover:text-red-falga">Future Bussiness</a>
                </li>
                <li>
                  <a href="{{ url('projects') }}" class="block py-2 px-8 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white hover:text-red-falga border-t">Project Portfolio</a>
                </li>
              </ul>
            </div>
          </div>
        </li>
        <li class="md:hidden">
          <a href="{{ url('our-business') }}" class="block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-red-falga md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 font-bold">
            Our Business
          </a>
        </li>
        {{-- <li class="md:hidden">
          <button id="our-business-mn" data-dropdown-toggle="our-business-dm" class="flex justify-between items-center py-2 pr-4 pl-3 w-full text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-red-falga md:p-0 md:w-auto dark:text-gray-400 dark:hover:text-white dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent uppercase font-bold">
            Our Bussiness<svg class="ml-1 w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
            </svg>
          </button>
          <!-- Dropdown menu -->
          <div id="our-business-dm" class="hidden z-10 w-64 font-normal bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
            <a href="{{ url('our-business') }}" class="block py-2 px-8 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white hover:text-red-falga">Our Business</a>
            <div class="py-3 px-4 text-sm text-gray-900 dark:text-white">
              <ul class="py-1 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                <li>
                  <a href="{{ url('epci-business') }}" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white hover:text-red-falga">EPCI Business</a>
                </li>
                <li>
                  <a href="{{ url('oil-and-gas-business') }}" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white hover:text-red-falga">Oil & Gas Retail</a>
                </li>
                <li>
                  <a href="{{ url('industrial-rental') }}" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white hover:text-red-falga">Industrial Rental</a>
                </li>
                <li>
                  <a href="{{ url('prop-business') }}" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white hover:text-red-falga">Property & Hospitality</a>
                </li>
                <li>
                  <a href="{{ url('future-business') }}" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white hover:text-red-falga">Future Bussiness</a>
                </li>
                <li>
                  <a href="{{ url('projects') }}" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white hover:text-red-falga border-t">Project Portfolio</a>
                </li>
              </ul>
            </div>
          </div>
        </li> --}}
        <li class="hidden md:block">
          <a href="{{ url('sustainability') }}" data-popover-target="sustainability-pop" type="button" class="text-sm md:text-xs lg:text-sm py-2 pr-4 pl-3 w-full text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-red-falga md:p-0 md:w-auto dark:text-gray-400 dark:hover:text-white dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent uppercase font-bold">Sustainability</a>
          <div data-popover id="sustainability-pop" role="tooltip" class="absolute z-10 invisible inline-block w-64 text-sm font-light text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow opacity-0 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800">
            <div class="py-2">
              <ul class="py-1 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                <li>
                  <a href="{{ url('sustainability') }}" class="block py-2 px-8 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white hover:text-red-falga border-b font-bold">Sustainability</a>
                </li>
                <li>
                  <a href="{{ url('sustainability?q=strategy-management') }}" class="block py-2 px-8 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white hover:text-red-falga">Strategy & Management</a>
                </li>
                <li>
                  <a href="{{ url('sustainability?q=reports') }}" class="block py-2 px-8 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white hover:text-red-falga">Reports</a>
                </li>
              </ul>
            </div>
          </div>
        </li>
        <li class="md:hidden">
          <a href="{{ url('sustainability') }}" class="block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-red-falga md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 font-bold">Sustainability</a>
        </li>
        <li class="hidden md:block">
          <a href="{{ url('media-and-information') }}" data-popover-target="media-and-information-pop" type="button" class="text-sm md:text-xs lg:text-sm py-2 pr-4 pl-3 w-full text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-red-falga md:p-0 md:w-auto dark:text-gray-400 dark:hover:text-white dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent uppercase font-bold">Media</a>
          <div data-popover id="media-and-information-pop" role="tooltip" class="absolute z-10 invisible inline-block w-64 text-sm font-light text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow opacity-0 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800">
            <div class="py-2">
              <ul class="py-1 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                <li>
                  <a href="{{ url('media-and-information') }}" class="block py-2 px-8 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white hover:text-red-falga border-b font-bold">Media</a>
                </li>
                <li>
                  <a href="{{ url('media-and-information?q=news') }}" class="block py-2 px-8 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white hover:text-red-falga">News</a>
                </li>
                <li>
                  <a href="{{ url('media-and-information?q=blog') }}" class="block py-2 px-8 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white hover:text-red-falga">Blog</a>
                </li>
                <li>
                  <a href="{{ url('media-and-information?q=video') }}" class="block py-2 px-8 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white hover:text-red-falga">Videos</a>
                </li>
              </ul>
            </div>
          </div>
        </li>
        <li class="md:hidden">
          <a href="{{ url('media-and-information') }}" class="block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-red-falga md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 font-bold">Media</a>
        </li>
        <li>
          <a href="{{ url('career') }}" class="md:text-xs lg:text-sm block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-red-falga md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 font-bold">Career</a>
        </li>
      </ul>
      <div class="bg-gray-50 flex-1 flex justify-end">
        <a href="{{ url('/#contact-us') }}" class="text-sm md:text-xs lg:text-sm falga-button flex-1 md:flex-none">Contact Us</a>
      </div>
    </div>
  </div>
</nav>
