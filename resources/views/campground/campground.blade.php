

  
    
    <style type="text/css">


/* Container for the campground cards */
.card-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
}

/* Individual campground card */
.card {
    width: 100%;
    margin-bottom: 20px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    border: 1px solid #ccc;
    border-radius: 5px;
    overflow: hidden;
}

/* Card image */
.card img {
    width: 100%;
    height: auto;
    object-fit: cover;
}

/* Card title */
.card-title {
    font-size: 1.5rem;
    font-weight: bold;
    margin-top: 10px;
}

/* Card description */
.card-text {
    margin-top: 10px;
}

/* Card location */
.card-text small {
    color: #888;
}

/* "View" button */
.btn-dark {
    background-color: #343a40;
    color: #fff;
    text-decoration: none;
    padding: 8px 16px;
    border-radius: 5px;
    display: inline-block;
    margin-top: 10px;
}

.btn-dark:hover {
    background-color: #212529;
}

/* Media query for responsiveness */
@media (max-width: 768px) {
    .card {
        width: 100%;
    }
}

</style>

     
              
              
              
              
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
                    <div class="row">

                    <div class="card-body">
                <a class="card-link btn btn-warning" href="{{url('viewcampground')}}">Add Campground</a>
               
            </div>
                    
                   
           

                    @foreach($campground as $campground) 
        <div class="card mb-3">
            <div class="row">
                <div class="col-md-4">
                   
                        <img class="img-fluid" height="100" width="180" src="campground/{{$campground->image}}" alt="">
                                              
                           
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">
                        {{$campground->title}}
                        </h5>
                        <p class="card-text">
                        {{$campground->description}}
                        </p>
                        <p class="card-text"><small class="text-muted">
                        {{$campground->location}}
                            </small></p>
                        <a href="{{url('campground_detail',$campground->id)}}" class="btn btn-dark">View</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        

                       
                    </div>

             


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
    
   

  





