$(document).ready(function() {
	$('.hero-slider').slick({
		dots: false,
		arrows: true,
		infinite: true,
		fade: true,
		cssEase: 'linear',
		draggable: true,
		slidesToShow: 1,
		slidesToScroll: 1,
  		autoplay: true,
  		autoplaySpeed: 20000,
		nextArrow: $('.hero-next'),
		prevArrow: $('.hero-prev'),
	});
	$('.banner__slider').slick({
		infinite: true,
		arrows: true,
		autoplay: false,
		fade: true,
		cssEase: 'linear',
		dots: false,
		appendDots: $('.banner__dots'),
		draggable: false,
		customPaging : function(slider, i) {
			return '<div class="banner__dot" data-slide="' + i + '"></div>';
		}
	});
	$('li.banner__item').click(function() {
		var slideno = $(this).data('slide');
		$('.banner__slider').slick('slickGoTo', slideno - 1);
		cleanSlides();
		$(this).addClass('banner__item_selected');
	});
	$('.banner__dot').click(function() {
		var slideno = $(this).data('slide');
		var target = $('li.banner__item[data-slide="' + (slideno + 1) + '"]');
		cleanSlides();
		target.addClass('banner__item_selected');
	});
	function cleanSlides() {
		$('li.banner__item').each(function() {
			$(this).removeClass('banner__item_selected');
		});
		$('.service-body__select').each(function() {
			$(this).removeClass('service-body__select_selected');
		})
	}
	$('.h_button, .s-button').on('click', function() {
		$('.para').css({
			display: "flex"
		});
		$('.modal').css({
			display: "block"
		});
		$('body').css({
			overflow: 'hidden'
		})
	});
	$('.h_button').on('click', function() {
		ga('send', 'event', 'write_me', 'click');
	});
	$('.modal__close').on('click', function() {
		$(this).parent().css({display: 'none'});
		$('.para').css({display: 'none'});
		$('body').css({
			overflow: 'auto'
		})
		$('.modal__offer input[type=radio]').prop('checked', false);
	});
	$('.offer__button, .slide__button').on('click', function() {
		var price = $(this).data('price');
		$('.para').css({
			display: "flex"
		});
		$('.modal__offer').css({
			display: "block"
		});
		document.querySelector('#low').checked = 'true'
		$('body').css({
			overflow: 'hidden'
		});
		$('.modal__price').html(price + ' Р ');
		$('.modal__price').attr('data-price', price);
	});
	$('.offer__button').on('click', function() {
		ga('send', 'event', 'zakaz', 'click', 'lp');
	});
	$('.slide__button').on('click', function() {
		ga('send', 'event', 'zakaz', 'click', 'ar');
	});
	$( ".modal__offer input[type=radio]" ).on( "click", function() {
		var prevPrice = $('.modal__price').html(),
			priceData = $('.modal__price').attr('data-price');
		if($(this).attr('id') === "fast" && parseInt(prevPrice) - parseInt(priceData) === 0) {
			$('.modal__price').html(parseInt(prevPrice) + 900 + ' Р ');
		} else if($(this).attr('id') === "low" && parseInt(prevPrice) - parseInt(priceData) === 900) {
			$('.modal__price').html(parseInt(prevPrice) - 900 + ' Р ');
		}
	});
	$('.para form, .quest__form').on('submit', function(e) {
		e.preventDefault();
		var $this = $(this),
			parent = $this;
		$.ajax({
			type: "POST",
			url: "sender.php",
			data: $(this).serialize(),
			success: function() {
				parent.css({opacity: 0});
				parent.next().css({zIndex: 999});
				setTimeout(function() {parent.next().css({opacity: 1})}, 500);
				setTimeout(function() {
					parent.next().css({opacity: 0, zIndex: -1}, 500);
					setTimeout(function() {parent.css({opacity: 1});}, 500);
					$('.para').css({display: 'none'});
					$('.modal').css({display: 'none'});
					$('body').css({overflow: 'auto'});
					$('.quest__form input, .quest__form textarea').val('');
					$('.para form input, .para form textarea').val('');
				}, 10000);
			}
		});
	});
	
	$('.service-slider').slick({
		infinite: true,
		arrows: false,
		autoplay: true,
		fade: true,
		cssEase: 'linear',
		dots: true,
		appendDots: $('.banner__dots'),
		draggable: true
	});
	$(document).on('click', '.service-body__select', function() {
		var slideno = $(this).data('slide');
		$('.service-slider').slick('slickGoTo', slideno - 1);
		cleanSlides();
		$(this).addClass('service-body__select_selected');
	})

	$('.slick-feedback').slick({
		slidesToShow: 3,
		dots: false,
		infinite: true,
		arrows: true,
		variableWidth: true,
		centerMode: true
	});
	$('.fb__feedback').slick({
		slidesToShow: 3,
		dots: false,
		infinite: true,
		arrows: true,
		variableWidth: true,
		centerMode: true
	});

	$('.vertical-slider').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		dots: false,
		arrows: false,
		focusOnSelect: true,
		adaptiveHeight: false,
		draggable: false
	});


	$('.vertical-slider-navigate').slick({
		slidesToShow: 3,
		asNavFor: '.vertical-slider',
		centerMode: false,
		focusOnSelect: true,
		autoplay: false,
		arrows: false,
		variableWidth: true
	});
	
	$('.show__resume').on('click', function(){
	$('.resume-slider').show().slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		dots: false,
		arrows: true,
		focusOnSelect: true,
		adaptiveHeight: false,
		draggable: false
	});
	$('.resume-slider__nav').show().slick({
		slidesToShow: 3,
		asNavFor: '.resume-slider',
		centerMode: false,
		focusOnSelect: true,
		autoplay: false,
		arrows: true,
		variableWidth: true
	});
	});
	
	$('.how__wrap').slick({
		mobileFirst: true,
		initialSlide: 0,
		responsive: [
			{
				breakpoint: 920,
				settings: {
					dots: true,
					arrows: false,
					infinite: false,
					slidesToShow: 1,
					slidesToScroll: 1
				}
			},
			{
				breakpoint: 1024,
				settings: "unslick"	
			}
		]
	});
	
	$('.close__form, .big_box_close').on('click', function(){
		$('.resume-slider').delay(500).hide().slick('unslick');
		$('.resume-slider__nav').delay(500).hide().slick('unslick');
	});

	


	/*tabs*/
		$('.tab ul.tabs').addClass('active').find('> li:eq(0)').addClass('current');

		$('.tab ul.tabs li a').click(function(g){
			g.preventDefault();
			var tab = $(this).closest('.tab'),
					index = $(this).closest('li').index();
			tab.find('ul.tabs > li').removeClass('current');
			$(this).closest('li').addClass('current');

			tab.find('.tab__content').find('div.tabs__item').not('div.tabs__item:eq(' + index + ')').fadeOut();
			tab.find('.tab__content').find('div.tabs__item:eq(' + index + ')').fadeIn();

		});
	/*tabs*/
	
	/*stiky header*/
	$(window).scroll(function(){
		if($(this).scrollTop() > 60) {
			$('#sticky').addClass('sticky');
		} else {
			$('#sticky').removeClass('sticky').show('fast');
		};
	});
	/*stiky header*/

	/*switcher*/
	$('.switch').on('click', (function(){
		if($(this).is(":checked")) {
			$('.slick-feedback').hide();
			$('.fb__feedback').show();
			$('.switch-label:last-child()').addClass('active');
			$('.switch-label:first-child()').removeClass('active');
		} else {
			$('.slick-feedback').show();
			$('.fb__feedback').hide();
			$('.switch-label:first-child()').addClass('active');
			$('.switch-label:last-child()').removeClass('active');
		}
	}));
	/*switcher*/
	
	/*stiky sidebar*/
	var $window = $(window);
	var $sidebar = $(".sidebar__container");
	var $sidebarHeight = $sidebar.innerHeight();
	var $footerOffsetTop = $(".footer").offset().top;
	var $sidebarOffset = $sidebar.offset();

	$window.scroll(function() {
		if($window.scrollTop() > $sidebarOffset) {
			$sidebar.addClass("fixed");
		} else {
			$sidebar.removeClass("fixed");
		}
		if($window.scrollTop() + $sidebarHeight > $footerOffsetTop) {
			$sidebar.css({"top" : -($window.scrollTop() + $sidebarHeight - $footerOffsetTop)});
		} else {
			$sidebar.css({"top": "132px",});
		}
	});

	$('.sidebar__list--link').click(function(){

		$('.active').removeClass('active')
		$(this).closest('.sidebar__list--link').addClass("active");

		$('html, body').stop().animate({
			scrollTop: $( $(this).attr('href') ).offset().top - 50 }, 250);

		return false
	});
	$('.scroller__button').click(function(){
		$('html, body').stop().animate({
			scrollTop: $( $(this).attr('href') ).offset().top - 150 }, 1000);
	});
	/*stiky sidebar*/
	
	$(function() {
  		var loc = window.location.href; // returns the full URL
  		if(/usluga-napisanie-rezjume/.test(loc)) {
    		$('.two, .three').removeClass('active');
			$('.one').addClass('active');
  	} else if (/pomoshch-v-podgotovke-k-sobesedovaniyu-na-rabotu/.test(loc)){
			$('.one, .three').removeClass('active');
			$('.two').addClass('active');
	} else if(/professionalnoe-samoopredelenie/.test(loc)) {
			$('.one, .two').removeClass('active');
			$('.three').addClass('active');
	} else {
		$('.one, .two, .three').removeClass('active');
	}
});
	var body = $('body');
	var bodyOverflow = function() {
		body.toggleClass('overflow-hidden');
	};
	
	$('.hamburger').on('click', function(){
		$(this).toggleClass('is-active');
		$('.m').toggleClass('active');
		$('.menu-toggler').toggleClass('active');
		bodyOverflow();
	});
	
	
	$('.dropdown').on('click', function(e){
		$(this).find('.dropdown-menu').slideToggle('fast');
	})
	$('.resume-price__toggler--item.second').hover(
		function(){
		$('.resume-price__toggler--item.first').removeClass('active');
		$('this').addClass('active');
	}, function(){
		$('.resume-price__toggler--item.first').addClass('active');
		$('this').removeClass('active');
	});
	
	$('#card2').mouseenter(function(){
		$('#card1').removeClass('active');
		$(this).addClass('active');
	});
	$('#card1').mouseenter(function(){
		$('#card2').removeClass('active');
		$(this).addClass('active');
	})
	
	if ($(window).width() < 1024) {
   		$('#card2').on('click', function(){
		$('.mobile-scroller').css("transform", "translateX(-280px)")
		});
		$('#card1').on('click', function(){
		$('.mobile-scroller').css("transform", "translateX(0px)")
		})
	}
});

$(document).click(function(){
  $(".dropdown-menu").hide();
});

$(".dropdown").click(function(e){
  e.stopPropagation();
});


(function( $ ) {
	/*Судя по всему показывает модалку на сайте*/
$(document).ready(function(){
    $(".show_form").on("click",function(){show_form_in_site($(this)); return false;});
    $(".big_box_close, .a_close_box").on("click",function(){hide_form_in_site($(this)); return false;});
});
function show_form_in_site(X){ // открываем нужную форму
    var needBoxToShow=$(".black[rel='"+X.attr("rel")+"']");
    needBoxToShow.fadeIn(500); // открываем нужную форму у них, ссылки и формы, rel совпадают
    var heightWind=parseInt($(window).height());
    var heightBox=parseInt(needBoxToShow.find(".form_box").outerHeight());
    var heighRaz=heightWind-heightBox;
	console.log(heighRaz);
    if(heighRaz>0){
        needBoxToShow.find(".form_box").css("top",parseInt(heighRaz/2)+"px");
    }
    return false;
}
function hide_form_in_site(X){ // прячем нужную форму
    X.closest(".black").fadeOut(500);
    return false;
}
})(jQuery);