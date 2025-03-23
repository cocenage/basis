@push('meta')
<title>{{ $news->name . ' – Базис Волга' }}</title>
<meta name="description" content="{{ $meta_description }}">
<meta name="keywords" content="{{ $meta_keywords }}">
@endpush

<div class="content mt-[180px]">
    <h1 class="md:w-[75%]">{{ $news->name }}</h1>
    <img src="{{ asset('storage/' . $news->image) }}" alt="img news" class="mt-[120px] w-full h-[530px] rounded-[5px] aspect-video object-cover">

    <div class="grid grid-cols-12 gap-[15px] pt-[60px]">
        <div class="col-start-4 col-span-6">
            @if (is_array($news->description) && count($news->description) > 0)
            @foreach ($news->description as $item)
            <div class="flex flex-col gap-[15px]">
                <p class="text-[24px]">{{ $item['h1'] }}</p>
                <p class="text-[20px] pb-[30px]">{!! $item['p'] !!}</p>
            </div>
            @endforeach
            @else
            <p>Описание отсутствует.</p>
            @endif
        </div>
    </div>

    <div class="mt-[150px] mb-[60px]">
        <livewire:news.news-new-list :currentSlug="$news->slug" />
    </div>
</div>
