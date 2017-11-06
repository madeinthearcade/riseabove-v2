<?php 
	$args = array( 'post_type' => 'projects', 'posts_per_page' => -1 );
	$the_query = new WP_Query( $args );
	// Register Projects CPT, limit posts for 2nd loop with offset
?>
<?php if ( $the_query->have_posts() ) : ?>
<div class="flex-container project-list">
	<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
		<div class="flex-item">
			<div class="ft-work-thumbnail">
				<a href="<?php the_permalink(); ?>">
					<?php if ( has_post_thumbnail() ) {
						the_post_thumbnail('full');
					}
					?>
					<div class="ft-work-caption">
						<h2>
							<?php $tags = get_the_tags(); if ( $tags ) : ?>
								<span>
									<?php foreach ($tags as $tag ) {
										echo $tag->name;
									}; ?>
								</span>
							<?php endif; ?>
							<?php the_title(); ?>
						</h2>
						<strong class="view-case-study">
							View case study <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
						</strong>
					</div>
				</a>
			</div>
		</div>
	<?php endwhile; ?>
</div>
<?php endif; ?>