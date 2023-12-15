<?php 
/**
 * 	Template Name: News Hub
 * 	Identique à page, mais avec une barre latérale
 */

get_header(); // Affiche header.php

if ( have_posts() ) : // Est-ce que nous avons des pages à afficher ? 
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	while ( have_posts() ) : the_post(); 
?>

	<article>
		<?php if (!is_front_page()) : // Si nous ne sommes PAS sur la page d'accueil ?>

		<?php endif; ?>


        <section>
        <div class="hero-nouvelles ">
            <div class="row align-items-center">
                <div class=" col-12 text-lg-start">
                    <h1 class="titre-nouvelles col-12"><?php the_title()?></h1>
                    <h3 class="texte-hero-nouvelles"><?php the_content()?></h3>


                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- Fin Hero -->
    <!-- Début Cartes de nouvelles -->
    <section class="container-fluid">
                  <div class="container-fluid">
                  <div class="row flex-wrap justify-content-center">
                  <div class="col-lg-4 col-md-4 col-sm-12 justify-content-center">          
                    <select class="dropdown order news_hub_order justify-content-center text-align-center">
                    <option value="new">+ récent</option>
                    <option value="old">+ anciens</option>
                  </select>
                <div class="news_hub_group equipe justify-content-center d-flex flex-wrap">
                </div>
                <button class="plusnews btn">Voir plus de nouvelles</button>
            </div>
            </div>
            </div>
        </section>


		
	</article>

<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif; 
?>



<?php

get_footer(); // Affiche footer.php 
?>