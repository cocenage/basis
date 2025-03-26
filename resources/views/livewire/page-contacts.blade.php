@push('meta')
<title>{{ 'Контакты – Базис Волга' }}</title>
<meta name="description" content="Контактная информация компании Базис Волга в Волгограде. Адрес, телефон, электронная почта, схема проезда. Мы всегда на связи!">
<meta name="keywords" content="контакты Базис Волга, адрес Базис Волга, телефон Базис Волга, как доехать до Базис Волга, Волгоград">
@endpush

<div class="content mt-[60px] md:mt-[180px]">
    <h1 class="md:w-[75%]">Всегда на связи! Ответим на вопросы и поможем с выбором.</h1>
    <div class="mt-[120px] mb-[180px] w-full h-[800px] rounded-[10px] overflow-hidden relative group">
        <a target="_blank" href="https://yandex.ru/maps/org/bazis_volga/1117385851/?from=mapframe&ll=44.498838%2C48.714185&source=mapframe&um=constructor%3A5a1aae906d26e7440576e3929267242a628b9d57f1015ed8a0d918c6e6f90b45&utm_source=mapframe&z=18.09">
            <!-- Картинка с эффектом увеличения -->
            <img
                loading="lazy"
                src="{{ asset('images/map.webp') }}"
                alt="img"
                class="opacity-40 w-full h-full object-cover bg-[#f7f7f7] transition-transform duration-500 group-hover:scale-105">
            <!-- Текст по центру с плавным изменением фона -->
            <div class="absolute inset-0 flex items-center justify-center text-gray-600 group-hover:text-gray-900 text-[30px] sm:text-[36px] ">
                Карта
            </div>
        </a>
    </div>
    <div class="flex flex-col gap-[30px] pb-[60px]">
        <h2 class="">Номер телефона</h2>
        <a class="w-max text-[16px] px-[24px] py-[12px] rounded-[10px] bg-[#f2f2f2] hover:bg-[#e1e1e1] duration-300" target="_blank" href="tel:{{ $contact->phone_a }}">
            {{ $contact->phone }}
        </a>
    </div>
    <div class="flex flex-col gap-[30px] pb-[60px]">
        <h2 class="">Почта</h2>
        <a class="w-max text-[16px] px-[24px] py-[12px] rounded-[10px] bg-[#f2f2f2] hover:bg-[#e1e1e1] duration-300" target="_blank" href="mailto:{{ $contact->mail_a }}">
            {{ $contact->mail }}
        </a>
    </div>
    <div class="pb-[60px]">
        @if (is_array($contact->name) && count($contact->name) > 0)
        @foreach ($contact->name as $item)
        <div class="flex flex-col gap-[30px] pb-[60px]">
            <h2>{{ $item['1'] }}</h2>
            <a class="w-max text-[16px] px-[24px] py-[12px] rounded-[10px] bg-[#f2f2f2] hover:bg-[#e1e1e1] duration-300" target="_blank" href="{{ $item['2'] }}">
                {!! $item['2'] !!}
            </a>
        </div>
        @endforeach
        @else

        @endif
    </div>
</div>
