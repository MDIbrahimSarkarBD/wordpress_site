<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <title><?php wp_title('|', true, "right")?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <?php wp_head();
          
    ?>
</head>
<body>
  <?php

       //include ('menu.php');
     // get_template_part( 'parts/menu', "menu1" );

     require get_template_directory() . '/parts/menu.html'

      
  ?>

  <h2>header Dir</h2>