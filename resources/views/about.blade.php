<!DOCTYPE html>
<html>
   <head>
   <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />

      <link rel="shortcut icon" href="/images/logo.png" type="">
      <title>camploca</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="{{asset('home/css/bootstrap.css')}}" />
      <!-- font awesome style -->
      <link href="{{asset('home/css/font-awesome.min.css')}}" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="{{asset('home/css/style.css')}}" rel="stylesheet" />
      <!-- responsive style -->
      <link href="{{asset('home/css/responsive.css')}}" rel="stylesheet" />

       <!-- Css Styles -->
 <link rel="stylesheet" href="{{asset('home1/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('home1/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('home1/css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('home1/css/nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('home1/css/jquery-ui.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('home1/css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('home1/css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('home1/css/style.css')}}" type="text/css">



   </head>
   <body>
      <div class="hero_area">
         <!-- header section strats -->
        @include('home.header')
         <!-- end header section -->
         
         <section class="client_section layout_padding">
         <div class="container">
            <div class="heading_container heading_center">
               <h2>
                  About Us
               </h2>
            </div>
            <div id="carouselExample3Controls" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="box col-lg-10 mx-auto">
                        <div class="img_container">
                           <div class="img-box">
                              <div class="img_box-inner">
                                 <img src="images/sul.jpg" alt="">
                              </div>
                           </div>
                        </div>
                        <div class="detail-box">
                           <h5>
                              Sulkeeflee Sani
                           </h5>
                          
                           <p>
                              Dignissimos reprehenderit repellendus nobis error quibusdam? Atque animi sint unde quis reprehenderit, et, perspiciatis, debitis totam est deserunt eius officiis ipsum ducimus ad labore modi voluptatibus accusantium sapiente nam! Quaerat.
                           </p>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="box col-lg-10 mx-auto">
                        <div class="img_container">
                           <div class="img-box">
                              <div class="img_box-inner">
                                 <img src="images/sulaiman.jpg" alt="">
                              </div>
                           </div>
                        </div>
                        <div class="detail-box">
                           <h5>
                           Sulaiman Hama
                           </h5>
                           
                           <p>
                              Dignissimos reprehenderit repellendus nobis error quibusdam? Atque animi sint unde quis reprehenderit, et, perspiciatis, debitis totam est deserunt eius officiis ipsum ducimus ad labore modi voluptatibus accusantium sapiente nam! Quaerat.
                           </p>
                        </div>
                     </div>
                  </div>
                 
               </div>
               <div class="carousel_btn_box">
                  <a class="carousel-control-prev" href="#carouselExample3Controls" role="button" data-slide="prev">
                  <i class="fa fa-long-arrow-left" aria-hidden="true"></i>
                  <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExample3Controls" role="button" data-slide="next">
                  <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                  <span class="sr-only">Next</span>
                  </a>
               </div>
            </div>
         </div>
      </section>

      
      </div>
    
      
      
     
      <!-- footer start -->
      @include('home.footer')
      <!-- footer end -->
      <div class="cpy_">
         <p class="mx-auto">© 2021 All Rights Reserved By <a href="https://html.design/">Free Html Templates</a><br>
         
            Distributed By <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>
         
         </p>
      </div>


      <script>
        document.addEventListener("DOMContentLoaded", function(event) 
        { 
            var scrollpos = localStorage.getItem('scrollpos');
            if (scrollpos) window.scrollTo(0, scrollpos);});

        window.onbeforeunload = function(e) 
        {
            localStorage.setItem('scrollpos', window.scrollY);
        };
    </script>


      <!-- jQery -->
      <script src="home/js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="home/js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="home/js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="home/js/custom.js"></script>

 <!-- Js Plugins -->
 <script src="home1/js/jquery-3.3.1.min.js"></script>
    <script src="home1/js/bootstrap.min.js"></script>
    <script src="home1/js/jquery.nice-select.min.js"></script>
    <script src="home1/js/jquery-ui.min.js"></script>
    <script src="home1/js/jquery.slicknav.js"></script>
    <script src="home1/js/mixitup.min.js"></script>
    <script src="home1/js/owl.carousel.min.js"></script>
    <script src="home1/js/main.js"></script>

   </body>
</html>