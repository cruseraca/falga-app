@push('styles')
<link href="{{ asset('css/esg.css') }}" rel="stylesheet">
@endpush
@push('scripts')
    <script src="{{ asset('js/esg.js') }}" rel="stylesheet"></script>
@endpush
{{-- Banner --}}
<div class="sm:w-full falga-banner bg-no-repeat bg-cover flex mt-[61px] md:mt-[77px] items-center justify-center">
    <h1 class="font-poppins text-white my-[212px] md:my-[312px] text-center font-extrabold lg:text-4xl lg:leading-relaxed uppercase" style="text-shadow: 0px 4px 4px #000000;">
        Environmental, Social, and Governance
    </h1>
</div>
@component('components.bread-crumbs', ["items" => [
    [ "title" => "HOME", "href" => url("") ],
    [ "title" => "ESG" ],
    [ "title" => $title, "color" => "red-falga" ]
]])
@endcomponent
<div class="falga-container flex mb-16">
    <div class="mb-4 falga-section-title">
        <div class="p-2 md:p-6 border-b-2 mt-24">Reports</div>
        <ul class="flex flex-col items-stretch" id="esg-tab" role="tablist">
            <li class="mr-2" role="presentation">
                <a href="{{ url("esg?q=financial#breadrumbs") }}" class="{{ $q == "financial" ? "falga-tab-active" : "" }} inline-block p-2 md:p-6 border-b-2 w-full" id="financial-tab" type="button" role="tab" aria-controls="financial" aria-selected="false">Financial Highlights</a>
            </li>
            <li class="mr-2" role="presentation">
                <a href="{{ url("esg?q=sustainability#breadrumbs") }}" class="{{ $q == "sustainability" ? "falga-tab-active" : "" }} inline-block p-2 md:p-6 border-b-2 w-full" id="sustainability-tab" type="button" role="tab" aria-controls="sustainability" aria-selected="false">Sustainability Reports</a>
            </li>
            <li class="mr-2" role="presentation">
                <a href="{{ url("esg?q=presentation#breadrumbs") }}" class="{{ $q == "presentation" ? "falga-tab-active" : "" }} inline-block p-2 md:p-6 border-b-2 w-full" id="presentation-tab" type="button" role="tab" aria-controls="presentation" aria-selected="false">Corporate Presentation</a>
            </li>
            <li role="presentation">
                <a href="{{ url("esg?q=governance#breadrumbs") }}" class="{{ $q == "governance" ? "falga-tab-active" : "" }} inline-block p-2 md:p-6 border-b-2 w-full" id="governance-tab" type="button" role="tab" aria-controls="governance" aria-selected="false">Corporate Governance</a>
            </li>
        </ul>
    </div>
    <div id="esg-tab-content" class="flex-1 border-l">
        <div class="falga-section-title mt-8 py-3 border-b-2 border-gray-600 ml-8 px-8">{{ $title }}</div>
        @foreach($items as $item)
            <div class="flex items-center w-full px-8 py-4 border-b ml-8">
                <div class="flex-1">
                    <div class="text-3xl">{{ $item["title"] }}</div>
                    <div class="text-base mt-2">{{ $item["date"] }}</div>
                </div>
                <a href={{ $item["file"] }} download="{{ $item["title"] }}.pdf" class="p-4 text-red-falga underline">Download</a>
                <a href={{ $item["file"] }} class="p-4 text-red-falga underline">View</a>
            </div>
        @endforeach
    </div>
</div>
