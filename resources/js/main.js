
// $( '#my-slider' ).sliderPro();

$( document ).ready(function( $ ) {
		$( '#my-slider' ).sliderPro({
			width: 960,
			height: 500,
			arrows: true,
			buttons: false,
			shuffle: true,
			smallSize: 500,
			mediumSize: 1000,
			largeSize: 3000,
			thumbnailArrows: true,
			autoplay: true
		});
	});
