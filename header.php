
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="<?php bloginfo('description'); ?>">

    <title>
      <?php bloginfo('name'); ?> |
      <?php is_front_page() ? bloginfo('description') : wp_title(); ?>
    </title>

    <!-- Bootstrap core CSS -->
    <link href="<?php bloginfo('template_url'); ?> /css/bootstrap.css" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">
    
    <?php wp_head(); ?>

  </head>

  <body>

    <div class="blog-masthead">
      <div class="container">
        <nav class="blog-nav">
          <nav class="navbar navbar-expand-md navbar-light bg-faded">
   <a class="navbar-brand" href="#"></a>
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs4navbar" aria-controls="bs4navbar" aria-expanded="false" aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
   </button>
   <?php
     wp_nav_menu([
       'menu'            => 'primary',
       'theme_location'  => 'primary',
       'container'       => 'div',
       'container_id'    => 'bs4navbar',
       'container_class' => 'collapse navbar-collapse',
       'menu_id'         => false,
       'menu_class'      => 'navbar-nav mr-auto',
       'depth'           => 2,
       'fallback_cb'     => 'bs4navwalker::fallback',
       'walker'          => new bs4navwalker()
     ]);
     ?>
        </nav>
      </div>
    </div>

    <div class="container">

      <div class="blog-header">
        <h1 class="blog-title"><?php bloginfo('name'); ?></h1>
        <p class="lead blog-description"><?php bloginfo('description'); ?></p>
      </div>
