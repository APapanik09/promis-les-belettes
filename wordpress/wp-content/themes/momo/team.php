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

<section>
<div class="hero-equipe ">
	<div class="row align-items-center">
		<div class=" col-12 text-lg-start">
			<div class="titre-equipe">
				<h1 class="titre-equipe col-12">Équipe</h1>
				<h5 class="texte-hero-equipe col-12">                        PROMIS est fier de compter sur une équipe de personnes qualifiées et soucieuse de bien servir
				  nos partenaires et clients. Pour assurer une amélioration continue, nos professionnels suivent
				  régulièrement les séances de coaching et les formations de perfectionnement afin de demeurer à
				  l’affût des nouveautés en immigration et les meilleurs pratiques d’intervention.

				  Afin de bien vous servir, l’équipe de PROMIS dispose d’une équipe parlant plus de 15 langues.

				  Notre équipe s’engage à offrir un suivi rapide, efficace, un service à la clientèle de haute
				  qualité et des services personnalisés.
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
				<div class="card">
				  <img class="card-img-top img-fluid" src="media/equipe/joelle.png" alt="Card image cap">
				  <div class="card-body">
					<h3 class="card-title">Joëlle Léveillé</h5>
					<h5 class="card-text">Réceptionniste</h5>
					<h5 class="card-text"><small class="text-muted">j.leveille@promis.qc.ca</small></h5>
				  </div>
				</div>
				<div class="card">
				  <img class="card-img-top" src="media/equipe/jennifer.png" alt="Card image cap">
				  <div class="card-body">
					<h3 class="card-title">Jennifer Giguère</h3>
					<h5 class="card-text">Chargée de projet en communication</h5>
					<h5 class="card-text"><small class="text-muted">jennifer.giguere@promis.qc.ca</small></h5>
				  </div>
				</div>
				<div class="card">
				  <img class="card-img-top" src="media/equipe/luc.png" alt="Card image cap">
				  <div class="card-body">
					<h3 class="card-title">Luc Osmani</h3>
					<h5 class="card-text">Chargé de projet en entrepreneuriat</h5>
					<h5 class="card-text"><small class="text-muted">luc.osmani@promis.qc.ca</small></h5>
				  </div>
				</div>

		</div>
	</div>
		<div class="col-lg-12 col-md-12 col-sm-12">
		  <h2 class="equipe-role">Accueil et intégration</h2>
			<div class="card-group equipe justify-content-center">
				<div class="card">
				  <img class="card-img-top" src="media/equipe/juan.png" alt="Card image cap">
				  <div class="card-body">
					<h3 class="card-title">Juan-José Fernandez</h3>
					<h5 class="card-text">Conseiller en intégration sociale et chef d’équipe</h5>
					<h5 class="card-text"><small class="text-muted">juan-jose.fernandez@promis.qc.ca</small></h5>
				  </div>
				</div>
				<div class="card">
				  <img class="card-img-top" src="media/equipe/myrna.png" alt="Card image cap">
				  <div class="card-body">
					<h3 class="card-title">Myrna Zogheib</h3>
					<h5 class="card-text">Conseillère en intégration sociale</h5>
					<h5 class="card-text"><small class="text-muted">myrna.zogheib@promis.qc.ca</small></h5>
				  </div>
				</div>
				<div class="card">
				  <img class="card-img-top" src="media/equipe/ximena.png" alt="Card image cap">
				  <div class="card-body">
					<h3 class="card-title">Ximena Moncayo</h3>
					<h5 class="card-text">Conseillère en intégration sociale</h5>
					<h5 class="card-text"><small class="text-muted">ximena.moncayo@promis.qc.ca</small></h5>
				  </div>
				</div>

		</div>
	</div>
		<div class="col-lg-12 col-md-12 col-sm-12">
		  <h2 class="equipe-role">Francisation</h2>
			<div class="card-group equipe justify-content-center">
				<div class="card">
				  <img class="card-img-top" src="media/equipe/valkyria.png" alt="Card image cap">
				  <div class="card-body">
					<h3 class="card-title">Valkiria Spring</h3>
					<h5 class="card-text">Agente d’administration à la francisation</h5>
					<h5 class="card-text"><small class="text-muted">valkiria.spring@promis.qc.ca</small></h5>
				  </div>
				</div>
				<div class="card">
				  <img class="card-img-top" src="media/equipe/dorian.png" alt="Card image cap">
				  <div class="card-body">
					<h3 class="card-title">Dorian Culot</h3>
					<h5 class="card-text">Agent d’administration à la francisation</h5>
					<h5 class="card-text"><small class="text-muted">dorian.culot@promis.qc.ca</small></h5>
				  </div>
				</div>
				<div class="card">
				  <img class="card-img-top" src="media/equipe/soraya.png" alt="Card image cap">
				  <div class="card-body">
					<h3 class="card-title">Soraya Silva</h3>
					<h5 class="card-text">Agente d’administration à la francisation</h5>
					<h5 class="card-text"><small class="text-muted">soraya.silva@promis.qc.ca</small></h5>
				  </div>
				</div>
			  </div>

		</div>
		<div class="col-lg-12 col-md-12 col-sm-12">
		  <h2 class="equipe-role">Aide à l’emploi</h2>
			<div class="card-group equipe justify-content-center">
				<div class="card">
				  <img class="card-img-top" src="media/equipe/monica.png" alt="Card image cap">
				  <div class="card-body">
					<h3 class="card-title">Monica Moise</h3>
					<h5 class="card-text">Conseillère en emploi</h5>
					<h5 class="card-text aide-emploi"><small class="text-muted">monica.moise@promis.qc.ca</small></h5>
				  </div>
				</div>
				<div class="card">
				  <img class="card-img-top" src="media/equipe/joyce.jpg" alt="Card image cap">
				  <div class="card-body">
					<h3 class="card-title">Joyce Myers</h3>
					<h5 class="card-text">Conseillère en emploi</h5>
					<h5 class="card-text"><small class="text-muted">joyce.myers@promis.qc.ca</small></h5>
				  </div>
				</div>
				<div class="card">
				  <img class="card-img-top" src="media/equipe/dalia.png" alt="Card image cap">
				  <div class="card-body">
					<h3 class="card-title">Dalia Piperni</h3>
					<h5 class="card-text">Conseillère en emploi</h5>
					<h5 class="card-text"><small class="text-muted">dalia.piperni@promis.qc.ca</small></h5>
				  </div>
				</div>
			  </div>

		</div>
		<div class="col-lg-12 col-md-12 col-sm-12">
		  <h2 class="equipe-role">Régionalisation</h2>
			<div class="card-group equipe justify-content-center">
				<div class="card">
				  <img class="card-img-top" src="media/equipe/david.png" alt="Card image cap">
				  <div class="card-body">
					<h3 class="card-title">David Rivera</h3>
					<h5 class="card-text">Conseiller à l’établissement en région</h5>
					<h5 class="card-text"><small class="text-muted">david.rivera@promis.qc.ca</small></h5>
				  </div>
				</div>
				<div class="card">
				  <img class="card-img-top" src="media/equipe/daniela.png" alt="Card image cap">
				  <div class="card-body">
					<h3 class="card-title">Daniela Halter</h3>
					<h5 class="card-text">Conseillère en emploi axé sur les régions</h5>
					<h5 class="card-text"><small class="text-muted">daniela.halter@promis.qc.ca</small></h5>
				  </div>
				</div>
				<div class="card">
				  <img class="card-img-top" src="media/equipe/angeles.png" alt="Card image cap">
				  <div class="card-body">
					<h3 class="card-title">Angeles Gongora</h5>
					<h5 class="card-text">Conseillère à l’établissement en région</h3>
					<h5 class="card-text"><small class="text-muted">angeles.gongora@promis.qc.ca</small></h5>
				  </div>
				</div>
			  </div>

		</div>
		<div class="col-lg-12 col-md-12 col-sm-12">
		  <h2 class="equipe-role">Soutien scolaire</h2>
		
			<div class="card-group equipe justify-content-center">
				<div class="card">
				  <img class="card-img-top" src="media/equipe/sylvie.png" alt="Card image cap">
				  <div class="card-body">
					<h3 class="card-title">Sylvie Delgado</h3>
					<h5 class="card-text">Conseillère au soutien scolaire</h5>
					<h5 class="card-text"><small class="text-muted">sylvie.delgado@promis.qc.ca</small></h5>
				  </div>
				</div>
				<div class="card">
				  <img class="card-img-top" src="media/equipe/tamara.jpg" alt="Card image cap">
				  <div class="card-body">
					<h3 class="card-title">Tamara Momcilovic</h3>
					<h5 class="card-text">Agente de liaison en milieu scolaire</h5>
					<h5 class="card-text"><small class="text-muted">tamara.momcilovic@promis.qc.ca</small></h5>
				  </div>
				</div>
				<div class="card">
				  <img class="card-img-top" src="media/equipe/vanessa.png" alt="Card image cap">
				  <div class="card-body">
					<h3 class="card-title">Vanessa Valderrama</h3>
					<h5 class="card-text">Agente de liaison en milieu scolaire</h5>
					<h5 class="card-text"><small class="text-muted">vanessa.valderrama@promis.qc.ca</small></h5>
				  </div>
				</div>
			  </div>

		</div>
	</div>
</div>

</section>

<?php
get_sidebar(); // Affiche le contenu de sidebar.php
get_footer(); // Affiche footer.php 
?>