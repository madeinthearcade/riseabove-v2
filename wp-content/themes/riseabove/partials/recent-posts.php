<?php if ( have_posts() ) : ?>
<ul class="recent-post">
	<?php while ( have_posts () ) : the_post(); ?>
	<li>
		<h6 class="no-dash">
			<a href="<?php the_permalink(); ?>">
				<?php $categories = get_the_category(); if ( $categories ) : ?>
				<?php foreach ($categories as $category ) ; ?>
				<span><?php the_time('j F, Y'); ?> ~ <?php echo $category->name; ?></span>
				<?php endif; ?>
				<strong><?php the_title(); ?></strong>
				<small>
				<?php if ( has_excerpt( $post->ID ) ) {
					echo limit_words(get_the_excerpt(), '25') . '...';
					}
				?>
				</small>
			</a>
		</h6>
	</li>
	<?php endwhile; ?>
</ul>
<?php endif; ?>