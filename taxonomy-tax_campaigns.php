<?php 
	$campaign = $wp_query->get_queried_object();
?>

<div class="container">
	<h1><?php echo $campaign->name; ?></h1>

	<?php 
		// Query Arguments
		$args = array(
			'post_type'	=> array( 'cpt_ad' ),
			'tax_campaigns' => $campaign->slug
		);

		// The Query
		$ads = new WP_Query( $args );

		// The Loop
		if ( $ads->have_posts() ) :
			while ( $ads->have_posts() ) :
				$ads->the_post();

				$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id(), 'thumbnail' ); 
	?>
		<img src="<?php echo $thumbnail[0]; ?>" />
	<?php
			endwhile;
		endif;
		wp_reset_postdata();
	?>
</div>