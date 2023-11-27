<?php
get_header(); 
?>

<?php
if ( have_posts() ) : 
	while ( have_posts() ) : the_post(); ?>
<?php if (!is_front_page()) :  ?>
<h2>
    <?php the_title();  ?>
</h2>
<?php endif; ?>
<?php the_content();  ?>
<?php endwhile; ?>

<?php 
else : 
	get_template_part( 'partials/404' ); 
endif;
?>





<?php
get_footer(); 
?>