<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package alustar
 */

get_header();
?>
	<?php $term = get_queried_object(); ?>
	<?php $background_cover = get_field('background_cover', $term); ?>
	<div class="header-bg"></div>
	<style type="text/css">
	
	<?php if( $background_cover ): ?>
	.header-bg {
		margin-top: 138px;
		height: 440px;
		box-shadow: 0 0 10px rgba(0,0,0,.5);
		background: url(<?php echo $background_cover; ?>) center center no-repeat;
		-webkit-background-size: cover;
		background-size: cover;
		filter: saturate(1) contrast(110%) brightness(110%);
		-webkit-filter: saturate(1) contrast(110%) brightness(110%);
		z-index: 99;
	}
	<?php endif; ?>
	</style>
	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="container">
				<?php
				while ( have_posts() ) :
					the_post();

					get_template_part( 'template-parts/content', 'page' );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop.
				?>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
