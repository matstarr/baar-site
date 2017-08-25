console.log('main');

$(document).ready(function(){
    $('.navbar').hide(10).delay(800).fadeIn(800);
    $('.header-text').hide(10).delay(800).fadeIn(800);
});

$(window).scroll(function() {
    var scroll = $(window).scrollTop();

    if (scroll >= 150) {
        $(".navbar").addClass('scrolled');
        $(".navbar").removeClass('sticky-top').addClass('fixed-top');
    } else {
        $(".navbar").removeClass('scrolled');
        $(".navbar").removeClass('fixed-top').addClass('sticky-top');
    }
});

$('.map-overlay').click(function(){
   $(this).addClass('scrollable')
});

$('.row1 .card').inviewport({
  threshold: 75,
  className: 'animated fadeInLeft'
});

$('.row2 .card').inviewport({
  threshold: 75,
  className: 'animated fadeInRight'
});

$('a.slide-button').click(function(){
    $('html, body').animate({
        scrollTop: $( $(this).attr('href') ).offset().top
    }, 700);
    return false;
});
