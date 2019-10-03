<?php

function theme_stylesheet(){

    wp_enqueue_style( 'custom-style', get_template_directory_uri() .'/style.css');
	wp_enqueue_style('custom-style');


}

add_action('wp_enqueue_scripts', 'theme_stylesheet');
add_theme_support( 'post-thumbnails' );


function themename_custom_header_setup() {
    $defaults = array(
        // Default Header Image to display
        'default-image'         => get_template_directory_uri() . '/images/headers/default.jpg',
        // Display the header text along with the image
        'header-text'           => false,
        // Header text color default
        'default-text-color'        => '000',
        // Header image width (in pixels)
        'width'             => 1000,
        // Header image height (in pixels)
        'height'            => 198,
        // Header image random rotation default
        'random-default'        => false,
        // Enable upload of image file in admin 
        'uploads'       => false,
        // function to be called in theme head section
        'wp-head-callback'      => 'wphead_cb',
        //  function to be called in preview page head section
        'admin-head-callback'       => 'adminhead_cb',
        // function to produce preview markup in the admin screen
        'admin-preview-callback'    => 'adminpreview_cb',
        );
}
add_action( 'after_setup_theme', 'themename_custom_header_setup' );

$header_info = array(
    'width'         => 980,
    'height'        => 60,
    'default-image' => get_template_directory_uri() . '/images/sunset.jpg',
);
add_theme_support( 'custom-header', $header_info );
 
$header_images = array(
    'sunset' => array(
            'url'           => get_template_directory_uri() . '/images/sunset.jpg',
            'thumbnail_url' => get_template_directory_uri() . '/images/sunset_thumbnail.jpg',
            'description'   => 'Sunset',
    ),
    'flower' => array(
            'url'           => get_template_directory_uri() . '/images/flower.jpg',
            'thumbnail_url' => get_template_directory_uri() . '/images/flower_thumbnail.jpg',
            'description'   => 'Flower',
    ),  
);
register_default_headers( $header_images );


function wpdocs_theme_name_wp_title( $title, $sep ) {
    if ( is_feed() ) {
        return $title;
    }
     
    global $page, $paged;
 
    // Add the blog name
    $title .= get_bloginfo( 'name', 'display' );
 
    // Add the blog description for the home/front page.
    $site_description = get_bloginfo( 'description', 'display' );
    if ( $site_description && ( is_home() || is_front_page() ) ) {
        $title .= " $sep $site_description";
    }
 
    // Add a page number if necessary:
    if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() ) {
        $title .= " $sep " . sprintf( __( 'Page %s', '_s' ), max( $paged, $page ) );
    }
    return $title;
}
add_filter( 'wp_title', 'wpdocs_theme_name_wp_title', 10, 2 );

function dreamscape_widgets_init() {     register_sidebar( array(         'name' => __( 'Footer Widget Area', 'dreamscape' ),
        'id' => 'footer-sidebar',
        'description' => __( 'Appears on the footer, which has its own widgets', 'dreamscape' ),
        'before_widget' => '
<div id="%1$s" class="widgetfooter">',
        'after_widget' => '</div>
',
        'before_title' => '
<h3 class="widget-title">',
        'after_title' => '</h3>
',
    ) );
}
add_action( 'widgets_init', 'dreamscape_widgets_init' );


