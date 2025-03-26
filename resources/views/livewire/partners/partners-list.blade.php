<div x-data="swiperMarquee()" x-init="init()" wire:ignore class="swiper-container">
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            @foreach ($partners as $partner)
            <div class="swiper-slide mr-[15px]! max-w-[90%] sm:max-w-[400px] rounded-[10px]" data-color="{{ $partner->color }}">
                <div class="swiper-slide-inner aspect-square rounded-[10px]"
                    style="--card-color: {{ $partner->color }}">
                    <div class="p-[15px] flex flex-col justify-between h-full">
                        <p class="text-[20px]">{{ $partner->name }}</p>
                        <img src="{{ asset('storage/' . $partner->image) }}" class="max-h-[50%] w-full object-cover" alt="slider img">
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
