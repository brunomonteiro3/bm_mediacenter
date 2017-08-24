<!-- Page Header -->
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1 class="page-header">Últimos vídeos</h1>
		</div>
	</div>
</div>
<!-- /.row -->

<!-- Projects Row -->
<div class="container">
	<div class="row">
		<?php 
			$args = array (
				'post_type'	=> array( 'cpt_video' ),
				'posts_per_page' => 9
			);

			$videos = new WP_Query( $args );

			if ( $videos->have_posts() ) :
				while ( $videos->have_posts() ) :
					$videos->the_post();

					$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' ); 
		?>
			<div class="col-md-3 col-xs-6">
				<a href="<?php the_permalink(); ?>">
					<img class="card-img-top" src="<?php echo $thumbnail[0]; ?>">
				</a>
				<div class="card">
					<h4 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
					<p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
					<p class="card-text"><small class="text-muted">Publicado em: <?php echo get_the_date( 'd\/m\/Y' ); ?></small></p>
				</div>
			</div>
		<?php 
				endwhile;
			endif;
		?>
	</div>
</div>