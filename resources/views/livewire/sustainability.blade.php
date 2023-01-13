@push('styles')
<link href="{{ mix('css/sustainability.css') }}" rel="stylesheet">
@endpush
@push('scripts')
<script src="{{ mix('js/sustainability.js') }}" rel="stylesheet"></script>
@endpush
<div class="main-banner mt-[61px] md:mt-[77px]">
  <picture>
    <source srcset="{{ mix("img/esg/banner.webp") }}" type="image/webp" />
    <source srcset="{{ mix("img/esg/banner.jpg") }}" />
    <img alt="" />
  </picture>
  <div class="main-banner-container">
    <div class="falga-container text-white text-center">
      <h1 class="font-poppins font-extrabold sm:text-2xl md:text-3xl lg:text-4xl lg:leading-relaxed uppercase md:mt-[30%]" style="text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">
        Sustainability
      </h1>
      <div class="md:mt-8 normal-case sm:text-xl md:text-2xl" style="text-shadow: 0px 1px 1px rgba(0, 0, 0, 0.7);">
        Integrating sustainability approaches into our strategic and value-creation practices
      </div>
    </div>
  </div>
</div>
@component('components.bread-crumbs', ["items" => [
[ "title" => "HOME", "href" => url("") ],
[ "title" => "Sustainability" ],
[ "title" => $title, "color" => "red-falga" ]
]])
@endcomponent
<div class="falga-container flex mb-16 flex-col md:flex-row">
  <div>
    <div class="falga-section-title small red-falga md:hidden">
      <div id="dropdownTitleButton" data-dropdown-toggle="title" class="p-2 md:p-6 border-b-2 mt-12 md:mt-24 cursor-pointer flex justify-between items-center">Sustainability <svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
        </svg>
      </div>
      <!-- Dropdown menu -->
      <div id="title" class="z-10 hidden bg-white divide-y divide-gray-100 rounded dark:bg-gray-700 w-full shadow-md">
        <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownTitleButton">
          <li>
            <a href="{{ url("sustainability?q=strategy-management#breadrumbs") }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">{{ $titles["strategy-management"] }}</a>
          </li>
          <li>
            <a href="{{ url("sustainability?q=reports#breadrumbs") }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">{{ $titles["reports"] }}</a>
          </li>
        </ul>
      </div>
    </div>
    <div class="falga-section-title small red-falga hidden md:block">
      <div class="p-2 md:p-6 border-b-2 mt-12 md:mt-24">Sustainability</div>
    </div>
    <div class="mb-4 falga-section-title small red-falga overflow-auto hidden md:block">
      <ul class="flex md:flex-col items-stretch" id="esg-tab" role="tablist">
        <li class="mr-2 md:mr-0 min-w-[280px]" role="presentation">
          <a href="{{ url("sustainability?q=strategy-management#breadrumbs") }}" class="{{ $q == "strategy-management" ? "falga-tab-active" : "" }} inline-block p-2 md:p-6 border-b-2 w-full whitespace-nowrap" id="sustainability-tab" type="button" role="tab" aria-controls="sustainability" aria-selected="false">{{ $titles["strategy-management"] }}</a>
        </li>
        <li class="min-w-[280px]" role="presentation">
          <a href="{{ url("sustainability?q=reports#breadrumbs") }}" class="{{ $q == "reports" ? "falga-tab-active" : "" }} inline-block p-2 md:p-6 border-b-2 w-full whitespace-nowrap" id="presentation-tab" type="button" role="tab" aria-controls="presentation" aria-selected="false">{{ $titles["reports"] }}</a>
        </li>
        {{-- <li role="presentation">
                    <a href="{{ url("sustainability?q=governance#breadrumbs") }}" class="{{ $q == "governance" ? "falga-tab-active" : "" }} inline-block p-2 md:p-6 border-b-2 w-full whitespace-nowrap" id="governance-tab" type="button" role="tab" aria-controls="governance" aria-selected="false">Corporate Governance</a>
        </li> --}}
      </ul>
    </div>
  </div>
  <div id="esg-tab-content" class="flex-1 md:border-l">
    <div class="falga-section-title red-falga mt-8 py-3 border-b-2 border-gray-600 md:ml-8 md:px-8">{{ $title }}</div>
    @if($q == 'strategy-management')
    <div class="flex flex-col w-full md:px-8 py-4 border-b md:ml-8 mt-2 md:text-base">
      <div class="font-bold">SUSTAINABILITY FRAMEWORK</div>
      <div class="mt-2">
        FALGA believes strong sustainability proposition is linked to higher value creation for our business. The following are 7 elements of sustainability framework that guides FALGA's sustainable approach:
      </div>
      <div class="falga-sustainability-approach">
        <picture class="lozad" data-alt="" data-iesrc="{{ mix('img/sustainability/sustainability_approach_md.png') }}">
          <source srcset="{{ mix('img/sustainability/sustainability_approach_lg.webp') }}" type="image/webp" media="(min-width: 1024px)" />
          <source srcset="{{ mix('img/sustainability/sustainability_approach_md.webp') }}" type="image/webp" />
          <source srcset="{{ mix('img/sustainability/sustainability_approach_lg.png') }}" media="(min-width: 1024px)" />
          <source srcset="{{ mix('img/sustainability/sustainability_approach_md.png') }}" />
        </picture>
      </div>
      <div class="font-bold mt-8">ISO APPLICATION:</div>
      <ul class="list-disc ml-4">
        <li>ISO <span class="min-w-[48.0167px] text-right inline-block">14001:</span> <span>2015:</span> Environmental Management System</li>
        <li>ISO <span class="min-w-[48.0167px] text-right inline-block">45001:</span> <span>2018:</span> Occupational Health and Safety Management System</li>
        <li>ISO <span class="min-w-[48.0167px] text-right inline-block">9001:</span> <span>2015:</span> Quality Management System</li>
        <li>ISO <span class="min-w-[48.0167px] text-right inline-block">37001:</span> <span>2015:</span> Anti Bribery Management System</li>
        <li>ISO <span class="min-w-[48.0167px] text-right inline-block">26000:</span> <span>2010:</span> Guidance on social responsibility</li>
      </ul>
    </div>
    @else
    @foreach($items as $item)
    <div class="flex flex-col md:flex-row md:items-center w-full md:px-8 py-4 border-b md:ml-8">
      <div class="flex-1">
        <div class="text-xl md:text-3xl">{{ $item["title"] }}</div>
        <div class="text-sm md:text-base mt-2">{{ $item["date"] }}</div>
      </div>
      <div class="flex justify-end">
        <a href={{ $item["file"] }} download="{{ $item["title"] }}.pdf" class="p-4 text-red-falga underline">Download</a>
        <a href={{ $item["file"] }} class="p-4 text-red-falga underline">View</a>
      </div>
    </div>
    @endforeach
    @endif
  </div>
</div>
