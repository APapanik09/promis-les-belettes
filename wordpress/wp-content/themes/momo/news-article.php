<?php 
/**
 * 	Template Name: Nouvelle
 * Template Post Type: Nouvelle, nouvelle, post
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
  $projects = new WP_Query('post_type= nouvelle');
  while ($projects->have_posts()) : $projects->the_post(); 
?>
  
  <?php   endwhile;
  wp_reset_postdata();
?>
               
	
  <section>
  <div itemscope itemtype="article">
        <div class="nouvellle col d-flex flex-column justify-content-end align-items-center text-align-center ">
            <div class=" col-12 d-flex justify-content-end align-items-center flex-column ">
			<h3 class="nouvellle__categorie  pt-1" itemprop="genre"> <?php the_field("categorie")?></h3>
                <h1 itemprop="titre" class="nouvellle__titre col-12 align-self-end" itemprop="title"> <?php the_title()?></h1>
                <h3 class="nouvellle__date pb-1"><time itemprop="datePublished"> <?php the_field("date")?></time></h3>
            </div>
			</div>
        </div>

    </section>

    <!-- Fin hero nouvelle -->

    <!-- Debut enveloppe nouvelle -->
    <section class="section-nouvelle">

        <div class="enveloppe-nouvelle">

            <div class=" container paragraphe-nouvelle">
                <div class="row enveloppe">
                    <div itemscope>
                        
                                <h2 class="titre__nouvelle" itemprop="about" itemprop="name"> <?php the_title()?></h2>
                                <div class="nouvelle-img">
                                    <h4 class="paragraphe-nouvelle__texte">
                                        <br> <?php the_content()?> 
                                        <br>
                                        <br> <br>
                                        <br> <br><br>
                                    </h4>
                                    <p>
                                        <time itemprop="datePublished"> <?php the_field("date")?>1 juin 2023</time>
                                    </p>
                                </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- fin enveloppe nouvelle -->



    <!--Nouvelle
----------------------------------------->
    <section class="nouvelle">
        <h2 class="nouvelle__titre">Nouvelles récentes</h2>
        <!-- Swipper service 
-------------------------------------->
        <div class="swiper swiperNouvelle">

            <div class="swiper-wrapper ">
                <!-- Slides -->

                <!--Déménagement 
          ---------------------------------------------------------->
                <div itemscope itemtype="https://schema.org/Article" class="swiper-slide justify-content-centercard ">
                    <div class="nouvelle__demenagement card-1 col-10 col-md-11 col-lg-6  ">

                        <div class="nouvelle card-body ">

                            <h3 itemprop="title" class="card-title col-12">Réussir son déménagement </h3>


                            <h5 itemprop="datePublished" class="card-text">1 juin 2023</h5>

                        </div>
                    </div>
                </div>
                <!--francisation
          ---------------------------------------------------------->
                <div itemscope itemtype="https://schema.org/Article" class="swiper-slide ">
                    <div class="card-2 nouvelle__sarah col-10 col-md-11 col-lg-6">
                        <div class="nouvelle card-body ">

                            <h3 itemprop="title" class="card-title col-12">La contribution de Sarah</h3>

                            <h5 itemprop="datePublished" class="card-text">29 juin 2023</h5>
                        </div>
                    </div>
                </div>
                <!--famille
          ---------------------------------------------------------->
                <div itemscope itemtype="https://schema.org/Article" class="swiper-slide ">
                    <div class="card-3 col-md-11 col-10 col-lg-6 nouvelle__reseautage">
                        <div class="nouvelle card-body ">

                            <h3 itemprop="title" class="card-title col-12">La puissance du réseautage</h3>
                            <h5 itemprop="datePublished" class="card-text">3 mai 2023</h5>
                        </div>
                    </div>
                </div>
                <!--citoyennete 
          ---------------------------------------------------------->


                <!--vivre ensemble
          ---------------------------------------------------------->
                <div itemscope itemtype="https://schema.org/Article" class="swiper-slide ">
                    <div class="  nouvelle__vivre-ensemble card-5 col-10 col-md-11 col-lg-6">
                        <div class="nouvelle card-body ">

                            <h3 itemprop="title" class="card-title col-12">Journée nationale du vivre-ensemble</h3>


                            <h5 itemprop="datePublished" class="card-text"> 12 janvier 2023</h5>

                        </div>
                    </div>
                </div>
                <!--hebergement
          ---------------------------------------------------------->


                <div itemscope itemtype="https://schema.org/Article" class="swiper-slide">
                    <div class=" nouvelle__hebergement card-7 col-10 col-md-11 col-lg-6">
                        <div class="nouvelle card-body ">

                            <h5 itemprop="title" class="card-title col-12">Un lieu d'hébergement pour les femmes</h5>


                            <p itemprop="datePublished" class="card-text"> 26 janvier 2021</p>

                        </div>
                    </div>
                </div>


            </div>

            <!-- scrollbar -->
            <div class="swiper-scrollbar"></div>

        </div>

        <a href="hub_nouvelle.html" class="d-flex"> <button class="btn justify-content-center">Voir toute les
            nouvelles</button></a>
        <!--Pour ecran large col-12 
------------------------------------------------->
    </section>
        
    

<?php
get_footer(); // Affiche footer.php 
?>
    




