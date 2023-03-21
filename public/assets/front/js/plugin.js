$(function (){

    'use strict';

    $(window).on('load',function(){
        $('.loader').css({'display': 'none'});
    });
    

    $(".details-project .owl-carousel").owlCarousel({
        autoplay: true,
        autoplayhoverpause: true,
        autoplaytimeout: 100,
        items: 3,
        nav: true,
        loop: true,
        dots: false,
        responsive: {
            0 : {
                items: 2
            },
            485 : {
                items: 3
            },
            728 : {
                items: 2
            },
            879 : {
                items: 3
            },
            1200 : {
                items: 3
            }
        }
    });


    $(".partener .owl-carousel").owlCarousel({
        autoplay: true,
        autoplayhoverpause: true,
        autoplaytimeout: 100,
        items: 4,
        nav: true,
        loop: true,
        dots: false,
        responsive: {
            0 : {
                items: 1
            },
            576 : {
                items: 2
            },
            728 : {
                items: 2
            },
            879 : {
                items: 3
            },
            1200 : {
                items: 4
            }
        }
    });


});