<?php if ( have_posts() ) : ?>
	<ul class="recent-post">
		<?php while ( have_posts () ) : the_post(); ?>
			<li>
				<h5 class="no-dash">
					<a href="<?php the_permalink(); ?>">
						<?php the_title(); ?>
						<br>
						<small>
						<?php if ( has_excerpt( $post->ID ) ) {
							echo limit_words(get_the_excerpt(), '40') . '...';
							} 
							else {
							echo limit_words(get_the_excerpt(), '40') . '...';
							}
						?>
						</small>
					</a>
				</h5>
			</li>
		<?php endwhile; ?>
	</ul>
<?php endif; ?>
<?php if ( is_page('Journal') ) : ?>
	<?php html5wp_pagination(); ?>
<?php endif;