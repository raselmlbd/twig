<?php
/*
** Template Name: Home
*/
get_header();
$context = Timber::context();
$arg = 'post_type=post';
$context['posts'] = Timber::get_posts( $arg );

Timber::render( 'templates/pages/home.twig', $context );

get_footer();