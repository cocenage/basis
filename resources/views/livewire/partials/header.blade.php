<header class="bg-[#F8F8F8] sticky top-0 z-50" id="header">
    <nav class="mx-auto flex w-full items-center justify-between p-[15px]" aria-label="Global">
        <div class="flex lg:flex-1 items-center">
            <a wire:navigate href="{{ route('page.home') }}" class="text-[16px] px-[12px] py-[6px] rounded-[5px] hover:bg-[#f2f2f2] active:bg-[#f2f2f2] text-[#08338F] opacity-0 transition-all duration-300" id="logo-text">Базис-Волга</a>
        </div>
        <div class="flex lg:hidden">
            <livewire:modals.modal-menu />
        </div>
        <div class="hidden lg:flex lg:flex-1 lg:justify-end gap-[15px]">
            <a wire:navigate href="{{ route('page.catalog') }}"
                class="text-[16px] px-[12px] py-[6px] rounded-[5px] {{ request()->routeIs('page.catalog') ? 'bg-[#D02320]' : 'bg-[#08338F]' }} hover:bg-[#D02320] active:bg-[#D02320] text-white transition-all duration-300">
                Каталог
            </a>
            <a wire:navigate href="{{ route('page.news') }}"
                class="text-[16px] px-[12px] py-[6px] rounded-[5px] {{ request()->routeIs('page.news') ? 'bg-[#D02320]' : 'bg-[#08338F]' }} hover:bg-[#D02320] active:bg-[#D02320] text-white transition-all duration-300">
                Новости
            </a>
            <a wire:navigate href="{{ route('page.company') }}"
                class="text-[16px] px-[12px] py-[6px] rounded-[5px] {{ request()->routeIs('page.company') ? 'bg-[#D02320]' : 'bg-[#08338F]' }} hover:bg-[#D02320] active:bg-[#D02320] text-white transition-all duration-300">
                Компания
            </a>
            <a wire:navigate href="{{ route('page.contacts') }}"
                class="text-[16px] px-[12px] py-[6px] rounded-[5px] {{ request()->routeIs('page.contacts') ? 'bg-[#D02320]' : 'bg-[#08338F]' }} hover:bg-[#D02320] active:bg-[#D02320] text-white transition-all duration-300">
                Контакты
            </a>
        </div>
    </nav>
</header>
