<div class="relative h-[800px] ">
    <div class="swiper fullscreen-slider h-[800px]">
        <div class="swiper-wrapper h-[800px]">
            @foreach ($feedbacks as $feedback)
            <div class="swiper-slide rounded-[10px]" data-color="{{ $feedback->color }}">
                <div class="review h-full rounded-[10px]" style="--card-color: {{ $feedback->color }}">
                    <div class="h-full flex flex-col justify-center items-center text-center text-white relative rounded-[10px]">
                        <div class="">
                            <h2 class="px-[15px] mx-[15px] text-black md:mx-0">«{{ $feedback->description }}»</h2>
                        </div>
                        <div class="absolute bottom-[15px] left-[15px]">
                            <div class="flex gap-[15px]">
                                <img src="{{ asset('storage/' . $feedback->image) }}" class="w-[80px] h-[80px] object-cover rounded-[10px]" alt="img review">
                                <div class="text-black">
                                    <p>{{ $feedback->name }}</p>
                                    <p class="opacity-50">{{ $feedback->title }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>


    </div>
</div>
