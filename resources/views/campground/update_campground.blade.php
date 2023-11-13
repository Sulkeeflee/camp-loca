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

   


<!-- Bootstarp css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  
        <link rel="shortcut icon" href="/images/logo1.jpg" type="">
      <title>camploca</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="{{asset('home/css/bootstrap.css')}}" />
      <!-- font awesome style -->
      <link href="{{asset('home/css/font-awesome.min.css')}}" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="{{asset('home/css/style.css')}}" rel="stylesheet" />
      <!-- responsive style -->
      <link href="{{asset('home/css/responsive.css')}}" rel="stylesheet" />
     
  
      <style type="text/css">
  /* Modernize the body styles */
  body {
    font-family: 'Arial', sans-serif;
    background-color: #f5f5f5;
    margin: 0;
    padding: 0;
  }

  /* Modern button styles */
  .btn-success {
    background-color: #3498db;
    color: #fff;
    padding: 12px 24px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s;
  }

  .btn-success:hover {
    background-color: #2980b9;
  }

  .btn-secondary {
    background-color: #777;
    color: #fff;
    padding: 12px 24px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s;
  }

  .btn-secondary:hover {
    background-color: #666;
  }

  /* Modern header styles with a gradient background */
  h1.text-center {
    background: linear-gradient(90deg, #4CAF50 0%, #333 100%);
    color: #fff;
    padding: 10px 20px;
    border-radius: 5px;
    text-transform: uppercase;
    font-size: 24px;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
    display: inline-block;
  }

  /* Update form control styles with improved spacing and rounded borders */
  .form-control {
    border: 2px solid #ccc;
    padding: 10px;
    border-radius: 5px;
    margin-bottom: 20px;
  }

  .form-control:focus {
    outline: none;
    border: 2px solid #3498db;
  }
</style>





  



   </head>
   <body>
      <div class="hero_area">
         <!-- header section strats -->
        @include('home.header')
         <!-- end header section -->

        


         <div class="row">
    <h1 class="text-center">Edit campground</h1>
    <div class="col-6 offset-3">
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
       
       
       
        <div class="col-md-6 mt-3">
            <div class="mb-3">
                <label for="formFileSm" class="form-label"><i class="fas fa-camera-retro"></i> Add more Images</label>
                <input class="form-control form-control-sm" id="formFileSm" type="file" name="image" multiple>
            </div>
            <div class="mb-3" style="display: inline-block;">
                
                    <img class="img-thumbnail" src="/campground/{{$campground->image}}" alt="">
                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input" type="checkbox" id="image-<%= i %>" name="deleteImages[]"
                            value="<%= img.filename %>">
                        <label class="form-check-label" for="image-<%= i %>">Delete ??</label>
                    </div>
                  
            </div>

        </div>

        

    <div class="mb-3">
        <button class="btn btn-success">Edit Campground</button>
        <a class="btn btn-secondary" href="/campgrounds/<%= campground._id %> ">Back</a>
    </div>
    </form>
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