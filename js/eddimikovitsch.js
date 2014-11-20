// Global variables
var menu_items,
	article_items = [],
	articles,
	debug_mode = false; // set to true to see the log messages

// print the backup messages
function log( message ) {
	if ( debug_mode ) {
		console.log( message );
	}
}

// highlight the menu item accoding the current Y position
function highlightCurrentItem( posY ) {

	jQuery.each( article_items, function( i, val ) {

		if ( ( posY + 10 ) > val.position ) {
			$( "#main_menu li" ).removeClass( "highlight" );
			$( "." + val.name ).addClass( "highlight" );
		}

	});

}

$( document ).ready( function() {

	// store menu items inside menu_items
	menu_items 	= $( "#main_menu li" );
	articles	= $( "article" );

	// get the Articles position and store them inside an object array
	// set 'xxx' to 'home' if you want to highlight the Home button
	article_items.push({ name: 'xxx', position: 0 });

	articles.each( function( item ) {

		var name, item_position;

		name 			= $(this).attr('id');
		item_position 	= $(this).position().top;

		// store the article positions inside an object array
		article_items.push({ name: name, position: item_position });

	});

	/**
	Navigation menu
	**/
		menu_items.click( function( e ) {

			var link = "#" + $(this).attr('class');
			link = link.replace(/\s(.*)/,'');

			log( link );

			$('html, body').animate({scrollTop : $( link ).position().top },500);

			return false;

		});

	// Highlight the correct menu item
	var posY = $( window ).scrollTop();
	highlightCurrentItem( posY );

	// Load the image gallery when the document is ready
	$('#lightSlider').lightSlider({
		gallery: true,
		item: 1,
		loop: true,
		enableDrag: false,
		galleryMargin: 15,
		currentPagerPosition:'middle',
		onSliderLoad: function(plugin) {
            plugin.lightGallery({
            	closable: false,
            });
        }
    });

});

// On page scroll...
$( window ).scroll( function() {
	
	var posY = $( window ).scrollTop();

	log( posY );

	// highlight the menu item according to the current Y position
	highlightCurrentItem( posY );

	// Show the fixed menu
	if ( posY > 330 ) {
		if ( !$( "#navbar" ).hasClass( "fixed" ) ) {
			$( "#navbar" ).hide().addClass( "fixed" ).fadeIn( 500 );
		}
	}
	// Remove the fixed menu
	else {
		if ( $( "#navbar" ).hasClass( "fixed" ) ) {
			$( "#navbar" ).removeClass( "fixed" );
		}
	}
	
});

