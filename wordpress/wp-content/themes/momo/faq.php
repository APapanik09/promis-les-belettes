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



<!-- section héro  -->
<section>
    <div class="  hero-a-propos ">
        <div class="row align-items-center">
            <div class=" col-12 text-lg-start">
                <div class="titre-a-propos ">
                    <h1 class="titre-a-propos col-sm-12 col-12">Foire aux questions</h1>
                    <h3 class="texte-hero-a-propos col-12">PROMIS vient en aide aux immigrants et aux réfugiés ainsi
                        qu'à leurs familles, dans leurs démarches d'intégration culturelle, sociale et professionnelle.
                    </h3>
                </div>
            </div>

        </div>

    </div>

</section>
<!---Fin Hero-->

<div class=" container questions d-flex justify-content-center align-items-center">
    <div class="row col-xm-12 col-12 jusify-content-align-items-center">


        <h2 class="questionsTitre"> Les questions récentes</h2>

        <!-- section  accordéon faq questions récente -->
        <div class="accordion align-items-center" id="accordionExample">
            <div class="accordion-item">
                <h3 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        À qui puis-je me référer en cas de besoin une fois sur place?
                    </button>
                </h3>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <h5> <strong>Réponse : </strong>À la Résidence, il y a une présence 24h/24, 7 jours /semaine. Le
                            service d'hébergement situé au premier étage, est ouvert du lundi au vendredi de 9h à17h
                            pour répondre à toutes vos questions. La réception
                            est ouverte 7/7, de 7h à 23h. La sécurité prend la relève de 23h à 7h.</h5>

                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h3 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Est-ce qu'il y a un couvre-feu et puis-je recevoir des visiteurs?
                    </button>
                </h3>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <h5> <strong>Réponse:</strong> Il n'y a pas de couvre-feu. Vous pouvez entrer et sortir comme
                            bon vous semble. Après 23h, la personne en charge de la sécurité la nuit, vous accueillera
                            et vous demandera de vous identifier avant de pouvoir
                            accéder à votre chambre. Les visiteurs ne sont pas admis aux chambres mais seulement dans le
                            hall d'entrée. Les visiteuses sont autorisées mais doivent être accueillies à la réception
                            par la résidente et signer un registre des
                            visites. Dans le contexte actuel, aucune visite aux chambres n'est autorisée.</h5>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h3 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Comment puis-je recevoir mon courrier ou des colis à la Résidence?
                    </button>
                </h3>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <h5><strong>Réponse:</strong> Le courrier et les colis sont recueillis à la réception où vous
                            pourrez les récupérer.</h5>
                    </div>
                </div>

            </div>
            <div class="accordion-item">
                <h3 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">

                        Est-ce que je peux prolonger mon séjour au-delà d'une année?
                    </button>
                </h3>
                <div id="collapseFour" class="accordion-collapse collapse show" aria-labelledby="headingFour"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <h5><strong>Réponse : </strong> Les séjours à la Résidence sont temporaires mais peuvent être
                            prolongés sous certaines conditions. Les personnes qui poursuivent leurs études peuvent être
                            autorisées à demeurer à la Résidence jusqu'à
                            un maximum de 3 ans.</h5>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h3 class="accordion-header" id="headingFive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        Comment puis-je faire le paiement des frais de séjour?
                    </button>
                </h3>
                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                       <h5><strong>Réponse:</strong> Le paiement des frais de séjour doit se faire toujours le premier du
                        mois. Si vous arrivez de l'étranger, nous acceptons les paiements par carte de crédit ou en
                        argent comptant pour le premier mois. Par
                        la suite, tous les paiements devront se faire par virement Interac ou par chèque au nom de
                        PROMIS.</h5>
                    </div>
                </div>

            </div>


            <h3 class="questionsTitre"> Questions sur les hébergements</h3>
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h3 class="accordion-header" id="headingSevent">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseSevent" aria-expanded="true" aria-controls="collapseSevent">
                            Comment puis-je faire une demande de séjour à la Résidence Maria-Goretti?
                        </button>
                    </h3>
                    <div id="collapseSevent" class="accordion-collapse collapse show" aria-labelledby="headingSevent"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <h5><strong>Réponse : </strong>Notre service est lié à la mission de PROMIS qui vient en aide
                            aux immigrants, en offrant un hébergement temporaire en priorité aux nouvelles arrivantes ou
                            étudiantes étrangères. La condition première
                            est d'accepter l'accès aux services de PROMIS. Dans un premier temps, vous devez remplir le
                            formulaire en ligne dans la section Résidence ou Transit. Notre service d'hébergement vous
                            contactera dans les jours ouvrables qui
                            suivront. Après l'analyse de votre demande, si votre candidature est acceptée, nous vous
                            confirmerons votre inscription. Des frais de 50 $ vous seront demandés pour l'ouverture de
                            votre dossier. Une fois inscrite sur nos listes,
                            nous communiquerons avec vous aussitôt que nous aurons une chambre libre à une date se
                            rapprochant de celle souhaitée d'arrivée. Pour le séjour Transit, des conditions
                            particulières s'appliquent pour un nombre limité de chambres.
                            Nous vous demandons de communiquer avec nous par téléphone pour obtenir l'information.</h5>

                        </div>
                    </div>
                </div>
                <!-- section  accordéon faq hébergement  -->
                <div class="accordion-item">
                    <h3 class="accordion-header" id="headingHeight">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseHeight" aria-expanded="false" aria-controls="collapseHeight">
                            Que signifie : Accepter l'accès aux services de PROMIS?
                        </button>
                    </h3>
                    <div id="collapseHeight" class="accordion-collapse collapse" aria-labelledby="headingHeight"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                           <h5> <strong>Réponse:</strong> En tant que nouvelle arrivante, vous aurez la chance de rencontrer
                            un conseiller de PROMIS qui vous fournira les informations sur tous les services disponibles
                            dont vous pourrez bénéficier sous un
                            même toit et ce, complètement gratuitement.</h5>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h3 class="accordion-header" id="headingNine">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                            Qu'est-ce qui est inclus dans les frais de séjour?
                        </button>
                    </h3>
                    <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                           <h5> <strong>Réponse:</strong> Les frais de séjour incluent le service téléphonique pour les
                            appels locaux (téléphone fixe avec boîte vocale), la connexion Internet réseau, le
                            chauffage, l'électricité et l'eau chaude. Les chambres
                            sont meublées mais la literie n'est pas fournie.</h5>

                        </div>
                    </div>

                </div>
                <div class="accordion-item">
                    <h3 class="accordion-header" id="headingThen">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThen" aria-expanded="true" aria-controls="collapseThen">
                            Les chambres sont-elles toutes en occupation simple et quelle est la différence entre une
                            petite et une grande chambre?
                        </button>
                    </h3>
                    <div id="collapseThen" class="accordion-collapse collapse show" aria-labelledby="headingThen"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                           <h5> <strong>Réponse : </strong> Toutes nos chambres sont en occupation simple. Les seules
                            différences entre la grande et la petite chambre sont la superficie (11 m2 ou 16 m2), le
                            nombre de placards et le nombre de fenêtres (1 ou
                            2).</h5>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h3 class="accordion-header" id="headingEleven">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                            Qu'est-ce qui est inclus dans les frais de séjour?
                        </button>
                    </h3>
                    <div id="collapseEleven" class="accordion-collapse collapse" aria-labelledby="headingEleven"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                          <h5>  <strong>Réponse:</strong> Les frais de séjour incluent le service téléphonique pour les
                            appels locaux (téléphone fixe avec boîte vocale), la connexion Internet réseau, le
                            chauffage, l'électricité et l'eau chaude. Les chambres
                            sont meublées mais la literie n'est pas fournie.</h5>

                        </div>
                    </div>

                </div>
                <div class="accordion-item">
                    <h3 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                            Est-ce que je peux changer de chambre pour une plus grande après mon arrivée s'il n'y en
                            avait pas de disponible?
                        </button>
                    </h3>
                    <div id="collapseSix" class="accordion-collapse collapse show" aria-labelledby="headingSix"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                           <h5> <strong>Réponse : </strong> Toutes nos chambres sont en occupation simple. Les seules
                            différences entre la grande et la petite chambre sont la superficie (11 m2 ou 16 m2), le
                            nombre de placards et le nombre de fenêtres (1 ou
                            2).</h5>
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