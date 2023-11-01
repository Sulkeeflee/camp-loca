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

    <title>Ogani | Template</title>


      <link rel="shortcut icon" href="images/favicon.png" type="">
      <title>Famms - Fashion HTML Template</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="{{asset('home/css/bootstrap.css')}}" />
      <!-- font awesome style -->
      <link href="{{asset('home/css/font-awesome.min.css')}}" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="{{asset('home/css/style.css')}}" rel="stylesheet" />
      <!-- responsive style -->
      <link href="{{asset('home/css/responsive.css')}}" rel="stylesheet" />


      <style type="text/css">




</style>

   </head>
   <body>
      <div class="hero_area">
         <!-- header section strats -->
        @include('home.header')
         <!-- end header section -->




  @if(session()->has('message'))
         
         <div class="alert alert-success">

         <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>

          {{ session()->get('message') }}
        
        </div>
       @endif


        <h1 class="text-center">New Campground</h1>
        <div class="row">
        <div class="col-md-6">
           

            <form action="{{url('/add_campground')}}" method="POST" enctype="multipart/form-data">
      @csrf
                     
            <div class="mb-3">
                    <label class="form-label" for="title">Title</label>
                    <input class="form-control" type="text" name="title" placeholder="write a title" required="">
                    <div class="valid-feedback">
                        looks good!
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="location">Location</label>
                    <input class="form-control" type="text" name="location" placeholder="write a location" required="">
                    <div class="valid-feedback">
                        looks good!
                    </div>
                </div>
                <div class="mb-3">
                    <label for="formFileSm" class="form-label"><i class="fas fa-camera-retro"></i> Choose Images</label>
                    <input class="form-control form-control-sm"  type="file"  name="image" required="">
                </div>
               

                <div class="dropdown mb-3">
                    <label class="form-label me-3" for="category">Select Category</label>
                    <select name="catagory_campground" required="">
                        <option value="" selected="">Category</option>
                        
                        @foreach($catagory as $catagory)
       
       <option value="{{$catagory->catagory_name}}">{{$catagory->catagory_name}}</option> 
       
       @endforeach 

                        
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="description">Description</label>
                    <textarea class="form-control" type="text" name="description"placeholder="write a description" required=""></textarea>
                    <div class="valid-feedback">
                        looks good!
                    </div>
                </div>
                <div class="mb-3">
                    <input  type="submit"  value="Add campground"  class="btn btn-dark">
                </div>

            </form>
        </div>
        <div class="col-md-6">
            <img src="/images/Camping Vector Illustration.png" class="rounded float-end" alt="..." style="width: 100%;">
        </div>
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



   </body>
</html>