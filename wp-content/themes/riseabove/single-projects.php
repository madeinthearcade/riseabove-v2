<?php 
/* 
Single Template Name: Projects
Each individual project will use this
template to display its content
*/ 
get_header(); ?>

	<!-- <div class="body-wrapper animsition-overlay" data-animsition-overlay="true"> -->
		<div class="fullwidth-banner">
			<div class="big-text" data-parallax='{"y" : -160, "from-scroll": 10}'><?php the_title(); ?></div>
			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-offset-1 col-sm-10">
						<div class="hero-text">
							<div id="rev-1" class="block-revealer">
								<h1><?php the_title(); ?></h1>
							</div>
							<div id="rev-2" class="block-revealer">
								<p class="no-margin-bottom shout">
									<?php the_excerpt(); ?>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<section class="content">
			<div class="container-fluid">
				<div class="the-challenge">
					<div class="row">
						<div class="col-sm-offset-1 col-sm-2">
							<h2 class="discipline-title">The<br>Challenge</h2>
						</div>
						<div class="col-sm-offset-1 col-sm-7">
							<?php if ( the_field('the_challenge') ) {
								echo the_field('the_challenge');
								}; 
							?>
						</div>
					</div>
				</div>

				<hr class="divider">

				<div class="the-solution">
					<div class="row">
						<div class="col-sm-offset-1 col-sm-2">
							<h2 class="discipline-title">The<br>Solution</h2>
							<div id="client-stats">
								<div class="stats">
									<h6>Client</h6>
									<?php the_field('client'); ?>
								</div>
								<div class="stats">
									<h6>Role</h6>
									<?php the_field('role'); ?>
								</div>
								<div class="stats">
									<h6>Agency</h6>
									<?php the_field('agency'); ?>
								</div>
								<div class="stats">
									<?php if ( get_field('live_link') ) {
										echo '<a class="btn" target="_blank" href="' . get_field('live_link') . '"><span>View Project</span></a>';
									} elseif ( get_field('development_link') ) {
										echo '<a class="btn" target="_blank" href="' . get_field('development_link') . '"><span>In Development</span></a>';
									} else {
										echo '<a class="btn" target="_blank" nohref=""><span>Public beta unavailable</span></a>';
									}
									?>
								</div>
							</div>
						</div>
						<div class="col-sm-offset-1 col-sm-7">
							<?php if ( have_posts() ) : while ( have_posts() ) :the_post(); ?>
								<?php the_content(); ?>
							<?php endwhile; endif; ?>
						</div>
					</div>
				</div>

				<hr class="divider">

				<div class="featured-work">
					<div class="row">
						<div class="col-xs-12">	
							<div class="flex-container">
								<?php 
								$i = 1;
								$args = array( 'post_type' => 'projects', 'posts_per_page' => 4, 'post__not_in' => array($post->ID) );
								$the_query = new WP_Query( $args ); 
								?>
								<?php if( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
									<div class="flex-item">
										<div id="<?php echo 'reveal-' . $i; ?>" class="block-revealer">
											<div class="ft-work-thumbnail">
												<a href="<?php the_permalink(); ?>">
												<?php if ( has_post_thumbnail() ) {
													the_post_thumbnail('full');
													};
												?>
													<div class="ft-work-caption">
														<h2>
														<?php $tags = get_the_tags(); if ( $tags ) : ?>
															<span>
																<?php foreach ($tags as $tag ) {
																	echo $tag->name;
																}; ?>
															</span>
														<?php endif; ?>
														<?php the_title(); ?>
														</h2>
														<strong class="view-case-study">
															View case study <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
														</strong>
													</div>
												</a>
												<!-- /ft-work-thumbnail -->
											</div>
										</div>
										<!-- /flex-item -->
									</div>
								<?php $i++; endwhile; wp_reset_postdata(); endif; ?>
								<!-- /flex-container -->
							</div>
							<!-- /column -->
						</div>
						<!-- /featured work row -->
					</div>
					<!-- /featured-work -->
				</div>

			</div>
		</section>
<?php get_footer(); ?>