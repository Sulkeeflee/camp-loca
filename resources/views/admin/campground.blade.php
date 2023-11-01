<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->

    @include('admin.css')

    <style type="text/css">

     .div_center
     {
        text-align:center;
        padding-top:40px;
     }

     .font_size
     {
      font-size: 40px;
      padding-bottom: 40px;
     }

     .text_color
     {
        color: black;
        padding-bottom:  20px;
     }

    label{
      display:inline-block;
      width: 200px;
    }

   .div_design
    {
      padding-bottom:  20px;
    }
    </style>

  </head>
  <body>
    <div class="container-scroller">
    <!-- partial:partials/_sidebar.html -->
     @include('admin.sidebar')
    <!-- partial -->
     @include('admin.header')
    <!-- partial -->
    <div class="main-panel">
       <div class="content-wrapper">

       @if(session()->has('message'))
         
         <div class="alert alert-success">

         <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>

          {{ session()->get('message') }}
        
        </div>
       @endif


    <div class="div_center">
        <h1 class="font_size"> Add campground </h1>

        
        <form action="{{url('/add_campground')}}" method="POST" enctype="multipart/form-data">
      @csrf

        <div class="div_design">
        <label > Title</label>
       <input class="text_color" type="text"  name="title"
        placeholder="write a title" required="">
    </div>

    <div class="div_design">
        <label > Description</label>
       <input class="text_color" type="text"  name="description"
        placeholder="write a description" required="">
    </div>

    <div class="div_design">
        <label >Location</label>
       <input class="text_color" type="text"  name="location"
        placeholder="write a location" required="">
    </div>



    <div class="div_design">
        <label > catagory</label>
       <select class="text_color" name="catagory_campground" required=""> 
       <option value="" selected=""> Add a catagory here </option>


      
       @foreach($catagory as $catagory)
       
       <option value="{{$catagory->catagory_name}}">{{$catagory->catagory_name}}</option> 
       
       @endforeach
         
    </select>

     <div class="div_design">
        <label > campground image here</label>
       <input  type="file"  name="image" required="">
    
    </div>

    <div class="div_design">
       
       <input  type="submit"  value="Add campground"  class="btn btn-primary ">
      
    </div>
  </form>

  </div>
  </div>

    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>