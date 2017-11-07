<div class="col-sm-3">
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