@push('meta')
<title>{{ 'Контакты – Базис Волга' }}</title>
<meta name="description" content="Контактная информация компании Базис Волга в Волгограде. Адрес, телефон, электронная почта, схема проезда. Мы всегда на связи!">
<meta name="keywords" content="контакты Базис Волга, адрес Базис Волга, телефон Базис Волга, как доехать до Базис Волга, Волгоград">
@endpush

<div class="content mt-[180px]">
    <h1 class="md:w-[75%]">Материалы для мебельного производства высокого качества по доступным ценам</h1>
    <div id="map"></div>
    <div class="mt-[120px] mb-[180px] w-full h-[530px] rounded-[5px] aspect-video object-cover bg-amber-100">map</div>
    <div class="flex flex-col gap-[30px] pb-[60px]">
        <h2 class="">Номер телефона</h2>
        <a class="w-max text-[16px] px-[24px] py-[12px] rounded-[5px] bg-[#f2f2f2] hover:bg-[#e1e1e1] duration-300" target="_blank" href="tel:{{ $contact->phone_a }}">
            {{ $contact->phone }}
        </a>
    </div>
    <div class="flex flex-col gap-[30px] pb-[60px]">
        <h2 class="">Почта</h2>
        <a class="w-max text-[16px] px-[24px] py-[12px] rounded-[5px] bg-[#f2f2f2] hover:bg-[#e1e1e1] duration-300" target="_blank" href="mailto:{{ $contact->mail_a }}">
            {{ $contact->mail }}
        </a>
    </div>
    <div class="pb-[60px]">
        @if (is_array($contact->name) && count($contact->name) > 0)
        @foreach ($contact->name as $item)
        <div class="flex flex-col gap-[30px] pb-[60px]">
            <h2>{{ $item['1'] }}</h2>
            <a class="w-max text-[16px] px-[24px] py-[12px] rounded-[5px] bg-[#f2f2f2] hover:bg-[#e1e1e1] duration-300" target="_blank" href="{{ $item['2'] }}">
                {!! $item['2'] !!}
            </a>
        </div>
        @endforeach
        @else
        <p>Контакты отсутствуют.</p>
        @endif
    </div>
</div>
