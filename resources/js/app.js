import "./bootstrap";
import AOS from "aos";
import "aos/dist/aos.css";


document.addEventListener("livewire:navigated", () => {
    // Повторная инициализация AOS после навигации
    AOS.init({
        duration: 600,
        offset: 30,
        once: true,
    });
});

// Инициализация AOS при первой загрузке страницы
AOS.init({
    duration: 600,
    offset: 30,
    once: true,
});

document.addEventListener("scroll", () => {
    const header = document.getElementById("header");
    const scrollPosition = window.scrollY;

    if (scrollPosition > 80) {
        // Изменяем хедер после прокрутки на 100px
        header.classList.add("shrink");
    } else {
        header.classList.remove("shrink");
    }
});

document.addEventListener("alpine:init", () => {
    Alpine.store("modal", {
        open: false,
    });
});

document.addEventListener("alpine:init", () => {
    Alpine.store("modal", {
        open: false,
    });
});

//партнеры
document.addEventListener("alpine:init", () => {
    Alpine.data("swiperMarquee", () => ({
        swiper: null,

        init() {
            // Инициализация после полной загрузки DOM
            this.$nextTick(() => {
                this.setupSwiper();
            });

            // Переинициализация после навигации Livewire
            document.addEventListener("livewire:navigated", () => {
                this.setupSwiper();
            });
        },

        setupSwiper() {
            // Уничтожаем предыдущий экземпляр
            if (this.swiper) {
                this.swiper.destroy();
            }

            // Создаем новый Swiper
            this.swiper = new Swiper(".mySwiper", {
                slidesPerView: "auto",
                spaceBetween: 30,
                loop: true,
                freeMode: true,
                grabCursor: true,
                autoplay: {
                    delay: 0,
                    disableOnInteraction: false,
                },
                speed: 6000,
                resistanceRatio: 0,
            });
        },

        // Очистка при удалении компонента
        destroy() {
            if (this.swiper) {
                this.swiper.destroy();
            }
        },
    }));
});

//32

document.addEventListener("livewire:navigated", () => {
    initSwiper();
});

// Инициализация при первой загрузке
document.addEventListener("DOMContentLoaded", () => {
    initSwiper();
});

function initSwiper() {
    // Сохраняем цвета слайдов
    const slides = document.querySelectorAll(".swiper-slide");
    if (!slides.length) return; // Если слайдов нет, выходим

    const slideColors = Array.from(slides).map((slide) => {
        return {
            element: slide,
            color:
                slide.style.backgroundColor ||
                getComputedStyle(slide).backgroundImage ||
                "linear-gradient(to bottom right, #3b82f6, #7c3aed)",
        };
    });

    // Инициализация Swiper
    const swiper = new Swiper(".fullscreen-slider", {
        loop: true,
        speed: 1000,
        effect: "fade",
        fadeEffect: { crossFade: true },
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
         navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
        on: {
            init: function () {
                slideColors.forEach((item) => {
                    if (item.color.includes("gradient")) {
                        item.element.style.backgroundImage = item.color;
                    } else {
                        item.element.style.backgroundColor = item.color;
                    }
                    item.element.style.transition = "background 1s ease";
                });
            },
            slideChangeTransitionEnd: function () {
                slideColors.forEach((item) => {
                    if (item.color.includes("gradient")) {
                        item.element.style.backgroundImage = item.color;
                    } else {
                        item.element.style.backgroundColor = item.color;
                    }
                });
            },
        },
    });

    // Обработчики для кнопок
     const navButtons = document.querySelectorAll(".swiper-button-next, .swiper-button-prev");
    navButtons.forEach((btn) => {
        btn.style.cursor = "pointer"; // Добавляем курсор
        btn.addEventListener("mouseenter", () => {
            btn.style.transform = "scale(1.1)";
        });
        btn.addEventListener("mouseleave", () => {
            btn.style.transform = "scale(1)";
        });
    });
}

document.addEventListener("alpine:init", () => {
    Alpine.store("navColors", {
        hoverColors: [
            "#91a8d0",
            "#88b04b",
            "#ff7062",
            "#f5df4d",
            "#FFD1DC",
            " #77DD77",
            "#FCE883",
            "#E6E6FA",
        ],
        getRandomColor() {
            return this.hoverColors[
                Math.floor(Math.random() * this.hoverColors.length)
            ];
        },
    });
});

document.addEventListener("livewire:navigating", () => {
    window.livewireNavigating = true;
});

document.addEventListener("livewire:navigated", () => {
    window.livewireNavigating = false;
});

// ...AOS

  function formatPhone(input) {
    let value = input.value.replace(/\D/g, "");
    let formattedValue = "";

    if (value.startsWith("7")) {
        value = value.substring(1);
    }

    if (value.length > 0) {
        formattedValue = "+7 ";
        if (value.length > 0) formattedValue += `(${value.substring(0, 3)}`;
        if (value.length > 3) formattedValue += `) ${value.substring(3, 6)}`;
        if (value.length > 6) formattedValue += `-${value.substring(6, 8)}`;
        if (value.length > 8) formattedValue += `-${value.substring(8, 10)}`;
    }

    input.value = formattedValue;
}

// Инициализация для обычной загрузки
document.addEventListener("DOMContentLoaded", initPhoneInput);
// Инициализация для Livewire навигации
document.addEventListener("livewire:navigated", initPhoneInput);
document.addEventListener("livewire:load", initPhoneInput);

function initPhoneInput() {
    const phoneInput = document.getElementById("phone");

    if (!phoneInput) return;

    // Обработчик ввода
    phoneInput.addEventListener("input", (e) => {
        formatPhone(e.target);
        // Синхронизация с Livewire (если используется wire:model)
        if (e.target.hasAttribute("wire:model")) {
            const model = e.target.getAttribute("wire:model");
            Livewire.find(
                e.target.closest("[wire\\:id]").getAttribute("wire:id")
            ).set(model, e.target.value.replace(/\D/g, "").replace(/^7/, ""));
        }
    });

    // Обработчик Backspace
    phoneInput.addEventListener("keydown", (e) => {
        if (e.key === "Backspace") {
            setTimeout(() => formatPhone(e.target), 0);
        }
    });

    // Инициализация начального значения
    formatPhone(phoneInput);
}



// Инициализация карты
function initMap() {
  const mapElement = document.getElementById('map');
  if (!mapElement) return;

  // Удаляем старую карту если есть
  if (mapElement._leaflet_map) {
    mapElement._leaflet_map.remove();
    delete mapElement._leaflet_map;
  }

  const center = [48.7085, 44.5143];
  const map = L.map(mapElement, {
    attributionControl: false,
    preferCanvas: true
  }).setView(center, 16);

  L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    detectRetina: true
  }).addTo(map);

  L.marker(center)
    .addTo(map)
    .bindPopup("ул. Рокоссовского, 2, Волгоград")
    .openPopup();

  setTimeout(() => map.invalidateSize(), 100);
  mapElement._leaflet_map = map;
}

// Первая загрузка
document.addEventListener('DOMContentLoaded', initMap);

// Обновление при навигации
document.addEventListener("livewire:navigated", initMap);
