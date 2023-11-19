 // ######################################################################################### Start Cookie ##################################################################################################

// ## set url api
var base = $("base").attr("href");
var path = $("base").attr("href");

 var PATH_ACCEPT = path + 'pdpa/';
//  console.log(PATH_ACCEPT);
 
 if (typeof $.cookie("CONSENT") === "undefined") {
     $('.pdpa').show();
     $.removeCookie('CONSENT', { path: '/' });
     $.removeCookie('KEY', { path: '/' });
 } else {
     $('.pdpa').hide();
 }

 $(document).on('click', '.acceptCookie', function() {
    //  alert('test');
     var date = new Date();
     var day = 30;
     var hour = 24;
     var minutes = 60;
     var Accept = $(this).data('accept');
     // var Token = $('#unknows').data('whatis');
     if (Accept == 'Accept') {
         (async () => {
             const result = await accept_cookieconsent(Accept);
             var results = JSON.parse(result);
             if (results.statuscode == 201) {
                 date.setTime(date.getTime() + (day * (hour * minutes * 60 * 1000)));
                 $.cookie('CONSENT', true, {
                     expires: date,
                     path: '/'
                 });
                 $.cookie('KEY', btoa(base), {
                     expires: date,
                     path: '/'
                 });
                 $('.pdpa').hide();
             } else {
                 return false;
             }
         })().catch(() => {});
     }
 });
 
 async function accept_cookieconsent(Accept) {  
     const settings = {
         "url": PATH_ACCEPT,
         "method": "POST",
         "timeout": 0,
         "data": {
             "statusAccept": Accept
         }
     };
     const result = await $.ajax(settings);
     return result;
 }

 // ######################################################################################### End Cookie ##################################################################################################