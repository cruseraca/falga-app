
<div class="falga-epci-o{{ $reverse ? ' reverse' : '' }}">
    <div class="falga-container falga-epci-c">
        <div class="falga-epci-i">
            <div class="falga-epci-images">
                <div class="falga-epci-background" style="background-color: {{ $color }};"></div>
                <img class="falga-epci-image" src="{{ $image }}"/>
            </div>
            <div class="falga-epci-content">
                <div class="falga-section-title falga-epci-title">{{ $title }}</div>
                <div class="text-xl md:text-2xl mt-2 mb-8">{{ $description }}</div>
                <div class="falga-epci-line"></div>
            </div>
        </div>
    </div>
</div>
