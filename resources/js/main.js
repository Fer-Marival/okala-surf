
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