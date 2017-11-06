<?php $args = array(
		'hide_empty'	=> 0,
		'title_li'		=> '',
	);
	$categories = get_categories($args);
	if ($categories) : ?>
	<div class="row">
		<?php foreach($categories as $category) : setup_postdata($category); ?>
			<div class="col-sm-6">
				<h3><a href="<?php echo get_category_link($category->term_id); ?>"><?php echo $category->name; ?></a></h3>
				<p>
					<?php echo $category->description; ?>
				</p>
			</div>
		<?php endforeach; ?>
	</div>
<?php endif; ?>