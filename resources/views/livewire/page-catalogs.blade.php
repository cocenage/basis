@push('meta')
<title>{{ 'Каталог материалов для мебели – Базис Волга' }}</title>
<meta name="description" content="Каталог материалов для производства мебели от компании Базис Волга в Волгограде. ЛДСП, МДФ, фурнитура, кромка и другие комплектующие. Выгодные цены и широкий ассортимент.">
<meta name="keywords" content="каталог Базис Волга, ЛДСП купить, МДФ купить, фурнитура для мебели, материалы для мебели, Волгоград">
@endpush

<div class="container mx-auto px-4 py-8">
    <h2 class="text-2xl font-bold mb-6">Каталог товаров</h2>
    <div class="flex gap-8">
        <!-- Меню категорий -->
        <div class="w-1/4">
            <ul class="space-y-2">
                <li>
                    <button
                        wire:click="$set('selectedCategorySlug', null)"
                        class="w-full text-left px-4 py-2 rounded-lg {{ is_null($selectedCategorySlug) ? 'bg-blue-500 text-white' : 'bg-gray-100 hover:bg-gray-200' }}">
                        Все товары
                    </button>
                </li>
                @foreach ($categories as $category)
                <li>
                    <button
                        wire:click="$set('selectedCategorySlug', '{{ $category->slug }}')"
                        class="w-full text-left px-4 py-2 rounded-lg {{ $selectedCategorySlug === $category->slug ? 'bg-blue-500 text-white' : 'bg-gray-100 hover:bg-gray-200' }}">
                        {{ $category->name }}
                    </button>
                </li>
                @endforeach
            </ul>
        </div>

        <!-- Товары -->
        <div class="w-3/4">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                @foreach ($products as $index => $product)
                <div class="col-span-1 overflow-hidden rounded-[5px]"
                    data-aos="fade-up"
                    data-aos-delay="{{ $index * 100 }}">
                    <a wire:navigate href="{{ route('single.product', $product->slug) }}">
                        <img src="{{ asset('storage/' . $product->image) }}" class="w-full rounded-[5px] object-cover aspect-square" alt="img catalog" loading="lazy">
                        <p class="text-[20px] pt-[15px] pb-[60px]">{{ $product->name }}</p>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
