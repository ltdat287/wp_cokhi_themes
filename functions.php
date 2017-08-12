<?php
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
?>