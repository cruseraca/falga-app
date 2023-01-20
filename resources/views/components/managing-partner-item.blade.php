<div class="falga-mp-item mt-12 md:mt-14">
  <div class="falga-mp-item-c h-full flex-col md:flex-row items-center">
    <img data-src="{{ $image }}" class="lozad falga-mp-item-i"></img>
    <div class="md:flex-1 flex flex-col justify-center">
      <div class="falga-mp-item-title uppercase text-red-falga">{{ $name }}</div>
      @if($position && !empty($position))
      <div class="falga-mp-item-position">{{ $position }}</div>
      @endif
      <div class="mt-4 text-justify text-sm md:text-base falga-mp-item-description">{{ $description }}</div>
    </div>
  </div>
</div>
