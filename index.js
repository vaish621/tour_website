let slideIndex = 0;
function showSlides() {
    const slides = document.querySelectorAll('.slide');

    // Hide all slides
    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = 'none';
    }

    // Display the current slide
    slideIndex++;
    if (slideIndex > slides.length) {
        slideIndex = 1;
    }
    slides[slideIndex - 1].style.display = 'block';

    // Change slide every 2 seconds (2000 milliseconds)
    setTimeout(showSlides, 10000);
}

// Start the slideshow when the page loads
window.onload = showSlides;
