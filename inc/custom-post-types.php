<?php

function cptui_register_my_cpts() {

	/**
	 * Post Type: Movie Reviews.
	 */

	$labels = array(
		"name" => __( "Movie Reviews", "understrap" ),
		"singular_name" => __( "Movie Review", "understrap" ),
	);

	$args = array(
		"label" => __( "Movie Reviews", "understrap" ),
		"labels" => $labels,
		"description" => "Movie Reviews.",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "reviews", "with_front" => true ),
		"query_var" => true,
		"supports" => array( "title", "editor", "thumbnail", "revisions", "author" ),
	);

	register_post_type( "hk_movie_reviews", $args );

	/**
	 * Post Type: USPs.
	 */

	$labels = array(
		"name" => __( "USPs", "understrap" ),
		"singular_name" => __( "USP", "understrap" ),
	);

	$args = array(
		"label" => __( "USPs", "understrap" ),
		"labels" => $labels,
		"description" => "Unique Selling Points.",
		"public" => true,
		"publicly_queryable" => false,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => false,
		"exclude_from_search" => true,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "mp_usps", "with_front" => true ),
		"query_var" => true,
		"supports" => array( "title", "editor" ),
	);

	register_post_type( "mp_usps", $args );

	/**
	 * Post Type: Portfolio.
	 */

	$labels = array(
		"name" => __( "Portfolio", "understrap" ),
		"singular_name" => __( "Site", "understrap" ),
	);

	$args = array(
		"label" => __( "Portfolio", "understrap" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "portfolio", "with_front" => true ),
		"query_var" => true,
		"supports" => array( "title", "editor", "thumbnail" ),
	);

	register_post_type( "mp_portfolio", $args );

	/**
	 * Post Type: Students.
	 */

	$labels = array(
		"name" => __( "Students", "understrap" ),
		"singular_name" => __( "Student", "understrap" ),
	);

	$args = array(
		"label" => __( "Students", "understrap" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "student", "with_front" => true ),
		"query_var" => true,
		"menu_icon" => "dashicons-admin-users",
		"supports" => array( "title", "editor", "thumbnail", "custom-fields" ),
	);

	register_post_type( "ms_student", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );
