<section class="container">
	<?php
	if ( have_posts() ) :
		?>
		<div class="navigate row">
			<div class="src-count col-md-6 col-sm-6 hidden-xs">
				<?php _e( 'We found', 'lst-blog' ) ?>&nbsp;<?php echo $wp_query->found_posts; ?>&nbsp;<?php _e( 'articles',
					'lst-blog' ) ?>
			</div>
			<div class="col-md-6 col-sm-6">
				<?php lst_pagination(); ?>
			</div>
		</div>
		<hr class="margin-top-10">
		<div class="idea-art-list">
			<ul class="all-blogs">
				<?php
				while ( have_posts() ) : the_post();
					?>

					<?php
					/*
					 * Run the loop for the search to output the results.
					 * If you want to overload this in a child theme then include a file
					 * called content-search.php and that will be used instead.
					 */
					get_template_part( 'content', 'search' );
				endwhile;
				?>
			</ul>
			<div class="navigate fix-bottom row">
				<div class="col-md-12 col-sm-12 ">
					<?php lst_pagination(); ?>
				</div>
			</div>
		</div>
	<?php else : ?>
		<?php get_template_part( 'content', 'none' ); ?>
	<?php endif; ?>
</section>