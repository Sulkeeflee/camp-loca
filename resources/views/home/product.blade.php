<style>
  .product_section {
    background-image: url("");
    background-size: cover;
    background-position: center;
    padding: 50px 0; /* Adjust padding as needed */
    background-color: #F7F9F9 ;
  
    
  }
  /* Styling for the search form */
 

  .search-button:hover {
    background: black;
  }

  .heading h2 {
    font-weight: bold; /* Add bold font weight */
    text-align: center; /* Center align the text */
    margin: 20px 0; /* Adjust margin as needed */
    color: #284334;
    font-size: 50px;
    font-family: Arial, sans-serif;
   
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

               <form style="display: flex; align-items: center;">
    <input style="width: 1000px; padding: 10px; border: 2px solid #ccc; border-radius: 5px;" type="text" name="search" placeholder="Search for Something">
    <input type="submit" value="Search" style="background-color: #4CAF50; color: white; border: none; border-radius: 5px; padding: 10px; cursor: pointer;">
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


                        <h6 style="color: black">
                       
                        
                        ฿{{$products->discount}}
                        </h6>

                        <h6 style="text-decoration: line-through; color:black">
                        
                        
                           ฿{{$products->price}}
 
                        </h6>

                        @else
                     

                        <h6 style="color: black">
                        
                        
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