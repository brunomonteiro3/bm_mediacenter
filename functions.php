<?php
	require_once locate_template('core/init.php');
	require_once locate_template('core/components.php');
	require_once locate_template('core/assets-loader.php');
	require_once locate_template('core/theme-wrapper.php');

	/*
		Taxonomies
	*/

	require_once locate_template('core/taxonomies/tax-products.php');
	require_once locate_template('core/taxonomies/tax-bus.php');
	//require_once locate_template('core/taxonomies/tax-analists.php');
	require_once locate_template('core/post-types/cpt-video.php');
?>