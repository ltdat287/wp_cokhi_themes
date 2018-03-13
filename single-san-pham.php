<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Luxstay_Theme
 * @since Luxstay Themes 1.0
 */
get_header(); ?>

<?php get_template_part('template-parts/layout-breadcumb') ?>

<!-- homepage -->
<?php
while (have_posts()) : the_post();

    lst_set_post_views(get_the_ID());

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
                        <link rel="stylesheet"
                              href="<?php echo get_template_directory_uri() ?>/css/slide/magnific-popup.css">
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

                                $product_images = get_post_meta($post->ID, 'wpcf-anh-san-pham', false);

                                if (count($product_images)) :

                                    foreach ($product_images as $image) :
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
                    <br/>
                    <div class="col-sm-12 detail_pro">

                        <?php
                        echo get_post_meta($post->ID, 'wpcf-mo-ta-san-pham', true);
                        ?>

                        <div class="contact_pro">
                            <div class="pro_contact">
                                <a href="tel:<?php echo get_option('lst_phone'); ?>"
                                   class="btn btn-primary">Liên hệ tư vấn </a>
                            </div>

                        </div>
                    </div>
                    <div class="tab_product col-sm-12">
                        <div class="tab_pro">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#infor_detail" role="tab">
                                        THÔNG TIN CHI TIẾT
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#comment" role="tab">
                                        ĐÁNH GIÁ NHẬN XÉT
                                        <span class="badge fb-comments-count" xid="<?php the_ID(); ?>">0</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- Tab panes -->
                        <div class="info_pro">
                            <div class="tab-content">
                                <div class="tab-pane active" id="infor_detail" role="tabpanel">

                                    <?php the_content(); ?>

                                </div>
                                <div class="tab-pane" id="comment" role="tabpanel">
                                    <div class="fb-comments" xid="<?php the_ID(); ?>" data-numposts="10" width="100%"
                                         data-colorscheme="light" data-version="v2.3"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <script>
                  $(function () {
                    var hash = window.location.hash;
                    hash && $('ul.nav-tabs li a[href="' + hash + '"]').tab('show');

                    $('.nav-tabs li a').click(function (e) {
                      $(this).tab('show');
                      var scrollmem = $('body').scrollTop();
                      window.location.hash = this.hash;
                      $('html,body').scrollTop(scrollmem);
                    });
                  });
                </script>
                <br>
                <div class="title_pro">
                    <img src="<?php echo get_template_directory_uri() ?>/img/mini-logo.png"> SẢN PHẨM LIÊN QUAN
                </div>
                <div class="pro_more">
                    <div class="row row-10">
                        <?php

                        $term_tax_ids = get_the_terms(get_the_ID(), 'danh-muc-san-pham');
                        $terms = array();

                        foreach ($term_tax_ids as $term_tax_id) {
                            array_push($terms, $term_tax_id->term_id);
                        }

                        echo lst_products([
                            'terms' => $terms
                        ]);

                        ?>
                    </div>
                </div>

            </div>

            <?php
            get_template_part('template-parts/layout-aside');
            ?>

        </div>
    </div>

    <?php
    // End the loop.
endwhile;
?>

<!-- /home page -->

<?php get_footer(); ?>
