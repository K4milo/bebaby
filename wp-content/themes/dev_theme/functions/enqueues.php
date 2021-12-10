<?php

function bst_enqueues() {

	/* Styles */

	wp_register_style('bootstrap-css', '//cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css', false, '5.0.1', null);
	wp_enqueue_style('bootstrap-css');

  wp_register_style('bootstrap-icons', '//cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css', false, '1.5.0', null);
	wp_enqueue_style('bootstrap-icons');

  wp_register_style('fa-icons', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css', false, '5.15.3', null);
	wp_enqueue_style('fa-icons');

  wp_register_style('fonts-css', '//fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;90&display=swap', false, '1.0', null);
	wp_enqueue_style('fonts-css');

  wp_register_style('poppins-css', '//fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700;900&display=swap&display=swap', false, '1.0', null);
	wp_enqueue_style('poppins-css');

  wp_register_style('slick-css', '//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css', false, '1.8.1', null);
	wp_enqueue_style('slick-css');

  wp_register_style('material-css', '//fonts.googleapis.com/icon?family=Material+Icons', false, '1.8.1', null);
	wp_enqueue_style('material-css');

	wp_register_style('style-css', get_stylesheet_directory_uri() . '/assets/css/theme.css', false, null);
	wp_enqueue_style('style-css');

	/* Scripts */

	wp_enqueue_script( 'jquery' );
	/* Note: this above uses WordPress's onboard jQuery. You can enqueue other pre-registered scripts from WordPress too. See:
	https://developer.wordpress.org/reference/functions/wp_enqueue_script/#Default_Scripts_Included_and_Registered_by_WordPress */


  wp_register_script('bootstrap-js', '//cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js', false, null, true);
	wp_enqueue_script('bootstrap-js');

	wp_register_script('build-js', get_stylesheet_directory_uri() . '/assets/js/theme.js', false, null, true);
	wp_enqueue_script('build-js');

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'bst_enqueues', 100);


function add_style_attributes( $html, $handle ) {
  if ( 'bootstrap-css' === $handle ) {
    return str_replace( "media='all'", "media='all' integrity='sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x' crossorigin='anonymous'", $html );
  }

  return $html;
}

add_filter('style_loader_tag', 'add_style_attributes', 10, 2 );

function add_script_attributes( $html, $handle ) {

  if ( 'bootstrap-js' === $handle ) {
    return str_replace("id='bootstrap-js-js'", "id='bootstrap-js-js' integrity='sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4' crossorigin='anonymous'", $html);
  }

  return $html;
}

add_filter('script_loader_tag', 'add_script_attributes', 11, 3 );
