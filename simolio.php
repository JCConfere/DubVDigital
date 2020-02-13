<?php
/*
Template Name: simolio
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

    <?php wp_enqueue_style('simolio', get_stylesheet_directory_uri().'/css/simolio.css'); ?>

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
      <div class="row row1">

        <div class="col-sm-4">
          <h1 class="title">Simolio</h1>
          <h5 class="subtitle"><i>Free CSS Website Template</i></h5 class="subtitle">
        </div>



      </div> <!-- /.row1 -->

      <div class="row row2">

        <div class="col-md-3 col-xs-12">
          <div class="contact-header">
            <p class="phone">Tel: xxx-xxx-xxxx</p>
            <p class="mail">Mail: Company@mail.com</p>
            <div class="search">
              <input type="text" class="searchTerm" placeholder="Search the Site">
              <button type="submit" class="searchButton">
                <i class="fa fa-search"></i>
              </button>
            </div>
          </div>
        </div>

        <div class="col-md-2 col-sm-6">
          <div class="nav-service">
            <h3><a href="#"><span class="nav">OUR SERVICES</span></a>
            <p class="nav-content"><a href="#">Lorem ipsum dolo</a></p>
            <p class="nav-content"><a href="#">Suspendisse in neque</a></p>
            <p class="nav-content"><a href="#">Praesent et eros</a></p>
        </div>
        </div>

        <div class="col-md-2 col-sm-6">
          <div class="nav-service">
            <h3><a href="#"><span class="nav">FULL WIDTH</span></a>
            <p class="nav-content"><a href="#">Lorem ipsum dolo</a></p>
            <p class="nav-content"><a href="#">Suspendisse in neque</a></p>
            <p class="nav-content"><a href="#">Praesent et eros</a></p>
        </div>
        </div>

        <div class="col-md-2 col-sm-6">
        <div class="nav-service">
          <h3><a href="#"><span class="nav">STYLE DEMO</span></a>
          <p class="nav-content"><a href="#">Lorem ipsum dolo</a></p>
          <p class="nav-content"><a href="#">Suspendisse in neque</a></p>
          <p class="nav-content"><a href="#">Praesent et eros</a></p>
        </div>
        </div>

        <div class="col-md-2 col-sm-6">
        <div class="nav-service">
          <h3><a href="#"><span class="nav">HOMEPAGE</span></a>
          <p class="nav-content"><a href="#">Lorem ipsum dolo</a></p>
          <p class="nav-content"><a href="#">Suspendisse in neque</a></p>
          <p class="nav-content"><a href="#">Praesent et eros</a></p>
        </div>
        </div>

        </div> <!-- /.row2 -->

        <div class="row row3">
          <div class="col-md-5 col-xs-12">
            <h1 class="project-title">{ Latest Projects }</h1>
          </div>
        </div> <!--/.row3 -->

        <div class="row row4">
          <div class="col-md-4  col-sm-6 project-entry">
            <div class="photo">
              <img src="<?php bloginfo('template_url'); ?>/img/simolio/biz-media.png" class="img-responsive center center-block photo-entry" alt="BizMedia">
            </div>
          </div>

            <div class="col-md-4 col-sm-6 project-entry">
              <div class="photo">
                <img src="<?php bloginfo('template_url'); ?>/img/simolio/prestigious.png" class="img-responsive center center-block photo-entry" alt="Prestigious">
              </div>
          </div>

          <div class="col-md-4 col-sm-6 project-entry">
            <div class="photo">
              <img src="<?php bloginfo('template_url'); ?>/img/simolio/solutions.png" class="img-responsive center center-block photo-entry" alt="Solutions">
            </div>
        </div>

        <hr>

        <div class="col-md-4 col-sm-6 project-entry2">
          <div class="photo">
            <img src="<?php bloginfo('template_url'); ?>/img/simolio/corporation.png" class="img-responsive center center-block photo-entry" alt="#">
          </div>
      </div>

      <div class="col-md-4 col-sm-6 project-entry2">
        <div class="photo">
          <img src="<?php bloginfo('template_url'); ?>/img/simolio/darkness.png" class="img-responsive center center-block photo-entry" alt="Darkness">
        </div>
    </div>

    <div class="col-md-4 col-sm-6 project-entry2">
      <div class="photo">
        <img src="<?php bloginfo('template_url'); ?>/img/simolio/clean-business.png" class="img-responsive center center-block photo-entry" alt="#">
      </div>
  </div>

    </div><!-- /.row4 -->

    <div class="row row5">

      <div class="col-md-5 col-md-offset-1 template">
        <h3 class="free">{ About This Free CSS Template }</h3>
        <p>This is a W3C standards compliant free website from <a href="www.os-templates.com">OS Templates</a></p>
        <p>This template is distributes using a <a href="www.os-templates.com/template-terms">website template license</a>, which allows you to uses and modify
          the template for both personal and commercial usewhen you keep the provided credit links in the footer.</p>
        <p>For more CSS templates visit free <a href="www.os-templates.com">website templates</a>.</p>
        <p>Lacusenim inte trices lorem anterdum nam sente vivamus quis fauctor mauris. Wisinon vivamus
          wisis adipis laorem lobortis curabiturpiscingilla dui platea ipsum lacingilla.</p>
        <p>Semalique tor sempus vestibulum libero nibh pretium eget eu elit montes. Sedsemporttis sit
          intesque felit quis elis et cursuspenatibulum tincidunt non curabitae.</p>
      </div>

      <div class="col-md-4 col-md-offset-2">
        <h3 class="flickr">{ Flickr }</h3>
        <div class="row flickr-subrow">
          <div class="col-xs-12 flex-container center">
            <img src="<?php bloginfo('template_url'); ?>/img/simolio/flickr-panel.png" class="img-responsive flickr-photo" alt="flickr-panel">
          </div>
        </div> <!-- /.flickr-subrow -->
      </div>
    </div><!-- /.row5 -->


      <div class="row footer-row">

        <div class="col-md-3 col-md-offset-1">
          <h3 class="footer-header">Stay In The Know  !</h3>
          <p class="email">Please enter your email address to join our mailing list</p>
        <div>
          <input id="emailAddress" type="email" class="email-input" placeholder="Enter Email Here">
          <button type="submit" class="emailButton">GO</button>
        </div>
        <br>
        <p class="email">To unsubscribe, please <a href="www.os-templates.com/free-website-templates"><span class="link-color-orange">Click Here  <i class="fa fa-angle-double-right"></i></span></a>
        </div>

        <div class="col-md-3">
          <h3 class="footer-header">Further Information  !</h3>
          <p class="footer-links"><a href="www.os-templates.com/free-website-templates"><span class="link-color-orange">Business Terms & Conditions  <i class="fa fa-angle-double-right"></i></span></a></p><br>
          <p class="footer-links"><a href="www.os-templates.com/free-website-templates"><span class="link-color-orange">Disability and Philosophy  <i class="fa fa-angle-double-right"></i></span></a></p><br>
          <p class="footer-links"><a href="www.os-templates.com/free-website-templates"><span class="link-color-orange">Contact Our Company  <i class="fa fa-angle-double-right"></i></span></a></p>
        </div>

        <div class="col-md-3">
          <h3 class="footer-header">Company Details  !</h3>
          <p class="contact-info">Company Name<br>
             Street Name and Number<br>
             Town<br>
             Postcode/Zip<br>
             Tel: (xxx)xxx-xxxx
           </p>
        </div>

      </div><!-- /.footer-row -->


    <div class="row copy-right">
      <div class="col-xs-8 bottom">
        <p>Copyright &copy; 2009 - 2017 - All Rights Reserved - <a href="www.os-templates.com/free-website-templates"><span class="link-color-orange">Domain Name</span></a></p>
      </div>

      <div class="col-xs-4 bottom">
        <p>Template by <a href="www.os-templates.com/free-website-templates"><span class="link-color-orange">OS Templates</span></a>
      </div>
    </div>

    </div>


    <?php wp_footer(); ?>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.js"></script>
    </body>
    </html>
