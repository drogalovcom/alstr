<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package alustar
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<!--<title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>-->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta property="og:image" content="path/to/image.jpg">
	<link rel="shortcut icon" href="<?php echo esc_url( get_template_directory_uri() ) ?>/img/favicon/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" href="<?php echo esc_url( get_template_directory_uri() ) ?>/img/favicon/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo esc_url( get_template_directory_uri() ) ?>/img/favicon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo esc_url( get_template_directory_uri() ) ?>/img/favicon/apple-touch-icon-114x114.png">
	<!-- Chrome, Firefox OS and Opera -->
	<meta name="theme-color" content="#0c6eb1">
	<!-- Windows Phone -->
	<meta name="msapplication-navbutton-color" content="#0c6eb1">
	<!-- iOS Safari -->
	<meta name="apple-mobile-web-app-status-bar-style" content="#0c6eb1">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
		<?php if (ot_get_option( 'flag_off' ) != 'off') { ?>
		<div class="nam25let"></div>
		<?php } ?>
	<div class="topper animated slideInDown">
		<div class="top container">
			<div class="row">
				<div class="col-sm-3 hidden-xs region">Город: <span>Бегород</span></div>
				<div class="col-sm-6 slogan"><?php echo ot_get_option( 'slogan_top' ); ?></div>
				<div class="col-sm-3 hidden-xs regime"><?php echo ot_get_option( 'regime' ); ?></div>
			</div>
		</div>
	</div>
	<header id="home" class="header_top animated slideInDown">
		<div class="container">
			<div class="row">
				<div class="col-sm-4 hidden-xs head_left">
					<a href="/o-kompanii/">О компании</a>
					<div class="header_phone">
						<div class="phone">
							<!-- Выводим номер телефона -->
							<span><?php echo ot_get_option( 'phone' ); ?></span>
						</div>
						<!-- Если функия включена, то вывести ссылку обратной связи -->
						<?php if (ot_get_option( 'feedback_on_off' ) != 'off') { ?>
						<a href="#feedback_form" class="callback"><?php echo ot_get_option( 'feedback_title' ); ?></a>
						<!-- форма -->
						<div id="feedback_form" class="feedback_form_popup mfp-hide white-popup-block">
							<div class="title"><?php echo ot_get_option( 'feedback_title' ); ?></div>
							<?php if (ot_get_option( 'feedback_form' )) { ?>
								<?php echo do_shortcode( ot_get_option( 'feedback_form' ) ); ?>
							<?php } ?>
						</div>
						<?php } ?>
					</div>
				</div>
				<div class="col-xs-5 col-sm-4 logo">
					<a href="/"><img src="<?php echo esc_url( get_template_directory_uri() ) ?>/img/2.png" alt=""></a>
					<!--<div class="company"><?php bloginfo('name')?></div>
					<div class="slag"><?php bloginfo('description'); ?></div>-->
				</div>
				<div class="col-xs-7 col-sm-4 head_right">
					<a class="mnu_contacts" href="/kontakty/">Контакты</a>
					<div class="search">
						<form method="get" action="">
							<input type="text" class="field" value>
							<div class="search_button"></div>
						</form>
						<div class="example">
							Например: <a href="">лоджия</a>
						</div>
					</div>
					<div class="header_phone">
						<div class="phone">
							<!-- Выводим номер телефона -->
							<span><?php echo ot_get_option( 'phone' ); ?></span>
						</div>
						<!-- Если функия включена, то вывести ссылку обратной связи -->
						<?php if (ot_get_option( 'feedback_on_off' ) != 'off') { ?>
						<a href="#feedback_form" class="callback"><?php echo ot_get_option( 'feedback_title' ); ?></a>
						<!-- форма -->
						<div id="feedback_form" class="feedback_form_popup mfp-hide white-popup-block">
							<div class="title"><?php echo ot_get_option( 'feedback_title' ); ?></div>
							<?php if (ot_get_option( 'feedback_form' )) { ?>
								<?php echo do_shortcode( ot_get_option( 'feedback_form' ) ); ?>
							<?php } ?>
						</div>
						<?php } ?>
					</div>
				</div>
			</div>
			<nav>
				<?php wp_nav_menu( array(
					'theme_location' => 'primary',
					'container' => 'ul',
					'menu_class' => 'topmenu',
				) );
				?>
				<!--<a href="#my-menu" class="hamburger hamburger--spring">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
				</a>-->
			</nav>
		</div>
	</header>
	<header id="fixed" class="header_top animated slideInDown">
		<div class="container">
			<div class="row">
				<div class="col-xs-5 col-sm-4 col-md-3 logo">
					<a href="/"><img src="<?php echo esc_url( get_template_directory_uri() ) ?>/img/1.png" alt=""></a>
					<!--<div class="company">Алюстар сервис</div>-->
				</div>
				<div class="col-sm-4 col-md-6 hidden-xs slogan"><?php echo ot_get_option( 'slogan_top' ); ?></div>
				<div class="col-xs-7 col-sm-4 col-md-3 head_right">
					<div class="regime"><?php echo ot_get_option( 'regime' ); ?></div>
					<div class="header_phone">
						<div class="phone">
							<span><?php echo ot_get_option( 'phone' ); ?></span>
						</div>
						<!-- Если функия включена, то вывести ссылку обратной связи -->
						<?php if (ot_get_option( 'feedback_on_off' ) != 'off') { ?>
						<a href="#feedback_form" class="callback"><?php echo ot_get_option( 'feedback_title' ); ?></a>
						<!-- форма -->
						<div id="feedback_form" class="feedback_form_popup mfp-hide white-popup-block">
							<div class="title"><?php echo ot_get_option( 'feedback_title' ); ?></div>
							<?php if (ot_get_option( 'feedback_form' )) { ?>
								<?php echo do_shortcode( ot_get_option( 'feedback_form' ) ); ?>
							<?php } ?>
						</div>
						<?php } ?>
					</div>
				</div>
			</div>
			<nav>
				<?php wp_nav_menu( array(
					'theme_location' => 'primary',
					'container' => 'ul',
					'menu_class' => 'topmenu',
				) );
				?>
				<!--<a href="#my-menu" class="hamburger hamburger--spring">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
				</a>-->
			</nav>
		</div>
	</header>

	<div id="content" class="site-content">
