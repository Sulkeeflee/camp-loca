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
        <h1 class="font_size"> Update Product </h1>

        
        <form action="{{url('/update_product_confirm',$product->id)}}" method="POST" enctype="multipart/form-data">
      @csrf

        <div class="div_design">
        <label >product Title</label>
       <input class="text_color" type="text"  name="title"
        placeholder="write a title" required="" value="{{$product->title}}">
    </div>

    <div class="div_design">
        <label >product Description</label>
       <input class="text_color" type="text"  name="description"
        placeholder="write a description" required="" value="{{$product->description}}">
    </div>

    <div class="div_design">
        <label >product price</label>
       <input class="text_color" type="number"  name="price"
        placeholder="write a price" required="" value="{{$product->price}}">
    </div>


    <div class="div_design">
        <label >Discount price</label>
       <input class="text_color" type="number"  name="dis_price"
        placeholder="write a discount is aply"  value="{{$product->discount}}">
        </div>

        <div class="div_design">
        <label >product Quantity</label>
       <input class="text_color" type="number"  min="0" name="quantity"
        placeholder="write a quantity" required="" value="{{$product->quantity}}">
    </div>


    <div class="div_design">
        <label >product catagory</label>
       <select class="text_color" name="catagory" required=""> 
       <option value="{{$product->catagory}}" selected=""> {{$product->catagory}} </option>

       @foreach($catagory as $catagory)
       
       <option value="{{$catagory->catagory_name}}">{{$catagory->catagory_name}}</option> 
       
       @endforeach

    
      
         
        </select>
    </div>


    <div class="div_design">
        <label > Current product image </label>
     <img  style="margin:auto;"  height="100" width="100" src="/product/{{$product->image}}">
    
    </div>

     <div class="div_design">
        <label > Change product image </label>
       <input  type="file"  name="image">
    
    </div>

    <div class="div_design">
       
       <input  type="submit"  value="update produc"  class="btn btn-primary ">
      
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