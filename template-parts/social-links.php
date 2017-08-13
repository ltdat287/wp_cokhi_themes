<div class="pull-right">
	<?php echo lst_polylang_switcher(); ?>

	<?php echo ( ! empty( fw_get_db_settings_option( 'facebook',
		null ) ) ) ? '<a class="social-icon" href="' . fw_get_db_settings_option( 'facebook' ) . '" target="_blank"><i class="lst-icon-facebook-f"></i></a>' : ''; ?>
	<?php echo ( ! empty( fw_get_db_settings_option( 'twitter',
		null ) ) ) ? '<a class="social-icon" href="' . fw_get_db_settings_option( 'twitter' ) . '" target="_blank"><i class="lst-icon-twitter"></i></a>' : ''; ?>
	<?php echo ( ! empty( fw_get_db_settings_option( 'google',
		null ) ) ) ? '<a class="social-icon" href="' . fw_get_db_settings_option( 'google' ) . '" target="_blank"><i class="lst-icon-google-plus"></i></a>' : ''; ?>
	<?php echo ( ! empty( fw_get_db_settings_option( 'youtube',
		null ) ) ) ? '<a class="social-icon" href="' . fw_get_db_settings_option( 'youtube' ) . '" target="_blank"><i class="fa fa-youtube"></i></a>' : ''; ?>

	<?php lst_get_search_form(); ?>
</div>