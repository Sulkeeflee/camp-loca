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
         <!-- header section starts -->
         @include('home.header')
         <!-- end header section -->

 <!-- Breadcrumb Section Begin -->
 <section class="breadcrumb-section set-bg" data-setbg="/images/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Order</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.html">Home</a>
                            <span>Order</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

      <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__table">
      <table>
                            <thead>
                                <tr>
                                    <th class="shoping__product">Products</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Payment Status</th>
                                    <th>Delivery Status</th>
                                    <th>Cancel Order</th>
                                </tr>
                            </thead>
                            <tbody>

                            @foreach($order as $order)


                                <tr>
                                    <td class="shoping__cart__item">
                                    <img height="100" width="180" src="/product/{{$order->image}}">
                                        <h5>{{$order->product_title}}</h5>
                                    </td>
                                    <td class="shoping__cart__price">
                                    ฿{{$order->price}}
                                    </td>
                                    <td class="shoping__cart__quantity">
                                    {{$order->quantity}}
                                    </td>
                                    <td class="shoping__cart__total">
                                    {{$order->payment_status}}
                                    </td>
                                    <td class="shoping__cart__total">
                                    {{$order->delivery_status}}
                                    </td>
                                    <td>
                     @if($order->delivery_status=='processing')
                     <a onclick="return confirm('Are You Sure to Cancel this Order!!!')" class="btn btn-danger" href="{{url('cancel_order',$order->id)}}">Cancel Order</a>
                     @else
                     <p style="color: blue;">Not Allowed</p>
                     @endif
                  </td>

                  
                  @endforeach

                            </tbody>
                        </table>
                        </div>
                        </div>
                        </div>
                        </div>


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
