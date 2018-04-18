<?php
/**
 * The template for the front page.
 *
 */

get_header();

get_template_part('template-parts/front-page', 'hero');
get_template_part('template-parts/front-page', 'usp');
get_template_part('template-parts/front-page', 'portfolio');
get_template_part('template-parts/front-page', 'contact');

get_footer();
