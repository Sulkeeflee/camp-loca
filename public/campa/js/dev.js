var base = $("base").attr("href");



function modalalert(title, msg, status) {



    if (status == 1) {

        $('#modal-success').modal('show');

        $('#modal-success .titlemain').html(title);

        $('#modal-success .msg').html(msg);

    } else {

        $('#modal-fail').modal('show');

        $('#modal-fail .titlemain').html(title);

        $('#modal-fail .msg').html(msg);

    }



}



$(document).on('click', '.clicknew-events', function() {

    $('.formnew-events').submit();

});



///View :Password

$(document).on('click', '.viewpass-on', function() {

    $('input[name="inputPassword"]').attr('type', 'text');

    $('#pass-on').hide();

    $('#pass-off').show();

})



$(document).on('click', '.viewpass-off', function() {

    $('input[name="inputPassword"]').attr('type', 'password');

    $('#pass-on').show();

    $('#pass-off').hide();

});





$(document).on('click', '#sharefb', function() {

    var url = $(this).data('url');

    var winHeight = $(this).data('winHeight');

    var winWidth = $(this).data('winWidth');



    var winTop = (screen.height / 2) - (winHeight / 2);

    var winLeft = (screen.width / 2) - (winWidth / 2);



    window.open(url, 'sharer', 'top=' + winTop + ',left=' + winLeft + ',toolbar=0,status=0,width=' + winWidth + ',height=' + winHeight);

});



function addCommas(nStr) {

    nStr += '';

    x = nStr.split('.');

    x1 = x[0];

    x2 = x.length > 1 ? '.' + x[1] : '';

    var rgx = /(\d+)(\d{3})/;

    while (rgx.test(x1)) {

        x1 = x1.replace(rgx, '$1' + ',' + '$2');

    }

    return x1 + x2;

}



$(document).on('hide.bs.modal', "#signup", function() {

    $('.sign-up').show();

    $('.sign-up-fill').hide();

    $('.guest-fill').hide();

    $('.modalsignup').hide();

    $('.modalsignup [name="action"]').val('normal');

    $('.forgot-psw').hide();

});




$(document).ready(function() {




    $('.b-fav').click(function() {



        var Cid = $(this).data('id');
        var Mid = $('.global-container').data('mid');


        if (window.matchMedia("(max-width: 1024px)").matches) {

            // var Active = $(".b-fav[data-id="+Cid+"]").find(".active").length;
            var Active = $(this).hasClass("active");
            if (Active) {
                var CheckActive = 'insert';
            } else {
                var CheckActive = 'delete';
            }
        } else {
            console.log('test desk');
            var Active = $(this).hasClass("active");

            if (Active) {
                var CheckActive = 'insert';
            } else {
                var CheckActive = 'delete';
            }
        }



        $.ajax({

            url: base + "/member/action-favorite",

            type: 'POST',

            data: {

                Cid: Cid,

                Mid: Mid,

                CheckActive: CheckActive

            },

            dataType: "JSON",

            xhr: function() {

                var myXhr = $.ajaxSettings.xhr();

                return myXhr;

            },

            success: function(data) {

                if (data.code == 201) {

                    if (CheckActive == 'insert') {

                        $('.b-fav[data-id=' + Cid + ']').addClass('active');

                    } else {

                        $('.b-fav[data-id=' + Cid + ']').removeClass('active');

                    }

                } else {

                    $('#signup').modal('show');

                    $('.b-fav[data-id=' + Cid + ']').removeClass('active');

                }

                return false;

            }

        });

        return false;

    });

    $('.b-fav.home').click(function() {



        var Cid = $(this).data('id');
        var Mid = $('.global-container').data('mid');


        if (window.matchMedia("(max-width: 1024px)").matches) {

            // var Active = $(".b-fav[data-id="+Cid+"]").find(".active").length;
            var Active = $(this).hasClass("active");
            if (Active == 0) {
                var CheckActive = 'insert';
            } else {
                var CheckActive = 'delete';
            }
        } else {
            console.log('test desk');
            var Active = $(this).hasClass("active");

            if (Active) {
                var CheckActive = 'insert';
            } else {
                var CheckActive = 'delete';
            }
        }



        $.ajax({

            url: base + "/member/action-favorite",

            type: 'POST',

            data: {

                Cid: Cid,

                Mid: Mid,

                CheckActive: CheckActive

            },

            dataType: "JSON",

            xhr: function() {

                var myXhr = $.ajaxSettings.xhr();

                return myXhr;

            },

            success: function(data) {

                if (data.code == 201) {

                    if (CheckActive == 'insert') {

                        $('.b-fav[data-id=' + Cid + ']').addClass('active');

                    } else {

                        $('.b-fav[data-id=' + Cid + ']').removeClass('active');

                    }

                } else {

                    $('#signup').modal('show');

                    $('.b-fav[data-id=' + Cid + ']').removeClass('active');

                }

                return false;

            }

        });

        return false;

    });

});



// $(document).on('click', '.search_homes', function () {

//     alert('TEST');

//     $( "#search_home" ).submit();

// });



// Show Password

$(document).on('click', '#showpass1', function() {

    if ($(this).text() == 'แสดงรหัสผ่าน') {

        $('input[name="inputPassword"]').attr('type', 'text');

        $(this).text('ซ่อนรหัสผ่าน');

    } else {

        $('input[name="inputPassword"]').attr('type', 'password');

        $(this).text('แสดงรหัสผ่าน');

    }

});

$(document).on('click', '#showpass2', function() {

    if ($(this).text() == 'แสดงรหัสผ่าน') {

        $('input[name="inputCfPassword"]').attr('type', 'text');

        $(this).text('ซ่อนรหัสผ่าน');

    } else {

        $('input[name="inputCfPassword"]').attr('type', 'password');

        $(this).text('แสดงรหัสผ่าน');

    }

});



// Forgot Email

$(document).validator().on('submit', '#forgotpass', function(e) {



    if (e.isDefaultPrevented()) {

        $('#forgotpass').validator('validate');

    } else {

        e.preventDefault();



        $('.submitforgotpass').html('<i class="fa fa-circle-o-notch fa-spin" style="font-size:32px; vertical-align: middle;"></i>');

        $(".submitforgotpass").attr("disabled", true);



        var type = "POST";

        var url = base + "/member/forgot-pass";

        var data = $(this).serialize();

        $.ajax({

            type: type,
            url: url,
            data: data,

            success: function(data) {

                var data = JSON.parse(data);





                if (data.code == 400) {

                    $('#msgforgotpass').show();

                    $('.submitforgotpass').html('ส่งลิงค์ตั้งรหัสผ่านใหม่');

                    $(".submitforgotpass").attr("disabled", false);



                }

                if (data.code == 201) {

                    $('#signup').modal('hide');

                    modalalert('ลืมรหัสผ่าน', data.msg, 1);

                    // $('#modalForgot').modal('show');

                    // $('#modalForgot .msg').html(data.msg);

                }



                return false;

            }

        });

    }

});



// Login Email

$(document).validator().on('submit', '#loginemail', function(e) {

    if (e.isDefaultPrevented()) {

        $('#loginemail').validator('validate');

    } else {

        e.preventDefault();

        var type = "POST";

        var url = base + "/member/callback-loginemail";

        var data = $(this).serialize();

        $.ajax({

            type: type,
            url: url,
            data: data,

            success: function(data) {

                // console.log(data);

                var data = JSON.parse(data);

                if (data.code == 400) {
                    $('#msglogin').show();
                }

                if (data.code == 401) {
                    $('#msglogin').show();
                }

                if (data.code == 200) {

                    $('.barlogin').html(data.barmember);
                    if (data.action == "payment_card") {


                        $('.pay_card').click();
                        $('#signup').modal('hide');
                        $('#signup .sign-up').hide();
                        $('#signup .modalsignup').hide();

                    } else if (data.action == "payment_qr") {
                        $('.pay_qr').click();
                        $('#signup').modal('hide');
                        $('#signup .sign-up').hide();
                        $('#signup .modalsignup').hide();
                    } else if (data.action == "payment_tranfer") {
                        $('.pay_tranfer').click();
                        $('#signup').modal('hide');
                        $('#signup .sign-up').hide();
                        $('#signup .modalsignup').hide();
                    }



                    $('#signup').modal('hide');



                    // YOU CAN STORE THE TOKEN IN LOCALSTORAGE
                    // localStorage.setItem("jwt", data.jwt);

                    // IN A COOKIE
                    // let expire = new Date();
                    // expire.setTime(expire.getTime() + (3600000)); // 1 HR FROM NOW
                    // document.cookie = `jwt=${data.jwt};expires=${expire.toUTCString()}`;

                    /* IN INDEXED DATABSE
                    IDB.transaction("Settings", "readwrite")
                    .objectStore("Settings")
                    .add({"jwt":jwt});*/

                    /* OR EVEN IN STORAGE CACHE
                    var jwtBlob = new Blob([jwt], {type: "text/plain"});
                    var urlBlob = URL.createObjectURL(jwtBlob);
                    fetch(urlBlob).then((res) => {
                      caches.open("NAME").then((cache) => {
                        cache.put("jwt.txt", res);
                        URL.revokeObjectURL(urlBlob);
                      });
                    });*/
                    // alert("Good to go!");

                    // if (data.url) {
                    //     window.location.replace(data.url);
                    // } else {
                    //     location.reload();
                    // }
                }

                return false;

            }

        });

    }

});



// Register Email

$(document).validator().on('submit', '#regisemail', function(e) {



    if (e.isDefaultPrevented()) {

        $('#regisemail').validator('validate');

    } else {

        e.preventDefault();

        $('.submitregisemail').html('<i class="fa fa-circle-o-notch fa-spin" style="font-size:32px; vertical-align: middle;"></i>');
        $(".submitregisemail").attr("disabled", true);

        var type = "POST";

        var url = base + "/member/regis-email";

        var data = $(this).serialize();

        $.ajax({

            type: type,
            url: url,
            data: data,

            success: function(data) {

                var data = JSON.parse(data);

                console.log(data);

                $('#signup').modal('hide');

                if (data.code == 201) {

                    $('#modalRegister').modal('show');

                    if (data.gustmode == "true") {

                        $('.barlogin').html(data.barmember);

                        if (data.action == "payment_card") {

                            $('.btn_topay').click();
                            $('#signup').modal('hide');
                            $('#signup .sign-up').hide();
                            $('#signup .modalsignup').hide();

                        } else if (data.action == "payment_qr") {
                            // alert('tset');
                            $('.btn_topay').click();
                            $('#signup').modal('hide');
                            $('#signup .sign-up').hide();
                            $('#signup .modalsignup').hide();
                        }
                        if (data.action == "payment_tranfer") {
                            // alert('tset');
                            $('.btn_topay').click();
                            $('#signup').modal('hide');
                            $('#signup .sign-up').hide();
                            $('#signup .modalsignup').hide();
                        }


                        $('#signup').modal('hide');
                        $('#modalmemorgust').modal('hide');

                    } else {
                        modalalert('ลงทะเบียน', data.msg, 1);
                    }


                    // $('#modalRegister .msg').html(data.msg);

                } else {

                    $('#modalRegister').modal('show');

                    modalalert('ลงทะเบียน', data.msg, 2);

                    // $('#modalRegister .msg').html(data.msg);

                }



                return false;

            }

        });

    }

});



$(document).on('click', '.pdf-files', function() {

    var odid = $(this).data('odid');
    var type_pdf = $(this).data('type');



    if (type_pdf == 'invoice') {

        var UrlAction = base + "pdf_file/pdf-invoice";

    }

    if (type_pdf == 'detail') {

        var UrlAction = base + "pdf_file/pdf-detail";

    }



    var strForm = '<form name="frmPDF' + odid + '" id="frmPDF' + odid + '" target="_blank" method="post" action="' + UrlAction + '">';

    strForm += '    <input type="hidden" name="odid" value="' + odid + '">';

    strForm += '</form>';



    var form = $(strForm);

    $('body').append(form);

    form.submit();

});





// Function Main.js Edit

$(function() {



    // Birthday

    $('input[name="Birthday"]').daterangepicker({

        autoUpdateInput: false,

        "singleDatePicker": true,

        "showDropdowns": true,

        "autoApply": true,

        "locale": {

            "format": "DD-MM-YYYY",

        }

    });



    // camp-detail

    var today = new Date();

    $('.camp-check').daterangepicker({

        autoUpdateInput: false,

        "singleDatePicker": true,

        "showDropdowns": true,

        "autoApply": true,

        minDate: today

    });

    $('.camp-check , input[name="Birthday"]').on('click', function() {

        if (window.matchMedia("(max-width: 1600px)").matches) {

            $('.daterangepicker').css('margin-top', '-7%');

        } else if (window.matchMedia("(max-width: 1440px)").matches) {

            $('.daterangepicker').css('margin-top', '-5%');

        } else if (window.matchMedia("(max-width: 991px)").matches) {

            $('.daterangepicker').css('margin-top', '0%');

        } else if (window.matchMedia("(max-width: 767px)").matches) {

            $('.daterangepicker').css('margin-top', '0%');

        } else if (window.matchMedia("(max-width: 575px)").matches) {

            $('.daterangepicker').css('margin-top', '0%');

        } else {

            $('.daterangepicker').css('margin-top', '-5%');

        }

    });



    $('input[name="Birthday"]').on('apply.daterangepicker', function(ev, picker) {

        $(this).val(picker.startDate.format('DD-MM-YYYY'));

    });



    $('input[name="Birthday"]').on('cancel.daterangepicker', function(ev, picker) {

        $(this).val('');

    });



});

/*------------- START REVIEW -------------*/
function modalalert2(msg, status, ele, img) {
    if (status == 1) {
        $(ele).modal('show');
        $(ele + ' .h-title.-msg').html(msg);
        $(ele + ' .cover .-img').attr('src', img);
    } else {
        $(ele).modal('show');
        $(ele + ' .h-title.-msg').html(msg);
        $(ele + ' .cover .-img').attr('src', img);
    }
}
// modal review
$(document).on('click', '.btn-review', function(e) {
        strlens();
        var campname = $(this).data('name');
        var memid = $(this).data('memid');
        var campid = $(this).data('id');
        var images = $('.row.no-gutters .cover.-camp-img img').attr('src');
        $('#modalReview .title.card').html(campname);
        $('.review-form .cover.-modal-img img').attr('src', images);
        $('input[name="campid"]').val(campid);
        $('input[name="memid"]').val(memid);
        var formData = {
            'campid': campid
        }
        $.ajax({
            url: base + "/member/count-review",
            method: 'POST',
            data: formData,
            dataType: 'json',
            success: function(data) {
                let strHTML = `
                <div class="icon">
                    <img src="${data['img']}" alt="" />
                </div>
                ${data['rate']} (${data['total']} รีวิว)
            `;
                $('.count.-modal').html(strHTML);
            }
        })
    })
    // str limit 500
function strlens() {
    let len = $('#review-text').val().length
    let text = $('#review-text').val()
    if (len > 500) {
        let limit_str = text.substr(0, 500);
        $('#review-text').val(limit_str)
        len--;
    }
    $('.modal-body .text-count').html(len + '/500');
}
$(document).on('keyup', '#review-text', function(e) {
    strlens();
});
// submit form
$(document).on('submit', '#form-review', function(e) {
    if (e.isDefaultPrevented()) {
        $('#form-review').validator('validate');
    } else {
        $('.submit-review').html('<i class="fa fa-circle-o-notch fa-spin" style="font-size:32px; vertical-align: middle;"></i>');
        $(".submit-review").attr("disabled", true);
        var formData = $("#form-review").serialize();
        var baselang = $("base").attr("href") + "/member/my-history";
        e.preventDefault();
        $.ajax({
            url: base + "/member/addreviews",
            method: 'POST',
            data: formData,
            dataType: 'json',
            success: function(data) {
                // data = JSON.parse(res);
                $('#modalReview').modal('hide');
                if (data['status'] == 200) {
                    modalalert2(data['msg'], 1, '#modalReviewSuccess', data['img']);
                    $(document).on('hide.bs.modal', "#modalReviewSuccess", function() {
                        window.location.replace(baselang);
                    });
                } else {
                    modalalert2(data['msg'], 1, '#modalReviewSuccess', data['img']);
                    $(document).on('hide.bs.modal', "#modalReviewSuccess", function() {
                        window.location.replace(baselang);
                    });
                }
            }
        });
    }
});
// camp detail
$(document).on('click', '.-list-type', function() { // type
    var picAdminReview = $(this).data('pic');
    var picAdminName = $(this).data('name');
    var campid = $(this).data('id');
    var review = $(this).data('review');
    var star = $(this).data('star');
    var limit = $('#limit-review-static').val();
    $('.-list-type').removeClass('active');
    $(this).addClass('active');
    var formData = {
        'campid': campid,
        'review': review,
        'star': star,
        'limit': limit,
    }

    //set form
    if (review !== undefined) {
        $('#fields-review').val('credate');
        $('#action-review').val(review);
    } else {
        $('#fields-review').val('reviewstar');
        if (star == 'MAX') {
            $('#action-review').val('DESC');
        } else {
            $('#action-review').val('ASC');
        }
    }
    $('#page-review').val(1);

    $.ajax({
        url: base + "/camp/review-sort",
        method: 'POST',
        data: formData,
        dataType: 'json',
        success: function(data) {
            if (data['status'] == 200) {
                let strHTML = '';
                let strHTML_reply = '';
                data.data.forEach(value => {
                    strHTML_reply = ''
                    if (value.reply_detail !== null) {
                        strHTML_reply += `
                        <div class="reply">
                            <div class="wrapper">
                                <div class="row">
                                    <div class="col-auto">
                                        <div class="cover">
                                            <img src="${picAdminReview}">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="title">
                                            <div class="t-review">
                                                ${picAdminName}
                                            </div> 
                                            <div class="date">${value.reply_credate}</div>
                                        </div>
                                        <div class="desc">
                                            ${value.reply_detail}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        `;
                    }
                    strHTML += `
                            <li>
                                <div class="wrapper">
                                    <div class="row">
                                        <div class="col-auto">
                                            <div class="cover">
                                                <img src="${value.pic}" alt="${value.pic}">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="title">
                                                <div class="t-review">
                                                    ${value.fname} ${value.lname}
                                                    <div class="rating-star">
                                                        <div class="star-container disabled">
                                                            <input type="radio" class="star-check" title="5" ${(value.reviewstar == '5') ? 'checked' : ''}>
                                                            <input type="radio" class="star-check" title="4" ${(value.reviewstar == '4') ? 'checked' : ''}>
                                                            <input type="radio" class="star-check" title="3" ${(value.reviewstar == '3') ? 'checked' : ''}>
                                                            <input type="radio" class="star-check" title="2" ${(value.reviewstar == '2') ? 'checked' : ''}>
                                                            <input type="radio" class="star-check" title="1" ${(value.reviewstar == '1') ? 'checked' : ''}>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="date">${value.credate}</div>
                                            </div>
                                            <div class="desc">
                                                ${value.title}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                ${strHTML_reply}
                            </li>
                    `;
                });
                if (data.nextpage == 'hide') {
                    $('.review-action').hide();
                } else {
                    $('.review-action').show();
                }
                $('.item-list.-review').html('');
                $('.item-list.-review').html(strHTML);
            } else {
                $('.item-list.-review').html('');
                $('.review-action').hide();
                // modalalert2(data['msg'], 2, '#modalReviewSuccess');
            }
        }
    });
});

$(document).on('click', '.review-action', function() {
    var picAdminReview = $(this).data('pic');
    var picAdminName = $(this).data('name');
    var limit = parseInt($('#limit-review').val());
    var page = parseInt($('#page-review').val());
    var fields = $('#fields-review').val();
    var action = $('#action-review').val();
    var campid = $('#campid-review').val();
    var formData = {
        'limit': limit,
        'page': page,
        'fields': fields,
        'action': action,
        'campid': campid,
    }
    $.ajax({
        url: base + "/camp/review-loadmore",
        method: 'POST',
        data: formData,
        dataType: 'json',
        success: function(data) {
            if (data['status'] == 200) {
                let strHTML = '';
                let strHTML_reply = ''
                data.data.forEach(value => {
                    strHTML_reply = ''
                    if (value.reply_detail !== null) {

                        strHTML_reply += `
                        <div class="reply">
                            <div class="wrapper">
                                <div class="row">
                                    <div class="col-auto">
                                        <div class="cover">
                                            <img src="${picAdminReview}">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="title">
                                            <div class="t-review">
                                                ${picAdminName}
                                            </div> 
                                            <div class="date">${value.reply_credate}</div>
                                        </div>
                                        <div class="desc">
                                            ${value.reply_detail}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        `;
                    }
                    strHTML += `
                            <li>
                                <div class="wrapper">
                                    <div class="row">
                                        <div class="col-auto">
                                            <div class="cover">
                                                <img src="${value.pic}" alt="${value.pic}">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="title">
                                                <div class="t-review">
                                                    ${value.fname} ${value.lname}
                                                    <div class="rating-star">
                                                        <div class="star-container disabled">
                                                            <input type="radio" class="star-check" title="5" ${(value.reviewstar == '5') ? 'checked' : ''}>
                                                            <input type="radio" class="star-check" title="4" ${(value.reviewstar == '4') ? 'checked' : ''}>
                                                            <input type="radio" class="star-check" title="3" ${(value.reviewstar == '3') ? 'checked' : ''}>
                                                            <input type="radio" class="star-check" title="2" ${(value.reviewstar == '2') ? 'checked' : ''}>
                                                            <input type="radio" class="star-check" title="1" ${(value.reviewstar == '1') ? 'checked' : ''}>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="date">${value.credate}</div>
                                            </div>
                                            <div class="desc">
                                                ${value.title}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                ${strHTML_reply}
                            </li>
                    `;
                });
                if (data.nextpage == 'hide') {
                    $('.review-action').hide();
                } else {
                    $('.review-action').show();
                }
                $('.item-list.-review').append(strHTML);
                //set limit
                page += 1;
                $('#page-review').val(page);
            } else {
                $('.review-action').hide();
            }
        }
    });
});
/*------------- END REVIEW -------------*/