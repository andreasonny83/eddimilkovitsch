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

function timeout_trigger() {
	// get the Articles position and store them inside an object array
	// set 'xxx' to 'home' if you want to highlight the Home button
	article_items[0] = ({ name: 'xxx', position: 0 });

	articles.each( function( item ) {

		var name, item_position;

		name 			= $(this).attr('id');
		item_position 	= $(this).position().top;

		// store the article positions inside an object array
		article_items[item+1] = ({ name: name, position: item_position });

	});

	if ( debug_mode ) {
		console.dir(article_items);
	}
}

$( document ).ready( function() {

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

	$( '.togglable' ).hide();

	$( '.toggle' ).click( function() {
		$target = $( this ).data( "target" );
		if ( $( ".togglable[data-id='"+$target+"']" ).is( ":visible" ) ) {
			$( ".togglable" ).hide();
		}
		else {
			$( ".togglable" ).hide();
			$( ".togglable[data-id='"+$target+"']" ).show( 'slow' );
		}
		if( debug_mode ) {
			console.log($target);
		}
		return false;
	});

	$( '.readmore' ).click( function() {
		$( this ).hide();
		$( '.readmore_div' ).show( 'slow' );
		setTimeout( 'timeout_trigger()', 1000 );
		return false;
	});

	$( '.readmore_hide' ).click( function() {
		$( '.readmore_div' ).hide( 'slow' );
		$( '.readmore' ).show();
		setTimeout( 'timeout_trigger()', 1000 );
		return false;
	});

	// store menu items inside menu_items
	menu_items 	= $( "#main_menu li" );
	articles	= $( "article" );

	setTimeout( 'timeout_trigger()', 1000 );

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
