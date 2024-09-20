// scripts.js

// Example: Smooth scrolling for internal links
// document.querySelectorAll('a[href^="#"]').forEach(anchor => {
//     anchor.addEventListener('click', function (e) {
//         e.preventDefault();
//         const target = document.querySelector(this.getAttribute('href'));
//         if(target){
//             target.scrollIntoView({
//                 behavior: 'smooth'
//             });
//         }
//     });
// });


// The JavaScript will handle the sliding of the cards when the user clicks the "Next" or "Previous" buttons.
document.addEventListener('DOMContentLoaded', () => {
    const slider = document.querySelector('.team-slider');
    const cardWidth = document.querySelector('.team-card').offsetWidth;
    const visibleCards = 3;
    let currentPosition = 0;

    document.getElementById('nextIcon').addEventListener('click', () => {
        if (currentPosition > -(slider.children.length - visibleCards) * cardWidth) {
            currentPosition -= cardWidth * visibleCards;
            slider.style.transform = `translateX(${currentPosition}px)`;
        }
    });

    document.getElementById('prevIcon').addEventListener('click', () => {
        if (currentPosition < 0) {
            currentPosition += cardWidth * visibleCards;
            slider.style.transform = `translateX(${currentPosition}px)`;
        }
    });
});


