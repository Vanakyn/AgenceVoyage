<?php
/**
 * Displays footer site info
 */

?>
<?php if( get_theme_mod( 'tafri_travel_blog_hide_show_scroll',false) != '' || get_theme_mod( 'tafri_travel_blog_enable_disable_scrolltop',false) != '') { ?>
    <?php $tafri_travel_blog_theme_lay = get_theme_mod( 'tafri_travel_blog_footer_options','Right');
        if($tafri_travel_blog_theme_lay == 'Left align'){ ?>
            <a href="#" class="scrollup left"><i class="<?php echo esc_attr(get_theme_mod('tafri_travel_blog_scroll_icon_changer','fas fa-long-arrow-alt-up')); ?>"></i><span class="screen-reader-text"><?php esc_html_e( 'Scroll Up', 'tafri-travel-blog' ); ?></span></a>
        <?php }else if($tafri_travel_blog_theme_lay == 'Center align'){ ?>
            <a href="#" class="scrollup center"><i class="<?php echo esc_attr(get_theme_mod('tafri_travel_blog_scroll_icon_changer','fas fa-long-arrow-alt-up')); ?>"></i><span class="screen-reader-text"><?php esc_html_e( 'Scroll Up', 'tafri-travel-blog' ); ?></span></a>
        <?php }else{ ?>
            <a href="#" class="scrollup"><i class="<?php echo esc_attr(get_theme_mod('tafri_travel_blog_scroll_icon_changer','fas fa-long-arrow-alt-up')); ?>"></i><span class="screen-reader-text"><?php esc_html_e( 'Scroll Up', 'tafri-travel-blog' ); ?></span></a>
    <?php }?>
<?php }?>
<div class="site-info">
    <div class="container">
    	<span><?php tafri_travel_blog_credit(); ?> <?php echo esc_html(get_theme_mod('tafri_travel_blog_footer_text',__('By ThemesEye','tafri-travel-blog'))); ?></span>
    	<span class="footer_text"><?php esc_html_e('Powered By WordPress','tafri-travel-blog') ?></span>
    </div>
</div>