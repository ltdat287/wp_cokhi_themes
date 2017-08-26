<!DOCTYPE html>

<html lang="<?php language_attributes(); ?>">
<head lang="<?php language_attributes(); ?>">
	<meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="shortcut icon" href="upload/files/favicon.png" type="image/x-icon">
	<title>Cơ Khí Thủ Đô</title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="robots" content="index,follow">
	<meta property="og:title" content="">
	<meta property="og:description" content="">
	<meta property="og:url" content="<?php bloginfo('url'); ?>">
	<meta property="og:type" content="website">
	<meta property="og:image" content="">
	<meta property="og:image:type" content="image/png/jpg/gif">
	<meta property="og:image:width" content="300">
	<meta property="og:image:height" content="300">
	<meta property="og:site_name" content="CoKhiThuDo">
	<meta name="revisit-after" content="1 days">
	<meta name="rating" content="general">
	<!--    <meta property="fb:app_id" content="--><!--"/>-->
	<!--    <meta property="fb:admins" content="--><!--"/>-->
	<link rel="canonical" href="<?php bloginfo('url'); ?>">

	<base href="<?php bloginfo('url'); ?>">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">

	<script async="" src="https://embed.tawk.to/596ef3331dc79b329518f130/default" charset="UTF-8"
	        crossorigin="*"></script>
	<script async="" src="https://www.google-analytics.com/analytics.js"></script>
	<script id="facebook-jssdk" src="//connect.facebook.net/vi_VN/sdk.js#xfbml=1&amp;version=v2.8&amp;appId=#"></script>
	<style type="text/css">.fb_hidden {
			position: absolute;
			top: -10000px;
			z-index: 10001
		}

		.fb_reposition {
			overflow: hidden;
			position: relative
		}

		.fb_invisible {
			display: none
		}

		.fb_reset {
			background: none;
			border: 0;
			border-spacing: 0;
			color: #000;
			cursor: auto;
			direction: ltr;
			font-family: "lucida grande", tahoma, verdana, arial, sans-serif;
			font-size: 11px;
			font-style: normal;
			font-variant: normal;
			font-weight: normal;
			letter-spacing: normal;
			line-height: 1;
			margin: 0;
			overflow: visible;
			padding: 0;
			text-align: left;
			text-decoration: none;
			text-indent: 0;
			text-shadow: none;
			text-transform: none;
			visibility: visible;
			white-space: normal;
			word-spacing: normal
		}

		.fb_reset > div {
			overflow: hidden
		}

		.fb_link img {
			border: none
		}

		@keyframes fb_transform {
			from {
				opacity: 0;
				transform: scale(.95)
			}
			to {
				opacity: 1;
				transform: scale(1)
			}
		}

		.fb_animate {
			animation: fb_transform .3s forwards
		}

		.fb_dialog {
			background: rgba(82, 82, 82, .7);
			position: absolute;
			top: -10000px;
			z-index: 10001
		}

		.fb_reset .fb_dialog_legacy {
			overflow: visible
		}

		.fb_dialog_advanced {
			padding: 10px;
			-moz-border-radius: 8px;
			-webkit-border-radius: 8px;
			border-radius: 8px
		}

		.fb_dialog_content {
			background: #fff;
			color: #333
		}

		.fb_dialog_close_icon {
			background: url(https://static.xx.fbcdn.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 0 transparent;
			cursor: pointer;
			display: block;
			height: 15px;
			position: absolute;
			right: 18px;
			top: 17px;
			width: 15px
		}

		.fb_dialog_mobile .fb_dialog_close_icon {
			top: 5px;
			left: 5px;
			right: auto
		}

		.fb_dialog_padding {
			background-color: transparent;
			position: absolute;
			width: 1px;
			z-index: -1
		}

		.fb_dialog_close_icon:hover {
			background: url(https://static.xx.fbcdn.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -15px transparent
		}

		.fb_dialog_close_icon:active {
			background: url(https://static.xx.fbcdn.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -30px transparent
		}

		.fb_dialog_loader {
			background-color: #f6f7f9;
			border: 1px solid #606060;
			font-size: 24px;
			padding: 20px
		}

		.fb_dialog_top_left, .fb_dialog_top_right, .fb_dialog_bottom_left, .fb_dialog_bottom_right {
			height: 10px;
			width: 10px;
			overflow: hidden;
			position: absolute
		}

		.fb_dialog_top_left {
			background: url(https://static.xx.fbcdn.net/rsrc.php/v3/ye/r/8YeTNIlTZjm.png) no-repeat 0 0;
			left: -10px;
			top: -10px
		}

		.fb_dialog_top_right {
			background: url(https://static.xx.fbcdn.net/rsrc.php/v3/ye/r/8YeTNIlTZjm.png) no-repeat 0 -10px;
			right: -10px;
			top: -10px
		}

		.fb_dialog_bottom_left {
			background: url(https://static.xx.fbcdn.net/rsrc.php/v3/ye/r/8YeTNIlTZjm.png) no-repeat 0 -20px;
			bottom: -10px;
			left: -10px
		}

		.fb_dialog_bottom_right {
			background: url(https://static.xx.fbcdn.net/rsrc.php/v3/ye/r/8YeTNIlTZjm.png) no-repeat 0 -30px;
			right: -10px;
			bottom: -10px
		}

		.fb_dialog_vert_left, .fb_dialog_vert_right, .fb_dialog_horiz_top, .fb_dialog_horiz_bottom {
			position: absolute;
			background: #525252;
			filter: alpha(opacity=70);
			opacity: .7
		}

		.fb_dialog_vert_left, .fb_dialog_vert_right {
			width: 10px;
			height: 100%
		}

		.fb_dialog_vert_left {
			margin-left: -10px
		}

		.fb_dialog_vert_right {
			right: 0;
			margin-right: -10px
		}

		.fb_dialog_horiz_top, .fb_dialog_horiz_bottom {
			width: 100%;
			height: 10px
		}

		.fb_dialog_horiz_top {
			margin-top: -10px
		}

		.fb_dialog_horiz_bottom {
			bottom: 0;
			margin-bottom: -10px
		}

		.fb_dialog_iframe {
			line-height: 0
		}

		.fb_dialog_content .dialog_title {
			background: #6d84b4;
			border: 1px solid #365899;
			color: #fff;
			font-size: 14px;
			font-weight: bold;
			margin: 0
		}

		.fb_dialog_content .dialog_title > span {
			background: url(https://static.xx.fbcdn.net/rsrc.php/v3/yd/r/Cou7n-nqK52.gif) no-repeat 5px 50%;
			float: left;
			padding: 5px 0 7px 26px
		}

		body.fb_hidden {
			-webkit-transform: none;
			height: 100%;
			margin: 0;
			overflow: visible;
			position: absolute;
			top: -10000px;
			left: 0;
			width: 100%
		}

		.fb_dialog.fb_dialog_mobile.loading {
			background: url(https://static.xx.fbcdn.net/rsrc.php/v3/ya/r/3rhSv5V8j3o.gif) white no-repeat 50% 50%;
			min-height: 100%;
			min-width: 100%;
			overflow: hidden;
			position: absolute;
			top: 0;
			z-index: 10001
		}

		.fb_dialog.fb_dialog_mobile.loading.centered {
			width: auto;
			height: auto;
			min-height: initial;
			min-width: initial;
			background: none
		}

		.fb_dialog.fb_dialog_mobile.loading.centered #fb_dialog_loader_spinner {
			width: 100%
		}

		.fb_dialog.fb_dialog_mobile.loading.centered .fb_dialog_content {
			background: none
		}

		.loading.centered #fb_dialog_loader_close {
			color: #fff;
			display: block;
			padding-top: 20px;
			clear: both;
			font-size: 18px
		}

		#fb-root #fb_dialog_ipad_overlay {
			background: rgba(0, 0, 0, .45);
			position: absolute;
			bottom: 0;
			left: 0;
			right: 0;
			top: 0;
			width: 100%;
			min-height: 100%;
			z-index: 10000
		}

		#fb-root #fb_dialog_ipad_overlay.hidden {
			display: none
		}

		.fb_dialog.fb_dialog_mobile.loading iframe {
			visibility: hidden
		}

		.fb_dialog_content .dialog_header {
			-webkit-box-shadow: white 0 1px 1px -1px inset;
			background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#738ABA), to(#2C4987));
			border-bottom: 1px solid;
			border-color: #1d4088;
			color: #fff;
			font: 14px Helvetica, sans-serif;
			font-weight: bold;
			text-overflow: ellipsis;
			text-shadow: rgba(0, 30, 84, .296875) 0 -1px 0;
			vertical-align: middle;
			white-space: nowrap
		}

		.fb_dialog_content .dialog_header table {
			-webkit-font-smoothing: subpixel-antialiased;
			height: 43px;
			width: 100%
		}

		.fb_dialog_content .dialog_header td.header_left {
			font-size: 12px;
			padding-left: 5px;
			vertical-align: middle;
			width: 60px
		}

		.fb_dialog_content .dialog_header td.header_right {
			font-size: 12px;
			padding-right: 5px;
			vertical-align: middle;
			width: 60px
		}

		.fb_dialog_content .touchable_button {
			background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#4966A6), color-stop(.5, #355492), to(#2A4887));
			border: 1px solid #29487d;
			-webkit-background-clip: padding-box;
			-webkit-border-radius: 3px;
			-webkit-box-shadow: rgba(0, 0, 0, .117188) 0 1px 1px inset, rgba(255, 255, 255, .167969) 0 1px 0;
			display: inline-block;
			margin-top: 3px;
			max-width: 85px;
			line-height: 18px;
			padding: 4px 12px;
			position: relative
		}

		.fb_dialog_content .dialog_header .touchable_button input {
			border: none;
			background: none;
			color: #fff;
			font: 12px Helvetica, sans-serif;
			font-weight: bold;
			margin: 2px -12px;
			padding: 2px 6px 3px 6px;
			text-shadow: rgba(0, 30, 84, .296875) 0 -1px 0
		}

		.fb_dialog_content .dialog_header .header_center {
			color: #fff;
			font-size: 16px;
			font-weight: bold;
			line-height: 18px;
			text-align: center;
			vertical-align: middle
		}

		.fb_dialog_content .dialog_content {
			background: url(https://static.xx.fbcdn.net/rsrc.php/v3/y9/r/jKEcVPZFk-2.gif) no-repeat 50% 50%;
			border: 1px solid #555;
			border-bottom: 0;
			border-top: 0;
			height: 150px
		}

		.fb_dialog_content .dialog_footer {
			background: #f6f7f9;
			border: 1px solid #555;
			border-top-color: #ccc;
			height: 40px
		}

		#fb_dialog_loader_close {
			float: left
		}

		.fb_dialog.fb_dialog_mobile .fb_dialog_close_button {
			text-shadow: rgba(0, 30, 84, .296875) 0 -1px 0
		}

		.fb_dialog.fb_dialog_mobile .fb_dialog_close_icon {
			visibility: hidden
		}

		#fb_dialog_loader_spinner {
			animation: rotateSpinner 1.2s linear infinite;
			background-color: transparent;
			background-image: url(https://static.xx.fbcdn.net/rsrc.php/v3/yD/r/t-wz8gw1xG1.png);
			background-repeat: no-repeat;
			background-position: 50% 50%;
			height: 24px;
			width: 24px
		}

		@keyframes rotateSpinner {
			0% {
				transform: rotate(0deg)
			}
			100% {
				transform: rotate(360deg)
			}
		}

		.fb_iframe_widget {
			display: inline-block;
			position: relative
		}

		.fb_iframe_widget span {
			display: inline-block;
			position: relative;
			text-align: justify
		}

		.fb_iframe_widget iframe {
			position: absolute
		}

		.fb_iframe_widget_fluid_desktop, .fb_iframe_widget_fluid_desktop span, .fb_iframe_widget_fluid_desktop iframe {
			max-width: 100%
		}

		.fb_iframe_widget_fluid_desktop iframe {
			min-width: 220px;
			position: relative
		}

		.fb_iframe_widget_lift {
			z-index: 1
		}

		.fb_hide_iframes iframe {
			position: relative;
			left: -10000px
		}

		.fb_iframe_widget_loader {
			position: relative;
			display: inline-block
		}

		.fb_iframe_widget_fluid {
			display: inline
		}

		.fb_iframe_widget_fluid span {
			width: 100%
		}

		.fb_iframe_widget_loader iframe {
			min-height: 32px;
			z-index: 2;
			zoom: 1
		}

		.fb_iframe_widget_loader .FB_Loader {
			background: url(https://static.xx.fbcdn.net/rsrc.php/v3/y9/r/jKEcVPZFk-2.gif) no-repeat;
			height: 32px;
			width: 32px;
			margin-left: -16px;
			position: absolute;
			left: 50%;
			z-index: 4
		}</style>

	<?php wp_head(); ?>
</head>

<body data-base="<?php bloginfo('url'); ?>">
<div id="fb-root" class=" fb_reset">
	<div style="position: absolute; top: -10000px; height: 0px; width: 0px;">
		<div>
			<iframe name="fb_xdm_frame_http" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no"
			        id="fb_xdm_frame_http" aria-hidden="true" title="Facebook Cross Domain Communication Frame" tabindex="-1"
			        src="http://staticxx.facebook.com/connect/xd_arbiter/r/XBwzv5Yrm_1.js?version=42#channel=f1eb7b6d8d1f888&amp;origin=http%3A%2F%2Fcokhithudo.vn"
			        style="border: none;"></iframe>
			<iframe name="fb_xdm_frame_https" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no"
			        id="fb_xdm_frame_https" aria-hidden="true" title="Facebook Cross Domain Communication Frame" tabindex="-1"
			        src="https://staticxx.facebook.com/connect/xd_arbiter/r/XBwzv5Yrm_1.js?version=42#channel=f1eb7b6d8d1f888&amp;origin=http%3A%2F%2Fcokhithudo.vn"
			        style="border: none;"></iframe>
		</div>
	</div>
	<div style="position: absolute; top: -10000px; height: 0px; width: 0px;">
		<div></div>
	</div>
</div>
<script>(function (d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s);
    js.id = id;
    js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.8&appId=#";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>
<script>
  (function (i, s, o, g, r, a, m) {
    i['GoogleAnalyticsObject'] = r;
    i[r] = i[r] || function () {
      (i[r].q = i[r].q || []).push(arguments)
    }, i[r].l = 1 * new Date();
    a = s.createElement(o),
      m = s.getElementsByTagName(o)[0];
    a.async = 1;
    a.src = g;
    m.parentNode.insertBefore(a, m)
  })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

  ga('create', 'UA-102048832-1', 'auto');
  ga('send', 'pageview');

</script>    <!--Start of Tawk.to Script-->
<script type="text/javascript">
  var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
  (function () {
    var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
    s1.async = true;
    s1.src = 'https://embed.tawk.to/596ef3331dc79b329518f130/default';
    s1.charset = 'UTF-8';
    s1.setAttribute('crossorigin', '*');
    s0.parentNode.insertBefore(s1, s0);
  })();
</script>
<!--End of Tawk.to Script-->
<div class="container">
	<div class="row">
		<div class="col-sm-0 col-md-0 col-lg-0 col-xl-3 logo"><a href="<?php bloginfo('url'); ?>"><img
					src="<?php echo get_template_directory_uri() . '/img/logo.png' ?>"></a></div>
		<div class="col-0 col-sm-2"></div>
		<div class="col-sm-12 col-md-12 col-lg-12 col-xl-7 top_menu">
			<div class="row">
				<div class="col-sm-4">
					<div class="row row-25 call-top">
						<div class="col-2 col-sm-2 call"><img src="http://cokhithudo.vn/skin/frontend/img/call.png" alt=""></div>
						<div class="col-10 col-sm-10 text-left">
							<b><a href="tel:024 2240 8989">024 2240 8989</a></b>
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
							<p><a href="<?php bloginfo('url'); ?>/du-an">Dự án</a>
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