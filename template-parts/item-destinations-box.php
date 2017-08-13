<ul id="destinations_box" class="city-list">
	<li class="load-spinner" style="text-align:center;"><img src="<?php bloginfo( 'template_directory' ); ?>/img/loader.gif"/></li>
</ul><!--END city list-->


<script type="text/javascript">
	(function ($) {
		$(document).ready(function () {

			var uri_api_destinations = '<?php echo LST_HOMEPAGE_URL; ?>/api/home_cities?type=Destination&limit=3';

			var show_loader = function () {
				$('#destinations_box li.load-spinner').show();
			};

			show_loader();

			$.ajaxSetup({
				headers : {
					'Accept-Language' : '<?php echo pll_current_language(); ?>'
				}
			});

			$.getJSON(uri_api_destinations).done(function (data) {
				$('#destinations_box li.load-spinner').hide();

				if ($.isArray(data.data) && data.data.length) {
					var html = '';

					$.each(data.data, function (idx, val) {
						html += '<li>';
						html += '<a target="_blank" href="<?php echo LST_HOMEPAGE_URL; ?>' + val.path + '"><figure class="thumb" style="background-image: url(' + val.image_url + ')"> <figcaption class="title"><span>' + val.name + '</span></figcaption></figure></a>';
						html += '</li>';

						return html;
					});

					$('ul#destinations_box').html(html);
				} else {
					$('ul#destinations_box').html('<li><p><?php _e( 'No Content.', 'lst-blog' ); ?></p></li>');
				}
			}).fail(function (err) {
				console.log(err);
			});

		});
	})(jQuery);
</script>