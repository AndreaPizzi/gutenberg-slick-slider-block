<?php
/**
 * Includes and register the custom Guttenberg Blocks
 *
 * @ACF vers: 5.8.0
 *
 */

 // Register a Slids Carousel ACF Block
if( function_exists('acf_register_block') ) {
     
    $result = acf_register_block(array(
        'name'              => 'image_slider', // Name of our block
        'title'             => __('Image Slider'), // Title of our block
        'description'       => __('A custom NT-Next Image Slider block.'), // Description of our block
        'render_callback'   => 'image_slider_block_html',// Callback function ( the once that contain the template of our block )
        'category'          => 'layout',// The category in which the block will be inserted 
        'icon'              => 'format-gallery', // The icon associated with the block ( choose from wordpress dashicons )
        //'keywords'        => array(),
    ));
}

// Callback to render the testimonial ACF Block
function image_slider_block_html() {
    // Check for needed files for Image Carousel Block
    // Check if " slick.min.js " is "enqueued", if so next step, else, register it
    $handle = 'slick_JS';
    $list = 'enqueued';
    if (!wp_script_is( $handle, $list )) {
        wp_register_script( 'slick_JS', get_template_directory_uri() . '/js/slick/slick.min.js');
        wp_enqueue_script( 'slick_JS' );
    }
// Check if " slick.css " is "enqueued", if so next step, else, register it 
    $handle_css = 'slick-css'; 
    $list_css = 'enqueued'; 
    if(!wp_style_is($handle_css, $list_css)){
        wp_enqueue_style( 'slick-css',  get_template_directory_uri() .'/css/slick/slick.css' ); 
    }
// Include the partials files with the template.
    include( STYLESHEETPATH . "/custom/blocks/block-image_slider.php" );
}


?>
