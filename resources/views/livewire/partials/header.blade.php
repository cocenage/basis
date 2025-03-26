<header class="bg-[#F8F8F8] sticky top-0 z-50" id="header">
    <nav class="mx-auto flex w-full items-center justify-between p-[15px]" aria-label="Global">
        <div class="flex lg:flex-1 items-center">
            <a wire:navigate href="{{ route('page.home') }}" class="text-[16px] px-[12px] py-[6px] rounded-[5px] hover:bg-[#f2f2f2] opacity-0 transition-all duration-300" id="logo-text">Базис-Волга</a>
        </div>
        <div class="flex lg:hidden">
            <livewire:modals.modal-menu />
        </div>
        <div class="hidden lg:flex lg:flex-1 lg:justify-end gap-[15px]">
            <x-color-button route="page.catalog" :currentRoute="$currentRoute" title="Каталог"/>
            <x-color-button route="page.news" :currentRoute="$currentRoute" title="Новости"/>
            <x-color-button route="page.company" :currentRoute="$currentRoute" title="Компания"/>
            <x-color-button route="page.contacts" :currentRoute="$currentRoute" title="Контакты"/>
        </div>
    </nav>
</header>
