<div>
    <h2 class="pb-[75px]">Последние статьи</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
        @forelse ($relatedNews as $index => $news)
        <div class="{{ $index >= 3 ? 'hidden sm:block' : '' }}">
            <x-news-new-card :data="$news" :index="$index" />
        </div>
        @empty
        <p>Новостей нет</p>
        @endforelse
    </div>
</div>
