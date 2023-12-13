<?php
get_header();
?>
 
<?php
if ( have_posts() ) :
    while ( have_posts() ) : the_post(); ?>
<?php if (!is_front_page()) :  ?>

<?php endif; ?>

<?php endwhile; ?>
 
<?php
else :
    get_template_part( 'partials/404' );
endif;
?>
 
 
<section class="hero d-flex">
    <!-- Slider main container -->
    <div class="swiper swiperAccueil">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide">
                <div class="container-fluid  hero__accueil">
                    <div class="row d-flex">
                        <?php
  $projects = new WP_Query('post_type=accueil-hero');
  while ($projects->have_posts()) : $projects->the_post();
?>
                        <h1 class="hero__titre col-10 justify-content-center#">
                            <?php the_title()?>
                        </h1>
                        <h2 class="hero__question col-12 d-none  d-md-block"> <?php the_field("question")?></h2>
                        <h3 class="hero__option col-12 d-none d-md-block">
                            <?php the_content()?>
                        </h3>
                        <div class="row row__hero hero__button justify-content-center">
                            <button type="button" class="btn-1 col-lg-8 d-none d-md-block">
                                <h5><?php the_field("choix_1")?></h5>
                            </button>
                            <button type="button" class="btn-2  col-lg-8 d-none d-md-block ">
                                <h5><?php the_field("choix_2")?></h5>
                            </button>
                            <button type="button" class="btn-3  col-lg-8 d-none d-md-block">
                                <h5><?php the_field("choix_3")?></h5>
                            </button>
                            <button type="button" class="btn-4  col-lg-8 d-none d-md-block">
                                <h5><?php the_field("choix_4")?></h5>
                            </button>
                            <button type="button" class="btn-5  col-lg-8 d-none d-md-block">
                                <h5><?php the_field("choix_5")?></h5>
                            </button>
                            <button type="button" class="btn-6  col-lg-8 d-none d-md-block ">
                                <h5><?php the_field("choix_6")?></h5>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <section class="rendez-vous__accueil">
 
                    <div class="container rendez-vous__accueil--container d-flex">
 
 
                        <div class=" rendez-vous__accueil--card col-lg-8 col-md-10 col-sm-12 justify-content-center  ">
                            <div class="rendez-vous__accueil--body card-body ">
 
 
                                <div class="row rendez-vous__accueil--row">
 
 
 
 
 
                                    <h2 class="card-text rendez-vous__accueil--card-texte ">PRENEZ RENDEZ-VOUS AVEC UN
                                        CONSEILLER DÈS MAINTENANT!
                                    </h2>
 
                                    <h4>Les rencontres se font en personne ou en ligne par visioconférence, selon votre
                                        préférence. Service gratuit.</h4>
 
                                    <h5>Pour toute question, contactez-nous</h5>
 
 
 
                                    <button class="rendez-vous__accueil--bouton  col-lg-5 justify-content-center">
                                        <h4><?php the_field("bouton_rendez-vous")?></h4>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
 
                </section>
            </div>
            <div class="swiper-slide evenement">
                <div class="container-fluid  ">
                    <div class="card evenement__card">
                        <div class="row">
                        
                            <div class="  col-12 col-md-12 col-lg-6">
                                <img class="image_evenement" src="<?php the_post_thumbnail_url("medium") ?>" alt="">
                            </div>
                       
 
                            <div class="col-12 col-md-12 col-lg-6 d-flex">
                                <div class="evenement__card-body d-none d-md-block d-lg-block card-body">
                                    <h3>Séance d'information sur les cours de français - Français et Anglais</h3>
 
 
                                    <h4 class="evenement__calendrier"><?php the_field("quand")?></h4>
 
                                    <h4 class="evenement__heure"><?php the_field("heure")?></h4>
 
                                    <h4 class="evenement__prix"><?php the_field("prix")?></h4>
 
                                    <h4 class="evenement__lieu"><?php the_field("lieu")?></h4>
 
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
  endwhile;
  wp_reset_postdata();
?>
                </div>
 
            </div>
 
        </div>
        <!-- If we need scrollbar -->
        <div class="swiper-scrollbar"></div>
 
    </div>
</section>
 
 
 
<section class="service">
    <h2 class="service__titre">Services offerts</h2>
    <!-- Swipper service -->
    <div class="swiper swiperService d-lg-none">
        <div class="swiper-wrapper ">
            <!-- Slides -->
            <?php
             $projects = new WP_Query('post_type=carte-service');
                 while ($projects->have_posts()) : $projects->the_post();
                ?>
            <!--Accueil
              ---------------------------------------------------------->
            <div class="swiper-slide justify-content-centercard">
 
                <a  href="<?php the_permalink()?>" class="card-1 carte-service col-10 col-md-11 col-lg-6  card__accueil ">
 
                    <div class="card-body ">
                        <div class="row ">
                         
                                <h3 class="card-title col-12"><?php the_title()?></h3>
                         
 
                        </div>
              
                            <p class="card-text"><?php the_content()?></p>
                       
                    </div>
 
</a>
            </div>
 
 
 
 
 
            <?php
  endwhile;
  wp_reset_postdata();
?>
 
 
        </div>
 
 
        <!-- scrollbar -->
        <div class="swiper-scrollbar"></div>
    </div>
    <!--Pour ecran large col-12
    ------------------------------------------------->
    <div class="container service__container service_ordi">
 
        <div class="row row__service ">
            <?php
             $projects = new WP_Query('post_type=carte-service');
                 while ($projects->have_posts()) : $projects->the_post();
                ?>
            <a class="card  service__accueil d-none  m-2 col-3 d-lg-block"  href="<?php the_permalink()?>">
                <div class="card-body ">
                    <div class="row ">
                        <h3 class="card-title accueil"><?php the_title()?></h3>
 
                    </div>
                    <p class="card-text"><?php the_content()?></p>
 
                </div>
</a>
            <?php
  endwhile;
  wp_reset_postdata();
?>
 
 
 
        </div>
 
</section>
 
<!--Nouvelle

----------------------------------------->
<section class="nouvelle">
        <h2 class="nouvelle__titre"><?php the_field("") ?></h2>
        <!-- Swipper service 
-------------------------------------->
        <div class="swiper swiperNouvelle">

            <div class="swiper-wrapper ">
                <!-- Slides -->
                <?php
                $projects = new WP_Query('post_type=nouvelle');
  while ($projects->have_posts()) : $projects->the_post(); 
?>
                <!--Déménagement 
          ---------------------------------------------------------->
                <div itemscope itemtype="https://schema.org/Article" class="swiper-slide justify-content-centercard ">
                    <div class="nouvelle__demenagement card-1 col-10 col-md-11 col-lg-6  ">
                    <div style="background-image:url('<?php the_post_thumbnail_url("medium") ?>')" >

                        <div class="nouvelle card-body ">
                        

                          <a href="<?php the_permalink()?>">  <h3 itemprop="title" class="card-title col-12"><?php the_title()?> </h3></a>


                            <h5 itemprop="datePublished" class="card-text"><?php the_field("date")?></h5>

                        </div>
                    </div>
                </div>
                </div>
            <?php
  endwhile;
  wp_reset_postdata();
?>
 
 
        </div>
 
        <!-- scrollbar -->
        <div class="swiper-scrollbar"></div>
 
    </div>
 
    <a href="hub_nouvelle.html" class="d-flex"> <button class="btn-nouvelle justify-content-center">
            <h4>Voir toute les
                nouvelles</h4>
        </button></a>
    <!--Pour ecran large col-12
    ------------------------------------------------->
</section>
<section class="temoignage">
    <?php
  $projects = new WP_Query('post_type=temoignage');
  while ($projects->have_posts()) : $projects->the_post();
?>
    <h2 class="temoignage__titre "><?php the_title() ?></h2>
    <div class="container temoignage__container d-flex">
 
 
        <div class="card temoignage__card col-12 col-md-11 col-sm-12 justify-content-center  ">
            <div class="temoignage__body card-body ">
 
 
                <div class="row d-flex">
 
                    <img class="card-image-top temoignage__image justify-content-center col-lg-3 col-md-11 col-sm-5"
                        src="<?php the_post_thumbnail_url("medium") ?>" >

 

 
                    <h5 class="card-text temoignage__card-texte col-lg-7"><?php the_content() ?></h5>
 
 
 
                    <h3 class="temoignage__citation temoignage__card-texte col-lg-7">- Céline, Norvège, Avis Booking
                    </h3>
                </div>
            </div>
        </div>
    </div>
    <section class="don">
        <div class="container don__container d-flex">
            <div class="card don__card col-lg-5 col-md-8 col-sm-11 justify-content-center  ">
                <div class="don__body card-body ">
 
 
                    <div class="row">
 
 
 
 
                        <h4 class="card-text don__card-text justify-content-center">Faites un don pour nous aider à changer la vie de ses familles </h4>
 
 
 
 
                        <div class="anim">
                            <div class="oiseau-trace">
 
                                <svg class="oiseau" xmlns="http://www.w3.org/2000/svg" version="1.0" width="50.000pt" height="52.000000pt" viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet">
                                    <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)"
                                        fill="#FC9478" stroke="none">
                                        <path id="courbe"
                                            d="M1494 5086 l-34 -34 0 -328 c0 -442 16 -608 81 -863 16 -63 28 -115 27 -116 -2 -2 -51 -13 -109 -24 -237 -48 -309 -53 -854 -58 -342 -2 -530 -8 -548 -15 -31 -12 -57 -54 -57 -91 0 -27 607 -1007 696 -1124 218 -286 570 -496 918 -549 56 -9 117 -19 137 -22 l37 -7 -494 -559 c-292 -330 -503 -578 -516 -605 -30 -61 -33 -197 -5 -252 46 -93 69 -109 395 -269 174 -86 330 -157 360 -163 108 -23 231 30 296 128 18 28 116 247 217 487 l184 438 398 0 c219 0 441 5 495 10 230 25 469 105 657 220 331 203 589 531 686 875 48 167 52 212 58 650 6 402 7 422 27 466 28 60 93 125 153 152 39 18 69 22 191 25 80 1 158 8 173 14 30 12 57 54 57 88 0 28 -280 585 -325 645 -157 213 -447 306 -695 224 -151 -49 -207 -94 -415 -328 -98 -111 -180 -201 -183 -201 -2 0 -33 28 -67 63 -98 97 -160 125 -511 226 -170 49 -331 98 -359 109 -331 131 -640 385 -885 725 -78 108 -125 124 -186 63z m471 -661 c132 -107 263 -191 399 -256 133 -63 231 -96 561 -189 121 -34 239 -71 263 -82 50 -24 130 -94 154 -135 l17 -30 -130 -146 c-72 -81 -133 -147 -136 -147 -3 0 -109 63 -236 139 -271 162 -343 200 -452 234 -190 60 -419 60 -594 2 -25 -8 -45 -14 -47 -12 -7 8 -46 168 -63 262 -29 151 -41 301 -41 492 l0 162 108 -111 c59 -60 148 -143 197 -183z m2430 -180 c160 -42 226 -111 364 -384 l102 -201 -48 0 c-164 0 -355 -117 -428 -260 -60 -119 -58 -101 -65 -565 -5 -356 -9 -444 -24 -510 -123 -562 -597 -985 -1181 -1054 -51 -6 -285 -11 -545 -11 -468 0 -535 -4 -650 -42 -166 -53 -338 -201 -418 -356 -23 -46 -42 -92 -42 -102 0 -35 22 -69 55 -85 68 -32 100 -14 155 83 59 104 155 199 243 241 38 18 71 30 74 27 9 -8 -316 -769 -339 -793 -48 -52 -63 -47 -382 110 -183 90 -298 153 -305 165 -21 39 -13 87 21 131 18 23 267 306 553 630 l520 589 55 6 c102 11 265 45 345 71 175 57 394 186 523 307 95 89 105 127 48 184 -57 57 -87 49 -201 -54 -158 -142 -378 -248 -600 -290 -128 -24 -485 -24 -606 1 -339 68 -633 267 -824 555 -37 56 -65 105 -63 108 3 2 35 -7 71 -21 338 -127 751 -126 1109 1 111 40 285 133 319 171 40 46 39 85 -5 129 -45 45 -75 44 -161 -7 -228 -134 -483 -196 -760 -186 -230 9 -347 40 -699 184 l-67 28 -128 205 -128 205 416 6 c544 8 707 28 1076 134 88 25 187 50 220 55 131 21 272 5 410 -49 39 -15 263 -143 499 -284 305 -183 437 -257 458 -257 21 0 41 11 64 34 64 64 39 121 -86 195 l-71 42 109 122 c59 67 218 246 351 397 269 304 284 319 356 357 98 52 206 65 310 38z" />
                                        <path id="courbe"
                                            d="M4384 4050 c-32 -13 -64 -59 -64 -91 0 -40 46 -88 91 -95 31 -5 42 -1 70 24 28 25 34 37 34 72 0 35 -6 47 -33 71 -33 29 -60 35 -98 19z" />
                                        <path id="courbe"
                                            d="M3924 2650 c-44 -18 -61 -54 -67 -147 -23 -321 -215 -608 -502 -749 -105 -51 -212 -80 -345 -93 -88 -8 -96 -11 -122 -40 -37 -41 -37 -81 1 -123 29 -33 30 -33 118 -32 428 3 846 312 989 732 39 115 67 276 61 351 -3 46 -9 59 -36 83 -32 28 -59 34 -97 18z" />
                                        <path id="courbe"
                                            d="M2524 1650 c-32 -13 -64 -59 -64 -91 0 -40 46 -88 91 -95 31 -5 42 -1 70 24 28 25 34 37 34 72 0 35 -6 47 -33 71 -33 29 -60 35 -98 19z" />
                                    </g>
                                </svg>
                            </div>
                            <svg class="dollar" xmlns="http://www.w3.org/2000/svg" version="1.0" width="30.pt" height="30.000000pt" viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet">
 
                                <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" fill="white"
                                    stroke="none">
                                    <path
                                        d="M2370 5114 c-19 -2 -78 -9 -130 -15 -791 -90 -1522 -586 -1924 -1305 -146 -262 -252 -588 -297 -914 -18 -125 -18 -515 0 -640 105 -762 511 -1409 1146 -1826 840 -552 1956 -550 2797 4 1266 835 1539 2571 591 3747 -409 507 -974 829 -1633 930 -100 15 -472 28 -550 19z m545 -343 c628 -106 1158 -448 1511 -977 179 -267 296 -573 351 -909 24 -153 24 -497 0 -650 -108 -668 -474 -1222 -1042 -1580 -243 -153 -537 -261 -850 -312 -154 -24 -497 -24 -650 1 -658 107 -1197 455 -1557 1006 -168 257 -281 557 -335 885 -24 153 -24 497 0 650 81 497 291 912 636 1255 382 381 862 605 1401 654 108 10 418 -4 535 -23z" />
                                    <path
                                        d="M2495 4146 c-74 -34 -95 -83 -95 -221 l0 -103 -67 -21 c-89 -27 -180 -82 -263 -158 -243 -225 -299 -597 -133 -883 21 -36 74 -101 118 -145 139 -139 270 -197 487 -214 109 -9 130 -14 194 -45 86 -43 144 -103 187 -194 29 -61 32 -76 32 -162 0 -86 -3 -101 -32 -162 -44 -93 -100 -151 -191 -196 -72 -35 -81 -37 -171 -37 -87 0 -102 3 -161 31 -142 68 -222 182 -239 343 -10 88 -24 117 -75 155 -20 16 -42 21 -86 21 -63 0 -95 -16 -133 -67 -59 -79 -12 -322 94 -484 81 -125 235 -244 371 -285 l66 -20 4 -119 c3 -128 11 -149 72 -194 39 -29 133 -29 172 0 61 45 69 66 72 192 l4 117 78 28 c302 107 499 408 477 728 -13 177 -81 323 -212 454 -139 139 -270 197 -487 214 -109 9 -130 14 -194 45 -86 43 -144 103 -187 194 -29 61 -32 76 -32 163 0 90 2 99 37 171 45 91 103 147 196 191 61 29 76 32 162 32 86 0 101 -3 162 -32 139 -66 220 -182 237 -342 10 -88 24 -117 75 -155 39 -29 133 -29 172 0 69 51 85 112 64 242 -43 266 -234 494 -482 574 l-66 21 -4 118 c-3 127 -11 148 -70 192 -34 25 -113 32 -153 13z" />
                                </g>
                            </svg>
 
 
 
 
 
                        </div>
                       <a href="https://www.canadahelps.org/fr/organismesdebienfaisance/promis/">  <button class="don__bouton col-5 justify-content-center">Faire la différence</button></a>

                    </div>
                </div>
            </div>
        </div>
 
    </section>
    <?php
  endwhile;
  wp_reset_postdata();
?>
 
 
</section>
<?php
get_footer();
?>