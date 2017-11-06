<?php
/*
This is my homepage but will also
form my global pages.
*/
get_header(); ?>

	<?php if ( is_front_page() ) : ?>
	<!-- <div class="body-wrapper animsition-overlay" data-animsition-overlay="true"> -->
		<div class="fullwidth-banner">
			<section class="hero-banner">
				<div class="container-fluid">
					<div class="row">
						<div class="col-sm-offset-1 col-sm-10">
							<div class="hero-text">
								<div id="rev-1" class="block-revealer">
									<h1>Rise above</h1>
								</div>
								<div id="rev-2" class="block-revealer">
									<h2 class="no-margin-bottom">Elevating design &amp; functionality</h2>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
		<section class="content">
			<div class="container-fluid">
				<div class="about-us">
					<div class="row">
						<div class="col-sm-offset-1 col-sm-10">
							<h4>
								<span>About me</span>
								Hey I’m Peter, Web Designer &amp; Front End Developer. I create digital solutions to help shape the web today.
							</h4>
						</div>
					</div>
				</div>
				
				<div class="featured-work">
					<div class="row">
						<div class="col-xs-12">
							<div class="flex-container">
								<?php 
								$i = 1;
								$args = array( 'post_type' => 'projects', 'posts_per_page' => 4 );
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

				<div class="row">
					<div class="col-sm-offset-1 col-sm-10">
						<div class="title-btn">
							<h4 class="text-center no-dash">
								<span>Currently developing at Pillory Barn</span>
								<a href="<?php echo get_home_url(); ?>/projects/">View portfolio</a>
							</h4>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-sm-offset-1 col-sm-10 col-md-offset-1 col-md-5">
						<?php 
							$the_query = new WP_Query( 'posts_per_page=3' );
							if ( $the_query->have_posts() ) : 
							// New WP query because posts page has been set
						?>
							<ul class="recent-post">
							<?php while ( $the_query->have_posts () ) : $the_query->the_post(); ?>
								<li>
									<h5 class="no-dash">
										<a href="<?php the_permalink(); ?>">
											<?php $categories = get_the_category(); if ( $categories ) : ?>
											<?php foreach ($categories as $category ) ; ?>
											<span>
												<?php the_time('j F, Y'); ?> ~ <?php echo $category->name; ?>
											</span>
											<?php endif; ?>
											<strong><?php the_title(); ?></strong>
											<small>
											<?php if ( has_excerpt( $post->ID ) ) {
												echo limit_words(get_the_excerpt(), '25') . '...';
											} 
											?>
											</small>
										</a>
									</h5>
								</li>
							<?php endwhile; ?>
							</ul>
							<a href="<?php echo get_home_url(); ?>/journal/" class="view-all">
								View all articles <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
							</a>
						<?php endif; // End blog section ?>
					</div>
					<div class="col-sm-offset-1 col-sm-10 col-md-offset-0 col-md-5">
						<div class="twitter">
							<h6>Follow me on 
								<a href="http://twitter.com/madeinthearcade" target="_blank">@madeinthearcade</a>
							</h6>
							<div id="twitter"></div>
						</div>
					</div>
				</div>
			<?php endif; // if is front page ?>

			<?php if ( is_page('About me') ) {
				get_template_part('partials/about-me');
				}
			?>

				<!-- /container-fluid -->
			</div>
			<!-- /content -->
		</section>
		<?php get_footer(); ?>