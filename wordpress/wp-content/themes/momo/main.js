/* Wow, tellement un beau spot pour écrire du JS */
const swiperCarrousel = new Swiper(".swiperAccueil", {
    // Optional parameters
    direction: "horizontal",
    loop: true,
    autoplay: {
        delay: 3500,
    },

    slidesPerView: 1,
    spaceBetween: 10,


    // And if we need scrollbar
    scrollbar: {
        el: ".swiper-scrollbar",
    },

});
const swiper = new Swiper(".swiperService", {
    // Optional parameters
    direction: "horizontal",
    loop: true,

    // If we need pagination
    pagination: {
        el: ".swiper-pagination",
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
        814: {
            slidesPerView: 1,
            spaceBetween: 20,
        },
        // when window width is >= 640px
    },
});

const swiperNouvelle = new Swiper(".swiperNouvelle", {
    // Optional parameters
    direction: "horizontal",
    loop: true,

    // If we need pagination
    pagination: {
        el: ".swiper-pagination",
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
            spaceBetween: 20,
        },
        // when window width is >= 640px
    },
});

const swiperP = new Swiper(".swiper-p", {
    // Optional parameters
    direction: "horizontal",
    loop: true,
    autoplay: {
        delay: 2500,
    },
});

/* banniere x cliquable*/


var quitter = document.querySelector(".quitter");
objectJavascript = document.getElementById('.banniere');
/*save_button.onclick = saveData;*/

/*function saveData() {
    var input = document.getElementById("saveServer");
    localStorage.setItem("server", input.value);
    var storedValue = localStorage.getItem("server");
}*/

let quitter = document.querySelector(".quitter");
let banniere = document.querySelector('.banniere');
if (quitter) {
    /* banniere x cliquable*/
    if (localStorage.getItem("quitter")) {


    } else {
        banniere.style.display = "block";
    }



    quitter.addEventListener("click", myFunction);

    function myFunction() {


        localStorage.setItem("quitter", "bouton");
        banniere.style.display = "none";
    }

}


gsap.registerPlugin(ScrollTrigger);

/* animation page histoire */
/* animation page histoire */
const promis = document.querySelector(".promis");
const creation = document.querySelector(".creation");
const MariaGoretti = document.querySelector(".MariaGoretti");
const enveloppe = document.querySelectorAll(".section-histoire ");
const temps = document.querySelector(".li")

gsap.set(".section-histoire", { autoAlpha: 0 });
/*gsap.set("li", { autoAlpha: 0 });*/

gsap
    .timeline({
        x: "100%",
        scrollTrigger: {
            pin: true,
            scrub: true,
            start: "top 15%",
            end: "bottom 5%",
            trigger: ".timeline",
        },
    })

.to(".promis", { x: "-200%", duration: 2 }, "<0.5")
    .to(".creation", { x: "-300%" }, "<0.5")
    .to(".MariaGoretti", { x: "-400%" }, "< 1")
    .to(".section-histoire", { autoAlpha: 1 });

/* fin animation page histoire */
gsap.registerPlugin(MotionPathPlugin);
/* animation Don */
let oiseau = document.querySelector(".oiseau");
let dollar = document.querySelector(".dollar");
let don = document.querySelector(".don__bouton");

/* animation motionpath */
gsap.set(".dollar", { autoAlpha: 0 });
/*gsap.set(".oiseau", { opacity: 0 });*/

gsap.to(".oiseau", {
    motionPath: {
        path: [
            { x: 0, y: 10 },
            { x: 180, y: 30 },
        ],
    },
    duration: 4,
    repeat: -1,
    yoyo: true,
    rotate: 20,
});

/* fin animation motion path */

/* animation au click don avce timeline*/

don.addEventListener("click", function() {
    gsap
        .timeline()
        .to(".oiseau", { display: "none" })
        .to(".dollar", { autoAlpha: 1, duration: 1 })
        .to(".dollar", {
            y: "-300%",
            rotate: 360,
            duration: 1,
            x: "200%",
            scale: 1.2,
        })
        .to(".dollar", { autoAlpha: 0, duration: 1 });
});
/* fin animation au click*/

// Timeline anim 404

//anim 404

gsap.timeline()
    .to('.oiseauquatre', { x: '-120vw', duration: 4 })
    .to('.oiseauquatre_deux', { x: '-120vw', duration: 4 }, )
    .to('.oiseauquatre_trois', { x: '-120vw', duration: 4 }, "<-1")
    .to('.oiseauquatre_quatre', { x: '-120vw', duration: 4 }, "<-2");


// Modal Equipe
$('#myModal').modal(options)