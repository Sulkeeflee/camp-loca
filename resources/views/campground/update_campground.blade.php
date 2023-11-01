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

         <h1 class="text-center">Edit Campground</h1>
         <div class="row">
        
        <div class="col-md-6 mt-3">
           
        <form action="{{url('/update_campground_confirm',$campground->id)}}" method="POST" enctype="multipart/form-data">
        
        @csrf
  
                <div class="mb-3">
                    <label class="form-label" for="title">Title</label>
                    <input class="form-control" type="text" name="title" placeholder="write a title" required="" value="{{$campground->title}}">
                    <div class="valid-feedback">
                        looks good!
                    </div>
                </div>
               
                <div class="mb-3">
                    <label class="form-label" for="location">location</label>
                    <input class="form-control" type="text" name="location" placeholder="write a location"  value="{{$campground->location}}"> 
                        <div class="valid-feedback">
                            looks good!
                        </div>
                    </div>
                 

                <div class="mb-3">
                    <label class="form-label">Update Category</label>
                    <select class="text_color" name="catagory_campground" required="">
                       
                       <option value="{{$campground->catagory}}" selected=""> {{$campground->catagory}} </option>
                    
                       @foreach($catagory as $catagory)
       
       <option value="{{$catagory->catagory_name}}">{{$catagory->catagory_name}}</option> 
       
       @endforeach
                    </select>
                </div>


                <div class="mb-3">
                    <label class="form-label" for="location">Description</label>
                    <input class="form-control" type="text" name="description" placeholder="write a description" required="" value="{{$campground->description}}"> 

                    <div class="valid-feedback">
                        looks good!
                    </div>
                </div>
        </div>
       
       
        <div class="col-md-6 mt-3">
            <div class="mb-3">
                <label for="formFileSm" class="form-label"><i class="fas fa-camera-retro"></i> Add more Images</label>
                <input class="form-control form-control-sm" id="formFileSm" type="file" name="image" multiple>
            </div>
            <div class="mb-3" style="display: inline-block;">
                <% campground.image.forEach((img, i)=> { %>
                    <img class="img-thumbnail" src="/campground/{{$campground->image}}" alt="">
                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input" type="checkbox" id="image-<%= i %>" name="deleteImages[]"
                            value="<%= img.filename %>">
                        <label class="form-check-label" for="image-<%= i %>">Delete ??</label>
                    </div>
                    <% }) %>
            </div>

        </div>
       
       
       

        
        <div class="mb-3 d-flex justify-content-center">
            <button class="btn btn-dark">Edit Campground</button>
        </div>
        </form>
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