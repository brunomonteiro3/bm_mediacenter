<?php 	
	/* BUs */
	$bus = get_the_terms( $post->ID, 'tax_bus' );

	if ( have_posts() ) : 
		while ( have_posts() ) : the_post(); 
?>

<div class="container">
	<div class="video-single">
		<h1><?php the_title(); ?></h1>

		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="#">Home</a></li>
			<li class="breadcrumb-item"><a href="#">Library</a></li>
			<li class="breadcrumb-item active">Data</li>
		</ol>

		<div class="row">
			<div class="col-md-6">
				<div class="embed-responsive embed-responsive-16by9">
					<?php the_field('embed'); ?>
				</div>
			</div>

			<div class="col-md-6">
				<ul class="list-group">
					<li class="list-group-item list-group-item-secondary">
						<h4><strong>Ficha técnica:</strong></h4>
					</li>
					<li class="list-group-item">
						<strong>Data da gravação:</strong> 19/10/2017
					</li>
					<li class="list-group-item">
						<strong>Produto:</strong> 19/10/2017
					</li>
					<li class="list-group-item">
						<strong>Analista:</strong> 19/10/2017
					</li>
					<li class="list-group-item">
						<strong>Tipo de gravacão:</strong> Interna
					</li>
					<li class="list-group-item">
						<strong>Business Unit:</strong> 

						<?php 
							foreach ($bus as $bu) :
						?>
							<a href="<?php bloginfo('url'); ?>/business-unit/<?php echo $bu->slug; ?>"><?php echo $bu->name; ?></a>
						<?php
							endforeach;
						?>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>

<?php 
		endwhile;
	endif;
?>