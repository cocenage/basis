@props(['data', 'index'])

<div class="col-span-1 overflow-hidden rounded-[10px]"
    data-aos="fade-up"
    data-aos-delay="{{ $index * 100 }}">
    <a wire:navigate href="{{ route('page.catalog', ['category' => $data->slug]) }}" class="block">
        <div class="overflow-hidden rounded-[10px] aspect-square">
            <img src="{{ asset('storage/' . $data->image) }}"
                class="w-full h-full object-cover transition-transform duration-300 hover:scale-105"
                alt="img catalog"
                loading="lazy">
        </div>
        <p class="text-[20px] pt-[15px] pb-[60px]">{{ $data->name }}</p>
    </a>
</div>
