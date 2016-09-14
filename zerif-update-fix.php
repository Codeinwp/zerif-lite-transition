<?php
/**
 * Main plugin file
 *
 * @package   zerif-update-fix
 * @author    Marius Cristea<marius@themeisle.com>
 * @license   GPL-2.0+
 * @copyright 2016 Vertigo Studio SRL
 */
/*
 * Plugin Name: Zerif Update Fix
 * Description: Fix your zerif lite update
 * Version: 1.0.0
 *
 *
 */
function zerif_update_fix_load() {
	$theme = wp_get_theme();
	if ( strtolower( $theme->get( 'Name' ) ) == 'zerif lite' || $theme->get_template() == 'zerif-lite' ) {
		if ( version_compare( $theme->get( "Version" ), '1.8.5.0' ) == - 1 ) {
			require 'license.php';
			$licenser = new ZERIF_FIX_LICENSE( $theme->get( "Version" ) );
			$licenser->enable();

		}
	};

}

zerif_update_fix_load();

