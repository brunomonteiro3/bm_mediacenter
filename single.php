<?php 	
	/* BUs */
	$bus = get_the_terms( $post->ID, 'tax_bus' );

	/* Cast */
	$casts = get_the_terms( $post->ID, 'tax_cast' );

	if ( have_posts() ) : 
		while ( have_posts() ) : the_post(); 
?>

<div class="container">
	<div id="content" class="ui-content">
		<div class="ui-content-body">
			<div class="ui-container">
				<ul class="breadcrumb">
					<li><a href="<?php bloginfo('url'); ?>" class="active">Home</a></li>
					<li><a href="<?php bloginfo('url'); ?>/videos/" class="active">Videos</a></li>
				</ul>

				<div class="row">
					<div class="col-md-8">
						<div class="panel">
							<header class="panel-heading">
								<?php the_title(); ?>
							</header>

							<div class="panel-body">
								<div class="embed-responsive embed-responsive-16by9">
									<?php the_field('embed'); ?>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="panel">
							<header class="panel-heading">
								Informações
							</header>

							<div class="panel-body">
								<ul class="list-group">
									<li class="list-group-item"><strong>Publicado em:</strong> 99 de Janeiro de 9999</li>
									<li class="list-group-item"><strong>Gravado em:</strong>  99 de Janeiro de 9999</li>
									<li class="list-group-item">
										<strong>Business Unit:</strong> 

										<?php 
											foreach ($bus as $bu) :
										?>
											<a href="<?php bloginfo('url'); ?>/business-unit/<?php echo $bu->slug; ?>" class="link"><?php echo $bu->name; ?></a>
										<?php
											endforeach;
										?>
									</li>
								</ul>
							</div>
						</div>

						<div class="panel">
							<header class="panel-heading">
								Neste vídeo
							</header>

							<div class="panel-body">
								<div class="row">
									<?php 
										foreach ($casts as $cast) :
											$avatar = wp_get_attachment_image_src( get_field('avatar', $cast), 'thumbnail' );
									?>
										<div class="col-md-3">
											<a href="<?php bloginfo('url'); ?>/<?php echo $cast->slug; ?>">
												<img src="<?php echo $avatar[0];  ?>" title="<?php echo $cast->name; ?>" data-toggle="tooltip" data-placement="top" title="Hooray!" class="media-object img-responsive img-circle">
											</a>
										</div>
									<?php
										endforeach;
									?>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
						<div class="panel">									
							<header class="panel-heading">
								Informações
							</header>
							<div class="panel-body">

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php 
		endwhile;
	endif;
?>