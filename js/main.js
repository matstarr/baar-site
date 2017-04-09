console.log('main');

$(document).ready(function(){
    $('.navbar').hide(10).delay(800).fadeIn(800);
    $('.header-text').hide(10).delay(800).fadeIn(800);
});

$(window).scroll(function() {    
    var scroll = $(window).scrollTop();

    if (scroll >= 100) {
        $(".navbar-default").addClass('scrolled');
        $(".navbar-default").removeClass('navbar-static-top').addClass('navbar-fixed-top');
    } else {
        $(".navbar-default").removeClass('scrolled');
        $(".navbar-default").removeClass('navbar-fixed-top').addClass('navbar-static-top');
    }
});

