/*=================================================================*/





/*Header Slider*/

$('.header-carousel').owlCarousel({
    loop: true,
    margin: 20,
    autoplay: true,
    autoplayTimeout: 3000,
    autoplaySpeed: 1500,
    stagePadding: 10,
    nav: false,
    animateIn: 'fadeIN',
    animateOut: 'fadeOut',
    dots: true,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 1
        },
        1000: {
            items: 1
        }
    }
})




/*===============================================================================================*/
/*Testimonial*/
$('.testimonial-carousel').owlCarousel({
    loop: true,
    margin: 20,
    autoplay: false,
    autoplayTimeout: 6000,
    autoplaySpeed: 500,
    stagePadding: 10,
    nav: false,

    dots: true,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 1
        },
        1000: {
            items: 1
        }
    }

})
var owl2 = $('.testimonial-carousel');
owl2.owlCarousel();

$('.customNextBtn').click(function() {
    owl2.trigger('next.owl.carousel');
});

$('.customPrevBtn').click(function() {
    owl2.trigger('prev.owl.carousel');
});


/*=============================================================*/

/*Gallery*/
var owl = $('.gallery-carousel');
owl.owlCarousel({
    loop: true,
    nav: false,
    margin: 10,
    dots: false,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 3
        },
        960: {
            items: 5
        },
        1200: {
            items: 5
        }
    }
});
owl.on('mousewheel', '.owl-stage', function(e) {
    if (e.deltaY > 0) {
        owl.trigger('next.owl', [100]);
    } else {
        owl.trigger('prev.owl', [100]);
    }
    e.preventDefault();
});

/*=========================================================================*/

/*EVENT CAROUSEL*/
$('.event-carousel').owlCarousel({
    loop: true,
    margin: 20,
    autoplay: true,
    autoplayTimeout: 3000,
    autoplaySpeed: 1500,
    stagePadding: 10,
    nav: false,

    dots: true,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 1
        },
        1000: {
            items: 3
        }
    }
})

/*=========================================================================*/

/*AWARD*/
$('.award-img-carousel').owlCarousel({
    loop: true,
    margin: 20,
    autoplay: true,
    autoplayTimeout: 4000,

    stagePadding: 10,
    nav: false,
    dots: false,
    animateIn: 'fadeIN',
    animateOut: 'fadeOut',
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 1
        },
        1000: {
            items: 1
        }
    }
})


/* award DETAIL*/
$('.award-content-carousel').owlCarousel({
    loop: true,
    margin: 20,
    autoplay: true,
    autoplayTimeout: 4000,

    stagePadding: 10,
    nav: false,
    dots: false,
    animateIn: 'fadeIN',
    animateOut: 'fadeOut',
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 1
        },
        1000: {
            items: 1
        }
    }
})
















/*================================================================*/
/*function loadTestimonialSlider() {
    "use strict";

    var carousels = function() {
        $(".owl-carousel2").owlCarousel({
            loop: true,
            center: false,
            margin: 0,
            responsiveClass: true,
            nav: false,
            smartSpeed: 800,
            autoplay: false,
            autoplayTimeout: 3800,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1,
                    nav: false,
                    slideBy: 1
                },
                767: {
                    items: 1,
                    nav: false,
                    slideBy: 1
                },
                1000: {
                    items: 1
                }
            },
        });
    };

    carousels();
    owl2 = $('.owl-carousel2');
    owl2.owlCarousel();
}

var owl2 = $('.owl-carousel2');
owl2.owlCarousel();

$('.customNextBtn').click(function() {
    owl2.trigger('next.owl.carousel');
});

$('.customPrevBtn').click(function() {
    owl2.trigger('prev.owl.carousel');
});
*/