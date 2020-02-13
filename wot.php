<?php
/*
Template Name: Wot
*/
?>

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

    <?php wp_enqueue_style('wot', get_stylesheet_directory_uri().'/css/wot.css'); ?>

    <?php wp_head(); ?>



  </head>

  <body>


    <div class="blog-masthead">
      <div class="container">
        <nav class="blog-nav">
          <nav class="navbar navbar-expand-md navbar-dark bg-faded">
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

    <section class="main">


    <div class="container-fluid">

      <div class="row">
        <div class="col-sm-8 offset-2 weaves">
          <center><h1>The Wheel Weaves as the Wheel Wills</h1></center>
      </div>
   </div>


    <div class="row">
      <div class="col-sm-8 offset-2 welcome">
        <p>The Wheel of Time turns, and ages come and pass,
           leaving memories that become legend. Legend fades
           to myth, and even myth is long forgotten when the
           Age that gave it birth comes again. In one Age, called
           the Third Age by some, an Age yet to come, an Age long
           past, a wind rose in the Mountains of Mist.
           The wind was not the beginning. There are neither
           beginnings nor endings to the turning of the Wheel
           of time. But it was a beginning.</p>
      </div>
   </div>




     <div class="row bottom-nav">
     <div class="col-lg-2 nav-tab">
       <a href="books.html"><h3>Books</h3></a>
     </div>

     <div class="col-md-2 nav-tab">
       <a href="#"><h3>Characters</h3></a>
     </div>

      <div class="col-md-2 nav-tab">
       <a href="#"><h3>Continents</h3></a>
     </div>

      <div class="col-md-2 nav-tab">
       <a href="#"><h3>Lore</h3></a>
     </div>

      <div class="col-md-2 nav-tab">
       <a href="#"><h3>Robert Jordan</h3></a>
     </div>

      <div class="col-md-2 nav-tab">
       <a href="#"><h3>Brandon Sanderson</h3></a>
     </div>

     <!-- /.row -->
    </div>

    </div>

  </section>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.js"></script>
    </body>
    </html>
