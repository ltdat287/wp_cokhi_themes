<?php
/**
 * Template Name: Discover Viet Nam
 */
?>

<?php get_header(); ?>

<?php get_template_part( 'template-parts/layout-breadcumb' ) ?>

<!-- homepage -->
<div class="container">
	<div class="row">

		<?php
		if ( have_posts() ) :

			include( locate_template( 'template-parts/layout-lists-posts.php' ) );

		endif; ?>
		<!-- END article -->

		<?php
		get_template_part( 'template-parts/layout-aside' );
		?>

	</div>
</div>
<!-- /home page -->

<?php get_footer(); ?>


