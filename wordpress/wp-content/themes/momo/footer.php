<?php
	/*-----------------------------------------------------------------------------------*/
	/* Affiche le pied de page (Footer) sur toutes vos pages
	/*-----------------------------------------------------------------------------------*/

// Fermeture de la zone de contenu principale ?>
</main>

<section class="partenaires">

<section class="part">
    <div class="partnenaires swiper-p">
        <div class="partenaires swiper-wrapper">

            <div class="swiper-slide">
            <?php
  $swipe1 = new WP_Query('post_type=partenaire');
  while ($swipe1->have_posts()) : $swipe1->the_post(); 
?>
            <a href=<?php the_field('lien_part') ?>><img src=<?php the_post_thumbnail_url() ?> alt="partenaires" class="brasseur"></a>

                    <?php   endwhile;
  wp_reset_postdata();
?>
		
                </div>
            <div class="swiper-slide">            <?php
  $swipe2 = new WP_Query('post_type=partenaire_d');
  while ($swipe2->have_posts()) : $swipe2->the_post(); 
?>
            <a href=<?php the_field('lien_part') ?>><img src=<?php the_post_thumbnail_url() ?> alt="partenaires" class="brasseur"></a>

                    <?php   endwhile;
  wp_reset_postdata();
?></div>
            <div class="swiper-slide">            <?php
  $swipe3 = new WP_Query('post_type=partenaire_t');
  while ($swipe3->have_posts()) : $swipe3->the_post(); 
?>
            <a href=<?php the_field('lien_part') ?>><img src=<?php the_post_thumbnail_url() ?> alt="partenaires" class="brasseur"></a>

                    <?php   endwhile;
  wp_reset_postdata();
?></div>

        </div>
    </div>
</section>

</section>

<!-- fin partenaire -->

<!-- début footer -->

<footer>

<div class="container-fluid d-flex justify-content-center">
    <div class="row d-flex footerdiv align-items-center ">
        <div class="col-lg-2 col-sm-12 text-align-center">
        <?php
  $footer = new WP_Query('post_type=footer');
  while ($footer->have_posts()) : $footer->the_post(); 
?>
            <a href="<?php the_permalink(); ?>" class="promislink"><img class='logofooter img-fluid' src=<?php the_post_thumbnail_url() ?> alt="logo promis"></a><br><button class="footerbtn col-5 justify-content-center">Don</button><br><a href=""><i class="bi bi-instagram"></i></a><a href=<?php the_field('media') ?>><i class="bi bi-facebook"></i></a><a href=""><i class="bi bi-twitter"></i></a><?php   endwhile;
  wp_reset_postdata();
?>
</div>
        <div class="col-lg-2 col-sm-12 text-align-center">        
          <?php
  $lfoot = new WP_Query('post_type=link_foot');
  while ($lfoot->have_posts()) : $lfoot->the_post(); 
?>
<?php the_field('titre_contact') ?><?php the_field('num_contact') ?><br>
<?php   endwhile;
  wp_reset_postdata();
?> </div>
        <div class="col-lg-2 col-sm-12 text-align-center"><a href="https://www.google.ca/maps/place/333+Chem.+de+la+C%C3%B4te-Sainte-Catherine,+Outremont,+QC/@45.5160075,-73.6057758,17z/data=!3m1!4b1!4m5!3m4!1s0x4cc91986ca96da87:0xb66160f92f082d58!8m2!3d45.5160075!4d-73.6032009?entry=ttu">
                3333, chemin de la Côte<br>Ste-Catherine, Montréal<br>(Québec), H3T 1C8</a></div>
        <div class="col-lg-2 col-sm-12 text-align-center"><a href="<?php echo site_url('/hub-de-nouvelles'); ?>">Nos Services</a><br><a href="<?php echo site_url('/hub-de-nouvelles'); ?>">Nouvelles</a><br><a href="<?php echo site_url('/equipe'); ?>">Équipe</a></div>
        <div class="col-lg-2 col-sm-12 text-align-center"><a href="<?php echo site_url('/hub-de-nouvelles'); ?>">À propos</a><br><a href="<?php echo site_url('/hub-de-nouvelles'); ?>">Notre histoire</a><br><a href="<?php echo site_url('/hub-de-nouvelles'); ?>">FAQ</a></div><span class="m-2"><i class="bi bi-c-circle"></i>2023 Promis Les belettes</span>

</footer> 
<!-- fin footer -->

<!-- CECI EST LE MAIN.JS-->


<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js "></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js "></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/MotionPathPlugin.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/ScrollTrigger.min.js "></script>

<?php wp_footer(); 
/* Espace où WordPress peut insérer des fichiers .js et autres. Par exemple pour des extensions (plugins). 
	 Si vous enlevez cette fonction, vous désactiverez du même coup toutes vos extensions (plugins) 🤷. 
	 Vous pouvez la déplacer si désiré, mais garder là. */
?>
<!-- LE MAIN.JS ETAIS ICI AVANT LOLOLOLOLOL-->


</body>

</html>