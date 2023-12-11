<?php 
/**
 * 	Template Name: Team
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
<div class="hero-equipe ">
	<div class="row align-items-center">
		<div class=" col-12 text-lg-start">
			<div class="titre-equipe">		
				

				<h1 class="titre-equipe col-12"><?php the_title()?></h1>
				<h5 class="texte-hero-equipe col-12"><?php the_content()?>
				</h5>
			</div>
		</div>

	</div>

</div>


</section>


<!--fin hero equipe-->

<!--début cartes equipe-->


<section>
<div class="container-fluid">
	<div class="row justify-content-center">
		<div class="col-lg-12 col-md-12 col-sm-12 justify-content-center">


		  <h2 class="equipe-role">Administration</h2>
		  
			<div class="card-group equipe justify-content-center">
								<?php
  $projects = new WP_Query('post_type=equipe');
  while ($projects->have_posts()) : $projects->the_post(); 
?>
				<div data-bs-toggle="modal" data-bs-target="#exampleModal" class="card">
				  <img class="card-img-top img-fluid" src=<?php the_post_thumbnail_url() ?> alt="Card image cap">
				  <div class="card-body">
					<h3 class="card-title"><?php the_field('nom')?></h5>
					<h5 class="card-text"><?php the_field('role')?></h5>
					<h5 class="card-text"><small class="text-muted"><?php the_field('courriel')?></small></h5>
				  </div>
				</div>
				<?php   endwhile;
  wp_reset_postdata();
?>
		</div>
	</div>
		<div class="col-lg-12 col-md-12 col-sm-12">
		  <h2 class="equipe-role">Accueil et intégration</h2>
			<div class="card-group equipe justify-content-center">
			<?php
  $integration = new WP_Query('post_type=equipe_accueil');
  while ($integration->have_posts()) : $integration->the_post(); 
?>
				<div data-bs-toggle="modal" data-bs-target="#exampleModal" class="card">
				  <img class="card-img-top" src=<?php the_post_thumbnail_url() ?> alt="Card image cap">
				  <div class="card-body">
					<h3 class="card-title"><?php the_field('nom')?></h3>
					<h5 class="card-text"><?php the_field('role')?></h5>
					<h5 class="card-text"><small class="text-muted"><?php the_field('courriel')?></small></h5>
				  </div>
				</div>
				<?php   endwhile;
  wp_reset_postdata();
?>

		</div>
	</div>
		<div class="col-lg-12 col-md-12 col-sm-12">
		  <h2 class="equipe-role">Francisation</h2>
			<div class="card-group equipe justify-content-center">
			<?php
  $francisation = new WP_Query('post_type=equipe_francisation');
  while ($francisation->have_posts()) : $francisation->the_post(); 
?>
				<div data-bs-toggle="modal" data-bs-target="#exampleModal" class="card">
				  <img class="card-img-top" src=<?php the_post_thumbnail_url() ?> alt="Card image cap">
				  <div class="card-body">
					<h3 class="card-title"><?php the_field('nom')?></h3>
					<h5 class="card-text"><?php the_field('role')?></h5>
					<h5 class="card-text"><small class="text-muted"><?php the_field('courriel')?></small></h5>
				  </div>
				</div>
				<?php   endwhile;
  wp_reset_postdata();
?>

			  </div>

		</div>
		<div class="col-lg-12 col-md-12 col-sm-12">
		  <h2 class="equipe-role">Aide à l’emploi</h2>
			<div class="card-group equipe justify-content-center">
			<?php
  $emploi = new WP_Query('post_type=equipe_emploi');
  while ($emploi->have_posts()) : $emploi->the_post(); 
?>
				<div data-bs-toggle="modal" data-bs-target="#exampleModal" class="card">
				  <img class="card-img-top" src=<?php the_post_thumbnail_url() ?> alt="Card image cap">
				  <div class="card-body">
					<h3 class="card-title"><?php the_field('nom')?></h3>
					<h5 class="card-text"><?php the_field('role')?></h5>
					<h5 class="card-text"><small class="text-muted"><?php the_field('courriel')?></small></h5>
				  </div>
				</div>
				<?php   endwhile;
  wp_reset_postdata();
?>
			  </div>

		</div>
		<div class="col-lg-12 col-md-12 col-sm-12">
		  <h2 class="equipe-role">Régionalisation</h2>
			<div class="card-group equipe justify-content-center">
			<?php
  $region = new WP_Query('post_type=equipe_region');
  while ($region->have_posts()) : $region->the_post(); 
?>
				<div data-bs-toggle="modal" data-bs-target="#exampleModal" class="card">
				  <img class="card-img-top" src=<?php the_post_thumbnail_url() ?> alt="Card image cap">
				  <div class="card-body">
					<h3 class="card-title"><?php the_field('nom')?></h3>
					<h5 class="card-text"><?php the_field('role')?></h5>
					<h5 class="card-text"><small class="text-muted"><?php the_field('courriel')?></small></h5>
				  </div>
				</div>
				<?php   endwhile;
  wp_reset_postdata();
?>

			  </div>
		</div>

		<div class="col-lg-12 col-md-12 col-sm-12">
		  <h2 class="equipe-role">Soutien scolaire</h2>
		
			<div class="card-group equipe justify-content-center">
			<?php
  $soutien = new WP_Query('post_type=equipe_soutien');
  while ($soutien->have_posts()) : $soutien->the_post(); 
?>
				<div data-bs-toggle="modal" data-bs-target="#exampleModal" class="card">
				  <img class="card-img-top" src=<?php the_post_thumbnail_url() ?> alt="Card image cap">
				  <div class="card-body">
					<h3 class="card-title"><?php the_field('nom')?></h3>
					<h5 class="card-text"><?php the_field('role')?></h5>
					<h5 class="card-text"><small class="text-muted"><?php the_field('courriel')?></small></h5>
				  </div>
				</div>
				<?php   endwhile;
  wp_reset_postdata();
?>
	</div>
</div>

</section>

    <!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Plus sur nos membres</h5>
      </div>
      <div class="modal-body">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </div>
    </div>
  </div>
</div>

		
	</article>

<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif; 
?>



<?php

get_footer(); // Affiche footer.php 
?>