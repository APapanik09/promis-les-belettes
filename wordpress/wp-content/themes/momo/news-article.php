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
	
		<?php endif; ?>
		
	
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
        <div style="background-image:url('<?php the_post_thumbnail_url() ?>')" class="nouvellle col d-flex flex-column justify-content-end align-items-center text-align-center ">
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
                        
                                <h3 class="titre__nouvelle" itemprop="about" itemprop="name"> <?php the_title()?></h3>
                                <div class="nouvelle-img">
                                <style>
  p {
    color:#223843 ;
  }
</style>
                                    <h4 class="paragraphe-nouvelle__texte"><?php the_content()?> 
                                        <br> 
                                        <br>
                                        <br> <br>
                                        <br> <br><br>
                                    </h4>
                                    <h4>
                                        <time itemprop="datePublished"> <?php the_field("date")?></time>
</h4>
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
        <h2 class="nouvelle__titre"><?php the_field("") ?></h2>
        <!-- Swipper service 
-------------------------------------->
        <div class="swiper swiperNouvelle">

            <div class="swiper-wrapper ">
                <!-- Slides -->
                <?php
                $projects = new WP_Query('post_type=nouvelle');
  while ($projects->have_posts()) : $projects->the_post(); 
?>
                <!--Déménagement 
          ---------------------------------------------------------->
                <div itemscope itemtype="https://schema.org/Article" class="swiper-slide justify-content-centercard ">
                    <div class="nouvelle__demenagement card-1 col-10 col-md-11 col-lg-6  ">
                    <div style="background-image:url('<?php the_post_thumbnail_url("medium") ?>')" >

                        <div class="nouvelle card-body ">
                        

                            <h3 itemprop="title" class="card-title col-12"><?php the_title()?> </h3>


                            <h5 itemprop="datePublished" class="card-text"><?php the_field("date")?></h5>

                        </div>
                    </div>
                </div>
                </div>
                <?php
  endwhile; 
  wp_reset_postdata(); 
?>

           

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
    




 