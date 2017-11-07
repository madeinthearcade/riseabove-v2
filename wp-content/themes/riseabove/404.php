<?php get_header(); ?>

	<div class="fullwidth-banner">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-offset-1 col-sm-10">
					<h1 class="red">Error 404!</h1>
					<p class="no-margin-bottom shout">
						I'm sorry, the page you're looking for doesn't exist or has moved to a different location.
					</p>
				</div>
			</div>
		</div>
	</div>
	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-offset-1 col-sm-10">
					<img src="<?php echo get_template_directory_uri(); ?>/img/template/error.svg" alt="Page not found" class="img-full">
				</div>
			</div>
		</div>
	</section>

<?php get_footer(); ?>