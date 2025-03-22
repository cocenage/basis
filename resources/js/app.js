import './bootstrap';

document.addEventListener('scroll', () => {
    const header = document.getElementById('header');
    const scrollPosition = window.scrollY;

    if (scrollPosition > 80) { // Изменяем хедер после прокрутки на 100px
        header.classList.add('shrink');
    } else {
        header.classList.remove('shrink');
    }
});

