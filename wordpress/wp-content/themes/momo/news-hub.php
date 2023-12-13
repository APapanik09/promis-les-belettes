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
    <section>
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-12 col-sm-12 justify-content-center">
                    <h2 class="equipe-role">Nouvelles Récentes</h2>

                    <!-- Cartes des nouvelles -->
                    <div class="card-group equipe justify-content-center">
                        <div class="card">
                            <img class="card-img-top img-fluid" src="media/nouvelles/contribution_sarah_article_1.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h3 class="card-title">La contribution de Sarah</h5>
                                    <h5 class="card-text">1 juillet 2023</h5>
                                    <h5 class="card-text"><a href=""><small class="text-muted">En savoir plus ></small></a></h5>
                            </div>
                        </div>
                        <div class="card">
                            <img class="card-img-top" src="media/nouvelles/puissance_reseautage.jpeg" alt="Card image cap">
                            <div class="card-body">
                                <h3 class="card-title">La puissance du réseautage</h3>
                                <h5 class="card-text">3 mai 2023</h5>
                                <h5 class="card-text"><a href=""><small class="text-muted">En savoir plus ></small></a></h5>
                            </div>
                        </div>
                        <div class="card">
                            <img class="card-img-top" src="media/nouvelles/reussir_demenagement_hero.jpeg" alt="Card image cap">
                            <div class="card-body">
                                <h3 class="card-title">Réussir son déménagement</h3>
                                <h5 class="card-text">1 juin 2023</h5>
                                <h5 class="card-text"><a href=""><small class="text-muted">En savoir plus ></small></a></h5>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card-group equipe justify-content-center">
                        <div class="card">
                            <img class="card-img-top" src="media/nouvelles/reorientation_carriere.jpeg" alt="Card image cap">
                            <div class="card-body">
                                <h3 class="card-title">Quand une réorganisation de carrière s'impose</h3>
                                <h5 class="card-text">3 mai 2023</h5>
                                <h5 class="card-text"><a href=""><small class="text-muted">En savoir plus ></small></a></h5>
                            </div>
                        </div>
                        <div class="card">
                            <img class="card-img-top" src="media/nouvelles/temoignage.jpeg" alt="Card image cap">
                            <div class="card-body">
                                <h3 class="card-title">Témoignage d'un parcours réussi</h3>
                                <h5 class="card-text">21 février 2023</h5>
                                <h5 class="card-text"><a href=""><small class="text-muted">En savoir plus ></small></a></h5>
                            </div>
                        </div>
                        <div class="card">
                            <img class="card-img-top" src="media/nouvelles/hiver_montreal.jpeg" alt="Card image cap">
                            <div class="card-body">
                                <h3 class="card-title">Résister à l'hiver québécois</h3>
                                <h5 class="card-text">6 décembre 2023</h5>
                                <h5 class="card-text"><a href=""><small class="text-muted">En savoir plus ></small></a></h5>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>


    </section>
    <!-- section des autres nouvelles -->
    <section>
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-12 col-sm-12 justify-content-center">
                    <h2 class="equipe-role">Autres nouvelles</h2>
                    <div class="dropdown order">
                        <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Ordre des nouvelles
                    </button>
                        <ul class="dropdown-menu">
                            <li><button class="dropdown-item" type="button">+ récentes</button></li>
                            <li><button class="dropdown-item" type="button">+ anciennes</button></li>
                        </ul>
                    </div>
                    <div class="card firstnews">
                        <img class="card-img-top img-fluid" src="media/nouvelles/contribution_sarah_article_1.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h3 class="card-title">La contribution de Sarah</h5>
                                <h5 class="card-text">1 juillet 2023</h5>
                                <h5 class="card-text"><a href=""><small class="text-muted">En savoir plus ></small></a></h5>
                        </div>
                    </div>

                    <div class="card-group equipe justify-content-center">
                        <div class="card">
                            <img class="card-img-top img-fluid" src="media/nouvelles/contribution_sarah_article_1.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h3 class="card-title">La contribution de Sarah</h5>
                                    <h5 class="card-text">1 juillet 2023</h5>
                                    <h5 class="card-text"><a href=""><small class="text-muted">En savoir plus ></small></a></h5>
                            </div>
                        </div>
                        <div class="card">
                            <img class="card-img-top" src="media/nouvelles/puissance_reseautage.jpeg" alt="Card image cap">
                            <div class="card-body">
                                <h3 class="card-title">La puissance du réseautage</h3>
                                <h5 class="card-text">3 mai 2023</h5>
                                <h5 class="card-text"><a href=""><small class="text-muted">En savoir plus ></small></a></h5>
                            </div>
                        </div>
                        <div class="card">
                            <img class="card-img-top" src="media/nouvelles/reussir_demenagement_hero.jpeg" alt="Card image cap">
                            <div class="card-body">
                                <h3 class="card-title">Réussir son déménagement</h3>
                                <h5 class="card-text">1 juin 2023</h5>
                                <h5 class="card-text"><a href=""><small class="text-muted">En savoir plus ></small></a></h5>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card-group equipe justify-content-center">
                        <div class="card">
                            <img class="card-img-top" src="media/nouvelles/reorientation_carriere.jpeg" alt="Card image cap">
                            <div class="card-body">
                                <h3 class="card-title">Quand une réorganisation de carrière s'impose</h3>
                                <h5 class="card-text">3 mai 2023</h5>
                                <h5 class="card-text"><a href=""><small class="text-muted">En savoir plus ></small></a></h5>
                            </div>
                        </div>
                        <div class="card">
                            <img class="card-img-top" src="media/nouvelles/temoignage.jpeg" alt="Card image cap">
                            <div class="card-body">
                                <h3 class="card-title">Témoignage d'un parcours réussi</h3>
                                <h5 class="card-text">21 février 2023</h5>
                                <h5 class="card-text"><a href=""><small class="text-muted">En savoir plus ></small></a></h5>
                            </div>
                        </div>
                        <div class="card">
                            <img class="card-img-top" src="media/nouvelles/hiver_montreal.jpeg" alt="Card image cap">
                            <div class="card-body">
                                <h3 class="card-title">Résister à l'hiver québécois</h3>
                                <h5 class="card-text">6 décembre 2023</h5>
                                <h5 class="card-text"><a href=""><small class="text-muted">En savoir plus ></small></a></h5>
                            </div>
                        </div>

                    </div>
                </div>
                <button class="plusnews btn">Voir plus de nouvelles</button>
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