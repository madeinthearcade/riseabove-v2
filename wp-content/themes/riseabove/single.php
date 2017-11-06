<?php 
/*
Single Template Name: Single Post Page
Blog posts will use this template to
display its content to the world
*/
get_header(); ?>

	<div class="body-wrapper animsition-overlay" data-animsition-overlay="true">
	<?php 
		$featuredImage = wp_get_attachment_image_src( get_post_thumbnail_id($post->id), 'full' );
		// Include full otherwise it will default
	?>
	<?php if ( !empty($featuredImage) ) : ?>
		<div class="fullwidth-banner half" style="background-image:url( <?php echo $featuredImage[0]; ?> )">
	<?php else : ?>
		<div class="fullwidth-banner" style="background:#3a3cb3;">
	<?php endif; ?>
			<div class="featured-article">
				<h2 class="no-dash">
					<span><?php the_time('l j F Y'); ?></span>
					<?php the_title(); ?>
				</h2>
			</div>
		</div>

		<section class="content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-8">
					<?php if (have_posts()): while (have_posts()) : the_post(); ?>
						<article id="post-<?php the_ID(); ?>" class="journal-post">
							<?php the_content(); ?>
						</article>
						<?php endwhile; else: ?>
						<article>
							<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
						</article>
					<?php endif; ?>
					</div>
					<div class="col-lg-3 col-lg-offset-1">
					<h2><?php _e( 'More stories in: ', 'html5blank' ); the_category(', '); ?></h2>
					<ul class="other-stories"> 
					<?php
						$related = get_posts( array( 'category__in' => wp_get_post_categories($post->ID), 'numberposts' => 2, 'post__not_in' => array($post->ID) ) );
						// Show related posts in dynamic category
						if( $related ) foreach( $related as $post ) {
							setup_postdata($post); 
					?>
							<li>
								<h5>
									<a href="<?php the_permalink(); ?>">
										<?php the_title(); ?>
										<br>
										<small>
										<?php if ( has_excerpt( $post->ID ) ) {
											echo limit_words(get_the_excerpt(), '15') . '...';
											} 
											else {
											echo limit_words(get_the_excerpt(), '15') . '...';
											}
										?>
										</small>
									</a>
								</h5>
							</li>   
						<?php }
							wp_reset_postdata(); 
						?>
					</ul>
					</div>
				</div>
			</div>
		</section>

<?php get_footer(); ?>