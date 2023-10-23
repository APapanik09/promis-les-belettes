


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

gsap.registerPlugin(ScrollTrigger);
/* animation page histoire */
const promis = document.querySelector('.promis');
const creation = document.querySelector('.creation');
const MariaGoretti = document.querySelector('.MariaGoretti');
const enveloppe= document.querySelectorAll(".section-histoire ");


gsap.set(".section-histoire", {autoAlpha: 0});
gsap.set(".promis", {autoAlpha: 0});
gsap.set(".creation", {autoAlpha: 0});
gsap.set(".MariaGoretti", {autoAlpha:0});
gsap.timeline( { 
  x: '100%',
  scrollTrigger: {
    pin: true,
    scrub: true,
    start: 'top 5%',
    end: 'bottom 5%',
    trigger: '.timeline',

  },
})
.to('.promis', { autoAlpha: 1,x: '-200px', duration:10, delay:2, ease: 'linear'},'<0.5')
.to('.creation',{autoAlpha: 1, x: '-100px', duration:10, delay:3, ease: 'linear'},'>0.5')
.to('.MariaGoretti',{ autoAlpha: 1,x: '-50px', duration:10, delay:4, ease: 'linear'},'> 1')
.to('.promis', { autoAlpha: 0,x: '-200px', duration:6, delay:2, ease: 'linear' },'<0.5')
.to('.creation',{autoAlpha: 0, x: '-100px', duration:6, delay:3, ease: 'linear'},'<0.5')
.to('.MariaGoretti',{ autoAlpha: 0,x: '-50px', duration:6, delay:4, ease: 'linear'},'< 1')
.to('.section-histoire',{ autoAlpha: 1, y:'-50%', ease: 'linear', duration:6})

