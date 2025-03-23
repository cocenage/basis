<div>
    <h2 class="pb-[75px]">Новости</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
        @forelse ($headings as $index => $heading)
        <div>
            <x-news-all-card :data="$heading" :index="$index" />
        </div>
        @empty
        <p>Новостей нет</p>
        @endforelse
    </div>
</div>
