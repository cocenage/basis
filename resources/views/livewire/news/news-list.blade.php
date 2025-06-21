<div>
    <h2 class="pb-[75px]">Новости</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
        @forelse ($headings as $index => $heading)
        <div class="{{ $index >= 3 ? 'hidden sm:block' : '' }}">
            <x-news-card :data="$heading" :index="$index" />
        </div>
        @empty
        <p>Новостей нет</p>
        @endforelse
    </div>
    <div class="pb-[180px] pt-[60px] w-full flex justify-center">
        <a wire:navigate href="{{ route('page.news') }}" class="text-[16px] px-[24px] py-[12px] rounded-[5px] bg-[#08338F] hover:bg-[#D02320] active:bg-[#D02320] text-white transition-all duration-300">Больше Новостей</a>
    </div>
</div>
