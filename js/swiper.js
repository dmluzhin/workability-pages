var swiper = new Swiper( '.swiper-container.two', {
	pagination: '.swiper-pagination',
	paginationClickable: true,
	effect: 'coverflow',
	loop: true,
	centeredSlides: true,
	slidesPerView: 'auto',
	slideToClickedSlide: true,
	coverflowEffect: {
		rotate: 0,
		stretch: 100,
		depth: 100,
		modifier: 1,
		slideShadows : false,
	}
} );
