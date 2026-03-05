// Бургер-меню
const burger = document.querySelector('.burger');
const nav = document.querySelector('.nav');

burger.addEventListener('click', () => {
    nav.classList.toggle('active');
});

// Закрытие меню при клике на ссылку (для удобства)
document.querySelectorAll('.nav-list a').forEach(link => {
    link.addEventListener('click', () => {
        nav.classList.remove('active');
    });
});

// Слайдер
const dots = document.querySelectorAll('.slider-dots .dot');
const slides = document.querySelectorAll('.slide');
const sliderWrapper = document.querySelector('.slider-wrapper');

if (slides.length > 0) {
    dots.forEach((dot, index) => {
        dot.addEventListener('click', () => {
            // Убираем активный класс у всех точек и слайдов
            dots.forEach(d => d.classList.remove('active'));
            slides.forEach(s => s.classList.remove('active'));

            // Добавляем активный класс текущим
            dot.classList.add('active');
            slides[index].classList.add('active');

            // Сдвигаем wrapper
            sliderWrapper.style.transform = `translateX(-${index * 100}%)`;
        });
    });
}

// Пагинация точками (просто демонстрация, без реальной подгрузки)
const pageDots = document.querySelectorAll('.pagination-dots .dot');
pageDots.forEach(dot => {
    dot.addEventListener('click', () => {
        pageDots.forEach(d => d.classList.remove('active'));
        dot.classList.add('active');
        // Здесь можно было бы загружать новые посты через AJAX
    });
});