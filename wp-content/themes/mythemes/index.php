<?php
get_template_part('parts/header');

?>

<h1>Ibrahim sarkar</h1>
<?php get_parent_theme_file_uri( '/parts/header.php' ); 
?>
<!-- wp:group {"align":"wide","layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group alignwide">
	<!-- wp:site-title {"level":0} /-->

	<!-- wp:paragraph -->
		<p>Powered by WordPress.</p>
	<!-- /wp:paragraph -->
	<?php
	if (have_posts()) {
		while(have_posts()): the_post();
	
	<h1>the_title()</h1>
	the_content(); 
	
	}
	
	?>
</div>
<!-- /wp:group -->

<?php get_template_part('parts/footer');


?>


