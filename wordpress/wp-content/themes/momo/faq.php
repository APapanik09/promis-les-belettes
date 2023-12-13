<?php 
/**
 * 	Template Name: Faq
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
  $projects = new WP_Query('post_type= faq');
  while ($projects->have_posts()) : $projects->the_post(); 
?>
  
  <section>
    <div class="  hero-a-propos ">
        <div class="row align-items-center">
            <div class=" col-12 text-lg-start">
                <div class="titre-a-propos ">
                    <h1 class="titre-a-propos col-sm-12 col-12"><?php the_title()?></h1>
                   <style>
                    p{
                        text-align:center;
                    }
                   </style> <h3 class="texte-hero-a-propos col-12 text-align-center"><?php the_content()?>
                    </h3>
                </div>
            </div>

        </div>

    </div>

</section>

<div class=" container questions d-flex justify-content-center align-items-center">
    <div class="row col-xm-12 col-12 jusify-content-align-items-center">


        <h2 class="questionsTitre"><?php the_field("question_recentes")?></h2>

        <!-- section  accordéon faq questions récente -->
        <div class="accordion align-items-center" id="accordionExample">
            <div class="accordion-item">
                <h3 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"><?php the_field("question_1")?>
                        
                    </button>
                </h3>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <h5> <strong></strong><?php the_field("reponse_question-1")?> </h5>

                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h3 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <?php the_field("question_2")?> Est-ce qu'il y a un couvre-feu et puis-je recevoir des visiteurs?
                    </button>
                </h3>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <h5> <strong></strong> <?php the_field("reponse_question-2")?>
                            
                            </h5>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h3 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        <?php the_field("question_3")?> 
                    </button>
                </h3>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <h5><strong></strong>  <?php the_field("reponse_question-3")?></h5>
                    </div>
                </div>

            </div>
            <div class="accordion-item">
                <h3 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                        <?php the_field("question_4")?>
                        
                    </button>
                </h3>
                <div id="collapseFour" class="accordion-collapse collapse show" aria-labelledby="headingFour"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <h5><strong></strong> <?php the_field("reponse_question-4")?> </h5>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h3 class="accordion-header" id="headingFive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        <?php the_field("question_5")?>Comment puis-je faire le paiement des frais de séjour?
                    </button>
                </h3>
                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                       <h5><strong></strong> <?php the_field("reponse_question-5")?></h5>
                    </div>
                </div>

            </div>


            <h3 class="questionsTitre">  <?php the_field("question_hebergement")?></h3>
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h3 class="accordion-header" id="headingSevent">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseSevent" aria-expanded="true" aria-controls="collapseSevent">
                            <?php the_field("question_6")?>
                        </button>
                    </h3>
                    <div id="collapseSevent" class="accordion-collapse collapse show" aria-labelledby="headingSevent"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <h5><strong></strong> <?php the_field("reponse_question-6")?></h5>

                        </div>
                    </div>
                </div>
                <!-- section  accordéon faq hébergement  -->
                <div class="accordion-item">
                    <h3 class="accordion-header" id="headingHeight">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseHeight" aria-expanded="false" aria-controls="collapseHeight">
                            <?php the_field("question_7")?>
                        </button>
                    </h3>
                    <div id="collapseHeight" class="accordion-collapse collapse" aria-labelledby="headingHeight"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                           <h5> <strong></strong>  <?php the_field("reponse_question-7")?></h5>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h3 class="accordion-header" id="headingNine">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                            <?php the_field("question_8")?>
                        </button>
                    </h3>
                    <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                           <h5> <strong></strong> <?php the_field("reponse_question-8")?>
                           </h5>

                        </div>
                    </div>

                </div>
                <div class="accordion-item">
                    <h3 class="accordion-header" id="headingThen">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThen" aria-expanded="true" aria-controls="collapseThen">
                            <?php the_field("question_9")?>
                        </button>
                    </h3>
                    <div id="collapseThen" class="accordion-collapse collapse show" aria-labelledby="headingThen"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                           <h5> <strong></strong>  <?php the_field("reponse_question-9")?>
                           </h5>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h3 class="accordion-header" id="headingEleven">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                            <?php the_field("question_10")?>
                        </button>
                    </h3>
                    <div id="collapseEleven" class="accordion-collapse collapse" aria-labelledby="headingEleven"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                          <h5>  <strong></strong>  <?php the_field("reponse_question-10")?>
                            </h5>

                        </div>
                    </div>

                </div>
                <div class="accordion-item">
                    <h3 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                            <?php the_field("question_11")?>
                        </button>
                    </h3>
                    <div id="collapseSix" class="accordion-collapse collapse show" aria-labelledby="headingSix"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                           <h5> <strong></strong>  <?php the_field("reponse_question-11")?></h5>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>





	<?php   endwhile;
wp_reset_postdata();
?>


<?php
get_footer(); // Affiche footer.php 

?>