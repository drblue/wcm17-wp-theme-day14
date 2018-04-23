<?php

function hk_sc_movie_review($atts) {
	$a = shortcode_atts([
		'id' => -1,
	], $atts);

	$review = get_post($a['id']);

	$title = get_the_title($review);
	$link = get_the_permalink($review);
	$excerpt = get_the_excerpt($review);

	return "<div class='card'>
		<div class='card-body'>
			<h5 class='card-title'><a href='{$link}'>{$title}</a></h5>
			<p class='card-text'>{$excerpt}</p>
		</div>
	</div>";
}
add_shortcode('movie-review', 'hk_sc_movie_review');
