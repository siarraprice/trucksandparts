<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Google Fonts Link -->
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">

    <title><?php bloginfo('name'); ?></title>

    <?php wp_head(); ?>

  </head>

  <body>
    <header>
      <h1><a href="<?php echo get_home_url();?>"><?php bloginfo('name'); ?></a></h1>


      <div class="col-lg-12 d-flex align-items-center nav-bar-full">
          <nav class="top-nav">
          <?php
            if(has_nav_menu('top-menu')){
              wp_nav_menu(array('theme_location' => 'top-menu' , 'container_class' => 'top-menu-class'));
            }else{
              echo "Please select a top menu through the dashboard";
            }
            ?>
          </nav>
      </div>
    </header>
