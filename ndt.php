<?php
/*
Template Name: ndt
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

    <?php wp_enqueue_style('ndt', get_stylesheet_directory_uri().'/css/ndt.css'); ?>

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
      <div class="header">
        <h1>Dr. Neil Degrasse Tyson</h1>
        <h3>Astrophysicist Extraordinaire</h3>
        </div>
      <div class="thumbnail">
          <img src="<?php bloginfo('template_url'); ?>/img/ndt/ndt.jpg" class="mx-auto d-block" alt="Neil Degrasse Tyson">
          <div class="caption">
            <p><span class="caption">Neil Degrasse Tyson on stage at Howard University September 10, 2008</span></p>

          </div>
        </div>

      <center><p class="bio">Neil Degrasse Tyson was born in, New York City on October 5th, 1958.  At the age of nine, he visited the Hayden Planetarium at the Rose Center for Earth and Space at New York's, American Museum of Natural History, and from that moment, he fostered an interest in astronomy that would eventually propel him to become only one of around 1,000 astrophysicists on the planet.</p></center>

      <ul>
          <li class="section"><strong>Education</strong></li>
          <li>Graduated from the, Bronx High School of Science where he was editor-in-chief of the, <em>Physical Science Journal</em></li>
<li>Earned his bachelor's degree in Physics from Harvard University in 1980</li>
          <li>Earned his master's degree in Astronomy at the University of Texas as Austin in 1983</li>
          <li>Earned his master's degree in Astrophysics at Columbia University in 1989</li>
          <li>Earned his doctorate in Astrophysics at Columbia University in 1991</li>
          <li>Spent the next three years(1991-1994), as a postdoctoral research associate at, Princeton University</li>
          <li>Joined the Hayden Planetarium as a staff scientist in 1994</li>
          <li>Joined the Princeton faculty as a visiting research scientist and lecturer in 1994</li>
          <li>Became the director of the Hayden Planetarium and oversaw it's 210 million dollar reconstruction plan in 1996, and saw it the project come to fruition in 2000</li>

          <hr>

          <li class="section">Books</li>
          <li><em>Merlin's Tour of the Universe(1989/1998)</em></li>
          <li><em>Univers Down to Earth(1994)</em></li>
          <li><em>Just Visiting This Planet(1998)</em></li>
          <li><em>One Universe: At Home in the Cosmos(2000)</em></li>
          <li><em>Cosmic Horizons: Astronomy at the Cutting Edge(2000)</em></li>
          <li><em>City of Stars: A New Yorker's Guide to the Cosmos(2002</em></li>
          <li><em>My Favorite Universe(12 part lecture series)</em></li>
          <li><em>Origins: Fourteen Billion Years of Cosmic Evolution - with Donald Goldsmith(2004/2014)</em></li>
          <li><em>The Sky is Not the Limit: Adventures of an Urban Astrophysicist(2000/2004)</em></li>
          <li><em>Death By Black Hole: And Other Cosmic Quandaries(2007/2014)</em></li>
          <li><em>The Pluto Files: The Rise and Fall of America's Favorite Planet(2009)</em></li>
          <li><em>Space Chronicles: Facing the Ultimate Frontier(2012)</em></li>

         <hr>

          <li class="section">Research Publications</li>
          <li>Twarog, Bruce A.; Tyson, Neil D. (1985) "uvby Photometry of Blue Stragglers in NGC 7789" <em>Astronomical Journal</em><strong>90</strong>: 1247</li>
          <li>Tyson, Neil D.; Scalo, John M. (1988) "Bursting Dwarf Galaxies: Implications for Luminosity Function, Space Density, and Cosmological Mass Density" <em>Astrophysical Journal</em><strong>329</strong>: 618</li>
          <li>Tyson, Neil D. (1988) "On the Possibility of Gas-Rich Dwarf Galaxies in the Lyman-Alpha Forest" <em>Astrophysical Journal (letters)</em><strong>329</strong>:L57</li>
          <li>Tyson, Neil D.; Rich, Michael (1991) "Radial Velocity Distribution and Line Strenghts of 33 Carbon Stars in the Galactic Bulge" <em>Astrophysical Journal</em><strong>367</strong>: 547</li>
          <li>Tyson, Neil D.; Gal, Roy R. (1993) "An Exposure Guide for Taking Twilight Flatfields with Large Format CCDs" <em>Astronomical Journal</em><strong>105</strong>" 1206</li>
          <li>Tyson, Neil D.; Richmond, Michael W.; Woodhams, Michael; Ciottie, Luca (1993) "On the Possibility of a Major Impact on Uranus in the Past Century" <em>Astronomy and Astrophysics (Research Notes)</em><strong>275</strong>:630</li>
          <li>Schimdt, B. P., et al. (1994) "The Expanding Photospere Method Applied to SN1992am at cz=14600 km/s" <em>Astronomical Journal</em><strong>107</strong>: 1444</li>
          <li>Wells L. A., et al. (1994) "The Type la Supernova 1989B in NGC3627 (M66)" <em>Astronomical Journal</em><strong>108</strong>: 2233</li>
          <li>Hamuy, M., et al. (1996) "BVRI Light Curves for 29 Type ia Supernovae" <em>Astronomical Journal</em><strong>112</strong>:2408</li>
          <li>Lira, P., et al. (1998) "Optical Light Curves of the Type IA Supernovae SN 1990N and 1991T"<em>Astronomical Journal</em><strong>116</strong>: 1006</li>
          <li>Scoville, N., et al. (2007) "The Cosmic Evolution Survey (COSMOS): Overview"<em>Astrophysical Journal Supplement</em><strong>172</strong>: 38</li>
          <li>Liu, C. T.; Capak, P.; Mobasher, B.; Paglione, T. A. D.; Scoville, N. Z.; Tribiano, S. M.; Tyson, N. D. (2008) "The Faint-End Slopes of Galaxy Luminosity Functions in the COSMOS Field" <em>Astrophysical Journal Letters</em><strong>672</strong>: 108</li>


           <hr>

          <li class="section">Filmography</li>
          <li><em>Stargate: Atlantis</em> (2008): "Brainstorm" (himself)</li>
          <li>NOVA:<em> The Pluto Files</em> (2010): Documentary (presenter)</li>
          <li><em>The Inexplicable Universe: Unsolved Mysteries</em> (2012): 6-part lecture series from the, The Great Courses</li>
          <li><em>Gravity Falls</em> (2014): animated childrens cartoon (Waddles the pig)</li>
          <li><em>Brooklyn Nine-Nine</em> (2015): action comedy TV series (cameo)</li>
          <li><em>Star Talk</em> (2015) TV series (host)</li>
          <li><em>Lazer Team</em> (2016): comedy (himself)</li>
          <li><em>Ice Age: Collision Course</em> (2016): animated movie (Neil deBuck)</li>
          <li><em>Zoolander No. 2</em> (2016): comedy (himself)</li>

         <hr>

          <li class="section">Awards</li>
          <li>2001 Medal of Excellence, Columbia University, New York City</li>
          <li>2004 NASA Distinguished Public Service Medal</li>
          <li>2005 Science Writing Award</li>
          <li>2007 Klopsteg Memorial Award</li>
          <li>2009 Douglas S. Morrow Public Outreach Award from the Space Foundation for significant contributions to public awareness of space programs</li>
          <li>2009 Isaac Asimov Award from the Aerican Humanist Association</li>
          <li>2014 Critics' Choice Television Award for Best Reality Show Host (Cosmos)</li>
          <li>2014 Dunlap Prize</li>
          <li>2015 Public Welfare Medal from the National Academy of Sciences</li>
          <li>2015 Cosmos Award, Planetary Society</li>


           <hr>

          <li class="section">Honors</li>
          <li>2000 Sexiest Astrophysicist Alive, <em>People Magazine</em></li>
          <li>2001 asteroid named; 13123 Tyson, renamed from Asteroid 1994KA by the International Astronomical Union</li>
          <li>2001 The Tech 100, voted by editors of <em>Crain's Magazine</em> to be among the 100 most influential technology leaders in New York</li>
          <li>2004 Fifty Most Important African-Americans in Research Science</li>
          <li>2007 Harvard 100: Most Influential <em>Harvard Alumni</em> magazine, Cambridge, Massachusetts</li>
          <li>2007 the Time 100, voted by the editors of <em>Time Magazine</em> as one of the 100 most inluential persons in the world</li>
          <li>2008 <em>Discover Magazine</em> selected him as one of "the 10 Most Influential People in Science</li>


           <hr>


          <li class="section">Honorary Doctorates</li>
          <li>1997 York College, City University of New York</li>
          <li>2000 Ramapo College, Mahwah, New Jersey</li>
          <li>2000 Dominican College, Orangeburg, New York</li>
          <li>2001 University of Richmond, Richmond, Virginia</li>
          <li>2002 Bloomfield College, Bloomfield, New Jersey</li>
          <li>2003 Northeastern University, Boston, Massachusetts</li>
          <li>2004 College of Staten Island, City University of New York</li>
          <li>2006 Pace University, New York City</li>
          <li>2007 Williams College, Williamstown, Massachusetts</li>
          <li>2007 Worcest Polytechnic Institute, Worcester, Massachusetts</li>
          <li>2008 University of Pennsylvania, Philadelphia, Pennsylvania</li>
          <li>2010 University of Alabama in Huntsville, Huntsville, Alabama</li>
          <li>2010 Rensselaer Polytechnic Institute, Troy, New York</li>
          <li>2010 Eastern Connecticut State University, Willimantic, Connecticut</li>
          <li>2011 Gettysburg College, Gettysburg, Pennsylvania</li>
          <li>2012 Mount Holyoke College, South Hadley, Massachusetts</li>
          <li>2012 Western New England University, Springfield, Massachusetts</li>
          <li>2015 University of Massachusetts-Amherst, Amherst, Massachusetts</li>
      </ul>

     <hr>

      <div class="header">
        <h2>Learn More About Dr Tyson</h2>
      </div>
        <ul class="links">
            <a href="https://en.wikipedia.org/wiki/Neil_deGrasse_Tyson" target="_blank">Wikipedia</a><br>
            <a href="http://www.haydenplanetarium.org/tyson/" target="_blank">Hayden Planetarium</a><br>
            <a href="http://www.startalkradio.net/" target="_blank">Star Talk</a><br>
            <a href="https://twitter.com/neiltyson?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" target="_blank">Twitter</a><br>
            <a href="https://www.facebook.com/neildegrassetyson/" target="_blank">Facebook</a>
        </ul>
    </div>

    <footer class="blog-footer">
      <p>&copy; <?php echo Date('Y'); ?> - <?php bloginfo('name'); ?></p>
      <p>
        <a href="#">Back to top</a>
      </p>
    </footer>

    <?php wp_footer(); ?>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.js"></script>
    </body>
    </html>
