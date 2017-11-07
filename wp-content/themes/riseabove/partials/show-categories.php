<?php $args = array(
		'hide_empty'	=> 0,
		'title_li'		=> '',
	);
	$categories = get_categories($args);
	if ($categories) : ?>
	<div class="row">
		<?php foreach($categories as $category) : setup_postdata($category); ?>
			<div class="col-sm-6">
				<h6>
					<a href="<?php echo get_category_link($category->term_id); ?>">
						<?php echo $category->name; ?>
						<small>
							<?php echo $category->description; ?>
						</small>		
					</a>
				</h6>
			</div>
		<?php endforeach; ?>
	</div>
<?php endif; ?>