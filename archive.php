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

			$obj = get_post_type_object( 'san-pham' );
			?>

			<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-9">
				<div class="title_pro"><img src="<?php echo get_template_directory_uri() ?>/img/mini-logo.png"> <?php echo mb_strtoupper($obj->labels->name, 'UTF-8') ?>
				</div>
				<div class="list_pro">
					<div class="row">

						<?php
						while ( have_posts() ) : the_post();
							$post = get_post();
							?>
							<?php include( locate_template( 'template-parts/item-product.php' ) ) ?>
							<?php
						endwhile;
						?>

					</div>
				</div>
			</div>
			<?php
		endif; ?>
		<!-- END article -->

		<?php
		get_template_part( 'template-parts/layout-aside' );
		?>

	</div>
</div>
<!-- /home page -->

<?php get_footer(); ?>








