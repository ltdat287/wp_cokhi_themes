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
		'limit'     => 10,
		'taxonomy'  => 'danh-muc-san-pham',
		'field'     => 'id',
		'post_type' => 'san-pham',
		'operator'  => 'IN'
	), $atts );

	extract( $args );

	$posts = get_posts( [
		'post_type'      => $post_type,
		'posts_per_page' => $limit,
		'tax_query'      => [
			'taxonomy' => $taxonomy,
			'field'    => $field,
			'terms'    => $terms,
			'operator' => $operator
		]
	] );


	$content = '';

	foreach ( $posts as $post ) {
		$img_src = ( get_the_post_thumbnail_url( $post, array( 326, 245 ) ) ) ? get_the_post_thumbnail_url( $post, array( 326, 245 ) ) : 'http://placehold.it/326x245';
		$content .= '<div class="col-6 col-sm-4 col-lg-4 padding-10"><a href="'. get_permalink( $post->ID ) .'"><img src="'. $img_src .'" alt="' . $post->post_title . '"></a><p><a href="'. get_permalink( $post->ID ) .'">' . $post->post_title . '</a></p></div>';
	}

	return $content;
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

function lst_pagination() {

	global $wp_query;

	$big = 999999999; // need an unlikely integer

	$pages = paginate_links( array(
		'base'      => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
		'format'    => '?paged=%#%',
		'current'   => max( 1, get_query_var( 'paged' ) ),
		'total'     => $wp_query->max_num_pages,
		'type'      => 'array',
		'prev_text' => __( 'Previous', 'lst-blog' ),
		'next_text' => __( 'Next', 'lst-blog' ),
		'show_all'  => true,
	) );
	if ( is_array( $pages ) ) {
		$paged = ( get_query_var( 'paged' ) == 0 ) ? 1 : get_query_var( 'paged' );
		echo '<div class="paging pull-right">';

		if ( empty( get_previous_posts_link() ) ) {
			echo '<a href="javascript:void(0)" class="unactive">' . __( 'Previous', 'lst-blog' ) . '</a>';
		}

		foreach ( $pages as $page ) {
			if ( preg_match( '/^<span/', $page ) ) {
				echo '<a href="javascript:void(0)" class="active">' . $paged . '</a>';
			} else {
				echo $page;
			}
		}

		if ( empty( get_next_posts_link() ) ) {
			echo '<a href="javascript:void(0)" class="unactive">' . __( 'Next', 'lst-blog' ) . '</a>';
		}

		echo '</div>';
	}
}

/**
 * @param $post
 * @param int $num_words
 * @param string $more
 */
function lst_the_short_excerpt( $post, $num_words = 10, $more = '' ) {
	$trimexcerpt  = apply_filters( 'get_the_excerpt', $post->post_excerpt, $post );
	$shortexcerpt = wp_trim_words( $trimexcerpt, $num_words, $more );

	echo $shortexcerpt;
}

/**
 * Add new image size for listing blog
 */
add_image_size( 'image-blog-277-151', 277, 151, true );

/**
 * Add new image size for listing product
 */
add_image_size( 'image-product-326-245', 326, 245, true );

?>