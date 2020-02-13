<?php
/*
Template Name: memory
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

    <link rel="stylesheet prefetch" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">


    <!-- Custom styles for this template -->
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">

    <?php wp_enqueue_style('memory', get_stylesheet_directory_uri().'/css/memory.css'); ?>

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

    <div class="container">
      <header>
          <h1>Matching Game</h1>
      </header>

      <section class="score-panel">
        <span class="timer"></span>
        <ul class="stars">
          <li><i class="fa fa-star"></i></li>
          <li><i class="fa fa-star"></i></li>
          <li><i class="fa fa-star"></i></li>
        </ul>

        <span class="moves"></span> Moves

          <div class="restart" onclick="reset();">
          <i class="fa fa-repeat"></i>
        </div>
      </section>

      <ul class="deck">
          <li class="card">
              <i class="fa fa-diamond"></i>
          </li>
          <li class="card">
              <i class="fa fa-paper-plane-o"></i>
          </li>
          <li class="card">
              <i class="fa fa-anchor"></i>
          </li>
          <li class="card">
              <i class="fa fa-bolt"></i>
          </li>
          <li class="card">
              <i class="fa fa-cube"></i>
          </li>
          <li class="card">
              <i class="fa fa-anchor"></i>
          </li>
          <li class="card">
              <i class="fa fa-leaf"></i>
          </li>
          <li class="card">
              <i class="fa fa-bicycle"></i>
          </li>
          <li class="card">
              <i class="fa fa-diamond"></i>
          </li>
          <li class="card">
              <i class="fa fa-bomb"></i>
          </li>
          <li class="card">
              <i class="fa fa-leaf"></i>
          </li>
          <li class="card">
              <i class="fa fa-bomb"></i>
          </li>
          <li class="card">
              <i class="fa fa-bolt"></i>
          </li>
          <li class="card">
              <i class="fa fa-bicycle"></i>
          </li>
          <li class="card">
              <i class="fa fa-paper-plane-o"></i>
          </li>
          <li class="card">
              <i class="fa fa-cube"></i>
          </li>
      </ul>

      <div class="modal hide">
        <div class="modal-header">
          <h2 class="congrats">You've Won the Game!</h2>
          <span><button class="modal-close" onclick="modalClose();">X</button></span>
        </div>

          <h3 class="results">Let's See How You Did!</h3>
          <hr>

        <div class="stats">
          <span class="final-time">Time: </span>
          <span class="final-stars">Stars: </span>
          <span class="final-moves">Moves: </span>
        </div>

        <div class="modal-buttons">
          <button class="replay restart" onclick="reset(); modalClose();">Replay</button>
          <button class="cancel" onclick="modalClose();">Cancel</button>
        </div>

      </div>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <script src="<?php wp_enqueue_script('memory', get_stylesheet_directory_uri().'/js/memory.js'); ?>"></script>
      <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.js"></script>

  </div>





    <footer class="blog-footer">
      <p>&copy; <?php echo Date('Y'); ?> - <?php bloginfo('name'); ?></p>
      <p>
        <a href="#">Back to top</a>
      </p>
    </footer>

    <?php wp_footer(); ?>

    </body>
    </html>
