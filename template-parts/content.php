<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
		<?php endif; ?>
	</header><!-- .entry-header -->
	<div class="entry-content">
		<div class="image fotorama" data-nav="thumbs" data-width="100%" data-ratio="800/400" data-fit="cover">
			<?php
			$myvalue = get_field( "gallery_shortcode" );
			echo do_shortcode("$myvalue");
			?>
		</div>
		<?php echo get_field( 'desc' ) ?>
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->