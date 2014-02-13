<?php

  /*
  Template Name: Contact
  */

  get_header(); ?>

<div class="container container_offset">

  <div class="row aligncentertext row col-md-8 col-md-offset-2">
    <?php while (have_posts()) : the_post();?>
      <h1 class="aligncentertext"><?php the_title(); ?></h1>

      <div class="post_content aligncentertext">
        <?php the_content(); ?>
      </div>
    <?php endwhile; ?>
  </div>

</div>

<?php get_footer(); ?>