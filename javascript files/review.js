const cards = document.querySelectorAll('.card');
let currentIndex = 0;

function showCard(index) {
    cards.forEach((card, i) => {
        card.style.display = i === index ? 'block' : 'none';
    });
}

showCard(currentIndex);

setInterval(() => {
    currentIndex = (currentIndex + 1) % cards.length;
    showCard(currentIndex);
}, 3000); // Change card every 3 seconds (adjust as needed)
