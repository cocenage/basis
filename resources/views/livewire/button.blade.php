<button
    x-data="{ hoverColor: $root.getRandomHover() }"
    x-bind:style="`background-color: ${hoverColor.base}`"
    x-on:mouseenter="hoverColor = $root.getRandomHover()"
    class="px-6 py-3 text-white rounded-lg font-medium transition-colors duration-300"
    x-bind:style.hover="`background-color: ${hoverColor.hover}`">
    <slot></slot>
</button>
