window._ = require('lodash');

/**
 * We'll load jQuery and the Bootstrap jQuery plugin which provides support
 * for JavaScript based Bootstrap features such as modals and tabs. This
 * code may be modified to fit the specific needs of your application.
 */

window.$ = window.jQuery = require('jquery');

require('jcf');// https://github.com/w3co/jcf

require('jquery');



require('jquery-form');

require('jquery-validation');


require('ajax');

require('swiper');

require('./materialize.min');

require('./form-validation');

require('./smooth-scroll')

//Side navigation
$('.button-collapse').sideNav({
      menuWidth: 350, // Default is 300
      edge: 'right', // Choose the horizontal origin
      closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
      draggable: true // Choose whether you can drag to open on touch screens
    }
);


// Swiper initialization
var hpSwiper = new Swiper('.hp-slider', {
    pagination: '.swiper-pagination',
    paginationClickable: true,
    parallax: true,
    speed: 600,
    autoplay: 6000,
    nextButton: '.swiper-button-next',
    prevButton: '.swiper-button-prev'
});


//Hamburger Icon
$( document ).ready(function() {
  	var hamburger = $('#hamburger-icon');
  	hamburger.click(function() {
     	if(hamburger.hasClass('active') == true){
     		hamburger.removeClass('active');
     	}
     	else{
     		hamburger.addClass('active');
     		$('#sidenav-overlay').click(function(){
			   	hamburger.removeClass('active');
			});
     	}
  	});

});

$('#sidenav-overlay').click(function(){
   	console.log('clicked');
});



//Sticky header
$(document).ready(function(){
  if ($(window).scrollTop() > 20){
    $('header').addClass('sticky');
  }
});


$(document).scroll(function(){
	if($(window).scrollTop() > 20 ){
		$('header').addClass('sticky');
	}
	else{
		$('header').removeClass('sticky');
	}

});



//Ukázky prací - Bannery
var banneryTop = new Swiper('.bannery-top', {
    nextButton: '.swiper-button-next',
    prevButton: '.swiper-button-prev',
    spaceBetween: 10,
    slidesPerView: 3,
    breakpoints: {
        // when window width is <= 320px
        600: {
          slidesPerView: 1,
          spaceBetween: 10
        },

        // when window width is <= 992px
        992: {
          slidesPerView: 2,
          spaceBetween: 10
        }
    },
    pagination: '.swiper-pagination',
    paginationType: 'progress',
    // Disable preloading of all images
    preloadImages: false,
    // Enable lazy loading
    lazyLoading: true
});


//Ukázky prací - Samolepky
var samolepkyTop = new Swiper('.samolepky-top', {
    nextButton: '.swiper-button-next',
    prevButton: '.swiper-button-prev',
    spaceBetween: 10,
    slidesPerView: 3,
    breakpoints: {
        // when window width is <= 320px
        600: {
          slidesPerView: 1,
          spaceBetween: 10
        },

        // when window width is <= 992px
        992: {
          slidesPerView: 2,
          spaceBetween: 10
        }
    },
    pagination: '.swiper-pagination',
    paginationType: 'progress',
    // Disable preloading of all images
    preloadImages: false,
    // Enable lazy loading
    lazyLoading: true
});


//Ukázky prací - Loga na podlahu
var logaNaPodlahuTop = new Swiper('.loga-na-podlahu-top', {
    nextButton: '.swiper-button-next',
    prevButton: '.swiper-button-prev',
    spaceBetween: 10,
    slidesPerView: 3,
    breakpoints: {
        // when window width is <= 320px
        600: {
          slidesPerView: 1,
          spaceBetween: 10
        },

        // when window width is <= 992px
        992: {
          slidesPerView: 2,
          spaceBetween: 10
        }
    },
    pagination: '.swiper-pagination',
    paginationType: 'progress',
    // Disable preloading of all images
    preloadImages: false,
    // Enable lazy loading
    lazyLoading: true
});


//Ukázky prací - Plakáty
var plakatyTop = new Swiper('.plakaty-top', {
    nextButton: '.swiper-button-next',
    prevButton: '.swiper-button-prev',
    spaceBetween: 10,
    slidesPerView: 3,
    breakpoints: {
        // when window width is <= 320px
        600: {
          slidesPerView: 1,
          spaceBetween: 10
        },

        // when window width is <= 992px
        992: {
          slidesPerView: 2,
          spaceBetween: 10
        }
    },
    pagination: '.swiper-pagination',
    paginationType: 'progress',
    // Disable preloading of all images
    preloadImages: false,
    // Enable lazy loading
    lazyLoading: true,
});


//Ukázky prací - Polepy vozidel
var polepyVozidelTop = new Swiper('.polepy-vozidel-top', {
    nextButton: '.swiper-button-next',
    prevButton: '.swiper-button-prev',
    spaceBetween: 10,
    slidesPerView: 3,
    breakpoints: {
        // when window width is <= 320px
        600: {
          slidesPerView: 1,
          spaceBetween: 10
        },

        // when window width is <= 992px
        992: {
          slidesPerView: 2,
          spaceBetween: 10
        }
    },
    pagination: '.swiper-pagination',
    paginationType: 'progress',
    // Disable preloading of all images
    preloadImages: false,
    // Enable lazy loading
    lazyLoading: true,
});


//Ukázky prací - Polepy tabuli
var polepyTabuliTop = new Swiper('.polepy-tabuli-top', {
    nextButton: '.swiper-button-next',
    prevButton: '.swiper-button-prev',
    spaceBetween: 10,
    slidesPerView: 3,
    breakpoints: {
        // when window width is <= 320px
        600: {
          slidesPerView: 1,
          spaceBetween: 10
        },

        // when window width is <= 992px
        992: {
          slidesPerView: 2,
          spaceBetween: 10
        }
    },
    pagination: '.swiper-pagination',
    paginationType: 'progress',
    // Disable preloading of all images
    preloadImages: false,
    // Enable lazy loading
    lazyLoading: true,
});



//Ukázky prací - Billboardy
var billboardyTop = new Swiper('.billboardy-top', {
    nextButton: '.swiper-button-next',
    prevButton: '.swiper-button-prev',
    spaceBetween: 10,
    slidesPerView: 3,
    breakpoints: {
        // when window width is <= 320px
        600: {
          slidesPerView: 1,
          spaceBetween: 10
        },

        // when window width is <= 992px
        992: {
          slidesPerView: 2,
          spaceBetween: 10
        }
    },
    pagination: '.swiper-pagination',
    paginationType: 'progress',
    // Disable preloading of all images
    preloadImages: false,
    // Enable lazy loading
    lazyLoading: true,
});



//Ukázky prací - Vlajky
var vlajkyTop = new Swiper('.vlajky-top', {
    nextButton: '.swiper-button-next',
    prevButton: '.swiper-button-prev',
    spaceBetween: 10,
    slidesPerView: 3,
    breakpoints: {
        // when window width is <= 320px
        600: {
          slidesPerView: 1,
          spaceBetween: 10
        },

        // when window width is <= 992px
        992: {
          slidesPerView: 2,
          spaceBetween: 10
        }
    },
    pagination: '.swiper-pagination',
    paginationType: 'progress',
    // Disable preloading of all images
    preloadImages: false,
    // Enable lazy loading
    lazyLoading: true,
});


//Ukázky prací - Orientační systémy
var orientaceTop = new Swiper('.orientacni-systemy-top', {
    nextButton: '.swiper-button-next',
    prevButton: '.swiper-button-prev',
    spaceBetween: 10,
    slidesPerView: 3,
    breakpoints: {
        // when window width is <= 320px
        600: {
          slidesPerView: 1,
          spaceBetween: 10
        },

        // when window width is <= 992px
        992: {
          slidesPerView: 2,
          spaceBetween: 10
        }
    },
    pagination: '.swiper-pagination',
    paginationType: 'progress',
    // Disable preloading of all images
    preloadImages: false,
    // Enable lazy loading
    lazyLoading: true,
});


//3d písmo
var pismoTop = new Swiper('.pismo-top', {
    nextButton: '.swiper-button-next',
    prevButton: '.swiper-button-prev',
    spaceBetween: 10,
    slidesPerView: 3,
    breakpoints: {
        // when window width is <= 320px
        600: {
          slidesPerView: 1,
          spaceBetween: 10
        },

        // when window width is <= 992px
        992: {
          slidesPerView: 2,
          spaceBetween: 10
        }
    },
    pagination: '.swiper-pagination',
    paginationType: 'progress',
    // Disable preloading of all images
    preloadImages: false,
    // Enable lazy loading
    lazyLoading: true,
});

//3d písmo
var potiskTricekTop = new Swiper('.potisk-tricek-top', {
    nextButton: '.swiper-button-next',
    prevButton: '.swiper-button-prev',
    spaceBetween: 10,
    slidesPerView: 3,
    breakpoints: {
        // when window width is <= 320px
        600: {
          slidesPerView: 1,
          spaceBetween: 10
        },

        // when window width is <= 992px
        992: {
          slidesPerView: 2,
          spaceBetween: 10
        }
    },
    pagination: '.swiper-pagination',
    paginationType: 'progress',
    // Disable preloading of all images
    preloadImages: false,
    // Enable lazy loading
    lazyLoading: true,
});
