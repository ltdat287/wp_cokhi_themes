<?php
get_header();

$custom_terms = get_terms( 'danh-muc-san-pham', array( 
				'orderby' => 'description',
				'order' => 'ASC'
 ) );
if ( count( $custom_terms ) ) :
	?>
	<div class="container">
		<section class="slide">
			<div id="owl-one-slide">
				<?php
				foreach ( $custom_terms as $custom_term ) {
					wp_reset_query();
					$image_slice = function_exists('z_taxonomy_image_url') ? z_taxonomy_image_url($custom_term->term_id, array( 1070, 400 ), TRUE) : 'http://placehold.it/1070x400';
					?>
					<div class="item">
						<a href="<?php echo get_term_link( $custom_term ); ?>"><img src="<?php echo $image_slice; ?>" alt="<?php echo $custom_term->name; ?>"></a>
						<p><a href="<?php echo get_term_link( $custom_term ); ?>"><?php echo $custom_term->name; ?></a>
							<br>
							<i></i></p>
					</div>
					<?php
				}
				?>
			</div>

			<script>
        $(document).ready(function () {
          $("#owl-one-slide").owlCarousel({
            autoPlay: true,
            navigation: true, // Show next and prev buttons
            pagination: true,
            slideSpeed: 300,
            paginationSpeed: 400,
            singleItem: true,
            navigationText: ['<', '>']
          });
        });
			</script>
		</section>
	</div>
	<br>

	<?php
endif;
foreach ( $custom_terms as $custom_term ) {
	wp_reset_query();
	$args = array(
		'post_type' => 'san-pham',
		'tax_query' => array(
			array(
				'taxonomy'       => 'danh-muc-san-pham',
				'field'          => 'slug',
				'terms'          => $custom_term->slug,
				'posts_per_page' => 4
			),
		),
	);

	$loop = new WP_Query( $args );
	?>

	<div class="container">
		<div class="pro_home">
			<div class="tab_1">
				<ul class="nav nav-tabs" role="tablist">
					<li class="nav-item cate_one">
						<a class="nav-link" href="<?php echo get_term_link( $custom_term ); ?>" role="tab"
						   aria-expanded="false"><img
								src="<?php echo get_template_directory_uri() ?>/img/mini-logo.png"
								alt="<?php echo $custom_term->name; ?>"><?php echo $custom_term->name; ?></a>
					</li>
					<div class="view_pro_home">
						<i>
							<a href="<?php echo get_term_link( $custom_term );; ?>">Xem tất cả <i class="fa fa-angle-right"
							                                                                      aria-hidden="true"></i>
							</a>
						</i>
					</div>
				</ul>
			</div>

			<!-- Tab panes -->
			<div class="row">
				<div class="tab-content col-sm-12">
					<div class="tab-pane active" id="id_9" role="tabpanel">
						<div class="row">

							<?php
							if ( $loop->have_posts() ) {
								while ( $loop->have_posts() ) : $loop->the_post();
									$img_src = ( get_the_post_thumbnail_url( $post, array(
										326,
										245
									) ) ) ? get_the_post_thumbnail_url( $post, array( 326, 245 ) ) : 'http://placehold.it/326x245';
									?>

									<div class="col-6 col-sm-4 col-lg-3"><a href="<?php the_permalink(); ?>"> <img
												src="<?php echo $img_src; ?>"
												alt="<?php the_title(); ?>">
											<p><?php the_title(); ?></p></a>

										<small>
											<ul></ul>
										</small>


									</div>

									<?php
								endwhile;
							}

							?>
						</div>
					</div>

				</div>
			</div>
			<script>
        $(function () {
          $('#myTab a:last').tab('show')
        })
			</script>
		</div>
	</div>

<?php } ?>

<?php
$args = array(
	'numberposts'      => 4,
	'offset'           => 0,
	'category'         => 0,
	'orderby'          => 'post_date',
	'order'            => 'DESC',
	'include'          => '',
	'exclude'          => '',
	'meta_key'         => '',
	'meta_value'       => '',
	'post_type'        => 'post',
	'post_status'      => 'publish',
	'suppress_filters' => true
);

$recent_posts = wp_get_recent_posts( $args, ARRAY_A );
if ( count( $recent_posts ) ) {

	?>

	<div class="container">
		<div class="title_home"><b><img src="<?php echo get_template_directory_uri() ?>/img/mini-logo.png" alt=""> Tin
				tức</b>
		</div>
		<div class="row">
			<?php
			foreach ( $recent_posts as $recent_post ) :
				$url = get_permalink( $recent_post['ID'] );
				$img_new = ( get_the_post_thumbnail_url( $recent_post['ID'], array(
					326,
					245
				) ) ) ? get_the_post_thumbnail_url( $recent_post['ID'], array( 326, 245 ) ) : 'http://placehold.it/326x245';
				?>
				<div class="col-sm-4 col-lg-3">
					<div class="news_home">
						<a href="<?php echo esc_attr( $url ) ?>"><img
								src="<?php echo $img_new; ?>" alt="<?php echo esc_html( $recent_post['post_title'] ) ?>">
						</a>
						<p><a
								href="<?php echo esc_attr( $url ) ?>"><?php echo esc_html( $recent_post['post_title'] ) ?></a>
						</p>
						<p>
							<small><i><?php the_time( 'l, d/m/Y' ) ?></i></small>
						</p><?php echo wp_trim_words( $recent_post['post_content'], 10 ) ?>
						<div class="view_news_home"><i><a
									href="<?php echo esc_attr( $url ) ?>"><?php _e( 'Xem thêm', 'cokhitheme' ) ?><i
										class="fa fa-angle-right"
										aria-hidden="true"></i></a></i><a
								href="<?php echo esc_attr( $url ) ?>">
							</a></div>
					</div>
				</div>

				<?php
			endforeach;
			?>

		</div>
	</div>

	<?php
}

?>

<?php
get_footer();
?>