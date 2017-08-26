<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Luxstay_Theme
 * @since Luxstay Themes 1.0
 */
get_header(); ?>

<?php get_template_part( 'template-parts/layout-breadcumb' ) ?>

<!-- homepage -->
<?php
while ( have_posts() ) : the_post();

	lst_set_post_views( get_the_ID() );

	/*
	 * Include the post format-specific template for the content. If you want to
	 * use this in a child theme, then include a file called called content-___.php
	 * (where ___ is the post format) and that will be used instead.
	 */
//	var_dump(get_post_meta( $post->ID, 'wpcf-anh-san-pham', false )); die;


	?>

	<div class="container">
		<div class="row">
			<div class="col-sm-9 product">

				<div class="row">
					<div class="col-sm-12 slide_pro">
						<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/slide/jssor.css">
						<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/slide/magnific-popup.css">
						<script src="<?php echo get_template_directory_uri() ?>/js/slide/jquery.magnific-popup.min.js"></script>
						<script src="<?php echo get_template_directory_uri() ?>/js/slide/jssor.slider-22.2.16.mini.js"></script>
						<div id="jssor_1"
						     style="position:relative;margin:0 auto;margin-left:-5px;margin-top:5px;top:0px;left:0px;width:600px;height:450px;overflow:hidden;visibility:hidden;">
							<!-- Loading Screen -->
							<div data-u="loading"
							     style="position:absolute;top:0px;left:0px;background-color:rgba(0,0,0,0.7);">
								<div
									style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
								<div
									style="position:absolute;display:block;background:url('<?php echo get_template_directory_uri() ?>/img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
							</div>
							<div class="image-link" data-u="slides"
							     style="cursor:default;position:relative;top:0px;left:0px;width:600px;height:450px;">
								<?php

								$product_images = get_post_meta( $post->ID, 'wpcf-anh-san-pham', false );

								if ( count( $product_images ) ) :

									foreach ( $product_images as $image ) :
										?>

										<div>
											<a href="<?php echo $image ?>">
												<img data-u="image" src="<?php echo $image ?>"/>
												<img data-u="thumb" src="<?php echo $image ?>"/>
											</a>

										</div>

										<?php
									endforeach;

								endif;
								?>
							</div>
							<!-- Thumbnail Navigator -->
							<div data-u="thumbnavigator" class="jssort03"
							     style="position:absolute;left:0px;bottom:0px;width:600px;height:60px;"
							     data-autocenter="1">
								<div
									style="position:absolute;top:0;left:0;width:100%;height:100%;background-color:#000;filter:alpha(opacity=30.0);opacity:0.3;"></div>
								<!-- Thumbnail Item Skin Begin -->
								<div data-u="slides" style="cursor: default;">
									<div data-u="prototype" class="p">
										<div class="w">
											<div data-u="thumbnailtemplate" class="t"></div>
										</div>
										<div class="c"></div>
									</div>
								</div>
								<!-- Thumbnail Item Skin End -->
							</div>
							<!-- Arrow Navigator -->
							<span data-u="arrowleft" class="jssora02l"
							      style="top:0px;left:8px;width:55px;height:55px;"
							      data-autocenter="2"></span>
							<span data-u="arrowright" class="jssora02r"
							      style="top:0px;right:8px;width:55px;height:55px;"
							      data-autocenter="2"></span>
						</div>

						<script type="text/javascript">
              $(document).ready(function () {
                $('.image-link').magnificPopup({
                  delegate: 'a',
                  type: 'image',
                  tLoading: 'Loading image #%curr%...',
                  mainClass: 'mfp-img-mobile',
                  gallery: {
                    enabled: true,
                    navigateByImgClick: true,
                    preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
                  },
                  image: {
                    tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
                    titleSrc: function (item) {
                      return '';
                    }
                  },
                  callbacks: {
                    open: function () {
                      setInterval(function () {
                        $.magnificPopup.instance.next();
                      }, 10000);
                    }
                  }
                });
                var jssor_1_options = {
                  $AutoPlay: true,
                  $ArrowNavigatorOptions: {
                    $Class: $JssorArrowNavigator$
                  },
                  $ThumbnailNavigatorOptions: {
                    $Class: $JssorThumbnailNavigator$,
                    $Cols: 6,
                    $SpacingX: 3,
                    $SpacingY: 3,
                    $Align: 260
                  }
                };
                var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
                /*responsive code begin*/

                /*remove responsive code if you don't want the slider scales while window resizing*/
                function ScaleSlider() {
                  var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                  if (refSize) {
                    refSize = Math.min(refSize, 780);
                    jssor_1_slider.$ScaleWidth(refSize);
                  }
                  else {
                    window.setTimeout(ScaleSlider, 30);
                  }
                }

                ScaleSlider();
                $(window).bind("load", ScaleSlider);
                $(window).bind("resize", ScaleSlider);
                $(window).bind("orientationchange", ScaleSlider);
                /*responsive code end*/
              });
						</script>
					</div>
					<br />
					<div class="col-sm-12 detail_pro">

						<?php
						echo get_post_meta( $post->ID, 'wpcf-mo-ta-san-pham', true );
						?>

						<div class="contact_pro">
							<b>024 2240 8989</b>
							<div class="pro_contact">
								<button class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Liên hệ tư vấn
								</button>
							</div>
							<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"
							     aria-labelledby="myLargeModalLabel" aria-hidden="true">
								<div class="modal-dialog modal-lg">
									<div class="modal-content">
										<p>
											THÔNG TIN KHÁCH HÀNG
										</p>
										<link href="http://cokhithudo.vn/skin/frontend/css/theme-default.css" rel="stylesheet">
										<script type="text/javascript"
										        src="http://cokhithudo.vn/skin/frontend/js/jquery.form-validator.min.js"></script>
										<div class="forn-contact">
											<form id="form-contact-product" action="http://cokhithudo.vn/contact-product"
											      class="has-validation-callback">
												<div class="form-group">
													<div class="row">
														<div class="col-sm-3 text-right">
															Họ tên <font style="color: #ff0000">(*)</font>
														</div>
														<div class="col-sm-9">
															<input type="text" class="form-control" name="name" placeholder=""
															       data-validation="required">
														</div>
													</div>
												</div>
												<div class="form-group">
													<div class="row">
														<div class="col-sm-3 text-right">
															Điện thoại <font style="color: #ff0000">(*)</font>
														</div>
														<div class="col-sm-9">
															<input type="text" class="form-control" name="phone" placeholder=""
															       data-validation="required,length,number" data-validation-allowing="float"
															       data-validation-length="10-20">
														</div>
													</div>
												</div>
												<div class="form-group">
													<div class="row">
														<div class="col-sm-3 text-right">
															Địa chỉ Email <font style="color: #ff0000">(*)</font>
														</div>
														<div class="col-sm-9">
															<input type="text" class="form-control" name="email" placeholder=""
															       data-validation="required,email">
														</div>
													</div>
												</div>
												<div class="form-group">
													<div class="row">
														<div class="col-sm-3 text-right">
															Ghi chú
														</div>
														<div class="col-sm-9">
															<textarea class="form-control" rows="3" name="content" placeholder=""
															          data-validation="required"></textarea>
														</div>
													</div>
													<input type="hidden" name="id_sp" value="134">
													<button type="submit" class="btn btn-danger btn-send" style="cursor: pointer">Gửi đi</button>
													<script>
                            $(document).ready(function () {
                              $.validate({
                                form: '#form-contact-product',
                                lang: 'vi',
                                modules: 'security',
                                onSuccess: function (form) {
                                  var base = $('body').attr('data-base');
                                  $.ajax({
                                    type: "POST",
//                            cache: false,
                                    url: base + 'contact-product',
                                    data: $('#form-contact-product').serialize(),
                                    success: function (data, status) {
                                      $('#form-contact-product').html(data);
//                                    alert(base);
                                    }
                                  });
                                  return false; // Will stop the submission of the form
                                },
                              });
                            })
													</script>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="tab_product col-sm-12">
						<div class="tab_pro">
							<ul class="nav nav-tabs" role="tablist">
								<li class="nav-item">
									<a class="nav-link active" data-toggle="tab" href="#tab_1" role="tab"> THÔNG TIN CHI TIẾT</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" data-toggle="tab" href="#tab_2" role="tab"> THÔNG SỐ KỸ THUẬT</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" data-toggle="tab" href="#tab_3" role="tab">ĐÁNH GIÁ NHẬN XÉT</a>
								</li>
							</ul>
						</div>
						<!-- Tab panes -->
						<div class="info_pro">
							<div class="tab-content">
								<div class="tab-pane active" id="tab_1" role="tabpanel">

									<?php the_content(); ?>

								</div>
								<div class="tab-pane" id="tab_2" role="tabpanel">
								</div>
								<div class="tab-pane" id="tab_3" role="tabpanel">
									<div class="fb-comments fb_iframe_widget"
									     data-href="http://cokhithudo.vn/sua-chua-cai-tao-cac-cong-trinh-co-khi" data-colorscheme="light"
									     data-width="770" data-numposts="10" data-order-by="reverse_time" fb-xfbml-state="rendered">
							<span style="height: 759px; width: 770px;">
							<iframe id="f28875ae954d328" name="f2e24da0a6e3054" scrolling="no" title="Facebook Social Plugin"
							        class="fb_ltr"
							        src="https://www.facebook.com/plugins/comments.php?api_key=&amp;channel_url=http%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2FXBwzv5Yrm_1.js%3Fversion%3D42%23cb%3Df2a92e7f6335cb4%26domain%3Dcokhithudo.vn%26origin%3Dhttp%253A%252F%252Fcokhithudo.vn%252Ff23b522d75d55b4%26relation%3Dparent.parent&amp;colorscheme=light&amp;href=http%3A%2F%2Fcokhithudo.vn%2Fsua-chua-cai-tao-cac-cong-trinh-co-khi&amp;locale=vi_VN&amp;numposts=10&amp;order_by=reverse_time&amp;sdk=joey&amp;skin=light&amp;version=v2.8&amp;width=770"
							        style="border: none; overflow: hidden; height: 759px; width: 770px;">
							</iframe>
							</span>
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
				</div>

				<script>$('#myTab a').click(function (e) {
            e.preventDefault()
            $(this).tab('show')
          })</script>
				<br>
				<div class="title_pro">
					<img src="http://cokhithudo.vn/skin/frontend/img/splq.png"> SẢN PHẨM LIÊN QUAN
				</div>
				<div class="pro_more">
					<div class="row row-10">
						<?php

						$term_tax_ids = get_the_terms( get_the_ID(), 'danh-muc-san-pham' );
						$terms        = array();

						foreach ( $term_tax_ids as $term_tax_id ) {
							array_push( $terms, $term_tax_id->term_id );
						}

						echo lst_products( [
							'terms' => $terms
						] );

						?>
					</div>
				</div>

			</div>

			<?php
			get_template_part( 'template-parts/layout-aside' );
			?>

		</div>
	</div>

	<?php
	// End the loop.
endwhile;
?>

<!-- /home page -->

<?php get_footer(); ?>
