<!DOCTYPE html>

<html lang="<?php language_attributes(); ?>">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri() . '/img/mini-logo.png'; ?>" type="image/x-icon">
	<?php wp_head(); ?>
</head>

<body data-base="<?php bloginfo('url'); ?>">
<div class="container">
	<div class="row">
		<div class="col-sm-0 col-md-0 col-lg-0 col-xl-3 logo"><a href="<?php bloginfo('url'); ?>"><img
					src="<?php echo get_template_directory_uri() . '/img/logo.png' ?>"></a></div>
		<div class="col-0 col-sm-2"></div>
		<div class="col-sm-12 col-md-12 col-lg-12 col-xl-7 top_menu">
			<div class="row">
				<div class="col-sm-4">
					<div class="row row-25 call-top">
						<div class="col-2 col-sm-2 call"><img src="<?php echo get_template_directory_uri() . '/img/call.png'?>" alt=""></div>
						<div class="col-10 col-sm-10 text-left">
							<b><a href="tel:<?php echo get_option( 'lst_phone' ); ?>"><?php echo get_option( 'lst_phone' ); ?></a></b>
							<p>Tư vấn khách hàng</p></div>
					</div>
				</div>
				<div class="col-sm-8">
					<div class="row">
						<div class="col-3 col-sm-3 text-center cate_menutop "><a href="<?php bloginfo('url'); ?>/gioi-thieu"><img
									src="<?php echo get_template_directory_uri() ?>/img/about.png"></a>
							<p><a href="<?php bloginfo('url'); ?>/gioi-thieu">Giới thiệu</a>
							</p></div>
						<div class="col-3 col-sm-3 text-center cate_menutop "><a href="<?php bloginfo('url'); ?>/du-an"><img
									src="<?php echo get_template_directory_uri() ?>/img/duan.png"></a>
							<p><a href="<?php bloginfo('url'); ?>/san-pham">Dự án</a>
							</p></div>
						<div class="col-3 col-sm-3 text-center cate_menutop "><a href="<?php bloginfo('url'); ?>/tin-tuc"><img
									src="<?php echo get_template_directory_uri() ?>/img/news_cate.png"></a>
							<p><a href="<?php bloginfo('url'); ?>/tin-tuc">Tin tức</a>
							</p></div>
						<div class="col-3 col-sm-3 text-center cate_menutop "><a href="<?php bloginfo('url'); ?>/lien-he"><img
									src="<?php echo get_template_directory_uri() ?>/img/contact.png"></a>
							<p><a href="<?php bloginfo('url'); ?>/lien-he">Liên hệ</a>
							</p></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="menumain">
	<div class="container">
		<div class="menu">
			<div class="row row-0">
				<script>
          $(document).ready(function () {
            $('.togger-menu').on('click', function () {
              $('#menu-primary').toggle();
            })
            $('.togger-menu-sub').on('click', function () {
              $('#sub-menu').toggle();
            })
          })
				</script>
				<div class="col-12 col-sm-12 padding-0">
					<div class="togger-menu"><span>Menu</span> <i class="fa fa-list"></i></div>

					<div id="menu-primary">

						<?php /* Primary navigation */
						wp_nav_menu( array(
								'menu' => 'top-menu',
								'depth' => 2,
								'container' => false,
								//Process nav menu using our custom nav walker
								'walker' => new Main_Menu_Walker())
						);
						?>
					</div>

				</div>
			</div>

		</div>
	</div>
</div>