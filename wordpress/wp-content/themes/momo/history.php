<?php 
/**
 * 	Template Name: Histoire
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
		
		<?php the_content(); // Contenu principal de la page ?>
	</article>
<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;
?>
	<?php
  $projects = new WP_Query('post_type= histoire');
  while ($projects->have_posts()) : $projects->the_post(); 
?>
  
                    
	<section>
        <div class="hero-histoire ">
            <div class="row align-items-center">
                <div class=" col-12 text-lg-start">
                    <div class="titre-histoire">
                        <h1 class="titre-histoire col-12" > <?php the_title() ?> </h1>

                        <h3 class="texte-hero-histoire col-12" ><?php the_content() ?>
                        </h3> 
                    </div>
                </div>

            </div>

        </div>

    </section>

    <!--fin section hero histoire-->
    <!--debut ligne du temps-->
    <section class="timeline ">
        <div class="container timeline col-12">
            <div class="row">
                <ol>
                    <li>
                        <div class="promis col-sm-12 col-xl-12">
                            <time> <?php the_field("date_1") ?></time> <?php the_field("texte_date_1") ?>
                            <div class="petitBoutonOrange"></div>
                        </div>
                    </li>
                    <li>
                        <div class="creation col-sm-12 col-xl-12">
                            <time> <?php the_field("date_2") ?></time> <?php the_field("texte_date_2") ?>
                            <div class="petitBoutonOrange"></div>

                        </div>
                    </li>
                    <li>
                        <div class="MariaGoretti col-sm-12 col-xl-12">
                            <time><?php the_field("date_3") ?></time> <?php the_field("texte_date_3") ?>
                            <div class="petitBoutonOrange"></div>

                        </div>
                    </li>
                </ol>


            </div>
        </div>
        </div>
    </section>
    <!-- Debut Section Histoire-->
    <section class="section-histoire d-flex ">
        <div class="enveloppe histoire align-items-center justify-content-center">
            <div class="container paragraphe-histoire">
                <div class="row enveloppe">
                    <h2 class="histoire col-sm-12  col-xl-12 "><?php the_field("histoire") ?></h2>
                    <h4 class="histoire__texte col-sm-12 col-xl-12 text-align-center"><?php the_field("texte_histoire") ?></h4>
                    <h2 class="histoire__Mg   col-sm-12  col-xl-12  text-align-center" <?php the_field("residence") ?>></h2>
                    <h4 class="texte-histoire col-sm-12  col-xl-12 text-align-center"><?php the_field("residence_texte") ?></h4>

                    <iframe width="100%" height="315" src="https://www.youtube.com/watch?v=zX2FYvXTcPY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
						
                </div>
            </div>
        </div>
    </section>
	<?php   endwhile;
  wp_reset_postdata();
?>

<?php
get_footer(); // Affiche footer.php 
?>