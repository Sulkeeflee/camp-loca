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
        <h2 class="font_size">All Products</h2>
        <table class="center">
          <tr class="th_color">
            <th class="th_deg">Product Title</th>
            <th class="th_deg">Description</th>
            <th class="th_deg">Quantity</th>
            <th class="th_deg">Category</th>
            <th class="th_deg">Price</th>
            <th class="th_deg">Discount Price</th>
            <th class="th_deg">Product Image</th>
            <th class="th_deg">Delete</th>
            <th class="th_deg">Edit</th>
          </tr>
          @foreach($product as $product)
          <tr>
            <td>{{$product->title}}</td>
            <td>{{$product->description}}</td>
            <td>{{$product->quantity}}</td>
            <td>{{$product->catagory}}</td>
            <td>{{$product->price}}</td>
            <td>{{$product->discount}}</td>
            <td>
              <img height="100" width="180" src="/product/{{$product->image}}" alt="{{$product->title}}">
            </td>
            <td>
              <a class="btn btn-danger" onclick="return confirm('Are You Sure it Delete this')" href="{{url('delete_product',$product->id)}}">Delete</a>
            </td>
            <td>
              <a class="btn btn-success" href="{{url('update_product',$product->id)}}">Edit</a>
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
