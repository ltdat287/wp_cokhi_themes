<?php
// Register Custom Navigation Walker
require_once( 'wp-bootstrap-navwalker.php' );

/**
 * Create HTML list of nav menu items.
 * Replacement for the native Walker, using the description.
 *
 * @see    https://wordpress.stackexchange.com/q/14037/
 * @author toscho, http://toscho.de
 */
class Main_Menu_Walker extends WP_Bootstrap_Navwalker {
	/**
	 * Start the element output.
	 *
	 * @param  string $output Passed by reference. Used to append additional content.
	 * @param  object $item Menu item data object.
	 * @param  int $depth Depth of menu item. May be used for padding.
	 * @param  array|object $args Additional strings. Actually always an
	 * instance of stdClass. But this is WordPress.
	 *
	 * @return void
	 */
	function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
		if ( empty( $output ) ) {
			$output .= '<li class="home-mobile"><a class="" href="http://cokhithudo.vn/"><i class="fa fa-home" aria-hidden="true"></i></a></li>';
		}

		parent::start_el( $output, $item, $depth, $args );
	}
}

if ( ! function_exists( 'dlt_themes_setup' ) ) :
	function dlt_themes_setup() {

		/*
		*   Cho phép quản lý title tự động bằng WordPress
		*   Bạn sẽ không cần phải thêm các thể title
		*   vào trong file template nữa.
		*/
		add_theme_support( 'title-tag' );

		/*
		*   Cho phép ảnh đại diện cho bài viết;
		*/
		add_theme_support( 'post-thumbnails' );

		/*
		*   Đăng ký một vị trí menu vào website.
		*   Tên menu: top-menu
		*   Chữ hiển thị trong admin: Top menu
		*/
		register_nav_menu( 'top-menu', 'Top menu' );
	}
endif;
add_action( 'after_setup_theme', 'dlt_themes_setup' );

function dlt_themes_styles_setup() {

	wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/bower_components/bootstrap/dist/css/bootstrap.css' );
	wp_enqueue_style( 'owl_carousel_css', get_template_directory_uri() . '/bower_components/OwlCarousel/owl-carousel/owl.carousel.css' );
	wp_enqueue_style( 'owl_theme_css', get_template_directory_uri() . '/bower_components/OwlCarousel/owl-carousel/owl.theme.css' );
	wp_enqueue_style( 'font-awesome_css', get_template_directory_uri() . '/bower_components/font-awesome/css/font-awesome.css' );
	wp_enqueue_style( 'custom_css', get_template_directory_uri() . '/css/custom.css' );
	wp_enqueue_style( 'responsive_css', get_template_directory_uri() . '/css/responsive.css' );
	wp_enqueue_style( 'dlt_themes_styles_setup', get_template_directory_uri() . '/style.css' );
}

add_action( 'wp_enqueue_scripts', 'dlt_themes_styles_setup' );

function dlt_themes_js_setup() {

	global $wp_scripts;

	wp_enqueue_script( 'jquery_js', get_template_directory_uri() . '/bower_components/jQuery/dist/jquery.js' );
	wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/bower_components/bootstrap/dist/js/bootstrap.min.js' );
	wp_enqueue_script( 'owl_carousel_js', get_template_directory_uri() . '/bower_components/OwlCarousel/owl-carousel/owl.carousel.min.js' );
	wp_enqueue_script( 'custom_js', get_template_directory_uri() . '/js/customs.js' );
	wp_enqueue_script( 'wow_js', get_template_directory_uri() . '/bower_components/wow/dist/wow.min.js' );

}

add_action( 'wp_enqueue_scripts', 'dlt_themes_js_setup' );

function lst_products( $atts ) {
	$args = shortcode_atts( array(
		'limit'    => 10,
		'taxonomy' => 'post_group',
		'field'    => 'popular-articles'
	), $atts );

	extract( $args );

	$posts = get_posts( [
		'posts_per_page' => $limit,
		'tax_query'      => [
			'taxonomy' => $taxonomy,
			'field'    => $field
		]
	] );

	var_dump($posts); die;
}

/**
 * @return string
 */
function lst_posts( $atts ) {
	$args = shortcode_atts( array(
		'limit'    => 10,
		'taxonomy' => 'post_group',
		'field'    => 'popular-articles'
	), $atts );
	extract( $args );

	$posts = get_posts( [
		'posts_per_page' => $limit,
		'tax_query'      => [
			'taxonomy' => $taxonomy,
			'field'    => $field
		]
	] );

	$content = '';

	foreach ( $posts as $post ) {
		$content .= '<p><i class="fa fa-long-arrow-right" aria-hidden="true" style=" color: #41ade5; "></i><a href="' . get_permalink( $post->ID ) . '">' . $post->post_title . '</a> - <i>' . get_the_date( 'd/m/Y' ) . '</i></p>';
	}

	return $content;
}

add_shortcode( 'lst_posts', 'lst_posts' );

/*
 * Set post views count using post meta
 */
function lst_set_post_views( $postID ) {
	$countKey = 'post_views_count';
	$count    = get_post_meta( $postID, $countKey, true );
	if ( $count == '' ) {
		$count = 0;
		delete_post_meta( $postID, $countKey );
		add_post_meta( $postID, $countKey, '0' );
	} else {
		$count ++;
		update_post_meta( $postID, $countKey, $count );
	}
}
?>