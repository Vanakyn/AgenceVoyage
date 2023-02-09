( function( api ) {

	// Extends our custom "tafri-travel-blog" section.
	api.sectionConstructor['tafri-travel-blog'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );