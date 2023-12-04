<?php 
/**
 * 	Template Name: service
 
 * 	Identique à page, mais avec une barre latérale
 */

get_header(); // Affiche header.php

if ( have_posts() ) : // Est-ce que nous avons des pages à afficher ? 
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	while ( have_posts() ) : the_post(); 
?>

<article>
    <?php if (!is_front_page()) : // Si nous ne sommes PAS sur la page d'accueil ?>
    <h2>

        <?php endif; ?>


</article>
<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;

?>






<section class="detail">

    <div class="  hero-a-propos ">
        <div class="row align-items-center">
            <div class=" col-12 text-lg-start">
                <div class="titre-a-propos ">
                    <?php
  $projects = new WP_Query('post_type= carte-service');
  while ($projects->have_posts()) : $projects->the_post(); 
?>

                    <h1 class="titre-a-propos col-sm-12 col-12"><?php the_title()?></h1>
                    <h3 class="texte-hero-a-propos col-12"> <?php the_content()?>
                    </h3>
                </div>
            </div>

        </div>

    </div>

</section>

<section class="rendez-vous">

    <div class="container rendez-vous__container d-flex">


        <div class="card rendez-vous__card col-lg-8 col-md-10 col-sm-12 justify-content-center  ">
            <div class="rendez-vous__body card-body ">


                <div class="row rendez-vous__row">





                    <h4 class="card-text rendez-vous__card-texte col-lg-7">PRENEZ RENDEZ-VOUS AVEC UN CONSEILLER DÈS
                        MAINTENANT!

                        Les rencontres se font en personne ou en ligne par visioconférence, selon votre préférence.
                        Service gratuit.

                        Pour toute question, contactez-nous</h4>



                    <button class="rendez-vous__bouton  col-lg-5">Prendre un rendez-vous
                    </button>
                </div>
            </div>
        </div>
    </div>

</section>

<section class="service">
    <h2 class="service__titre">Services offerts</h2>


    <!--Pour ecran large col-12 
    ------------------------------------------------->
    <div class="container service__container ">

        <div class="row row__service ">
            <!--Premier Service-->
            <div class="card  service__accueil autres d-none  m-2 col-sm-12 col-md-6 col-3 d-lg-block">
                <div class="card-body ">
                    <div class="row ">
                        <h3 class="card-title"><?php the_field("titre_sous_service_1")?></h3>

                    </div>
                    <p class="card-text"><?php the_field("texte_sous_service_1")?> </p>

                </div>
            </div>
            <!--Deuxième Service-->
            <div class="card service__accueil autres  m-2 col-sm-12 col-md-6 col-3 d-lg-block ">
                <div class="card-body ">
                    <h3 class="card-title">
                        <?php the_field("titre_sous_service_2")?></h3>

                    <p class="card-text"><?php the_field("texte_sous_service_2")?>

                    </p>

                </div>
            </div>

            <!--troisième Service-->
            <div class="card service__accueil autres  m-2 col-sm-12 col-md-6 col-3 d-lg-block d-lg-block  ">
                <div class="card-body ">
                    <h3 class="card-title"><?php the_field("titre_sous_service_3")?></h3>

                    <p class="card-text"><?php the_field("texte_sous_service_3")?>
                    </p>

                </div>
            </div>

            <!--quatrième service-->
            <div class="card  service__accueil autres m-2 col-sm-12 col-md-6 col-3 d-lg-block">
                <div class="card-body ">
                    <h3 class="card-title"><?php the_field("titre_sous_service_4")?></h3>

                    <p class="card-text"><?php the_field("texte_sous_service_4")?></p>

                </div>
            </div>


</section>
<section class="surplus">
    <div class="webserie-balado d-grid">
        <div class="web-serie col-12">
            <h2>Web série - Le parcours - Épisode 1</h2>
            <div class="video col-12">
                <iframe src="https://www.youtube.com/watch?v=lO-t5AyRoCg&t=3s" frameborder="0"></iframe>
            </div>
        </div>
        <div class="balado">
            <h2 class="col-12">Balado - Épisode 5 - Accueil et intégration</h2>
            <audio class="col-12" controls
                src="https://www.buzzsprout.com/1979567/10626818-service-d-accueil-et-integration.mp3?client_source=small_player&referrer=https%3A%2F%2Fwww.buzzsprout.com%2F1979567%2F10626818-accueil-et-integration.js%3Fcontainer_id%3Dbuzzsprout-player-10626818"></audio>

        </div>
    </div>
</section>

<?php   endwhile;
  wp_reset_postdata();
?>
<?php
get_sidebar(); // Affiche le contenu de sidebar.php
get_footer(); // Affiche footer.php 
?>