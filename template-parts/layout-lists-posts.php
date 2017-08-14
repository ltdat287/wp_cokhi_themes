<div class="col-sm-9 list_art">

	<?php
	while ( have_posts() ) : the_post();
		$post = get_post();
		?>
		<?php include( locate_template( 'template-parts/item-post.php' ) ) ?>
		<?php
	endwhile;
	?>

	<div class="listing-meta bottom-paging">
		<div class="row">

			<div class="pager-list col-md-12">
				<?php lst_pagination(); ?>
			</div>
		</div>
	</div><!--meta-->

</div>