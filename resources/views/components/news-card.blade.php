@props(['data', 'index'])

<div class="col-span-1 overflow-hidden rounded-[5px] group" data-aos="fade-up"
    data-aos-delay="{{ $index * 100 }}">
    <a wire:navigate href="{{ route('single.news', $data->slug) }}">
        <img src="{{ asset('storage/' . $data->image) }}" class="w-full rounded-[5px] object-cover aspect-video" alt="img catalog" loading="lazy">
        <div class="flex gap-[5px] items-center pt-[15px] group">
            <p class="text-[20px] relative inline-block">
                {{ $data->name }}
                <span class="absolute bottom-0 left-0 w-0 h-[2px] bg-current transition-all duration-300 group-hover:w-full"></span>
            </p>
            <x-heroicon-o-arrow-up-right class="h-5 w-5 stroke-2" />
        </div>
        <p class="text-[16px] opacity-50 pt-[10px] pb-[60px]">{{ $data->created_at->format('d.m.Y') }}</p>
    </a>
</div>
