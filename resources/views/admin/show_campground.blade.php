<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  @include('admin.css')

  <style type="text/css">
  .center {
    margin: auto;
    width: 80%;
    text-align: center;
    margin-top: 40px;
  }

  .font_size {
    text-align: center;
    font-size: 24px;
    padding-top: 20px;
  }

  .th_color {
    background: #3498db;
    color: #fff;
  }

  .th_deg {
    padding: 15px;
  }

  table {
    width: 100%;
    border-collapse: collapse;
  }

  table, th, td {
    border: 1px solid #ccc;
  }

  th, td {
    padding: 10px;
    text-align: center;
  }

 

  .alert {
    background-color: #4CAF50;
    color: white;
    padding: 10px;
    margin-top: 20px;
    text-align: center;
  }

  .btn {
    padding: 8px 20px;
    border: none;
    cursor: pointer;
  }

  .btn-danger {
    background-color: #f44336;
    color: white;
  }

  .btn-success {
    background-color: #4CAF50;
    color: white;
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
        <h2 class="font_size">All campground</h2>
        <table class="center">
          <tr class="th_color">
            <th class="th_deg">Title</th>
            <th class="th_deg">Decription</th>
            <th class="th_deg">Location</th>
            <th class="th_deg">Category</th>          
            <th class="th_deg">Image</th>
            <th class="th_deg">Delete</th>
            <th class="th_deg">Edit</th>
          </tr>
          @foreach($campground as $campground)
          <tr>
            <td>{{$campground->title}}</td>
            <td>{{$campground->description}}</td>
            <td>{{$campground->location}}</td>
            <td>{{$campground->catagory}}</td>
         
            <td> 
              <img height="100" width="180" src="campground/{{$campground->image}}" alt="{{$campground->title}}">
            </td>
            <td>
              <a class="btn btn-danger" onclick="return confirm('Are You Sure it Delete this')" href="{{url('delete_campground',$campground->id)}}">Delete</a>
            </td>
            <td>
              <a class="btn btn-success" href="{{url('update_campground',$campground->id)}}">Edit</a>
            </td>
          </tr>
          @endforeach
        </table>
      </div>
    </div>
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  @include('admin.script')
  <!-- End custom js for this page -->
</body>
</html>
