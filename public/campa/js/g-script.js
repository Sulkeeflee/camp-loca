$(document).ready(function () { 
    $('.suggested-slide').slick({
        prevArrow:"<div class='slick-prev'><span class='feather icon-chevron-left'></span></div>",
        nextArrow:"<div class='slick-next'><span class='feather icon-chevron-right'></span></div>",
        fade: false,
        infinite: false,
        slidesToShow: 4,
        slidesToScroll: 1,
        dots: true,
        arrows: false,
        focusOnSelect: true,
        rows: 1,
        slidesPerRow:1,
        responsive: [
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 3
                }
            }
        ]
    });
});