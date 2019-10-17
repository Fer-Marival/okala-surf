
// $( '#my-slider' ).sliderPro();
$( document ).ready(function( $ ) {
		$( '.slider' ).sliderPro({
			width: "100%",
			height: 330,
			arrows: true,
			buttons: false,
			shuffle: true,
			thumbnailArrows: true,
			autoplay: true
		});
	});

$( document ).ready(function( $ ) {
		$( '#my-slider' ).sliderPro({
			width: 960,
			height: 330,
			arrows: true,
			buttons: false,
			shuffle: true,
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
$( document ).ready(function( $ ) {
		$( '#home-slider' ).sliderPro({
			width: "100%",
			height: 700,
			arrows: false,
			buttons: false,
			shuffle: true,
			smallSize: 500,
			mediumSize: 1000,
			largeSize: 3000,
			thumbnailArrows: true,
			autoplay: true,
			fade: true,
			forceSize: 'fullWidth',
        	slideDistance: 0,
        	imageScaleMode: 'home',
        	autoHeight: true,
		});
	});

var scene = document.getElementById('scene');
// var parallaxInstance = new Parallax(scene);

//fixed nav bar
// window.addEventListener('scroll',()=>{
// 	let scroll = document.documentElement.scrollTop || document.body.scrollTop,
// 		 menu = document.getElementsByClassName('booking')

// 	scroll >= 400
// 		? menu[0].classList.add('fixed')
// 		: menu[0].classList.remove('fixed')
// })
$(function() {
 $('input[name="days"]').daterangepicker();
});

var Instafeed = require("instafeed.js");
var imagesLoaded = require("imagesLoaded");
var Masonry = require("masonry-layout");

var feed = new Instafeed({
  get: 'user',
  userId: 12629740869,
  accessToken: '12629740869.1677ed0.d02ce1362e60485f986d3b13a61fc271',
  resolution: 'standard_resolution', 
  template: '<div class="grid-item"><a href="{{link}}" title="{{caption}}" data-fancybox="gallery" target="_blank"><img src="{{image}}" alt="{{caption}}" class="img-fluid"/></a></div>',
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

window.fbAsyncInit = function() {
    FB.init({
      xfbml            : true,
      version          : 'v3.2'
    });
  };

  (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
