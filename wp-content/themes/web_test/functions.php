<?php 

add_action( 'wp_enqueue_scripts', 
function () {

    wp_enqueue_style( 'fonts-googleapis', 'https://fonts.googleapis.com' );
    wp_enqueue_style( 'fonts-gstatic', 'https://fonts.gstatic.com' );
    wp_enqueue_style( 'fonts', 'https://fonts.googleapis.com/css2?family=Raleway:wght@800&family=Roboto:wght@400;500;700;900&display=swap' );
    wp_enqueue_style( 'normalize', 'https://cdn.jsdelivr.net/npm/modern-normalize@2.0.0/modern-normalize.min.css' );
	// wp_enqueue_style( 'styles', get_template_directory_uri() . '/assets/css/styles.css' );
    wp_enqueue_style( 'styles', 'https://irapanch.github.io/webstudio-wp/wp-content/themes/web_test/assets/css/styles.css' );

	wp_enqueue_script( 'mobile-menu', get_template_directory_uri() . '/assets/js/mobile-menu.js', array(), '1.0.0', true );
    wp_enqueue_script( 'modal.js', get_template_directory_uri() . '/assets/js/modal.js', array(), '1.0.0', true );
});

add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-logo');

?>