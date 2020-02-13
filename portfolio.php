<?php
/*
Template Name: portfolio
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

    <?php wp_enqueue_style('portfolio', get_stylesheet_directory_uri().'/css/portfolio.css'); ?>

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

    <div class="container-fluid">
    <!--
      <div class="row">
        <div class="col-6 offset-3">
          <h1 class="folio-title">Portfolio</h1>
        </div>
        </div>
      -->
        <div class="row carousel-row">
        <div class="col-md-6 offset-md-3">
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="<?php bloginfo('template_url'); ?>/img/carousel/kala.png" alt="Kala Golden Photography">
              <div class="carousel-caption d-none d-md-block">
                <h3>Kala Golden Photography</h3>
                <p>Our first fully prototyped website. We are currently in the
                   process of finalizing the design and migrating to a WordPress
                   architecture.</p>
                   <a class="btn btn-warning" href="http://jcconfere.github.io/Kala-Golden-Photography.github.io/" role="button">Visit the Site</a>
              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="<?php bloginfo('template_url'); ?>/img/carousel/pixel-art.png" alt="Pixel Art Maker">
              <div class="carousel-caption d-none d-md-block">
                <h3>Pixel Art Canvas</h3>
                <p class="description">A javascript programming project that was completed for the Udacity Front End NanoDegree Certificate.</p>
                <a class="btn btn-primary" href="http://localhost:8082/wp/pixel-art/" role="button">Visit the Site</a>
              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="<?php bloginfo('template_url'); ?>/img/carousel/memory.png" alt="Memory Game">
              <div class="carousel-caption d-none d-md-block">
                <h3>Memory!</h3>
                <p>A javascript programming project that was completed for the Udacity Front End NanoDegree Certification.</p>
                   <a class="btn btn-primary" href="http://localhost:8082/wp/memory/" role="button">Visit the Site</a>
              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="<?php bloginfo('template_url'); ?>/img/carousel/Wheel-of-Time.png" alt="Wheel of Time Landing Page">
              <div class="carousel-caption d-none d-md-block">
                <h3>The Wheel of Time</h3>
                <p>A simple landing page that was designed to act as a portal to the rest of the site.</p>
                   <a class="btn btn-primary" href="http://localhost:8082/wp/wheel-of-time-landing-page/" role="button">Visit the Site</a>

              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="<?php bloginfo('template_url'); ?>/img/carousel/ndt.png" alt="Neil Degrasse Tyson Tribute Page">
              <div class="carousel-caption d-none d-md-block">
                <h3>Neil Degrasse Tyson Tribute Page</h3>
                <p>This page was built to fulfill one of the requirements for the FreeCodeCamp
                   front end certification</p>
                   <a class="btn btn-primary" href="http://localhost:8082/wp/neil-degrasse-tyson/" role="button">Visit the Site</a>

              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="<?php bloginfo('template_url'); ?>/img/carousel/simolio.png" alt="mockup of the Simolio template">
              <div class="carousel-caption d-none d-md-block">
                <h3>Simolio</h3>
                <p>This is a project where a pre-existing template was recreated as
                   an exercise in transforming PhotoShop Documents into web pages. All
                   links in the page link back to the original template.</p>
                   <a class="btn btn-primary" href="http://localhost:8082/wp/neil-degrasse-tyson/" role="button">Visit the Site</a>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="sr-only">Next</span>
          </a>

        </div>
      </div>
    </div>
  </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.js"></script>
    </body>
    </html>
