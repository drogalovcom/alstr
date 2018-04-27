<div id="primary" class="content-area">
	<main id="main" class="site-main">
		<div class="container">
			<div class="col-xs-12 col-md-10 col-md-offset-1">
				<?php
				while ( have_posts() ) :
					the_post();

					get_template_part( 'template-parts/content', get_post_type() );
				endwhile; // End of the loop.
				?>
		</div>
		</div>
	</main><!-- #main -->
</div><!-- #primary -->
<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ) ?>/libs/fotorama/fotorama.js"></script>