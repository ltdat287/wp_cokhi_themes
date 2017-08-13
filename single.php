<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Luxstay_Theme
 * @since Luxstay Themes 1.0
 */
get_header(); ?>

<?php get_template_part( 'template-parts/layout-breadcumb' ) ?>

	<!-- homepage -->
<?php
while ( have_posts() ) : the_post();

	lst_set_post_views( get_the_ID() );

	/*
	 * Include the post format-specific template for the content. If you want to
	 * use this in a child theme, then include a file called called content-___.php
	 * (where ___ is the post format) and that will be used instead.
	 */
	get_template_part( 'content', get_post_format() );

	// End the loop.
endwhile;
?>

	<!-- /home page -->

<?php get_footer(); ?>