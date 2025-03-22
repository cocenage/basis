<header class="bg-white sticky top-0 z-50" id="header">
    <nav class="mx-auto flex w-full items-center justify-between p-[15px]" aria-label="Global">
        <div class="flex lg:flex-1 items-center">
            <a wire:navigate href="{{ route('page.home') }}" class="text-[16px] px-[12px] py-[6px] rounded-[5px] hover:bg-[#f2f2f2] opacity-0 transition-all duration-300" id="logo-text">Базис-Волга</a>
        </div>
        <div class="flex lg:hidden">
            <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
                <span class="sr-only">Open main menu</span>
                <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </button>
        </div>
        <div class="hidden lg:flex lg:flex-1 lg:justify-end gap-[15px]">
            <a wire:navigate href="{{ route('page.catalog') }}" class="text-[16px] px-[12px] py-[6px] rounded-[5px] hover:bg-[#f2f2f2] duration-300 {{ $currentRoute === 'page.catalog' ? 'bg-[#f2f2f2]' : '' }}">Каталог</a>
            <a wire:navigate href="{{ route('page.news') }}" class="text-[16px] px-[12px] py-[6px] rounded-[5px] hover:bg-[#f2f2f2] duration-300 {{ $currentRoute === 'page.news' ? 'bg-[#f2f2f2]' : '' }}">Новости</a>
            <a wire:navigate href="{{ route('page.company') }}" class="text-[16px] px-[12px] py-[6px] rounded-[5px] hover:bg-[#f2f2f2] duration-300 {{ $currentRoute === 'page.company' ? 'bg-[#f2f2f2]' : '' }}">Компания</a>
            <a wire:navigate href="{{ route('page.contacts') }}" class="text-[16px] px-[12px] py-[6px] rounded-[5px] hover:bg-[#f2f2f2] duration-300 {{ $currentRoute === 'page.contacts' ? 'bg-[#f2f2f2]' : '' }}">Контакты</a>
        </div>
    </nav>
</header>
