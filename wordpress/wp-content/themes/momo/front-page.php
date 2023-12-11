<?php
get_header(); 
?>

<?php
if ( have_posts() ) : 
    while ( have_posts() ) : the_post(); ?>
<?php if (!is_front_page()) :  ?>
<h2>
    <?php the_title();  ?>
</h2>
<?php endif; ?>
<?php the_content();  ?>
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
                                <img class="image_evenement" src="media/evenement.png" alt="">
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
             $projects = new WP_Query('post_type=nouvelle');
                 while ($projects->have_posts()) : $projects->the_post(); 
                ?>
            <!--Accueil
              ---------------------------------------------------------->
            <div class="swiper-slide justify-content-centercard">

                <div class="card-1 carte-service col-10 col-md-11 col-lg-6  card__accueil ">


                    <div class="card-body ">
                        <div class="row ">
                            <a class="lien-titre" href="detail_service.html">
                                <h3 class="card-title col-12"><?php the_title()?></h3>
                            </a>

                        </div>
                        <a href="detail_service.html" class="lien">
                            <p class="card-text"><?php the_field("date")?></p>
                        </a>
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
    <!--Pour ecran large col-12 
    ------------------------------------------------->
    <div class="container service__container service_ordi">

        <div class="row row__service ">
            <?php
             $projects = new WP_Query('post_type=carte-service');
                 while ($projects->have_posts()) : $projects->the_post(); 
                ?>
            <div class="card  service__accueil d-none  m-2 col-3 d-lg-block">
                <div class="card-body ">
                    <div class="row ">
                        <h3 style="background-image('<?php the_post_thumbnail_url() ?>'" class="card-title accueil">
                            <?php the_title()?></h3>

                    </div>
                    <p class="card-text"><?php the_content()?></p>

                </div>
            </div>
            <?php
  endwhile; 
  wp_reset_postdata(); 
?>



        </div>

</section>

<!--Nouvelle
----------------------------------------->
 

    <!--Nouvelle
----------------------------------------->
<section class="nouvelle">
        <h2 class="nouvelle__titre">Nouvelles récentes</h2>
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
                        

                            <h3 itemprop="title" class="card-title col-12"><?php the_title()?> </h3>


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
                        src="media/temoignage.jpg" alt="">



                    <h3 class="card-text temoignage__card-texte col-lg-7"><?php the_content() ?></h3>



                    <h3 class="temoignage__citation temoignage__card-texte col-lg-7">- Céline, Norvège, Avis Booking
                    </h3>
                </div>
            </div>
        </div>
    </div>
    <?php
  endwhile; 
  wp_reset_postdata(); 
?>


</section>
<?php
get_footer(); 
?>
