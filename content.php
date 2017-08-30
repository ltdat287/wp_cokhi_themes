<div class="container">
	<div class="row">
		<div class="col-sm-9 list_art">

			<?php the_content(); ?>


			<div class="art_more">
				<b><img src="<?php echo get_template_directory_uri() ?>/img/mini-logo.png" alt="">Bài viết liên quan</b>

				<?php
				$cat = get_the_category();

				echo lst_posts( [
					'taxonomy' => 'category'
				] );
				?>
			</div>

		</div>

		<?php
		get_template_part( 'template-parts/layout-aside' );
		?>

	</div>
</div>