<nav class="bg-white px-2 sm:px-4 py-2.5 dark:bg-gray-900 fixed w-full z-[1000] top-0 left-0 border-b border-gray-200 dark:border-gray-600">
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
      <ul class="flex flex-col p-4 mt-4 bg-white rounded-lg border border-gray-100 md:items-center md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
        <li class="md:block">
          <div class="flex items-center" id="navbar-popover-trigger-about" data-dropdown-offset="0">
            <a id="navbar-popover-trigger-link" href="{{ url('about-us') }}" type="button" class="md:text-xs lg:text-sm py-2 pr-4 pl-3 w-full text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-red-falga md:p-0 md:w-auto dark:text-gray-400 dark:hover:text-white dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent uppercase font-bold">
              About Us
            </a>
            <div class="md:hidden md:text-xs lg:text-sm cursor-pointer py-2 px-4">
              <i id="navbar-popover-trigger-icon" class="fa-solid fa-caret-down"></i>
            </div>
          </div>
          <div id="navbar-popover-about" class="z-10 hidden w-64 text-sm font-light text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800">
            <div class="py-2">
              <ul class="py-1 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="navbar-popover-trigger-about">
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
        <li class="md:block">
          <div class="flex items-center" id="navbar-popover-trigger-business" data-dropdown-offset="0">
            <a id="navbar-popover-trigger-link" href="{{ url('our-business') }}" type="button" class="md:text-xs lg:text-sm py-2 pr-4 pl-3 w-full text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-red-falga md:p-0 md:w-auto dark:text-gray-400 dark:hover:text-white dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent uppercase font-bold">
              Our Business
            </a>
            <div class="md:hidden md:text-xs lg:text-sm cursor-pointer py-2 px-4">
              <i id="navbar-popover-trigger-icon" class="fa-solid fa-caret-down"></i>
            </div>
          </div>
          <div id="navbar-popover-business" role="tooltip" class="z-10 hidden w-64 text-sm font-light text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800">
            <div class="py-2">
              <ul class="py-1 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="navbar-popover-trigger-business">
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
        <li class="md:block">
          <div class="flex items-center" id="navbar-popover-trigger-sustainability" data-dropdown-offset="0">
            <a id="navbar-popover-trigger-link" href="{{ url('sustainability') }}" type="button" class="md:text-xs lg:text-sm py-2 pr-4 pl-3 w-full text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-red-falga md:p-0 md:w-auto dark:text-gray-400 dark:hover:text-white dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent uppercase font-bold">
              Sustainability
            </a>
            <div class="md:hidden md:text-xs lg:text-sm cursor-pointer py-2 px-4">
              <i id="navbar-popover-trigger-icon" class="fa-solid fa-caret-down"></i>
            </div>
          </div>
          <div id="navbar-popover-sustainability" role="tooltip" class="z-10 hidden w-64 text-sm font-light text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800">
            <div class="py-2">
              <ul class="py-1 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="navbar-popover-trigger-sustainability">
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
        <li class="md:block">
          <div class="flex items-center" id="navbar-popover-trigger-media" data-dropdown-offset="0">
            <a id="navbar-popover-trigger-link" href="{{ url('media-and-information') }}" type="button" class="md:text-xs lg:text-sm py-2 pr-4 pl-3 w-full text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-red-falga md:p-0 md:w-auto dark:text-gray-400 dark:hover:text-white dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent uppercase font-bold">
              Media
            </a>
            <div class="md:hidden md:text-xs lg:text-sm cursor-pointer py-2 px-4">
              <i id="navbar-popover-trigger-icon" class="fa-solid fa-caret-down"></i>
            </div>
          </div>
          <div id="navbar-popover-media" role="tooltip" class="z-10 hidden w-64 text-sm font-light text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800">
            <div class="py-2">
              <ul class="py-1 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="navbar-popover-trigger-media">
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
        <li class="md:block">
          <a href="{{ url('career') }}" class="md:text-xs lg:text-sm block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-red-falga md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 uppercase font-bold">Career</a>
        </li>
      </ul>
      <div class="bg-white flex-1 flex justify-end">
        <a href="{{ url('/#contact-us') }}" class="text-sm md:text-xs lg:text-sm falga-button flex-1 md:flex-none">Contact Us</a>
      </div>
    </div>
  </div>
</nav>
