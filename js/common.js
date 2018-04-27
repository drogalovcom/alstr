$(function() {

	$(window).scroll(function() {
		if($(this).scrollTop() >= 240) {
			$('.home header#fixed').css({display: 'block',position: 'fixed'});
		}
		else{
			$('.home header#fixed').css({display: 'none'});
		}
	});
	
	var swiper = new Swiper('.swip_slider', {
		spaceBetween: 30,
		effect: 'fade',
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},
		scrollbar: {
			el: '.swiper-scrollbar',
		},
		cubeEffect: {
			slideShadows: true,
		},
		keyboard: {
			enabled: true,
			onlyInViewport: false,
		},

	});

	var swiper_tab = new Swiper('.swiper-services', {
		spaceBetween: 30,
		simulateTouch: false,
	});

	$(".services .append-buttons a").click(function(e) {
		e.preventDefault();
		$(".services .append-buttons a").removeClass('active');
		$(this).addClass('active');
	});


	var swiper = new Swiper('.swiper_reviews', {
		spaceBetween: 30,
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},
		cubeEffect: {
			slideShadows: true,
		},

	});

	var swiper = new Swiper('.swiper_personals', {
		spaceBetween: 30,
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},
		cubeEffect: {
			slideShadows: true,
		},

	});

	$(".cols .item").animated("fadeInUp", "fadeOutDown");
	$(".about_production").animated("fadeInRight", "fadeOutDown");
	$(".reviews_block").animated("fadeInLeft", "fadeOutDown");
	$(".personal_block").animated("fadeInRight", "fadeOutDown");
	$(".sample").animated("fadeInLeft", "fadeOutDown");
	$(".swiper-services").animated("fadeInRight", "fadeOutDown");


	$(document).ready(function() {
		$('.item_img').hover(
			function() {
			$(this).addClass('pulse'); // Добавляем класс bounce
		},
		function() {
			$(this).removeClass('pulse'); // Убираем класс
		}
		)})

	$('.fotorama').on('fotorama:fullscreenenter', function() {
		$(this).data('fotorama').setOptions({fit: 'contain'});
	});

	$('.fotorama').on('fotorama:fullscreenexit', function() {
		$(this).data('fotorama').setOptions({fit: 'cover'});
	});

	var $fotoramaDiv = jQuery('.fotorama').fotorama({
		click:false,
		allowfullscreen:true,
	});

	var fotorama = $fotoramaDiv.data('fotorama');

	jQuery('.fotorama__stage__shaft').click(function(){
		fotorama.requestFullScreen();    
	});

	$(document).ready(function() {
		$('.callback').magnificPopup({
			type: 'inline',
			preloader: false,
			callbacks: {
				beforeOpen: function() {
					if($(window).width() < 700) {
						this.st.focus = false;
					} else {
						this.st.focus = '#name';
					}
				}
			}
		});
	});

	$(document).ready(function() {
		$('.simple-ajax-popup-align-top').magnificPopup({
			type: 'ajax',
			alignTop: true,
			overflowY: 'scroll' // as we know that popup content is tall we set scroll overflow by default to avoid jump
		});
	});

	document.querySelector('.slide-1').addEventListener('click', function (e) {
		e.preventDefault();
		swiper_tab.slideTo(0, 0);
	});
	document.querySelector('.slide-2').addEventListener('click', function (e) {
		e.preventDefault();
		swiper_tab.slideTo(1, 0);
	});
	document.querySelector('.slide-3').addEventListener('click', function (e) {
		e.preventDefault();
		swiper_tab.slideTo(2, 0);
	});
	document.querySelector('.slide-4').addEventListener('click', function (e) {
		e.preventDefault();
		swiper_tab.slideTo(3, 0);
	});

});
