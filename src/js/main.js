window.addEventListener('load', function() {
    new Glider(document.querySelector('.carousel__lista'),{
        slidesToShow: 1,
		slidesToScroll: 1,
		draggable: false,
		dots: '.carousel__indicadores',
		arrows: {
		  prev: '.carousel__anterior',
		  next: '.carousel__siguiente'
        },
        responsive: [
			{
			  // screens greater than >= 775px
			  breakpoint: 700,
			  settings: {
				// Set to `auto` and provide item width to adjust to viewport
				slidesToShow: 2,
				slidesToScroll: 1,
			  }
			},{
			  // screens greater than >= 1024px
			  breakpoint: 1230,
			  settings: {
				slidesToShow: 3,
				slidesToScroll: 2,
			  }
			}
		  ]
    });
})