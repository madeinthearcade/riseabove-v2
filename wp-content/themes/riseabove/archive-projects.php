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

	<!-- <div class="body-wrapper animsition-overlay" data-animsition-overlay="true"> -->
		<div class="fullwidth-banner">
			<div class="big-text" data-parallax='{"y" : -160, "from-scroll": 10}'>Recent Work</div>
			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-offset-1 col-sm-10">
						<div class="hero-text">
							<div id="rev-1" class="block-revealer">
								<h1>Recent Work</h1>
							</div>
							<div id="rev-2" class="block-revealer">
								<p class="no-margin-bottom shout">
									I create beautifully crafted responsive websites with my distinctive strategic thinking. I like constantly putting concepts and ideas to the test and emphasise values that meet user needs as well as business objectives. I get shit done.
								</p>
							</div>
						</div>
					</div>
				</div>
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