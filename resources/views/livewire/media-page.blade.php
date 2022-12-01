@push('styles')
<link href="{{ asset('css/media-and-information.css') }}" rel="stylesheet">
@endpush
{{-- Banner --}}
<div class="sm:w-full falga-banner bg-no-repeat bg-center bg-cover flex mt-[61px] md:mt-[77px] items-center justify-center">
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
        <div class="falga-section-title">
            <div class="p-2 md:p-6 border-b-2 mt-12 md:mt-24">MEDIA & INFORMATION</div>
        </div>
        <div class="mb-4 falga-section-title overflow-auto">
            <ul class="flex md:flex-col items-stretch" id="esg-tab" role="tablist">
                <li class="mr-2 md:mr-0" role="presentation">
                    <a href="{{ url("media-and-information?q=portfolio#breadrumbs") }}" class="{{ $q == "portfolio" ? "falga-tab-active" : "" }} inline-block p-2 md:p-6 border-b-2 w-full whitespace-nowrap uppercase" id="portfolio-tab" type="button" role="tab" aria-controls="portfolio" aria-selected="false">Portofolio</a>
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
        <div class="falga-section-title mt-8 py-3 border-b-2 border-gray-600 md:ml-8 md:px-8">{{ $title }}</div>
        <div class="flex flex-wrap items-stretch justify-center">
            @if($q == 'portfolio')
            @foreach($items as $item)
            <div class="falga-mni-item mt-8 md:mt-12 md:ml-12">
                <img class="object-cover h-[242px]" src="{{ $item["image"] }}" />
                <div class="font-bold text-red-falga mt-6 mx-6 capitalize">{{ $item["title"] }}</div>
                <div class="flex mx-6 text-xs mt-1">
                    <div class="pr-4 border-r border-black">{{ $item["location"] }}</div>
                    <div class="pl-4">{{ $item["category"] }}</div>
                </div>
                <div class="flex mt-6 mx-6 text-xs">
                    <div class="flex-1">Project Started</div>
                    <div>:</div>
                    <div class="flex-1 max-w-[100px] text-right">{{ $item["start_date"] }}</div>
                </div>
                <div class="flex mx-6 mb-6 mt-2 text-xs">
                    <div class="flex-1">Project Completed</div>
                    <div>:</div>
                    <div class="flex-1 max-w-[100px] text-right">{{ $item["start_date"] }}</div>
                </div>
            </div>
            @endforeach
            @else
            @foreach($items as $item)
            <div class="falga-mni-item mt-8 md:mt-12 md:ml-12">
                <img class="object-cover h-[242px]" src="{{ $item["image"] }}" />
                <div class="font-bold text-red-falga mt-6 mx-6 capitalize">{{ $item["title"] }}</div>
                <div class="flex mx-6 text-xs mt-1 mb-6">{{ $item["description"] }}</div>
            </div>
            @endforeach
            @endif
        </div>
    </div>
</div>
