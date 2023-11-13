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
         
     

           <!-- contact us area start here  -->
    <div class="contact-us-area section-bottom">
        <div class="container">
            <div class="row">
                <div class="contact-us-top">
                    <div class="row">

                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="single-contact-info border-0 text-center">
                                <img class="contact-info-icon"
                                    src="{{ asset('frontend/assets/images/contact-info-1.png') }}" alt="contact-info" />
                                <h3 class="contact-info-title">{{ __('Email') }}</h3>
                                <p class="contact-info-content">
                                    {{ $allsettings['email'] }}

                                </p>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="single-contact-info text-center">
                                <img class="contact-info-icon"
                                    src="{{ asset('frontend/assets/images/contact-info-2.png') }}" alt="contact-info" />
                                <h3 class="contact-info-title">{{ __('Address') }}</h3>
                                <p class="contact-info-content">
                                    {{ $allsettings['address'] }} <br />
                                    {{ $allsettings['state'] }}
                                    {{ $allsettings['country'] }}
                                </p>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="single-contact-info text-center">
                                <img class="contact-info-icon"
                                    src="{{ asset('frontend/assets/images/contact-info-3.png') }}" alt="contact-info" />
                                <h3 class="contact-info-title">{{ __('Phone') }}</h3>
                                <p class="contact-info-content">
                                    {{ $allsettings['call_us'] }}
                                </p>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="contact-form-area">
                    <div class="contct-form-top text-center">
                        <h2 class="form-title">{{ __('Got any questions?') }}</h2>
                        <p class="form-subtitle">{{ __('Use the form below to get in touch with the sales team') }}</p>
                    </div>
                    <form method="post" action="{{ route('contact.us.store') }}">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="firstname" name="firstname"
                                        placeholder="{{ __('First Name') }}" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="lastname" name="lastname"
                                        placeholder="{{ __('Last Name') }}" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" class="form-control" id="email" name="email"
                                        placeholder="{{ __('Email Address') }}" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="contact_number" name="contact_number"
                                        placeholder="{{ __('Contact Number') }}" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea class="form-control message-box" id="message" name="message" rows="3"
                                        placeholder="{{ __('Type Message Here..') }}"></textarea>
                                </div>
                                <div class="form-button text-center">
                                    <button type="submit" class="form-btn">{{ __('Send Message') }}</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- contact us area end here  -->


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