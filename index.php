<?php get_header();?>

<div class="banner"></div>

<div class="container">
	<div class="row">
		<div class="aligncentertext divider_dots"> <p> . . . </p> </div>
	</div>


	<div class="row content_wrapper">
		<div class="col-md-6 col-md-offset-2">

			<?php
			$feature_args = array('category_name' => 'featured');
			$features = new WP_Query($feature_args); ?>

			<div id="myCarousel" class="carousel slide slide_wrapper posts">

				<!-- Wrapper for slides -->
				<div class="carousel-inner slide_wrapper">
			        <?php while ( $features->have_posts() ) : $features->the_post(); ?>
				        <?php if ( has_post_thumbnail() ) { ?>
						<div class="item slide" id="post-<?php the_ID(); ?>">
							<a href="<?php the_permalink() ?>"> <?php the_post_thumbnail(array(600,250)); ?> </a>
			 	    	</div>
			 	    	<?php } ?>
			        <?php endwhile; ?>
				</div>

				<!-- Controls -->
				<a class="left carousel-control" href="#myCarousel" data-slide="prev"></a>
				<a class="right carousel-control" href="#myCarousel" data-slide="next"></a>
			</div>

			<?php 
			$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
			$args = array(
				'posts_per_page' => 4,
				'paged' => $paged
				);
			$posts = new WP_Query($args);

			if ( $posts->have_posts() ) : while ( $posts->have_posts() ) : $posts->the_post(); ?>
				<div class="posts" id="post-<?php the_ID(); ?>">
					<div class="post_title"> <a class="posttitle" href="<?php the_permalink() ?>"> <?php the_title(); ?> </a> </div> 
					<?php if ( has_post_thumbnail() ) { ?>
						<div class="post_thumb_wrapper">
							<a href="<?php the_permalink() ?>"> <?php the_post_thumbnail(array(600,250)); ?> </a>
						</div>
					<?php } ?>
				    <div class="post_text_wrapper"> <?php the_excerpt(); ?> </div>
				    <a class="alignright post_readmore" href="<?php the_permalink() ?>"> Read More </a>
				</div>
			<?php endwhile; else: ?>
			<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
			<?php endif; ?>

			<div class="paginate alignrighttext">
				<?php
				$big = 999999999; // need an unlikely integer

				echo paginate_links( array(
					'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
					'format' => '?paged=%#%',
					'current' => max( 1, get_query_var('paged') ),
					'total' => $posts->max_num_pages
				) );
				?>
			</div>
		</div>

        <?php get_sidebar('sidebar') ?>
	</div>
</div>

<?php get_footer();?>

<script>
	$(document).ready(function() {
		var site_url = "<?php echo get_home_url() ?>" + "/";
		
		if (document.URL != site_url) {
			$(window).scrollTop($('.divider_dots').offset().top);
		}

		$('.item').filter(':first').addClass('active');

		$('.carousel').carousel({
		  interval: 2000
		})
	});
</script>