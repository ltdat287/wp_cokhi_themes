<?php
$thumbnail = get_term_thumbnail_id( $arr_travel_ideas[ $index ]->term_id );
$thumbnail = $thumbnail ? wp_get_attachment_image_url( $thumbnail, 'full' ) : '';
?>

<li>
	<a href="<?php echo get_tag_link( $arr_travel_ideas[ $index ] ) ?>">
		<figure class="thumb" style="background-image: url('<?php echo $thumbnail ?>')">
			<figcaption class="title"><span><?php echo $arr_travel_ideas[ $index ]->name ?></span></figcaption>
		</figure>
	</a>
</li>