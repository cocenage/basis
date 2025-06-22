@push('meta')
<title>{{ 'Базис Волга – Материалы для производства мебели в Волгограде' }}</title>
<meta name="description" content="Компания Базис Волга в Волгограде предлагает широкий ассортимент материалов для производства мебели: ЛДСП, МДФ, фурнитура и комплектующие. Высокое качество, доступные цены, доставка по региону.">
<meta name="keywords" content="Базис Волга, материалы для мебели, ЛДСП, МДФ, фурнитура для мебели, производство мебели, Волгоград, купить материалы для мебели">
<meta name="robots" content="index, follow">
@endpush

<div class="content mt-[60px] md:mt-[180px]">
    <div class="">


<div class="relative mt-[120px] mb-[180px] w-full h-[800px] rounded-[10px] overflow-hidden">
  <!-- Видео -->
  <video
    autoplay
    muted
    loop
    preload="metadata"
    poster="{{ asset('images/imghoma.webp') }}"
    class="w-full h-full object-cover">
    <source src="{{ asset('images/home.webm') }}" type="video/webm">
    Ваш браузер не поддерживает видео.
  </video>

  <!-- Текст по центру видео -->
  <div class="absolute inset-0 flex items-center justify-center text-center px-6 md:px-12">
    <h1 class="text-black text-3xl md:text-5xl font-bold leading-tight md:leading-snug max-w-[90%] md:max-w-[75%] drop-shadow-lg">
      Мебельные материалы нового поколения: где безупречная эстетика встречает промышленную выносливость. Работаем только с теми, кто ценит совершенство в каждой детали.
    </h1>
  </div>


</div>

        <!-- Картинка (только на мобильных) -->
        <img
            src="{{ asset('images/mobail.webp') }}"
            alt="img"
            class="block md:hidden mt-[120px] mb-[180px] w-full h-[800px] rounded-[10px] aspect-video object-cover">
        <div class=" mt-[180px]">
            <h2 class="mb-[75px] md:w-[75%]">Наши приемущества — то, что отличает нас от конкурентов</h2>
            <div class="pb-[120px]">
                <hr class="border-1 border-[#f2f2f2]">
                <div class="flex flex-col md:flex-row md:items-center gap-[15px] md:gap-0 py-[30px]">
                    <p class="md:w-[50%] text-[30px]">Экспертные консультации</p>
                    <p class="md:w-[50%] text-[20px]">Наши специалисты помогут подобрать оптимальные материалы для мебельного производства с учетом вашего бюджета и технических требований</p>
                </div>
                <hr class="border-1 border-[#f2f2f2]">
                <div class="flex flex-col md:flex-row md:items-center gap-[15px] md:gap-0 py-[30px]">
                    <p class="md:w-[50%] text-[30px]">Широкий ассортимент</p>
                    <p class="md:w-[50%] text-[20px]">Более 250 позиций в каталоге - все для производства качественной мебели</p>
                </div>
                <hr class="border-1 border-[#f2f2f2]">
                <div class="flex flex-col md:flex-row md:items-center gap-[15px] md:gap-0 py-[30px]">
                    <p class="md:w-[50%] text-[30px]">Гибкие условия</p>
                    <p class="md:w-[50%] text-[20px]">Индивидуальные коммерческие предложения и специальные условия для постоянных клиентов</p>
                </div>
                <hr class="border-1 border-[#f2f2f2]">
                <div class="flex flex-col md:flex-row md:items-center gap-[15px] md:gap-0 py-[30px]">
                    <p class="md:w-[50%] text-[30px]">Надежные поставки</p>
                    <p class="md:w-[50%] text-[20px]">Быстрая отгрузка со склада в Москве. Доставка по России или самовывоз</p>
                </div>
                <hr class="border-1 border-[#f2f2f2]">
                <div class="flex flex-col md:flex-row md:items-center gap-[15px] md:gap-0 py-[30px]">
                    <p class="md:w-[50%] text-[30px]">Гарантия качества</p>
                    <p class="md:w-[50%] text-[20px]">Вся продукция сертифицирована. Возврат и обмен в случае брака</p>
                </div>
                <hr class="border-1 border-[#f2f2f2]">
            </div>
        </div>
        <livewire:categories.categories-list />

        <h2 class="mb-[75px]">Партнёры</h2>


        <livewire:partners.partners-list />




        <livewire:news.news-list />

        <div class="h-[800px]">
            <livewire:feedbacks.feedbacks-list />
        </div>

        <div class="">
            <div class="md:w-[75%] pt-[180px]">
                <h1 class="flex flex-col">Мы — команда профессионалов с десятилетним опытом. <span>Наша цель — делать вашу жизнь проще,</span>а бизнес — успешнее.</h1>
            </div>
            <div class="mb-[120px] mt-[40px]">
                <a wire:navigate href="{{ route('page.company') }}" class="text-[16px] px-[24px] py-[12px] rounded-[10px] bg-[#08338F] hover:bg-[#D02320] active:bg-[#D02320] text-white transition-all duration-300">Узнать больше</a>
            </div>
        </div>
    </div>
</div>
