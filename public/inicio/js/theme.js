$(document).ready(function(){
// use jQuery correctly with strict
    (function($) {
        "use strict";
        // your code
        
    /*PreLoader*/
        $(".preloader").delay(700).fadeOut();
        
    
    /*----------------------------------------------------*/
    /*  Count Up
    /*----------------------------------------------------*/
    $('.counter').counterUp({
        delay: 15,
        time: 1500
    });
        
    /*----------------------------------------------------*/
    /*  Owl Carousels
    /*----------------------------------------------------*/        
        $('.offer_service_carousel').owlCarousel({
            loop:true,
            margin:0,
            nav:false,
            items:1
        });
        
        $('.clients_carousel').owlCarousel({
            loop:true,
            responsiveClass:true,
            dots:false,
            nav:true,
            navText:['<i class="fa fa-angle-right"></i>','<i class="fa fa-angle-left"></i>'],
            responsive:{
                0:{
                    items:2,
                    nav:true
                },
                500:{
                    items:3,
                    nav:true
                },
                992:{
                    items:4,
                    nav:false
                },
                1200:{
                    items:4,
                    nav:true,
                    loop:false
                }
            }
        })
    
    
        
    })(jQuery)
});

$(window).load(function() {        
// use jQuery correctly with strict
    (function($) {
        "use strict";
        // your code
        $('.tweet_slider').flexslider({
            animation: "fade",
            directionNav: false
        })
    
    })(jQuery)
})