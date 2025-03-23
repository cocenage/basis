@props(['data', 'index'])

<div class="col-span-1 overflow-hidden rounded-[5px]"
    data-aos="fade-up"
    data-aos-delay="{{ $index * 100 }}">
    <a wire:navigate href="{{ route('page.catalog', ['category' => $data->slug]) }}">
        <img src="{{ asset('storage/' . $data->image) }}" class="w-full rounded-[5px] object-cover aspect-square" alt="img catalog" loading="lazy">
        <p class="text-[20px] pt-[15px] pb-[60px]">{{ $data->name }}</p>
    </a>
</div>