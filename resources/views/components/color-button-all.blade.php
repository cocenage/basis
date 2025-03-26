@props(['route', 'title'])

<a
    wire:navigate
    href="{{ route($route) }}"
    x-data="{ hoverColor: Alpine.store('navColors').getRandomColor() }"
    @mouseenter="hoverColor = Alpine.store('navColors').getRandomColor()"
    :style="{ '--hover-color': hoverColor }"
    class="bg-[#f2f2f2] text-[16px] px-[24px] py-[12px] rounded-[10px] active:bg-[var(--hover-color)] hover:bg-[var(--hover-color)] transition-colors duration-300"
>
    {{ $title }}
</a>


