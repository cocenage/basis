import './bootstrap';
import AOS from 'aos';
import 'aos/dist/aos.css'; // Импорт стилей

// Инициализация AOS
AOS.init({
    duration: 800, // Длительность анимации
    offset: 120,   // Отступ от верха экрана для запуска анимации
    once: true,    // Анимация сработает только один раз
});

document.addEventListener('scroll', () => {
    const header = document.getElementById('header');
    const scrollPosition = window.scrollY;

    if (scrollPosition > 80) { // Изменяем хедер после прокрутки на 100px
        header.classList.add('shrink');
    } else {
        header.classList.remove('shrink');
    }
});

