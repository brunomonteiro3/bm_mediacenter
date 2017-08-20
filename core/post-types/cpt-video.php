<?php
	// Register Custom Post Type
	function cpt_video() {

		$labels = array(
			'name'                  => 'Videos',
			'singular_name'         => 'Video',
		);
		$args = array(
			'label'                 => 'Video',
			'labels'                => $labels,
			'supports'              => array(
											'title', 
											'custom-field', 
											'thumbnail',
											'tax_channels'),
			'taxonomies'            => array(),
			'hierarchical'          => false,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'menu_icon'				=> 'dashicons-format-video'
		);
		register_post_type( 'cpt_video', $args );

	}
	add_action( 'init', 'cpt_video', 0 );