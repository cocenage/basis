<footer class="content">
    <hr class="border-1 border-[#f2f2f2]">
    <div class="grid grid-cols-12">
    <h1 class="col-span-8 leading-none pt-[30px]">Мы всегда готовы ответить на ваши вопросы и помочь с выбором материалов для вашего проекта.</h1>
    </div>
    <div class="mb-[60px] mt-[40px]">
        <a wire:navigate href="{{ route('page.contacts') }}" class="text-[16px] px-[24px] py-[12px] rounded-[5px] bg-[#f2f2f2] hover:bg-[#e1e1e1] duration-300  ">Свяжитесь с нами</a>
    </div>
    <hr class="border-1 border-[#f2f2f2]">
    <div class="flex justify-between py-[15px] text-[16px]">
        <p>© Базис-Волга</p>
        <a class="hover:underline" href="{{ asset('files/privacy.pdf') }}" target="_blank">Политика конфиденциальности</a>
    </div>
</footer>
