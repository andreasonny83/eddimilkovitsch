requirejs.config({
	paths: {
		'jquery': 'jquery-2.1.1.min',
		'bootstrap': 'bootstrap.min',
		'lightSlider': 'jquery.lightSlider.min',
		'lightGallery': 'lightGallery.min',
		'eddi': 'eddimikovitsch',
		'captcha': '//www.google.com/recaptcha/api'
	},
	shim: {
		"bootstrap": {
			deps: ["jquery"]
		},
		"lightSlider": {
			deps: ["jquery"]
		},
		"lightGallery": {
			deps: ["jquery"]
		},
		"eddi": {
			deps: ["jquery"]
		}
	}
});

requirejs( ['jquery', 'bootstrap', 'lightSlider', 'lightGallery', 'eddi', 'captcha'],
function( jQuery ) {
});
