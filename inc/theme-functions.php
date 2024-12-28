<?php


add_filter('get_the_archive_title', function($title) {
    return preg_replace('/^\w+: /', '', $title);
});





function custom_render_block_type( $block_content, $block ) {
if ( 'core/cover' === $block['blockName'] && (is_archive() || is_home()) ) {


        // Get the archive name (e.g., category, tag, etc.)
        $queried_object = get_queried_object();
        $name = !empty($queried_object->name) ? $queried_object->name : "blog"; // Archive name


        // Define the image URL based on the archive name
        $image_url = get_stylesheet_directory_uri() . '/assets/images/' . $name . '.jpg';

        // Modify the block's HTML to include the dynamic background image
        $block_content = str_replace(
            'class="wp-block-cover is-light"',
            'class="wp-block-cover" style="background-image: url(' . esc_url( $image_url ) . '); background-repeat: no-repeat; background-size: cover; padding-bottom:140px;min-height:460px;aspect-ratio:unset;"',
            $block_content
        );

    }

    return $block_content;
}

add_filter( 'render_block', 'custom_render_block_type', 10, 2 );
