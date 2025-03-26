<div x-data="{ isOpen: @entangle('isOpen') }"
    x-cloak
    wire:ignore
    x-init="$watch('isOpen', value => {
         document.body.classList.toggle('overflow-hidden', value);
         Alpine.store('modal').open = value;
         if (!value) {
             setTimeout(() => $wire.set('isOpen', false), 500);
         }
     })">

    <!-- Open Modal Button -->
    <button @click="isOpen = true" class="text-[16px] px-[12px] py-[6px] rounded-[10px] hover:bg-[#f2f2f2] active:bg-[#f2f2f2] duration-300 cursor-pointer">
        <span class="sr-only">Open main menu</span>
        <x-heroicon-o-bars-2 class="h-6 w-6" />
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
        <div class="content min-h-screen">
            <div class="flex flex-col justify-between h-screen">
                <nav class="z-[52] mx-auto flex w-full items-stretch justify-between pt-[15px]" aria-label="Global">
                    <a wire:navigate href="{{ route('page.home') }}" class="text-[16px] px-[12px] py-[6px] rounded-[10px] hover:bg-[#f2f2f2] transition-all duration-300">Базис-Волга</a>
                    <button
                        x-show="isOpen"
                        x-transition.opacity.duration.500ms
                        @click.stop="isOpen = false"
                        class="text-[16px] px-[12px] py-[6px] rounded-[10px] hover:bg-[#f2f2f2] duration-300 cursor-pointer">
                        <x-heroicon-o-x-mark class="h-6 w-6" />
                    </button>
                </nav>
                <div class=" flex flex-col gap-[5px]">
                    <a wire:navigate href="{{ route('page.catalog') }}" class="">
                        <h1>Каталог</h1>
                    </a>
                    <a wire:navigate href="{{ route('page.news') }}" class="">
                        <h1>Новости</h1>
                    </a>
                    <a wire:navigate href="{{ route('page.company') }}" class="">
                        <h1>Компания</h1>
                    </a>
                    <a wire:navigate href="{{ route('page.contacts') }}" class="">
                        <h1>Контакты</h1>
                    </a>
                </div>
                <div class="my-[30px] flex flex-col">
                    <a class="pb-[5px]" target="_blank" href="tel:{{ $contact->phone_a }}">
                        <p class="text-[20px]">{{ $contact->phone }}</p>
                    </a>
                    <a class="pb-[5px]" target="_blank" href="mailto:{{ $contact->mail_a }}">
                        <p class="text-[20px]">{{ $contact->mail }}</p>
                    </a>
                    @if (is_array($contact->name) && count($contact->name) > 0)
                    @foreach ($contact->name as $item)
                    <div class="flex flex-col gap-[5px]">
                        <a class="" target="_blank" href="{{ $item['2'] }}">
                            <p class="text-[20px]">{!! $item['1'] !!}</p>
                        </a>
                    </div>
                    @endforeach
                    @else

                    @endif
                </div>
                <div class="md:hidden flex flex-col py-[15px] text-[16px]">
                    <div class="flex justify-between w-full items-center">
                        <p>© Базис-Волга</p>
                        <a target="_blank" class="hover:underline" href="https://t.me/avangaard1k">by @avangaard1k</a>
                    </div>
                    <a class="hover:underline pt-[10px]" href="{{ asset('files/privacy.pdf') }}" target="_blank">Политика конфиденциальности</a>
                </div>
            </div>
        </div>
    </div>
</div>
