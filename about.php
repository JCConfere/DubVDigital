<?php
/*
Template Name: about
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

    <?php wp_enqueue_style('about-me', get_stylesheet_directory_uri().'/css/about-me.css'); ?>

<link href="https://fonts.googleapis.com/css?family=Krub" rel="stylesheet">
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
      <div class="row">

        <div class="col-sm-12 jason">
          <h2 class="webdev">Jason C Confere</h2>
        </div>



        <div class="col-sm-4">
          <img class="d-block w-100 portrait" src="<?php bloginfo('template_url'); ?>/img/lake-profile.jpg" alt="Jason C Confere">
        </div>

        <div class="col-md-8">
          <p class="intro">For the last three years I have been developing various projects for the web while learning
            certifications.  I was chosen last January to participate in Udacity's Grow with Google Scholarship. Through
            hard work and participation in the online community, I was awarded a six month scholarship for the Front End
            NanoDegree program. This course was co-created with AT&T, Github, and Google to prepare students for a career in
            the web development field. Since my graduation, I have been concentrating my efforts on developing in WordPress.</p>

          <p class="intro">I have spent my professional career accruing skills in a wide range of fields. I began working
            in retail, and I spent close to fifteen years learning marketing, presentation, customer service, analytics, and
            honing my communication and interpersonal skills.</p>

          <p class="intro">I grew restless with retail, and began working in the residential contracting field. I spent nearly 10 years in
            the construction industry as I learned the physical skills and the management side of the industry.  I was taught how to visualize
            a project from its conception, the steps necessary to bring it to fruition, and how industry standards and best practices
            will lay the foundations for success.</p>

          <p class="intro">It is with these experiences to draw from that I will provide meticulous attention to detail, a dedication to my craft that will
            allow my clients to feel at ease with their web presence, and a proactive vision that will allow new resources to be utilized in an
            efficient and pragmatic application.</p>
        </div>

        <!-- /.row -->
      </div>

      <div class="col-sm-12">
        <h2 class="webdev">Certifications</h2>
        <p class="intro hover">Hover over an icon below to see the relevant certificate. Clicking
          the view certificate button will open a new tab for a full size image</p>
      </div>

      <div class="col-md-12">
    <div class="row skill">

      <div class="col-md-3 col-sm-6 spacer">
        <div class="flip3d">
          <div class="back git-back"><a class="btn btn-primary cert git" href="https://github.com/JCConfere" target="_blank">Visit Repository</a></div>
          <div class="front git-cert"></div>
        </div>
      </div>

      <div class="col-md-3 col-sm-6 spacer">
        <div class="flip3d">
          <div class="back html-back"><a class="btn btn-primary cert" href="https://i.imgur.com/pqL0De9.png" target="_blank">View Certificate</a></div>
          <div class="front html-cert"></div>
        </div>
      </div>

      <div class="col-md-3 col-sm-6  spacer">
        <div class="flip3d">
          <div class="back css-back"><a class="btn btn-primary cert" href="https://i.imgur.com/rZm7CJn.png" target="_blank">View Certificate</a></div>
          <div class="front css-cert"></div>
        </div>
      </div>

      <div class="col-md-3 col-sm-6  spacer">
        <div class="flip3d">
          <div class="back flex-back"><a class="btn btn-primary cert" href="https://i.imgur.com/A5lBg5t.png" target="_blank">View Certificate</a></div>
          <div class="front flex-cert"></div>
        </div>
      </div>

      <div class="col-md-3 col-sm-6  spacer">
        <div class="flip3d">
          <div class="back javaScript-back"><a class="btn btn-primary cert" href="https://i.imgur.com/5pjRias.png" target="_blank">View Certificate</a></div>
          <div class="front javaScript-cert"></div>
        </div>
      </div>

      <div class="col-md-3 col-sm-6  spacer">
        <div class="flip3d">
          <div class="back es6-back"><a class="btn btn-primary cert" href="https://i.imgur.com/7GH24IS.png" target="_blank">View Certificate</a></div>
          <div class="front es6-cert"></div>
        </div>
      </div>

      <div class="col-md-3 col-sm-6  spacer">
        <div class="flip3d">
          <div class="back jquery-back"><a class="btn btn-primary cert" href="https://i.imgur.com/0AxJews.png" target="_blank">View Certificate</a></div>
          <div class="front jquery-cert"></div>
        </div>
      </div>

      <div class="col-md-3 col-sm-6  spacer">
        <div class="flip3d">
          <div class="back react-back"><a class="btn btn-primary cert" href="https://i.imgur.com/7GH24IS.png" target="_blank">View Certificate</a></div>
          <div class="front react-cert"></div>
        </div>
      </div>

      <div class="col-md-3 col-sm-6  spacer">
        <div class="flip3d">
          <div class="back wordpress-back"><a class="btn btn-primary cert" href="https://i.imgur.com/qpdl2fp.png" target="_blank">View Certificate</a></div>
          <div class="front wordpress-cert"></div>
        </div>
      </div>

      <div class="col-md-3 col-sm-6  spacer">
        <div class="flip3d">
          <div class="back bootstrap-back"><a class="btn btn-primary cert" href="https://i.imgur.com/ZpcBLWc.png" target="_blank">View Certificate</a></div>
          <div class="front bootstrap-cert"></div>
        </div>
      </div>

      <div class="col-md-3 col-sm-6  spacer">
        <div class="flip3d">
          <div class="back management-back"><a class="btn btn-primary cert" href="https://i.imgur.com/WWRndnq.png" target="_blank">View Certificate</a></div>
          <div class="front management-cert"></div>
        </div>
      </div>

      <div class="col-md-3 col-sm-6  spacer">
        <div class="flip3d">
          <div class="back nanodegree-back"><a class="btn btn-primary cert" href="https://i.imgur.com/7SFe6gv.png" target="_blank">View Certificate</a></div>
          <div class="front nanodegree-cert"></div>
        </div>
      </div>

    </div> <!-- /.skill-subrow -->
  </div> <!-- /.col-md-12 -->


      <!-- /.container-fluid -->
    </div>

    <footer class="blog-footer">
      <p>&copy; <?php echo Date('Y'); ?> - <?php bloginfo('name'); ?></p>
      <p>
        <a href="#">Back to top</a>
      </p>
    </footer>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.js"></script>
    </body>
    </html>
