<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <title><?php wp_title('|', true, "right")?></title>
    <?php wp_head();
          
    ?>
</head>
<body>
<h1>Ibrahim sarkar</h1>
<?php get_parent_theme_file_uri( '/parts/header.php' ); 
?>
<!-- wp:group {"align":"wide","layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group alignwide">
	<!-- wp:site-title {"level":0} /-->

	<!-- wp:paragraph -->
		<p>Powered by WordPress.</p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<?php wp_footer(); ?>
</body>
</html>
