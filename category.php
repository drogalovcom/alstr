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
									<div class="footer">
										<div class="category">
											<a href="<?php the_permalink() ?>" class="button callback simple-ajax-popup-align-top">узнать подробнее</a>
										</div>
										<div class="date">
											<a href="#feedback_form" class="button callback">заказать</a>
										</div>
									</div>
								</div>
								<?php alstr_post_thumbnail(); ?>
							</article><!-- #post-<?php the_ID(); ?> -->
						<?php endwhile; ?>
						<div class="pagination_block">
							<?php if (function_exists('oriolo_pagination')) oriolo_pagination(); 
							else posts_nav_link(); ?>
						</div>
					<?php else :
						get_template_part( 'template-parts/content', 'none' );
					endif;
					?>
				</section>
				<div class="catalog slick">
					<div class="col-xs-6 col-md-4">
						<div class="item_img animated">
							<a class="dark_block_animate" href="<?php get_template_directory_uri() ?>/category/nashi-proekti/besedki/">
							</a>
							<div class="img" style="background-image: url(<?php echo esc_url( get_template_directory_uri() ) ?>/img/images/a48052a5cfb52adac1a2a3e71f4c3aab.jpg);">
							</div>
							<div class="info">
								<a href="<?php get_template_directory_uri() ?>/category/nashi-proekti/besedki/" class="title">Беседки</a>
								<div class="text">Благодаря алюминиевому профилю возможно изготавливать беседки угольной, прямоугольной и неправильной формы.</div>
							</div>
						</div>
					</div>
					<div class="col-xs-6 col-md-4">
						<div class="item_img animated">
							<a class="dark_block_animate" href="<?php get_template_directory_uri() ?>/category/nashi-proekti/verandy-i-terrasy/">
							</a>
							<div class="img" style="background-image: url(<?php echo esc_url( get_template_directory_uri() ) ?>/img/images/92901dc742633d570f926d4fb54e73b5.jpg);">
							</div>
							<div class="info">
								<a href="<?php get_template_directory_uri() ?>/category/nashi-proekti/verandy-i-terrasy/" class="title">Веранды и террасы</a>
								<div class="text">Остекление террас и веранд - это мудрый и выгодный ход, обеспечивающий комфортный отдых при любой погоде.</div>
							</div>
						</div>
					</div>
					<div class="col-xs-6 col-md-4">
						<div class="item_img animated">
							<a class="dark_block_animate" href="<?php get_template_directory_uri() ?>/category/nashi-proekti/ofisnye-peregorodki/">
							</a>
							<div class="img" style="background-image: url(<?php echo esc_url( get_template_directory_uri() ) ?>/img/images/a0316ad4dcaf07f447e5e59e8eaaa08d.jpg);">
							</div>
							<div class="info">
								<a href="<?php get_template_directory_uri() ?>/category/nashi-proekti/ofisnye-peregorodki/" class="title">Офисные перегородки</a>
								<div class="text">Благодаря алюминиевому профилю возможно изготавливать беседки угольной, прямоугольной и неправильной формы.</div>
							</div>
						</div>
					</div>
					<div class="col-xs-6 col-md-4">
						<div class="item_img animated">
							<a class="dark_block_animate" href="<?php get_template_directory_uri() ?>/category/nashi-proekti/alyuminievye-dveri/">
							</a>
							<div class="img" style="background-image: url(<?php echo esc_url( get_template_directory_uri() ) ?>/img/images/ae5d246ddb402087c8074996154215b3.jpg);">
							</div>
							<div class="info">
								<a href="<?php get_template_directory_uri() ?>/category/nashi-proekti/alyuminievye-dveri/" class="title">Алюминиевые двери</a>
								<div class="text">Основная особенность алюминиевой системы остекления Provedal - раздвижной механизм открывания створок.</div>
							</div>
						</div>
					</div>
					<div class="col-xs-6 col-md-4">
						<div class="item_img animated">
							<a class="dark_block_animate" href="<?php get_template_directory_uri() ?>/category/nashi-proekti/fasadnoe-osteklenie-vitrazhi/">
							</a>
							<div class="img" style="background-image: url(<?php echo esc_url( get_template_directory_uri() ) ?>/img/images/69a3933588a94f6e9a720097c9262ba8.JPG);">
							</div>
							<div class="info">
								<a href="<?php get_template_directory_uri() ?>/category/nashi-proekti/fasadnoe-osteklenie-vitrazhi/" class="title">Фасадное остекление, витражи</a>
								<div class="text">Алюминиевые витражи актуальны, практичны и эстетичны.</div>
							</div>
						</div>
					</div>
					<div class="col-xs-6 col-md-4">
						<div class="item_img animated">
							<a class="dark_block_animate" href="<?php get_template_directory_uri() ?>/category/nashi-proekti/bezramnoe-osteklenie/">
							</a>
							<div class="img" style="background-image: url(<?php echo esc_url( get_template_directory_uri() ) ?>/img/images/aab5683b0048c30eed9089f2a0bb60ba.JPG);">
							</div>
							<div class="info">
								<a href="<?php get_template_directory_uri() ?>/category/nashi-proekti/bezramnoe-osteklenie/" class="title">Безрамное остекление</a>
								<div class="text">Безрамное остекление из алюминиевого профиля – современное направление дизайна премиум-класса.</div>
							</div>
						</div>
					</div>
					<div class="col-xs-6 col-md-4">
						<div class="item_img animated">
							<a class="dark_block_animate" href="<?php get_template_directory_uri() ?>/category/nashi-proekti/balkony-i-lodzhii/">
							</a>
							<div class="img" style="background-image: url(<?php echo esc_url( get_template_directory_uri() ) ?>/img/images/b8942803a22caa492b9312c819b4b155.JPG);">
							</div>
							<div class="info">
								<a href="<?php get_template_directory_uri() ?>/category/nashi-proekti/balkony-i-lodzhii/" class="title">
									<span>Балконы, лоджии</span>
								</a>
								<div class="text">Основная особенность алюминиевой системы остекления Provedal - раздвижной механизм открывания створок.</div>
							</div>
						</div>
					</div>
					<div class="col-xs-6 col-md-4">
						<div class="item_img animated">
							<a class="dark_block_animate" href="<?php get_template_directory_uri() ?>/category/nashi-proekti/bassejny-i-teplitsy/">
							</a>
							<div class="img" style="background-image: url(<?php echo esc_url( get_template_directory_uri() ) ?>/img/images/9583eae785974a72aabf062fb4e513e4.JPG);">
							</div>
							<div class="info">
								<a href="<?php get_template_directory_uri() ?>/category/nashi-proekti/bassejny-i-teplitsy/" class="title">
									<span>Бассейны и теплицы</span>
								</a>
								<div class="text">Остекление террас и веранд - это мудрый и выгодный ход, обеспечивающий комфортный отдых при любой погоде.</div>
							</div>
						</div>
					</div>
					<div class="col-xs-6 col-md-4">
						<div class="item_img animated">
							<a class="dark_block_animate" href="<?php get_template_directory_uri() ?>/category/nashi-proekti/vhodnye-gruppy/">
							</a>
							<div class="img" style="background-image: url(<?php echo esc_url( get_template_directory_uri() ) ?>/img/images/07b56f51d28db175c01592d1ff2d6081.jpg);">
							</div>
							<div class="info">
								<a href="<?php get_template_directory_uri() ?>/category/nashi-proekti/vhodnye-gruppy/" class="title">
									<span>Входные группы</span>
								</a>
								<div class="text">Благодаря алюминиевому профилю возможно изготавливать беседки угольной, прямоугольной и неправильной формы.</div>
							</div>
						</div>
					</div>
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
