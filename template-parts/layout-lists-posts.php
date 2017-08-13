<div class="clearfix">
	<div class="listing-meta">
		<div class="row">
			<div class="result col-md-4">We found <?php echo $wp_query->found_posts; ?>
				articles
			</div>
			<div class="pager-list  col-md-8">
				<?php lst_pagination(); ?>
			</div>
		</div>
	</div><!--meta-->
	<ul class="blog-list ">

		<?php
		while ( have_posts() ) : the_post();
			$post = get_post();
			?>
			<?php include( locate_template( 'template-parts/item-post.php' ) ) ?>
			<?php
		endwhile;
		?>

	</ul>
	<div class="listing-meta bottom-paging">
		<div class="row">

			<div class="pager-list col-md-12">
				<?php lst_pagination(); ?>
			</div>
		</div>
	</div><!--meta-->
</div>