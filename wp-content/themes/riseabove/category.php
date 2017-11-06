<?php 
/*
Shows all posts relative to category
Pagination is included in recent-posts partial
*/
get_header(); ?>

	<div class="body-wrapper animsition-overlay" data-animsition-overlay="true">
		<div class="journal-banner">
			<div class="container-fluid">
				<div class="big-text" data-parallax='{"y" : -160, "from-scroll": 10}'><?php echo single_cat_title(); ?></div>
				<h1><?php echo single_cat_title(); ?></h1>
				<h4>
					<?php echo category_description(); ?>
				</h4>
			</div>
		</div>

		<section class="content">
			<div class="container-fluid">
				<?php get_template_part('partials/recent-posts'); ?>
			</div>
		</section>

<?php get_footer(); ?>