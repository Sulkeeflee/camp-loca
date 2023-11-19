window.onload = function() {

    $(".preload").delay(400).fadeOut("200", function() {

        $('#preload').addClass('move');

        $('#preload').fadeOut(200);

    });

};



AOS.init({

    once: true,

    offset: 0,

    duration: 1000

});



var clipboard = new ClipboardJS('.copy-clipboard');



var clipboard = new ClipboardJS('.copy-clipboardNew', {

    text: function(eve) {

        // console.log(eve.dataset.clickcopy);

        return document.querySelector('input[name="' + eve.dataset.clickcopy + '"]').value;

    }

});





$(document).ready(function() {


    // $('#modalReviewSuccess').modal('show');


    // new WOW().init();



    $('.rating').rating();



    $('.select-control').select2({

        minimumResultsForSearch: Infinity,

        placeholder: "Select"

    });



    $('.select-control.has-search').select2({

        placeholder: "Select"

    });



    $("[data-fancybox]").fancybox({

        thumbs: false,

        slideShow: false,

        fullScreen: false

    });



    // $(".mcscroll").mCustomScrollbar({

    //    axis : "y",

    //    scrollButtons: {

    //        enable: true

    //    }

    // });

    // $(".mcscrollX").mCustomScrollbar({

    //    axis : "x",

    //    scrollButtons: {

    //        enable: true

    //    }

    // });



    var lazyLoadInstance = new LazyLoad({

        elements_selector: ".lazy"

    });



    $('.overflow-line-1').trunk8({

        lines: 1,

        tooltip: false

    });

    $('.overflow-line-2').trunk8({

        lines: 2,

        tooltip: false

    });

    $('.overflow-line-3').trunk8({

        lines: 3,

        tooltip: false

    });



    var topbar = $('.site-header').height();

    $(window).scroll(function() {

        if ($(window).scrollTop() > topbar) {

            $(".site-header").addClass("tiny");

        } else {

            $(".site-header").removeClass("tiny");

        }

    });



    $('[data-toggle="menu-mobile"]').click(function() {

        $(this).toggleClass('close');

        $('.global-container').toggleClass('sidebar-open');

        $('nav.menu').toggleClass('open');

    });

    $('[data-toggle="menu-overlay"]').click(function() {

        $('[data-toggle="menu-mobile"]').removeClass('close');

        $('.global-container').removeClass('sidebar-open');

        $('nav.menu').removeClass('open');

    });



    $('.b-fav').click(function() {

        $(this).toggleClass('active');

    });



    $('.add-guest').click(function(e) {

        e.stopPropagation();

        $('.dropdown-guest').addClass('show');

    });

    $('body').click(function() {

        $('.dropdown-guest').removeClass('show');

    });



    $('.add').click(function() {

        $('.number').val(+$('.number').val() + 1);

        var num = $('.number').val();

        $('.num-g').html('<span  class=" d-none d-sm-block">ผู้เข้าพัก</span> ' + num + ' คน');

    });

    $('.sub').click(function() {

        if ($('.number').val() > 1) {

            $('.number').val(+$('.number').val() - 1);

            var num = $('.number').val();

            $('.num-g').html('<span class=" d-none d-sm-block">ผู้เข้าพัก</span> ' + num + ' คน');

        }

    });



    // $('input.ifocus').click(function (){

    //     // ('.ifocus').removeClass('show');

    //     $('.overlay').addClass('show');

    // });

    // $('body').click(function (){

    //     $('.overlay').removeClass('show');

    // });



    $('.btn-filter').click(function() {

        $('.menu-filter').addClass('show');

        $('.black-drop').addClass('show');

    });

    $('.black-drop').click(function() {

        $('.menu-filter').removeClass('show');

        $('.black-drop').removeClass('show');

    });

    $('.btn-close').click(function() {

        $('.menu-filter').removeClass('show');

        $('.black-drop').removeClass('show');

    });



    $('#sticky-map .pin-location').click(function() {

        $(this).toggleClass('active');

        $('#sticky-map .card').toggleClass('active');

    });



    $(function() {

        var action = 'search';

        $.ajax({

            url: base + "/search/action-search",

            type: 'POST',

            data: {

                action: action

            },

            dataType: "JSON",

            xhr: function() {

                var myXhr = $.ajaxSettings.xhr();

                return myXhr;

            },

            success: function(data) {

                $(".searchlocation").autocomplete({

                    source: data.ProvinceAndCamp

                });

                $(".searchlocation_onmap").autocomplete({

                    source: data.ProvinceAndCamp

                });

                return false;

            }

        });

        return false;

    });



    $('.regis-email').click(function() {

        $('.sign-up').css('display', 'none');

        $('.sign-up-fill').fadeIn().css('display', 'block');

    });

    $('.btn-back-fill').click(function() {

        $('.sign-up').fadeIn().css('display', 'block');

        $('.sign-up-fill').css('display', 'none');

        $('.sign-in').css('display', 'none');

        $('.forgot-psw').css('display', 'none');

    });


    // $('.btn-sign-in').click(function() {

    //     $('.sign-in').fadeIn().css('display', 'block');

    //     $('.sign-up').css('display', 'none');

    // });
    $(document).on('click','.btn-sign-in',function(){
// alert('test');
        openModalLogin();
    });

    $(document).on('click','.login-header',function(){
        openModalLogin();
    });


    // $('.login-header').click(function() {

    //     openModalLogin();

    // });

    function openModalLogin(){
        $('.sign-up').fadeIn().css('display', 'none');

        $('.sign-up-fill').css('display', 'none');

        $('.sign-in').css('display', 'block');

        $('.forgot-psw').css('display', 'none');

    }


    $('.btn-back-fill-guest').click(function() {

        $('#modalmemorgust .sign-up').fadeIn().css('display', 'block');

        $('.guest-fill').css('display', 'none');

    });



    $('.btn-guest-in').click(function() {

        $('.guest-fill').fadeIn().css('display', 'block');

        $('.sign-up').css('display', 'none');

    });


    $('.btn-regis-fill').click(function() {

        $('.sign-up-fill').fadeIn().css('display', 'block');

        $('.sign-in').css('display', 'none');

    });

    $('.btn-regis-fill').click(function() {

        $('.sign-up-fill').fadeIn().css('display', 'block');

        $('.sign-in').css('display', 'none');

    });

    $('.btn-forgot-psw').click(function() {

        $('.forgot-psw').fadeIn().css('display', 'block');

        $('.sign-in').css('display', 'none');

    });



    // $('.login-header').click(function() {

    //     $('.sign-up').fadeIn().css('display', 'none');

    //     $('.sign-up-fill').css('display', 'none');

    //     $('.sign-in').css('display', 'block');

    //     $('.forgot-psw').css('display', 'none');

    // });



    $('.btn-awards').click(function() {

        $('.awards-confirm').fadeIn().css('display', 'block');

        $('.awards-form').css('display', 'none');

    });



    $('.btn-zone-ii').click(function() {

        $('.btn-zone-ii').removeClass('active');

        $(this).addClass('active');

    });



    // $('.zone-list .link').click(function(){

    //     $('.zone-list .link').removeClass('active');

    //     $(this).addClass('active');

    // });



    $('.btn-lock').click(function() {

        $(this).toggleClass('active');

    });



    // count char

    $('#charNum').append('0');

    $('.t-review').keyup(function() {

        var len = $(this).val().length;

        $('#charNum').text(0 + len);

    });



    $('.btn-area').click(function() {

        $('html, body').animate({

            scrollTop: $("#zone").offset().top - 120

        }, 1000);

    });



    $('.btn-gallery').click(function() {

        $('html, body').animate({

            scrollTop: $(".gallery").offset().top - 120

        }, 1000);

    });

    $('.btn-detail').click(function() {

        $('html, body').animate({

            scrollTop: $(".desc-camp").offset().top - 120

        }, 1000);

    });

    $('.btn-should').click(function() {

        $('html, body').animate({

            scrollTop: $(".should").offset().top - 120

        }, 1000);

    });

    $('.btn-booking').click(function() {

        $('html, body').animate({

            scrollTop: $("#zone").offset().top - 80

        }, 1000);

    });



});







$(function() {



    var today = new Date();

    $('input[name="datefilterSearch"]').daterangepicker({

        autoUpdateInput: false,

        "opens": "right",

        "autoApply": true,

        "locale": {

            "format": "DD-MM-YYYY",

        },

        minDate: today

    });


    $('input[name="datefilterSearch"]').on('click', function() {

        if (window.matchMedia("(max-width: 1600px)").matches) {

            // $('.daterangepicker').css('margin-top', '-7%');

        } else if (window.matchMedia("(max-width: 1440px)").matches) {

            // $('.daterangepicker').css('margin-top', '-5%');

        } else if (window.matchMedia("(max-width: 991px)").matches) {

            $('.daterangepicker').css('margin-top', '0%');

        } else if (window.matchMedia("(max-width: 767px)").matches) {

            $('.daterangepicker').css('margin-top', '0%');

        } else if (window.matchMedia("(max-width: 575px)").matches) {

            $('.daterangepicker').css('margin-top', '0%');

        } else {

            // $('.daterangepicker').css('margin-top', '-5%');

        }

    });



    $('input[name="datefilterSearch"]').on('apply.daterangepicker', function(ev, picker) {

        var SDStr = Date.parse(picker.startDate.format('YYYY-MM-DD')) / 1000;

        var EDStr = Date.parse(picker.endDate.format('YYYY-MM-DD')) / 1000;

        // console.log(SDStr);

        // console.log(EDStr);

        var Period = (EDStr - SDStr) / (60 * 60 * 24);



        if (Period > 0) {

            $(this).val(picker.startDate.format('DD-MM-YYYY') + ' - ' + picker.endDate.format('DD-MM-YYYY'));

        } else {

            $('input[name="datefilterSearch"]').click();

        }

    });



    $('input[name="datefilterSearch"]').on('cancel.daterangepicker', function(ev, picker) {

        $(this).val('');

    });



    // Birthday

    // $('input[name="Birthday"]').daterangepicker({

    //     autoUpdateInput: false,

    //     "singleDatePicker": true,

    //     "showDropdowns": true,

    //     "autoApply": true,

    // });



    // $('input[name="Birthday"]').on('apply.daterangepicker', function(ev, picker) {

    //     $(this).val(picker.startDate.format('DD MMM YYYY'));

    // });



    // $('input[name="Birthday"]').on('cancel.daterangepicker', function(ev, picker) {

    //     $(this).val('');

    // });



    // // camp-detail

    // var today = new Date(); 

    // $('.camp-check').daterangepicker({

    //     autoUpdateInput: false,

    //     "singleDatePicker": true,

    //     "showDropdowns": true,

    //     "autoApply": true,

    //     minDate:today

    // });



    // $('.camp-check').on('apply.daterangepicker', function(ev, picker) {

    //     $(this).val(picker.startDate.format('DD MMM YYYY'));

    // });



    // $('.camp-check').on('cancel.daterangepicker', function(ev, picker) {

    //     $(this).val('');

    // });



});



$(function() {



    var today = new Date();

    $('input[name="datefilter"]').daterangepicker({

        autoUpdateInput: false,

        "opens": "right",

        "autoApply": true,

        "locale": {

            "format": "DD-MM-YYYY",

        },

        minDate: today

    });



    $('input[name="datefilter"]').on('click', function() {

        if (window.matchMedia("(max-width: 1600px)").matches) {

            $('.daterangepicker').css('margin-top', '1.5%');

        } else if (window.matchMedia("(max-width: 1440px)").matches) {

            $('.daterangepicker').css('margin-top', 'inherit');

        } else if (window.matchMedia("(max-width: 991px)").matches) {

            $('.daterangepicker').css('margin-top', 'inherit');

        } else if (window.matchMedia("(max-width: 767px)").matches) {

            $('.daterangepicker').css('margin-top', 'inherit');

        } else if (window.matchMedia("(max-width: 575px)").matches) {

            $('.daterangepicker').css('margin-top', 'inherit');

        } else {

            $('.daterangepicker').css('margin-top', '0.85%');

        }

    });



    $('input[name="datefilter"]').on('apply.daterangepicker', function(ev, picker) {

        var SDStr = Date.parse(picker.startDate.format('YYYY-MM-DD')) / 1000;

        var EDStr = Date.parse(picker.endDate.format('YYYY-MM-DD')) / 1000;

        // console.log(SDStr);

        // console.log(EDStr);

        var Period = (EDStr - SDStr) / (60 * 60 * 24);



        if (Period > 0) {

            $(this).val(picker.startDate.format('DD-MM-YYYY') + ' - ' + picker.endDate.format('DD-MM-YYYY'));

        } else {

            $('input[name="datefilter"]').click();

        }

    });



    $('input[name="datefilter"]').on('cancel.daterangepicker', function(ev, picker) {

        $(this).val('');

    });



});







function chartImage(id) {

    var chart = $('#' + id).highcharts();

    var imgExp = chart.getSVG();

    var html = "data:image/svg+xml;base64," + btoa(unescape(encodeURIComponent(imgExp)));

    $('#' + id + "-img").attr("src", html);

    $('#' + id).hide();

}



// chart

// Highcharts.chart('chart-booking', {

//     chart: {

//         type: 'column',

//         style: {

//             fontFamily: 'Pridi'

//         }

//     },

//     title: {

//         text: null

//     },

//     exporting: false,

//     credits: {

//         enabled: false

//     },

//     xAxis: {

//         categories: [

//             'ม.ค.',

//             'ก.พ.',

//             'มี.ค.',

//             'เม.ย.',

//             'พ.ค.',

//             'มิ.ย.',

//             'ก.ค.',

//             'ส.ค.',

//             'ก.ย.',

//             'ต.ค.',

//             'พ.ย.',

//             'ธ.ค.'

//         ],

//         crosshair: true,

//         labels: {

//             style: {

//                 fontSize:'16px'

//             }

//         }

//     },

//     yAxis: {

//         min: 0,

//         title: {

//             text: null

//             // text: 'จำนวนที่จอง (ครั้ง)'

//         },

//         labels: {

//             style: {

//                 fontSize:'16px'

//             }

//         }

//     },

//     tooltip: {

//         headerFormat: '<span style="font-size:10px">{point.key}</span><table>',

//         pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +

//             '<td style="padding:0"><b>{point.y:.1f} ครั้ง</b></td></tr>',

//         footerFormat: '</table>',

//         shared: true,

//         useHTML: true

//     },

//     plotOptions: {

//         column: {

//             groupPadding: 1,

//             borderWidth: 0

//         },

//         series: {

//             borderRadius: 5,

//             pointWidth: 6,

//         }

//     },

//     legend: {

//         backgroundColor: '#FFFFFF',

//         align: 'left',

//         verticalAlign: 'top',

//         floating: true,

//         x: 45,

//         y: 0,

//         itemStyle: {

//             color: '#282828',

//             fontSize: '16px',

//             fontWeight: '300',

//             fontFamily: 'Pridi'

//         }

//     },

//     series: [{

//         name: 'ลานกางเต็นท์',

//         color:'#637B69',

//         data: [50, 100, 90, 80, 55, 40, 88, 74, 99, 63, 100, 55]



//     }, {

//         name: 'ที่พักรูปแบบอื่น',

//         color:'#425A62',

//         data: [90, 80, 70, 66, 55, 89, 50, 100, 56, 75, 99, 92]



//     }]

// });


function boxLoading(elm, status = 'on') {
    $(elm).css("position", "relative");
    if (status == 'on') {
        $(elm).addClass('loadding');
    } else {
        $(elm).removeClass('loadding');
    }
}