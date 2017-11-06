<?php $i = 0; ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php if( $i == 0 ) {
	echo '<div class="row">';
	}
?>
	
	<div class="col-md-6 col-lg-4">
		<article <?php post_class( 'news-article-listing' ); ?> role="article">
			<a href="<?php the_permalink(); ?>" class="featured-image">
				<?php if ( has_post_thumbnail() ) {
					the_post_thumbnail('medium');
					}
				?>
			</a>
			<div class="post-excerpt">
				<h5 class="no-dash">
					<span><?php the_time('j F, Y'); ?> - <?php the_category( ' ' ); ?></span>
					<a href="<?php the_permalink(); ?>">
						<?php the_title(); ?>
					</a>
				</h5>
				<p>
					<?php if(has_excerpt( $post->ID )) {
						echo the_excerpt();
					} else {
						echo limit_words(get_the_excerpt(), '25') . '...';
					} ?>
					<a href="<?php the_permalink(); ?>" class="gradient-btn">
						<span>View <?php the_title(); ?></span>
					</a>
				</p>
			</div>
		</article>
	</div>

	<?php 
		$i++;
		if ( $i == 3 ) {
			$i = 0;
			echo '</div>';
			}
		?>

		<?php endwhile; ?>

		<?php
			if ( $i > 0 ) {
				echo '</div>';
				}
			?>

		<?php else : ?>

		<article id="post-not-found" class="hentry cf">
			<header class="article-header">
				<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
			</header>
			<section class="entry-content">
				<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
			</section>
			<footer class="article-footer">
				<p><?php _e( 'This is the error message in the archive.php template.', 'bonestheme' ); ?></p>
			</footer>
		</article>

<?php endif; ?>
<?php html5wp_pagination(); ?>