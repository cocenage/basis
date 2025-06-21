@push('meta')
<title>{{ 'Базис Волга – Материалы для производства мебели в Волгограде' }}</title>
<meta name="description" content="Компания Базис Волга в Волгограде предлагает широкий ассортимент материалов для производства мебели: ЛДСП, МДФ, фурнитура и комплектующие. Высокое качество, доступные цены, доставка по региону.">
<meta name="keywords" content="Базис Волга, материалы для мебели, ЛДСП, МДФ, фурнитура для мебели, производство мебели, Волгоград, купить материалы для мебели">
<meta name="robots" content="index, follow">
@endpush

<div class="content mt-[60px] md:mt-[180px]">
    <div class="">
        <h1 class="md:w-[75%]">
            Мебельные материалы нового поколения: где безупречная эстетика встречает промышленную выносливость. Работаем только с теми, кто ценит совершенство в каждой детали.
        </h1>

        <video
            autoplay
            muted
            loop
            preload="metadata"
            poster="{{ asset('images/imghoma.webp') }}"
            class="hidden md:block mt-[120px] mb-[180px] w-full h-[800px] rounded-[10px] aspect-video object-cover">
            <source src="{{ asset('images/home.webm') }}" type="video/webm">
            Ваш браузер не поддерживает видео.
        </video>

        <!-- Картинка (только на мобильных) -->
        <img
            src="{{ asset('images/mobail.webp') }}"
            alt="img"
            class="block md:hidden mt-[120px] mb-[180px] w-full h-[800px] rounded-[10px] aspect-video object-cover">

        <livewire:categories.categories-list />

        <livewire:news.news-list />

        <div class="">
            <div class="md:w-[75%] pt-[30px]">
                <h1 class="flex flex-col">Мы — команда профессионалов с десятилетним опытом. <span>Наша цель — делать вашу жизнь проще,</span>а бизнес — успешнее.</h1>
            </div>
            <div class="mb-[120px] mt-[40px]">
                <a wire:navigate href="{{ route('page.company') }}" class="text-[16px] px-[24px] py-[12px] rounded-[5px] bg-[#08338F] hover:bg-[#D02320] active:bg-[#D02320] text-white transition-all duration-300">Узнать больше</a>
            </div>
        </div>
    </div>
</div>
