<?php
	/*
	**
	Create custom taxonomies to custom post type 'video'
	**
	*/
	function create_tax_cast() {

		// Add new taxonomy, NOT hierarchical (like tags)
		$labels = array(
			'name'                       => _x( 'Cast', 'taxonomy general name' ),
			'singular_name'              => _x( 'Cast', 'taxonomy singular name' )
		);

		$args = array(
			'with_front'			=> true,
			'hierarchical'          => true,
			'labels'                => $labels,
			'show_ui'               => true,
			'show_admin_column'     => true,
			'update_count_callback' => '_update_post_term_count',
			'query_var'             => true,
			'rewrite' => array( 'slug' => 'campaign', 'with_front' => false ),
			'sort' 					=> false,
			'show_tagcloud' 		=> false
		);

		register_taxonomy('tax_cast', 'cpt_video', $args );
	}

	add_action('init', 'create_tax_cast', 0);