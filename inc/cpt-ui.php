<?php
function cptui_register_my_cpts() {

	/**
	 * Post Type: Servizi.
	 */

	$labels = [
		"name" => esc_html__( "Servizi", "custom-post-type-ui" ),
		"singular_name" => esc_html__( "Servizio", "custom-post-type-ui" ),
	];

	$args = [
		"label" => esc_html__( "Servizi", "custom-post-type-ui" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace" => "wp/v2",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"can_export" => false,
		"rewrite" => [ "slug" => "servizi", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "editor", "thumbnail" ],
		"show_in_graphql" => false,
	];

	register_post_type( "servizi", $args );

	/**
	 * Post Type: Progetti.
	 */

	$labels = [
		"name" => esc_html__( "Progetti", "custom-post-type-ui" ),
		"singular_name" => esc_html__( "Progetto", "custom-post-type-ui" ),
	];

	$args = [
		"label" => esc_html__( "Progetti", "custom-post-type-ui" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace" => "wp/v2",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"can_export" => false,
		"rewrite" => [ "slug" => "progetti", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "editor", "thumbnail" ],
		"show_in_graphql" => false,
	];

	register_post_type( "progetti", $args );

	/**
	 * Post Type: Certificazioni.
	 */

	$labels = [
		"name" => esc_html__( "Certificazioni", "custom-post-type-ui" ),
		"singular_name" => esc_html__( "Certificazione", "custom-post-type-ui" ),
	];

	$args = [
		"label" => esc_html__( "Certificazioni", "custom-post-type-ui" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace" => "wp/v2",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"can_export" => false,
		"rewrite" => [ "slug" => "certificazioni", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "editor", "thumbnail" ],
		"show_in_graphql" => false,
	];

	register_post_type( "certificazioni", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );
