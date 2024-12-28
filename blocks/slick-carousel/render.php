<?php

/**
 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
 */


// $attributes = get_block_wrapper_attributes();
// echo "<pre>";
// print_r($attributes);

// print_r($content);

// // print_r($block,true);
// echo get_block_wrapper_attributes(["class" => "carousel center"]);
// echo "</pre>";


// Fetch the selected post IDs from block attributes
$selected_posts = $attributes['selectedPosts'] ?? [];

// If no posts are selected, display a placeholder message
if (empty($selected_posts)) {
	return '<p>No posts selected for the carousel.</p>';
}


?>

<div <?php echo get_block_wrapper_attributes(); ?>>

	<div class="carousel center">
		<?php foreach ($selected_posts as $post_id) {
			$post = get_post($post_id);
			$image_url = get_the_post_thumbnail_url($post_id, 'medium_large');
			$post_title = esc_html($post->post_title);
			$post_link = esc_url(get_permalink($post_id));

			if ($post) {
		?>
				<div class="carousel-item">
					<!-- Post Thumbnail -->
					<a href="<?php echo $post_link; ?>">
						<img src="<?php echo $image_url; ?>" alt="<?php echo $post_title; ?>">
					</a>
					<!-- Post Title -->
					<h4><?php echo $post_title; ?></h4>
				</div>
		<?php

			}
		} ?>

	</div>

	<div class="slider_pager slider_pagination"></div>

</div>
