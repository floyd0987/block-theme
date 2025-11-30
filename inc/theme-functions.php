<?php


add_filter('get_the_archive_title', function($title) {
    return preg_replace('/^\w+: /', '', $title);
});

add_filter('get_the_archive_title', function ($title) {
    if (is_archive()) {
        $title = preg_replace('/^Categoria Progetti:\s*/', '', $title);
    }
    return $title;
});




function custom_render_block_type( $block_content, $block ) {

    // Inizializza l'URL finale come null
    $final_image_url = null;

    if ( 'core/cover' === $block['blockName'] && (is_archive() || is_home()) ) {

        $queried_object = get_queried_object();
        $name = '';

        if ( is_tax('categorie-progetti') ) {

            $image_field_value = get_field('immagine', $queried_object->taxonomy . '_' . $queried_object->term_id);

            // 1. GESTIONE CAMPO ACF: Oggetto Immagine (Image Object) o URL
            if ( is_array( $image_field_value ) && ! empty( $image_field_value['url'] ) ) {
                // Il campo ACF restituisce un Oggetto Immagine: usa direttamente l'URL completo
                $final_image_url = $image_field_value['url'];

            } else if ( is_string( $image_field_value ) && ! empty( $image_field_value ) ) {
                // Il campo ACF restituisce una Stringa (potrebbe essere l'URL completo o solo lo slug)

                // Se la stringa sembra un URL completo, usalo direttamente
                if ( filter_var($image_field_value, FILTER_VALIDATE_URL) ) {
                    $final_image_url = $image_field_value;
                } else {
                    // Altrimenti, assumiamo sia lo slug e costruiamo il percorso statico
                    $name = sanitize_title( $image_field_value );
                }
            }

            // 2. Fallback per 'categorie-progetti' se ACF non ha restituito URL
            if ( empty( $final_image_url ) && empty( $name ) ) {
                $name = 'default-progetti';
            }

        } else {
            // 3. Logica per tutti gli altri archivi (usa il nome dello slug)
            $name = !empty($queried_object->name) ? sanitize_title($queried_object->name) : "blog";
        }


        // 4. DEFINIZIONE DELL'URL FINALE
        if ( ! empty( $final_image_url ) ) {
            // Usa l'URL completo recuperato da ACF (non c'è override)
            $image_url_to_use = $final_image_url;
        } else {
            // Usa il percorso statico (fallback o nome dello slug di altri archivi)
            $image_url_to_use = get_stylesheet_directory_uri() . '/assets/images/' . $name . '.jpg';
        }


        // 5. Modifica l'HTML del blocco
        $block_content = str_replace(
            'class="wp-block-cover is-light"',
            'class="wp-block-cover" style="background-image: url(' . esc_url( $image_url_to_use ) . '); background-repeat: no-repeat; background-size: cover; padding-bottom:40px;min-height:160px;aspect-ratio:unset;"',
            $block_content
        );

    }

    return $block_content;
}

add_filter( 'render_block', 'custom_render_block_type', 10, 2 );






function restrict_fse_for_shop_manager() {
    $role = get_role('shop_manager');

    if ($role) {
        // Remove capability to edit theme options
        $role->remove_cap('edit_theme_options');
    }
}
add_action('init', 'restrict_fse_for_shop_manager');
