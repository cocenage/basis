@push('meta')
<title>{{ 'Каталог материалов для мебели – Базис Волга' }}</title>
<meta name="description" content="Каталог материалов для производства мебели от компании Базис Волга в Волгограде. ЛДСП, МДФ, фурнитура, кромка и другие комплектующие. Выгодные цены и широкий ассортимент.">
<meta name="keywords" content="каталог Базис Волга, ЛДСП купить, МДФ купить, фурнитура для мебели, материалы для мебели, Волгоград">
@endpush

<div class="content mt-[60px] md:mt-[180px]" x-data="{ isOpen: false }">
    <h2 class="mb-[75px] ">Каталог</h2>
    <div class="flex flex-col md:flex-row gap-[15px]">
        <!-- Кнопка для мобильных устройств -->
        <div class="md:hidden">
            <button
                @click="isOpen = !isOpen"
                class="w-full text-left px-[24px] py-[12px] bg-[#f2f2f2] text-black rounded-[10px] cursor-pointer hover:bg-[#e1e1e1] duration-300">
                <span x-text="isOpen ? 'Скрыть категории' : 'Показать категории'"></span>
            </button>
        </div>
        <!-- Меню категорий с анимацией -->
        <div
            x-show="isOpen || window.innerWidth >= 768"
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 transform -translate-y-2"
            x-transition:enter-end="opacity-100 transform translate-y-0"
            x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="opacity-100 transform translate-y-0"
            x-transition:leave-end="opacity-0 transform -translate-y-2"
            x-cloak
            class="w-full md:w-1/4 md:mb-0">
            <ul class="space-y-2">
                <li>
                    <button
                        wire:click="$set('selectedCategorySlug', null)"
                        class="w-full text-left px-[24px] py-[12px] rounded-[10px] cursor-pointer {{ is_null($selectedCategorySlug) ? 'bg-[#e1e1e1] text-black' : 'bg-gray-100 hover:bg-[#e1e1e1] cursor-pointer' }}">
                        Все товары
                    </button>
                </li>
                @foreach ($categories as $category)
                <li>
                    <button
                        wire:click="$set('selectedCategorySlug', '{{ $category->slug }}')"
                        class="w-full text-left px-[24px] py-[12px] rounded-[10px] cursor-pointer {{ $selectedCategorySlug === $category->slug ? 'bg-[#e1e1e1] text-black' : 'bg-gray-100 hover:bg-[#e1e1e1] cursor-pointer' }}">
                        {{ $category->name }}
                    </button>
                </li>
                @endforeach
            </ul>
        </div>
        <!-- Товары -->
        <div class="w-full md:w-3/4 pb-[90px]">
            <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-4">
                @foreach ($products as $index => $product)
                <div class="col-span-1 overflow-hidden rounded-[10px]">
                    <a wire:navigate href="{{ route('single.product', $product->slug) }}">
                        <div class="overflow-hidden rounded-[10px] aspect-square">
                            <img src="{{ asset('storage/' . $product->image) }}" class="w-full h-full object-cover transition-transform duration-300 hover:scale-105" alt="img catalog" loading="lazy">

                        </div>
                        <p class="md:text-[20px] pt-[10px] pb-[30px] md:pb-[60px]">{{ $product->name }}</p>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
