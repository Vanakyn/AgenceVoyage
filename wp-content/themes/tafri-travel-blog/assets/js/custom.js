// scroll
jQuery(document).ready(function () {
	jQuery(window).scroll(function () {
	    if (jQuery(this).scrollTop() > 100) {
	        jQuery('.scrollup').fadeIn();
	    } else {
	        jQuery('.scrollup').fadeOut();
	    }
	});
	jQuery('.scrollup').click(function () {
	    jQuery("html, body").animate({
	        scrollTop: 0
	    }, 600);
	    return false;
	});

	jQuery('.search-show').click(function(){
		jQuery(".searchform-inner").addClass('open');
		jQuery('.searchform-inner').css('visibility','visible');
	});

	jQuery('.close').click(function(){
		jQuery(".searchform-inner").removeClass('open');
		jQuery('.searchform-inner').css('visibility','hidden');
	});
});

// preloader
jQuery(function($){
	setTimeout(function(){
		$("#pre-loader").delay(1000).fadeOut("slow");
	});
});

// sticky header
(function( $ ) {
	$(window).scroll(function(){
		var sticky = $('.sticky-header'),
		scroll = $(window).scrollTop();

		if (scroll >= 100) sticky.addClass('fixed-header');
		else sticky.removeClass('fixed-header');
	});
})( jQuery );

( function( window, document ) {
	
	function tafri_travel_blog_focus_search() {
		document.addEventListener( 'keydown', function( e ) {
			const tafri_travel_blog_search = document.querySelector( '.searchform-inner' );

			if ( ! tafri_travel_blog_search || ! tafri_travel_blog_search.classList.contains( 'open' ) ) {
				return;
			}

			const elements = [...tafri_travel_blog_search.querySelectorAll( 'input, a, button' )],
				tafri_travel_blog_lastEl = elements[ elements.length - 1 ],
				tafri_travel_blog_firstEl = elements[0],
				tafri_travel_blog_activeEl = document.activeElement,
				tabKey = e.keyCode === 9,
				shiftKey = e.shiftKey;

			if ( ! shiftKey && tabKey && tafri_travel_blog_lastEl === tafri_travel_blog_activeEl ) {
				e.preventDefault();
				tafri_travel_blog_firstEl.focus();
			}

			if ( shiftKey && tabKey && tafri_travel_blog_firstEl === tafri_travel_blog_activeEl ) {
				e.preventDefault();
				tafri_travel_blog_lastEl.focus();
			}
		} );
	}

	tafri_travel_blog_focus_search();
} )( window, document );