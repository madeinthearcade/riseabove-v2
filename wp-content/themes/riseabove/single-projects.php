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
										echo '<a class="gradient-btn" target="_blank" href="' . get_field('live_link') . '"><span>View Project</span></a>';
									} elseif ( get_field('development_link') ) {
										echo '<a class="gradient-btn" target="_blank" href="' . get_field('development_link') . '"><span>In Development</span></a>';
									} else {
										echo '<a class="gradient-btn" target="_blank" nohref=""><span>Public beta unavailable</span></a>';
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

				<?php 
					$args = array( 'post_type' => 'projects', 'posts_per_page' => 10, 'post__not_in' => array($post->ID) );
					$the_query = new WP_Query( $args ); 
					// Show other projects but exclude current from list
					// Use same styling as blog listings on homepage
				?>
				<?php if ( $the_query->have_posts() ) : ?>
					<div class="blog-section">
					<div class="row">
						<div class="col-sm-offset-1 col-sm-10">
							<ul class="recent-post">
							<?php while ( $the_query->have_posts () ) : $the_query->the_post(); ?>
								<li>
									<h6 class="no-dash">
										<a href="<?php the_permalink(); ?>">
										<?php $tags = get_the_tags(); if ( $tags ) : ?>
											<span>
											<?php foreach ($tags as $tag ) {
												echo $tag->name;
											}; ?>
											</span>
										<?php endif; ?>
										<?php the_title(); ?>
										</a>
									</h6>
								</li>
							<?php endwhile; ?>
							</ul>
						</div>
					</div>						
					</div>

				<?php endif; ?>

			</div>
		</section>
<?php get_footer(); ?>