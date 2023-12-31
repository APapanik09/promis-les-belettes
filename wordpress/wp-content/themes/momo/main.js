// Hub de nouvelles FETCH API

let btnPlusNews = document.querySelector(".plusnews");
if (document.querySelector("body").classList[1] == "page-template-news-hub") {

    let cardBox;
    let startCard = 0;
    let newsOrder = document.querySelector(".news_hub_order");
    let newsGroup = document.querySelector(".news_hub_group");

    newsOrder.addEventListener("change", function () {
        cardBox = "";
        startCard = 0;

        for(let i = 0; i<btnPlusNews.classList.length;i++){
            if(btnPlusNews.classList[i] == "disappear"){
                btnPlusNews.classList.remove(btnPlusNews.classList[i]);
            }
        }
// If + fetch API pour faire l'ordre de nouvelles old et new

        if (newsOrder.value == "new") {
            console.log("nouvelles récentes");
            fetch("http://localhost/promis-les-belettes/wordpress/wp-json/wp/v2/nouvelle?orderby=date&order=desc")
                .then(response => response.json())
                .then(data => {
                    console.log(data);
                    for (let i = startCard; i < 6; i++) {

                        cardBox = cardBox + `<div class="card">
            <img src="https://wallpapers.com/images/hd/sleeping-cat-pictures-45sdgf4acdtd8gdo.jpg" class="card-img-top"
                alt="image de la nouvelle 1">
            <div class="card-body">
                <h4 class="card-title">${data[i].title.rendered}</h4>
                <a href="${data[i].link}">
                <h5 class="card-text"><small class="text-muted">En savoir plus ></small></h5>
                </a>
            </div>
        </div>`;

                        startCard++;

                    }
                    newsGroup.innerHTML = cardBox;
                });
        }

        else if (newsOrder.value == "old") {
            fetch("http://localhost/promis-les-belettes/wordpress/wp-json/wp/v2/nouvelle?orderby=date&order=asc")
                .then(response => response.json())
                .then(data => {
                    for (let i = startCard; i < 6; i++) {

                        cardBox = cardBox + `<div class="card">
            <img src="https://wallpapers.com/images/hd/sleeping-cat-pictures-45sdgf4acdtd8gdo.jpg" class="card-img-top"
                alt="image de la nouvelle 1">
            <div class="card-body">
                <h4 class="card-title">${data[i].title.rendered}</h4>
                <a href="${data[i].link}">
                <h5 class="card-text"><small class="text-muted">En savoir plus ></small></h5>
                </a>
            </div>
        </div>`;
                        startCard++;
                    }

                    newsGroup.innerHTML = cardBox;
                });
        }

    })


// "bootup" initial de la page hub de nouvelles pour les utilisateurs
    function bootHub() {
        cardBox = "";
        if (newsOrder.value == "new") {
            fetch("http://localhost/promis-les-belettes/wordpress/wp-json/wp/v2/nouvelle?orderby=date&order=desc")
                .then(response => response.json())
                .then(data => {
                    console.log(data);
                    for (let i = startCard; i < 6; i++) {
                        cardBox = cardBox + `<div class="card">
            <img src="https://wallpapers.com/images/hd/sleeping-cat-pictures-45sdgf4acdtd8gdo.jpg" class="card-img-top"
                alt="image de la nouvelle 1">
            <div class="card-body">
                <h4 class="card-title">${data[i].title.rendered}</h4>
                <a href="${data[i].link}">
                <h5 class="card-text"><small class="text-muted">En savoir plus ></small></h5>
                </a>
            </div>
        </div>`;
                        startCard++;
                    }
                    newsGroup.innerHTML = cardBox;
                });
        }
        else if (newsOrder.value == "old") {
            fetch("http://localhost/promis-les-belettes/wordpress/wp-json/wp/v2/nouvelle?orderby=date&order=asc")
                .then(response => response.json())
                .then(data => {
                    console.log(data);
                    for (let i = startCard; i < 6; i++) {

                        cardBox = cardBox + `<div class="card">
            <img src="https://wallpapers.com/images/hd/sleeping-cat-pictures-45sdgf4acdtd8gdo.jpg" class="card-img-top"
                alt="image de la nouvelle 1">
            <div class="card-body">
                <h4 class="card-title">${data[i].title.rendered}</h4>
                <a href="${data[i].link}">
                <h5 class="card-text"><small class="text-muted">En savoir plus ></small></h5>
                </a>
            </div>
        </div>`;
                        startCard++;

                    }
                    newsGroup.innerHTML = cardBox;
                });
        }
    }

// Btn "Voir plus de nouvelles"
    btnPlusNews.addEventListener("click", function () {

        let maxCard = startCard;

        if (newsOrder.value == "new") {
            fetch("http://localhost/promis-les-belettes/wordpress/wp-json/wp/v2/nouvelle?orderby=date&order=desc")
                .then(response => response.json())
                .then(data => {

  if (data.length - 6 > startCard) {
    for (let i = startCard; i < 6; i++) {

        cardBox = cardBox + `<div class="card">
<img src="https://images.axios.com/XpQ_Vg7_EzUH1kmHRwHjc07m3D4=/360x0:1440x1080/1920x1920/2023/11/06/1699311078538.jpg" class="card-img-top"
    alt="image de la nouvelle 1">
<div class="card-body">
    <h4 class="card-title">${data[i].title.rendered}</h4>
    <a href="${data[i].link}">
    <h5 class="card-text"><small class="text-muted">En savoir plus ></small></h5>
    </a>
</div>
</div>`;
        startCard++;
    }
}
else {
    for (let i = startCard; i < data.length; i++) {
        maxCard++;
    };
    for (let i = startCard; i < maxCard; i++) {
        cardBox = cardBox + `<div class="card">
<img src="https://images.axios.com/XpQ_Vg7_EzUH1kmHRwHjc07m3D4=/360x0:1440x1080/1920x1920/2023/11/06/1699311078538.jpg" class="card-img-top"
alt="image de la nouvelle 1">
<div class="card-body">
<h4 class="card-title">${data[i].title.rendered}</h4>
<a href="${data[i].link}">
<h5 class="card-text"><small class="text-muted">En savoir plus ></small></h5>
</a>
</div>
</div>`;
        startCard++;


    }
// Enleve bouton avec une détection de class (coder plus haut)
    btnPlusNews.classList.add("disappear");
}

newsGroup.innerHTML = cardBox;

                });
        }

        else if (newsOrder.value == "old") {
            fetch("http://localhost/promis-les-belettes/wordpress/wp-json/wp/v2/nouvelle?orderby=date&order=asc")
                .then(response => response.json())
                .then(data => {

                    if (data.length - 6 > startCard) {
                        for (let i = startCard; i < 6; i++) {

                            cardBox = cardBox + `<div class="card">
                    <img src="https://images.axios.com/XpQ_Vg7_EzUH1kmHRwHjc07m3D4=/360x0:1440x1080/1920x1920/2023/11/06/1699311078538.jpg" class="card-img-top"
                        alt="image de la nouvelle 1">
                    <div class="card-body">
                        <h4 class="card-title">${data[i].title.rendered}</h4>
                        <a href="${data[i].link}">
                        <h5 class="card-text"><small class="text-muted">En savoir plus ></small></h5>
                        </a>
                    </div>
                </div>`;
                            startCard++;
                        }
                    }
                    else {
                        for (let i = startCard; i < data.length; i++) {
                            maxCard++;
                        };
                        for (let i = startCard; i < maxCard; i++) {
                            cardBox = cardBox + `<div class="card">
                <img src="https://images.axios.com/XpQ_Vg7_EzUH1kmHRwHjc07m3D4=/360x0:1440x1080/1920x1920/2023/11/06/1699311078538.jpg" class="card-img-top"
                    alt="image de la nouvelle 1">
                <div class="card-body">
                    <h4 class="card-title">${data[i].title.rendered}</h4>
                    <a href="${data[i].link}">
                    <h5 class="card-text"><small class="text-muted">En savoir plus ></small></h5>
                    </a>
                </div>
            </div>`;
                            startCard++;

                        }

                        btnPlusNews.classList.add("disappear");
                    }
                    newsGroup.innerHTML = cardBox;
                });
        }
    })
    // appelle la fonction
    bootHub();
}

/* Swipper carrouselle de l'héro de l'accueil
****************************************************/
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
/* Swipper des services
****************************************************/
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
/* Swipper des nouvelles
****************************************************/
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

/* animation du don*/
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

if (don != undefined) {
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
    })
};
/* fin animation au click*/

// Timeline anim 404

//anim 404




gsap.timeline()
    .to('.oiseauquatre', { x: '-120vw', duration: 4 })
    .to('.oiseauquatre_deux', { x: '-120vw', duration: 4 }, )
    .to('.oiseauquatre_trois', { x: '-120vw', duration: 4 }, "<-1")
    .to('.oiseauquatre_quatre', { x: '-120vw', duration: 4 }, "<-2");


    
