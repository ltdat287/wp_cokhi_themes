<?php
$url = get_permalink( $post );
?>
<div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 pro">
	<a href="<?php echo esc_attr( $url ) ?>">
		<?php
		$img_src = ( get_the_post_thumbnail_url( $post, array( 326, 245 ) ) ) ? get_the_post_thumbnail_url( $post, array( 326, 245 ) ) : 'http://placehold.it/326x245';
		?>
		<img src="<?php echo $img_src; ?>" alt="<?php echo esc_html( $post->post_title ); ?>"></a>
	<p><a href="<?php echo esc_attr( $url ) ?>"><?php echo esc_html( $post->post_title ); ?></a></p>
	<small>
		<ul></ul>
	</small>

</div>