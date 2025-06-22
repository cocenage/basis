@push('meta')
<title>{{ 'Каталог материалов для мебели – Базис Волга' }}</title>
<meta name="description" content="Каталог материалов для производства мебели от компании Базис Волга в Волгограде. ЛДСП, МДФ, фурнитура, кромка и другие комплектующие. Выгодные цены и широкий ассортимент.">
<meta name="keywords" content="каталог Базис Волга, ЛДСП купить, МДФ купить, фурнитура для мебели, материалы для мебели, Волгоград">
@endpush

<div class="content mt-[60px] md:mt-[180px]" x-data="{ isOpen: false }">
    <h2 class="mb-[75px] ">Каталог</h2>
    <!-- Поисковая строка -->

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
                        class="w-full text-left px-[24px] py-[12px] rounded-[10px] cursor-pointer {{ is_null($selectedCategorySlug) ? 'bg-[#D02320] text-white' : 'bg-[#08338F] hover:bg-[#D02320] duration-300 text-white cursor-pointer' }}">
                        Все товары
                    </button>
                </li>
                @foreach ($categories as $category)
                <li>
                    <button
                        wire:click="$set('selectedCategorySlug', '{{ $category->slug }}')"
                        class="w-full text-left px-[24px] py-[12px] rounded-[10px] cursor-pointer {{ $selectedCategorySlug === $category->slug ? 'bg-[#D02320] text-white' : 'bg-[#08338F] hover:bg-[#D02320] duration-300 text-white cursor-pointer' }}">
                        {{ $category->name }}
                    </button>
                </li>
                @endforeach
            </ul>
        </div>
        <!-- Товары -->
        <div class="w-full md:w-3/4 pb-[90px] space-y-2">
            <div class="relative">
                <input
                    type="text"
                    wire:model.live.debounce.500ms="search"
                    placeholder="Поиск по названию товара..."
                    class="h-[48px] w-full px-[24px] py-[12px] rounded-[10px] border border-[#f2f2f2] focus:outline-none ring-2 ring-[#08338F] focus:ring-[#D02320] duration-300">
                @if($search)
                <button
                    wire:click="$set('search', '')"
                    class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-500 hover:text-gray-700 cursor-pointer">
                    <x-heroicon-o-x-mark class="h-6 w-6" />
                </button>
                @endif
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-4">
                @forelse ($products as $product)
                <div class="col-span-1 overflow-hidden rounded-[10px]">
                    <a wire:navigate href="{{ route('single.product', $product->slug) }}">
                        <div class="overflow-hidden rounded-[10px] aspect-square">
                            <img src="{{ asset('storage/' . $product->image) }}" class="w-full h-full object-cover transition-transform duration-300 hover:scale-105" alt="img catalog" loading="lazy">
                        </div>
                        <p class="md:text-[20px] pt-[10px] pb-[30px] md:pb-[60px]">{{ $product->name }}</p>
                    </a>
                </div>
                @empty
                <div class="col-span-full text-center py-10">
                    <p class="text-lg">Товары не найдены</p>
                    @if($search)
                    <button wire:click="$set('search', '')" class="text-[#08338F] hover:underline mt-2">
                        Сбросить поиск
                    </button>
                    @endif
                </div>
                @endforelse
            </div>
            <!-- Кастомная пагинация -->
            @if ($products->hasPages())
            <div class="mt-[60px] flex flex-wrap justify-center items-center gap-2">
                {{-- Кнопка "Назад" --}}
                @if ($products->onFirstPage())
                <span class="px-4 py-2 rounded-[10px] bg-gray-100 text-gray-400 cursor-not-allowed">
                    &laquo; Назад
                </span>
                @else
                <a wire:click="previousPage" wire:loading.attr="disabled"
                    class="px-4 py-2 rounded-[10px] bg-[#f2f2f2] text-black hover:bg-[#e1e1e1] cursor-pointer transition duration-300">
                    &laquo; Назад
                </a>
                @endif

                {{-- Номера страниц --}}
                @php
                // Определяем диапазон отображаемых страниц
                $current = $products->currentPage();
                $last = $products->lastPage();
                $start = max($current - 2, 1);
                $end = min($current + 2, $last);

                // Добавляем первую страницу и разделитель если нужно
                if ($start > 1) {
                $pages[] = 1;
                if ($start > 2) $pages[] = '...';
                }

                // Основной диапазон
                for ($i = $start; $i <= $end; $i++) {
                    $pages[]=$i;
                    }

                    // Добавляем последнюю страницу и разделитель если нужно
                    if ($end < $last) {
                    if ($end < $last - 1) $pages[]='...' ;
                    $pages[]=$last;
                    }
                    @endphp

                    @foreach ($pages as $page)
                    @if ($page=='...' )
                    <span class="px-3 py-1">...</span>
                    @elseif ($page == $current)
                    <span class="px-4 py-2 rounded-[10px] bg-[#e1e1e1] text-black font-medium">
                        {{ $page }}
                    </span>
                    @else
                    <a wire:click="gotoPage({{ $page }})"
                        class="px-4 py-2 rounded-[10px] bg-[#f2f2f2] text-black hover:bg-[#e1e1e1] cursor-pointer transition duration-300">
                        {{ $page }}
                    </a>
                    @endif
                    @endforeach

                    {{-- Кнопка "Вперед" --}}
                    @if ($products->hasMorePages())
                    <a wire:click="nextPage" wire:loading.attr="disabled"
                        class="px-4 py-2 rounded-[10px] bg-[#f2f2f2] text-black hover:bg-[#e1e1e1] cursor-pointer transition duration-300">
                        Вперед &raquo;
                    </a>
                    @else
                    <span class="px-4 py-2 rounded-[10px] bg-gray-100 text-gray-400 cursor-not-allowed">
                        Вперед &raquo;
                    </span>
                    @endif
            </div>
            @endif
        </div>
    </div>
</div>
