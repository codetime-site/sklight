var mySwiper = new Swiper ('.swiper-container', {
    loop: true,
	autoplay: {
				delay: 4000,
				stopOnLastSlide: false,
				disableOnInteraction: false,
	},
	pagination: {
				  el: '.swiper-pagination',
				  clickable :true,
	},
	speed:800,
	effect : 'slide',
	grabCursor: true
});


var mySwiper2 = new Swiper ('.swiper-container-wap', {
    loop: true,
	autoplay: {
				delay: 4000,
				stopOnLastSlide: false,
				disableOnInteraction: false,
	},
	pagination: {
				  el: '.swiper-pagination-wap',
				  clickable :true,
	},
	speed:800,
	effect : 'slide',
	grabCursor: true
});


var mySwiper4 = new Swiper ('.comment_scroll', {
    loop: true,
	autoplay: {
				delay: 4000,
				stopOnLastSlide: false,
				disableOnInteraction: false,
	},
    slidesPerView: 3,
    slidesPerGroup: 1,
	spaceBetween: 30,
	speed:300,
	pagination: {
				  el: '.comment-swiper-pagination',
				  clickable :true,
	},
	grabCursor: true
});