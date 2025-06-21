<footer class="content">
    <hr class="border-1 border-[#f2f2f2]">
    <div class="md:w-[75%] pt-[30px]">
        <h1 class="flex flex-col">Задавайте вопросы, делитесь идеями — <span>мы всегда готовы помочь.</span></h1>
    </div>
    <div class="mb-[60px] mt-[40px]">
        <a wire:navigate href="{{ route('page.contacts') }}" class="text-[16px] px-[24px] py-[12px] rounded-[5px] bg-[#08338F] hover:bg-[#D02320] active:bg-[#D02320] text-white transition-all duration-300">Свяжитесь с нами</a>
    </div>
    <hr class="border-1 border-[#f2f2f2]">
    <div class="hidden md:flex justify-between py-[15px] text-[14px] sm:text-[16px]">
        <a wire:navigate href="{{ route('page.home') }}">
            <p>© Базис-Волга</p>
        </a>
        <a class="hover:underline" href="{{ asset('files/privacy.pdf') }}" target="_blank">Политика конфиденциальности</a>
        <a target="_blank" class="hover:underline" href="https://t.me/avangaard1k">by @avangaard1k</a>
    </div>
    <div class="md:hidden flex flex-col py-[15px] text-[16px]">
        <div class="flex justify-between w-full items-center">
            <a wire:navigate href="{{ route('page.home') }}">
                <p>© Базис-Волга</p>
            </a>
            <a target="_blank" class="hover:underline" href="https://t.me/avangaard1k">by @avangaard1k</a>
        </div>
        <a class="hidden sm:block hover:underline pt-[10px]" href="{{ asset('files/privacy.pdf') }}" target="_blank">Политика конфиденциальности</a>
    </div>
</footer>
