$(document).ready(function() {
    // popular
    $('.popular-list .slider').slick({
        prevArrow:"<div class='slick-prev'><span class='feather icon-chevron-left'></span></div>",
        nextArrow:"<div class='slick-next'><span class='feather icon-chevron-right'></span></div>",
        infinite: false,
        slidesToShow: 3,
        slidesToScroll: 1,
        // autoplay: true,
        // autoplaySpeed: 3500,
        speed: 1500,
        dots: false,
        arrows: true,
        responsive: [
            {
                breakpoint: 1281,
                settings: {
                    speed: 600,
                    arrows: false,
                    dots: true
                }
            },
            {
                breakpoint: 992,
                settings: {
                    speed: 600,
                    slidesToShow: 2,
                    arrows: false,
                    dots: true
                }
            },
            {
                breakpoint: 576,
                settings: {
                    speed: 600,
                    slidesToShow: 1,
                    arrows: false,
                    dots: true
                }
            },
        ]
    });
    // camping-ground
    $('.camping-ground-list .slider').slick({
        prevArrow:"<div class='slick-prev'><span class='feather icon-chevron-left'></span></div>",
        nextArrow:"<div class='slick-next'><span class='feather icon-chevron-right'></span></div>",
        infinite: false,
        slidesToShow: 4,
        slidesToScroll: 1,
        // autoplay: true,
        // autoplaySpeed: 3500,
        speed: 1500,
        dots: false,
        arrows: true,
        responsive: [
            {
                breakpoint: 1281,
                settings: {
                    speed: 600,
                    arrows: false,
                    dots: true
                }
            },
            {
                breakpoint: 992,
                settings: {
                    speed: 600,
                    slidesToShow: 3,
                    arrows: false,
                    dots: true
                }
            },
            {
                breakpoint: 576,
                settings: {
                    speed: 600,
                    slidesToShow: 2,
                    arrows: false,
                    dots: true
                }
            },
        ]
    });
    // banner
    $('.banner-list .slider').slick({
        prevArrow:"<div class='slick-prev'><span class='feather icon-chevron-left'></span></div>",
        nextArrow:"<div class='slick-next'><span class='feather icon-chevron-right'></span></div>",
        infinite: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        // autoplay: true,
        // autoplaySpeed: 3500,
        speed: 1500,
        dots: true,
        arrows: true,
        responsive: [
            {
                breakpoint: 1281,
                settings: {
                    speed: 600,
                    arrows: false
                }
            },
        ]
    });
    // wg-t-left
    $('.wg-t-left-list .slider').slick({
        prevArrow:"<div class='slick-prev'><span class='feather icon-chevron-left'></span></div>",
        nextArrow:"<div class='slick-next'><span class='feather icon-chevron-right'></span></div>",
        infinite: false,
        slidesToShow: 3,
        slidesToScroll: 1,
        // autoplay: true,
        // autoplaySpeed: 3500,
        speed: 1500,
        dots: false,
        arrows: true,
        responsive: [
            {
                breakpoint: 1281,
                settings: {
                    speed: 600,
                    arrows: false,
                    dots: true
                }
            },
            {
                breakpoint: 992,
                settings: {
                    speed: 600,
                    slidesToShow: 2,
                    arrows: false,
                    dots: true
                }
            },
            {
                breakpoint: 768,
                settings: {
                    speed: 600,
                    slidesToShow: 3,
                    arrows: false,
                    dots: true
                }
            },
            {
                breakpoint: 576,
                settings: {
                    speed: 600,
                    slidesToShow: 2,
                    arrows: false,
                    dots: true
                }
            },
        ]
    });
    // wg-t-right
    $('.wg-t-right-list .slider').slick({
        prevArrow:"<div class='slick-prev'><span class='feather icon-chevron-left'></span></div>",
        nextArrow:"<div class='slick-next'><span class='feather icon-chevron-right'></span></div>",
        infinite: false,
        slidesToShow: 3,
        slidesToScroll: 1,
        // autoplay: true,
        // autoplaySpeed: 3500,
        speed: 1500,
        dots: false,
        arrows: true,
        responsive: [
            {
                breakpoint: 1281,
                settings: {
                    speed: 600,
                    arrows: false,
                    dots: true
                }
            },
            {
                breakpoint: 992,
                settings: {
                    speed: 600,
                    slidesToShow: 2,
                    arrows: false,
                    dots: true
                }
            },
            {
                breakpoint: 768,
                settings: {
                    speed: 600,
                    slidesToShow: 3,
                    arrows: false,
                    dots: true
                }
            },
            {
                breakpoint: 576,
                settings: {
                    speed: 600,
                    slidesToShow: 2,
                    arrows: false,
                    dots: true
                }
            },
        ]
    });
    // news
    $('.news-list .slider').slick({
        prevArrow:"<div class='slick-prev'><span class='feather icon-chevron-left'></span></div>",
        nextArrow:"<div class='slick-next'><span class='feather icon-chevron-right'></span></div>",
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        // autoplay: true,
        // autoplaySpeed: 3500,
        speed: 1500,
        centerMode: true,
        centerPadding:'380px',
        // variableWidth: true,
        dots: false,
        arrows: true,
        responsive: [
            {
                breakpoint: 1281,
                settings: {
                    speed: 600
                }
            },
            {
                breakpoint: 576,
                settings: {
                    speed: 600,
                    centerPadding:'210px',
                    arrows: true,
                    dots: false
                }
            },
        ]
    });

    // trip detail
    $('.tripdetail-list .slider').slick({
        prevArrow:"<div class='slick-prev'><span class='feather icon-chevron-left'></span></div>",
        nextArrow:"<div class='slick-next'><span class='feather icon-chevron-right'></span></div>",
        infinite: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        // autoplay: true,
        // autoplaySpeed: 3500,
        speed: 1500,
        dots: false,
        arrows: true,
        fade: true,
        cssEase: 'linear',
        responsive: [
            {
                breakpoint: 1281,
                settings: {
                    speed: 600
                }
            },
        ]
    });
    // awards
    $('.award-list .slider').slick({
        prevArrow:"<div class='slick-prev'><span class='feather icon-chevron-left'></span></div>",
        nextArrow:"<div class='slick-next'><span class='feather icon-chevron-right'></span></div>",
        infinite: false,
        slidesToShow: 3,
        slidesToScroll: 1,
        // autoplay: true,
        // autoplaySpeed: 3500,
        speed: 1500,
        dots: true,
        arrows: false,
        responsive: [
            {
                breakpoint: 1281,
                settings: {
                    speed: 600,
                }
            },
            {
                breakpoint: 992,
                settings: {
                    speed: 600,
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 768,
                settings: {
                    speed: 600,
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 576,
                settings: {
                    speed: 600,
                    slidesToShow: 2
                }
            },
        ]
    });
    // zone-list
    $('.zone-list .slider').slick({
        prevArrow:"<div class='slick-prev'><span class='feather icon-chevron-left'></span></div>",
        nextArrow:"<div class='slick-next'><span class='feather icon-chevron-right'></span></div>",
        infinite: false,
        slidesToShow: 4,
        slidesToScroll: 1,
        // autoplay: true,
        // autoplaySpeed: 3500,
        speed: 1500,
        dots: true,
        arrows: false,
        responsive: [
            {
                breakpoint: 1281,
                settings: {
                    speed: 600,
                }
            },
            {
                breakpoint: 992,
                settings: {
                    speed: 600,
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 768,
                settings: {
                    speed: 600,
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 576,
                settings: {
                    speed: 600,
                    slidesToShow: 2
                }
            },
        ]
    });
});