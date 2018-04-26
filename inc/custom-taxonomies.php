<?php

function cptui_register_my_taxes() {

	/**
	 * Taxonomy: Genres.
	 */

	$labels = array(
		"name" => __( "Genres", "understrap" ),
		"singular_name" => __( "Genre", "understrap" ),
	);

	$args = array(
		"label" => __( "Genres", "understrap" ),
		"labels" => $labels,
		"public" => true,
		"hierarchical" => false,
		"label" => "Genres",
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => array( 'slug' => 'genre', 'with_front' => true, ),
		"show_admin_column" => false,
		"show_in_rest" => false,
		"rest_base" => "hk_movie_genres",
		"show_in_quick_edit" => false,
	);
	register_taxonomy( "hk_movie_genres", array( "hk_movie_reviews" ), $args );

	/**
	 * Taxonomy: Ratings.
	 */

	$labels = array(
		"name" => __( "Ratings", "understrap" ),
		"singular_name" => __( "Rating", "understrap" ),
	);

	$args = array(
		"label" => __( "Ratings", "understrap" ),
		"labels" => $labels,
		"public" => true,
		"hierarchical" => false,
		"label" => "Ratings",
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => array( 'slug' => 'movie-ratings', 'with_front' => true, ),
		"show_admin_column" => false,
		"show_in_rest" => false,
		"rest_base" => "hk_movie_rating",
		"show_in_quick_edit" => false,
	);
	register_taxonomy( "hk_movie_rating", array( "hk_movie_reviews" ), $args );

	/**
	 * Taxonomy: Classes.
	 */

	$labels = array(
		"name" => __( "Classes", "understrap" ),
		"singular_name" => __( "Class", "understrap" ),
	);

	$args = array(
		"label" => __( "Classes", "understrap" ),
		"labels" => $labels,
		"public" => true,
		"hierarchical" => true,
		"label" => "Classes",
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => array( 'slug' => 'class', 'with_front' => true, ),
		"show_admin_column" => false,
		"show_in_rest" => false,
		"rest_base" => "ms_class",
		"show_in_quick_edit" => false,
	);
	register_taxonomy( "ms_class", array( "ms_student" ), $args );
}

add_action( 'init', 'cptui_register_my_taxes' );
