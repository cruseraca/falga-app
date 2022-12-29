@push('styles')
<link href="{{ mix('css/media-and-information.css') }}" rel="stylesheet">
@endpush
@push('scripts')
<script src="https://unpkg.com/flowbite@1.5.4/dist/datepicker.js"></script>
@endpush
{{-- Banner --}}
<div class="lozad sm:w-full falga-banner bg-no-repeat bg-center bg-cover flex mt-[61px] md:mt-[77px] items-center justify-center" data-background-image="{{ mix('img/media-and-information/banner-progressive.jpeg') }}">
  <h1 class="font-poppins text-white my-[212px] md:my-[312px] text-center font-extrabold lg:text-4xl lg:leading-relaxed uppercase" style="text-shadow: 0px 4px 4px #000000;">
    MEDIA AND INFORMATION
  </h1>
</div>
@component('components.bread-crumbs', ["items" => [
[ "title" => "HOME", "href" => url("") ],
[ "title" => "MEDIA & INFORMATION" ],
[ "title" => $title, "color" => "red-falga" ]
]])
@endcomponent
<div class="falga-container flex mb-16 flex-col md:flex-row">
  <div>
    <div class="falga-section-title red-falga">
      <div class="p-2 md:p-6 border-b-2 mt-12 md:mt-24">MEDIA & INFORMATION</div>
    </div>
    <div class="mb-4 falga-section-title red-falga overflow-auto">
      <ul class="flex md:flex-col items-stretch" id="esg-tab" role="tablist">
        <li class="mr-2 md:mr-0" role="presentation">
          <a href="{{ url("media-and-information?q=portfolio#breadrumbs") }}" class="{{ $q == "portfolio" ? "falga-tab-active" : "" }} inline-block p-2 md:p-6 border-b-2 w-full whitespace-nowrap uppercase" id="portfolio-tab" type="button" role="tab" aria-controls="portfolio" aria-selected="false">Project Portfolio</a>
        </li>
        <li class="mr-2 md:mr-0" role="presentation">
          <a href="{{ url("media-and-information?q=blog#breadrumbs") }}" class="{{ $q == "blog" ? "falga-tab-active" : "" }} inline-block p-2 md:p-6 border-b-2 w-full whitespace-nowrap uppercase" id="blog-tab" type="button" role="tab" aria-controls="blog" aria-selected="false">Blog</a>
        </li>
        <li class="mr-2 md:mr-0" role="presentation">
          <a href="{{ url("media-and-information?q=video#breadrumbs") }}" class="{{ $q == "video" ? "falga-tab-active" : "" }} inline-block p-2 md:p-6 border-b-2 w-full whitespace-nowrap uppercase" id="video-tab" type="button" role="tab" aria-controls="video" aria-selected="false">Video</a>
        </li>
      </ul>
    </div>
  </div>
  <div id="esg-tab-content" class="flex-1 md:border-l">
    <div class="flex flex-wrap md:ml-8 md:px-4 mt-6 py-3">
      <button id="location-bt" data-dropdown-toggle="location" class="mt-2 mx-1 md:mx-2 bg-gray-50 border border-gray-300 text-gray-900 text-base md:text-xl rounded-lg focus:ring-red-falga focus:border-red-falga p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-red-falga dark:focus:border-red-falga flex items-baseline" type="button">
        <div class="flex-1 mx-6">Location</div> <i class="fa-solid fa-chevron-down"></i>
      </button>
      <!-- Dropdown menu -->
      <div id="location" class="hidden z-10 w-255 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 border">
        <ul class="py-1 text-xl text-gray-700 dark:text-gray-200" aria-labelledby="location-bt">
          <li>
            <a class="block py-2 px-4 hover:bg-gray-300 dark:hover:bg-gray-600 dark:hover:text-white">Makasar, Indonesian</a>
          </li>
          <li>
            <a class="block py-2 px-4 hover:bg-gray-300 dark:hover:bg-gray-600 dark:hover:text-white">Jayapura, Indonesian</a>
          </li>
          <li>
            <a class="block py-2 px-4 hover:bg-gray-300 dark:hover:bg-gray-600 dark:hover:text-white">Ngawi, Indonesia</a>
          </li>
          <li>
            <a class="block py-2 px-4 hover:bg-gray-300 dark:hover:bg-gray-600 dark:hover:text-white">Maumere, Indoensia</a>
          </li>
        </ul>
      </div>
      <button id="category-bt" data-dropdown-toggle="category" class="mt-2 mx-1 md:mx-2 bg-gray-50 border border-gray-300 text-gray-900 text-base md:text-xl rounded-lg focus:ring-red-falga focus:border-red-falga p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-red-falga dark:focus:border-red-falga flex items-center" type="button">
        <div class="flex-1 mx-6">Category</div> <i class="fa-solid fa-chevron-down"></i>
      </button>
      <!-- Dropdown menu -->
      <div id="category" class="hidden z-10 w-255 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 border">
        <ul class="py-1 text-xl text-gray-700 dark:text-gray-200" aria-labelledby="category-bt">
          <li>
            <a class="block py-2 px-4 hover:bg-gray-300 dark:hover:bg-gray-600 dark:hover:text-white">Category</a>
          </li>
        </ul>
      </div>
      {{-- <select id="category" class="mx-1 md:mx-2 bg-gray-50 md:min-w-32 border border-gray-300 text-gray-900 text-base md:text-xl rounded-lg focus:ring-red-falga focus:border-red-falga block p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-red-falga dark:focus:border-red-falga">
                <option selected>Category</option>
                <option value="epci">EPCI Buisnesss</option>
            </select> --}}
      <div class="relative mt-2 mx-1 md:mx-2">
        <div class="flex absolute inset-y-0 right-0 items-center pr-3 pointer-events-none">
          <i class="fa-regular fa-calendar-days"></i>
          {{-- <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg> --}}
        </div>
        <input datepicker datepicker-format="M, dd yyyy" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-base md:text-xl rounded-lg focus:ring-red-falga focus:border-red-falga block w-full pl-10 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date">
      </div>
    </div>
    <div class="flex flex-wrap items-stretch justify-center">
      @if($q == 'portfolio')
      @foreach($items as $item)
      <div class="falga-mni-item mt-8 md:mt-12 md:ml-12">
        <img class="lozad object-cover h-[242px] w-full" data-src="{{ $item["image"] }}" />
        <div class="font-bold text-red-falga mt-6 mx-6 capitalize">{{ $item["title"] }}</div>
        <div class="flex mx-6 text-xs mt-1 mb-6">
          <div class="pr-4 border-r border-black">{{ $item["location"] }}</div>
          <div class="pl-4">{{ $item["category"] }}</div>
        </div>
      </div>
      @endforeach
      @else
      @foreach($items as $item)
      <div class="falga-mni-item mt-8 md:mt-12 md:ml-12">
        <img class="lozad object-cover h-[242px] w-full" data-src="{{ $item["image"] }}" />
        <div class="font-bold text-red-falga mt-6 mx-6 capitalize">{{ $item["title"] }}</div>
        <div class="flex mx-6 text-xs mt-1 mb-6">{{ $item["description"] }}</div>
      </div>
      @endforeach
      @endif
    </div>
      @if($all_items_count > 4)
      @php
      $first_visible_page = max($page - 2, 1);
      $last_visible_page = min($page_count, $page + 2);
      @endphp
      <nav aria-label="Page navigation example" class="flex justify-center">
        <ul class="inline-flex -space-x-px mt-5 md:mt-10 mx-auto">
          @if($page - 1 > 0)
          <li>
            <a href="{{ url("media-and-information?q=".$q."&page=1#breadrumbs") }}" class="px-3 py-2 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">First</a>
          </li>
          @endif
          @for($i = $first_visible_page; $i <= $last_visible_page; $i++)
          @if($i == $page)
          <li>
            <a href="{{ url("media-and-information?q=".$q."&page=".$i."#breadrumbs") }}" aria-current="page" class="px-3 py-2 text-blue-600 border border-gray-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">{{ $i }}</a>
          </li>
          @else
          <li>
            <a href="{{ url("media-and-information?q=".$q."&page=".$i."#breadrumbs") }}" class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">{{ $i }}</a>
          </li>
          @endif
          @endfor
          @if($page + 1 < $page_count)
          <li>
            <a href="{{ url("media-and-information?q=".$q."&page=".$page_count."#breadrumbs") }}" class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 rounded-r-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Last</a>
          </li>
          @endif
        </ul>
      </nav>
      @endif
  </div>
</div>
