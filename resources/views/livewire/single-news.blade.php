<div class="content">
    <!-- Контент текущей статьи -->
    <h1 class="pt-[180px]">{{ $news->name }}</h1>
    <img src="{{ asset('storage/' . $news->image) }}" alt="{{ $news->name }}" class="w-full h-64 object-cover rounded-lg">
    <div class="mt-6">
        {!! $news->content !!}
    </div>

    <!-- Блок с новыми статьями -->
    <div class="mt-12">
    <livewire:news.news-new-list :currentSlug="$news->slug" />
    </div>
</div>
