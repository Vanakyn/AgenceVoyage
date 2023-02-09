<?php
/**
 * Custom header implementation
 */

function tafri_travel_blog_custom_header_setup() {

	add_theme_support( 'custom-header', apply_filters( 'tafri_travel_blog_custom_header_args', array(
		'default-text-color'     => 'fff',
		'header-text' 			 =>	false,
		'width'                  => 1200,
		'height'                 => 95,
		'flex-width'         	=> true,
        'flex-height'        	=> true,
		'wp-head-callback'       => 'tafri_travel_blog_header_style',
	) ) );
}

add_action( 'after_setup_theme', 'tafri_travel_blog_custom_header_setup' );

if ( ! function_exists( 'tafri_travel_blog_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog
 *
 * @see tafri_travel_blog_custom_header_setup().
 */
add_action( 'wp_enqueue_scripts', 'tafri_travel_blog_header_style' );
function tafri_travel_blog_header_style() {
	//Check if user has defined any header image.
	if ( get_header_image() ) :
	$tafri_travel_blog_custom_css = "
		#masthead, .page-template-home-custom .main-header {
			background-image:url('".esc_url(get_header_image())."');
			background-position: center top;
			background-size: 100% 100%;
		}
		.page-template-home-custom #masthead{
			background: transparent;
		}";
	   	wp_add_inline_style( 'tafri-travel-blog-basic-style', $tafri_travel_blog_custom_css );
	endif;
}
endif; // tafri_travel_blog_header_style