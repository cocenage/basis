<header class="bg-white sticky top-0 z-50" id="header">
    <nav class="mx-auto flex w-full items-center justify-between p-[15px]" aria-label="Global">
        <div class="flex lg:flex-1 items-center">
            <a wire:navigate href="{{ route('page.home') }}" class="text-[16px] px-[12px] py-[6px] rounded-[5px] hover:bg-[#f2f2f2] opacity-0 transition-all duration-300" id="logo-text">Базис-Волга</a>
        </div>
        <div class="flex lg:hidden">
            <livewire:modals.modal-menu />
        </div>
        <div class="hidden lg:flex lg:flex-1 lg:justify-end gap-[15px]">
            <a wire:navigate href="{{ route('page.catalog') }}" class="text-[16px] px-[12px] py-[6px] rounded-[5px] hover:bg-[#f2f2f2] duration-300 {{ $currentRoute === 'page.catalog' ? 'bg-[#f2f2f2]' : '' }}">Каталог</a>
            <a wire:navigate href="{{ route('page.news') }}" class="text-[16px] px-[12px] py-[6px] rounded-[5px] hover:bg-[#f2f2f2] duration-300 {{ $currentRoute === 'page.news' ? 'bg-[#f2f2f2]' : '' }}">Новости</a>
            <a wire:navigate href="{{ route('page.company') }}" class="text-[16px] px-[12px] py-[6px] rounded-[5px] hover:bg-[#f2f2f2] duration-300 {{ $currentRoute === 'page.company' ? 'bg-[#f2f2f2]' : '' }}">Компания</a>
            <a wire:navigate href="{{ route('page.contacts') }}" class="text-[16px] px-[12px] py-[6px] rounded-[5px] hover:bg-[#f2f2f2] duration-300 {{ $currentRoute === 'page.contacts' ? 'bg-[#f2f2f2]' : '' }}">Контакты</a>
        </div>
    </nav>
</header>
