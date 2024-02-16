<?php
get_template_part('parts/header');

?>
<!-- wp:group {"align":"wide","layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group alignwide">
	<!-- wp:site-title {"level":0} /-->

	<!-- wp:paragraph -->
		<p>Powered by WordPress.</p>
	<!-- /wp:paragraph -->
	<?php
	if (have_posts()):
	while(have_posts()): the_post();
	?>
    <h1>this is home page</h1>
    <h1><?php the_title(); ?></h1>
    <?php 
    the_time();
    the_content();
    ?>

<?php
    endwhile;
    else:
        _e("Kono post nei", "ibrahim_wp_theme");
    endif;
	
	?>
</div>
<!-- /wp:group -->

<?php get_template_part('parts/footer');


?>


