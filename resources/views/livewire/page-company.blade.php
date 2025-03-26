@push('meta')
<title>{{ 'Компания – Базис Волга' }}</title>
<meta name="description" content="Компания Базис Волга в Волгограде – надежный поставщик материалов для производства мебели. Мы предлагаем качественные ЛДСП, МДФ, фурнитуру и комплектующие. Опыт работы, гарантии качества, выгодные условия сотрудничества.">
<meta name="keywords" content="о компании Базис Волга, материалы для мебели Волгоград, поставщик ЛДСП, МДФ, фурнитура, производство мебели, гарантии качества">
@endpush

<div class="mt-[180px]">
    <div class="content relative">
        <h1 class="md:w-[75%]">Базис Волга – надежный партнер в производстве мебели. Широкий ассортимент ЛДСП, МДФ, фурнитуры и кромки. Качество, выгодные цены и индивидуальный подход.</h1>
        <video
            autoplay
            muted
            loop
            preload="metadata"
            poster="{{ asset('images/video1.webp') }}"
            class="mt-[120px] mb-[180px] w-full h-[800px] rounded-[10px] aspect-video object-cover">
            <source src="{{ asset('images/company.webm') }}" type="video/webm">
            Ваш браузер не поддерживает видео.
        </video>
    </div>
    <div class="">
        <div class="content mt-[180px]">
            <h2 class="mb-[75px] md:w-[75%]"> Наши технологи с 10-летним опытом проведут детальный анализ ваших потребностей
                и предложат оптимальные решения из 250+ позиций каталога, учитывая
                специфику производства и бюджетные параметры</h2>
            <div class="pb-[120px]">
                <hr class="border-1 border-[#f2f2f2]">
                <div class="flex flex-col md:flex-row md:items-center gap-[15px] md:gap-0 py-[30px]">
                    <p class="md:w-[50%] text-[30px]">Консультация</p>
                    <p class="md:w-[50%] text-[20px]"> Наши специалисты помогут подобрать оптимальные материалы для вашего производства с учетом бюджета и требований</p>
                </div>
                <hr class="border-1 border-[#f2f2f2]">
                <div class="flex flex-col md:flex-row md:items-center gap-[15px] md:gap-0 py-[30px]">
                    <p class="md:w-[50%] text-[30px]">Оформление заказа</p>
                    <p class="md:w-[50%] text-[20px]"> Вы выбираете нужные материалы, мы готовим коммерческое предложение
                        с индивидуальными условиями для постоянных клиентов

                </div>
                <hr class="border-1 border-[#f2f2f2]">
                <div class="flex flex-col md:flex-row md:items-center gap-[15px] md:gap-0 py-[30px]">
                    <p class="md:w-[50%] text-[30px]">Доставка</p>
                    <p class="md:w-[50%] text-[20px]"> Оперативная отгрузка со склада в Москве. Возможен самовывоз
                        или доставка транспортной компанией в любой регион</p>
                </div>
                <hr class="border-1 border-[#f2f2f2]">
                <div class="flex flex-col md:flex-row md:items-center gap-[15px] md:gap-0 py-[30px]">
                    <p class="md:w-[50%] text-[30px]">Гарантия качества</p>
                    <p class="md:w-[50%] text-[20px]"> Все материалы сопровождаются сертификатами. Возврат и обмен в случае брака</p>
                </div>
                <hr class="border-1 border-[#f2f2f2]">
            </div>

        </div>

        <h2 class="mb-[75px] content">Партнёры</h2>
        <livewire:partners.partners-list />


        <div class="h-[800px] mb-[360px]">
            <livewire:feedbacks.feedbacks-list />
        </div>
    </div>
</div>
