$(document).ready(function(){
    $('.input-search').focus(function(){
        $('.txt-key').addClass('hide');
    });

    $('.arrows-scroll .link').click(function() {
        $('html, body').animate({
            scrollTop: $(".wg-popular").offset().top - 120
        }, 1000);
    });

    $('.topgraphic-list .slider').slick({
        // prevArrow:"<div class='slick-prev'><span class='feather icon-chevron-left'></span></div>",
        // nextArrow:"<div class='slick-next'><span class='feather icon-chevron-right'></span></div>",
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 5000,
        speed: 400,
        dots: true,
        arrows: false,
        fade: true,
        cssEase: 'linear'
    });
});