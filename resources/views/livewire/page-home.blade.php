<div class="content">
    {{-- The whole world belongs to you. --}}
    <div class="pt-[180px]">
        <h1 class="md:w-[75%]">Материалы для мебельного производства высокого качества по доступным ценам</h1>
        <img src="{{ asset('images/base.webp') }}" alt="img home" class="mt-[120px] mb-[180px] w-full h-[530px] rounded-[5px] aspect-video">

        <div class="">
            <h2 class="pb-[75px]">Каталог</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                <div class="col-span-1 overflow-hidden rounded-[5px]" data-aos="fade-up">
                    <a href="#">
                        <!-- Изображение растянуто на 100% ширины -->
                        <img src="{{ asset('images/base.webp') }}" class="w-full rounded-[5px] object-cover aspect-square" alt="img catalog" loading="lazy">
                        <p class="text-[20px] font-medium pt-[15px] pb-[60px]">Название</p>
                    </a>
                </div>
                <!-- Повторите блок для других элементов -->
            </div>
            <div class="mb-[180px] mt-[60px] w-full flex justify-center">
                <a wire:navigate href="{{ route('page.catalog') }}" class="text-[16px] px-[24px] py-[12px] rounded-[5px] bg-[#f2f2f2] hover:bg-[#e1e1e1] duration-300  ">Больше товаров</a>
            </div>
        </div>

        <div class="">
            <h2 class="pb-[75px]">Новости</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                <div class="col-span-1 overflow-hidden rounded-[5px] group" data-aos="fade-up">
                    <a href="#">
                        <img src="{{ asset('images/base.webp') }}" class="w-full rounded-[5px] object-cover aspect-video" alt="img catalog" loading="lazy">
                        <div class="flex gap-[5px] items-center pt-[15px] group">
                            <p class="text-[20px] font-medium relative inline-block">
                                Название
                                <span class="absolute bottom-0 left-0 w-0 h-[2px] bg-current transition-all duration-300 group-hover:w-full"></span>
                            </p>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-move-up-right">
                                <path d="M13 5H19V11" />
                                <path d="M19 5L5 19" />
                            </svg>
                        </div>
                        <p class="text-[16px] opacity-50 font-medium pt-[10px] pb-[60px]">дата</p>
                    </a>
                </div>
                <!-- Повторите блок для других элементов -->
            </div>
            <div class="mb-[180px] mt-[60px] w-full flex justify-center">
                <a wire:navigate href="{{ route('page.news') }}" class="text-[16px] px-[24px] py-[12px] rounded-[5px] bg-[#f2f2f2] hover:bg-[#e1e1e1] duration-300  ">Больше новостей</a>
            </div>
        </div>

        <div class="">
        <div class="md:w-[75%] pt-[30px]">
            <h1 class="flex flex-col">Мы — команда профессионалов с [X] лет опыта. <span>Наша цель — делать вашу жизнь проще,</span>а бизнес — успешнее.</h1>
        </div>
        <div class="mb-[120px] mt-[40px]">
            <a wire:navigate href="{{ route('page.contacts') }}" class="text-[16px] px-[24px] py-[12px] rounded-[5px] bg-[#f2f2f2] hover:bg-[#e1e1e1] duration-300  ">Узнать больше</a>
        </div>

        </div>

    </div>
</div>
