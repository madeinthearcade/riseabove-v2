<?php 
/*
Single Template Name: Single Post Page
Blog posts will use this template to
display its content to the world
*/
get_header(); ?>

<?php 
$featuredImage = wp_get_attachment_image_src( get_post_thumbnail_id($post->id), 'full' );
		// Include full otherwise it will default
?>
<div id="rev-1" class="block-revealer">
<?php if ( !empty($featuredImage) ) : ?>
	<div class="fullwidth-banner" style="background-image:url( <?php echo $featuredImage[0]; ?> )">
	<?php else : ?>
	<div class="fullwidth-banner" style="background:#3a3cb3;">
	<?php endif; ?>
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-offset-1 col-sm-10">
					<div class="hero-text">
						<div id="rev-2" class="block-revealer">
							<h1 class="no-dash">
								<span><?php the_time('l j F Y'); ?></span>
								<?php the_title(); ?>
							</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>	
</div>


	<section class="content blog-post-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-offset-1 col-sm-10">
					<?php if (have_posts()): while (have_posts()) : the_post(); ?>
						<article id="post-<?php the_ID(); ?>">
							<?php the_content(); ?>
							<?php 
							$images = get_field('image_gallery');
							if( $images ): ?>
							<ul class="image-gallery">
								<?php foreach( $images as $image ): ?>
									<li>
										<a href="<?php echo $image['url']; ?>" class="image-popup">
											<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="normal" />
										</a>
									</li>
								<?php endforeach; ?>
							</ul>
							<?php endif; ?>
						</article>
					<?php endwhile; else: ?>
					<article>
						<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
					</article>
				<?php endif; ?>
				</div>
			</div>
		</div>
	</section>

	<?php get_footer(); ?>