var swiper = new Swiper(".slider-characters", {
  slidesPerView: 3.5,
  spaceBetween: 19,
  freeMode: true,
  breakpoints:{
    320:{
      slidesPerView: 1.1,
    },
    768:{
      slidesPerView: 2.2,
    },
    991:{
      slidesPerView: 2.8,
    },
    1200:{
      slidesPerView: 3.5,
    },
  }
});

// AOS EFFECTS
AOS.init({
  duration: 1000,
  once: true,
})



// modal player
const modalBtn = document.querySelector('.modal-btn')
const modal = document.querySelector('.modal-overlay')
const closeBtn = document.querySelector('.close-btn')

modalBtn.addEventListener('click', () => {
  modal.classList.add('open-modal');
});

closeBtn.addEventListener('click', () => {
  modal.classList.remove('open-modal');
});