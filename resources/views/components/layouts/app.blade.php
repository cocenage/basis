<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Page Title' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="">
        <a wire:wire:navigate href="{{ route('page.home') }}">
            <img class="w-[145px] m-[15px] h-auto absolute z-[51]" src="{{ asset('images/logo.webp') }}" alt="logo">
        </a>
    </div>
    <livewire:partials.header />
    {{ $slot }}
    <livewire:partials.footer />
</body>

</html>
