<style>
  .product_section {
    background-image: url("");
    background-size: cover;
    background-position: center;
    padding: 50px 0; /* Adjust padding as needed */
    background-color:#F2F4F4;
  
    
  }
  /* Styling for the search form */
 
  .heading h2 {
    font-weight: bold; /* Add bold font weight */
    text-align: center; /* Center align the text */
    margin: 20px 0; /* Adjust margin as needed */
    color: #284334;
    font-size: 50px;
    font-family: Arial, sans-serif;
   
  }

  .product_section .options .option1 {
    background-color:#174025;
    border: 1px solid #b2b2b2;
    color: #ffffff;
}

.search-form {
  align-items: center;
}


.search-input {
  width: 1200px;
  padding: 15px;
  border: 2px solid #ccc;
   background-color: transparent;
  border: 3px solid #F2A341;
  border-radius: 50px;
  -webkit-transition: all .15s ease-in-out;
  transition: all .15s ease-in-out;
  color: #174025;

}


form input[type="submit"] {
    border: none;
    padding: 15px 45px;
    width: auto;
    font-size: 16px;
    text-transform: capitalize;
    line-height: normal;
    margin: 0 auto;
    display: flex;
    background: #dd1616;
    color: #fff;
    font-weight: 700;
    transition: ease all 0.1s;
    background-color:#F2A341;
    border-radius: 100px;
}

form input[type="submit"]:hover {
    background-color: #5D794E; 
 
}

.product_section .box {
    position: relative;
    margin-top: 25px;
    padding: 35px 35px;
    background-color: #E5E8E8;
    -webkit-transition: all .3s;
    transition: all .3s;
    overflow: hidden;
    box-shadow: 5px 5px 5px -5px rgba(0,0,0,.2);
    border: solid #ffff 10px;
    border-radius: 0;
}

.product_section .box:hover  {
    position: relative;
    margin-top: 25px;
    padding: 35px 35px;
    background-color: #F2F3F4 ;
    -webkit-transition: all .3s;
    transition: all .3s;
    overflow: hidden;
    box-shadow: 5px 5px 5px -5px rgba(0,0,0,.2);
    border: solid #5E7855 10px;
    border-radius: 0;
}

.form_sub input[type="email"] + input[type="submit"] {
    position: absolute;
    right: 0;
    background: #f7444e;
    color: #fff;
    border: none;
    top: 0px;
    font-size: 14px;
    height: 48px;
    font-weight: 600;
    padding: 0 15px;
    border-radius: 0px;
}





</style>




<section class="product_section layout_padding">
         <div class="container">
            <div class="heading">
               <h2>
                  Our <span>products</span>
               </h2>

               <br><br>

               <div>

              <form action="{{url('product_search')}}" method="GET">

               @csrf

               <form class="search-form">
               <input class="search-input" type="text" name="search" placeholder="Search for Something">
              <input class="search-button" type="submit" value="Search">
          </form>

            </div>
            <div class="row">

            @foreach($product as $products)

               <div class="col-sm-6 col-md-4 col-lg-4">
                  <div class="box">
                     <div class="option_container">
                        <div class="options">
                           <a href="{{url('product_details',$products->id)}}" class="option1">
                           Product Details
                           </a>
                           
                           <form action="{{url('add_cart',$products->id)}}" method="Post">
                            
                              @csrf

                              <div class=" row" >

                                 <div class="col-md-4">
                                  <input type="number" name="quantity" value="1" min="1" style="width: 100px">
                                 </div>
                        

                              <div class="col-md-4">

                              <input type="submit"value="Add To Cart" >
                              
                               </div>
                               </div>
                           </form>


 
                        </div>
                     </div>
                     <div class="img-box">
                        <img src="product/{{$products->image}}" alt="">
                     </div>
                     <div class="detail-box">
                        <h5>
                        {{$products->title}}
                        </h5>

                        @if($products->discount!=null)


                        <h6 style="color: red">
                        Discount price
                        <br>
                        ฿{{$products->discount}}
                        </h6>

                        <h6 style="text-decoration: line-through; color:blue">
                         price
                        <br>
                           ฿{{$products->price}}
 
                        </h6>

                        @else
                     

                        <h6 style="color: blue">
                        price
                        <br>
                           ฿{{$products->price}}
                        </h6>

                        @endif

                        

                     </div>
                  </div>
               </div>
             
               @endforeach
               <span style="padding-top: 20px;">

               {!! $product->withQueryString()->links() !!}

              </span>
               
         </div>
      </section>