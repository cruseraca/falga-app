@push('styles')
<link href="{{ mix('css/media-and-information.css') }}" rel="stylesheet">
@endpush
@push('scripts')
<script src="https://unpkg.com/flowbite@1.5.4/dist/datepicker.js"></script>
@endpush
{{-- Banner --}}
<div class="main-banner mt-[61px] md:mt-[77px]">
  <picture>
    <source srcset="{{ mix("img/projects-portfolio/banner.jpg") }}" />
    <img alt="" />
  </picture>
  <div class="main-banner-container">
    <div class="falga-container">
      <h1 class="font-poppins text-white text-center font-extrabold sm:text-2xl md:text-3xl lg:text-4xl lg:leading-relaxed uppercase" style="text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">
        Projects
      </h1>
    </div>
  </div>
</div>
@component('components.bread-crumbs', ["items" => [
[ "title" => "HOME", "href" => url("") ],
[ "title" => "PROJECTS", "color" => "red-falga" ]
]])
@endcomponent
<div class="falga-container flex mb-16 flex-col">
  <div class="falga-section-title red-falga">
    <div class="p-2 md:p-6 mt-12 md:mt-24">Projects</div>
  </div>
  <div class="flex flex-wrap items-stretch justify-center">
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
  </div>
  @if($all_items_count > 6)
  @php
  $first_visible_page = max($page - 2, 1);
  $last_visible_page = min($page_count, $page + 2);
  @endphp
  <nav aria-label="Page navigation example" class="flex justify-center">
    <ul class="inline-flex -space-x-px mt-5 md:mt-10 mx-auto">
      @if($page - 1 > 0)
      <li>
        <a href="{{ url("projects?page=1#breadrumbs") }}" class="px-3 py-2 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">First</a>
      </li>
      @endif
      @if($page > 0)
      <li>
        <a href="{{ url("projects?page=".($page - 1)."#breadrumbs") }}" class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Prev</a>
      </li>
      @endif
      @for($i = $first_visible_page; $i <= $last_visible_page; $i++)
        @if($i==$page)
        <li>
          <a href="{{ url("projects?page=".$i."#breadrumbs") }}" aria-current="page" class="px-3 py-2 text-red-falga border border-gray-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">{{ $i }}</a>
        </li>
        @else
        <li>
          <a href="{{ url("projects?page=".$i."#breadrumbs") }}" class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">{{ $i }}</a>
        </li>
        @endif
      @endfor
      @if($page < $page_count)
      <li>
        <a href="{{ url("projects?page=".($page + 1)."#breadrumbs") }}" class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Next</a>
      </li>
      @endif
      @if($page + 1 < $page_count)
      <li>
        <a href="{{ url("projects?page=".$page_count."#breadrumbs") }}" class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 rounded-r-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Last</a>
      </li>
      @endif
    </ul>
  </nav>
  @endif
</div>
