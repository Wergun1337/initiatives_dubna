new Swiper('.image-slider', {
	// navigation
	navigation:{
		nextEl:'.next',
		prevEl:'.prev'
	},

	pagination:{
		el:'.swiper-pagination',
		type:'fraction',

	},

	loop:true,

	autoplay:{
		delay: 4000,

		disableOnInteraction: false
	},

	speed:600,

});