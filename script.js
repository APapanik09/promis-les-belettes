
gsap.registerPlugin(MotionPathPlugin);
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
gsap.to('.no2', {
  transformOrigin: '50% 50%',
  path:svg-path,
  motionPath: {
    start:1,
    end:0
  },
  duration: 8,
  repeat: -1,
  yoyo: true,
})