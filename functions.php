<?php
/**
 * alustar functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package alustar
 */

add_filter( 'ot_theme_mode', '__return_true' );

function theme_options_parent($parent) {
	$parent = '';
	return $parent;
};
add_filter( 'ot_theme_options_parent_slug', 'theme_options_parent',20 );

require( trailingslashit( get_template_directory() ) . 'option-tree/ot-loader.php' );
require( trailingslashit( get_template_directory() ) . 'template-parts/meta-boxes.php');
require( trailingslashit( get_template_directory() ) . 'template-parts/theme-options.php');

function alstr_setup() {

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	add_theme_support( 'title-tag' );

	add_theme_support( 'post-thumbnails' );

	// Регистрация меню.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'alstr' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	add_theme_support( 'custom-logo', array(
		'height'      => 250,
		'width'       => 250,
		'flex-width'  => true,
		'flex-height' => true,
	) );

};

add_action( 'after_setup_theme', 'alstr_setup' );

function alstr_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Область виджетов'),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Перетащите сюда виджеты.'),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'alstr_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function alstr_scripts() {
	wp_enqueue_style( 'alstr-style', get_stylesheet_uri() );

	wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/scripts.min.js', array(), '', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'alstr_scripts' );

require get_template_directory() . '/inc/custom-header.php';

require get_template_directory() . '/inc/template-tags.php';

require get_template_directory() . '/inc/template-functions.php';

require get_template_directory() . '/inc/customizer.php';

if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

// Через фильтр добавляем класс active в меню.
add_filter( 'nav_menu_css_class', 'alstr_filter_current_item_menu_header' );
function alstr_filter_current_item_menu_header ($classes) {
	if (in_array('current-menu-item', $classes)) {
		$classes[] = 'active';
	}
	return $classes;
}

add_filter( 'get_the_archive_title', 'artabr_remove_name_cat' );
function artabr_remove_name_cat( $title ){
	if ( is_category() ) {
		$title = single_cat_title( '', false );
	} elseif ( is_tag() ) {
		$title = single_tag_title( '', false );
	}
	return $title;
}

// pagination
function oriolo_pagination($pages = '', $range = 2)
{
	$showitems = ($range * 2)+1;
	global $paged;
	if(empty($paged)) $paged = 1;
	if($pages == '')
	{
		global $wp_query;
		$pages = $wp_query->max_num_pages;
		if(!$pages)
		{
			$pages = 1;
		}
	}
	if(1 != $pages)
	{ 
		echo "<div class='clearfix navigation-top'><div class='pagination'><span> ". __('Страницы:', 'existentia') ." </span>";
		if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo;</a>";
		if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo;</a>";
		for ($i=1; $i <= $pages; $i++)
		{
			if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
			{
				echo ($paged == $i)? "<span class='current'>".$i."</span>":"<a href='".get_pagenum_link($i)."' class='inactive' >".$i."</a>";
			}
		}
		if ($paged < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($paged + 1)."'>&rsaquo;</a>";
		if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>&raquo;</a>";
		echo "</div></div>\n";
	}
}

/* Отключаем админ панель для всех пользователей. */
	show_admin_bar(false);


