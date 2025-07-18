<div class="">
    <h2 class="pb-[75px]">Каталог</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
        @forelse ($categories as $index => $category)
        <div class="{{ $index >= 4 ? 'hidden sm:block' : '' }}">
            <x-category-card :data="$category" :index="$index" />
        </div>
        @empty
        <p>продуктов нет</p>
        @endforelse
    </div>
    <div class="pb-[180px] pt-[60px] w-full flex justify-center">
         <a wire:navigate href="{{ route('page.catalog') }}" class="text-[16px] px-[24px] py-[12px] rounded-[10px] bg-[#08338F] hover:bg-[#D02320] active:bg-[#D02320] text-white transition-all duration-300">Больше товаров</a>
    </div>
</div>
