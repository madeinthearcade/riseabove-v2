<?php 
/*
This is the blog archive since
the posts page has been set to a new page
within Wordpress's reading settings panel
*/
get_header(); ?>

	<!-- <div class="body-wrapper animsition-overlay" data-animsition-overlay="true"> -->
		<div class="fullwidth-banner">
			<div class="big-text" data-parallax='{"y" : -160, "from-scroll": 10}'><?php echo single_post_title(); ?></div>
			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-offset-1 col-sm-10">
						<div class="hero-text">
							<div id="rev-1" class="block-revealer">
								<h1><?//php echo single_post_title(); ?>Not really a blog</h1>
							</div>
							<div id="rev-2" class="block-revealer">
								<p class="no-margin-bottom shout">
									I don't post much but when I do, they'll probably little short snippets. Better off following me on <a href="http://twitter.com/madeinthearcade" target="_blank">Twitter</a>.
								</p>
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