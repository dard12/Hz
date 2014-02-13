<?php if ( is_active_sidebar( 'sidebar' ) ) : ?>
	<div class="col-md-3 sidebar aligncentertext">
		<a class="social" href="https://soundcloud.com/hzglobal">
			<img src="<?php bloginfo('template_directory'); ?>/media/social/soundcloud.png">
		</a>
		
		<a class="social" href="http://instagram.com/hzglobal">
			<img src="<?php bloginfo('template_directory'); ?>/media/social/instagram.png">
		</a>
		
		<a class="social" href="http://heirgang.tumblr.com/">
			<img src="<?php bloginfo('template_directory'); ?>/media/social/tumblr.png">
		</a>
		
		<a class="social" href="https://twitter.com/hzglobal">
			<img src="<?php bloginfo('template_directory'); ?>/media/social/twitter.png">
		</a>

		<div class="aligncentertext"> <?php dynamic_sidebar( 'sidebar' ); ?> </div>
	</div>
<?php endif; ?>