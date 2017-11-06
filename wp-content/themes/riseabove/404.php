<?php get_header(); ?>

<div class="body-wrapper animsition-overlay" data-animsition-overlay="true">
	<section class="content">
		<div class="container">
			<h1 class="red">Error 404!</h1>
			<div class="shout">
				<p>
					I'm sorry, the page you're looking for doesn't exist or has moved to a different location.
				</p>
			</div>
			<img src="<?php echo get_template_directory_uri(); ?>/img/template/error.svg" alt="Page not found" class="img-full">
		</div>
	</section>

<?php get_footer(); ?>