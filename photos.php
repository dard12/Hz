<?php

  /*
  Template Name: Photos
  */

  get_header();

<div class="container container_offset">

    <div class="aligncenter post_wrapper">
    
    <?php $args = array('category_name' => 'photos', 'posts_per_page' => -1);
    $photos = new WP_Query($args);
    while ($photos->have_posts()) : $photos->the_post(); ?>
    
    <div class="alignleft photo_posts aligncentertext" id="post-<?php the_ID(); ?>">
      <a href="#"> <?php the_post_thumbnail('thumbnail'); ?> </a>
    </div>

    <?php endwhile; ?>
    </div>

</div>

<?php get_footer(); ?>