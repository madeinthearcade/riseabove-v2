<?php 
/*
Shows all posts relative to category
Pagination is included in recent-posts partial
*/
get_header(); ?>

	<!-- <div class="body-wrapper animsition-overlay" data-animsition-overlay="true"> -->
		<div class="fullwidth-banner">
			<div class="big-text" data-parallax='{"y" : -160, "from-scroll": 10}'><?php echo single_cat_title(); ?></div>
			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-offset-1 col-sm-10">
						<div class="hero-text">
							<div id="rev-1" class="block-revealer">
								<h1><?php echo single_cat_title(); ?></h1>
							</div>
							<div id="rev-2" class="block-revealer">
								<div class="no-margin-bottom shout">
									<?php echo category_description(); ?>
								</div>
							</div>
						</div>
					</div>
				</div>
				

			</div>
		</div>

		<section class="content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-offset-1 col-sm-10">
						<?php get_template_part('partials/recent-posts'); ?>	
						<?php get_template_part('pagination'); ?>
					</div>
				</div>
			</div>
		</section>

<?php get_footer(); ?>