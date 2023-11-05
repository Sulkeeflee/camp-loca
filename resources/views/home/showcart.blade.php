
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
    
    <style>

    .shoping__cart__table table thead th {
    font-size: 20px;
    font-weight: 700;
    color: #1c1c1c;
    padding-bottom: 20px;
    background-color: #99A686;
    margin-top: 10px;
    padding: 8px 16px;

} 

.shoping-cart {
    padding-top: 80px;
    padding-bottom: 80px;
    background: white;
}

.breadcrumb-section {
    display: flex;
    background: #174025;
    align-items: center;
    padding: 45px 0 40px;
}

.shoping__cart__table table tbody tr td.shoping__cart__item {
    width: 630px;
    text-align: left;

    
}
.shoping__cart__table table tbody tr td {
    padding-top: 30px;
    padding-bottom: 30px;
    border-bottom: 1px solid #CCD1D1 ;

    
}

.icon_close{
    font-family: 'ElegantIcons';
    speak: none;
    font-style: normal;
    font-weight: normal;
    font-variant: normal;
    text-transform: none;
    line-height: 1;
    -webkit-font-smoothing: antialiased;
    background: red;
 
}
    

</style>

   </head>
   <body>
      <div class="hero_area">
         <!-- header section strats -->
         @include('home.header')
         <!-- end header section -->
      <!-- Breadcrumb Section Begin -->
      <section class="breadcrumb-section set-bg" data-setbg="">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Shopping Cart</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.html">Home</a>
                            <span>Shopping Cart</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

            @if(session()->has('message'))
         <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
            {{ session()->get('message') }}
         </div>
         @endif
            <section class="shoping-cart spad">
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
                                    <th>Total</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>

                            <?php $totalprice = 0; ?>
                  @foreach($cart as $cart)


                                <tr>
                                    <td class="shoping__cart__item">
                                        <img height="100" width="180" src="/product/{{$cart->image}}">
                                        <h5>{{$cart->product_title}}</h5>
                                    </td>
                                    <td class="shoping__cart__price">
                                    ฿{{$cart->price}}
                                    </td>
                                    <td class="shoping__cart__quantity">
                                        <div class="quantity">
                                            <div class="pro-qty">
                                                <input type="text" value="{{$cart->quantity}}">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="shoping__cart__total">
                                    ฿{{$cart->price}}
                                    </td>
                                    <td class="shoping__cart__item__close">
                                  <a class="icon_close" onclick="return confirm('Are you sure to remove this product?')" href="{{url('/remove_cart',$cart->id)}}"></a>
                                   </td>
                                
                                <?php $totalprice = $totalprice + $cart->price ?>
                  @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__btns">
                        <a href="{{url('products')}}" class="primary-btn cart-btn">CONTINUE SHOPPING</a>
                        <a href="{{url('show_order')}}" class="primary-btn cart-btn cart-btn-right"><span class="icon_loading"></span>
                            Order</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="shoping__continue">
                        <div class="shoping__discount">
                            <h5>Discount Codes</h5>
                            <form action="#">
                                <input type="text" placeholder="Enter your coupon code">
                                <button type="submit" class="site-btn">APPLY COUPON</button>
                            </form>
                        </div>
                    </div>
                </div>

            <div class="col-lg-6">
                    <div class="shoping__checkout">
                        <h5>Cart Total</h5>
                        <ul>
                            <li>Subtotal <span>$454.98</span></li>
                            <li>Total <span>฿{{$totalprice}}</span></li>
                        </ul>
                        <a href="{{url('stripe',$totalprice)}}" class="primary-btn">Pay Using Card</a>
                        
                
                    </div>
                    
                    <a href="{{url('cash_order')}}" class="primary-btn">Cash On Delivery</a>
                </div>



         </div>
      </div>
     
      <!-- jQuery -->
      <script src="home/js/jquery-3.4.1.min.js"></script>
      <!-- Popper.js -->
      <script src="home/js/popper.min.js"></script>
      <!-- Bootstrap.js -->
      <script src="home/js/bootstrap.js"></script>
      <!-- Custom.js -->
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




