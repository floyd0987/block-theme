<?php

/**
 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
 */

//  get_block_wrapper_attributes()


if (!is_post_type_archive('progetti') && !is_tax('categorie-progetti')) {
	return '';
}

$terms = get_terms(array(
	'taxonomy' => 'categorie-progetti',
	'hide_empty' => true,
));



if (empty($terms)) {
	return '<p>No categories found.</p>';
}
?>
<div class="wp-block-block-theme-categorie-progetti categorie-progetti">
	<ul class="categorie-progetti__list">

		<li class="categorie-progetti__item">
			<a href="<?php echo esc_url(get_post_type_archive_link('progetti')); ?>" class="categorie-progetti__link">Tutti</a>
		</li>

		<?php foreach ($terms as $term) : ?>
			<li class="categorie-progetti__item">
				<a href="<?php echo esc_url(get_term_link($term)); ?>" class="categorie-progetti__link">
					<?php echo esc_html($term->name); ?>
				</a>
			</li>
		<?php endforeach; ?>


	</ul>

</div>
