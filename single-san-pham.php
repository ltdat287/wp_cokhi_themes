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
	?>

	<?php

	var_dump(get_terms('danh-muc-san-pham')); die;

	lst_products( [
		'taxonomy' => 'danh-muc-san-pham'
	] );
	?>

	<div class="container">
		<div class="row">
			<div class="col-sm-9 product">

				<div class="row">
					<div class="col-sm-6 slide_pro">
						<link rel="stylesheet" href="http://cokhithudo.vn/skin/frontend/slide/jssor.css">
						<link rel="stylesheet" href="http://cokhithudo.vn/skin/frontend/slide/magnific-popup.css">
						<script src="http://cokhithudo.vn/skin/frontend/slide/jquery.magnific-popup.min.js"></script>
						<script src="http://cokhithudo.vn/skin/frontend/slide/jssor.slider-22.2.16.mini.js"></script>
						<div id="jssor_1"
						     style="position: relative; margin: 5px auto 0px -5px; top: 0px; left: 0px; width: 380px; height: 285px; overflow: hidden; visibility: visible;"
						     jssor-slider="true">
							<!-- Loading Screen -->
							<!-- Thumbnail Navigator -->
							<!-- Arrow Navigator -->
							<div
								style="position: absolute; top: 0px; left: 0px; width: 600px; height: 450px; transform-origin: 0px 0px 0px; transform: scale(0.633333);">
								<div class=""
								     style="position: relative; margin: 5px auto 0px -5px; top: 0px; left: 0px; width: 600px; height: 450px; overflow: visible; visibility: visible; display: block;">
									<div data-u="loading"
									     style="position: absolute; top: 0px; left: 0px; background-color: rgba(0, 0, 0, 0.7); width: 600px; height: 450px; display: none;">
										<div
											style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;">
										</div>
										<div
											style="position:absolute;display:block;background:url('http://cokhithudo.vn/skin/frontend/img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;">
										</div>
									</div>
									<div class="image-link" data-u="slides"
									     style="cursor: default; position: absolute; top: 0px; left: 0px; width: 600px; height: 450px; z-index: 0;">
										<div
											style="position: absolute; z-index: 0; pointer-events: none; transform: translate3d(-600px, 0px, 0px);">
										</div>
									</div>
									<div class="image-link" data-u="slides"
									     style="cursor: default; position: absolute; top: 0px; left: 0px; width: 600px; height: 450px; z-index: 0; overflow: hidden;">
										<div
											style="top: 0px; left: 0px; width: 600px; height: 450px; position: absolute; background-color: rgb(0, 0, 0); opacity: 0; display: none;">
										</div>
										<div
											style="z-index: 1; top: 0px; left: 0px; width: 600px; height: 450px; position: absolute; overflow: hidden; transform: translate3d(-600px, 0px, 0px);">
											<a
												href="upload/images/danh-muc/san-pham/Gia-cong-co-khi/sua-chua-cai-tao/13246429_1623314764662183_674132437533595119_o.jpg"
												style="display: block; top: 0px; left: 0px; width: 600px; height: 450px; position: relative; z-index: 1; margin-top: 0px; margin-left: 0px; transform: translate3d(0px, 0px, 0px); pointer-events: all;">
												<img data-u="image"
												     src="upload/images/danh-muc/san-pham/Gia-cong-co-khi/sua-chua-cai-tao/13246429_1623314764662183_674132437533595119_o.jpg"
												     border="0"
												     style="top: 0px; left: 0px; width: 600px; height: 450px; z-index: 1; margin-top: 0px; margin-left: 0px; transform: translate3d(0px, 0px, 0px); position: absolute;">
												<img data-u="thumb"
												     src="upload/images/danh-muc/san-pham/Gia-cong-co-khi/sua-chua-cai-tao/13246429_1623314764662183_674132437533595119_o.jpg"
												     style="z-index: 1; margin-top: 0px; margin-left: 0px; transform: translate3d(0px, 0px, 0px);">
											</a>
											<div data-u="loading"
											     style="position: absolute; top: 0px; left: 0px; background-color: rgba(0, 0, 0, 0.7); width: 600px; height: 450px; z-index: 1000; display: none;">
												<div
													style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;">
												</div>
												<div
													style="position:absolute;display:block;background:url('http://cokhithudo.vn/skin/frontend/img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;">
												</div>
											</div>
										</div>
										<div
											style="z-index: 1; top: 0px; left: 0px; width: 600px; height: 450px; position: absolute; overflow: hidden; transform: translate3d(-600px, 0px, 0px);">
											<a
												href="upload/images/danh-muc/san-pham/Gia-cong-co-khi/sua-chua-cai-tao/14255817-industrial-metal-staircase-for-emergency-escape-Stock-Photo.jpg"
												style="display: block; top: 0px; left: 0px; width: 600px; height: 450px; position: relative; z-index: 1; margin-top: 0px; margin-left: 0px; transform: translate3d(0px, 0px, 0px); pointer-events: all;">
												<img data-u="image"
												     src="upload/images/danh-muc/san-pham/Gia-cong-co-khi/sua-chua-cai-tao/14255817-industrial-metal-staircase-for-emergency-escape-Stock-Photo.jpg"
												     border="0"
												     style="top: 0px; left: 0px; width: 600px; height: 450px; z-index: 1; margin-top: 0px; margin-left: 0px; transform: translate3d(0px, 0px, 0px); position: absolute;">
												<img data-u="thumb"
												     src="upload/images/danh-muc/san-pham/Gia-cong-co-khi/sua-chua-cai-tao/14255817-industrial-metal-staircase-for-emergency-escape-Stock-Photo.jpg"
												     style="z-index: 1; margin-top: 0px; margin-left: 0px; transform: translate3d(0px, 0px, 0px);">
											</a>
											<div data-u="loading"
											     style="position: absolute; top: 0px; left: 0px; background-color: rgba(0, 0, 0, 0.7); width: 600px; height: 450px; z-index: 1000; display: none;">
												<div
													style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;">
												</div>
												<div
													style="position:absolute;display:block;background:url('http://cokhithudo.vn/skin/frontend/img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;">
												</div>
											</div>
										</div>
										<div
											style="z-index: 1; top: 0px; left: 0px; width: 600px; height: 450px; position: absolute; overflow: hidden; transform: translate3d(-600px, 0px, 0px);">
											<a
												href="upload/images/danh-muc/san-pham/Gia-cong-co-khi/sua-chua-cai-tao/17091069-modern-fire-escape-and-staircase-Stock-Photo.jpg"
												style="display: block; top: 0px; left: 0px; width: 600px; height: 450px; position: relative; z-index: 1; margin-top: 0px; margin-left: 0px; transform: translate3d(0px, 0px, 0px); pointer-events: all;">
												<img data-u="image"
												     src="upload/images/danh-muc/san-pham/Gia-cong-co-khi/sua-chua-cai-tao/17091069-modern-fire-escape-and-staircase-Stock-Photo.jpg"
												     border="0"
												     style="top: 0px; left: 0px; width: 600px; height: 450px; z-index: 1; margin-top: 0px; margin-left: 0px; transform: translate3d(0px, 0px, 0px); position: absolute;">
												<img data-u="thumb"
												     src="upload/images/danh-muc/san-pham/Gia-cong-co-khi/sua-chua-cai-tao/17091069-modern-fire-escape-and-staircase-Stock-Photo.jpg"
												     style="z-index: 1; margin-top: 0px; margin-left: 0px; transform: translate3d(0px, 0px, 0px);">
											</a>
											<div data-u="loading"
											     style="position: absolute; top: 0px; left: 0px; background-color: rgba(0, 0, 0, 0.7); width: 600px; height: 450px; z-index: 1000; display: none;">
												<div
													style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;">
												</div>
												<div
													style="position:absolute;display:block;background:url('http://cokhithudo.vn/skin/frontend/img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;">
												</div>
											</div>
										</div>
										<div
											style="z-index: 1; top: 0px; left: 0px; width: 600px; height: 450px; position: absolute; overflow: hidden; transform: translate3d(-600px, 0px, 0px);">
											<a href="upload/images/danh-muc/san-pham/Gia-cong-co-khi/sua-chua-cai-tao/Anderson-015.jpg"
											   style="display: block; top: 0px; left: 0px; width: 600px; height: 450px; position: relative; z-index: 1; margin-top: 0px; margin-left: 0px; transform: translate3d(0px, 0px, 0px); pointer-events: all;">
												<img data-u="image"
												     src="upload/images/danh-muc/san-pham/Gia-cong-co-khi/sua-chua-cai-tao/Anderson-015.jpg"
												     border="0"
												     style="top: 0px; left: 0px; width: 600px; height: 450px; z-index: 1; margin-top: 0px; margin-left: 0px; transform: translate3d(0px, 0px, 0px); position: absolute;">
												<img data-u="thumb"
												     src="upload/images/danh-muc/san-pham/Gia-cong-co-khi/sua-chua-cai-tao/Anderson-015.jpg"
												     style="z-index: 1; margin-top: 0px; margin-left: 0px; transform: translate3d(0px, 0px, 0px);">
											</a>
											<div data-u="loading"
											     style="position: absolute; top: 0px; left: 0px; background-color: rgba(0, 0, 0, 0.7); width: 600px; height: 450px; z-index: 1000; display: none;">
												<div
													style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;">
												</div>
												<div
													style="position:absolute;display:block;background:url('http://cokhithudo.vn/skin/frontend/img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;">
												</div>
											</div>
										</div>
										<div
											style="z-index: 1; top: 0px; left: 0px; width: 600px; height: 450px; position: absolute; overflow: hidden;">
											<a
												href="upload/images/danh-muc/san-pham/Gia-cong-co-khi/sua-chua-cai-tao/cong_trinh_1432553293.jpg"
												style="display: block; top: 0px; left: 0px; width: 600px; height: 450px; position: relative; z-index: 1; margin-top: 0px; margin-left: 0px; transform: translate3d(0px, 0px, 0px); pointer-events: all;">
												<img data-u="image"
												     src="upload/images/danh-muc/san-pham/Gia-cong-co-khi/sua-chua-cai-tao/cong_trinh_1432553293.jpg"
												     border="0"
												     style="top: 0px; left: 0px; width: 600px; height: 450px; z-index: 1; margin-top: 0px; margin-left: 0px; transform: translate3d(0px, 0px, 0px); position: absolute;">
												<img data-u="thumb"
												     src="upload/images/danh-muc/san-pham/Gia-cong-co-khi/sua-chua-cai-tao/cong_trinh_1432553293.jpg"
												     style="z-index: 1; margin-top: 0px; margin-left: 0px; transform: translate3d(0px, 0px, 0px);">
											</a>
											<div data-u="loading"
											     style="position: absolute; top: 0px; left: 0px; background-color: rgba(0, 0, 0, 0.7); width: 600px; height: 450px; z-index: 1000; display: none;">
												<div
													style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;">
												</div>
												<div
													style="position:absolute;display:block;background:url('http://cokhithudo.vn/skin/frontend/img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;">
												</div>
											</div>
										</div>
										<div
											style="z-index: 1; top: 0px; left: 0px; width: 600px; height: 450px; position: absolute; overflow: hidden; transform: translate3d(600px, 0px, 0px);">
											<a href="upload/images/danh-muc/san-pham/Gia-cong-co-khi/sua-chua-cai-tao/fence-13_lg.jpg"
											   style="display: block; top: 0px; left: 0px; width: 600px; height: 450px; position: relative; z-index: 1; margin-top: 0px; margin-left: 0px; transform: translate3d(0px, 0px, 0px); pointer-events: all;">
												<img data-u="image"
												     src="upload/images/danh-muc/san-pham/Gia-cong-co-khi/sua-chua-cai-tao/fence-13_lg.jpg"
												     border="0"
												     style="top: 0px; left: 0px; width: 600px; height: 450px; z-index: 1; margin-top: 0px; margin-left: 0px; transform: translate3d(0px, 0px, 0px); position: absolute;">
												<img data-u="thumb"
												     src="upload/images/danh-muc/san-pham/Gia-cong-co-khi/sua-chua-cai-tao/fence-13_lg.jpg"
												     style="z-index: 1; margin-top: 0px; margin-left: 0px; transform: translate3d(0px, 0px, 0px);">
											</a>
											<div data-u="loading"
											     style="position: absolute; top: 0px; left: 0px; background-color: rgba(0, 0, 0, 0.7); width: 600px; height: 450px; z-index: 1000; display: none;">
												<div
													style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;">
												</div>
												<div
													style="position:absolute;display:block;background:url('http://cokhithudo.vn/skin/frontend/img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;">
												</div>
											</div>
										</div>
										<div
											style="z-index: 1; top: 0px; left: 0px; width: 600px; height: 450px; position: absolute; overflow: hidden; transform: translate3d(-600px, 0px, 0px);">
											<a
												href="upload/images/danh-muc/san-pham/Gia-cong-co-khi/sua-chua-cai-tao/Front-Yard-Landscaping-Ideas-With-Minimalist-Wrought-Iron-Fence-And-Beautiful-Flowers.jpg"
												style="display: block; top: 0px; left: 0px; width: 600px; height: 450px; position: relative; z-index: 1; margin-top: 0px; margin-left: 0px; transform: translate3d(0px, 0px, 0px); pointer-events: all;">
												<img data-u="image"
												     src="upload/images/danh-muc/san-pham/Gia-cong-co-khi/sua-chua-cai-tao/Front-Yard-Landscaping-Ideas-With-Minimalist-Wrought-Iron-Fence-And-Beautiful-Flowers.jpg"
												     border="0"
												     style="top: 0px; left: 0px; width: 600px; height: 450px; z-index: 1; margin-top: 0px; margin-left: 0px; transform: translate3d(0px, 0px, 0px); position: absolute;">
												<img data-u="thumb"
												     src="upload/images/danh-muc/san-pham/Gia-cong-co-khi/sua-chua-cai-tao/Front-Yard-Landscaping-Ideas-With-Minimalist-Wrought-Iron-Fence-And-Beautiful-Flowers.jpg"
												     style="z-index: 1; margin-top: 0px; margin-left: 0px; transform: translate3d(0px, 0px, 0px);">
											</a>
											<div data-u="loading"
											     style="position: absolute; top: 0px; left: 0px; background-color: rgba(0, 0, 0, 0.7); width: 600px; height: 450px; z-index: 1000; display: none;">
												<div
													style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;">
												</div>
												<div
													style="position:absolute;display:block;background:url('http://cokhithudo.vn/skin/frontend/img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;">
												</div>
											</div>
										</div>
										<div
											style="z-index: 1; top: 0px; left: 0px; width: 600px; height: 450px; position: absolute; overflow: hidden; transform: translate3d(-600px, 0px, 0px);">
											<a href="upload/images/danh-muc/san-pham/Gia-cong-co-khi/sua-chua-cai-tao/nha-tin-ch.jpg"
											   style="display: block; top: 0px; left: 0px; width: 600px; height: 450px; position: relative; z-index: 1; margin-top: 0px; margin-left: 0px; transform: translate3d(0px, 0px, 0px); pointer-events: all;">
												<img data-u="image"
												     src="upload/images/danh-muc/san-pham/Gia-cong-co-khi/sua-chua-cai-tao/nha-tin-ch.jpg"
												     border="0"
												     style="top: 0px; left: 0px; width: 600px; height: 450px; z-index: 1; margin-top: 0px; margin-left: 0px; transform: translate3d(0px, 0px, 0px); position: absolute;">
												<img data-u="thumb"
												     src="upload/images/danh-muc/san-pham/Gia-cong-co-khi/sua-chua-cai-tao/nha-tin-ch.jpg"
												     style="z-index: 1; margin-top: 0px; margin-left: 0px; transform: translate3d(0px, 0px, 0px);">
											</a>
											<div data-u="loading"
											     style="position: absolute; top: 0px; left: 0px; background-color: rgba(0, 0, 0, 0.7); width: 600px; height: 450px; z-index: 1000; display: none;">
												<div
													style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;">
												</div>
												<div
													style="position:absolute;display:block;background:url('http://cokhithudo.vn/skin/frontend/img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;">
												</div>
											</div>
										</div>
										<div
											style="z-index: 1; top: 0px; left: 0px; width: 600px; height: 450px; position: absolute; overflow: hidden; transform: translate3d(-600px, 0px, 0px);">
											<a href="upload/images/danh-muc/san-pham/Gia-cong-co-khi/sua-chua-cai-tao/old_world_28_.jpg"
											   style="display: block; top: 0px; left: 0px; width: 600px; height: 450px; position: relative; z-index: 1; margin-top: 0px; margin-left: 0px; transform: translate3d(0px, 0px, 0px); pointer-events: all;">
												<img data-u="image"
												     src="upload/images/danh-muc/san-pham/Gia-cong-co-khi/sua-chua-cai-tao/old_world_28_.jpg"
												     border="0"
												     style="top: 0px; left: 0px; width: 600px; height: 450px; z-index: 1; margin-top: 0px; margin-left: 0px; transform: translate3d(0px, 0px, 0px); position: absolute;">
												<img data-u="thumb"
												     src="upload/images/danh-muc/san-pham/Gia-cong-co-khi/sua-chua-cai-tao/old_world_28_.jpg"
												     style="z-index: 1; margin-top: 0px; margin-left: 0px; transform: translate3d(0px, 0px, 0px);">
											</a>
											<div data-u="loading"
											     style="position: absolute; top: 0px; left: 0px; background-color: rgba(0, 0, 0, 0.7); width: 600px; height: 450px; z-index: 1000; display: none;">
												<div
													style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;">
												</div>
												<div
													style="position:absolute;display:block;background:url('http://cokhithudo.vn/skin/frontend/img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;">
												</div>
											</div>
										</div>
										<div
											style="z-index: 1; top: 0px; left: 0px; width: 600px; height: 450px; position: absolute; overflow: hidden; transform: translate3d(-600px, 0px, 0px);">
											<a
												href="upload/images/danh-muc/san-pham/Gia-cong-co-khi/sua-chua-cai-tao/Steel-Fence-Panels-Design.jpg"
												style="display: block; top: 0px; left: 0px; width: 600px; height: 450px; position: relative; z-index: 1; margin-top: 0px; margin-left: 0px; transform: translate3d(0px, 0px, 0px); pointer-events: all;">
												<img data-u="image"
												     src="upload/images/danh-muc/san-pham/Gia-cong-co-khi/sua-chua-cai-tao/Steel-Fence-Panels-Design.jpg"
												     border="0"
												     style="top: 0px; left: 0px; width: 600px; height: 450px; z-index: 1; margin-top: 0px; margin-left: 0px; transform: translate3d(0px, 0px, 0px); position: absolute;">
												<img data-u="thumb"
												     src="upload/images/danh-muc/san-pham/Gia-cong-co-khi/sua-chua-cai-tao/Steel-Fence-Panels-Design.jpg"
												     style="z-index: 1; margin-top: 0px; margin-left: 0px; transform: translate3d(0px, 0px, 0px);">
											</a>
											<div data-u="loading"
											     style="position: absolute; top: 0px; left: 0px; background-color: rgba(0, 0, 0, 0.7); width: 600px; height: 450px; z-index: 1000; display: none;">
												<div
													style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;">
												</div>
												<div
													style="position:absolute;display:block;background:url('http://cokhithudo.vn/skin/frontend/img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;">
												</div>
											</div>
										</div>
									</div>
									<div data-u="thumbnavigator" class="jssort03"
									     style="position: absolute; left: 0px; bottom: 0px; width: 600px; height: 60px; visibility: visible;"
									     data-autocenter="1" jssor-slider="true">
										<!-- Thumbnail Item Skin Begin -->
										<!-- Thumbnail Item Skin End -->
										<div
											style="position: absolute; top: 0px; left: 0px; width: 600px; height: 60px; transform-origin: 0px 0px 0px; transform: scale(1);">
											<div class="jssort03"
											     style="position: relative; left: 0px; bottom: 0px; width: 600px; height: 60px; visibility: visible; display: block; top: 0px; overflow: visible;">
												<div
													style="position:absolute;top:0;left:0;width:100%;height:100%;background-color:#000;filter:alpha(opacity=30.0);opacity:0.3;">
												</div>
												<div data-u="slides"
												     style="cursor: default; position: absolute; overflow: hidden; left: 106.5px; top: 14px; width: 387px; height: 32px; z-index: 0;">
													<div
														style="position: absolute; z-index: 0; pointer-events: none; transform: translate3d(-65px, 0px, 0px);">
													</div>
												</div>
												<div data-u="slides"
												     style="cursor: default; position: absolute; overflow: hidden; left: 106.5px; top: 14px; width: 387px; height: 32px; z-index: 0;">
													<div
														style="top: 0px; left: 0px; width: 62px; height: 32px; position: absolute; background-color: rgb(0, 0, 0); opacity: 0;">
													</div>
													<div
														style="z-index: 1; top: 0px; left: 0px; width: 62px; height: 32px; position: absolute; overflow: hidden;">
														<div data-u="prototype" class="p"
														     style="left: 0px; top: 0px; z-index: 1; margin-top: 0px; margin-left: 0px; transform: translate3d(0px, 0px, 0px);">
															<div class="w"
															     style="z-index: 1; margin-top: 0px; margin-left: 0px; transform: translate3d(0px, 0px, 0px);">
																<img data-u="image"
																     src="upload/images/danh-muc/san-pham/Gia-cong-co-khi/sua-chua-cai-tao/13246429_1623314764662183_674132437533595119_o.jpg"
																     border="0" class="t"
																     style="z-index: 1; margin-top: 0px; margin-left: 0px; transform: translate3d(0px, 0px, 0px);">
															</div>
															<div class="c"
															     style="z-index: 1; margin-top: 0px; margin-left: 0px; transform: translate3d(0px, 0px, 0px);">
															</div>
														</div>
														<div style="top: 0px; left: 0px; width: 62px; height: 32px; z-index: 1000; display: none;">
														</div>
													</div>
													<div
														style="z-index: 1; top: 0px; left: 0px; width: 62px; height: 32px; position: absolute; overflow: hidden; transform: translate3d(65px, 0px, 0px);">
														<div data-u="prototype" class="p"
														     style="left: 0px; top: 0px; z-index: 1; margin-top: 0px; margin-left: 0px; transform: translate3d(0px, 0px, 0px);">
															<div class="w"
															     style="z-index: 1; margin-top: 0px; margin-left: 0px; transform: translate3d(0px, 0px, 0px);">
																<img data-u="image"
																     src="upload/images/danh-muc/san-pham/Gia-cong-co-khi/sua-chua-cai-tao/14255817-industrial-metal-staircase-for-emergency-escape-Stock-Photo.jpg"
																     border="0" class="t"
																     style="z-index: 1; margin-top: 0px; margin-left: 0px; transform: translate3d(0px, 0px, 0px);">
															</div>
															<div class="c"
															     style="z-index: 1; margin-top: 0px; margin-left: 0px; transform: translate3d(0px, 0px, 0px);">
															</div>
														</div>
														<div style="top: 0px; left: 0px; width: 62px; height: 32px; z-index: 1000; display: none;">
														</div>
													</div>
													<div
														style="z-index: 1; top: 0px; left: 0px; width: 62px; height: 32px; position: absolute; overflow: hidden; transform: translate3d(130px, 0px, 0px);">
														<div data-u="prototype" class="p"
														     style="left: 0px; top: 0px; z-index: 1; margin-top: 0px; margin-left: 0px; transform: translate3d(0px, 0px, 0px);">
															<div class="w"
															     style="z-index: 1; margin-top: 0px; margin-left: 0px; transform: translate3d(0px, 0px, 0px);">
																<img data-u="image"
																     src="upload/images/danh-muc/san-pham/Gia-cong-co-khi/sua-chua-cai-tao/17091069-modern-fire-escape-and-staircase-Stock-Photo.jpg"
																     border="0" class="t"
																     style="z-index: 1; margin-top: 0px; margin-left: 0px; transform: translate3d(0px, 0px, 0px);">
															</div>
															<div class="c"
															     style="z-index: 1; margin-top: 0px; margin-left: 0px; transform: translate3d(0px, 0px, 0px);">
															</div>
														</div>
														<div style="top: 0px; left: 0px; width: 62px; height: 32px; z-index: 1000; display: none;">
														</div>
													</div>
													<div
														style="z-index: 1; top: 0px; left: 0px; width: 62px; height: 32px; position: absolute; overflow: hidden; transform: translate3d(195px, 0px, 0px);">
														<div data-u="prototype" class="p"
														     style="left: 0px; top: 0px; z-index: 1; margin-top: 0px; margin-left: 0px; transform: translate3d(0px, 0px, 0px);">
															<div class="w"
															     style="z-index: 1; margin-top: 0px; margin-left: 0px; transform: translate3d(0px, 0px, 0px);">
																<img data-u="image"
																     src="upload/images/danh-muc/san-pham/Gia-cong-co-khi/sua-chua-cai-tao/Anderson-015.jpg"
																     border="0" class="t"
																     style="z-index: 1; margin-top: 0px; margin-left: 0px; transform: translate3d(0px, 0px, 0px);">
															</div>
															<div class="c"
															     style="z-index: 1; margin-top: 0px; margin-left: 0px; transform: translate3d(0px, 0px, 0px);">
															</div>
														</div>
														<div style="top: 0px; left: 0px; width: 62px; height: 32px; z-index: 1000; display: none;">
														</div>
													</div>
													<div
														style="z-index: 1; top: 0px; left: 0px; width: 62px; height: 32px; position: absolute; overflow: hidden; transform: translate3d(260px, 0px, 0px);">
														<div data-u="prototype" class="p pav"
														     style="left: 0px; top: 0px; z-index: 1; margin-top: 0px; margin-left: 0px; transform: translate3d(0px, 0px, 0px);">
															<div class="w"
															     style="z-index: 1; margin-top: 0px; margin-left: 0px; transform: translate3d(0px, 0px, 0px);">
																<img data-u="image"
																     src="upload/images/danh-muc/san-pham/Gia-cong-co-khi/sua-chua-cai-tao/cong_trinh_1432553293.jpg"
																     border="0" class="t"
																     style="z-index: 1; margin-top: 0px; margin-left: 0px; transform: translate3d(0px, 0px, 0px);">
															</div>
															<div class="c"
															     style="z-index: 1; margin-top: 0px; margin-left: 0px; transform: translate3d(0px, 0px, 0px);">
															</div>
														</div>
														<div style="top: 0px; left: 0px; width: 62px; height: 32px; z-index: 1000; display: none;">
														</div>
													</div>
													<div
														style="z-index: 1; top: 0px; left: 0px; width: 62px; height: 32px; position: absolute; overflow: hidden; transform: translate3d(325px, 0px, 0px);">
														<div data-u="prototype" class="p"
														     style="left: 0px; top: 0px; z-index: 1; margin-top: 0px; margin-left: 0px; transform: translate3d(0px, 0px, 0px);">
															<div class="w"
															     style="z-index: 1; margin-top: 0px; margin-left: 0px; transform: translate3d(0px, 0px, 0px);">
																<img data-u="image"
																     src="upload/images/danh-muc/san-pham/Gia-cong-co-khi/sua-chua-cai-tao/fence-13_lg.jpg"
																     border="0" class="t"
																     style="z-index: 1; margin-top: 0px; margin-left: 0px; transform: translate3d(0px, 0px, 0px);">
															</div>
															<div class="c"
															     style="z-index: 1; margin-top: 0px; margin-left: 0px; transform: translate3d(0px, 0px, 0px);">
															</div>
														</div>
														<div style="top: 0px; left: 0px; width: 62px; height: 32px; z-index: 1000; display: none;">
														</div>
													</div>
													<div
														style="z-index: 1; top: 0px; left: 0px; width: 62px; height: 32px; position: absolute; overflow: hidden; transform: translate3d(390px, 0px, 0px);">
														<div data-u="prototype" class="p"
														     style="left: 0px; top: 0px; z-index: 1; margin-top: 0px; margin-left: 0px; transform: translate3d(0px, 0px, 0px);">
															<div class="w"
															     style="z-index: 1; margin-top: 0px; margin-left: 0px; transform: translate3d(0px, 0px, 0px);">
																<img data-u="image"
																     src="upload/images/danh-muc/san-pham/Gia-cong-co-khi/sua-chua-cai-tao/Front-Yard-Landscaping-Ideas-With-Minimalist-Wrought-Iron-Fence-And-Beautiful-Flowers.jpg"
																     border="0" class="t"
																     style="z-index: 1; margin-top: 0px; margin-left: 0px; transform: translate3d(0px, 0px, 0px);">
															</div>
															<div class="c"
															     style="z-index: 1; margin-top: 0px; margin-left: 0px; transform: translate3d(0px, 0px, 0px);">
															</div>
														</div>
														<div style="top: 0px; left: 0px; width: 62px; height: 32px; z-index: 1000; display: none;">
														</div>
													</div>
													<div
														style="z-index: 1; top: 0px; left: 0px; width: 62px; height: 32px; position: absolute; overflow: hidden; transform: translate3d(-65px, 0px, 0px);">
														<div data-u="prototype" class="p"
														     style="left: 0px; top: 0px; z-index: 1; margin-top: 0px; margin-left: 0px; transform: translate3d(0px, 0px, 0px);">
															<div class="w"
															     style="z-index: 1; margin-top: 0px; margin-left: 0px; transform: translate3d(0px, 0px, 0px);">
																<img data-u="image"
																     src="upload/images/danh-muc/san-pham/Gia-cong-co-khi/sua-chua-cai-tao/nha-tin-ch.jpg"
																     border="0" class="t"
																     style="z-index: 1; margin-top: 0px; margin-left: 0px; transform: translate3d(0px, 0px, 0px);">
															</div>
															<div class="c"
															     style="z-index: 1; margin-top: 0px; margin-left: 0px; transform: translate3d(0px, 0px, 0px);">
															</div>
														</div>
														<div style="top: 0px; left: 0px; width: 62px; height: 32px; z-index: 1000; display: none;">
														</div>
													</div>
													<div
														style="z-index: 1; top: 0px; left: 0px; width: 62px; height: 32px; position: absolute; overflow: hidden; transform: translate3d(-65px, 0px, 0px);">
														<div data-u="prototype" class="p"
														     style="left: 0px; top: 0px; z-index: 1; margin-top: 0px; margin-left: 0px; transform: translate3d(0px, 0px, 0px);">
															<div class="w"
															     style="z-index: 1; margin-top: 0px; margin-left: 0px; transform: translate3d(0px, 0px, 0px);">
																<img data-u="image"
																     src="upload/images/danh-muc/san-pham/Gia-cong-co-khi/sua-chua-cai-tao/old_world_28_.jpg"
																     border="0" class="t"
																     style="z-index: 1; margin-top: 0px; margin-left: 0px; transform: translate3d(0px, 0px, 0px);">
															</div>
															<div class="c"
															     style="z-index: 1; margin-top: 0px; margin-left: 0px; transform: translate3d(0px, 0px, 0px);">
															</div>
														</div>
														<div style="top: 0px; left: 0px; width: 62px; height: 32px; z-index: 1000; display: none;">
														</div>
													</div>
													<div
														style="z-index: 1; top: 0px; left: 0px; width: 62px; height: 32px; position: absolute; overflow: hidden; transform: translate3d(-65px, 0px, 0px);">
														<div data-u="prototype" class="p"
														     style="left: 0px; top: 0px; z-index: 1; margin-top: 0px; margin-left: 0px; transform: translate3d(0px, 0px, 0px);">
															<div class="w"
															     style="z-index: 1; margin-top: 0px; margin-left: 0px; transform: translate3d(0px, 0px, 0px);">
																<img data-u="image"
																     src="upload/images/danh-muc/san-pham/Gia-cong-co-khi/sua-chua-cai-tao/Steel-Fence-Panels-Design.jpg"
																     border="0" class="t"
																     style="z-index: 1; margin-top: 0px; margin-left: 0px; transform: translate3d(0px, 0px, 0px);">
															</div>
															<div class="c"
															     style="z-index: 1; margin-top: 0px; margin-left: 0px; transform: translate3d(0px, 0px, 0px);">
															</div>
														</div>
														<div style="top: 0px; left: 0px; width: 62px; height: 32px; z-index: 1000; display: none;">
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<span data-u="arrowleft" class="jssora02l" style="top: 197.5px; left: 8px; width: 55px; height: 55px;"
									      data-autocenter="2"></span><span data-u="arrowright" class="jssora02r"
									                                       style="top: 197.5px; right: 8px; width: 55px; height: 55px;"
									                                       data-autocenter="2"></span>
								</div>
							</div>
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
                    refSize = Math.min(refSize, 380);
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
					<div class="col-sm-6 detail_pro">

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
						<script type="text/javascript"
						        src="http://cokhithudo.vn/skin/frontend/js/addthis_widget.js#pubid=ra-560ebad2c4d6b770"
						        async="async"></script>
						<div class="addthis_native_toolbox" data-url="http://cokhithudo.vn/sua-chua-cai-tao-cac-cong-trinh-co-khi"
						     data-title="Sửa chữa, cải tạo nhà xưởng, các công trình cơ khí xuống cấp"
						     data-description="Sửa chữa, cải tạo nhà xưởng, các công trình cơ khí xuống cấp">
							<div id="atstbx"
							     class="at-share-tbx-element at-share-tbx-native addthis_default_style addthis_20x20_style addthis-smartlayers addthis-animated at4-show">
								<a class="addthis_button_facebook_like at_native_button at300b" fb:like:layout="button_count">
									<div class="fb-like fb_iframe_widget" data-layout="button_count" data-show_faces="false"
									     data-share="true" data-action="like" data-width="90" data-height="25" data-font="arial"
									     data-href="http://cokhithudo.vn/sua-chua-cai-tao-cac-cong-trinh-co-khi" data-send="false"
									     style="height: 25px;" fb-xfbml-state="rendered"
									     fb-iframe-plugin-query="action=like&amp;app_id=&amp;container_width=0&amp;font=arial&amp;height=25&amp;href=http%3A%2F%2Fcokhithudo.vn%2Fsua-chua-cai-tao-cac-cong-trinh-co-khi&amp;layout=button_count&amp;locale=vi_VN&amp;sdk=joey&amp;send=false&amp;share=true&amp;show_faces=false&amp;width=90">
						<span style="vertical-align: bottom; width: 122px; height: 20px;">
						<iframe name="f275e5e326ddedc" width="90px" height="25px" frameborder="0" allowtransparency="true"
						        allowfullscreen="true" scrolling="no" title="fb:like Facebook Social Plugin"
						        src="https://www.facebook.com/v2.8/plugins/like.php?action=like&amp;app_id=&amp;channel=http%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2FXBwzv5Yrm_1.js%3Fversion%3D42%23cb%3Df1aef704cd63228%26domain%3Dcokhithudo.vn%26origin%3Dhttp%253A%252F%252Fcokhithudo.vn%252Ff23b522d75d55b4%26relation%3Dparent.parent&amp;container_width=0&amp;font=arial&amp;height=25&amp;href=http%3A%2F%2Fcokhithudo.vn%2Fsua-chua-cai-tao-cac-cong-trinh-co-khi&amp;layout=button_count&amp;locale=vi_VN&amp;sdk=joey&amp;send=false&amp;share=true&amp;show_faces=false&amp;width=90"
						        style="border: none; visibility: visible; width: 122px; height: 20px;" class="">
						</iframe>
						</span>
									</div>
								</a><a class="addthis_button_tweet at_native_button at300b">
									<div class="tweet_iframe_widget" style="width: 62px; height: 25px;">
						<span>
						<iframe id="twitter-widget-0" scrolling="no" frameborder="0" allowtransparency="true"
						        class="twitter-share-button twitter-share-button-rendered twitter-tweet-button"
						        title="Twitter Tweet Button"
						        src="http://platform.twitter.com/widgets/tweet_button.9384f3649360e38a7002082a80b92414.en.html#dnt=false&amp;id=twitter-widget-0&amp;lang=en&amp;original_referer=http%3A%2F%2Fcokhithudo.vn%2Fsua-chua-cai-tao-cac-cong-trinh-co-khi&amp;size=m&amp;text=S%E1%BB%ADa%20ch%E1%BB%AFa%2C%20c%E1%BA%A3i%20t%E1%BA%A1o%20nh%C3%A0%20x%C6%B0%E1%BB%9Fng%2C%20c%C3%A1c%20c%C3%B4ng%20tr%C3%ACnh%20c%C6%A1%20kh%C3%AD%20xu%E1%BB%91ng%20c%E1%BA%A5p%3A&amp;time=1502616317454&amp;type=share&amp;url=http%3A%2F%2Fcokhithudo.vn%2Fsua-chua-cai-tao-cac-cong-trinh-co-khi%23.WZAa-Rs_QaU.twitter"
						        data-url="http://cokhithudo.vn/sua-chua-cai-tao-cac-cong-trinh-co-khi#.WZAa-Rs_QaU.twitter"
						        style="position: static; visibility: visible; width: 60px; height: 20px;">
						</iframe>
						</span>
									</div>
								</a><a class="addthis_button_pinterest_pinit at300b" pi:pinit:layout="horizontal"
								       pi:pinit:url="http://cokhithudo.vn/sua-chua-cai-tao-cac-cong-trinh-co-khi">
									<div class="pin_it_iframe_widget" style="height: 25px;">
										<span><span class="at_PinItButton"></span></span>
									</div>
								</a><a class="addthis_button_google_plusone at_native_button at300b" g:plusone:size="medium">
									<div class="google_plusone_iframe_widget" style="width: 90px; height: 25px;">
						<span>
						<div id="___plusone_0"
						     style="text-indent: 0px; margin: 0px; padding: 0px; background: transparent; border-style: none; float: none; line-height: normal; font-size: 1px; vertical-align: baseline; display: inline-block; width: 32px; height: 20px;">
							<iframe ng-non-bindable="" frameborder="0" hspace="0" marginheight="0" marginwidth="0" scrolling="no"
							        style="position: static; top: 0px; width: 32px; margin: 0px; border-style: none; left: 0px; visibility: visible; height: 20px;"
							        tabindex="0" vspace="0" width="100%" id="I0_1502616318196" name="I0_1502616318196"
							        src="https://apis.google.com/u/0/se/0/_/+1/fastbutton?usegapi=1&amp;size=medium&amp;hl=en-US&amp;origin=http%3A%2F%2Fcokhithudo.vn&amp;url=http%3A%2F%2Fcokhithudo.vn%2Fsua-chua-cai-tao-cac-cong-trinh-co-khi&amp;gsrc=3p&amp;ic=1&amp;jsh=m%3B%2F_%2Fscs%2Fapps-static%2F_%2Fjs%2Fk%3Doz.gapi.vi.K4nS2cvZTA4.O%2Fm%3D__features__%2Fam%3DAQ%2Frt%3Dj%2Fd%3D1%2Frs%3DAGLTcCMa2vhfgPjf2x4P-quMcAulvwpDvg#_methods=onPlusOne%2C_ready%2C_close%2C_open%2C_resizeMe%2C_renderstart%2Concircled%2Cdrefresh%2Cerefresh&amp;id=I0_1502616318196&amp;parent=http%3A%2F%2Fcokhithudo.vn&amp;pfname=&amp;rpctoken=37073168"
							        data-gapiattached="true" title="G+">
							</iframe>
						</div>
						</span>
									</div>
								</a><a class="addthis_counter addthis_pill_style at_native_button addthis_nonzero" href="#"
								       style="display: inline-block;"><a class="atc_s addthis_button_compact">Share<span></span></a><a
										class="addthis_button_expanded" target="_blank" title="More" href="#" tabindex="1000">1</a></a>
								<div class="atclear">
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
						<div class="col-6 col-sm-4 col-lg-4 padding-10">
							<a href=" http://cokhithudo.vn/hang-rao-day-thep-gai">
								<img
									src="upload/images/danh-muc/san-pham/Gia-cong-co-khi/hang-rao-day-thep-gai/cokhithudo_Hang-rao-nao-may.jpg"
									alt=""></a>
							<p>
								<a href=" http://cokhithudo.vn/hang-rao-day-thep-gai">Hàng rào dây thép gai</a>
							</p>
						</div>
						<div class="col-6 col-sm-4 col-lg-4 padding-10">
							<a href=" http://cokhithudo.vn/hang-rao-luoi">
								<img src="upload/images/danh-muc/san-pham/Gia-cong-co-khi/hang-rao-luoi/hang-rao-thep-luoi-2.jpg"
								     alt=""></a>
							<p>
								<a href=" http://cokhithudo.vn/hang-rao-luoi">Hàng rào lưới</a>
							</p>
						</div>
						<div class="col-6 col-sm-4 col-lg-4 padding-10">
							<a href=" http://cokhithudo.vn/gia-cong-cac-san-pham-lam-tu-luoi">
								<img src="upload/images/danh-muc/san-pham/Cua-luoi-chong-muoi/cac-sp-luoi/img_1207 ok.jpg" alt=""></a>
							<p>
								<a href=" http://cokhithudo.vn/gia-cong-cac-san-pham-lam-tu-luoi">Gia công các sản phẩm làm từ lưới</a>
							</p>
						</div>
						<div class="col-6 col-sm-4 col-lg-4 padding-10">
							<a href=" http://cokhithudo.vn/cau-thang-inox-2">
								<img src="upload/images/danh-muc/san-pham/Inox/cau-thang/cau-thang-inox-5.jpg" alt=""></a>
							<p>
								<a href=" http://cokhithudo.vn/cau-thang-inox-2">Cầu thang Inox</a>
							</p>
						</div>
						<div class="col-6 col-sm-4 col-lg-4 padding-10">
							<a href=" http://cokhithudo.vn/cau-thang-sat">
								<img
									src="upload/images/danh-muc/san-pham/Sat-sat-my-thuat/cau-thang-sat/cau-thang-sat/iron-anvil-stairs-double-stringer-treads-concrete-diamond-pattern-gustaferson-1.jpg"
									alt=""></a>
							<p>
								<a href=" http://cokhithudo.vn/cau-thang-sat">Cầu thang sắt</a>
							</p>
						</div>
						<div class="col-6 col-sm-4 col-lg-4 padding-10">
							<a href=" http://cokhithudo.vn/lan-can-sat">
								<img src="upload/images/danh-muc/san-pham/Sat-sat-my-thuat/ban-cong-sat/Ban cong sat.jpg" alt=""></a>
							<p>
								<a href=" http://cokhithudo.vn/lan-can-sat">Lan can sắt</a>
							</p>
						</div>
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
