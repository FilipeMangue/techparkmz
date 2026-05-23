window.addEventListener('load', () => {
    document.body.classList.add('loaded');
});

document.addEventListener('DOMContentLoaded', () => {
    const slider = document.querySelector('[data-slider]');

    if (!slider) return;

    const slides = Array.from(slider.querySelectorAll('.tp-slide'));
    const dots = Array.from(slider.querySelectorAll('[data-dot]'));
    const nextBtn = slider.querySelector('[data-next]');
    const prevBtn = slider.querySelector('[data-prev]');

    let current = 0;
    let timer = null;

    function showSlide(index) {
        current = (index + slides.length) % slides.length;

        slides.forEach((slide, i) => {
            slide.classList.toggle('active', i === current);
        });

        dots.forEach((dot, i) => {
            dot.classList.toggle('active', i === current);
        });
    }

    function nextSlide() {
        showSlide(current + 1);
    }

    function startAutoPlay() {
        timer = setInterval(nextSlide, 6500);
    }

    function resetAutoPlay() {
        clearInterval(timer);
        startAutoPlay();
    }

    nextBtn?.addEventListener('click', () => {
        nextSlide();
        resetAutoPlay();
    });

    prevBtn?.addEventListener('click', () => {
        showSlide(current - 1);
        resetAutoPlay();
    });

    dots.forEach((dot) => {
        dot.addEventListener('click', () => {
            showSlide(Number(dot.dataset.dot));
            resetAutoPlay();
        });
    });

    showSlide(0);
    startAutoPlay();
});