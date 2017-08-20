<?php
	/*
	**
	Create custom taxonomies to custom post type 'video'
	**
	*/
	function create_tax_products() {

		// Add new taxonomy, NOT hierarchical (like tags)
		$labels = array(
			'name'                       => _x( 'Products', 'taxonomy general name' ),
			'singular_name'              => _x( 'Product', 'taxonomy singular name' )
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

		register_taxonomy('tax_campaigns', 'cpt_video', $args );
	}

	add_action('init', 'create_tax_products', 0);