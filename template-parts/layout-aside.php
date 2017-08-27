<div class="col-sm-3">
	<div class="title_menu"><img src="<?php echo get_template_directory_uri() ?>/img/mini-logo.png"> Danh mục sản phẩm
	</div>
	<div class="menuvertical">
		<ul>

			<?php $wcatTerms = get_terms( 'danh-muc-san-pham', array( 'hide_empty' => 0, 'parent' => 0 ) );

			foreach ( $wcatTerms as $wcatTerm ) :
				?>


				<li class="items-menu ">
					<a href="<?php echo get_term_link( $wcatTerm->slug, $wcatTerm->taxonomy ); ?>">
						<i class="fa fa-caret-right" aria-hidden="true"></i> <?php echo $wcatTerm->name; ?></a>
					<div class="togger-menu-sub-2"><i class="fa fa-chevron-down" aria-hidden="true"
					                                  style=" margin-right: 10px; "></i></div>
					<ul class="sub-menu-chid-2" style="background: #f4f4f4;">
						<?php
						$wsubargs = array(
							'hierarchical'     => 1,
							'show_option_none' => '',
							'hide_empty'       => 0,
							'parent'           => $wcatTerm->term_id,
							'taxonomy'         => 'danh-muc-san-pham'
						);
						$wsubcats = get_categories( $wsubargs );
						foreach ( $wsubcats as $wsc ):
							?>
							<li class=""><a href="<?php echo get_term_link( $wsc->slug, $wsc->taxonomy ); ?>"><i
										class="fa fa-caret-right" aria-hidden="true"
										style="color:#888"></i> <?php echo $wsc->name; ?></a></li>
							<?php
						endforeach;
						?>
					</ul>
				</li>

				<?php
			endforeach;
			?>

		</ul>
	</div>
	<script>
    $(document).ready(function () {
      $('.togger-menu-sub-2').click(function () {
        $(this).parent().find('.sub-menu-chid-2:first').toggle();
      })
    })
	</script>

	<?php $the_query = new WP_Query( 'posts_per_page=5' ); ?>

	<?php if ( $the_query->have_posts() ) : ?>

		<div class="title_menu"><img src="<?php echo get_template_directory_uri() ?>/img/mini-logo.png"> Tin tức mới</div>

		<div class="list_new">

			<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

				<?php
				$img_src = ( get_the_post_thumbnail_url( $post, array(
					126,
					84
				) ) ) ? get_the_post_thumbnail_url( $post, array( 126, 84 ) ) : 'http://placehold.it/126x84';
				?>

				<div class="new_art">
					<div class="row">
						<div class="col-4 col-sm-5 img_art"><a
								href="<?php the_permalink() ?>"><img
									src="<?php echo $img_src; ?>" alt="<?php the_title(); ?>"></a>
						</div>
						<div class="col-8 col-sm-7 img_art"><a
								href="<?php the_permalink() ?>"><?php echo lst_the_short_excerpt( $post, 5, '...' ); ?></a>
							<small><i><?php the_time( 'd/m/Y' ) ?></i></small>
						</div>
					</div>
				</div>

				<?php
			endwhile;
			?>
		</div>

	<?php endif;
	wp_reset_postdata();
	?>

</div>