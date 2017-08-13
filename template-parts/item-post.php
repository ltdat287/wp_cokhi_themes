<?php
$url = get_permalink( $post );
?>

<li class="clearfix">
	<a href="<?php echo esc_attr( $url ) ?>" class="photo">
		<?php
		$img_src = ( has_post_thumbnail() ) ? get_the_post_thumbnail_url( $post,
			array( 290, 195 ) ) : 'http://placehold.it/290x195';
		?>
		<figure class="thumb"><img src="<?php echo $img_src; ?>">
			<figcaption><span class="view-more"><?php _e( 'View more', 'lst-blog' ) ?></span></figcaption>
		</figure>
	</a>
	<div class="info ">
		<h3 class="title"><a href="<?php echo esc_attr( $url ); ?>"><?php echo esc_html( $post->post_title ); ?></a></h3>
		<div class="desc"><?php lst_the_short_excerpt( $post, 50 ) ?></div>
	</div>
</li>