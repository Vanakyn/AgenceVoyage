<?php
/**
 * Tafri Travel Blog: Customizer
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */

function tafri_travel_blog_customize_register( $wp_customize ) {

	load_template( trailingslashit( get_template_directory() ) . '/inc/icon-changer.php' );

	$wp_customize->add_panel( 'tafri_travel_blog_panel_id', array(
		'priority' => 10,
		'capability' => 'edit_theme_options',
		'theme_supports' => '',
		'title' => __( 'Theme Settings', 'tafri-travel-blog' ),
		'description' => __( 'Description of what this panel does.', 'tafri-travel-blog' ),
	) );

	// font array
	$tafri_travel_blog_font_array = array(
		'' => 'No Fonts',
		'Abril Fatface' => 'Abril Fatface',
		'Acme' => 'Acme',
		'Anton' => 'Anton',
		'Architects Daughter' => 'Architects Daughter',
		'Arimo' => 'Arimo',
		'Arsenal' => 'Arsenal', 
		'Arvo' => 'Arvo',
		'Alegreya' => 'Alegreya',
		'Alfa Slab One' => 'Alfa Slab One',
		'Averia Serif Libre' => 'Averia Serif Libre',
		'Bangers' => 'Bangers', 
		'Boogaloo' => 'Boogaloo',
		'Bad Script' => 'Bad Script',
		'Bitter' => 'Bitter',
		'Bree Serif' => 'Bree Serif',
		'BenchNine' => 'BenchNine', 
		'Cabin' => 'Cabin', 
		'Cardo' => 'Cardo',
		'Courgette' => 'Courgette',
		'Cherry Swash' => 'Cherry Swash',
		'Cormorant Garamond' => 'Cormorant Garamond',
		'Crimson Text' => 'Crimson Text',
		'Cuprum' => 'Cuprum', 
		'Cookie' => 'Cookie', 
		'Chewy' => 'Chewy', 
		'Days One' => 'Days One', 
		'Dosis' => 'Dosis',
		'Droid Sans' => 'Droid Sans',
		'Economica' => 'Economica',
		'Fredoka One' => 'Fredoka One',
		'Fjalla One' => 'Fjalla One',
		'Francois One' => 'Francois One',
		'Frank Ruhl Libre' => 'Frank Ruhl Libre',
		'Gloria Hallelujah' => 'Gloria Hallelujah',
		'Great Vibes' => 'Great Vibes',
		'Handlee' => 'Handlee', 
		'Hammersmith One' => 'Hammersmith One',
		'Inconsolata' => 'Inconsolata', 
		'Indie Flower' => 'Indie Flower', 
		'IM Fell English SC' => 'IM Fell English SC', 
		'Julius Sans One' => 'Julius Sans One',
		'Josefin Slab' => 'Josefin Slab', 
		'Josefin Sans' => 'Josefin Sans', 
		'Kanit' => 'Kanit', 
		'Lobster' => 'Lobster', 
		'Lato' => 'Lato',
		'Lora' => 'Lora', 
		'Libre Baskerville' =>'Libre Baskerville',
		'Lobster Two' => 'Lobster Two',
		'Merriweather' =>'Merriweather', 
		'Monda' => 'Monda',
		'Montserrat' => 'Montserrat',
		'Muli' => 'Muli', 
		'Marck Script' => 'Marck Script',
		'Noto Serif' => 'Noto Serif',
		'Open Sans' => 'Open Sans', 
		'Overpass' => 'Overpass',
		'Overpass Mono' => 'Overpass Mono',
		'Oxygen' => 'Oxygen', 
		'Orbitron' => 'Orbitron', 
		'Patua One' => 'Patua One', 
		'Pacifico' => 'Pacifico',
		'Padauk' => 'Padauk', 
		'Playball' => 'Playball',
		'Playfair Display' => 'Playfair Display', 
		'PT Sans' => 'PT Sans',
		'Philosopher' => 'Philosopher',
		'Permanent Marker' => 'Permanent Marker',
		'Poiret One' => 'Poiret One', 
		'Quicksand' => 'Quicksand', 
		'Quattrocento Sans' => 'Quattrocento Sans', 
		'Raleway' => 'Raleway', 
		'Rubik' => 'Rubik', 
		'Rokkitt' => 'Rokkitt', 
		'Russo One' => 'Russo One', 
		'Righteous' => 'Righteous', 
		'Slabo' => 'Slabo', 
		'Source Sans Pro' => 'Source Sans Pro', 
		'Shadows Into Light Two' =>'Shadows Into Light Two', 
		'Shadows Into Light' => 'Shadows Into Light', 
		'Sacramento' => 'Sacramento', 
		'Shrikhand' => 'Shrikhand', 
		'Tangerine' => 'Tangerine',
		'Ubuntu' => 'Ubuntu', 
		'VT323' => 'VT323', 
		'Varela Round' => 'Varela Round', 
		'Vampiro One' => 'Vampiro One',
		'Vollkorn' => 'Vollkorn',
		'Volkhov' => 'Volkhov', 
		'Yanone Kaffeesatz' => 'Yanone Kaffeesatz',
 	);
    
	//Typography
	$wp_customize->add_section( 'tafri_travel_blog_typography', array(
    	'title'      => __( 'Color / Fonts Settings', 'tafri-travel-blog' ),
		'panel' => 'tafri_travel_blog_panel_id'
	) );
	
	// This is Paragraph Color picker setting
	$wp_customize->add_setting( 'tafri_travel_blog_paragraph_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tafri_travel_blog_paragraph_color', array(
		'label' => __('Paragraph Color', 'tafri-travel-blog'),
		'section' => 'tafri_travel_blog_typography',
		'settings' => 'tafri_travel_blog_paragraph_color',
	)));

	//This is Paragraph FontFamily picker setting
	$wp_customize->add_setting('tafri_travel_blog_paragraph_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'tafri_travel_blog_sanitize_choices'
	));
	$wp_customize->add_control(
		'tafri_travel_blog_paragraph_font_family', array(
		'section'  => 'tafri_travel_blog_typography',
		'label'    => __( 'Paragraph Fonts','tafri-travel-blog'),
		'type'     => 'select',
		'choices'  => $tafri_travel_blog_font_array,
	));

	$wp_customize->add_setting('tafri_travel_blog_paragraph_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('tafri_travel_blog_paragraph_font_size',array(
		'label'	=> __('Paragraph Font Size','tafri-travel-blog'),
		'section'	=> 'tafri_travel_blog_typography',
		'setting'	=> 'tafri_travel_blog_paragraph_font_size',
		'type'	=> 'text'
	));

	// This is "a" Tag Color picker setting
	$wp_customize->add_setting( 'tafri_travel_blog_atag_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tafri_travel_blog_atag_color', array(
		'label' => __('"a" Tag Color', 'tafri-travel-blog'),
		'section' => 'tafri_travel_blog_typography',
		'settings' => 'tafri_travel_blog_atag_color',
	)));

	//This is "a" Tag FontFamily picker setting
	$wp_customize->add_setting('tafri_travel_blog_atag_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'tafri_travel_blog_sanitize_choices'
	));
	$wp_customize->add_control(
		'tafri_travel_blog_atag_font_family', array(
		'section'  => 'tafri_travel_blog_typography',
		'label'    => __( '"a" Tag Fonts','tafri-travel-blog'),
		'type'     => 'select',
		'choices'  => $tafri_travel_blog_font_array,
	));

	// This is "a" Tag Color picker setting
	$wp_customize->add_setting( 'tafri_travel_blog_li_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tafri_travel_blog_li_color', array(
		'label' => __('"li" Tag Color', 'tafri-travel-blog'),
		'section' => 'tafri_travel_blog_typography',
		'settings' => 'tafri_travel_blog_li_color',
	)));

	//This is "li" Tag FontFamily picker setting
	$wp_customize->add_setting('tafri_travel_blog_li_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'tafri_travel_blog_sanitize_choices'
	));
	$wp_customize->add_control(
		'tafri_travel_blog_li_font_family', array(
		'section'  => 'tafri_travel_blog_typography',
		'label'    => __( '"li" Tag Fonts','tafri-travel-blog'),
		'type'     => 'select',
		'choices'  => $tafri_travel_blog_font_array,
	));

	// This is H1 Color picker setting
	$wp_customize->add_setting( 'tafri_travel_blog_h1_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tafri_travel_blog_h1_color', array(
		'label' => __('H1 Color', 'tafri-travel-blog'),
		'section' => 'tafri_travel_blog_typography',
		'settings' => 'tafri_travel_blog_h1_color',
	)));

	//This is H1 FontFamily picker setting
	$wp_customize->add_setting('tafri_travel_blog_h1_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'tafri_travel_blog_sanitize_choices'
	));
	$wp_customize->add_control(
		'tafri_travel_blog_h1_font_family', array(
		'section'  => 'tafri_travel_blog_typography',
		'label'    => __( 'H1 Fonts','tafri-travel-blog'),
		'type'     => 'select',
		'choices'  => $tafri_travel_blog_font_array,
	));

	//This is H1 FontSize setting
	$wp_customize->add_setting('tafri_travel_blog_h1_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('tafri_travel_blog_h1_font_size',array(
		'label'	=> __('H1 Font Size','tafri-travel-blog'),
		'section'	=> 'tafri_travel_blog_typography',
		'setting'	=> 'tafri_travel_blog_h1_font_size',
		'type'	=> 'text'
	));

	// This is H2 Color picker setting
	$wp_customize->add_setting( 'tafri_travel_blog_h2_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tafri_travel_blog_h2_color', array(
		'label' => __('h2 Color', 'tafri-travel-blog'),
		'section' => 'tafri_travel_blog_typography',
		'settings' => 'tafri_travel_blog_h2_color',
	)));

	//This is H2 FontFamily picker setting
	$wp_customize->add_setting('tafri_travel_blog_h2_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'tafri_travel_blog_sanitize_choices'
	));
	$wp_customize->add_control(
		'tafri_travel_blog_h2_font_family', array(
		'section'  => 'tafri_travel_blog_typography',
		'label'    => __( 'h2 Fonts','tafri-travel-blog'),
		'type'     => 'select',
		'choices'  => $tafri_travel_blog_font_array,
	));

	//This is H2 FontSize setting
	$wp_customize->add_setting('tafri_travel_blog_h2_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('tafri_travel_blog_h2_font_size',array(
		'label'	=> __('h2 Font Size','tafri-travel-blog'),
		'section'	=> 'tafri_travel_blog_typography',
		'setting'	=> 'tafri_travel_blog_h2_font_size',
		'type'	=> 'text'
	));

	// This is H3 Color picker setting
	$wp_customize->add_setting( 'tafri_travel_blog_h3_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tafri_travel_blog_h3_color', array(
		'label' => __('h3 Color', 'tafri-travel-blog'),
		'section' => 'tafri_travel_blog_typography',
		'settings' => 'tafri_travel_blog_h3_color',
	)));

	//This is H3 FontFamily picker setting
	$wp_customize->add_setting('tafri_travel_blog_h3_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'tafri_travel_blog_sanitize_choices'
	));
	$wp_customize->add_control(
		'tafri_travel_blog_h3_font_family', array(
		'section'  => 'tafri_travel_blog_typography',
		'label'    => __( 'h3 Fonts','tafri-travel-blog'),
		'type'     => 'select',
		'choices'  => $tafri_travel_blog_font_array,
	));

	//This is H3 FontSize setting
	$wp_customize->add_setting('tafri_travel_blog_h3_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('tafri_travel_blog_h3_font_size',array(
		'label'	=> __('h3 Font Size','tafri-travel-blog'),
		'section'	=> 'tafri_travel_blog_typography',
		'setting'	=> 'tafri_travel_blog_h3_font_size',
		'type'	=> 'text'
	));

	// This is H4 Color picker setting
	$wp_customize->add_setting( 'tafri_travel_blog_h4_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tafri_travel_blog_h4_color', array(
		'label' => __('h4 Color', 'tafri-travel-blog'),
		'section' => 'tafri_travel_blog_typography',
		'settings' => 'tafri_travel_blog_h4_color',
	)));

	//This is H4 FontFamily picker setting
	$wp_customize->add_setting('tafri_travel_blog_h4_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'tafri_travel_blog_sanitize_choices'
	));
	$wp_customize->add_control(
		'tafri_travel_blog_h4_font_family', array(
		'section'  => 'tafri_travel_blog_typography',
		'label'    => __( 'h4 Fonts','tafri-travel-blog'),
		'type'     => 'select',
		'choices'  => $tafri_travel_blog_font_array,
	));

	//This is H4 FontSize setting
	$wp_customize->add_setting('tafri_travel_blog_h4_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('tafri_travel_blog_h4_font_size',array(
		'label'	=> __('h4 Font Size','tafri-travel-blog'),
		'section'	=> 'tafri_travel_blog_typography',
		'setting'	=> 'tafri_travel_blog_h4_font_size',
		'type'	=> 'text'
	));

	// This is H5 Color picker setting
	$wp_customize->add_setting( 'tafri_travel_blog_h5_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tafri_travel_blog_h5_color', array(
		'label' => __('h5 Color', 'tafri-travel-blog'),
		'section' => 'tafri_travel_blog_typography',
		'settings' => 'tafri_travel_blog_h5_color',
	)));

	//This is H5 FontFamily picker setting
	$wp_customize->add_setting('tafri_travel_blog_h5_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'tafri_travel_blog_sanitize_choices'
	));
	$wp_customize->add_control(
		'tafri_travel_blog_h5_font_family', array(
		'section'  => 'tafri_travel_blog_typography',
		'label'    => __( 'h5 Fonts','tafri-travel-blog'),
		'type'     => 'select',
		'choices'  => $tafri_travel_blog_font_array,
	));

	//This is H5 FontSize setting
	$wp_customize->add_setting('tafri_travel_blog_h5_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('tafri_travel_blog_h5_font_size',array(
		'label'	=> __('h5 Font Size','tafri-travel-blog'),
		'section'	=> 'tafri_travel_blog_typography',
		'setting'	=> 'tafri_travel_blog_h5_font_size',
		'type'	=> 'text'
	));

	// This is H6 Color picker setting
	$wp_customize->add_setting( 'tafri_travel_blog_h6_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tafri_travel_blog_h6_color', array(
		'label' => __('h6 Color', 'tafri-travel-blog'),
		'section' => 'tafri_travel_blog_typography',
		'settings' => 'tafri_travel_blog_h6_color',
	)));

	//This is H6 FontFamily picker setting
	$wp_customize->add_setting('tafri_travel_blog_h6_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'tafri_travel_blog_sanitize_choices'
	));
	$wp_customize->add_control(
		'tafri_travel_blog_h6_font_family', array(
		'section'  => 'tafri_travel_blog_typography',
		'label'    => __( 'h6 Fonts','tafri-travel-blog'),
		'type'     => 'select',
		'choices'  => $tafri_travel_blog_font_array,
	));

	//This is H6 FontSize setting
	$wp_customize->add_setting('tafri_travel_blog_h6_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('tafri_travel_blog_h6_font_size',array(
		'label'	=> __('h6 Font Size','tafri-travel-blog'),
		'section'	=> 'tafri_travel_blog_typography',
		'setting'	=> 'tafri_travel_blog_h6_font_size',
		'type'	=> 'text'
	));

	// background skin mode
	$wp_customize->add_setting('tafri_travel_blog_background_image_type',array(
     	'default' => 'Transparent',
     	'sanitize_callback' => 'tafri_travel_blog_sanitize_choices'
	));
	$wp_customize->add_control('tafri_travel_blog_background_image_type',array(
     	'type' => 'radio',
     	'label' => __('Background Skin Mode','tafri-travel-blog'),
     	'section' => 'background_image',
     	'choices' => array(
         'Transparent' => __('Transparent','tafri-travel-blog'),
         'Background' => __('Background','tafri-travel-blog'),
     	),
	) );

  	// woocommerce Options
	$wp_customize->add_section( 'tafri_travel_blog_shop_page_options', array(
    	'title'      => __( 'Shop Page Settings', 'tafri-travel-blog' ),
		'panel' => 'tafri_travel_blog_panel_id'
	) );

	$wp_customize->add_setting('tafri_travel_blog_display_related_products',array(
		'default' => true,
		'sanitize_callback'	=> 'tafri_travel_blog_sanitize_checkbox'
	));
	$wp_customize->add_control('tafri_travel_blog_display_related_products',array(
		'type' => 'checkbox',
		'label' => __('Related Product','tafri-travel-blog'),
		'section' => 'tafri_travel_blog_shop_page_options',
	));

	$wp_customize->add_setting('tafri_travel_blog_shop_products_border',array(
		'default' => true,
		'sanitize_callback'	=> 'tafri_travel_blog_sanitize_checkbox'
	));
	$wp_customize->add_control('tafri_travel_blog_shop_products_border',array(
		'type' => 'checkbox',
		'label' => __('Product Border','tafri-travel-blog'),
		'section' => 'tafri_travel_blog_shop_page_options',
	));

  	$wp_customize->add_setting('tafri_travel_blog_shop_page_sidebar',array(
		'default' => true,
		'sanitize_callback'	=> 'tafri_travel_blog_sanitize_checkbox'
	));
	$wp_customize->add_control('tafri_travel_blog_shop_page_sidebar',array(
		'type' => 'checkbox',
		'label' => __('Enable / Disable Shop Page Sidebar','tafri-travel-blog'),
		'section' => 'tafri_travel_blog_shop_page_options',
	));

 	$wp_customize->add_setting('tafri_travel_blog_single_product_sidebar',array(
		'default' => true,
		'sanitize_callback'	=> 'tafri_travel_blog_sanitize_checkbox'
	));
	$wp_customize->add_control('tafri_travel_blog_single_product_sidebar',array(
     	'type' => 'checkbox',
   	'label' => __('Enable / Disable Single Product Sidebar','tafri-travel-blog'),
   	'section' => 'tafri_travel_blog_shop_page_options',
	));

	$wp_customize->add_setting( 'tafri_travel_blog_woocommerce_product_per_columns' , array(
		'default'           => 3,
		'transport'         => 'refresh',
		'sanitize_callback' => 'tafri_travel_blog_sanitize_choices',
	) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'tafri_travel_blog_woocommerce_product_per_columns', array(
		'label'    => __( 'Total Products Per Columns', 'tafri-travel-blog' ),
		'section'  => 'tafri_travel_blog_shop_page_options',
		'type'     => 'radio',
		'choices'  => array(
			'2' => '2',
			'3' => '3',
			'4' => '4',
			'5' => '5',
		),
	) ) );

	$wp_customize->add_setting('tafri_travel_blog_woocommerce_product_per_page',array(
		'default'	=> 9,
		'sanitize_callback'	=> 'tafri_travel_blog_sanitize_float',
	));	
	$wp_customize->add_control('tafri_travel_blog_woocommerce_product_per_page',array(
		'label'	=> __('Total Products Per Page','tafri-travel-blog'),
		'section'	=> 'tafri_travel_blog_shop_page_options',
		'type'		=> 'number'
	));

	$wp_customize->add_setting( 'tafri_travel_blog_shop_page_top_padding',array(
		'default' => 10,
		'sanitize_callback'	=> 'tafri_travel_blog_sanitize_float',
	));
	$wp_customize->add_control( 'tafri_travel_blog_shop_page_top_padding',	array(
		'label' => esc_html__( 'Product Padding (Top Bottom)','tafri-travel-blog' ),
		'section' => 'tafri_travel_blog_shop_page_options',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'number'
	));

	$wp_customize->add_setting( 'tafri_travel_blog_shop_page_left_padding',array(
		'default' => 10,
		'sanitize_callback'	=> 'tafri_travel_blog_sanitize_float',
	));
	$wp_customize->add_control( 'tafri_travel_blog_shop_page_left_padding',	array(
		'label' => esc_html__( 'Product Padding (Right Left)','tafri-travel-blog' ),
		'section' => 'tafri_travel_blog_shop_page_options',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'number'
	));

	$wp_customize->add_setting( 'tafri_travel_blog_shop_page_border_radius',array(
		'default' => 0,
		'sanitize_callback'	=> 'tafri_travel_blog_sanitize_float',
	));
	$wp_customize->add_control('tafri_travel_blog_shop_page_border_radius',array(
		'label' => esc_html__( 'Product Border Radius','tafri-travel-blog' ),
		'section' => 'tafri_travel_blog_shop_page_options',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'number'
	));

	$wp_customize->add_setting( 'tafri_travel_blog_shop_page_box_shadow',array(
		'default' => 0,
		'sanitize_callback'	=> 'tafri_travel_blog_sanitize_float',
	));
	$wp_customize->add_control('tafri_travel_blog_shop_page_box_shadow',array(
		'label' => esc_html__( 'Product Shadow','tafri-travel-blog' ),
		'section' => 'tafri_travel_blog_shop_page_options',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'number'
	));

	$wp_customize->add_setting( 'tafri_travel_blog_shop_button_padding_top',array(
		'default' => 9,
		'sanitize_callback'	=> 'tafri_travel_blog_sanitize_float',
	));
	$wp_customize->add_control('tafri_travel_blog_shop_button_padding_top',	array(
		'label' => esc_html__( 'Button Padding (Top Bottom)','tafri-travel-blog' ),
		'section' => 'tafri_travel_blog_shop_page_options',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'number',

	));

	$wp_customize->add_setting( 'tafri_travel_blog_shop_button_padding_left',array(
		'default' => 16,
		'sanitize_callback'	=> 'tafri_travel_blog_sanitize_float',
	));
	$wp_customize->add_control('tafri_travel_blog_shop_button_padding_left',array(
		'label' => esc_html__( 'Button Padding (Right Left)','tafri-travel-blog' ),
		'section' => 'tafri_travel_blog_shop_page_options',
		'type'		=> 'number',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting( 'tafri_travel_blog_shop_button_border_radius',array(
		'default' => 5,
		'sanitize_callback'	=> 'tafri_travel_blog_sanitize_float',
	));
	$wp_customize->add_control('tafri_travel_blog_shop_button_border_radius',array(
		'label' => esc_html__( 'Button Border Radius','tafri-travel-blog' ),
		'section' => 'tafri_travel_blog_shop_page_options',
		'type'		=> 'number',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting('tafri_travel_blog_position_product_sale',array(
		'default' => 'Right',
		'sanitize_callback' => 'tafri_travel_blog_sanitize_choices'
	));
	$wp_customize->add_control('tafri_travel_blog_position_product_sale',array(
		'type' => 'radio',
		'label' => __('Product Sale Position','tafri-travel-blog'),
		'section' => 'tafri_travel_blog_shop_page_options',
		'choices' => array(
		   'Right' => __('Right','tafri-travel-blog'),
		   'Left' => __('Left','tafri-travel-blog'),
		),
	) );

	$wp_customize->add_setting( 'tafri_travel_blog_border_radius_product_sale_text',array(
		'default' => 0,
		'sanitize_callback'	=> 'tafri_travel_blog_sanitize_float',
	));
	$wp_customize->add_control('tafri_travel_blog_border_radius_product_sale_text', array(
		'label'  => __('Product Sale Border Radius','tafri-travel-blog'),
		'section'  => 'tafri_travel_blog_shop_page_options',
		'type'        => 'number',
		'input_attrs' => array(
			'step'=> 1,
		   'min' => 0,
		   'max' => 50,
		)
    ) );

	$wp_customize->add_setting('tafri_travel_blog_product_sale_text_size',array(
		'default'=> 14,
		'sanitize_callback'	=> 'tafri_travel_blog_sanitize_float'
	));
	$wp_customize->add_control('tafri_travel_blog_product_sale_text_size',array(
		'label'	=> __('Product Sale Text Size','tafri-travel-blog'),
		'input_attrs' => array(
         'step'             => 1,
			'min'              => 0,
			'max'              => 50,
     	),
		'section'=> 'tafri_travel_blog_shop_page_options',
		'type'=> 'number'
	));
	
	$wp_customize->add_setting( 'tafri_travel_blog_top_bottom_product_sale_padding',array(
		'default' => 0,
		'sanitize_callback'	=> 'tafri_travel_blog_sanitize_float',
	));
	$wp_customize->add_control('tafri_travel_blog_top_bottom_product_sale_padding',	array(
		'label' => esc_html__( 'Top / Bottom Product Sale Padding','tafri-travel-blog' ),
		'section' => 'tafri_travel_blog_shop_page_options',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'number',

	));

	$wp_customize->add_setting( 'tafri_travel_blog_left_right_product_sale_padding',array(
		'default' => 0,
		'sanitize_callback'	=> 'tafri_travel_blog_sanitize_float',
	));
	$wp_customize->add_control('tafri_travel_blog_left_right_product_sale_padding',array(
		'label' => esc_html__( 'Left / Right Product Sale Padding','tafri-travel-blog' ),
		'section' => 'tafri_travel_blog_shop_page_options',
		'type'		=> 'number',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting('tafri_travel_blog_shop_products_navigation',array(
		'default' => 'Yes',
		'sanitize_callback'	=> 'tafri_travel_blog_sanitize_choices'
	));
	$wp_customize->add_control('tafri_travel_blog_shop_products_navigation',array(
		'type' => 'radio',
		'label' => __('Woocommerce Products Navigation','tafri-travel-blog'),
		'choices' => array(
		   'Yes' => __('Yes','tafri-travel-blog'),
		   'No' => __('No','tafri-travel-blog'),
		),
		'section' => 'tafri_travel_blog_shop_page_options',
    ));

  	//Layout Settings
	$wp_customize->add_section( 'tafri_travel_blog_width_layout', array(
    	'title'      => __( 'Layout Settings', 'tafri-travel-blog' ),
		'panel' => 'tafri_travel_blog_panel_id'
	) );

	//Sticky Header
	$wp_customize->add_setting( 'tafri_travel_blog_fixed_header',array(
		'default' => false,
   	'sanitize_callback'	=> 'tafri_travel_blog_sanitize_checkbox'
 	) );
 	$wp_customize->add_control('tafri_travel_blog_fixed_header',array(
    	'type' => 'checkbox',
		'label' => __( 'Enable / Disable Fixed Header','tafri-travel-blog' ),
		'section' => 'tafri_travel_blog_width_layout'
    ));

 	$wp_customize->add_setting( 'tafri_travel_blog_fixed_header_padding_option', array(
		'default'=> '',
		'sanitize_callback'	=> 'tafri_travel_blog_sanitize_float',
	) );
	$wp_customize->add_control( 'tafri_travel_blog_fixed_header_padding_option', array(
		'label'       => esc_html__( 'Fixed Header Padding','tafri-travel-blog' ),
		'section'     => 'tafri_travel_blog_width_layout',
		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting('tafri_travel_blog_loader_setting',array(
		'default' => false,
		'sanitize_callback'	=> 'tafri_travel_blog_sanitize_checkbox'
	));
	$wp_customize->add_control('tafri_travel_blog_loader_setting',array(
		'type' => 'checkbox',
		'label' => __('Enable / Disable Preloader','tafri-travel-blog'),
		'section' => 'tafri_travel_blog_width_layout'
	));

 	$wp_customize->add_setting('tafri_travel_blog_preloader_types',array(
     'default' => 'Default',
     'sanitize_callback' => 'tafri_travel_blog_sanitize_choices'
	));
	$wp_customize->add_control('tafri_travel_blog_preloader_types',array(
		'type' => 'radio',
		'label' => __('Preloader Option','tafri-travel-blog'),
		'section' => 'tafri_travel_blog_width_layout',
		'choices' => array(
		   'Default' => __('Default','tafri-travel-blog'),
		   'Circle' => __('Circle','tafri-travel-blog'),
		   'Two Circle' => __('Two Circle','tafri-travel-blog')
		),
	) );

 	$wp_customize->add_setting( 'tafri_travel_blog_loader_color_setting', array(
		'default' => '#fff',
		'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tafri_travel_blog_loader_color_setting', array(
  		'label' => __('Preloader Color Option', 'tafri-travel-blog'),
		'section' => 'tafri_travel_blog_width_layout',
		'settings' => 'tafri_travel_blog_loader_color_setting',
  	)));

  	$wp_customize->add_setting( 'tafri_travel_blog_loader_background_color', array(
		'default' => '#000',
		'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tafri_travel_blog_loader_background_color', array(
  		'label' => __('Preloader Background Color Option', 'tafri-travel-blog'),
		'section' => 'tafri_travel_blog_width_layout',
		'settings' => 'tafri_travel_blog_loader_background_color',
  	)));

	$wp_customize->add_setting('tafri_travel_blog_theme_options',array(
    	'default' => 'Default',
     	'sanitize_callback' => 'tafri_travel_blog_sanitize_choices'
	));
	$wp_customize->add_control('tafri_travel_blog_theme_options',array(
		'type' => 'select',
		'label' => __('Container Box','tafri-travel-blog'),
		'description' => __('Here you can change the Width layout. ','tafri-travel-blog'),
		'section' => 'tafri_travel_blog_width_layout',
		'choices' => array(
		   'Default' => __('Default','tafri-travel-blog'),
		   'Wide Layout' => __('Wide Layout','tafri-travel-blog'),
		   'Box Layout' => __('Box Layout','tafri-travel-blog'),
		),
	) );

	// Button Settings
	$wp_customize->add_section( 'tafri_travel_blog_button_option', array(
		'title' => __('Button','tafri-travel-blog'),
		'panel' => 'tafri_travel_blog_panel_id',
	));

	$wp_customize->add_setting('tafri_travel_blog_top_bottom_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'tafri_travel_blog_sanitize_float',
	));
	$wp_customize->add_control('tafri_travel_blog_top_bottom_padding',array(
		'label'	=> __('Top and Bottom Padding ','tafri-travel-blog'),
		'input_attrs' => array(
         'step'             => 1,
			'min'              => 0,
			'max'              => 50,
     	),
		'section'=> 'tafri_travel_blog_button_option',
		'type'=> 'number'
	));

	$wp_customize->add_setting('tafri_travel_blog_left_right_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'tafri_travel_blog_sanitize_float',
	));
	$wp_customize->add_control('tafri_travel_blog_left_right_padding',array(
		'label'	=> __('Left and Right Padding','tafri-travel-blog'),
		'input_attrs' => array(
         'step'             => 1,
			'min'              => 0,
			'max'              => 50,
     	),
		'section'=> 'tafri_travel_blog_button_option',
		'type'=> 'number'
	));

	$wp_customize->add_setting( 'tafri_travel_blog_border_radius', array(
		'default'=> '',
		'sanitize_callback'	=> 'tafri_travel_blog_sanitize_float',
	) );
	$wp_customize->add_control( 'tafri_travel_blog_border_radius', array(
		'label'       => esc_html__( 'Button Border Radius','tafri-travel-blog' ),
		'section'     => 'tafri_travel_blog_button_option',
		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	// sidebar setting
	$wp_customize->add_section( 'tafri_travel_blog_general_option', array(
    	'title'      => __( 'Sidebar Settings', 'tafri-travel-blog' ),
		'panel' => 'tafri_travel_blog_panel_id'
	) );

	// Add Settings and Controls for Layout
	$wp_customize->add_setting('tafri_travel_blog_layout_settings',array(
     	'default' => 'Right Sidebar',
     	'sanitize_callback' => 'tafri_travel_blog_sanitize_choices'
	));
	$wp_customize->add_control('tafri_travel_blog_layout_settings',array(
		'type' => 'radio',
		'label' => __('Post Sidebar Layout','tafri-travel-blog'),
		'section' => 'tafri_travel_blog_general_option',
		'description' => __('This option work for blog page, blog single page, archive page and search page.','tafri-travel-blog'),
		'choices' => array(
		   	'Left Sidebar' => __('Left Sidebar','tafri-travel-blog'),
		   	'Right Sidebar' => __('Right Sidebar','tafri-travel-blog'),
		   	'One Column' => __('Full Column','tafri-travel-blog'),
		   	'Three Columns' => __('Three Columns','tafri-travel-blog'),
		   	'Four Columns' => __('Four Columns','tafri-travel-blog'),
		   	'Grid Layout' => __('Grid Layout','tafri-travel-blog')
		),
	) );

	$wp_customize->add_setting('tafri_travel_blog_page_sidebar_option',array(
     	'default' => 'One Column',
     	'sanitize_callback' => 'tafri_travel_blog_sanitize_choices'
	));
	$wp_customize->add_control('tafri_travel_blog_page_sidebar_option',array(
     	'type' => 'radio',
     	'label' => __('Page Sidebar Layout','tafri-travel-blog'),
     	'section' => 'tafri_travel_blog_general_option',
     	'choices' => array(
         	'Left Sidebar' => __('Left Sidebar','tafri-travel-blog'),
         	'Right Sidebar' => __('Right Sidebar','tafri-travel-blog'),
         	'One Column' => __('Full Column','tafri-travel-blog')
     	),
	) );

	$wp_customize->add_setting('tafri_travel_blog_single_post_sidebar_option',array(
     	'default' => 'Right Sidebar',
     	'sanitize_callback' => 'tafri_travel_blog_sanitize_choices'
	));
	$wp_customize->add_control('tafri_travel_blog_single_post_sidebar_option',array(
     	'type' => 'radio',
     	'label' => __('Single Post Sidebar Layout','tafri-travel-blog'),
     	'section' => 'tafri_travel_blog_general_option',
     	'choices' => array(
         	'Left Sidebar' => __('Left Sidebar','tafri-travel-blog'),
         	'Right Sidebar' => __('Right Sidebar','tafri-travel-blog'),
         	'One Column' => __('Full Column','tafri-travel-blog')
     	),
	) );

	//Topbar section
	$wp_customize->add_section('tafri_travel_blog_header_section',array(
		'title'	=> __('Header Section','tafri-travel-blog'),
		'description'	=> __('Add Header Content here','tafri-travel-blog'),
		'priority'	=> null,
		'panel' => 'tafri_travel_blog_panel_id',
	));

	$wp_customize->add_setting('tafri_travel_blog_header_button_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('tafri_travel_blog_header_button_text',array(
		'label'	=> __('Add Button Text','tafri-travel-blog'),
		'section'	=> 'tafri_travel_blog_header_section',
		'setting'	=> 'tafri_travel_blog_header_button_text',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('tafri_travel_blog_header_button_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('tafri_travel_blog_header_button_url',array(
		'label'	=> __('Add Button URL','tafri-travel-blog'),
		'section'	=> 'tafri_travel_blog_header_section',
		'setting'	=> 'tafri_travel_blog_header_button_url',
		'type'		=> 'text'
	));

	// navigation menu 
	$wp_customize->add_section( 'tafri_travel_blog_navigation_menu' , array(
    	'title'      => __( 'Navigation Menus Settings', 'tafri-travel-blog' ),
		'priority'   => null,
		'panel' => 'tafri_travel_blog_panel_id'
	) );

	$wp_customize->add_setting('tafri_travel_blog_navigation_menu_font_size',array(
		'default'=> '',
		'sanitize_callback'	=> 'tafri_travel_blog_sanitize_float',
	));
	$wp_customize->add_control('tafri_travel_blog_navigation_menu_font_size',array(
		'label'	=> __('Navigation Menus Font Size ','tafri-travel-blog'),
		'section'=> 'tafri_travel_blog_navigation_menu',
		'input_attrs' => array(
         'step'             => 1,
			'min'              => 0,
			'max'              => 50,
     	),
		'type'=> 'number'
	));

	$wp_customize->add_setting('tafri_travel_blog_menu_text_tranform',array(
		'default' => 'Default',
		'sanitize_callback' => 'tafri_travel_blog_sanitize_choices'
	));
 	$wp_customize->add_control('tafri_travel_blog_menu_text_tranform',array(
		'type' => 'radio',
		'label' => __('Navigation Menus Text Transform','tafri-travel-blog'),
		'section' => 'tafri_travel_blog_navigation_menu',
		'choices' => array(
		   'Default' => __('Default','tafri-travel-blog'),
		   'Uppercase' => __('Uppercase','tafri-travel-blog'),
		),
	) );

	$wp_customize->add_setting('tafri_travel_blog_menu_font_weight',array(
		'default' => 'Default',
		'sanitize_callback' => 'tafri_travel_blog_sanitize_choices'
	));
	$wp_customize->add_control('tafri_travel_blog_menu_font_weight',array(
		'type' => 'radio',
		'label' => __('Navigation Menus Font Weight','tafri-travel-blog'),
		'section' => 'tafri_travel_blog_navigation_menu',
		'choices' => array(
		   'Default' => __('Default','tafri-travel-blog'),
		   'Normal' => __('Normal','tafri-travel-blog'),
		),
	) );

	//Social Icons
	$wp_customize->add_section( 'tafri_travel_blog_social_icons' , array(
    	'title'    => __( 'Social Icons', 'tafri-travel-blog' ),
		'priority' => null,
		'panel' => 'tafri_travel_blog_panel_id'
	) );

	$wp_customize->add_setting('tafri_travel_blog_facebook_url',array(
        'default' => '',
        'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('tafri_travel_blog_facebook_url',array(
     	'type' => 'url',
	   	'label' => __('Add Facebook URL','tafri-travel-blog'),
	   	'section' => 'tafri_travel_blog_social_icons',
	));

	$wp_customize->add_setting('tafri_travel_blog_twitter_url',array(
        'default' => '',
        'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('tafri_travel_blog_twitter_url',array(
     	'type' => 'url',
	   	'label' => __('Add Twitter URL','tafri-travel-blog'),
	   	'section' => 'tafri_travel_blog_social_icons',
	));

	$wp_customize->add_setting('tafri_travel_blog_instagram_url',array(
        'default' => '',
        'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('tafri_travel_blog_instagram_url',array(
     	'type' => 'url',
	   	'label' => __('Add Instagram URL','tafri-travel-blog'),
	   	'section' => 'tafri_travel_blog_social_icons',
	));

	$wp_customize->add_setting('tafri_travel_blog_linkedin_url',array(
        'default' => '',
        'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('tafri_travel_blog_linkedin_url',array(
     	'type' => 'url',
	   	'label' => __('Add Linkedin URL','tafri-travel-blog'),
	   	'section' => 'tafri_travel_blog_social_icons',
	));

	//home page slider
	$wp_customize->add_section( 'tafri_travel_blog_slider' , array(
    	'title'      => __( 'Slider Settings', 'tafri-travel-blog' ),
		'priority'   => null,
		'panel' => 'tafri_travel_blog_panel_id'
	) );

	$wp_customize->add_setting('tafri_travel_blog_slider_arrows',array(
        'default' => false,
        'sanitize_callback'	=> 'tafri_travel_blog_sanitize_checkbox'
	));
	$wp_customize->add_control('tafri_travel_blog_slider_arrows',array(
     	'type' => 'checkbox',
	   	'label' => __('Show / Hide slider','tafri-travel-blog'),
	   	'section' => 'tafri_travel_blog_slider',
	));

	$wp_customize->add_setting('tafri_travel_blog_slider_title',array(
		'default' => true,
		'sanitize_callback'	=> 'tafri_travel_blog_sanitize_checkbox'
 	));
 	$wp_customize->add_control('tafri_travel_blog_slider_title',array(
		'type' => 'checkbox',
		'label' => __('Show / Hide Slider Title','tafri-travel-blog'),
		'section' => 'tafri_travel_blog_slider'
	));

	$wp_customize->add_setting('tafri_travel_blog_slider_content',array(
		'default' => true,
		'sanitize_callback'	=> 'tafri_travel_blog_sanitize_checkbox'
	));
	$wp_customize->add_control('tafri_travel_blog_slider_content',array(
		'type' => 'checkbox',
		'label' => __('Show / Hide Slider Content','tafri-travel-blog'),
		'section' => 'tafri_travel_blog_slider'
	));

	$wp_customize->add_setting('tafri_travel_blog_slider_button',array(
		'default' => true,
		'sanitize_callback'	=> 'tafri_travel_blog_sanitize_checkbox'
	));
	$wp_customize->add_control('tafri_travel_blog_slider_button',array(
		'type' => 'checkbox',
		'label' => __('Show / Hide Slider Button','tafri-travel-blog'),
		'section' => 'tafri_travel_blog_slider'
	));

	$wp_customize->add_setting('tafri_travel_blog_slider_width_options',array(
    	'default' => 'Full Width',
     	'sanitize_callback' => 'tafri_travel_blog_sanitize_choices'
	));
	$wp_customize->add_control('tafri_travel_blog_slider_width_options',array(
		'type' => 'select',
		'label' => __('Slider Width Layout','tafri-travel-blog'),
		'description' => __('Here you can change the Slider Width. ','tafri-travel-blog'),
		'section' => 'tafri_travel_blog_slider',
		'choices' => array(
		   'Full Width' => __('Full Width','tafri-travel-blog'),
		   'Container Width' => __('Container Width','tafri-travel-blog'),
		),
	) );

	for ( $count = 1; $count <= 4; $count++ ) {
		$wp_customize->add_setting( 'tafri_travel_blog_slide_page' . $count, array(
			'default'           => '',
			'sanitize_callback' => 'tafri_travel_blog_sanitize_dropdown_pages'
		) );
		$wp_customize->add_control( 'tafri_travel_blog_slide_page' . $count, array(
			'label'    => __( 'Select Slide Image Page', 'tafri-travel-blog' ),
			'section'  => 'tafri_travel_blog_slider',
			'type'     => 'dropdown-pages'
		) );
	}

	$wp_customize->add_setting( 'tafri_travel_blog_slider_speed',array(
		'default' => 3000,
		'sanitize_callback'    => 'tafri_travel_blog_sanitize_number_range',
	));
	$wp_customize->add_control( 'tafri_travel_blog_slider_speed',array(
		'label' => esc_html__( 'Slider Speed','tafri-travel-blog' ),
		'section' => 'tafri_travel_blog_slider',
		'type'        => 'range',
		'input_attrs' => array(
			'min' => 1000,
			'max' => 5000,
			'step' => 500,
		),
	));

	$wp_customize->add_setting('tafri_travel_blog_slider_height_option',array(
		'default'=> 600,
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('tafri_travel_blog_slider_height_option',array(
		'label'	=> __('Slider Height Option','tafri-travel-blog'),
		'section'=> 'tafri_travel_blog_slider',
		'type'=> 'number'
	));

 	$wp_customize->add_setting('tafri_travel_blog_slider_content_option',array(
    	'default' => 'Left',
     	'sanitize_callback' => 'tafri_travel_blog_sanitize_choices'
	));
	$wp_customize->add_control('tafri_travel_blog_slider_content_option',array(
		'type' => 'select',
		'label' => __('Slider Content Layout','tafri-travel-blog'),
		'section' => 'tafri_travel_blog_slider',
		'choices' => array(
		   'Center' => __('Center','tafri-travel-blog'),
		   'Left' => __('Left','tafri-travel-blog'),
		   'Right' => __('Right','tafri-travel-blog'),
		),
	) );

	$wp_customize->add_setting('tafri_travel_blog_slider_button_text',array(
		'default'=> __('View All Tours','tafri-travel-blog'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('tafri_travel_blog_slider_button_text',array(
		'label'	=> __('Slider Button Text','tafri-travel-blog'),
		'section'=> 'tafri_travel_blog_slider',
		'type'=> 'text'
	));

	$wp_customize->add_setting( 'tafri_travel_blog_slider_excerpt_number', array(
		'default'              => 20,
		'sanitize_callback'    => 'tafri_travel_blog_sanitize_number_range',
	) );
	$wp_customize->add_control( 'tafri_travel_blog_slider_excerpt_number', array(
		'label'       => esc_html__( 'Slider Excerpt length','tafri-travel-blog' ),
		'section'     => 'tafri_travel_blog_slider',
		'type'        => 'range',
		'settings'    => 'tafri_travel_blog_slider_excerpt_number',
		'input_attrs' => array(
			'step' => 2,
			'min'  => 0,
			'max'  => 50,
		),
	) );

	$wp_customize->add_setting('tafri_travel_blog_slider_opacity_color',array(
      'default'              => 0.7,
      'sanitize_callback' => 'tafri_travel_blog_sanitize_choices'
	));
	$wp_customize->add_control( 'tafri_travel_blog_slider_opacity_color', array(
		'label'       => esc_html__( 'Slider Image Opacity','tafri-travel-blog' ),
		'section'     => 'tafri_travel_blog_slider',
		'type'        => 'select',
		'settings'    => 'tafri_travel_blog_slider_opacity_color',
		'choices' => array(
	      '0' =>  esc_attr('0','tafri-travel-blog'),
	      '0.1' =>  esc_attr('0.1','tafri-travel-blog'),
	      '0.2' =>  esc_attr('0.2','tafri-travel-blog'),
	      '0.3' =>  esc_attr('0.3','tafri-travel-blog'),
	      '0.4' =>  esc_attr('0.4','tafri-travel-blog'),
	      '0.5' =>  esc_attr('0.5','tafri-travel-blog'),
	      '0.6' =>  esc_attr('0.6','tafri-travel-blog'),
	      '0.7' =>  esc_attr('0.7','tafri-travel-blog'),
	      '0.8' =>  esc_attr('0.8','tafri-travel-blog'),
	      '0.9' =>  esc_attr('0.9','tafri-travel-blog')
		),
	));

	$wp_customize->add_setting('tafri_travel_blog_padding_top_bottom_slider_content',array(
		'default'=> '',
		'sanitize_callback'	=> 'tafri_travel_blog_sanitize_float',
	));
	$wp_customize->add_control('tafri_travel_blog_padding_top_bottom_slider_content',array(
		'label'	=> __('Top Bottom Slider Content Padding','tafri-travel-blog'),
		'section'=> 'tafri_travel_blog_slider',
		'input_attrs' => array(
         'step'             => 1,
			'min'              => 0,
			'max'              => 50,
     	),
		'type'=> 'number'
	));

	$wp_customize->add_setting('tafri_travel_blog_padding_left_right_slider_content',array(
		'default'=> '',
		'sanitize_callback'	=> 'tafri_travel_blog_sanitize_float',
	));
	$wp_customize->add_control('tafri_travel_blog_padding_left_right_slider_content',array(
		'label'	=> __('Left Right Slider Content Padding','tafri-travel-blog'),
		'section'=> 'tafri_travel_blog_slider',
		'input_attrs' => array(
        	'step'             => 1,
			'min'              => 0,
			'max'              => 50,
     	),
		'type'=> 'number'
	));

	$wp_customize->add_setting('tafri_travel_blog_show_slider_image_overlay',array(
		'default' => true,
		'sanitize_callback'	=> 'tafri_travel_blog_sanitize_checkbox'
	));
	$wp_customize->add_control('tafri_travel_blog_show_slider_image_overlay',array(
		'type' => 'checkbox',
		'label' => __('Show / Hide Image Overlay Slider','tafri-travel-blog'),
		'section' => 'tafri_travel_blog_slider'
	));

	$wp_customize->add_setting('tafri_travel_blog_color_slider_image_overlay', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'tafri_travel_blog_color_slider_image_overlay', array(
		'label'    => __('Image Overlay Slider Color', 'tafri-travel-blog'),
		'section'  => 'tafri_travel_blog_slider',
		'settings' => 'tafri_travel_blog_color_slider_image_overlay',
	)));

	//Facility Section
	$wp_customize->add_section('tafri_travel_blog_tour_section',array(
		'title'	=> __('Tour Section','tafri-travel-blog'),
		'description' => __('Add Tour Section below.','tafri-travel-blog'),
		'panel' => 'tafri_travel_blog_panel_id',
	));

	$wp_customize->add_setting('tafri_travel_blog_section_title',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('tafri_travel_blog_section_title',array(
		'label'	=> __('Section Title','tafri-travel-blog'),
		'section' => 'tafri_travel_blog_tour_section',
		'type'	 => 'text'
	));

	$wp_customize->add_setting('tafri_travel_blog_section_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('tafri_travel_blog_section_text',array(
		'label'	=> __('Section Text','tafri-travel-blog'),
		'section' => 'tafri_travel_blog_tour_section',
		'type'	 => 'text'
	));

	$categories = get_categories();
	$cat_posts = array();
	$i = 0;
	$cat_posts[]='Select';	
	foreach($categories as $category){
		if($i==0){
			$default = $category->slug;
			$i++;
		}
		$cat_posts[$category->slug] = $category->name;
	}

	$wp_customize->add_setting('tafri_travel_blog_tour_category',array(
		'default'	=> 'select',
		'sanitize_callback' => 'tafri_travel_blog_sanitize_choices',
	));
	$wp_customize->add_control('tafri_travel_blog_tour_category',array(
		'type'    => 'select',
		'choices' => $cat_posts,
		'label' => __('Select Category to display popular tour','tafri-travel-blog'),
		'section' => 'tafri_travel_blog_tour_section',
	));

	//no Result Setting
	$wp_customize->add_section('tafri_travel_blog_no_result_setting',array(
		'title'	=> __('No Results Settings','tafri-travel-blog'),
		'panel' => 'tafri_travel_blog_panel_id',
	));	

	$wp_customize->add_setting('tafri_travel_blog_no_search_result_title',array(
		'default'=> __('Nothing Found','tafri-travel-blog'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('tafri_travel_blog_no_search_result_title',array(
		'label'	=> __('No Search Results Title','tafri-travel-blog'),
		'section'=> 'tafri_travel_blog_no_result_setting',
		'type'=> 'text'
	));

	$wp_customize->add_setting('tafri_travel_blog_no_search_result_content',array(
		'default'=> __('Sorry, but nothing matched your search terms. Please try again with some different keywords.','tafri-travel-blog'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('tafri_travel_blog_no_search_result_content',array(
		'label'	=> __('No Search Results Content','tafri-travel-blog'),
		'section'=> 'tafri_travel_blog_no_result_setting',
		'type'=> 'text'
	));

	//404 Page Setting
	$wp_customize->add_section('tafri_travel_blog_page_not_found_setting',array(
		'title'	=> __('Page Not Found Settings','tafri-travel-blog'),
		'panel' => 'tafri_travel_blog_panel_id',
	));	

	$wp_customize->add_setting('tafri_travel_blog_page_not_found_title',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('tafri_travel_blog_page_not_found_title',array(
		'label'	=> __('Page Not Found Title','tafri-travel-blog'),
		'section'=> 'tafri_travel_blog_page_not_found_setting',
		'type'=> 'text'
	));

	$wp_customize->add_setting('tafri_travel_blog_page_not_found_content',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('tafri_travel_blog_page_not_found_content',array(
		'label'	=> __('Page Not Found Content','tafri-travel-blog'),
		'section'=> 'tafri_travel_blog_page_not_found_setting',
		'type'=> 'text'
	));

	//Responsive Media Settings
	$wp_customize->add_section('tafri_travel_blog_mobile_media',array(
		'title'	=> __('Mobile Media Settings','tafri-travel-blog'),
		'panel' => 'tafri_travel_blog_panel_id',
	));

	$wp_customize->add_setting('tafri_travel_blog_enable_disable_preloader',array(
       'default' => false,
       'sanitize_callback'	=> 'tafri_travel_blog_sanitize_checkbox'
    ));
    $wp_customize->add_control('tafri_travel_blog_enable_disable_preloader',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Preloader','tafri-travel-blog'),
       'section' => 'tafri_travel_blog_mobile_media'
    ));

	$wp_customize->add_setting('tafri_travel_blog_enable_disable_sidebar',array(
		'default' => true,
		'sanitize_callback'	=> 'tafri_travel_blog_sanitize_checkbox'
	));
	$wp_customize->add_control('tafri_travel_blog_enable_disable_sidebar',array(
		'type' => 'checkbox',
		'label' => __('Enable / Disable Sidebar','tafri-travel-blog'),
		'section' => 'tafri_travel_blog_mobile_media'
	));

	$wp_customize->add_setting('tafri_travel_blog_enable_disable_slider',array(
		'default' => false,
		'sanitize_callback'	=> 'tafri_travel_blog_sanitize_checkbox'
	));
	$wp_customize->add_control('tafri_travel_blog_enable_disable_slider',array(
		'type' => 'checkbox',
		'label' => __('Enable / Disable Slider','tafri-travel-blog'),
		'section' => 'tafri_travel_blog_mobile_media'
	));

	$wp_customize->add_setting('tafri_travel_blog_show_hide_slider_button',array(
		'default' => true,
		'sanitize_callback'	=> 'tafri_travel_blog_sanitize_checkbox'
	));
	$wp_customize->add_control('tafri_travel_blog_show_hide_slider_button',array(
		'type' => 'checkbox',
		'label' => __('Enable / Disable Slider Button','tafri-travel-blog'),
		'section' => 'tafri_travel_blog_mobile_media'
	));

	$wp_customize->add_setting('tafri_travel_blog_enable_disable_scrolltop',array(
		'default' => false,
		'sanitize_callback'	=> 'tafri_travel_blog_sanitize_checkbox'
	));
	$wp_customize->add_control('tafri_travel_blog_enable_disable_scrolltop',array(
		'type' => 'checkbox',
		'label' => __('Enable / Disable Scroll To Top','tafri-travel-blog'),
		'section' => 'tafri_travel_blog_mobile_media'
	));

	//Blog Post
	$wp_customize->add_section('tafri_travel_blog_blog_post',array(
		'title'	=> __('Post Settings','tafri-travel-blog'),
		'panel' => 'tafri_travel_blog_panel_id',
	));	

	$wp_customize->add_setting('tafri_travel_blog_date_hide',array(
		'default' => true,
		'sanitize_callback'	=> 'tafri_travel_blog_sanitize_checkbox'
	));
	$wp_customize->add_control('tafri_travel_blog_date_hide',array(
		'type' => 'checkbox',
		'label' => __('Post Date','tafri-travel-blog'),
		'section' => 'tafri_travel_blog_blog_post'
	));

 	$wp_customize->add_setting('tafri_travel_blog_post_date_icon_changer',array(
		'default'	=> 'fa fa-calendar',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Tafri_Travel_Blog_Icon_Changer(
     	$wp_customize,'tafri_travel_blog_post_date_icon_changer',array(
		'label'	=> __('Post Date Icon','tafri-travel-blog'),
		'transport' => 'refresh',
		'section'	=> 'tafri_travel_blog_blog_post',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('tafri_travel_blog_author_hide',array(
		'default' => true,
		'sanitize_callback'	=> 'tafri_travel_blog_sanitize_checkbox'
	));
	$wp_customize->add_control('tafri_travel_blog_author_hide',array(
		'type' => 'checkbox',
		'label' => __('Post Author','tafri-travel-blog'),
		'section' => 'tafri_travel_blog_blog_post'
	));

 	$wp_customize->add_setting('tafri_travel_blog_post_author_icon_changer',array(
		'default'	=> 'fa fa-user',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Tafri_Travel_Blog_Icon_Changer(
        $wp_customize,'tafri_travel_blog_post_author_icon_changer',array(
		'label'	=> __('Post Author Icon','tafri-travel-blog'),
		'transport' => 'refresh',
		'section'	=> 'tafri_travel_blog_blog_post',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('tafri_travel_blog_comment_hide',array(
		'default' => true,
		'sanitize_callback'	=> 'tafri_travel_blog_sanitize_checkbox'
	));
	$wp_customize->add_control('tafri_travel_blog_comment_hide',array(
		'type' => 'checkbox',
		'label' => __('Post Comments','tafri-travel-blog'),
		'section' => 'tafri_travel_blog_blog_post'
	));

 	$wp_customize->add_setting('tafri_travel_blog_post_comment_icon_changer',array(
		'default'	=> 'fas fa-comments',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Tafri_Travel_Blog_Icon_Changer(
        $wp_customize,'tafri_travel_blog_post_comment_icon_changer',array(
		'label'	=> __('Post Comment Icon','tafri-travel-blog'),
		'transport' => 'refresh',
		'section'	=> 'tafri_travel_blog_blog_post',
		'type'		=> 'icon'
	)));
    
 	$wp_customize->add_setting( 'tafri_travel_blog_blog_post_metabox_seperator', array(
		'default'   => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'tafri_travel_blog_blog_post_metabox_seperator', array(
		'label'       => esc_html__( 'Blog Post Meta Box Seperator','tafri-travel-blog' ),
		'section'     => 'tafri_travel_blog_blog_post',
		'description' => __('Add the seperator for meta box. Example: ",",  "|", "/", etc. ','tafri-travel-blog'),
		'type'        => 'text',
		'settings'    => 'tafri_travel_blog_blog_post_metabox_seperator',
	) );

    $wp_customize->add_setting('tafri_travel_blog_blog_post_featured_image',array(
       'default' => true,
       'sanitize_callback'	=> 'tafri_travel_blog_sanitize_checkbox'
    ));
    $wp_customize->add_control('tafri_travel_blog_blog_post_featured_image',array(
       'type' => 'checkbox',
       'label' => __('Post Image','tafri-travel-blog'),
       'section' => 'tafri_travel_blog_blog_post'
    ));

    $wp_customize->add_setting( 'tafri_travel_blog_blog_post_img_border_radius', array(
		'default'=> 0,
		'sanitize_callback'	=> 'tafri_travel_blog_sanitize_float',
	) );
	$wp_customize->add_control( 'tafri_travel_blog_blog_post_img_border_radius', array(
		'label'       => esc_html__( 'Post Image Border Radius','tafri-travel-blog' ),
		'section'     => 'tafri_travel_blog_blog_post',
		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 100,
		),
	) );

	$wp_customize->add_setting( 'tafri_travel_blog_blog_post_img_box_shadow',array(
		'default' => 0,
		'sanitize_callback'    => 'tafri_travel_blog_sanitize_float',
	));
	$wp_customize->add_control('tafri_travel_blog_blog_post_img_box_shadow',array(
		'label' => esc_html__( 'Post Image Shadow','tafri-travel-blog' ),
		'section' => 'tafri_travel_blog_blog_post',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type' => 'number'
	));

	$wp_customize->add_setting('tafri_travel_blog_blog_post_layout',array(
		'default' => 'Default',
		'sanitize_callback' => 'tafri_travel_blog_sanitize_choices'
	));
	$wp_customize->add_control('tafri_travel_blog_blog_post_layout',array(
		'type' => 'radio',
		'label' => __('Post Layout Option','tafri-travel-blog'),
		'section' => 'tafri_travel_blog_blog_post',
		'choices' => array(
		   'Default' => __('Default','tafri-travel-blog'),
		   'Center' => __('Center','tafri-travel-blog'),
		   'Image and Content' => __('Image and Content','tafri-travel-blog'),
		),
	) );

	$wp_customize->add_setting('tafri_travel_blog_post_break_block_setting',array(
     'default' => 'Into Blocks',
     'sanitize_callback' => 'tafri_travel_blog_sanitize_choices'
	));
	$wp_customize->add_control('tafri_travel_blog_post_break_block_setting',array(
		'type' => 'radio',
		'label' => __('Display Blog Page posts','tafri-travel-blog'),
		'section' => 'tafri_travel_blog_blog_post',
		'choices' => array(
		   'Into Blocks' => __('Into Blocks','tafri-travel-blog'),
		   'Without Blocks' => __('Without Blocks','tafri-travel-blog'),
		),
	) );

	$wp_customize->add_setting('tafri_travel_blog_blog_description',array(
    	'default'   => 'Post Excerpt',
     	'sanitize_callback' => 'tafri_travel_blog_sanitize_choices'
	));
	$wp_customize->add_control('tafri_travel_blog_blog_description',array(
		'type' => 'select',
		'label' => __('Post Description','tafri-travel-blog'),
		'section' => 'tafri_travel_blog_blog_post',
		'choices' => array(
		   'None' => __('None','tafri-travel-blog'),
		   'Post Excerpt' => __('Post Excerpt','tafri-travel-blog'),
		   'Post Content' => __('Post Content','tafri-travel-blog'),
		),
	) );

 	$wp_customize->add_setting( 'tafri_travel_blog_excerpt_number', array(
		'default'              => 20,
		'sanitize_callback'	=> 'tafri_travel_blog_sanitize_float',
	) );
	$wp_customize->add_control( 'tafri_travel_blog_excerpt_number', array(
		'label'       => esc_html__( 'Excerpt length','tafri-travel-blog' ),
		'section'     => 'tafri_travel_blog_blog_post',
		'type'        => 'number',
		'settings'    => 'tafri_travel_blog_excerpt_number',
		'input_attrs' => array(
			'step'             => 2,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting( 'tafri_travel_blog_post_excerpt_suffix', array(
		'default'   => __('{...}','tafri-travel-blog'),
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'tafri_travel_blog_post_excerpt_suffix', array(
		'label'       => esc_html__( 'Excerpt Indicator','tafri-travel-blog' ),
		'section'     => 'tafri_travel_blog_blog_post',
		'type'        => 'text',
		'settings'    => 'tafri_travel_blog_post_excerpt_suffix',
	) );

	$wp_customize->add_setting('tafri_travel_blog_button_text',array(
		'default'=> __('Read More','tafri-travel-blog'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('tafri_travel_blog_button_text',array(
		'label'	=> __('Add Button Text','tafri-travel-blog'),
		'section'=> 'tafri_travel_blog_blog_post',
		'type'=> 'text'
	));

	$wp_customize->add_setting('tafri_travel_blog_show_post_pagination',array(
		'default' => true,
		'sanitize_callback'	=> 'tafri_travel_blog_sanitize_checkbox'
	));
	$wp_customize->add_control('tafri_travel_blog_show_post_pagination',array(
		'type' => 'checkbox',
		'label' => __('Post Pagination','tafri-travel-blog'),
		'section' => 'tafri_travel_blog_blog_post'
	));

	$wp_customize->add_setting( 'tafri_travel_blog_pagination_option', array(
		'default'			=> 'Default',
		'sanitize_callback'	=> 'tafri_travel_blog_sanitize_choices'
	));
	$wp_customize->add_control( 'tafri_travel_blog_pagination_option', array(
		'section' => 'tafri_travel_blog_blog_post',
		'type' => 'radio',
		'label' => __( 'Post Pagination', 'tafri-travel-blog' ),
		'choices'		=> array(
		   'Default'  => __( 'Default', 'tafri-travel-blog' ),
		   'next-prev' => __( 'Next / Previous', 'tafri-travel-blog' ),
	)));

	// Single post setting
 	$wp_customize->add_section('tafri_travel_blog_single_post_section',array(
		'title'	=> __('Single Post Settings','tafri-travel-blog'),
		'panel' => 'tafri_travel_blog_panel_id',
	));	

	$wp_customize->add_setting('tafri_travel_blog_tags_hide',array(
		'default' => true,
		'sanitize_callback'	=> 'tafri_travel_blog_sanitize_checkbox'
	));
	$wp_customize->add_control('tafri_travel_blog_tags_hide',array(
		'type' => 'checkbox',
		'label' => __('Single Post Tags','tafri-travel-blog'),
		'section' => 'tafri_travel_blog_single_post_section'
	));

	$wp_customize->add_setting('tafri_travel_blog_single_post_image',array(
		'default' => true,
		'sanitize_callback'	=> 'tafri_travel_blog_sanitize_checkbox'
	));
	$wp_customize->add_control('tafri_travel_blog_single_post_image',array(
		'type' => 'checkbox',
		'label' => __('Single Post Featured Image','tafri-travel-blog'),
		'section' => 'tafri_travel_blog_single_post_section'
	));

	 $wp_customize->add_setting( 'tafri_travel_blog_single_post_img_border_radius', array(
		'default'=> 0,
		'sanitize_callback'	=> 'tafri_travel_blog_sanitize_float',
	) );
	$wp_customize->add_control( 'tafri_travel_blog_single_post_img_border_radius', array(
		'label'       => esc_html__( 'Single Post Image Border Radius','tafri-travel-blog' ),
		'section'     => 'tafri_travel_blog_single_post_section',
		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 100,
		),
	) );

	$wp_customize->add_setting( 'tafri_travel_blog_single_post_img_box_shadow',array(
		'default' => 0,
		'sanitize_callback'    => 'tafri_travel_blog_sanitize_float',
	));
	$wp_customize->add_control('tafri_travel_blog_single_post_img_box_shadow',array(
		'label' => esc_html__( 'Single Post Image Shadow','tafri-travel-blog' ),
		'section' => 'tafri_travel_blog_single_post_section',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type' => 'number'
	));

    $wp_customize->add_setting('tafri_travel_blog_show_single_post_pagination',array(
       'default' => true,
       'sanitize_callback'	=> 'tafri_travel_blog_sanitize_checkbox'
    ));
    $wp_customize->add_control('tafri_travel_blog_show_single_post_pagination',array(
       'type' => 'checkbox',
       'label' => __('Single Post Pagination','tafri-travel-blog'),
       'section' => 'tafri_travel_blog_single_post_section'
    ));  

    $wp_customize->add_setting('tafri_travel_blog_show_hide_single_post_categories',array(
		'default' => true,
		'sanitize_callback'	=> 'tafri_travel_blog_sanitize_checkbox'
 	));
 	$wp_customize->add_control('tafri_travel_blog_show_hide_single_post_categories',array(
		'type' => 'checkbox',
		'label' => __('Single Post Categories','tafri-travel-blog'),
		'section' => 'tafri_travel_blog_single_post_section'
	)); 

 	$wp_customize->add_setting( 'tafri_travel_blog_seperator_metabox', array(
		'default'   => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'tafri_travel_blog_seperator_metabox', array(
		'label'       => esc_html__( 'Single Post Meta Box Seperator','tafri-travel-blog' ),
		'section'     => 'tafri_travel_blog_single_post_section',
		'description' => __('Add the seperator for meta box. Example: ",",  "|", "/", etc. ','tafri-travel-blog'),
		'type'        => 'text',
		'settings'    => 'tafri_travel_blog_seperator_metabox',
	) );

	$wp_customize->add_setting('tafri_travel_blog_comment_form_heading',array(
		'default' => __('Leave a Reply','tafri-travel-blog'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('tafri_travel_blog_comment_form_heading',array(
		'type' => 'text',
		'label' => __('Comment Form Heading','tafri-travel-blog'),
		'section' => 'tafri_travel_blog_single_post_section'
	));

	$wp_customize->add_setting('tafri_travel_blog_comment_button_text',array(
		'default' => __('Post Comment','tafri-travel-blog'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('tafri_travel_blog_comment_button_text',array(
		'type' => 'text',
		'label' => __('Comment Submit Button Text','tafri-travel-blog'),
		'section' => 'tafri_travel_blog_single_post_section'
	));

 	$wp_customize->add_setting( 'tafri_travel_blog_comment_form_size',array(
		'default' => 100,
		'sanitize_callback'    => 'tafri_travel_blog_sanitize_number_range',
	));
	$wp_customize->add_control('tafri_travel_blog_comment_form_size',	array(
		'label' => esc_html__( 'Comment Form Size','tafri-travel-blog' ),
		'section' => 'tafri_travel_blog_single_post_section',
		'type' => 'range',
		'input_attrs' => array(
			'min' => 0,
			'max' => 100,
			'step' => 1,
		),
	));

 	// related post setting
	$wp_customize->add_section('tafri_travel_blog_related_post_section',array(
		'title'	=> __('Related Post Settings','tafri-travel-blog'),
		'panel' => 'tafri_travel_blog_panel_id',
	));	

	$wp_customize->add_setting('tafri_travel_blog_related_posts',array(
		'default' => true,
		'sanitize_callback'	=> 'tafri_travel_blog_sanitize_checkbox'
	));
	$wp_customize->add_control('tafri_travel_blog_related_posts',array(
		'type' => 'checkbox',
		'label' => __('Related Post','tafri-travel-blog'),
		'section' => 'tafri_travel_blog_related_post_section',
	));

	$wp_customize->add_setting( 'tafri_travel_blog_show_related_post', array(
		'default' => 'By Categories', 
		'sanitize_callback'	=> 'tafri_travel_blog_sanitize_choices'
	));
	$wp_customize->add_control( 'tafri_travel_blog_show_related_post', array(
		'section' => 'tafri_travel_blog_related_post_section',
		'type' => 'radio',
		'label' => __( 'Show Related Posts', 'tafri-travel-blog' ),
		'choices' => array(
		   'categories'  => __(' By Categories', 'tafri-travel-blog'),
		   'tags' => __( ' By Tags', 'tafri-travel-blog' ),
	)));

 	$wp_customize->add_setting('tafri_travel_blog_change_related_post_title',array(
		'default'=> __('Related Posts','tafri-travel-blog'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('tafri_travel_blog_change_related_post_title',array(
		'label'	=> __('Change Related Post Title','tafri-travel-blog'),
		'section'=> 'tafri_travel_blog_related_post_section',
		'type'=> 'text'
	));

	$wp_customize->add_setting('tafri_travel_blog_change_related_posts_number',array(
		'default'=> 3,
		'sanitize_callback'	=> 'tafri_travel_blog_sanitize_float',
	));
	$wp_customize->add_control('tafri_travel_blog_change_related_posts_number',array(
		'label'	=> __('Change Related Post Number','tafri-travel-blog'),
		'section'=> 'tafri_travel_blog_related_post_section',
		'type'=> 'number',
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
	));

	//Footer
	$wp_customize->add_section( 'tafri_travel_blog_footer' , array(
    	'title'      => __( 'Footer Section', 'tafri-travel-blog' ),
		'priority'   => null,
		'panel' => 'tafri_travel_blog_panel_id'
	) );

	$wp_customize->add_setting('tafri_travel_blog_footer_widget',array(
		'default'           => 4,
		'sanitize_callback' => 'tafri_travel_blog_sanitize_choices',
	));
	$wp_customize->add_control('tafri_travel_blog_footer_widget',array(
		'type'        => 'radio',
		'label'       => __('No. of Footer widget area', 'tafri-travel-blog'),
		'section'     => 'tafri_travel_blog_footer',
		'description' => __('Select the number of footer widget areas and after that, go to Appearance > Widgets and add your widgets in the footer.', 'tafri-travel-blog'),
		'choices' => array(
		   '1'     => __('One', 'tafri-travel-blog'),
		   '2'     => __('Two', 'tafri-travel-blog'),
		   '3'     => __('Three', 'tafri-travel-blog'),
		   '4'     => __('Four', 'tafri-travel-blog')
		),
	)); 

 	$wp_customize->add_setting( 'tafri_travel_blog_footer_widget_background', array(
		'default' => '#121212',
		'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tafri_travel_blog_footer_widget_background', array(
  		'label' => __('Footer Widget Background','tafri-travel-blog'),
    	'section' => 'tafri_travel_blog_footer',
  	)));

  	$wp_customize->add_setting('tafri_travel_blog_footer_widget_image',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'tafri_travel_blog_footer_widget_image',array(
		'label' => __('Footer Widget Background Image','tafri-travel-blog'),
		'section' => 'tafri_travel_blog_footer'
	)));

	$wp_customize->add_setting('tafri_travel_blog_hide_show_scroll',array(
		'default' => false,
		'sanitize_callback'	=> 'tafri_travel_blog_sanitize_checkbox'
	));
	$wp_customize->add_control('tafri_travel_blog_hide_show_scroll',array(
     	'type' => 'checkbox',
   	'label' => __('Show / Hide Scroll To Top','tafri-travel-blog'),
   	'section' => 'tafri_travel_blog_footer',
	));

	$wp_customize->add_setting('tafri_travel_blog_scroll_icon_changer',array(
		'default'	=> 'fas fa-long-arrow-alt-up',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Tafri_Travel_Blog_Icon_Changer(
     	$wp_customize,'tafri_travel_blog_scroll_icon_changer',array(
		'label'	=> __('Scroll To Top Icon','tafri-travel-blog'),
		'transport' => 'refresh',
		'section'	=> 'tafri_travel_blog_footer',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('tafri_travel_blog_footer_options',array(
     	'default' => 'Right align',
     	'sanitize_callback' => 'tafri_travel_blog_sanitize_choices'
	));
	$wp_customize->add_control('tafri_travel_blog_footer_options',array(
     	'type' => 'select',
		'label' => __('Scroll To Top','tafri-travel-blog'),
		'description' => __('Here you can change the Footer layout. ','tafri-travel-blog'),
		'section' => 'tafri_travel_blog_footer',
		'choices' => array(
		   'Left align' => __('Left align','tafri-travel-blog'),
		   'Right align' => __('Right align','tafri-travel-blog'),
		   'Center align' => __('Center align','tafri-travel-blog'),
		),
	) );

	$wp_customize->add_setting('tafri_travel_blog_scroll_top_fontsize',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('tafri_travel_blog_scroll_top_fontsize',array(
		'label'	=> __('Scroll To Top Font Size','tafri-travel-blog'),
		'input_attrs' => array(
      	'step'             => 1,
			'min'              => 0,
			'max'              => 50,
     	),
		'section'=> 'tafri_travel_blog_footer',
		'type'=> 'range'
	));

	$wp_customize->add_setting('tafri_travel_blog_scroll_top_bottom_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'tafri_travel_blog_sanitize_float',
	));
	$wp_customize->add_control('tafri_travel_blog_scroll_top_bottom_padding',array(
		'label'	=> __('Scroll Top Bottom Padding ','tafri-travel-blog'),
		'input_attrs' => array(
      	'step'             => 1,
			'min'              => 0,
			'max'              => 50,
     	),
		'section'=> 'tafri_travel_blog_footer',
		'type'=> 'number'
	));

	$wp_customize->add_setting('tafri_travel_blog_scroll_left_right_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'tafri_travel_blog_sanitize_float',
	));
	$wp_customize->add_control('tafri_travel_blog_scroll_left_right_padding',array(
		'label'	=> __('Scroll Left Right Padding','tafri-travel-blog'),
		'input_attrs' => array(
      	'step'             => 1,
			'min'              => 0,
			'max'              => 50,
     	),
		'section'=> 'tafri_travel_blog_footer',
		'type'=> 'number'
	));

	$wp_customize->add_setting( 'tafri_travel_blog_scroll_border_radius', array(
		'default'=> '',
		'sanitize_callback'	=> 'tafri_travel_blog_sanitize_float',
	) );
	$wp_customize->add_control( 'tafri_travel_blog_scroll_border_radius', array(
		'label'       => esc_html__( 'Scroll To Top Border Radius','tafri-travel-blog' ),
		'section'     => 'tafri_travel_blog_footer',
		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting('tafri_travel_blog_footer_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('tafri_travel_blog_footer_text',array(
		'label'	=> __('Add Copyright Text','tafri-travel-blog'),
		'section'	=> 'tafri_travel_blog_footer',
		'setting'	=> 'tafri_travel_blog_footer_text',
		'type'		=> 'text'
	));

    $wp_customize->add_setting('tafri_travel_blog_copyright_top_bottom_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'tafri_travel_blog_sanitize_float',
	));
	$wp_customize->add_control('tafri_travel_blog_copyright_top_bottom_padding',array(
		'label'	=> __('Copyright Top and Bottom Padding','tafri-travel-blog'),
		'input_attrs' => array(
      	'step'             => 1,
			'min'              => 0,
			'max'              => 50,
     	),
		'section'=> 'tafri_travel_blog_footer',
		'type'=> 'number'
	));

     $wp_customize->add_setting('tafri_travel_blog_copyright_background_color', array(
		'default'           => '#f5c532',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'tafri_travel_blog_copyright_background_color', array(
		'label'    => __('Copyright Background Color', 'tafri-travel-blog'),
		'section'  => 'tafri_travel_blog_footer',
	)));   

	$wp_customize->add_setting('tafri_travel_blog_footer_text_font_size',array(
		'default'=> 16,
		'sanitize_callback'	=> 'tafri_travel_blog_sanitize_float',
	));
	$wp_customize->add_control('tafri_travel_blog_footer_text_font_size',array(
		'label'	=> __('Footer Text Font Size','tafri-travel-blog'),
		'section'=> 'tafri_travel_blog_footer',
		'input_attrs' => array(
      	'step'             => 1,
			'min'              => 0,
			'max'              => 50,
     	),
		'type'=> 'number'
	));

	$wp_customize->get_setting( 'blogname' )->transport          = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport   = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport  = 'postMessage';

	$wp_customize->selective_refresh->add_partial( 'blogname', array(
		'selector' => '.site-title a',
		'render_callback' => 'tafri_travel_blog_customize_partial_blogname',
	) );
	$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
		'selector' => '.site-description',
		'render_callback' => 'tafri_travel_blog_customize_partial_blogdescription',
	) );
	
}
add_action( 'customize_register', 'tafri_travel_blog_customize_register' );

// logo resize
load_template( trailingslashit( get_template_directory() ) . '/inc/logo/logo-resizer.php' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @since Tafri Travel Blog 1.0
 * @see tafri-travel-blog_customize_register()
 *
 * @return void
 */
function tafri_travel_blog_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @since Tafri Travel Blog 1.0
 * @see tafri-travel-blog_customize_register()
 *
 * @return void
 */
function tafri_travel_blog_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Return whether we're on a view that supports a one or two column layout.
 */
function tafri_travel_blog_is_view_with_layout_option() {
	// This option is available on all pages. It's also available on archives when there isn't a sidebar.
	return ( is_page() || ( is_archive() && ! is_active_sidebar( 'footer-1' ) ) );
}

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class Tafri_Travel_Blog_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	 */
	public function sections( $manager ) {

		// Load custom sections.
		load_template( trailingslashit( get_template_directory() ) . '/inc/section-pro.php' );

		// Register custom section types.
		$manager->register_section_type( 'Tafri_Travel_Blog_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section(
			new Tafri_Travel_Blog_Customize_Section_Pro(
				$manager,
				'tafri_travel_blog_example_1',
				array(
					'priority' => 9,
					'title'    => esc_html__( 'Tafri Travel Blog Pro', 'tafri-travel-blog' ),
					'pro_text' => esc_html__( 'Go Pro', 'tafri-travel-blog' ),
					'pro_url'  => esc_url('https://www.themeseye.com/wordpress/travel-wordpress-theme/'),
				)
			)
		);
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script( 'tafri-travel-blog-customize-controls', trailingslashit( esc_url(get_template_directory_uri()) ) . '/assets/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'tafri-travel-blog-customize-controls', trailingslashit( esc_url(get_template_directory_uri()) ) . '/assets/css/customize-controls.css' );
	}
}

// Doing this customizer thang!
Tafri_Travel_Blog_Customize::get_instance();