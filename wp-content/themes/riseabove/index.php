<?php 
/*
This is the blog archive since
the posts page has been set to a new page
within Wordpress's reading settings panel
*/
get_header(); ?>

	<!-- <div class="body-wrapper animsition-overlay" data-animsition-overlay="true"> -->
		<div class="fullwidth-banner">
			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-offset-1 col-sm-10">
						<div class="big-text" data-parallax='{"y" : -160, "from-scroll": 10}'><?php echo single_post_title(); ?></div>
						<div class="hero-text">
							<div id="rev-1" class="block-revealer">
								<h1><?php echo single_post_title(); ?></h1>
							</div>
							<div id="rev-2" class="block-revealer">
								<p class="no-margin-bottom shout">網頁設計師 by day, butt kicking vigilante at night.</p>
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
						<div class="category-list">
							<?php get_template_part('partials/show-categories'); ?>
						</div>
						<?php get_template_part('partials/recent-posts'); ?>
						<?php get_template_part('pagination'); ?>
					</div>
				</div>
			</div>
		</section>

<?php get_footer(); ?>