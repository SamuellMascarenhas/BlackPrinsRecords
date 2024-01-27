let currentSlide = 0;
const slides = document.querySelectorAll('.slide');
const totalSlides = slides.length;

function changeSlide(n) {
    currentSlide += n;
    if (currentSlide < 0) {
        currentSlide = totalSlides - 1;
    } else if (currentSlide >= totalSlides) {
        currentSlide = 0;
    }
    updateSlide();
}

function updateSlide() {
    slides.forEach((slide, index) => {
        slide.style.transform = `translateX(-${100 * currentSlide}%)`;
    });
}

updateSlide();
