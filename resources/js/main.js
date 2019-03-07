
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

$( document ).ready(function( $ ) {
		$( '#booking-slider' ).sliderPro({
			width: "100%",
			height: 600,
			arrows: false,
			buttons: false,
			shuffle: true,
			smallSize: 500,
			mediumSize: 1000,
			largeSize: 3000,
			thumbnailArrows: true,
			autoplay: true,
			fade: true
		});
	});

var scene = document.getElementById('scene');
// var parallaxInstance = new Parallax(scene);

//fixed nav bar
window.addEventListener('scroll',()=>{
	let scroll = document.documentElement.scrollTop || document.body.scrollTop,
		 menu = document.getElementsByClassName('booking')

	scroll >= 400
		? menu[0].classList.add('fixed')
		: menu[0].classList.remove('fixed')
})
$(function() {
 $('input[name="days"]').daterangepicker();
});

var Instafeed = require("instafeed");
var imagesLoaded = require("imagesLoaded");
var Masonry = require("masonry-layout");

var feed = new Instafeed({
  get: 'user',
  userId: 7493294533,
  accessToken: '7493294533.1677ed0.2c006cb41f694755b99942cb17103001',
  resolution: 'standard_resolution', 
  template: '<div class="grid-item col"><a href="{{link}}" title="{{caption}}" data-fancybox="gallery" target="_blank"><img src="{{image}}" alt="{{caption}}" class="img-fluid"/></a></div>',
  limit: 9,
  sortBy: 'random',
  after: function() {
    var elem = document.querySelector('.grid');
    imagesLoaded(elem, function(instance) {
      var msnry = new Masonry(elem, {
        columnWidth: '.grid-sizer',
        itemSelector: '.grid-item',
        percentPosition: true
      });
    });
  }
});
feed.run();
