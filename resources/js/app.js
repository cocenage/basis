import './bootstrap';
import AOS from 'aos';
import 'aos/dist/aos.css';

document.addEventListener('livewire:navigated', () => {
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

document.addEventListener('scroll', () => {
    const header = document.getElementById('header');
    const scrollPosition = window.scrollY;

    if (scrollPosition > 80) { // Изменяем хедер после прокрутки на 100px
        header.classList.add('shrink');
    } else {
        header.classList.remove('shrink');
    }
});









