<?php
/**
 * Template for displaying search forms in Tafri Travel Blog
 */
?>

<?php $unique_id = esc_attr( uniqid( 'search-form-' ) ); ?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
		<span class="screen-reader-text"><?php echo esc_html_x( 'Search', 'label', 'tafri-travel-blog' ); ?></span>
		<input role="tab" type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search', 'placeholder', 'tafri-travel-blog' ); ?>" value="<?php esc_attr( get_search_query()) ?>" name="s" />
	</label>
	<button role="tab" type="submit" class="search-submit"><span><?php echo esc_html_x( 'Search', 'submit button', 'tafri-travel-blog' ); ?></span></button>
</form>