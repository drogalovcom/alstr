<?php
/**
 * The template for displaying archive pages
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
		height: 440px;
		background: url(<?php echo $background_cover; ?>) center center no-repeat;
		-webkit-background-size: cover;
		background-size: cover;
		filter: saturate(1) contrast(110%) brightness(110%);
		-webkit-filter: saturate(1) contrast(110%) brightness(110%);
	}
	<?php endif; ?>
	</style>
	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="container">
				<?php if ( have_posts() ) : ?>

					<header class="page-header">
						<?php the_archive_title( '<h1 class="page-title">', '</h1>' ); ?>
					</header><!-- .page-header -->

					<?php
					/* Start the Loop */
					while ( have_posts() ) :
						the_post();
						?>
						<section class="contentList">
							<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
								<div class="image fotorama" data-nav="thumbs" data-width="100%" data-ratio="800/400" data-fit="cover">
									<?php
									$myvalue = get_field( "gallery_shortcode" );
									echo do_shortcode("$myvalue");
									?>
								</div>
								<div class="info">
									<header class="entry-header">
										<?php the_title( '<div class="title">', '</div>' ); ?>
									</header><!-- .entry-header -->
									<div class="text">Описание работы. А слева от этого заголовка и описания будет полноценная галерея, с возможностью просматривать и листать фотографии объекта. <br><br>В самом низу кнопка ПОКАЗАТЬ ЕЩЁ, при нажатии которой будут подгружаться остальные работы без перехода на следующую страницу. Удобно и практично!</div>
								</div>
								
								<?php alstr_post_thumbnail(); ?>

							</article><!-- #post-<?php the_ID(); ?> -->
						</section>
						<?php if ( $cat_desc = category_description() )
						echo '<div class="cat__desc">'. $cat_desc .'</div>';
						else
						echo '<div class="no__cat__desc">Описание отсутствует!</div>'; ?>
					<?php endwhile;

					the_posts_navigation();

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif;
				?>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
