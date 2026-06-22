const slides = document.querySelectorAll(".slide");

let currentSlide = 0;

setInterval(() => {
    const currentImg = slides[currentSlide].querySelector("img");

    slides[currentSlide].classList.remove("active");
    currentImg.style.animation = "none";

    currentSlide = (currentSlide + 1) % slides.length;

    const nextImg = slides[currentSlide].querySelector("img");

    nextImg.style.animation = "none";
    nextImg.offsetHeight; // reflow

    nextImg.style.animation = "zoomEffect 4s ease-out forwards";

    slides[currentSlide].classList.add("active");
}, 3000);
