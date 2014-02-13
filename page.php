<?php

  /*
  Template Name: Page
  */

  get_header(); ?>

<div class="container container_offset">

  <div class="row aligncentertext">
    <?php while (have_posts()) : the_post();?>
      <h1 class="aligncentertext"><?php the_title(); ?></h1>

      <div class="post_content aligncenter alignlefttext">
        <?php the_content(); ?>
      </div>
    <?php endwhile; ?>
  </div>

</div>

<?php get_footer(); ?>