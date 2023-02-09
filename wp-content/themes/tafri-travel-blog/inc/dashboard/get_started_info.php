<?php

add_action( 'admin_menu', 'tafri_travel_blog_gettingstarted' );
function tafri_travel_blog_gettingstarted() {
	add_theme_page( esc_html__('About Theme', 'tafri-travel-blog'), esc_html__('About Theme', 'tafri-travel-blog'), 'edit_theme_options', 'tafri-travel-blog-guide-page', 'tafri_travel_blog_guide');   
}

function tafri_travel_blog_admin_theme_style() {
   wp_enqueue_style('tafri-travel-blog-custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/dashboard/get_started_info.css');
   wp_enqueue_script('tabs', esc_url(get_template_directory_uri()) . '/inc/dashboard/js/tab.js');
}
add_action('admin_enqueue_scripts', 'tafri_travel_blog_admin_theme_style');

function tafri_travel_blog_notice(){
    global $pagenow;
    if ( is_admin() && ('themes.php' == $pagenow) && isset( $_GET['activated'] ) ) {?>
    <div class="notice notice-success is-dismissible getting_started">
		<div class="notice-content">
			<h2><?php esc_html_e( 'Thanks for installing Tafri Travel Blog Theme', 'tafri-travel-blog' ) ?> </h2>
			<p><?php esc_html_e( "Please Click on the link below to know the theme setup information", 'tafri-travel-blog' ) ?></p>
			<p><a href="<?php echo esc_url( admin_url( 'themes.php?page=tafri-travel-blog-guide-page' ) ); ?>" class="button button-primary"><?php esc_html_e( 'Get Started ', 'tafri-travel-blog' ); ?></a></p>
		</div>
	</div>
	<?php }
}
add_action('admin_notices', 'tafri_travel_blog_notice');


/**
 * Theme Info Page
 */
function tafri_travel_blog_guide() {

	// Theme info
	$return = add_query_arg( array()) ;
	$theme = wp_get_theme( 'tafri-travel-blog' ); ?>

	<div class="wrap getting-started">
		<div class="getting-started__header">
				<div class="intro">
					<div class="pad-box">
						<h2 align="center"><?php esc_html_e( 'Welcome to Tafri Travel Blog Theme', 'tafri-travel-blog' ); ?>
						<span class="version" align="center">Version: <?php echo esc_html($theme['Version']);?></span></h2>	
						</span>
						<div class="powered-by">
							<p align="center"><strong><?php esc_html_e( 'Theme created by ThemesEye', 'tafri-travel-blog' ); ?></strong></p>
							<p align="center">
								<img role="img" class="logo" src="<?php echo esc_url(get_template_directory_uri() . '/inc/dashboard/media/logo.png'); ?>"/>
							</p>
						</div>
					</div>
				</div>

			<div class="tab">
			  <button role="tab" class="tablinks" onclick="tafri_travel_blog_open(event, 'lite_theme')">Getting Started</button>		  
			  <button role="tab" class="tablinks" onclick="tafri_travel_blog_open(event, 'pro_theme')">Get Premium</button>
			</div>

<!-- Tab content -->
<div id="lite_theme" class="tabcontent open">
<h2 class="tg-docs-section intruction-title" id="section-4" align="center"><?php esc_html_e( '1). Tafri travel blog Lite Theme', 'tafri-travel-blog' ); ?></h2>
<div class="row">
<div class="col-md-5">
<div class="pad-box">
		<img role="img" role="img" class="logo" src="<?php echo esc_url(get_template_directory_uri() . '/inc/dashboard/media/screenshot.png'); ?>"/>
	 </div> 
</div>
<div class="theme-instruction-block col-md-7">
<div class="pad-box">
     <div class="table-image">
	<table class="tablebox">
		<thead>
			<tr>
				<th><?php esc_html_e('Setup', 'tafri-travel-blog'); ?></th>
				<th><?php esc_html_e('Click Here', 'tafri-travel-blog'); ?></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><?php esc_html_e('Logo', 'tafri-travel-blog'); ?></td>
				<td class="table-img"><a href="<?php echo esc_url( admin_url('customize.php?autofocus[control]=custom_logo') ); ?>" target="_blank"><?php esc_html_e('Click', 'tafri-travel-blog'); ?></a></td>
			</tr>
		</tbody>
		<tbody>
			<tr>
				<td><?php esc_html_e('Menus', 'tafri-travel-blog'); ?></td>
				<td class="table-img"><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=nav_menus') ); ?>" target="_blank"><?php esc_html_e('Click', 'tafri-travel-blog'); ?></a></td>
			</tr>
		</tbody>
		<tbody>
			<tr>
				<td><?php esc_html_e('Header Section', 'tafri-travel-blog'); ?></td>
				<td class="table-img"><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=tafri_travel_blog_header_section') ); ?>" target="_blank"><?php esc_html_e('Click', 'tafri-travel-blog'); ?></a></td>
			</tr>
		</tbody>
		<tbody>
			<tr>
				<td><?php esc_html_e('Slider', 'tafri-travel-blog'); ?></td>
				<td class="table-img"><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=tafri_travel_blog_slider') ); ?>" target="_blank"><?php esc_html_e('Click', 'tafri-travel-blog'); ?></a></td>
			</tr>
		</tbody>
		<tbody>
			<tr>
				<td><?php esc_html_e('Post Settings', 'tafri-travel-blog'); ?></td>
				<td class="table-img"><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=tafri_travel_blog_blog_post') ); ?>" target="_blank"><?php esc_html_e('Click', 'tafri-travel-blog'); ?></a></td>
			</tr>
		</tbody>
		<tbody>
			<tr>
				<td><?php esc_html_e('Footer', 'tafri-travel-blog'); ?></td>
				<td class="table-img"><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=tafri_travel_blog_footer') ); ?>" target="_blank"><?php esc_html_e('Click', 'tafri-travel-blog'); ?></a></td>
			</tr>
		</tbody>
	</table>
</div>
<ol>
	<li><?php esc_html_e( 'Start','tafri-travel-blog'); ?> <a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e( 'Customizing','tafri-travel-blog'); ?></a> <?php esc_html_e( 'your website.','tafri-travel-blog'); ?> </li>
	<li><?php esc_html_e( 'Tafri Travel Blog','tafri-travel-blog'); ?> <a target="_blank" href="<?php echo esc_url( TAFRI_TRAVEL_BLOG_FREE_DOC ); ?>"><?php esc_html_e( 'Documentation','tafri-travel-blog'); ?></a> </li>
</ol>
  </div>
</div>
</div><br><br>

</div>
<div id="pro_theme" class="tabcontent">
<h2 class="dashboard-install-title" align="center"><?php esc_html_e( '2.) Premium Theme Information.','tafri-travel-blog'); ?></h2>
<div class="row">
<div class="col-md-7">
<img role="img" src="<?php echo esc_url(get_template_directory_uri() . '/inc/dashboard/media/responsive.png'); ?>" alt="">
<div class="pro-links" >
	<a href="<?php echo esc_url( TAFRI_TRAVEL_BLOG_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'tafri-travel-blog'); ?></a>
<a href="<?php echo esc_url( TAFRI_TRAVEL_BLOG_BUY_PRO ); ?>"><?php esc_html_e('Buy Pro', 'tafri-travel-blog'); ?></a>
<a href="<?php echo esc_url( TAFRI_TRAVEL_BLOG_PRO_DOC ); ?>" target="_blank"><?php esc_html_e('Pro Documentation', 'tafri-travel-blog'); ?></a>
</div>
<div class="pad-box">
<h3><?php esc_html_e( 'Pro Theme Description','tafri-travel-blog'); ?></h3>
		<p class="pad-box-p"><?php esc_html_e( 'Travel is a serious business these days and if you are into such business, getting a fine website will do a lot of good to your business and this WordPress Travel Theme is designed by considering this fact. To make sure that your website looks amazing, this theme brings outstanding imagery and a super impressive slider showing the images of various travel destinations that can quickly catch the eyeballs of the target audience. It includes a beautiful gallery to display images and videos as this will make the visitors explore more and keep stuck to your website for a longer duration. WordPress Travel Theme is designed to deliver a top-notch user experience and this is ensured by its highly optimized codes and user-friendly design. For getting a completely customized web design, this theme brings many easy and quick customization options that help you modify the entire default design including the header and footer without even writing a single line of code.
         Along with a generous amount of premium features added to the design, you will also see brilliant sections that will not only give a sorted look to your design but also makes it easy for you to place your content in a way that your audience will find convenient to explore. If you want, you can also add an online booking facility to your website and Woocommerce compliance with this theme allows you to achieve that very easily. This WordPress Travel Theme also has many shortcodes and custom widgets under its hood so that you will be able to add content spaces for elements that will help to make your website functional and your business more successful.', 'tafri-travel-blog' ); ?><p>
	</div>
</div>
<div class="col-md-5 install-plugin-right">
<div class="pad-box">								
<h3><?php esc_html_e( 'Pro Theme Features','tafri-travel-blog'); ?></h3>
<div class="dashboard-install-benefit">
	<ul>
		<li><?php esc_html_e( 'Easy install 10 minute setup Themes','tafri-travel-blog'); ?></li>
		<li><?php esc_html_e( 'Multiplue Domain Usage','tafri-travel-blog'); ?></li>
		<li><?php esc_html_e( 'Premium Technical Support','tafri-travel-blog'); ?></li>
		<li><?php esc_html_e( 'FREE Shortcodes','tafri-travel-blog'); ?></li>
		<li><?php esc_html_e( 'Multiple page templates','tafri-travel-blog'); ?></li>
		<li><?php esc_html_e( 'Google Font Integration','tafri-travel-blog'); ?></li>
		<li><?php esc_html_e( 'Customizable Colors','tafri-travel-blog'); ?></li>
		<li><?php esc_html_e( 'Theme customizer ','tafri-travel-blog'); ?></li>
		<li><?php esc_html_e( 'Documention','tafri-travel-blog'); ?></li>
		<li><?php esc_html_e( 'Unlimited Color Option','tafri-travel-blog'); ?></li>
		<li><?php esc_html_e( 'Plugin Compatible','tafri-travel-blog'); ?></li>
		<li><?php esc_html_e( 'Social Media Integration','tafri-travel-blog'); ?></li>
		<li><?php esc_html_e( 'Incredible Support','tafri-travel-blog'); ?></li>
		<li><?php esc_html_e( 'Eye Appealing Design','tafri-travel-blog'); ?></li>
		<li><?php esc_html_e( 'Simple To Install','tafri-travel-blog'); ?></li>
		<li><?php esc_html_e( 'Fully Responsive ','tafri-travel-blog'); ?></li>
		<li><?php esc_html_e( 'Translation Ready','tafri-travel-blog'); ?></li>
		<li><?php esc_html_e( 'Custom Page Templates ','tafri-travel-blog'); ?></li>
		<li><?php esc_html_e( 'WooCommerce Integration','tafri-travel-blog'); ?></li>
	</ul>
</div>
</div>
</div>
</div>
</div>
<div class="dashboard__blocks">
<div class="row">
<div class="col-md-3">
<h3><?php esc_html_e( 'Get Support','tafri-travel-blog'); ?></h3>
<ol>
<li><a target="_blank" href="<?php echo esc_url( TAFRI_TRAVEL_BLOG_FREE_SUPPORT ); ?>"><?php esc_html_e( 'Free Theme Support','tafri-travel-blog'); ?></a></li>
<li><a target="_blank" href="<?php echo esc_url( TAFRI_TRAVEL_BLOG_PRO_SUPPORT ); ?>"><?php esc_html_e( 'Premium Theme Support','tafri-travel-blog'); ?></a></li>
</ol>
</div>

<div class="col-md-3">
<h3><?php esc_html_e( 'Getting Started','tafri-travel-blog'); ?></h3>
<ol>
<li><?php esc_html_e( 'Start','tafri-travel-blog'); ?> <a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e( 'Customizing','tafri-travel-blog'); ?></a> <?php esc_html_e( 'your website.','tafri-travel-blog'); ?> </li>
</ol>
</div>
<div class="col-md-3">
<h3><?php esc_html_e( 'Help Docs','tafri-travel-blog'); ?></h3>
<ol>
<li><a target="_blank" href="<?php echo esc_url( TAFRI_TRAVEL_BLOG_FREE_DOC ); ?>"><?php esc_html_e( 'Free Theme Documentation','tafri-travel-blog'); ?></a></li>
<li><a target="_blank" href="<?php echo esc_url( TAFRI_TRAVEL_BLOG_PRO_DOC ); ?>"><?php esc_html_e( 'Premium Theme Documentation','tafri-travel-blog'); ?></a></li>
</ol>
</div>
<div class="col-md-3">
<h3><?php esc_html_e( 'Buy Premium','tafri-travel-blog'); ?></h3>
<ol>
<li><a target="_blank" href="<?php echo esc_url( TAFRI_TRAVEL_BLOG_BUY_PRO ); ?>"><?php esc_html_e('Buy Pro', 'tafri-travel-blog'); ?></a></li>
</ol>
</div>
</div>
</div>
</div>

</div>

<?php
}?>