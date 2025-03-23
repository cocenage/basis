<div x-data="{ isOpen: @entangle('isOpen') }"
    x-cloak
    wire:ignore
    x-init="$watch('isOpen', value => {
         document.body.classList.toggle('overflow-hidden', value);
         if (!value) {
             setTimeout(() => $wire.set('isOpen', false), 500);
         }
     })">

    <!-- Open Modal Button -->
    <button @click="isOpen = true" class="text-[16px] px-[12px] py-[6px] rounded-[5px] hover:bg-[#f2f2f2] duration-300 cursor-pointer">
        <span class="sr-only">Open main menu</span>
        <x-heroicon-o-x-mark class="h-6 w-6" />
    </button>

    <!-- Modal Backdrop -->
    <div
        x-show="isOpen"
        x-transition:enter="transition ease-out duration-500"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in duration-500"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        class="fixed inset-0 z-[52] bg-white/50 backdrop-blur-xl overflow-auto hide-scrollbar"
        @click="isOpen = false"
        @keydown.escape.window="isOpen = false">
        <!-- Close Button -->
        <nav class="z-[52] mx-auto flex w-full items-stretch justify-between content" aria-label="Global">
            <a wire:navigate href="{{ route('page.home') }}" class="text-[16px] px-[12px] py-[6px] rounded-[5px] hover:bg-[#f2f2f2] transition-all duration-300">Базис-Волга</a>
            <button
                x-show="isOpen"
                x-transition.opacity.duration.500ms
                @click.stop="isOpen = false"
                class="text-[16px] px-[12px] py-[6px] rounded-[5px] hover:bg-[#f2f2f2] duration-300 cursor-pointer">
                <x-heroicon-o-x-mark class="h-6 w-6" />
            </button>
        </nav>
        <div class="content mt-[180px] flex flex-col gap-[5px]">
            <a wire:navigate href="{{ route('page.catalog') }}" class=""><h1>Каталог</h1></a>
            <a wire:navigate href="{{ route('page.news') }}" class=""><h1>Новости</h1></a>
            <a wire:navigate href="{{ route('page.company') }}" class=""><h1>Компания</h1></a>
            <a wire:navigate href="{{ route('page.contacts') }}" class=""><h1>Контакты</h1></a>
        </div>
        <div class="content flex justify-between py-[15px] text-[14px] sm:text-[16px]">
        <p>© Базис-Волга</p>
        <a class="hover:underline" href="{{ asset('files/privacy.pdf') }}" target="_blank">Политика конфиденциальности</a>
    </div>
    </div>
</div>
