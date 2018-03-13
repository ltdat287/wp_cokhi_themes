<!DOCTYPE html>

<html lang="<?php language_attributes(); ?>">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta property="fb:app_id" content="1194111090724590" />
    <meta property="fb:admins" content="100000532013841"/>
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri() . '/img/mini-logo.png'; ?>" type="image/x-icon">
	<?php wp_head(); ?>
	<!-- start Mixpanel -->
	<script type="text/javascript">(function(e,a){if(!a.__SV){var b=window;try{var c,l,i,j=b.location,g=j.hash;c=function(a,b){return(l=a.match(RegExp(b+"=([^&]*)")))?l[1]:null};g&&c(g,"state")&&(i=JSON.parse(decodeURIComponent(c(g,"state"))),"mpeditor"===i.action&&(b.sessionStorage.setItem("_mpcehash",g),history.replaceState(i.desiredHash||"",e.title,j.pathname+j.search)))}catch(m){}var k,h;window.mixpanel=a;a._i=[];a.init=function(b,c,f){function e(b,a){var c=a.split(".");2==c.length&&(b=b[c[0]],a=c[1]);b[a]=function(){b.push([a].concat(Array.prototype.slice.call(arguments,
	0)))}}var d=a;"undefined"!==typeof f?d=a[f]=[]:f="mixpanel";d.people=d.people||[];d.toString=function(b){var a="mixpanel";"mixpanel"!==f&&(a+="."+f);b||(a+=" (stub)");return a};d.people.toString=function(){return d.toString(1)+".people (stub)"};k="disable time_event track track_pageview track_links track_forms register register_once alias unregister identify name_tag set_config reset people.set people.set_once people.increment people.append people.union people.track_charge people.clear_charges people.delete_user".split(" ");
	for(h=0;h<k.length;h++)e(d,k[h]);a._i.push([b,c,f])};a.__SV=1.2;b=e.createElement("script");b.type="text/javascript";b.async=!0;b.src="undefined"!==typeof MIXPANEL_CUSTOM_LIB_URL?MIXPANEL_CUSTOM_LIB_URL:"file:"===e.location.protocol&&"//cdn.mxpnl.com/libs/mixpanel-2-latest.min.js".match(/^\/\//)?"https://cdn.mxpnl.com/libs/mixpanel-2-latest.min.js":"//cdn.mxpnl.com/libs/mixpanel-2-latest.min.js";c=e.getElementsByTagName("script")[0];c.parentNode.insertBefore(b,c)}})(document,window.mixpanel||[]);
	mixpanel.init("bc868cf0b8c9f421def9eb4d8a9dfdae");</script>
	<!-- end Mixpanel -->
</head>
<div id="fb-root"></div>
<script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.12&appId=1194111090724590&autoLogAppEvents=1';
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>

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
