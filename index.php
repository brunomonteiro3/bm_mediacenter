<!--main content start-->
<div id="content" class="ui-content ui-content-aside-overlay">
	<div class="ui-content-body">

		<div class="container">

			<!--page title and breadcrumb start -->
			<div class="row">
				<div class="col-md-8">
					<h1 class="page-title"> Admin Dashboard
						<small>data, statistics, charts, recent reports and many more</small>
					</h1>
				</div>
				<div class="col-md-4">
					<ul class="breadcrumb pull-right">
						<li>Home</li>
						<li><a href="#" class="active">Dashboard</a></li>
					</ul>
				</div>
			</div>
			<!--page title and breadcrumb end -->

			<!--states start-->
			<div class="row">
				<div class="col-md-3 col-sm-6">
					<div class="panel short-states">
						<div class="panel-title">
							<h4><span class="label label-danger pull-right">Esta semana</span></h4>
						</div>
						<div class="panel-body">
							<h1>$1,3012</h1>
							<div class="text-danger pull-right">53% <i class="fa fa-bolt"></i></div>
							<small>Daily income</small>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="panel short-states">
						<div class="panel-title">
							<h4> <span class="label label-info pull-right">Weekly Income</span></h4>
						</div>
						<div class="panel-body">
							<h1>$5,534</h1>
							<div class="text-info pull-right">65% <i class="fa fa-level-up"></i></div>
							<small>Weekly Income</small>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="panel short-states">
						<div class="panel-title">
							<h4> <span class="label label-warning pull-right">Monthly Income</span></h4>
						</div>
						<div class="panel-body">
							<h1>$22,329</h1>
							<div class="text-warning pull-right">77% <i class="fa fa-level-down"></i></div>
							<small>Monthly Income</small>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="panel short-states">
						<div class="panel-title">
							<h4> <span class="label label-success pull-right">Annual Income</span></h4>
						</div>
						<div class="panel-body">
							<h1>$268,188</h1>
							<div class="text-success pull-right">88% <i class="fa fa-level-up"></i></div>
							<small>Annual Income</small>
						</div>
					</div>
				</div>
			</div>
			<!--states end-->

			<div class="row">
				<div class="col-md-12">
					<div class="panel">
						<header class="panel-heading">
							Project Statistics
							<span class="tools pull-right">
								<a class="close-box fa fa-times" href="javascript:;"></a>
							</span>
						</header>
						<div class="panel-body video-grid">
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
									<div class="col-md-3 col-xs-12">
										<div class="thumbnail">
											<a href="<?php the_permalink(); ?>">
												<img class="card-img-top" src="<?php echo $thumbnail[0]; ?>">
											</a>
											<div class="caption">
												<strong><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></strong><br />
												<span class="card-text"><small class="text-muted">Publicado em: <?php echo get_the_date( 'd\/m\/Y' ); ?></small></span>
											</div>
										</div>
									</div>
								<?php 
										endwhile;
									endif;
								?>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>


	</div>
</div>
<!--main content end-->