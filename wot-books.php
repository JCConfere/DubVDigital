<?php
/*
Template Name: Wot-books
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
    <?php wp_enqueue_style('wot-books', get_stylesheet_directory_uri().'/css/wot-books.css'); ?>

    <link href="https://fonts.googleapis.com/css?family=Charm" rel="stylesheet">
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

         <div class="row">

           <div class="col-sm-4 col-head">
              <p>Books 1 - 7</p>
           </div>

           <div class="col-sm-4">
              <h1>The Karaethon Cycle: <br>
                <small><span  id="prophecy">The Prophecies of the Dragon</span></small></h1>
            </div>

          <div class="col-sm-4 col-head">
              <p>Books 8 - 14</p>
           </div>
      </div>

      <div class="row">

      <div class="col-sm-4 spacer">
            <div class="thumbnail book">
              <a href="1book.html"><img src="<?php bloginfo('template_url'); ?>../img/wot-books-img/1-eye-of-the-world.jpg" class="cover d-block" alt="The Eye of the World Book Cover"></a>
                <div class="caption">
                  <h3><a href="1book.html">The Eye of the World</a></h3>
                      <p class="excerpt">"The seals that hold back night shall weaken, and in the heart of winter shall winter's heart be born amid the wailing of lamentations and the gnashing of teeth, for winter's heart shall ride a black horse, and the name of it is Death."
   —from the Karaethon Cycle: The Prophecies of the Dragon</p>
            </div>
          </div>
        </div>

      <div class="col-sm-4 verse">
        <p>And it shall come to pass that what men made shall be shattered,<br>
and the Shadow shall lie across the Pattern of the Age,<br>
and the Dark One shall once more lay his hand upon the world of man.<br>
Women shall weep and men quail as the nations of the earth are rent like rotting cloth.<br>
Neither shall anything stand or abide...<br>

The Shadow shall rise across the world, and darken every land, even to the smallest corner, and there shall be neither Light nor safety.<br>
And he who shall be born of the Dawn, born of the Maiden, according to Prophecy,<br>
he shall stretch forth his hands to catch the Shadow,<br>
and the world shall scream in the pain of salvation.<br>
All Glory be to the Creator, and to the Light, and to he who shall be born again. May the Light save us from him.<br><p>
      </div>

        <div class="col-sm-4 spacer">
          <div class="thumbnail book">
            <a href="#"><img src="<?php bloginfo('template_url'); ?>../img/wot-books-img/8-winters-heart.jpg" class="cover d-block" alt="Winter's Heart Book Cover"></a>
              <div class="caption">
                <h3><a href="2book.html">Winter's Heart</a></h3>
                <p class="excerpt">"The seals that hold back night shall weaken, and in the heart of winter shall winter's heart be born amid the wailing of lamentations and the gnashing of teeth, for winter's heart shall ride a black horse, and the name of it is Death."
   —from the Karaethon Cycle: The Prophecies of the Dragon</p>
            </div>
          </div>
        </div>

      <div class="col-sm-4 spacer">
            <div class="thumbnail book">
              <img src="img/2-the-great-hunt.jpg" class="cover" alt="The Great Hunt Book Cover">
                <div class="caption">
                  <h3><a href="#">The Great Hunt</h3></a>
                  <p>One of the few book titles in the series that does not contain some sort of direct reference to the Karatheon Cycle.  To Walk the Path of Daggers is a saying among the Seanchan, in regards to the treachery that seems to run deep within their caste system</p>
                <p><a href="#" class="btn btn-inverse">Read More</a></p>
              </div>
            </div>
          </div>

      <div class="col-sm-4 verse">
        <p>Yet one shall be born to face the Shadow,<br>
born once more as he was born before,<br>
and shall be born again, time without end.<br>
The Dragon shall be Reborn,<br>
and there will be wailing and gnashing of teeth at his rebirth.<br>
In sackcloth and ashes shall he clothe the people,<br>
and he shall break the world again by his coming,<br>
tearing apart all ties that bind.<br>
Like the unfettered dawn shall he blind us, and burn us,<br>
yet shall the Dragon Reborn confront the Shadow at the Last Battle,<br>
and his blood shall give us the Light.<br>
Let tears flow, O ye people of the world.<br>
Weep for your salvation.<br><p>
      </div>


        <div class="col-sm-4 spacer">
          <div class="thumbnail book">
            <a href="#"><img src="img/9-the-path-of-daggers.jpg" class="cover" alt="The Path of Daggers Book Cover"></a>
            <div class="caption">
              <h3><a href="#">The Path of Daggers</h3></a>
              <p>"The seals that hold back night shall weaken, and in the heart of winter shall winter's heart be born amid the wailing of lamentations and the gnashing of teeth, for winter's heart shall ride a black horse, and the name of it is Death."
   —from the Karaethon Cycle: The Prophecies of the Dragon</p>
              <p><a href="#" class="btn btn-inverse">Read More</a></p>
            </div>
          </div>
        </div>

        <div class="col-sm-4 spacer">
          <div class="thumbnail book">
            <a href="#"><img src="img/3-the-dragon-reborn.jpg" class="cover"></a>
              <div class="caption">
                <h3><a href="#">The Dragon Reborn</h3></a>
                <p>"The seals that hold back night shall weaken, and in the heart of winter shall winter's heart be born amid the wailing of lamentations and the gnashing of teeth, for winter's heart shall ride a black horse, and the name of it is Death."
   —from the Karaethon Cycle: The Prophecies of the Dragon</p>
              <p><a href="#" class="btn btn-inverse">Read More</a></p>
            </div>
          </div>
        </div>

        <div class="col-sm-4 verse">
          <p>On the slopes of Dragonmount shall he be born,<br>
born of a maiden wedded to no man.<br>
He will be of the ancient blood, and raised by the old blood.<br>
When the winds of Tarmon Gai'don scour the earth,<br>
he will face the Shadow and bring forth Light again in the world.<br>
For he shall come like the breaking dawn,
and shatter the world again with his coming, and make it anew.<br>

Twice and twice shall he be marked,<br>
twice to live, and twice to die.<br>
Once the heron, to set his path.<br>
Twice the heron, to name him true.<br>
Once the Dragon, for remembrance lost.<br>
Twice the Dragon, for the price he must pay.<br></p>
        </div>

          <div class="col-sm-4 spacer">
            <div class="thumbnail book">
              <a href="#"><img src="img/10-crossroads-of-twilight.jpg" class="cover" alt="Crossroads of Twilight Book Cover"></a>
                <div class="caption">
                <h3><a href="#">Crossroads of Twilight</h3></a>
                <p>"The seals that hold back night shall weaken, and in the heart of winter shall winter's heart be born amid the wailing of lamentations and the gnashing of teeth, for winter's heart shall ride a black horse, and the name of it is Death."
   —from the Karaethon Cycle: The Prophecies of the Dragon</p>
              <p><a href="#" class="btn btn-inverse">Read More</a></p>
            </div>
          </div>
        </div>

         <div class="col-sm-4 spacer">
            <div class="thumbnail book">
              <a href="#"><img src="img/4-the-shadow-rising.jpg" class="cover" alt="The Shadow Rising Book Cover"></a>
                <div class="caption">
                <h3><a href="#">The Shadow Rising</h3></a>
                <p>"The seals that hold back night shall weaken, and in the heart of winter shall winter's heart be born amid the wailing of lamentations and the gnashing of teeth, for winter's heart shall ride a black horse, and the name of it is Death."
   —from the Karaethon Cycle: The Prophecies of the Dragon</p>
              <p><a href="#" class="btn btn-inverse">Read More</a></p>
            </div>
          </div>
        </div>

        <div class="col-sm-4 verse">
          <p>He shall slay his people with the sword of peace, and destroy them with the leaf.<br>

With his coming are the dread fires born again.<br>
The hills burn, and the land turns sere.<br>
The tides of men run out, and the hours dwindle.<br>
The wall is pierced, and the veil of parting raised.<br>
Storms rumble beyond the horizon, and the fires of heaven purge the earth.<br>
There is no salvation without destruction, no hope this side of death.<br>

The unstained tower, broken, bends knee to the forgotten sign.<br>
The seas rage, and stormclouds gather unseen.<br>
Beyond the horizon, hidden fires swell, and serpents nestle in the bosom.<br>
What was exalted is cast down; what was cast down is raised up.<br>
Order burns to clear his path.<br>
</p>
        </div>

         <div class="col-sm-4 spacer">
            <div class="thumbnail book">
              <a href="#"><img src="img/11-knife-of-dreams.jpg" class="cover" alt="Knife of Dreams Book Cover"></a>
                <div class="caption">
                  <h3><a href="#">Knife of Dreams</h3></a>
                  <p>"The seals that hold back night shall weaken, and in the heart of winter shall winter's heart be born amid the wailing of lamentations and the gnashing of teeth, for winter's heart shall ride a black horse, and the name of it is Death."
   —from the Karaethon Cycle: The Prophecies of the Dragon</p>
              <p><a href="#" class="btn btn-inverse">Read More</a></p>
            </div>
          </div>
        </div>

        <div class="col-sm-4 spacer">
            <div class="thumbnail book">
              <a href="#"><img src="img/5-the-fires-of-heaven.jpg" class="cover" alt="The Fires of Heaven Book Cover"></a>
                <div class="caption">
                  <h3><a href="#">The Fires of Heaven</h3></a>
                  <p>"The seals that hold back night shall weaken, and in the heart of winter shall winter's heart be born amid the wailing of lamentations and the gnashing of teeth, for winter's heart shall ride a black horse, and the name of it is Death."
   —from the Karaethon Cycle: The Prophecies of the Dragon</p>
              <p><a href="#" class="btn btn-inverse">Read More</a></p>
            </div>
          </div>
        </div>

        <div class="col-sm-4 verse">
          <p>There can be no health in us, nor any good thing grow,<br>
for the land is one with the Dragon Reborn, and he is one with the land.<br>
Soul of fire, heart of stone, in pride he conquers, forcing the proud to yield.<br>
He calls upon the mountains to kneel, and the seas to give way, and the very skies to bow.<br>
Pray that the heart of stone remembers tears, and the soul of fire, love.<br>

As the plow breaks the earth shall he break the lives of men,<br>
and all that was shall be consumed in the fire of his eyes.<br>
The trumpets of war shall sound at his footsteps, the ravens feed at his voice,<br>
and he shall wear a crown of swords.<br>

Master of the lightnings, rider on the storm,<br>
wearer of a crown of swords, spinner out of fate.<br>
Who thinks he turns the Wheel of Time,<br>
may learn the truth too late.<br>
</p>
        </div>

        <div class="col-sm-4 spacer">
            <div class="thumbnail book">
              <a href="#"><img src="img/12-the-gathering-storm.jpg" class="cover" alt="The Gathering Storm Book Cover"></a>
                <div class="caption">
                  <h3><a href="#">The Gathering Storm</h3></a>
                  <p>"The seals that hold back night shall weaken, and in the heart of winter shall winter's heart be born amid the wailing of lamentations and the gnashing of teeth, for winter's heart shall ride a black horse, and the name of it is Death."
   —from the Karaethon Cycle: The Prophecies of the Dragon</p>
              <p><a href="#" class="btn btn-inverse">Read More</a></p>
            </div>
          </div>
        </div>

        <div class="col-sm-4 spacer">
            <div class="thumbnail book">
              <a href="#"><img src="img/6-lord-of-chaos.jpg" class="cover" alt="Lord of Chaos Book Cover"></a>
                <div class="caption">
                  <h3><a href="#">Lord of Chaos</h3></a>
                  <p>"The seals that hold back night shall weaken, and in the heart of winter shall winter's heart be born amid the wailing of lamentations and the gnashing of teeth, for winter's heart shall ride a black horse, and the name of it is Death."
   —from the Karaethon Cycle: The Prophecies of the Dragon</p>
              <p><a href="#" class="btn btn-inverse">Read More</a></p>
            </div>
          </div>
        </div>

        <div class="col-sm-4 verse">
          <p>The Seals that hold back the night shall weaken,<br>
and in the heart of winter shall winter’s heart be born,<br>
amid the wailings of lamentation and the gnashing of teeth,<br>
for winter’s heart shall ride a black horse, and the name of it is Death.<br>

And it shall come to pass, in the days when the Dark Hunt rides,<br>
when the right hand falters and the left hand strays,<br>
that mankind shall come to the Crossroads of Twilight,<br>
and all that is, all that was,<br>
and all that will be shall balance on the point of a sword,<br>
while the winds of the Shadow grow.<br>

He shall heal the wounds of madness and cutting of hope.<br>

He shall hold a blade of light in his hands, and the three shall be one.<br>

He shall bind the nine moons to serve him. The north shall he tie to the east, and the west shall be bound to the south. <br>

</p>
        </div>

        <div class="col-sm-4 spacer">
            <div class="thumbnail book">
              <a href="#"><img src="img/13-towers-of-midnight.jpg" class="cover" alt="Towers of Midnight Book Cover"></a>
                <div class="caption">
                  <h3><a href="#">Towers of Midnight</h3></a>
                  <p>"The seals that hold back night shall weaken, and in the heart of winter shall winter's heart be born amid the wailing of lamentations and the gnashing of teeth, for winter's heart shall ride a black horse, and the name of it is Death."
   —from the Karaethon Cycle: The Prophecies of the Dragon</p>
              <p><a href="#" class="btn btn-inverse">Read More</a></p>
            </div>
          </div>
        </div>

        <div class="col-sm-4 spacer">
            <div class="thumbnail book">
              <a href="#"><img src="img/7-a-crown-of-swords.jpg" class="cover" alt="A Crown of Swords Book Cover"></a>
                <div class="caption">
                  <h3><a href="#">A Crown of Swords</h3></a>
                  <p>"The seals that hold back night shall weaken, and in the heart of winter shall winter's heart be born amid the wailing of lamentations and the gnashing of teeth, for winter's heart shall ride a black horse, and the name of it is Death."
   —from the Karaethon Cycle: The Prophecies of the Dragon</p>
              <p><a href="#" class="btn btn-inverse">Read More</a></p>
            </div>
          </div>
        </div>

        <div class="col-sm-4 verse">
          <p>Twice dawns the day when his blood is shed.<br>
Once for mourning, once for birth.<br>
Red on black, the Dragon’s blood stains the rock of Shayol Ghul.<br>
In the Pit of Doom shall his blood free men from the Shadow.<br>

His blood on the rocks of Shayol Ghul,<br>
washing away the Shadow, sacrifice for man’s salvation.<br>

He shall break chains and put others into chains.<br>

Fortune rides like the sun on high<br>
with the fox that makes the ravens fly.<br>
Luck his soul, the lightning his eye,<br>
He snatches the moons from out of the sky.<br>

When the Wolf King carries the hammer, thus are the final days known.<br>
When the Fox marries the raven, and the trumpets of battle are blown.

</p>
        </div>

        <div class="col-sm-4 spacer">
            <div class="thumbnail book">
              <a href="#"><img src="img/14-a-memory-of-light.jpg" class="cover" alt="A Memory of Light Book Cover"></a>
                <div class="caption">
                  <h3><a href="#">A Memory of Light</h3></a>
                  <p>"The seals that hold back night shall weaken, and in the heart of winter shall winter's heart be born amid the wailing of lamentations and the gnashing of teeth, for winter's heart shall ride a black horse, and the name of it is Death."
   —from the Karaethon Cycle: The Prophecies of the Dragon</p>
              <p><a href="#" class="btn btn-inverse">Read More</a></p>
            </div>
          </div>
        </div>

        <div class="col-sm-4 col-sm-push-4">
            <div class="thumbnail book">
              <a href="#"><img src="img/15-new-spring.jpg" class="cover" alt="New Spring Book Cover"></a>
                <div class="caption">
                  <h3><a href="#">New Spring</h3></a>
                  <p>"The seals that hold back night shall weaken, and in the heart of winter shall winter's heart be born amid the wailing of lamentations and the gnashing of teeth, for winter's heart shall ride a black horse, and the name of it is Death."
   —from the Karaethon Cycle: The Prophecies of the Dragon</p>
              <p><a href="#" class="btn btn-inverse">Read More</a></p>
            </div>
          </div>
        </div>







    </div> <!-- closes row -->
    </div> <!-- closes container-fluid -->


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
