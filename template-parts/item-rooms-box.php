<ul class="owl-carousel owl-theme room-item" id="room_item">
	<li class="load-spinner" style="text-align: center;"><img src="<?php bloginfo( 'template_directory' ); ?>/img/loader.gif"/></li>
</ul>

<script type="text/javascript">
	(function ($) {
		$(document).ready(function () {

			var uri_api_rooms = '<?php echo LST_HOMEPAGE_URL; ?>/api/rooms?type=lastest_rooms&limit=10';

			//Room item
			var init_carousel_room_item = function () {
				$('#room_item').owlCarousel({
					loop: true,
					margin: 0,
					dots: true,
					nav: true,
					navText: [
						"<span class='lst-icon-thin-arrow-right'></span>",
						"<span class='lst-icon-thin-arrow-left'></span>"
					],

					responsive: {
						0: {
							items: 1,
							nav: false,
							dots: true
						},
						600: {
							items: 1,
							nav: false,
							dots: true
						},

						768: {
							items: 1,
							nav: false,
							dots: true
						},
						960: {
							items: 1,
							dotsEach: 1,
							dots: true
						},
						1000: {
							items: 1,
							nav: true,
							dotsEach: 1,
							dots: true
						},
						1200: {
							items: 1,
							nav: true,
							dotsEach: 1,
							dots: true
						}
					}
				});
			};

			var show_loader_room = function () {
				$('#room_item li.load-spinner').show();
			};

			show_loader_room();

			$.ajaxSetup({
				headers : {
					'Accept-Language' : '<?php echo pll_current_language(); ?>'
				}
			});

			$.getJSON(uri_api_rooms).done(function (data) {
				$('#room_item li.load-spinner').hide();

				if ($.isArray(data.data) && data.data.length) {
					var html = '';

					$.each(data.data, function (idx, val) {
						var url_room = '<?php echo LST_HOMEPAGE_URL; ?>/rooms/' + val.id;
						html += '<li>';
						html += '<figure><a href="'+ url_room +'" class="thumb" target="_blank"><img alt="'+ val.name +'" src="'+ val.photo_url +'"><span class="view-more3"><?php _e( 'View more', 'lst-blog' ) ?></span></a><figcaption class="title"><span class="prize-room">'+ val.rooms_price.night +' '+ val.rooms_price.code +'</span><a href="'+ url_room +'">'+ val.name +'</a></figcaption></figure><p class="desc">'+ val.property_type_name +' <?php _e( 'in', 'lst-blog' ); ?> '+ val.rooms_address.city +', '+ val.rooms_address.state +'</p>';
						html += '</li>';

						return html;
					});

					$('ul#room_item').html(html);
				} else {
					$('ul#room_item').html('<li><p><?php _e( 'No content.', 'lst-blog' ) ?></p></li>');
				}

				init_carousel_room_item();

			}).fail(function (err) {
				console.log(err);
			});

		});
	})(jQuery);
</script>