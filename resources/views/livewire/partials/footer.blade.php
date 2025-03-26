<footer class="content">
    <hr class="border-1 border-[#f2f2f2]">
    <div class="md:w-[75%] pt-[30px]">
        <h1 class="flex flex-col">Задавайте вопросы, делитесь идеями — <span>мы всегда готовы помочь.</span></h1>
    </div>
    <div class="mb-[60px] mt-[40px]">
        <x-color-button-all route="page.contacts" title="Свяжитесь с нами" />
    </div>
    <hr class="border-1 border-[#f2f2f2]">
    <div class="hidden md:flex justify-between py-[15px] text-[14px] sm:text-[16px]">
        <p>© Базис-Волга</p>
        <a class="hover:underline" href="{{ asset('files/privacy.pdf') }}" target="_blank">Политика конфиденциальности</a>
        <a target="_blank" class="hover:underline" href="https://t.me/avangaard1k">by @avangaard1k</a>
    </div>
    <div class="md:hidden flex flex-col py-[15px] text-[16px]">
        <div class="flex justify-between w-full items-center">
        <p>© Базис-Волга</p>
        <a target="_blank" class="hover:underline" href="https://t.me/avangaard1k">by @avangaard1k</a>
        </div>
        <a class="hover:underline pt-[10px]" href="{{ asset('files/privacy.pdf') }}" target="_blank">Политика конфиденциальности</a>
    </div>
</footer>
