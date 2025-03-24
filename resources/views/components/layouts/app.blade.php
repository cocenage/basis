<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:title" content="Базис Волга – Материалы для производства мебели в Волгограде">
    <meta property="og:description" content="Материалы для мебельного производства высокого качества по доступным ценам">
    <meta property="og:image" content="{{ asset('images/ogimage.webp') }}">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:logo" content="{{ asset('images/logo.webp') }}" />
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">
    <meta name="author" content="by @avangaard1k">
    <meta name="language" content="ru">
    @stack('meta')

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" media="print" onload="this.media='all'"/>
</head>

<body>
    <div class="">
        <a wire:navigate href="{{ route('page.home') }}">
            <img class="w-[145px] m-[15px] h-auto absolute z-[51]" src="{{ asset('images/logo.webp') }}" alt="logo">
        </a>
    </div>
    <livewire:partials.header />
    {{ $slot }}
    <livewire:partials.footer />
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js" defer></script>
</body>

</html>
