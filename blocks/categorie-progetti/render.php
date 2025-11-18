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



?>
<style>
.categorie-progetti__grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
  gap: 2rem;
  list-style: none;
  padding: 0;
  margin: 0;
}
.categorie-progetti__item {
  display: flex;
  flex-direction: column;
  height: 100%;
}
.categorie-progetti__image-wrapper {
  width: 100%;
  aspect-ratio: 4/3;
  overflow: hidden;
  margin: 0;
}
.categorie-progetti__image {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
}
.categorie-progetti__name {
  /* margin-top: 1rem; */
  text-align: center;
  font-weight: bold;
  /* text-transform: uppercase; */
}

.categorie-progetti__link {
  text-decoration: none;
  color: inherit;
}
</style>
<?php

if (is_tax('categorie-progetti')) {
	return;
}

if (empty($terms)) {
    return '<p>No categories found.</p>';
}



?>
<div class="wp-block-query alignwide is-layout-flow wp-block-query-is-layout-flow">
    <ul class="alignwide wp-block-post-template is-layout-grid categorie-progetti__grid">
        <?php foreach ($terms as $term) : ?>
            <?php $image = get_field('immagine', 'categorie-progetti_' . $term->term_id); ?>
            <li class="categorie-progetti__item categorie-progetti-<?php echo esc_attr($term->slug); ?>">
                <div class="wp-block-group alignwide has-border-color has-zeever-border-border-color is-layout-constrained" style="border-width:1px">
                    <a href="<?php echo esc_url(get_term_link($term)); ?>" class="categorie-progetti__link wp-block-post-title has-normal-font-size">
                        <figure style="aspect-ratio:4/3;width:100%;" class="alignwide categorie-progetti__image-wrapper">
                            <?php if ($image) : ?>
                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($term->name); ?>" class="categorie-progetti__image" style="border-radius:0px;width:100%;height:100%;object-fit:cover;">
                            <?php endif; ?>
                        </figure>
                        <div class="categorie-progetti__name"><?php echo esc_html($term->name); ?></div>
                    </a>
                </div>
            </li>
        <?php endforeach; ?>
    </ul>
</div>
