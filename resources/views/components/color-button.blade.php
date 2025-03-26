@props(['route', 'currentRoute', 'title'])

<a
    wire:navigate
    href="{{ route($route) }}"
    x-data="{
        hoverColor: Alpine.store('navColors').getRandomColor()
    }"
    @mouseenter="hoverColor = Alpine.store('navColors').getRandomColor()"
    :style="{ '--hover-color': hoverColor }"
    class="text-[16px] px-[12px] py-[6px] rounded-[5px] transition-colors duration-300 active:bg-[var(--hover-color)]"
    :class="{
        'bg-[var(--hover-color)]': '{{ $currentRoute }}' === '{{ $route }}',
        'hover:bg-[var(--hover-color)]': '{{ $currentRoute }}' !== '{{ $route }}'
    }"
>
    {{ $title }}
</a>
