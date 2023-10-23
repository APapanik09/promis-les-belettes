gsap.registerPlugin(ScrollTrigger);
/*gsap.registerPlugin(MotionPathPlugin);
*/
const swiper = new Swiper(".swiper", {
  // Optional parameters
  direction: "horizontal",
  loop: true,

  // If we need pagination
  pagination: {
    el: ".swiper-pagination",
  },

  // Navigation arrows
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },

  // And if we need scrollbar
  scrollbar: {
    el: ".swiper-scrollbar",
  },
  breakpoints: {
    // when window width is >= 320px
    320: {
      slidesPerView: 1,
      spaceBetween: 10,
    },
    // when window width is >= 480px
    768: {
      slidesPerView: 3,
      spaceBetween: 10,
    },
    // when window width is >= 640px
  },
});
/* animation page histoire */
const promis = document.querySelector('.promis');
const creation = document.querySelector('.creation');
const MariaGoretti = document.querySelector('.MariaGoretti');
const enveloppe= document.querySelectorAll(".section-histoire ");


gsap.set(".section-histoire", {autoAlpha: 0});
gsap.timeline( { 
  x: '100%',
  scrollTrigger: {
    pin: true,
    scrub: true,
    start: 'top 15%',
    end: 'bottom 5%',
    trigger: '.timeline',

  },
})
.to('.promis', { x: '1300px', duration:2 },'<0.5')
.to('.creation',{ x: '1000px'},'<0.5')
.to('.MariaGoretti',{ x: '1000px'},'< 1')
.to('.section-histoire',{ autoAlpha: 1, })
