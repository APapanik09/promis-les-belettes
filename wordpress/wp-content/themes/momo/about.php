<?php 
/**
 * 	Template Name: À propos
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
				<?php the_title(); // Titre de la page ?>
			</h2>
		<?php endif; ?>
		
		<?php the_content(); // Contenu principal de la page ?>
	</article>
<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;
?>


<?php
  $projects = new WP_Query('post_type= a-propos');
  while ($projects->have_posts()) : $projects->the_post(); 
?>
 <section>
        <div class="  hero-a-propos ">
            <div class="row align-items-center">
                <div class=" col-12 text-lg-start">
                    <div class="titre-a-propos ">
                        <h1 class="titre-a-propos col-12">À propos</h1>
                        <h3 class="texte-hero-a-propos col-12">PROMIS vient en aide aux immigrants et aux réfugiés ainsi
                            qu'à leurs familles, dans leurs démarches d'intégration culturelle, sociale et
                            professionnelle.
                        </h3>
                    </div>
                </div>

            </div>

        </div>
	<?php   endwhile;
  wp_reset_postdata();
?>
    </section>
	<?php
  $projects = new WP_Query('post_type= a-propos');
  while ($projects->have_posts()) : $projects->the_post(); 
?>
    <section class="section-a-propos">
        <div class="enveloppe a-propos">
            <div class=" container paragraphe-a-propos__titre">
                <div class="row enveloppe">

                    <h1 class="paragraphe-a-propos  col-12 "> <?php the_title()?></h1>
                </div>
            </div>

            <div class="tout-sous-meme-toi container-fluid">
                <div class="row">
                    <h4 class="tout-sous-meme-toi col-12"><?php the_content()?></li>
                            <li>Aide à l'emploi</li>
                            <li>Régionalisation </li>
                            <li>Soutien scolaire</li>
                            <li> Soutien aux familles</li>
                            <li>Action alimentaire</li>
                            <li> Hébergement</li>

                        </ul>
                    </h4>

                    <h4 class="tout-sous-meme-toi info  col-sm-12 col-xl-12 "> <?php the_field("autre_texte")?>
                     
                    </h4>
                    <div class="MISSION">

                        <h2 class="mission "><?php the_field("mission")?></h2>
                        <h5 class="mission__text col-sm-12 col-xl-12"><?php the_field("mission_texte")?>
                        </h5>

                    </div>
                    <div class="VISION">
                        <h2 class="Vision "><?php the_field("vision")?></h2>
                        <h5 class='col-sm-12 col-xl-12'><?php the_field("vision_texte")?></h5>
                    </div>

                    <h2 class="valeurs "><?php the_field("valeur")?></h2>


                    <div class="EXELLENCE">
                        <h3 class=" excellence "><?php the_field("exellence")?></h3>
                        <h5 class=" excellence excellence__text col-sm-8 col-xl-12"><?php the_field("exellence_texte")?>
                        </h5>
                    </div>
                    <div class="INNOVATION">
                        <h3 class="innovation"><?php the_field("innovation")?></h3>
                        <h5 class=" innovation innovation__text col-sm-8 col-xl-12"><?php the_field("innovation_texte")?>
                       
                        </h5>
                    </div>
                    <div class="RESPECT">
                        <h3 class=" respect"><?php the_field("respect")?></h3>
                        <h5 class="respect respect__text col-sm-8 col-xl-12"><?php the_field("respect_texte")?>
                           </h5>
                    </div>
                    <div class="ENGAGEMENT"></div>
                    <h3 class="engagement"><?php the_field("engagement")?></h3>
                    <h5 class="engagement engagement__text col-sm-8 col-xl-12"><?php the_field("engagement_texte")?><h5>
                </div>
                <div class="INCLUSION">
                    <h3 class="inclusion"><?php the_field("inclusion")?></h3>


                    <h5 class="inclusion__text col-sm-8 col-xl-12"><?php the_field("inclusion_texte")?></h5>
                </div>
                <div class="SERVICE-LANGUE">
                    <h2 class="servicesLangues"><?php the_field("service")?></h2>
                    <p class="servicesLangues__texte col-sm-12 col-xl-12">><?php the_field("paragraphe_3")?>
                       </p>

                </div>

                <iframe width="100%" height="315" src="https://www.youtube.com/embed/swVTblMRMEw?si=X8eWRjrfikyU9BND"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>

            </div>

        </div>
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