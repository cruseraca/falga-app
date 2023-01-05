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
    <div class="falga-container">
      <h1 class="font-poppins text-white text-center font-extrabold sm:text-2xl md:text-3xl lg:text-4xl lg:leading-relaxed uppercase" style="text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">
        Sustainability
      </h1>
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
    <div class="falga-section-title red-falga">
      <div class="p-2 md:p-6 border-b-2 mt-12 md:mt-24"></div>
    </div>
    <div class="mb-4 falga-section-title red-falga overflow-auto">
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
  </div>
</div>
