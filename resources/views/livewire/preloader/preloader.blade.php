<div x-data="{
        show: true,
        isVisible: false,
        init() {
            this.isVisible = true;

            // Отключаем прелоадер для wire:navigate
            if (window.livewireNavigating) {
                this.show = false;
                this.isVisible = false;
                return;
            }

            // Первая загрузка страницы
            window.addEventListener('DOMContentLoaded', () => {
                setTimeout(() => {
                    this.show = false;
                    setTimeout(() => this.isVisible = false, 700);
                }, 1000);
            });

            // Обработка обычных Livewire-запросов
            window.addEventListener('livewire:init', () => {
                Livewire.hook('request', ({ uri }) => {
                    if (uri.startsWith('/livewire/update')) return;

                    if (!window.livewireNavigating) {
                        this.isVisible = true;
                        this.show = true;
                    }
                });

                Livewire.hook('commit', ({ component, succeed }) => {
                    succeed(() => {
                        if (window.livewireNavigating) return;

                        setTimeout(() => {
                            this.show = false;
                            setTimeout(() => this.isVisible = false, 700);
                        }, 800);
                    });
                });
            });
        }
    }"
    x-show="isVisible"
    x-transition:leave="duration-300"
    class="fixed inset-0 z-[9999] overflow-hidden pointer-events-none">

    <!-- Фоновый слой -->
    <div class="absolute inset-0 bg-white transition-opacity duration-500"
        :class="{'opacity-100': show, 'opacity-0': !show}"></div>

    <!-- Анимированный блок -->
    <div class="absolute top-0 left-0 w-full h-full bg-[#F8F8F8] transform origin-top"
        :class="{
             'scale-y-100': show,
             'scale-y-0': !show,
             'transition-transform duration-700 ease-[cubic-bezier(0.77, 0, 0.18, 1)]': true
         }"></div>

    <!-- Логотип по центру -->
    <div class="absolute inset-0 flex items-center justify-center transition-opacity duration-300"
        :class="{'opacity-100': show, 'opacity-0': !show}">
        <p class="text-[16px] px-[12px] py-[6px] rounded-[5px] bg-[#f2f2f2]">Базис-волга</p>
    </div>
</div>
