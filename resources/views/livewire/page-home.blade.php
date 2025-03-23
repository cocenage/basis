<div class="content">
    <div class="pt-[180px]">
        <h1 class="md:w-[75%]">Материалы для мебельного производства высокого качества по доступным ценам</h1>
        <img src="{{ asset('images/base.webp') }}" alt="img home" class="mt-[120px] mb-[180px] w-full h-[530px] rounded-[5px] aspect-video">

        <livewire:products.products-list />

        <livewire:news.news-list />

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
