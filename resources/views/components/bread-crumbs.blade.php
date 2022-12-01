<div id="breadrumbs" class="flex items-center justify-center text-xs md:text-base uppercase bg-[#F2F2F2] py-1">
    @for($i = 0; $i < count($items); $i++)
        @php
            $item = $items[$i]
        @endphp
        @if(isset($item["href"]))
        <a href="{{ $item["href"] }}" class="flex items-baseline {{ isset($item["color"]) ? "text-".$item["color"] : "" }} py-4 px-2">
            {{ $item["title"] }}
            @if($i < count($items) - 1)
                <i class="ml-4 fa-solid fa-angles-right"></i>
            @endif
        </a>
        @else
        <a class="flex items-baseline {{ isset($item["color"]) ? "text-".$item["color"] : "" }} py-4 px-2">
            {{ $item["title"] }}
            @if($i < count($items) - 1)
                <i class="ml-4 fa-solid fa-angles-right"></i>
            @endif
        </a>
        @endif
    @endfor
</div>
