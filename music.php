<?php

  /*
  Template Name: Music
  */

  get_header(); ?>

<div class="container container_offset">

  <div class="row aligncentertext">
    <?php while (have_posts()) : the_post();?>
      <div class="alignlefttext">

        <div class="aligncentertext">
          <iframe class="bandcamp alignleft" src="http://bandcamp.com/EmbeddedPlayer/album=2000066089/size=large/bgcol=ffffff/linkcol=0687f5/transparent=true/" seamless><a href="http://heirdash.bandcamp.com/album/v-i-c-e-s">V.I.C.E.S by Da$H</a></iframe>
          <iframe class="bandcamp alignleft" src="http://bandcamp.com/EmbeddedPlayer/album=1585507417/size=large/bgcol=ffffff/linkcol=0687f5/transparent=true/" seamless><a href="http://retch.bandcamp.com/album/delinquents-degenerates">Delinquents &amp; Degenerates by RetcH</a></iframe>
          <iframe class="bandcamp alignleft" src="http://bandcamp.com/EmbeddedPlayer/album=781312290/size=large/bgcol=ffffff/linkcol=0687f5/transparent=true/" seamless><a href="http://heirdash.bandcamp.com/album/la-cienega">La Cienega by Da$H &amp; RetcH</a></iframe>
          <iframe class="bandcamp alignleft" src="http://bandcamp.com/EmbeddedPlayer/album=1722914314/size=large/bgcol=ffffff/linkcol=0687f5/notracklist=true/transparent=true/" seamless><a href="http://retch.bandcamp.com/album/4-laraza">4 LaRaza by RetcH</a></iframe>
          <iframe class="bandcamp alignleft" src="http://bandcamp.com/EmbeddedPlayer/album=2996970954/size=large/bgcol=ffffff/linkcol=0687f5/transparent=true/" seamless><a href="http://heirdash.bandcamp.com/album/chron-burgundy">ChRon Burgundy by Da$H</a></iframe>
          <a href="#"> <img class="bandcamp alignleft" src="<?php bloginfo('template_directory'); ?>/media/caveman_files.jpg"> </a>
        </div>
        
        <iframe class="soundcloud" width="100%" height="450" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/users/28163942"></iframe>
        
      </div>
    <?php endwhile; ?>
  </div>

</div>

<?php get_footer(); ?>