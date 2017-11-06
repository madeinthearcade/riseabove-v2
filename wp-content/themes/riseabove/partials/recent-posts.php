<?php if ( have_posts() ) : ?>
<ul class="recent-post">
	<?php while ( have_posts () ) : the_post(); ?>
	<li>
		<h5 class="no-dash">
			<a href="<?php the_permalink(); ?>">
				<?php $categories = get_the_category(); if ( $categories ) : ?>
				<?php foreach ($categories as $category ) ; ?>
				<span><?php the_time('j F, Y'); ?> ~ <?php echo $category->name; ?></span>
				<?php endif; ?>
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