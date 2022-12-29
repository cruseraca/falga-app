@push('styles')
<link href="{{ mix('css/esg.css') }}" rel="stylesheet">
@endpush
@push('scripts')
<script src="{{ mix('js/esg.js') }}" rel="stylesheet"></script>
@endpush
{{-- Banner --}}
<div class="lozad sm:w-full bg-no-repeat bg-center bg-cover flex mt-[61px] md:mt-[77px] items-center justify-center" data-background-image="{{ mix("img/esg/banner.png") }}">
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
<div class="falga-container flex mb-16 flex-col md:flex-row">
    <div>
        <div class="falga-section-title red-falga">
            <div class="p-2 md:p-6 border-b-2 mt-12 md:mt-24">Reports</div>
        </div>
        <div class="mb-4 falga-section-title red-falga overflow-auto">
            <ul class="flex md:flex-col items-stretch" id="esg-tab" role="tablist">
                <li class="mr-2 md:mr-0" role="presentation">
                    <a href="{{ url("esg?q=sustainability#breadrumbs") }}" class="{{ $q == "sustainability" ? "falga-tab-active" : "" }} inline-block p-2 md:p-6 border-b-2 w-full whitespace-nowrap" id="sustainability-tab" type="button" role="tab" aria-controls="sustainability" aria-selected="false">Sustainability Reports</a>
                </li>
                <li class="mr-2 md:mr-0" role="presentation">
                    <a href="{{ url("esg?q=presentation#breadrumbs") }}" class="{{ $q == "presentation" ? "falga-tab-active" : "" }} inline-block p-2 md:p-6 border-b-2 w-full whitespace-nowrap" id="presentation-tab" type="button" role="tab" aria-controls="presentation" aria-selected="false">Corporate Presentation</a>
                </li>
                <li role="presentation">
                    <a href="{{ url("esg?q=governance#breadrumbs") }}" class="{{ $q == "governance" ? "falga-tab-active" : "" }} inline-block p-2 md:p-6 border-b-2 w-full whitespace-nowrap" id="governance-tab" type="button" role="tab" aria-controls="governance" aria-selected="false">Corporate Governance</a>
                </li>
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
