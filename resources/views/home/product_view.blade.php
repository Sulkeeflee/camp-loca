

   

              
              
              
              
                <div class="col-lg-9 col-md-7">
                    
                    <div class="filter__item">
                        <div class="row">
                            <div class="col-lg-4 col-md-5">
                                <div class="filter__sort">
                                    <span>Sort By</span>
                                    <select>
                                        <option value="0">Default</option>
                                        <option value="0">Default</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="filter__found">
                                    <h6><span>16</span> Products found</h6>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-3">
                                <div class="filter__option">
                                    <span class="icon_grid-2x2"></span>
                                    <span class="icon_ul"></span>
                                </div>
                            </div>
                        </div>
                    </div>



                    
<section class="product_section layout_padding">
         

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
                     

                        <h6 style="color:  black">
                       
                        
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
                   


                    <div class="product__pagination">
                        <a href="#">1</a>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <a href="#"><i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Section End -->
    


  



