<?php 
/* 
Archive Name: Projects
This template displays all recent work that you deem worthy.
Projects are created using Wordpress's custom post types,
if you register the CPT with a different name, make sure to
rename this file to match otherwise it won't work.
Remember to re-save Wordpress's permalink structure to fix 404 errors.
*/ 
get_header(); ?>

	<div class="body-wrapper animsition-overlay" data-animsition-overlay="true">
		<div class="journal-banner">
			<div class="container-fluid">
			<div class="big-text" data-parallax='{"y" : -160, "from-scroll": 10}'>Recent Work</div>
				<h1>Recent Work</h1>
				<p class="no-margin-bottom">
					As a web designer &amp; front end developer, I've tackled a broad variety of projects for all types of businesses and international companies, sharing my visions of a better world wide web. With my years of experience in the industry, I create beautifully crafted responsive websites with my distinctive strategic thinking. I like constantly putting concepts and ideas to the test and emphasise values that meet user needs as well as business objectives.
				</p>
			</div>
		</div>

		<section class="content">
			<div class="container-fluid">
			<?php get_template_part('partials/recent-work'); ?>
				<!-- /container-fluid -->
			</div>
			<!-- /content -->
		</section>

<?php get_footer(); ?>