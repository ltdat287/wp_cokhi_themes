<?php
$url = get_permalink( $post );
?>
<div class="art_new">
	<div class="row">
		<div class="col-sm-4"><a href="<?php echo esc_attr( $url ) ?>">
				<?php
				$img_src = ( get_the_post_thumbnail_url( $post, array( 277, 151 ) ) ) ? get_the_post_thumbnail_url( $post, array( 277, 151 ) ) : 'http://placehold.it/277x151';
				?>
				<img src="<?php echo $img_src; ?>" alt="<?php echo esc_html( $post->post_title ); ?>"></a>
		</div>
		<div class="col-sm-8"><b><a href="<?php echo esc_attr( $url ) ?>"><?php echo esc_html( $post->post_title ); ?></a></b>
			<p><i class="fa fa-calendar" aria-hidden="true" style="color: #ccc"></i>
				<i><?php the_time( 'l, d/m/Y' ) ?></i></p>
			<p><?php lst_the_short_excerpt( $post, 50 ) ?><</p>
			<div class="view_art"><a href="<?php echo esc_attr( $url ) ?>"><?php _e( 'View more', 'cokhitheme' ) ?><i class="fa fa-caret-right" aria-hidden="true"></i></a></div>
		</div>
	</div>
</div>