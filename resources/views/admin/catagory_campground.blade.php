<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->

    @include('admin.css')

    <style type="text/css">
    
    .div_center
    {
      text-align: center; 
      padding-top: 40px;
    }
    
    .h2_font
    {
      font-size: 40px; 
      padding-bottom: 40px;
    }
    .input_color
    {
      color: black;
    }

    .center
    {
      margin: auto;
      width: 50%;
      text-align: center; 
      margin-top: 30px;
      border: 3px solid white;
    }

    /* Center the entire content on the page */
.container-scroller {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
}

/* Style the form container */
.div_center {
  text-align: center;
  padding: 40px;
}

/* Style the h2 heading */
.h2_font {
  font-size: 40px;
  padding: 40px 0;
}

/* Style the input field */
.input_color {
  color: black;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

/* Center the table */
.center table {
  width: 100%;
  text-align: center;
  border-collapse: collapse;
}

.center table, .center th, .center td {
  border: 1px solid #ccc;
}

.center th, .center td {
  padding: 10px;
}

/* Style the buttons */
.btn {
  padding: 10px 20px;
  background-color: #007BFF;
  color: #fff;
  text-decoration: none;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

.btn-danger {
  background-color: #FF6B6B;
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
            
           <h2 class="h2_font">Add catagory Campground</h2>
       
            <form action="{{url('/add_catagory_campground')}}" method="POST">


            @csrf
            
              <input class="input_color" type="text" name= "catagory_campground" placeholder="Write catagory name">

              <input type="submit" class="btn btn-primary" name=" submit" value="Add Catagory Campground">

            </form>
          </div>

         <table class="center">
            
           <tr>
            <td>Catagory Name</td> 
            <td>Action</td>
           </tr>
 
           @foreach($data as $data)

           <tr>

            <td>{{$data->catagory_name}}</td>
           
            <td>

              <a onclick="return confirm('Are You Sure To Delete This')" class="btn btn-danger" href="{{url('delete_catagory_campground',$data->id)}}">Delete</a>
            
            </td>
 
          </tr>

          @endforeach

         </table>  




         </div>
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>