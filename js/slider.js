const swiper = new Swiper('.swiper', {
	// Optional parameters
	loop: true,
	parallax: true,
	// If we need pagination
	pagination: {
		el: '.swiper-pagination'
	},

	// And if we need scrollbar
	scrollbar: {
		el: '.swiper-scrollbar'
	},
	autoplay: {
		delay: 2000,
		disableOnInteraction: false
	}
});

document.querySelector('.swiper').swiper;