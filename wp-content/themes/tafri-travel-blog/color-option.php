<?php

	/*---------------------------Width Layout -------------------*/
	$tafri_travel_blog_theme_lay = get_theme_mod( 'tafri_travel_blog_theme_options','Default');
    if($tafri_travel_blog_theme_lay == 'Default'){
		$tafri_travel_blog_custom_css .='body{';
			$tafri_travel_blog_custom_css .='max-width: 100%;';
		$tafri_travel_blog_custom_css .='}';
		$tafri_travel_blog_custom_css .='.page-template-custom-home-page .middle-header{';
			$tafri_travel_blog_custom_css .='width: 97.3%';
		$tafri_travel_blog_custom_css .='}';
	}else if($tafri_travel_blog_theme_lay == 'Wide Layout'){
		$tafri_travel_blog_custom_css .='body{';
			$tafri_travel_blog_custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$tafri_travel_blog_custom_css .='}';
		$tafri_travel_blog_custom_css .='.page-template-custom-home-page .middle-header{';
			$tafri_travel_blog_custom_css .='width: 97.7%';
		$tafri_travel_blog_custom_css .='}';
	}else if($tafri_travel_blog_theme_lay == 'Box Layout'){
		$tafri_travel_blog_custom_css .='body{';
			$tafri_travel_blog_custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$tafri_travel_blog_custom_css .='}';
	}

	/*--------------------------- Slider Opacity -------------------*/
	$tafri_travel_blog_slider_layout = get_theme_mod( 'tafri_travel_blog_slider_opacity_color','0.7');
	if($tafri_travel_blog_slider_layout == '0'){
		$tafri_travel_blog_custom_css .='#slider img{';
			$tafri_travel_blog_custom_css .='opacity:0';
		$tafri_travel_blog_custom_css .='}';
		}else if($tafri_travel_blog_slider_layout == '0.1'){
		$tafri_travel_blog_custom_css .='#slider img{';
			$tafri_travel_blog_custom_css .='opacity:0.1';
		$tafri_travel_blog_custom_css .='}';
		}else if($tafri_travel_blog_slider_layout == '0.2'){
		$tafri_travel_blog_custom_css .='#slider img{';
			$tafri_travel_blog_custom_css .='opacity:0.2';
		$tafri_travel_blog_custom_css .='}';
		}else if($tafri_travel_blog_slider_layout == '0.3'){
		$tafri_travel_blog_custom_css .='#slider img{';
			$tafri_travel_blog_custom_css .='opacity:0.3';
		$tafri_travel_blog_custom_css .='}';
		}else if($tafri_travel_blog_slider_layout == '0.4'){
		$tafri_travel_blog_custom_css .='#slider img{';
			$tafri_travel_blog_custom_css .='opacity:0.4';
		$tafri_travel_blog_custom_css .='}';
		}else if($tafri_travel_blog_slider_layout == '0.5'){
		$tafri_travel_blog_custom_css .='#slider img{';
			$tafri_travel_blog_custom_css .='opacity:0.5';
		$tafri_travel_blog_custom_css .='}';
		}else if($tafri_travel_blog_slider_layout == '0.6'){
		$tafri_travel_blog_custom_css .='#slider img{';
			$tafri_travel_blog_custom_css .='opacity:0.6';
		$tafri_travel_blog_custom_css .='}';
		}else if($tafri_travel_blog_slider_layout == '0.7'){
		$tafri_travel_blog_custom_css .='#slider img{';
			$tafri_travel_blog_custom_css .='opacity:0.7';
		$tafri_travel_blog_custom_css .='}';
		}else if($tafri_travel_blog_slider_layout == '0.8'){
		$tafri_travel_blog_custom_css .='#slider img{';
			$tafri_travel_blog_custom_css .='opacity:0.8';
		$tafri_travel_blog_custom_css .='}';
		}else if($tafri_travel_blog_slider_layout == '0.9'){
		$tafri_travel_blog_custom_css .='#slider img{';
			$tafri_travel_blog_custom_css .='opacity:0.9';
		$tafri_travel_blog_custom_css .='}';
		}

	/*---------------------------Slider Content Layout -------------------*/
	$tafri_travel_blog_slider_layout = get_theme_mod( 'tafri_travel_blog_slider_content_option','Left');
    if($tafri_travel_blog_slider_layout == 'Left'){
		$tafri_travel_blog_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .readbutton{';
			$tafri_travel_blog_custom_css .='text-align:left; left:10%; right:50%; bottom: auto;';
		$tafri_travel_blog_custom_css .='}';		
	}else if($tafri_travel_blog_slider_layout == 'Center'){
		$tafri_travel_blog_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .readbutton{';
			$tafri_travel_blog_custom_css .='text-align:center; left:28%; right:28%; bottom: auto;';
		$tafri_travel_blog_custom_css .='}';	
		$tafri_travel_blog_custom_css .='@media screen and (max-width: 768px){
		#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .readbutton{';
			$tafri_travel_blog_custom_css .='left:15%; right:15%; bottom: auto;';
		$tafri_travel_blog_custom_css .='} }';		
		$tafri_travel_blog_custom_css .='#slider .slider-icon {';
			$tafri_travel_blog_custom_css .=' top:80%; left:50%; right:auto; transform: translate(-50%, -20%);';
		$tafri_travel_blog_custom_css .='}';	
		$tafri_travel_blog_custom_css .='#slider .slider-icon-image {';
			$tafri_travel_blog_custom_css .=' display: inline-block; margin: 0 10px;';
		$tafri_travel_blog_custom_css .='}';
		$tafri_travel_blog_custom_css .='.social-icons {';
			$tafri_travel_blog_custom_css .=' text-align: center !important;';
		$tafri_travel_blog_custom_css .='}';
	}else if($tafri_travel_blog_slider_layout == 'Right'){
		$tafri_travel_blog_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .readbutton{';
			$tafri_travel_blog_custom_css .='text-align:right; left:50%; right:10%; bottom: auto;';
		$tafri_travel_blog_custom_css .='}';		
		$tafri_travel_blog_custom_css .='#slider .slider-icon {';
			$tafri_travel_blog_custom_css .=' left:10%; right:80%;';
		$tafri_travel_blog_custom_css .='}';
	}

	/*----------------------------- Button Settings option-----------------------*/
	$tafri_travel_blog_top_bottom_padding = get_theme_mod('tafri_travel_blog_top_bottom_padding');
	$tafri_travel_blog_left_right_padding = get_theme_mod('tafri_travel_blog_left_right_padding');
	$tafri_travel_blog_custom_css .='.post-link a, #slider .readbutton, .form-submit input[type="submit"]{';
		$tafri_travel_blog_custom_css .='padding-top: '.esc_attr($tafri_travel_blog_top_bottom_padding).'px; padding-bottom: '.esc_attr($tafri_travel_blog_top_bottom_padding).'px; padding-left: '.esc_attr($tafri_travel_blog_left_right_padding).'px; padding-right: '.esc_attr($tafri_travel_blog_left_right_padding).'px; display:inline-block;';
	$tafri_travel_blog_custom_css .='}';

	$tafri_travel_blog_border_radius = get_theme_mod('tafri_travel_blog_border_radius');
	$tafri_travel_blog_custom_css .='.post-link a,#slider .readbutton, .form-submit input[type="submit"]{';
		$tafri_travel_blog_custom_css .='border-radius: '.esc_attr($tafri_travel_blog_border_radius).'px;';
	$tafri_travel_blog_custom_css .='}';

	/*---------------------------Blog Layout -------------------*/
	$tafri_travel_blog_theme_lay = get_theme_mod( 'tafri_travel_blog_blog_post_layout','Default');
    if($tafri_travel_blog_theme_lay == 'Default'){
		$tafri_travel_blog_custom_css .='.blogger{';
			$tafri_travel_blog_custom_css .='';
		$tafri_travel_blog_custom_css .='}';
	}else if($tafri_travel_blog_theme_lay == 'Center'){
		$tafri_travel_blog_custom_css .='.blogger, .blogger h2, .post-info, .text p, .blogger .post-link{';
			$tafri_travel_blog_custom_css .='text-align:center;';
		$tafri_travel_blog_custom_css .='}';
		$tafri_travel_blog_custom_css .='.post-info{';
			$tafri_travel_blog_custom_css .='margin-top:10px;';
		$tafri_travel_blog_custom_css .='}';
		$tafri_travel_blog_custom_css .='.blogger .post-link{';
			$tafri_travel_blog_custom_css .='margin-top:25px;';
		$tafri_travel_blog_custom_css .='}';
	}else if($tafri_travel_blog_theme_lay == 'Image and Content'){
		$tafri_travel_blog_custom_css .='.blogger, .blogger h2, .post-info, .text p, #our-services p{';
			$tafri_travel_blog_custom_css .='text-align:Left;';
		$tafri_travel_blog_custom_css .='}';
		$tafri_travel_blog_custom_css .='.blogger .post-link{';
			$tafri_travel_blog_custom_css .='text-align:right;';
		$tafri_travel_blog_custom_css .='}';
	}

	/*--------- Preloader Color Option -------*/
	$tafri_travel_blog_loader_color_setting = get_theme_mod('tafri_travel_blog_loader_color_setting');
	$tafri_travel_blog_custom_css .=' .circle .inner{';
		$tafri_travel_blog_custom_css .='border-color: '.esc_attr($tafri_travel_blog_loader_color_setting).';';
	$tafri_travel_blog_custom_css .='} ';

	$tafri_travel_blog_loader_background_color = get_theme_mod('tafri_travel_blog_loader_background_color');
	$tafri_travel_blog_custom_css .=' #pre-loader{';
		$tafri_travel_blog_custom_css .='background-color: '.esc_attr($tafri_travel_blog_loader_background_color).';';
	$tafri_travel_blog_custom_css .='} ';

	$tafri_travel_blog_theme_lay = get_theme_mod( 'tafri_travel_blog_preloader_types','Default');
    if($tafri_travel_blog_theme_lay == 'Default'){
		$tafri_travel_blog_custom_css .='{';
			$tafri_travel_blog_custom_css .='';
		$tafri_travel_blog_custom_css .='}';
	}elseif($tafri_travel_blog_theme_lay == 'Circle'){
		$tafri_travel_blog_custom_css .='.circle .inner{';
			$tafri_travel_blog_custom_css .='width:unset;';
		$tafri_travel_blog_custom_css .='}';
	}elseif($tafri_travel_blog_theme_lay == 'Two Circle'){
		$tafri_travel_blog_custom_css .='.circle .inner{';
			$tafri_travel_blog_custom_css .='width:80%;
    border-right: 5px;';
		$tafri_travel_blog_custom_css .='}';
	}

	// Responsive Media
    $tafri_travel_blog_preloader = get_theme_mod( 'tafri_travel_blog_enable_disable_preloader', false);
	if($tafri_travel_blog_preloader == true && get_theme_mod( 'tafri_travel_blog_loader_setting', false) == false){
    	$tafri_travel_blog_custom_css .='#pre-loader{';
			$tafri_travel_blog_custom_css .='display:none;';
		$tafri_travel_blog_custom_css .='} ';
	}
    if($tafri_travel_blog_preloader == true){
    	$tafri_travel_blog_custom_css .='@media screen and (max-width:575px) {';
		$tafri_travel_blog_custom_css .='#pre-loader{';
			$tafri_travel_blog_custom_css .='display:block;';
		$tafri_travel_blog_custom_css .='} }';
	}else if($tafri_travel_blog_preloader == false){
		$tafri_travel_blog_custom_css .='@media screen and (max-width:575px) {';
		$tafri_travel_blog_custom_css .='#pre-loader{';
			$tafri_travel_blog_custom_css .='display:none;';
		$tafri_travel_blog_custom_css .='} }';
	}

	$tafri_travel_blog_sidebar = get_theme_mod( 'tafri_travel_blog_enable_disable_sidebar',true);
    if($tafri_travel_blog_sidebar == true){
    	$tafri_travel_blog_custom_css .='@media screen and (max-width:575px) {';
		$tafri_travel_blog_custom_css .='#sidebox{';
			$tafri_travel_blog_custom_css .='display:block;';
		$tafri_travel_blog_custom_css .='} }';
	}else if($tafri_travel_blog_sidebar == false){
		$tafri_travel_blog_custom_css .='@media screen and (max-width:575px) {';
		$tafri_travel_blog_custom_css .='#sidebox{';
			$tafri_travel_blog_custom_css .='display:none;';
		$tafri_travel_blog_custom_css .='} }';
	}

	$tafri_travel_blog_slider = get_theme_mod( 'tafri_travel_blog_enable_disable_slider', false);
	if($tafri_travel_blog_slider == true && get_theme_mod( 'tafri_travel_blog_slider_arrows', false) == false){
    	$tafri_travel_blog_custom_css .='#slider{';
			$tafri_travel_blog_custom_css .='display:none;';
		$tafri_travel_blog_custom_css .='} ';
	}
    if($tafri_travel_blog_slider == true){
    	$tafri_travel_blog_custom_css .='@media screen and (max-width:575px) {';
		$tafri_travel_blog_custom_css .='#slider{';
			$tafri_travel_blog_custom_css .='display:block;';
		$tafri_travel_blog_custom_css .='} }';
	}else if($tafri_travel_blog_slider == false){
		$tafri_travel_blog_custom_css .='@media screen and (max-width:575px){';
		$tafri_travel_blog_custom_css .='#slider{';
			$tafri_travel_blog_custom_css .='display:none;';
		$tafri_travel_blog_custom_css .='} }';
	}

	$tafri_travel_blog_sliderbutton = get_theme_mod( 'tafri_travel_blog_show_hide_slider_button', true);
	if($tafri_travel_blog_sliderbutton == true && get_theme_mod( 'tafri_travel_blog_slider_button', true) != true){
    	$tafri_travel_blog_custom_css .='#slider .readbutton{';
			$tafri_travel_blog_custom_css .='display:none;';
		$tafri_travel_blog_custom_css .='} ';
	}
    if($tafri_travel_blog_sliderbutton == true){
    	$tafri_travel_blog_custom_css .='@media screen and (max-width:575px) {';
		$tafri_travel_blog_custom_css .='#slider .readbutton{';
			$tafri_travel_blog_custom_css .='display:inline-block;';
		$tafri_travel_blog_custom_css .='} }';
	}else if($tafri_travel_blog_sliderbutton != true){
		$tafri_travel_blog_custom_css .='@media screen and (max-width:575px){';
		$tafri_travel_blog_custom_css .='#slider .readbutton{';
			$tafri_travel_blog_custom_css .='display:none;';
		$tafri_travel_blog_custom_css .='} }';
	}

	$tafri_travel_blog_scroll = get_theme_mod( 'tafri_travel_blog_enable_disable_scrolltop', false);
	if($tafri_travel_blog_scroll == true && get_theme_mod( 'tafri_travel_blog_hide_show_scroll', false) == false){
    	$tafri_travel_blog_custom_css .='.scrollup i{';
			$tafri_travel_blog_custom_css .='display:none;';
		$tafri_travel_blog_custom_css .='} ';
	}
    if($tafri_travel_blog_scroll == true){
    	$tafri_travel_blog_custom_css .='@media screen and (max-width:575px) {';
		$tafri_travel_blog_custom_css .='.scrollup i{';
			$tafri_travel_blog_custom_css .='display:block;';
		$tafri_travel_blog_custom_css .='} }';
	}else if($tafri_travel_blog_scroll == false){
		$tafri_travel_blog_custom_css .='@media screen and (max-width:575px){';
		$tafri_travel_blog_custom_css .='.scrollup i{';
			$tafri_travel_blog_custom_css .='display:none;';
		$tafri_travel_blog_custom_css .='} }';
	}

	// Copyright top-bottom padding setting 
	$tafri_travel_blog_copyright_top_bottom_padding = get_theme_mod('tafri_travel_blog_copyright_top_bottom_padding');
	$tafri_travel_blog_custom_css .='.site-info{';
		$tafri_travel_blog_custom_css .='padding-top: '.esc_attr($tafri_travel_blog_copyright_top_bottom_padding).'px; padding-bottom: '.esc_attr($tafri_travel_blog_copyright_top_bottom_padding).'px;';
	$tafri_travel_blog_custom_css .='}';

	$tafri_travel_blog_footer_text_font_size = get_theme_mod('tafri_travel_blog_footer_text_font_size', 16);
	$tafri_travel_blog_custom_css .='.site-info{';
		$tafri_travel_blog_custom_css .='font-size: '.esc_attr($tafri_travel_blog_footer_text_font_size).'px;';
	$tafri_travel_blog_custom_css .='}';

	// Slider Height 
	$tafri_travel_blog_slider_height_option = get_theme_mod('tafri_travel_blog_slider_height_option');
	$tafri_travel_blog_custom_css .='#slider img{';
		$tafri_travel_blog_custom_css .='height: '.esc_attr($tafri_travel_blog_slider_height_option).'px;';
	$tafri_travel_blog_custom_css .='}';

	// scroll to top setting
	$tafri_travel_blog_scroll_border_radius = get_theme_mod('tafri_travel_blog_scroll_border_radius');
	$tafri_travel_blog_custom_css .='.scrollup i{';
		$tafri_travel_blog_custom_css .='border-radius: '.esc_attr($tafri_travel_blog_scroll_border_radius).'px;';
	$tafri_travel_blog_custom_css .='}';

	$tafri_travel_blog_scroll_top_fontsize = get_theme_mod('tafri_travel_blog_scroll_top_fontsize');
	$tafri_travel_blog_custom_css .='.scrollup i{';
		$tafri_travel_blog_custom_css .='font-size: '.esc_attr($tafri_travel_blog_scroll_top_fontsize).'px;';
	$tafri_travel_blog_custom_css .='}';

	$tafri_travel_blog_scroll_top_bottom_padding = get_theme_mod('tafri_travel_blog_scroll_top_bottom_padding');
	$tafri_travel_blog_scroll_left_right_padding = get_theme_mod('tafri_travel_blog_scroll_left_right_padding');
	$tafri_travel_blog_custom_css .='.scrollup i{';
		$tafri_travel_blog_custom_css .='padding-top: '.esc_attr($tafri_travel_blog_scroll_top_bottom_padding).'px; padding-bottom: '.esc_attr($tafri_travel_blog_scroll_top_bottom_padding).'px; padding-left: '.esc_attr($tafri_travel_blog_scroll_left_right_padding).'px; padding-right: '.esc_attr($tafri_travel_blog_scroll_left_right_padding).'px;';
	$tafri_travel_blog_custom_css .='}';

	// comment settings
	$tafri_travel_blog_comment_button_text = get_theme_mod('tafri_travel_blog_comment_button_text', 'Post Comment');
	if($tafri_travel_blog_comment_button_text == ''){
		$tafri_travel_blog_custom_css .='#comments p.form-submit {';
			$tafri_travel_blog_custom_css .='display: none;';
		$tafri_travel_blog_custom_css .='}';
	}

	$tafri_travel_blog_comment_form_heading = get_theme_mod('tafri_travel_blog_comment_form_heading', 'Leave a Reply');
	if($tafri_travel_blog_comment_form_heading == ''){
		$tafri_travel_blog_custom_css .='#comments h2#reply-title {';
			$tafri_travel_blog_custom_css .='display: none;';
		$tafri_travel_blog_custom_css .='}';
	}

	$tafri_travel_blog_comment_form_size = get_theme_mod( 'tafri_travel_blog_comment_form_size',100);
	$tafri_travel_blog_custom_css .='#comments textarea{';
		$tafri_travel_blog_custom_css .='width: '.esc_attr($tafri_travel_blog_comment_form_size).'%;';
	$tafri_travel_blog_custom_css .='}';

	/*------------ Woocommerce Settings  --------------*/
	$tafri_travel_blog_shop_button_padding_top = get_theme_mod('tafri_travel_blog_shop_button_padding_top', 9);
	$tafri_travel_blog_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce button.button:disabled, .woocommerce button.button:disabled[disabled], .woocommerce a.added_to_cart.wc-forward{';
		$tafri_travel_blog_custom_css .='padding-top: '.esc_attr($tafri_travel_blog_shop_button_padding_top).'px; padding-bottom: '.esc_attr($tafri_travel_blog_shop_button_padding_top).'px;';
	$tafri_travel_blog_custom_css .='}';

	$tafri_travel_blog_shop_button_padding_left = get_theme_mod('tafri_travel_blog_shop_button_padding_left', 16);
	$tafri_travel_blog_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce button.button:disabled, .woocommerce button.button:disabled[disabled], .woocommerce a.added_to_cart.wc-forward{';
		$tafri_travel_blog_custom_css .='padding-left: '.esc_attr($tafri_travel_blog_shop_button_padding_left).'px; padding-right: '.esc_attr($tafri_travel_blog_shop_button_padding_left).'px;';
	$tafri_travel_blog_custom_css .='}';

	$tafri_travel_blog_shop_button_border_radius = get_theme_mod('tafri_travel_blog_shop_button_border_radius',5);
	$tafri_travel_blog_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce a.added_to_cart.wc-forward{';
		$tafri_travel_blog_custom_css .='border-radius: '.esc_attr($tafri_travel_blog_shop_button_border_radius).'px;';
	$tafri_travel_blog_custom_css .='}';

	$tafri_travel_blog_display_related_products = get_theme_mod('tafri_travel_blog_display_related_products',true);
	if($tafri_travel_blog_display_related_products == false){
		$tafri_travel_blog_custom_css .='.related.products{';
			$tafri_travel_blog_custom_css .='display: none;';
		$tafri_travel_blog_custom_css .='}';
	}

	$tafri_travel_blog_shop_products_border = get_theme_mod('tafri_travel_blog_shop_products_border', true);
	if($tafri_travel_blog_shop_products_border == false){
		$tafri_travel_blog_custom_css .='.woocommerce .products li{';
			$tafri_travel_blog_custom_css .='border: none;';
		$tafri_travel_blog_custom_css .='}';
	}

	$tafri_travel_blog_shop_page_top_padding = get_theme_mod('tafri_travel_blog_shop_page_top_padding',10);
	$tafri_travel_blog_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$tafri_travel_blog_custom_css .='padding-top: '.esc_attr($tafri_travel_blog_shop_page_top_padding).'px !important; padding-bottom: '.esc_attr($tafri_travel_blog_shop_page_top_padding).'px !important;';
	$tafri_travel_blog_custom_css .='}';

	$tafri_travel_blog_shop_page_left_padding = get_theme_mod('tafri_travel_blog_shop_page_left_padding',10);
	$tafri_travel_blog_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$tafri_travel_blog_custom_css .='padding-left: '.esc_attr($tafri_travel_blog_shop_page_left_padding).'px !important; padding-right: '.esc_attr($tafri_travel_blog_shop_page_left_padding).'px !important;';
	$tafri_travel_blog_custom_css .='}';

	$tafri_travel_blog_shop_page_border_radius = get_theme_mod('tafri_travel_blog_shop_page_border_radius',0);
	$tafri_travel_blog_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$tafri_travel_blog_custom_css .='border-radius: '.esc_attr($tafri_travel_blog_shop_page_border_radius).'px;';
	$tafri_travel_blog_custom_css .='}';

	$tafri_travel_blog_shop_page_box_shadow = get_theme_mod('tafri_travel_blog_shop_page_box_shadow',0);
	$tafri_travel_blog_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$tafri_travel_blog_custom_css .='box-shadow: '.esc_attr($tafri_travel_blog_shop_page_box_shadow).'px '.esc_attr($tafri_travel_blog_shop_page_box_shadow).'px '.esc_attr($tafri_travel_blog_shop_page_box_shadow).'px #e4e4e4;';
	$tafri_travel_blog_custom_css .='}';

	// footer widget background
	$tafri_travel_blog_footer_widget_background = get_theme_mod('tafri_travel_blog_footer_widget_background', '#121212');
	$tafri_travel_blog_custom_css .='.site-footer{';
		$tafri_travel_blog_custom_css .='background-color: '.esc_attr($tafri_travel_blog_footer_widget_background).';';
	$tafri_travel_blog_custom_css .='}';

	$tafri_travel_blog_footer_widget_image = get_theme_mod('tafri_travel_blog_footer_widget_image');
	if($tafri_travel_blog_footer_widget_image != false){
		$tafri_travel_blog_custom_css .='.site-footer{';
			$tafri_travel_blog_custom_css .='background: url('.esc_attr($tafri_travel_blog_footer_widget_image).');';
		$tafri_travel_blog_custom_css .='}';
	}

	/*------------- Navigation Menu Font Size ------------------*/
	$tafri_travel_blog_navigation_menu_font_size = get_theme_mod('tafri_travel_blog_navigation_menu_font_size');{
		$tafri_travel_blog_custom_css .='.main-navigation a, .navigation-top a{';
			$tafri_travel_blog_custom_css .='font-size: '.esc_attr($tafri_travel_blog_navigation_menu_font_size).'px;';
		$tafri_travel_blog_custom_css .='}';
	}

	$tafri_travel_blog_theme_lay = get_theme_mod( 'tafri_travel_blog_menu_text_tranform','Default');
	if($tafri_travel_blog_theme_lay == 'Uppercase'){
		$tafri_travel_blog_custom_css .='.main-navigation a, .navigation-top a,.main-navigation ul ul a{';
			$tafri_travel_blog_custom_css .='text-transform:Uppercase;';
		$tafri_travel_blog_custom_css .='}';
	}

	$tafri_travel_blog_theme_lay = get_theme_mod( 'tafri_travel_blog_menu_font_weight','Default');
	if($tafri_travel_blog_theme_lay == 'Normal'){
		$tafri_travel_blog_custom_css .='.main-navigation a, .navigation-top a{';
			$tafri_travel_blog_custom_css .='font-weight: normal;';
		$tafri_travel_blog_custom_css .='}';
	}

     // site title color option
	$tafri_travel_blog_site_title_color_setting = get_theme_mod('tafri_travel_blog_site_title_color_setting');
	$tafri_travel_blog_custom_css .=' .site-title a{';
		$tafri_travel_blog_custom_css .='color: '.esc_attr($tafri_travel_blog_site_title_color_setting).';';
	$tafri_travel_blog_custom_css .='} ';

	$tafri_travel_blog_tagline_color_setting = get_theme_mod('tafri_travel_blog_tagline_color_setting');
	$tafri_travel_blog_custom_css .=' .site-description{';
		$tafri_travel_blog_custom_css .='color: '.esc_attr($tafri_travel_blog_tagline_color_setting).';';
	$tafri_travel_blog_custom_css .='} ';

	// site title font size option
	$tafri_travel_blog_site_title_font_size = get_theme_mod('tafri_travel_blog_site_title_font_size', 30);{
	$tafri_travel_blog_custom_css .='.logo h1, .logo p.site-title{';
	$tafri_travel_blog_custom_css .='font-size: '.esc_attr($tafri_travel_blog_site_title_font_size).'px;';
		$tafri_travel_blog_custom_css .='}';
	}

	$tafri_travel_blog_site_tagline_font_size_settings = get_theme_mod('tafri_travel_blog_site_tagline_font_size_settings', 13);{
	$tafri_travel_blog_custom_css .='.logo p.site-description{';
	$tafri_travel_blog_custom_css .='font-size: '.esc_attr($tafri_travel_blog_site_tagline_font_size_settings).'px;';
		$tafri_travel_blog_custom_css .='}';
	}

	/*------------------ Background Skin Option  -------------------*/
	$tafri_travel_blog_theme_lay = get_theme_mod( 'tafri_travel_blog_background_image_type','Transparent');
    if($tafri_travel_blog_theme_lay == 'Background'){
		$tafri_travel_blog_custom_css .='.blogger, #sidebox .widget, .about-text, .related-posts .page-box, .woocommerce ul.products li.product, .woocommerce-page ul.products li.product, .background-img-skin, .pages-te, .woocommerce .woocommerce-ordering{';
			$tafri_travel_blog_custom_css .='background-color: #fff;';
		$tafri_travel_blog_custom_css .='}';
	}else if($tafri_travel_blog_theme_lay == 'Transparent'){
		$tafri_travel_blog_custom_css .='#services h3{';
			$tafri_travel_blog_custom_css .='background-color: transparent;';
		$tafri_travel_blog_custom_css .='}';
	}

	// slider overlay
	$tafri_travel_blog_show_slider_image_overlay = get_theme_mod('tafri_travel_blog_show_slider_image_overlay', true);
	if($tafri_travel_blog_show_slider_image_overlay == false){
		$tafri_travel_blog_custom_css .='#slider img{';
			$tafri_travel_blog_custom_css .='opacity:1;';
		$tafri_travel_blog_custom_css .='}';
	} 
	$tafri_travel_blog_color_slider_image_overlay = get_theme_mod('tafri_travel_blog_color_slider_image_overlay', true);
	if($tafri_travel_blog_show_slider_image_overlay != false){
		$tafri_travel_blog_custom_css .='#slider{';
			$tafri_travel_blog_custom_css .='background-color: '.esc_attr($tafri_travel_blog_color_slider_image_overlay).';';
		$tafri_travel_blog_custom_css .='}';
	}

	// woocommerce product sale settings
	$tafri_travel_blog_border_radius_product_sale_text = get_theme_mod('tafri_travel_blog_border_radius_product_sale_text',0);
	$tafri_travel_blog_custom_css .='.woocommerce span.onsale {';
		$tafri_travel_blog_custom_css .='border-radius: '.esc_attr($tafri_travel_blog_border_radius_product_sale_text).'%;';
	$tafri_travel_blog_custom_css .='}';

	$tafri_travel_blog_position_product_sale = get_theme_mod('tafri_travel_blog_position_product_sale', 'Right');
	if($tafri_travel_blog_position_product_sale == 'Right' ){
		$tafri_travel_blog_custom_css .='.woocommerce ul.products li.product .onsale{';
			$tafri_travel_blog_custom_css .=' left:auto; right:0;';
		$tafri_travel_blog_custom_css .='}';
	}elseif($tafri_travel_blog_position_product_sale == 'Left' ){
		$tafri_travel_blog_custom_css .='.woocommerce ul.products li.product .onsale{';
			$tafri_travel_blog_custom_css .=' left:0; right:auto;';
		$tafri_travel_blog_custom_css .='}';
	}

	$tafri_travel_blog_product_sale_text_size = get_theme_mod('tafri_travel_blog_product_sale_text_size',14);
	$tafri_travel_blog_custom_css .='.woocommerce span.onsale{';
		$tafri_travel_blog_custom_css .='font-size: '.esc_attr($tafri_travel_blog_product_sale_text_size).'px;';
	$tafri_travel_blog_custom_css .='}';

	$tafri_travel_blog_top_bottom_product_sale_padding = get_theme_mod('tafri_travel_blog_top_bottom_product_sale_padding');
	$tafri_travel_blog_left_right_product_sale_padding = get_theme_mod('tafri_travel_blog_left_right_product_sale_padding');
	$tafri_travel_blog_custom_css .='.woocommerce span.onsale{';
		$tafri_travel_blog_custom_css .='padding-top: '.esc_attr($tafri_travel_blog_top_bottom_product_sale_padding).'px; padding-bottom: '.esc_attr($tafri_travel_blog_top_bottom_product_sale_padding).'px; padding-left: '.esc_attr($tafri_travel_blog_left_right_product_sale_padding).'px; padding-right: '.esc_attr($tafri_travel_blog_left_right_product_sale_padding).'px; display:inline-block;';
	$tafri_travel_blog_custom_css .='}';

	// woocommerce Product Navigation
	$tafri_travel_blog_shop_products_navigation = get_theme_mod('tafri_travel_blog_shop_products_navigation', 'Yes');
	if($tafri_travel_blog_shop_products_navigation == 'No'){
		$tafri_travel_blog_custom_css .='.woocommerce nav.woocommerce-pagination{';
			$tafri_travel_blog_custom_css .='display: none;';
		$tafri_travel_blog_custom_css .='}';
	}

	// Post Block
	$tafri_travel_blog_post_break_block_setting = get_theme_mod( 'tafri_travel_blog_post_break_block_setting','Into Blocks');
    if($tafri_travel_blog_post_break_block_setting == 'Without Blocks'){
		$tafri_travel_blog_custom_css .='.blogger{';
			$tafri_travel_blog_custom_css .='border: none; margin:30px 0;';
		$tafri_travel_blog_custom_css .='}';
	}

	// fixed header padding option
	$tafri_travel_blog_fixed_header_padding_option = get_theme_mod('tafri_travel_blog_fixed_header_padding_option');
	$tafri_travel_blog_custom_css .='.fixed-header{';
		$tafri_travel_blog_custom_css .='padding: '.esc_attr($tafri_travel_blog_fixed_header_padding_option).'px;';
	$tafri_travel_blog_custom_css .='}';

	// slider top and bottom padding
	$tafri_travel_blog_padding_top_bottom_slider_content = get_theme_mod('tafri_travel_blog_padding_top_bottom_slider_content');
	$tafri_travel_blog_padding_left_right_slider_content = get_theme_mod('tafri_travel_blog_padding_left_right_slider_content');
	$tafri_travel_blog_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .readbutton{';
		$tafri_travel_blog_custom_css .='top: '.esc_attr($tafri_travel_blog_padding_top_bottom_slider_content).'%; bottom: '.esc_attr($tafri_travel_blog_padding_top_bottom_slider_content).'%;left: '.esc_attr($tafri_travel_blog_padding_left_right_slider_content).'%;right: '.esc_attr($tafri_travel_blog_padding_left_right_slider_content).'%;';

	$tafri_travel_blog_custom_css .='}';

	// Slider
	$tafri_travel_blog_slider_arrows = get_theme_mod('tafri_travel_blog_slider_arrows',false);
	if ($tafri_travel_blog_slider_arrows == false) {
		$tafri_travel_blog_custom_css .='.page-template-home-custom #masthead{';
			$tafri_travel_blog_custom_css .=' position:static !important; border-bottom: 2px solid #e2e2e2;';

		$tafri_travel_blog_custom_css .='}';
	}

	//Copyright background css
	$tafri_travel_blog_copyright_background_color = get_theme_mod('tafri_travel_blog_copyright_background_color');
	$tafri_travel_blog_custom_css .='.site-info{';
		$tafri_travel_blog_custom_css .='background-color: '.esc_attr($tafri_travel_blog_copyright_background_color).';';
	$tafri_travel_blog_custom_css .='}';

	// Single Post Categories
	$tafri_travel_blog_show_hide_single_post_categories = get_theme_mod('tafri_travel_blog_show_hide_single_post_categories',false);
	if ($tafri_travel_blog_show_hide_single_post_categories == false) {
		$tafri_travel_blog_custom_css .='.post-info{';
			$tafri_travel_blog_custom_css .=' margin-top:20px;';
		$tafri_travel_blog_custom_css .='}';
	}

	// Slider Width Layout
	$tafri_travel_blog_slider_width_options = get_theme_mod('tafri_travel_blog_slider_width_options', 'Full Width');
	if($tafri_travel_blog_slider_width_options == 'Full Width' ){
		$tafri_travel_blog_custom_css .='.page-template-home-custom #masthead{';
			$tafri_travel_blog_custom_css .=' position:absolute;';
		$tafri_travel_blog_custom_css .='}';
	}elseif($tafri_travel_blog_slider_width_options == 'Container Width' ){
		$tafri_travel_blog_custom_css .='.page-template-home-custom #masthead{';
			$tafri_travel_blog_custom_css .=' position:static;';
		$tafri_travel_blog_custom_css .='}';
		$tafri_travel_blog_custom_css .='.admin-bar.page-template-home-custom #masthead{';
			$tafri_travel_blog_custom_css .=' margin-top:0px;';
		$tafri_travel_blog_custom_css .='}';
	}

	// Blog post image border radious
    $tafri_travel_blog_blog_post_img_border_radius = get_theme_mod('tafri_travel_blog_blog_post_img_border_radius', 0);
	$tafri_travel_blog_custom_css .='.post-image img{';
		$tafri_travel_blog_custom_css .='border-radius: '.esc_attr($tafri_travel_blog_blog_post_img_border_radius).'px;';
	$tafri_travel_blog_custom_css .='}';

     // Blog post image box shadow
	$tafri_travel_blog_blog_post_img_box_shadow = get_theme_mod('tafri_travel_blog_blog_post_img_box_shadow',0);
	$tafri_travel_blog_custom_css .='.post-image img{';
		$tafri_travel_blog_custom_css .='box-shadow: '.esc_attr($tafri_travel_blog_blog_post_img_box_shadow).'px '.esc_attr($tafri_travel_blog_blog_post_img_box_shadow).'px '.esc_attr($tafri_travel_blog_blog_post_img_box_shadow).'px #ccc;';
	$tafri_travel_blog_custom_css .='}';

    // Single post image border radious
	$tafri_travel_blog_single_post_img_border_radius = get_theme_mod('tafri_travel_blog_single_post_img_border_radius', 0);
	$tafri_travel_blog_custom_css .='.blogger.singlebox .post-image img{';
		$tafri_travel_blog_custom_css .='border-radius: '.esc_attr($tafri_travel_blog_single_post_img_border_radius).'px;';
	$tafri_travel_blog_custom_css .='}';

	 // Single post image box shadow
	$tafri_travel_blog_single_post_img_box_shadow = get_theme_mod('tafri_travel_blog_single_post_img_box_shadow',0);
	$tafri_travel_blog_custom_css .='.blogger.singlebox .post-image img{';
		$tafri_travel_blog_custom_css .='box-shadow: '.esc_attr($tafri_travel_blog_single_post_img_box_shadow).'px '.esc_attr($tafri_travel_blog_single_post_img_box_shadow).'px '.esc_attr($tafri_travel_blog_single_post_img_box_shadow).'px #ccc;';
	$tafri_travel_blog_custom_css .='}';