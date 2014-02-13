<?php

  /**
  *@desc A single blog post See page.php is for a page layout.
  */
  get_header();?>

<div class="container container_offset">

  <div class="row aligncentertext row col-md-8 col-md-offset-2">
    <?php while (have_posts()) : the_post();?>
      <h1><?php the_title(); ?></h1>
      <small>Written by <?php the_author(); ?> </small>

      <div class="post_content alignlefttext">
        <?php the_content(); ?>
      </div>
    <?php endwhile; ?>
  </div>

  <div class="row alignlefttext row col-md-8 col-md-offset-2">
    <div class="comments">
      <?php comments_template(); ?>
    </div>
  </div>

</div>

<?php get_footer(); ?>