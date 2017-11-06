<?php 
/*
This is the blog archive since
the posts page has been set to a new page
within Wordpress's reading settings panel
*/
get_header(); ?>

	<div class="body-wrapper animsition-overlay" data-animsition-overlay="true">
		<div class="journal-banner">
			<div class="container-fluid">
				<div class="big-text" data-parallax='{"y" : -160, "from-scroll": 10}'><?php echo single_post_title(); ?></div>
				<h1><?php echo single_post_title(); ?></h1>
				<h4>網頁設計師 by day, butt kicking vigilante at night.</h4>
			</div>
		</div>

		<section class="content">
			<div class="container-fluid">
				<div class="category-list">
					<?php get_template_part('partials/show-categories'); ?>
				</div>
				<?php get_template_part('partials/recent-posts'); ?>
				<?php get_template_part('pagination'); ?>
			</div>
		</section>

<?php get_footer(); ?>