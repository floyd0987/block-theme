<?php
/**
 * Renders the custom carousel block with a loop of terms from the 'categorie-progetti' taxonomy.
 */

// Define the taxonomy slug.
$taxonomy_slug = 'categorie-progetti';

// Fetch all terms from the specified taxonomy.
$terms = get_terms(array(
    'taxonomy'   => $taxonomy_slug,
    'hide_empty' => true, // Only show terms that have posts associated with them
    'orderby'    => 'name',
    'order'      => 'ASC',
));

// If no terms are found, display a placeholder message and return.
if (empty($terms) || is_wp_error($terms)) {
    return '<p>No categories found in the "' . esc_html($taxonomy_slug) . '" taxonomy.</p>';
}

?>

<div <?php echo get_block_wrapper_attributes(); ?>>

    <div class="carousel center">
        <?php
        // Start the loop through the fetched terms.
        foreach ($terms as $term) {
            // Get the link to the term archive page.
            $term_link = esc_url(get_term_link($term));
            $term_name = esc_html($term->name);
            $term_id   = $term->term_id;

            // --- ACF Image Retrieval for Taxonomy Term ---
            // Note: ACF functions require the term ID and taxonomy slug when fetching fields from terms.
            $image_field = get_field('immagine', $taxonomy_slug . '_' . $term_id);
            $image_url = '';
            $image_alt = $term_name;

            // Check if the ACF field returns a URL (Text field) or an Image ID/Array.
            if (!empty($image_field)) {
                if (is_array($image_field)) {
                    // If the field returns a full ACF Image Array
                    $image_url = esc_url($image_field['url'] ?? '');
                    $image_alt = esc_attr($image_field['alt'] ?? $term_name);
                } elseif (is_numeric($image_field)) {
                    // If the field returns an Image ID
                    $image_url = esc_url(wp_get_attachment_image_url($image_field, 'medium_large'));
                    $image_alt = esc_attr(get_post_meta($image_field, '_wp_attachment_image_alt', true) ?: $term_name);
                } else {
                    // If the field returns the URL directly (Text field)
                    $image_url = esc_url($image_field);
                }
            }
            // --- End ACF Image Retrieval ---

        ?>
            <div class="carousel-item">
                <a href="<?php echo $term_link; ?>">
                    <?php if (!empty($image_url)) : ?>
                        <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>">
                    <?php endif; ?>
                </a>
                <div class="carousel-item-title"><?php echo $term_name; ?></div>
            </div>
        <?php
        }
        ?>

    </div>

    <div class="slider_pager slider_pagination"></div>

</div>
