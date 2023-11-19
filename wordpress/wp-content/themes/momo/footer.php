<?php
	/*-----------------------------------------------------------------------------------*/
	/* Affiche le pied de page (Footer) sur toutes vos pages
	/*-----------------------------------------------------------------------------------*/

// Fermeture de la zone de contenu principale ?>
</main>
<section class="partenaires">

<!-- début partenaire -->
<section class="part">
	<div class="partnenaires swiper-p">
		<div class="partenaires swiper-wrapper">
			<div class="swiper-slide"><img src="media/partenaires/BRASSEUR_DU_MONDE_BLANC-180x200.png" alt="partenaires" class="brasseur"><img src="media/partenaires/BREBEUF_BLANC-340x78.png" alt="brebeuf" class="brebeuf"><img src="media/partenaires/centraide_blanc2-300x200.png"
					alt="centraide" class="centraide"><img src="media/partenaires/CSS-MargueriteBourgeon.png" alt="logo CSS-Marguerite Bourgeon" class="cssmargue"><img src="media/partenaires/CSS-Montreal.png" alt="logo CSS Montreal" class="cssmontreal"></div>
			<div class="swiper-slide"><img src="media/partenaires/Fondation-Cogir-315x200.png" alt="Fondation Cogir" class="cogir"><img src="media/partenaires/Fudicie-340x81.png" alt="Fudicie" class="fudicie"><img src="media/partenaires/Immigration_Quebec.png" alt="immigration quebec"
					class="immigrationQc"><img src="media/partenaires/investissement_quebec_logo-340x73.png" alt="investissement QC" class="investissementQc"><img src="media/partenaires/Logo_Le-Depots.svg" alt="Le Depot" class="ledepot"></div>
			<div class="swiper-slide"><img src="media/partenaires/Logo_MAC.svg" alt="mac" class="mac"><img src="media/partenaires/logo_reseau_reussite_mtl-340x123.png" alt="reseau reussite" class="reseau"><img src="media/partenaires/Montreal_blanc-340x73.png" alt="Montreal Blanc"
					class="montrealblanc"><img src="media/partenaires/service-canada_blanc-340x190.png" alt="service canada" class="serviceCan"><img src="media/partenaires/StateStreet2.png" alt="state street 2" class="state"></div>

		</div>
	</div>
</section>
</section>

<!-- fin partenaire -->



<!-- début footer -->

<footer>

<div class="container-fluid d-flex justify-content-center">
	<div class="row d-flex footerdiv align-items-center ">
		<div class="col-lg-2 col-sm-12 text-align-center"><img class='logofooter img-fluid' src="media/logo_promis.svg" alt="logo promis"><br></div>
		<div class="col-lg-2 col-sm-12 text-align-center"> Lun - Ven: 9h à 17h<br>Téléphone: (514) 345-1615
			<br>Télécopieur: (514) 345-1088</div>
		<div class="col-lg-2 col-sm-12 text-align-center"><a href="https://www.google.ca/maps/place/333+Chem.+de+la+C%C3%B4te-Sainte-Catherine,+Outremont,+QC/@45.5160075,-73.6057758,17z/data=!3m1!4b1!4m5!3m4!1s0x4cc91986ca96da87:0xb66160f92f082d58!8m2!3d45.5160075!4d-73.6032009?entry=ttu">
				3333, chemin de la Côte<br>Ste-Catherine, Montréal<br>(Québec), H3T 1C8</a></div>
		<div class="col-lg-2 col-sm-12 text-align-center"><a href="hub_services.html">Nos Services</a><br><a href="hub_nouvelle.html">Nouvelles</a><br><a href="equipe.html">Équipe</a></div>
		<div class="col-lg-2 col-sm-12 text-align-center"><a href="A_Propos.html">À propos</a><br><a href="histoire.html">Notre histoire</a><br><a href="faq.html">FAQ</div>

</footer>
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js "></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js "></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/MotionPathPlugin.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/ScrollTrigger.min.js "></script>
<script src="main.js"></script>

<?php wp_footer(); 
/* Espace où WordPress peut insérer des fichiers .js et autres. Par exemple pour des extensions (plugins). 
	 Si vous enlevez cette fonction, vous désactiverez du même coup toutes vos extensions (plugins) 🤷. 
	 Vous pouvez la déplacer si désiré, mais garder là. */
?>

</body>
</html>
