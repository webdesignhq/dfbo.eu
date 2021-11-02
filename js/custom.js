$(document).ready(function() {
	// $('.se-pre-con').css("display", "block");
  
	// $('body').css("opacity", "0");
  
	// setTimeout(
  	// function() 
  	// {	
    	// $('.se-pre-con').fadeOut("slow");
		// $('body').css("opacity", "1")
  	// }, 2000);
	
	$(".clickable").click(function(e) {
		e.preventDefault();
		window.location = $(this).find('a').attr('href');
	});
	
	
	 $('.slider').slick({
	  dots: true,
	  infinite: false,
	  speed: 300,
	  arrows: false,
	  dots: false,
	  slidesToShow: 3,
	  slidesToScroll: 1,
	  responsive: [
		{
		  breakpoint: 1024,
		  settings: {
			slidesToShow: 3,
			slidesToScroll: 3,
			infinite: true,
			dots: true
		  }
		},
		{
		  breakpoint: 600,
		  settings: {
			slidesToShow: 2,
			slidesToScroll: 2
		  }
		},
		{
		  breakpoint: 480,
		  settings: {
			slidesToShow: 1,
			slidesToScroll: 1
		  }
		}
		// You can unslick at a given breakpoint now by adding:
		// settings: "unslick"
		// instead of a settings object
	  ]
	});
	
	 $('.sliderteam').slick({
	  dots: true,
	  infinite: false,
	  speed: 300,
	  arrows: false,
	  dots: false,
	  slidesToShow: 4.5,
	  slidesToScroll: 1,
	  responsive: [
		{
		  breakpoint: 1024,
		  settings: {
			slidesToShow: 3,
			slidesToScroll: 3,
			infinite: true,
			dots: true
		  }
		},
		{
		  breakpoint: 600,
		  settings: {
			slidesToShow: 2,
			slidesToScroll: 2
		  }
		},
		{
		  breakpoint: 480,
		  settings: {
			slidesToShow: 1,
			slidesToScroll: 1
		  }
		}
		// You can unslick at a given breakpoint now by adding:
		// settings: "unslick"
		// instead of a settings object
	  ]
	});

	$('.slidervakgebied').slick({
		dots: true,
		infinite: false,
		speed: 300,
		arrows: true,
		prevArrow: '<button type="button" class="slick-prev"><i class="fas fa-long-arrow-alt-left"></i></button>',
		nextArrow: '<button type="button" class="slick-next"><i class="fas fa-long-arrow-alt-right"></i></button>',
		dots: false,
		slidesToShow: 4.5,
		slidesToScroll: 1,
		responsive: [
		  {
			breakpoint: 1024,
			settings: {
			  slidesToShow: 3,
			  slidesToScroll: 3,
			  infinite: true,
			  dots: true
			}
		  },
		  {
			breakpoint: 600,
			settings: {
			  slidesToShow: 2,
			  slidesToScroll: 2
			}
		  },
		  {
			breakpoint: 480,
			settings: {
			  slidesToShow: 1,
			  slidesToScroll: 1
			}
		  }
		  // You can unslick at a given breakpoint now by adding:
		  // settings: "unslick"
		  // instead of a settings object
		]
	  });
	
	$(window).scroll(function(){
    if ($(window).scrollTop() >= 100) {
        $('.header').addClass('sticky-header');
    }
    else {
        $('.header').removeClass('sticky-header');
    }
	
	});
	
	$(".menu-toggle").click(function(e) {
        $(".mobile__menu--container").toggleClass('mobile-active')
    });

	$(".menu-item-52").click(function(e) {
		e.preventDefault();
		console.log('aesfa')
		$("#diensten__overlay--container").toggleClass('diensten--active')
	});
	
});

