// Clone the first 5 cards and append them to the card container
const cardContainer = document.querySelector('slider');
const firstFiveCards = document.querySelectorAll('.box-1');

for (let i = 0; i < 5; i++) {
    cardContainer.appendChild(firstFiveCards[i].cloneNode(true));
}
