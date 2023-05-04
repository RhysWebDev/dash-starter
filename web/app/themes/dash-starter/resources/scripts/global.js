import Swiper from 'swiper/bundle';

const swiper = new Swiper('.swiper', {
  // Optional parameters
  direction: 'horizontal',
  loop: true,
  slidesPerView: 1, // 2 slides per view by default
  spaceBetween: 0,

  // Responsive breakpoints
  breakpoints: {
    // When window width is <= 768px (tablet)
    768: {
      slidesPerView: 1,
      spaceBetween: 10,
    },
    // When window width is > 768px (desktop)
    769: {
      slidesPerView: 4,
      spaceBetween: 60,
    },
  },
});

// Accordion
document.querySelectorAll('.faq__input').forEach((input) => {
  input.addEventListener('change', (event) => {
    const chevron = event.target.parentNode.querySelector('.faq__chevron');
    chevron.classList.toggle('rotate-180', event.target.checked);
  });
});

// Menu:
