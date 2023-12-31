<?php 
/**
 * 	Template Name: Services Hub tt
 * Template Post Type: page
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

                <a class="card-1 carte-service col-10 col-md-11 col-lg-6  card__accueil "
                    href="<?php the_permalink()?>">


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
            <a class="card  service__accueil d-none  m-2 col-3 d-lg-block" href="<?php the_permalink()?>">
                <div class="card-body ">
                    <div class="row ">
                        <h3 class="card-title accueil"><?php the_title()?></h3>

                    </div>
                    <style>
  p {
    color:white ;
  }
</style>
                    <p class="card-text"><?php the_content()?></p>

                </div>
            </a>
            <?php
  endwhile; 
  wp_reset_postdata(); 
?>



        </div>

</section>



<?php

get_footer(); // Affiche footer.php 
?>