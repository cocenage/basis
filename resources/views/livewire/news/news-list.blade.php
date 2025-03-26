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
    <div class="mb-[180px] mt-[60px] w-full flex justify-center">
        <x-color-button-all route="page.news" title="Больше новостей" />
    </div>
</div>
