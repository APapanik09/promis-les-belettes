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
    <section class="hubNouvelles">
            <div class="hubNouvelleswrapup">
                <select class="news_hub_order">
                    <option value="recent">+ récent</option>
                    <option value="anciens">+ anciens</option>
                  </select>
                <div class="hubNouvelleswrapup__cardWrapup">

                    <!-- cartes inserer grace a main.js-->

                </div>

                <button class="plusnews btn">Voir plus de nouvelles</button>
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