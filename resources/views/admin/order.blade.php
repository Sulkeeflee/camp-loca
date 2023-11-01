<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')

    <style type="text/css">
      .title_deg {
        text-align: center;
        font-size: 25px;
        font-weight: bold;
        padding-bottom: 40px;
      }

      .table_deg {
        border-collapse: collapse;
        width: 100%;
        margin: auto;
        text-align: center;
      }

      .table_deg th,
      .table_deg td {
        border: 1px solid #ccc;
        padding: 10px;
      }

      .table_deg th {
        background-color: skyblue;
      }

      .img_size {
        width: 200px;
        height: 100px;
      }

      /* Add some spacing for better readability */
      .content-wrapper {
        padding: 20px;
      }

      /* Style the search form */
      form {
        margin: 20px 0;
      }

      input[type="text"] {
        color: black;
        padding: 5px;
        width: 200px;
      }

      .btn-outline-primary {
        background-color: #3498db;
        color: #fff;
        border: none;
        padding: 5px 10px;
        cursor: pointer;
      }

      .btn-outline-primary:hover {
        background-color: #2980b9;
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
          <h1 class="title_deg">All Order</h1>

          <div style="text-align: center;">
            <form action="{{url('search')}}" method="get">
              @csrf
              <input type="text" style="color: black;" name="search" placeholder="Search For Something">
              <input type="submit" value="Search" class="btn btn-outline-primary">
            </form>
          </div>

          <table class="table_deg">
            <tr class="th_deg">
              <th>Name</th>
              <th>Email</th>
              <th>Address</th>
              <th>Phone</th>
              <th>Product Title</th>
              <th>Quantity</th>
              <th>Price</th>
              <th>Payment Status</th>
              <th>Delivery Status</th>
              <th>Image</th>
              <th>Delivered</th>
              <th>Print PDF</th>
            </tr>
            @forelse($order as $order)
            <tr>
              <td>{{$order->name}}</td>
              <td>{{$order->email}}</td>
              <td>{{$order->address}}</td>
              <td>{{$order->phone}}</td>
              <td>{{$order->product_title}}</td>
              <td>{{$order->quantity}}</td>
              <td>{{$order->price}}</td>
              <td>{{$order->payment_status}}</td>
              <td>{{$order->delivery_status}}</td>
              <td>
                <img class="img_size" src="/product/{{$order->image}}">
              </td>
              <td>
                @if($order->delivery_status=='processing')
                <a href="{{url('delivered',$order->id)}}" onclick="return confirm('Are you sure this product is delivered !!!')" class="btn btn-primary">Delivered</a>
                @else
                <p style="color: green;">Delivered</p>
                @endif
              </td>
              <td>
                <a href="{{url('print_pdf',$order->id)}}" class="btn btn-secondary">Print PDF</a>
              </td>
            </tr>
            @empty
            <tr>
              <td colspan="12">No Data Found</td>
            </tr>
            @endforelse
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
