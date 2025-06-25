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
        <div class="mb-[120px] mt-[40px] flex gap-[10px]">

            <a wire:navigate href="{{ route('page.company') }}" class="text-[16px] px-[24px] py-[12px] rounded-[10px] bg-[#08338F] hover:bg-[#D02320] active:bg-[#D02320] text-white transition-all duration-300">Узнать больше</a>
            <a wire:navigate href="{{ route('page.contacts') }}" class="text-[16px] px-[24px] py-[12px] rounded-[10px] bg-[#08338F] hover:bg-[#D02320] active:bg-[#D02320] text-white transition-all duration-300">Написать нам</a>

        </div>
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
        <div class=" mt-[180px] pb-[120px]">
            <h2 class="mb-[75px] md:w-[75%]"> Наши приемущества — то, что отличает нас от конкурентов</h2>
            <div class="">
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



        <div class="pb-[180px]">
            <h2 class="mb-[75px] md:w-[75%]">Наши работы — реализованные проекты и довольные клиенты</h2>
            <div class="pb-[120px]">
                <div class="flex flex-col lg:grid lg:grid-cols-4 gap-[15px]">
                    <div class="col-span-2">
                        <img src="{{ asset('images/main1.webp') }}"
                            alt="img"
                            class="w-full h-full rounded-[10px] aspect-video object-cover">
                        <p class=" py-[30px]  text-[20px]">
                            <span>Белый диван "Милан"</span><br>
                            Изготовлен с использованием: итальянской кожи BellaVita премиум-класса,
                            каркаса из массива бука и анодированной алюминиевой фурнитуры.
                            Идеальное сочетание роскоши и долговечности.
                        </p>
                    </div>
                    <div class="col-span-2">
                        <img src="{{ asset('images/main2.webp') }}"
                            alt="img"
                            class="w-full h-full rounded-[10px] aspect-video object-cover">
                        <p class=" py-[30px] text-[20px]">
                            <span>Черный диван "Блэк Стар"</span><br>

                            В производстве использованы: ударопрочные панели ЛДСП EGGER класса SuperE,
                            немецкая микрофибра PrimeFlex и механизмы трансформации с 10-летней гарантией.
                        </p>
                    </div>
                </div>





            </div>
        </div>



        <livewire:news.news-list />




        <div class="">
            <div class="flex flex-col-reverse lg:grid lg:grid-cols-2 gap-[15px]">
                <div class="col-sapn-1">
                    <h1 class="flex flex-col">Мы — команда профессионалов с десятилетним опытом. <span>Наша цель — делать вашу жизнь проще,</span>а бизнес — успешнее.</h1>
                    <div class="mb-[120px] mt-[40px]">
                        <a wire:navigate href="{{ route('page.company') }}" class="text-[16px] px-[24px] py-[12px] rounded-[10px] bg-[#08338F] hover:bg-[#D02320] active:bg-[#D02320] text-white transition-all duration-300">Узнать больше</a>
                    </div>
                </div>
                <div class="col-sapn-1">
                    <img src="{{ asset('images/team.webp') }}"
                        alt="img"
                        class="w-full h-[200px] md:h-[350px] rounded-[10px] aspect-video object-cover">
                </div>
            </div>

        </div>
    </div>
</div>
