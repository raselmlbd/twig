<?php
/*
** Template Name: Home
*/
get_header();
$context = array();
$context['headline'] = 'Welcome to my new Timber Blog!';

Timber::render( 'resources/templates/pages/home.twig', $context );
?>

<?php get_footer();
