<div id="post-<?php the_ID(); ?>" <?php post_class( 'feat-art text-left' ); ?>>
	<?php
	$category = get_the_category( $post->ID );
	//get the first category
	$name   = $category[0]->cat_name;
	$cat_id = get_cat_ID( $name );
	$link   = get_category_link( $cat_id );
	?>
	<figure class="thumb"><a href="<?php the_permalink() ?>"><img src="<?php echo get_the_post_thumbnail_url(); ?>"></a></figure>
	<div class="metadata"><a href="<?php echo $link; ?>"><?php echo $name; ?></a> -
		<span><?php the_time( 'd.m.Y' ); ?></span></div>
	<h3 class="title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
	<div class="desc"><?php the_excerpt(); ?></div>
</div>
