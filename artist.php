<?php

  /*
  Template Name: Artist
  */

  get_header();?>

<div class="container container_offset">

  <div class="row col-md-10 col-md-offset-1 artist_wrapper">
    <a href="#" onclick="show_artist('dash');return false;"> <img src="<?php bloginfo('template_directory'); ?>/media/dash.jpg"></a>
    <a href="#" onclick="show_artist('retch');return false;"> <img src="<?php bloginfo('template_directory'); ?>/media/retch.jpg"></a>
  </div>

  <div id="retch" class="artist row col-md-8 col-md-offset-2 alignlefttext">
    <h1> Retch </h1>
    <p>
      Hailing from Hackensack, New Jersey, RetcH, more formally known as RetcHy P da Lo God is the new leading underground hip hop artist of this generation. RetcH has quickly established himself as a noteworthy MC emerging on to the scene by consistantly putting out quality music in a genre of his own known as “Lifestyle Rap".
    </p>

    <p>
      The name "RetcHy P da Lo God" stems from his extensive Polo collection which you can always hear referenced in his music, not to mention that's also literally all he wears down to the socks. Over the last year or so, the self proclaimed Lo God has built a cult following of degenerate youth who seem to feed off Retch's delinquent lyrics about crime, drugs, and misfortune. With the release of "Delinquents & Degenerates" in October 2012, RetcH established himself as a major player in today's young rap culture. His known associations with acts such as Action Bronson, A$AP Mob, Ab-Soul, Earl Sweatshirt, Vince Staples, Flatbush Zombies and Chuck Inglish have also played a role in propelling the young star so quickly.
    </p>

    <p>
      Aside from Delinquents & Degenerates, RetcH has put out 4 other projects, including one with his H'z counterpart, Da$H, which they entitled "La Cienega".  The title name derrives from the 2 moving to Los Angeles after SXSW 2012 and residing in Beverly Hills right off Olympic and La Cienega Blvd. where in collaboration with Mordecai Beats they created the La Cienega EP.
    </p>
  </div>

  <div id="dash" class="artist row col-md-8 col-md-offset-2 alignlefttext">
    <h1> Da$h </h1>
    <p>
      Da$H, a Hackensack, New Jersey native and an established underground Musical Artist. As one of the melodic entities of Hz Global, he has developed a unique sound for himself by viciously flowing over abstract beats with a clever style, confident presence and scholarly banter.
    </p>
       
    <p>
      Da$H developed his passion for music at an early age and recalls listening to many artists from different genres . His parents often played music around him and his siblings and basically grew up on the likes of Led Zeppelin, Nirvana, and The Doors, to Tupac, Notorious B.I.G., Mobb Deep, Jay-Z, Beanie Sigel and more.  When he was about 7 years old, Da$H was exposed to a world where groundbreaking history was being made and Hip Hop was crossing over to mainstream Pop Culture. In the studio and on tour with pioneering artists that were influencing an entire generation on every level. This was a turning point for Da$H where the notion of creating a life for himself that would allow him to have financial stability/freedom, and enjoyment with his best friends and family without compromising his beliefs or integrity.
    </p>
       
    <p>
      In 2007, when MySpace was the biggest social network with strong musical emphasis, Da$H began to write lyrics to recite over beats that his friends would produce in home made studios for fun. After much praise and encouragement from his friends and family Da$H began to view his interest in music as more than a hobby and set sites on it as a long term career goal. Now in his 20s Da$H continues to use his music to express himself, his current state of mind and lifestyle to his generation from a first person perspective.           
    </p>

    <p>
      To date he has written and recorded six (6) solo mixtape projects: “The Script to My Instrumental”, “DreamCatcher”, “Livin What I’m Throwin’ Up”, “Caveman Files”, “Chron Burgundy,” "V.I.C.E.S" and a collaborative release with his Hz Global counterpart, RetcH called “La Cienega”.
    </p>
       
    <p>
      Da$H currently resides in L.A. and recently completed his latest project “V.I.C.E.S”. During his creative process of crafting this project, he had the luxury of collaborating with the likes of Ski Beatz, Prodigy, Alchemist, Vince Staples, A$AP Rocky, Ab-Soul, Earl Sweatshirt, Curren$y, Mac Miller and Hz Global’s artist RetcH. This along with the experience he gained while on a 60 city Hip Hop and Love tour, presented by Adidas in 2011, SXSW and Coachella in 2013 with some of his most admired artists today has given him the foundation to build and grow within this industry.
    </p>
  </div>

</div>

<?php get_footer(); ?>

<script>
  function show_artist(choice) {
    $('.artist').css("display", "none");
    $('#' + choice).css("display", "block");

    $('html, body').animate({
        scrollTop: $('#' + choice).offset().top - 70
    });
  }
</script>
