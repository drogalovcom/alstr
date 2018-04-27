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
					<section class="contentList">
						<?php
						/* Start the Loop */
						while ( have_posts() ) :
							the_post();
							?>
							<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
								<div class="image fotorama" data-nav="thumbs" data-width="100%" data-ratio="800/400" data-fit="cover">
									<?php
									$myvalue = get_field( "gallery_shortcode" );
									echo do_shortcode("$myvalue");
									?>
								</div>
								<div class="info">
									<header class="entry-header">
										<a class="title simple-ajax-popup-align-top" href="<?php the_permalink() ?>"><?php the_title(); ?></a>
									</header><!-- .entry-header -->
									<div class="text">
										<?php the_excerpt(); ?>
										<a class="simple-ajax-popup-align-top" href="<?php the_permalink() ?>">Читать далее</a>
									</div>
									<div class="footer">
										<div class="category">
											<?php $categories = get_the_category(); 
											if($categories[0]){
												echo '<a class="btn_cat" href="' . get_category_link($categories[0]->term_id ) . '">'. $categories[0]->name . '</a>';
											}; ?>
										</div>
										<div class="date">
											<?php the_time( 'j F Y' ); ?>
										</div>
									</div>
								</div>
								<?php alstr_post_thumbnail(); ?>
							</article><!-- #post-<?php the_ID(); ?> -->
						<?php endwhile;
						the_posts_navigation();
					else :
						get_template_part( 'template-parts/content', 'none' );
					endif;
					?>
				</section>
				<div class="load">
					<a class="button" href="">показать ещё</a>
				</div>
				<?php if ( $cat_desc = category_description() )
				echo '<div class="cat__desc">'. $cat_desc .'</div>';
				else
					echo '<div class="no__cat__desc">Описание отсутствует!</div>'; ?>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
