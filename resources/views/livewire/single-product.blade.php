@push('meta')
<title>{{ $product->name . ' – Базис Волга' }}</title>
<meta name="description" content="{{ $meta_description }}">
<meta name="keywords" content="{{ $meta_keywords }}">
@endpush

<div class="content mt-[60px] md:mt-[180px] mb-[120px]">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-[15px]">

        <div class="col-span-1 flex flex-col justify-between">

            <div class="">
                <nav class="w-full rounded-md">
                    <ol class="list-reset flex">
                        <li class="group">
                            <a
                                wire:wire:navigate
                                href="{{ route('page.home') }}"
                                class="flex gap-[5px] items-center group-hover:opacity-50"> <x-heroicon-o-home class="h-5 w-5 group-hover:opacity-50" />Главная страница</a>
                        </li>
                        <li>
                            <span class="mx-2 opacity-50">/</span>
                        </li>
                        <li>
                            <a
                                wire:wire:navigate
                                href="{{ route('page.catalog') }}"
                                class="hover:opacity-50">Каталог</a>
                        </li>
                        <li>
                            <span class="mx-2 opacity-50">/</span>
                        </li>
                        <li class="opacity-50">{{ $product->name }}</li>
                    </ol>
                </nav>

                <h1 class="pt-[10px] md:pt-[30px]">{{ $product->name }}</h1>

                <h2 class="pt-[15px]">
                    Категории:
                    @foreach($product->category as $category)
                    <a class="hover:opacity-50" wire:navigate href="{{ route('page.catalog', ['category' => $category->slug]) }}">
                        {{ $category->name }}
                    </a>
                    @if(!$loop->last), @endif
                    @endforeach
                </h2>

                <div class="pt-[60px] md:pt-[120px]">
                    <h2>Цвет и характер</h2>
                    <p class="pt-[30px] md:pt-[30px]">{{ $product->description }}</p>
                </div>
            </div>

            <div class="hidden md:block">
                <p>Образец является репродукцией. Выбор подходящего по цвету декора возможен только с использованием оригинального образца.</p>
            </div>
        </div>


        <div class="col-span-1">
            <img src="{{ asset('storage/' . $product->image) }}"
                alt="{{ $product->name }}"
                class="w-full aspect-square object-cover rounded-[10px]">

                <div class="pt-[15px] md:hidden block">
                <p>Образец является репродукцией. Выбор подходящего по цвету декора возможен только с использованием оригинального образца.</p>
            </div>
        </div>


    </div>
</div>
