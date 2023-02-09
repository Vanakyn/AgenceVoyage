<?php
/**
 * Tafri Travel Blog functions and definitions
 */

function tafri_travel_blog_setup() {
	
	add_theme_support( 'woocommerce' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'align-wide' );
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'tafri-travel-blog-featured-image', 2000, 1200, true );
	add_image_size( 'tafri-travel-blog-thumbnail-avatar', 100, 100, true );

	// Set the default content width.
	$GLOBALS['content_width'] = 525;

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'top'    => __( 'Top Menu', 'tafri-travel-blog' ),
	) );

	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array('image','video','gallery','audio',) );


	add_theme_support( 'html5', array(
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	add_theme_support('responsive-embeds');
	
	add_theme_support( 'custom-logo', array(
		'width'       => 250,
		'height'      => 250,
		'flex-width'  => true,
	) );

	add_theme_support( 'custom-background', array(
		'default-color' => 'f1f1f1'
	) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	add_editor_style( array( 'assets/css/editor-style.css', tafri_travel_blog_fonts_url() ) );
}
add_action( 'after_setup_theme', 'tafri_travel_blog_setup' );

/* Theme Font URL */
function tafri_travel_blog_fonts_url(){
	$font_url      = '';
	$font_family   = array();
	$font_family[] = 'ABeeZee:400,400i';
	$font_family[] = 'Abril Fatface';
	$font_family[] = 'Acme';
	$font_family[] = 'Allura:400';
	$font_family[] = 'Anton';
	$font_family[] = 'Architects Daughter';
	$font_family[] = 'Archivo:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i';
	$font_family[] = 'Arimo:400,400i,500,500i,600,600i,700,700i';
	$font_family[] = 'Arsenal:400,400i,700,700i';
	$font_family[] = 'Arvo:400,400i,700,700i';
	$font_family[] = 'Alegreya:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i';
	$font_family[] = 'Alfa Slab One';
	$font_family[] = 'Averia Serif Libre:300,300i,400,400i,700,700i';
	$font_family[] = 'Bangers';
	$font_family[] = 'Boogaloo';
	$font_family[] = 'Bad Script';
	$font_family[] = 'Balsamiq Sans:400,400i,700,700i';
	$font_family[] = 'Barlow Condensed:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i';
	$font_family[] = 'Bitter:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i';
	$font_family[] = 'Bree Serif';
	$font_family[] = 'BenchNine:300,400,700';
	$font_family[] = 'Cabin:400,400i,500,500i,600,600i,700,700i';
	$font_family[] = 'Cardo:400,400i,700';
	$font_family[] = 'Courgette';
	$font_family[] = 'Caveat Brush:400';
	$font_family[] = 'Cherry Swash:400,700';
	$font_family[] = 'Cormorant Garamond:300,300i,400,400i,500,500i,600,600i,700,700i';
	$font_family[] = 'Crimson Text:400,400i,600,600i,700,700i';
	$font_family[] = 'Cuprum:400,400i,500,500i,600,600i,700,700i';
	$font_family[] = 'Cookie';
	$font_family[] = 'Coming Soon';
	$font_family[] = 'Charm:400,700';
	$font_family[] = 'Chewy';
	$font_family[] = 'Days One';
	$font_family[] = 'Dosis:200,300,400,500,600,700,800';
	$font_family[] = 'EB Garamond:400,400i,500,500i,600,600i,700,700i,800,800i';
	$font_family[] = 'Economica:400,400i,700,700i';
	$font_family[] = 'Fira Sans:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i';
	$font_family[] = 'Fredoka One';
	$font_family[] = 'Fjalla One';
	$font_family[] = 'Francois One';
	$font_family[] = 'Frank Ruhl Libre:300,400,500,700,900';
	$font_family[] = 'Gabriela:400';
	$font_family[] = 'Gloria Hallelujah';
	$font_family[] = 'Great Vibes';
	$font_family[] = 'Handlee';
	$font_family[] = 'Hammersmith One';
	$font_family[] = 'Heebo:100,200,300,400,500,700,800,900';
	$font_family[] = 'Hind:300,400,500,600,700';
	$font_family[] = 'Inconsolata:200,300,400,500,600,700,800,900';
	$font_family[] = 'Indie Flower';
	$font_family[] = 'IM Fell English SC';
	$font_family[] = 'Julius Sans One';
	$font_family[] = 'Josefin Slab:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i';
	$font_family[] = 'Josefin Sans:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i';
	$font_family[] = 'Jost:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i';
	$font_family[] = 'Kanit:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i';
	$font_family[] = 'Krub:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i';
	$font_family[] = 'Lobster';
	$font_family[] = 'Lato:100,100i,300,300i,400,400i,700,700i,900,900i';
	$font_family[] = 'Lora:400,400i,500,500i,600,600i,700,700i';
	$font_family[] = 'Libre Baskerville:400,400i,700';
	$font_family[] = 'Lobster Two:400,400i,700,700i';
	$font_family[] = 'Merriweather:300,300i,400,400i,700,700i,900,900i';
	$font_family[] = 'Marck Script';
	$font_family[] = 'Marcellus:400';
	$font_family[] = 'Merienda One:400';
	$font_family[] = 'Monda:400,700';
	$font_family[] = 'Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i';
	$font_family[] = 'Muli';
	$font_family[] = 'Mulish:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i';
	$font_family[] = 'Noto Serif:400,400i,700,700i';
	$font_family[] = 'Nunito Sans:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i';
	$font_family[] = 'Open Sans:300,300i,400,400i,600,600i,700,700i,800,800i';
	$font_family[] = 'Overpass:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i';
	$font_family[] = 'Overpass Mono:300,400,500,600,700';
	$font_family[] = 'Oxygen:300,400,700';
	$font_family[] = 'Oswald:200,300,400,500,600,700';
	$font_family[] = 'Orbitron:400,500,600,700,800,900';
	$font_family[] = 'Patua One';
	$font_family[] = 'Pacifico';
	$font_family[] = 'Padauk:400,700';
	$font_family[] = 'Playball:400';
	$font_family[] = 'Playfair Display:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i';
	$font_family[] = 'Prompt:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i';
	$font_family[] = 'PT Sans:400,400i,700,700i';
	$font_family[] = 'PT Serif:400,400i,700,700i';
	$font_family[] = 'Philosopher:400,400i,700,700i';
	$font_family[] = 'Permanent Marker';
	$font_family[] = 'Poiret One';
	$font_family[] = 'Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i';
	$font_family[] = 'Prata:400';
	$font_family[] = 'Quicksand:300,400,500,600,700';
	$font_family[] = 'Quattrocento Sans:400,400i,700,700i';
	$font_family[] = 'Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i';
	$font_family[] = 'Rubik:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i';
	$font_family[] = 'Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i';
	$font_family[] = 'Roboto Condensed:300,300i,400,400i,700,700i';
	$font_family[] = 'Rokkitt:100,200,300,400,500,600,700,800,900';
	$font_family[] = 'Russo One';
	$font_family[] = 'Righteous';
	$font_family[] = 'Saira:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i';
	$font_family[] = 'Satisfy';
	$font_family[] = 'Sen:400,700,800';
	$font_family[] = 'Slabo';
	$font_family[] = 'Source Sans Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i';
	$font_family[] = 'Shadows Into Light Two';
	$font_family[] = 'Shadows Into Light';
	$font_family[] = 'Sacramento';
	$font_family[] = 'Sail:400';
	$font_family[] = 'Shrikhand';
	$font_family[] = 'Spartan:100,200,300,400,500,600,700,800,900';
	$font_family[] = 'Staatliches';
	$font_family[] = 'Stylish:400';
	$font_family[] = 'Tangerine:400,700';
	$font_family[] = 'Titillium Web:200,200i,300,300i,400,400i,600,600i,700,700i,900';
	$font_family[] = 'Trirong:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i';
	$font_family[] = 'Ubuntu:300,300i,400,400i,500,500i,700,700i';
	$font_family[] = 'Unica One';
	$font_family[] = 'VT323';
	$font_family[] = 'Varela Round';
	$font_family[] = 'Vampiro One';
	$font_family[] = 'Vollkorn:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i';
	$font_family[] = 'Volkhov:400,400i,700,700i';
	$font_family[] = 'Work Sans:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i';
	$font_family[] = 'Yanone Kaffeesatz:200,300,400,500,600,700';
	$font_family[] = 'ZCOOL XiaoWei';

	$query_args = array(
		'family'	=> rawurlencode(implode('|',$font_family)),
	);
	$font_url = add_query_arg($query_args,'//fonts.googleapis.com/css');
	return $font_url;
	$contents = wptt_get_webfont_url( esc_url_raw( $fonts_url ) );
}

/**
 * Widget area.
 */
function tafri_travel_blog_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'tafri-travel-blog' ),
		'id'            => 'sidebox-1',
		'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'tafri-travel-blog' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s p-2 mb-4">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title py-2 mb-2 text-center text-capitalize">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Page Sidebar', 'tafri-travel-blog' ),
		'id'            => 'sidebox-2',
		'description'   => __( 'Add widgets here to appear in your sidebar on Pages and archive pages.', 'tafri-travel-blog' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s p-2 mb-4">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title py-2 mb-2 text-center text-capitalize">',
		'after_title'   => '</h3>',
	) );

	//Footer widget areas
	$tafri_travel_blog_widget_areas = get_theme_mod('tafri_travel_blog_footer_widget', '4');
	for ($i=1; $i<=$tafri_travel_blog_widget_areas; $i++) {
		register_sidebar( array(
			'name'          => __( 'Footer ', 'tafri-travel-blog' ) . $i,
			'id'            => 'footer-' . $i,
			'description'   => '',
			'before_widget' => '<aside id="%1$s" class="widget %2$s mb-4">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title py-2 mb-3">',
			'after_title'   => '</h3>',
		) );
	}
}
add_action( 'widgets_init', 'tafri_travel_blog_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function tafri_travel_blog_scripts() {
	// Add custom fonts, used in the main stylesheet.
	wp_enqueue_style( 'tafri-travel-blog-fonts', tafri_travel_blog_fonts_url(), array(), null );

	// blocks-css
	wp_enqueue_style( 'tafri-travel-blog-block-style', get_theme_file_uri('/assets/css/blocks.css') );

	//bootstrap
	wp_enqueue_style( 'bootstrap-style', get_theme_file_uri( '/assets/css/bootstrap.css' ));

	// Theme stylesheet.
	wp_enqueue_style( 'tafri-travel-blog-basic-style', get_stylesheet_uri() );

	//font-awesome 
	wp_enqueue_style( 'font-awesome-style', esc_url(get_template_directory_uri()).'/assets/css/fontawesome-all.css' );

	// Paragraph
  $tafri_travel_blog_paragraph_color = get_theme_mod('tafri_travel_blog_paragraph_color', '');
  $tafri_travel_blog_paragraph_font_family = get_theme_mod('tafri_travel_blog_paragraph_font_family', '');
  $tafri_travel_blog_paragraph_font_size = get_theme_mod('tafri_travel_blog_paragraph_font_size', '');
	// "a" tag
	$tafri_travel_blog_atag_color = get_theme_mod('tafri_travel_blog_atag_color', '');
  $tafri_travel_blog_atag_font_family = get_theme_mod('tafri_travel_blog_atag_font_family', '');
	// "li" tag
	$tafri_travel_blog_li_color = get_theme_mod('tafri_travel_blog_li_color', '');
  $tafri_travel_blog_li_font_family = get_theme_mod('tafri_travel_blog_li_font_family', '');
	// H1
	$tafri_travel_blog_h1_color = get_theme_mod('tafri_travel_blog_h1_color', '');
  $tafri_travel_blog_h1_font_family = get_theme_mod('tafri_travel_blog_h1_font_family', '');
  $tafri_travel_blog_h1_font_size = get_theme_mod('tafri_travel_blog_h1_font_size', '');
	// H2
	$tafri_travel_blog_h2_color = get_theme_mod('tafri_travel_blog_h2_color', '');
  $tafri_travel_blog_h2_font_family = get_theme_mod('tafri_travel_blog_h2_font_family', '');
  $tafri_travel_blog_h2_font_size = get_theme_mod('tafri_travel_blog_h2_font_size', '');
	// H3
	$tafri_travel_blog_h3_color = get_theme_mod('tafri_travel_blog_h3_color', '');
  $tafri_travel_blog_h3_font_family = get_theme_mod('tafri_travel_blog_h3_font_family', '');
  $tafri_travel_blog_h3_font_size = get_theme_mod('tafri_travel_blog_h3_font_size', '');
	// H4
	$tafri_travel_blog_h4_color = get_theme_mod('tafri_travel_blog_h4_color', '');
  $tafri_travel_blog_h4_font_family = get_theme_mod('tafri_travel_blog_h4_font_family', '');
  $tafri_travel_blog_h4_font_size = get_theme_mod('tafri_travel_blog_h4_font_size', '');
	// H5
	$tafri_travel_blog_h5_color = get_theme_mod('tafri_travel_blog_h5_color', '');
  $tafri_travel_blog_h5_font_family = get_theme_mod('tafri_travel_blog_h5_font_family', '');
  $tafri_travel_blog_h5_font_size = get_theme_mod('tafri_travel_blog_h5_font_size', '');
	// H6
	$tafri_travel_blog_h6_color = get_theme_mod('tafri_travel_blog_h6_color', '');
  $tafri_travel_blog_h6_font_family = get_theme_mod('tafri_travel_blog_h6_font_family', '');
  $tafri_travel_blog_h6_font_size = get_theme_mod('tafri_travel_blog_h6_font_size', '');

	$tafri_travel_blog_custom_css ='
		p,span{
	    color:'.esc_html($tafri_travel_blog_paragraph_color).'!important;
	    font-family: '.esc_html($tafri_travel_blog_paragraph_font_family).';
	    font-size: '.esc_html($tafri_travel_blog_paragraph_font_size).';
		}
		a{
	    color:'.esc_html($tafri_travel_blog_atag_color).'!important;
	    font-family: '.esc_html($tafri_travel_blog_atag_font_family).';
		}
		li{
	    color:'.esc_html($tafri_travel_blog_li_color).'!important;
	    font-family: '.esc_html($tafri_travel_blog_li_font_family).';
		}
		h1{
	    color:'.esc_html($tafri_travel_blog_h1_color).'!important;
	    font-family: '.esc_html($tafri_travel_blog_h1_font_family).'!important;
	    font-size: '.esc_html($tafri_travel_blog_h1_font_size).'!important;
		}
		h2{
	    color:'.esc_html($tafri_travel_blog_h2_color).'!important;
	    font-family: '.esc_html($tafri_travel_blog_h2_font_family).'!important;
	    font-size: '.esc_html($tafri_travel_blog_h2_font_size).'!important;
		}
		h3{
	    color:'.esc_html($tafri_travel_blog_h3_color).'!important;
	    font-family: '.esc_html($tafri_travel_blog_h3_font_family).'!important;
	    font-size: '.esc_html($tafri_travel_blog_h3_font_size).'!important;
		}
		h4{
	    color:'.esc_html($tafri_travel_blog_h4_color).'!important;
	    font-family: '.esc_html($tafri_travel_blog_h4_font_family).'!important;
	    font-size: '.esc_html($tafri_travel_blog_h4_font_size).'!important;
		}
		h5{
	    color:'.esc_html($tafri_travel_blog_h5_color).'!important;
	    font-family: '.esc_html($tafri_travel_blog_h5_font_family).'!important;
	    font-size: '.esc_html($tafri_travel_blog_h5_font_size).'!important;
		}
		h6{
	    color:'.esc_html($tafri_travel_blog_h6_color).'!important;
	    font-family: '.esc_html($tafri_travel_blog_h6_font_family).'!important;
	    font-size: '.esc_html($tafri_travel_blog_h6_font_size).'!important;
		}
	';

	wp_add_inline_style( 'tafri-travel-blog-basic-style',$tafri_travel_blog_custom_css );

	// Load the html5 shiv.
	wp_enqueue_script( 'html5-jquery', get_theme_file_uri( '/assets/js/html5.js' ), array(), '3.7.3' );
	wp_script_add_data( 'html5', 'conditional', 'lt IE 9' );

	wp_enqueue_script( 'tafri-travel-blog-skip-link-focus-fix-jquery', get_theme_file_uri( '/assets/js/skip-link-focus-fix.js' ), array(), '1.0', true );

	$tafri_travel_blogScreenReaderText=array();
	
	if ( has_nav_menu( 'top' ) ) {
		wp_enqueue_script( 'tafri-travel-blog-navigation-jquery', get_theme_file_uri( '/assets/js/navigation.js' ), array( 'jquery' ), '1.0', true );

		$tafri_travel_blogScreenReaderText['expand']         = __( 'Expand child menu', 'tafri-travel-blog' );
		$tafri_travel_blogScreenReaderText['collapse']       = __( 'Collapse child menu', 'tafri-travel-blog' );		
	}

	wp_enqueue_script( 'jquery-custom', get_theme_file_uri( '/assets/js/custom.js' ), array( 'jquery' ), true );
	
	wp_enqueue_script( 'bootstrap-jquery', get_theme_file_uri( '/assets/js/bootstrap.js' ), array( 'jquery' ), true );

	require get_parent_theme_file_path( '/color-option.php' );
	wp_add_inline_style( 'tafri-travel-blog-basic-style',$tafri_travel_blog_custom_css );

	wp_localize_script( 'tafri-travel-blog-skip-link-focus-fix-jquery', 'tafri_travel_blogScreenReaderText', $tafri_travel_blogScreenReaderText );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'tafri_travel_blog_scripts' );

function tafri_travel_blog_sanitize_choices( $input, $setting ) {
    global $wp_customize; 
    $control = $wp_customize->get_control( $setting->id ); 
    if ( array_key_exists( $input, $control->choices ) ) {
        return $input;
    } else {
        return $setting->default;
    }
}

function tafri_travel_blog_sanitize_checkbox( $input ) {
	return ( ( isset( $input ) && true == $input ) ? true : false );
}

function tafri_travel_blog_sanitize_float( $input ) {
	return filter_var($input, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
}

function tafri_travel_blog_sanitize_number_range( $number, $setting ) {
	$number = absint( $number );
	$atts = $setting->manager->get_control( $setting->id )->input_attrs;
	$min = ( isset( $atts['min'] ) ? $atts['min'] : $number );
	$max = ( isset( $atts['max'] ) ? $atts['max'] : $number );
	$step = ( isset( $atts['step'] ) ? $atts['step'] : 1 );
	return ( $min <= $number && $number <= $max && is_int( $number / $step ) ? $number : $setting->default );
}

// Change number or products per row to 3
add_filter('loop_shop_columns', 'tafri_travel_blog_loop_columns');
if (!function_exists('tafri_travel_blog_loop_columns')) {
	function tafri_travel_blog_loop_columns() {
		$columns = get_theme_mod( 'tafri_travel_blog_woocommerce_product_per_columns', 3 );
		return $columns; // 3 products per row
	}
}

//Change number of products that are displayed per page (shop page)
add_filter( 'loop_shop_per_page', 'tafri_travel_blog_shop_per_page', 20 );
function tafri_travel_blog_shop_per_page( $cols ) {
  	$cols = get_theme_mod( 'tafri_travel_blog_woocommerce_product_per_page', 9 );
	return $cols;
}

/* Excerpt Limit Begin */
function tafri_travel_blog_string_limit_words($string, $word_limit) {
	$words = explode(' ', $string, ($word_limit + 1));
	if(count($words) > $word_limit)
	array_pop($words);
	return implode(' ', $words);
}

function tafri_travel_blog_sanitize_dropdown_pages( $page_id, $setting ) {
  // Ensure $input is an absolute integer.
  $page_id = absint( $page_id );
  // If $page_id is an ID of a published page, return it; otherwise, return the default.
  return ( 'publish' == get_post_status( $page_id ) ? $page_id : $setting->default );
}

define('TAFRI_TRAVEL_BLOG_LIVE_DEMO',__('https://www.themeseye.com/tafri-travel-blog-pro/','tafri-travel-blog'));
define('TAFRI_TRAVEL_BLOG_BUY_PRO',__('https://www.themeseye.com/wordpress/travel-wordpress-theme/','tafri-travel-blog'));
define('TAFRI_TRAVEL_BLOG_PRO_DOC',__('https://themeseye.com/theme-demo/docs/tafri-travel-blog-pro/','tafri-travel-blog'));
define('TAFRI_TRAVEL_BLOG_FREE_DOC',__('https://themeseye.com/theme-demo/docs/free-tafri-travel-blog/','tafri-travel-blog'));
define('TAFRI_TRAVEL_BLOG_PRO_SUPPORT',__('https://www.themeseye.com/forums/forum/themeseye-support/','tafri-travel-blog'));
define('TAFRI_TRAVEL_BLOG_FREE_SUPPORT',__('https://wordpress.org/support/theme/tafri-travel-blog/','tafri-travel-blog'));
//footer Link
define('TAFRI_TRAVEL_BLOG_CREDIT',__('https://www.themeseye.com/wordpress/free-travel-blog-wordpress-theme/', 'tafri-travel-blog'));

if ( ! function_exists( 'tafri_travel_blog_credit' ) ) {
	function tafri_travel_blog_credit(){
		echo "<a href=".esc_url(TAFRI_TRAVEL_BLOG_CREDIT)." target='_blank'>".esc_html__('Tafri Travel WordPress Theme','tafri-travel-blog')."</a>";
	}
}

function tafri_travel_blog_custom_goal_raised() {
  add_meta_box( 'bn_meta', __( 'Travel Meta Feilds', 'tafri-travel-blog' ), 'tafri_travel_blog_meta_goal_raised_callback', 'post', 'normal', 'high' );
}
if (is_admin()){
  add_action('admin_menu', 'tafri_travel_blog_custom_goal_raised');
}

function tafri_travel_blog_meta_goal_raised_callback( $post ) {
  wp_nonce_field( basename( __FILE__ ), 'tafri_travel_blog_duration_raised_meta' );
  $bn_stored_meta = get_post_meta( $post->ID );
  $tafri_travel_blog_price = get_post_meta( $post->ID, 'tafri_travel_blog_price', true );
  $tafri_travel_blog_duration = get_post_meta( $post->ID, 'tafri_travel_blog_duration', true );
  ?>
  <div id="custom_meta_feilds">
    <table id="list">
      <tbody id="the-list" data-wp-lists="list:meta">
        <tr id="meta-8">
          <td class="left">
            <?php esc_html_e( 'Price', 'tafri-travel-blog' )?>
          </td>
          <td class="left">
            <input type="text" name="tafri_travel_blog_price" id="tafri_travel_blog_price" value="<?php echo esc_attr($tafri_travel_blog_price); ?>" />
          </td>
        </tr>
        <tr id="meta-8">
          <td class="left">
            <?php esc_html_e( 'Duration', 'tafri-travel-blog' )?>
          </td>
          <td class="left">
            <input type="text" name="tafri_travel_blog_duration" id="tafri_travel_blog_duration" value="<?php echo esc_attr($tafri_travel_blog_duration); ?>" />
          </td>
        </tr>
      </tbody>
    </table>
  </div>
  <?php
}

function tafri_travel_blog_save( $post_id ) {
  if (!isset($_POST['tafri_travel_blog_duration_raised_meta']) || !wp_verify_nonce( strip_tags( wp_unslash( $_POST['tafri_travel_blog_duration_raised_meta']) ), basename(__FILE__))) {
      return;
  }

  if (!current_user_can('edit_post', $post_id)) {
    return;
  }
  if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
    return;
  }

  if( isset( $_POST[ 'tafri_travel_blog_price' ] ) ) {
    update_post_meta( $post_id, 'tafri_travel_blog_price', strip_tags( wp_unslash( $_POST[ 'tafri_travel_blog_price' ]) ) );
  }
  if( isset( $_POST[ 'tafri_travel_blog_duration' ] ) ) {
    update_post_meta( $post_id, 'tafri_travel_blog_duration', strip_tags( wp_unslash( $_POST[ 'tafri_travel_blog_duration' ]) ) );
  }
}
add_action( 'save_post', 'tafri_travel_blog_save' );

require get_parent_theme_file_path( '/inc/custom-header.php' );

require get_parent_theme_file_path( '/inc/template-tags.php' );

require get_parent_theme_file_path( '/inc/template-functions.php' );

require get_parent_theme_file_path( '/inc/customizer.php' ); 

require get_parent_theme_file_path( '/inc/dashboard/get_started_info.php' ); 

/* Webfonts */
require get_parent_theme_file_path( '/inc/wptt-webfont-loader.php' );