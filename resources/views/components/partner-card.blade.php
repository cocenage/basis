@props(['data'])


<div class="swiper-slide aspect-square max-w-[400px] rounded-[10px]" style="--card-color: {{ $data->color }}">

    <div class="p-[15px] flex flex-col justify-between">
        <p>{{ $data->name }}</p>
        <img src="{{ asset('storage/' . $data->image) }}" alt="slider img">
    </div>
</div>
