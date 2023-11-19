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
      <link rel="shortcut icon" href="/images/logo1.jpg" type="">
      <title>camploca</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="{{asset('home/css/bootstrap.css')}}" />
      <!-- font awesome style -->
      <link href="{{asset('home/css/font-awesome.min.css')}}" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="{{asset('home/css/style.css')}}" rel="stylesheet" />
      <!-- responsive style -->
      <link href="{{asset('home/css/responsive.css')}}" rel="stylesheet" />



      <style type="text/css">



      /* Style the container for the entire content */
.row {
  margin: 150px;
}

.starability-result {
  position: relative;
  width: 150px;
  height: 30px;
  background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAA8CAMAAABGivqtAAAAxlBMVEUAAACZmZn2viTHuJ72viOampqampr1viSampr3vySampqdnZ34wiX1vSSampr1vSOZmZmampr1viT2vSOampr2viT2viSampr2viSampr2vyX4vyWbm5v3vSSdnZ32wSadnZ36wCWcnJyZmZn/wSr/2ySampr2vSP2viSZmZn2vSSZmZn2vST2viSampr2viSbm5ubm5uZmZn1vSSampqbm5v2vSWampqampr3vSf5wiT5vyagoKD/xCmkpKT/yCSZmZn1vSO4V2dEAAAAQHRSTlMA+vsG9fO6uqdgRSIi7+3q39XVqZWVgnJyX09HPDw1NTAwKRkYB+jh3L6+srKijY2Ef2lpYllZUU5CKigWFQ4Oneh1twAAAZlJREFUOMuV0mdzAiEQBmDgWq4YTWIvKRqT2Htv8P//VJCTGfYQZnw/3fJ4tyO76KE0m1b2fZu+U/pu4QGlA7N+Up5PIz9d+cmkbSrSNr9seT3GKeNYIyeO5j16S28exY5suK0U/QKmmeCCX6xs22hJLVkitMImxCvEs8EG3SCRCN/ViFPqnq5epIzZ07QJJvkM9Tkz1xnkmXbfSvR7f4H8AtXBkLGj74mMvjM1+VHZpAZ4LM4K/LBWEI9jwP71v1ZEQ6dyvQMf8A/1pmdZnKce/VH1iIsdte4U8VEtY23xOujxtFpWDgKbfjD2YeEhY0OzfjGeLyO/XfnNpAcmcjDwKOXRfU1IyiTRyEkaiz67pb9oJHJb9vVqKfgjLBPyF5Sq9T0KmSUhQmtiQrJGPHVi0DoSabj31G2gW3buHd0pY85lNdcCk8xlNDPXMuSyNiwl+theIb9C7RLIpKvviYy+M6H8qGwSAp6Is19+GP6KxwnggJ/kq6Jht5rnRQA4z9zyRRaXssvyqp5I6Vutv0vkpJaJtnjpz/8B19ytIayazLoAAAAASUVORK5CYII=");
  font-size: 0.1em;
  color: transparent;
}

.starability-result:after {
  content: " ";
  position: absolute;
  left: 0;
  height: 30px;
  background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAA8CAMAAABGivqtAAAAxlBMVEUAAACZmZn2viTHuJ72viOampqampr1viSampr3vySampqdnZ34wiX1vSSampr1vSOZmZmampr1viT2vSOampr2viT2viSampr2viSampr2vyX4vyWbm5v3vSSdnZ32wSadnZ36wCWcnJyZmZn/wSr/2ySampr2vSP2viSZmZn2vSSZmZn2vST2viSampr2viSbm5ubm5uZmZn1vSSampqbm5v2vSWampqampr3vSf5wiT5vyagoKD/xCmkpKT/yCSZmZn1vSO4V2dEAAAAQHRSTlMA+vsG9fO6uqdgRSIi7+3q39XVqZWVgnJyX09HPDw1NTAwKRkYB+jh3L6+srKijY2Ef2lpYllZUU5CKigWFQ4Oneh1twAAAZlJREFUOMuV0mdzAiEQBmDgWq4YTWIvKRqT2Htv8P//VJCTGfYQZnw/3fJ4tyO76KE0m1b2fZu+U/pu4QGlA7N+Up5PIz9d+cmkbSrSNr9seT3GKeNYIyeO5j16S28exY5suK0U/QKmmeCCX6xs22hJLVkitMImxCvEs8EG3SCRCN/ViFPqnq5epIzZ07QJJvkM9Tkz1xnkmXbfSvR7f4H8AtXBkLGj74mMvjM1+VHZpAZ4LM4K/LBWEI9jwP71v1ZEQ6dyvQMf8A/1pmdZnKce/VH1iIsdte4U8VEtY23xOujxtFpWDgKbfjD2YeEhY0OzfjGeLyO/XfnNpAcmcjDwKOXRfU1IyiTRyEkaiz67pb9oJHJb9vVqKfgjLBPyF5Sq9T0KmSUhQmtiQrJGPHVi0DoSabj31G2gW3buHd0pY85lNdcCk8xlNDPXMuSyNiwl+theIb9C7RLIpKvviYy+M6H8qGwSAp6Is19+GP6KxwnggJ/kq6Jht5rnRQA4z9zyRRaXssvyqp5I6Vutv0vkpJaJtnjpz/8B19ytIayazLoAAAAASUVORK5CYII=");
  background-position: 0 -30px;
}

.starability-result[data-rating="5"]::after {
  width: 150px;
}

.starability-result[data-rating="4"]::after {
  width: 120px;
}

.starability-result[data-rating="3"]::after {
  width: 90px;
}

.starability-result[data-rating="2"]::after {
  width: 60px;
}

.starability-result[data-rating="1"]::after {
  width: 30px;
}

.starability-heart {
  display: block;
  position: relative;
  width: 150px;
  min-height: 60px;
  padding: 0;
  border: none;
  will-change: contents;
}

.starability-heart > input {
  position: absolute;
  margin-right: -100%;
  opacity: 0;
}

.starability-heart > input:checked ~ label,
.starability-heart > input:focus ~ label {
  background-position: 0 0;
}

.starability-heart > input:checked + label,
.starability-heart > input:focus + label {
  background-position: 0 -30px;
}

.starability-heart > input[disabled]:hover + label {
  cursor: default;
}

.starability-heart > input:not([disabled]):hover ~ label {
  background-position: 0 0;
}

.starability-heart > input:not([disabled]):hover + label {
  background-position: 0 -30px;
}

.starability-heart > input:not([disabled]):hover + label::before {
  opacity: 1;
}

.starability-heart > input:focus + label {
  outline: 1px dotted #999;
}

.starability-heart .starability-focus-ring {
  position: absolute;
  left: 0;
  width: 100%;
  height: 30px;
  outline: 2px dotted #999;
  pointer-events: none;
  opacity: 0;
}

.starability-heart > .input-no-rate:focus ~ .starability-focus-ring {
  opacity: 1;
}
.starability-heart > label {
  position: relative;
  display: inline-block;
  float: left;
  width: 30px;
  height: 30px;
  font-size: 0.1em;
  color: transparent;
  cursor: pointer;
  background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAA8CAMAAABGivqtAAAAxlBMVEUAAACZmZn2viTHuJ72viOampqampr1viSampr3vySampqdnZ34wiX1vSSampr1vSOZmZmampr1viT2vSOampr2viT2viSampr2viSampr2vyX4vyWbm5v3vSSdnZ32wSadnZ36wCWcnJyZmZn/wSr/2ySampr2vSP2viSZmZn2vSSZmZn2vST2viSampr2viSbm5ubm5uZmZn1vSSampqbm5v2vSWampqampr3vSf5wiT5vyagoKD/xCmkpKT/yCSZmZn1vSO4V2dEAAAAQHRSTlMA+vsG9fO6uqdgRSIi7+3q39XVqZWVgnJyX09HPDw1NTAwKRkYB+jh3L6+srKijY2Ef2lpYllZUU5CKigWFQ4Oneh1twAAAZlJREFUOMuV0mdzAiEQBmDgWq4YTWIvKRqT2Htv8P//VJCTGfYQZnw/3fJ4tyO76KE0m1b2fZu+U/pu4QGlA7N+Up5PIz9d+cmkbSrSNr9seT3GKeNYIyeO5j16S28exY5suK0U/QKmmeCCX6xs22hJLVkitMImxCvEs8EG3SCRCN/ViFPqnq5epIzZ07QJJvkM9Tkz1xnkmXbfSvR7f4H8AtXBkLGj74mMvjM1+VHZpAZ4LM4K/LBWEI9jwP71v1ZEQ6dyvQMf8A/1pmdZnKce/VH1iIsdte4U8VEtY23xOujxtFpWDgKbfjD2YeEhY0OzfjGeLyO/XfnNpAcmcjDwKOXRfU1IyiTRyEkaiz67pb9oJHJb9vVqKfgjLBPyF5Sq9T0KmSUhQmtiQrJGPHVi0DoSabj31G2gW3buHd0pY85lNdcCk8xlNDPXMuSyNiwl+theIb9C7RLIpKvviYy+M6H8qGwSAp6Is19+GP6KxwnggJ/kq6Jht5rnRQA4z9zyRRaXssvyqp5I6Vutv0vkpJaJtnjpz/8B19ytIayazLoAAAAASUVORK5CYII=");
  background-repeat: no-repeat;
  background-position: 0 -30px;
}





.starability-heart > label:nth-of-type(5)::before {
  width: 120px;
  left: -120px;
}

.starability-heart > label:nth-of-type(4)::before {
  width: 90px;
  left: -90px;
}

.starability-heart > label:nth-of-type(3)::before {
  width: 60px;
  left: -60px;
}

.starability-heart > label:nth-of-type(2)::before {
  width: 30px;
  left: -30px;
}

.starability-heart > label:nth-of-type(1)::before {
  width: 0px;
  left: 0px;
}



/* Style the carousel container */
.carousel {
  max-width: 100%;
}

/* Style the carousel image */
.carousel-item img {
  max-height: 300px;
  object-fit: cover;
}

/* Style the card */
.card {
  border: 1px solid #ccc;
  border-radius: 5px;
  margin-bottom: 20px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

/* Style the card title and description */
.card-title {
  font-size: 24px;
  margin: 10px 0;
}

.card-text {
  font-size: 16px;
  margin-bottom: 10px;
}

/* Style the list group item */
.list-group-item {
  background-color: #f5f5f5;
}

/* Style the buttons */
.btn {
  margin-right: 10px;
}

.btn-dark {
  background-color: #343a40;
  color: #fff;
}

.btn-danger {
  background-color: #dc3545;
  color: #fff;
}

/* Style the map */
#map {
  width: 100%;
  height: 300px;
}

/* Style the review form */
.starability-heart {
  display: flex;
  align-items: center;
}

.starability-heart input[type="radio"] {
  display: none;
}

.starability-heart label {
  cursor: pointer;
  padding: 5px;
}

.starability-heart label:before {
  content: '\2605'; /* Unicode star character */
}

.validated-form .form-label {
  font-weight: bold;
}

/* Style the submit button */
.validated-form .btn {
  background-color: #343a40;
  color: #fff;
}

/* Style the review card */
.card.mb-3 {
  padding: 10px;
}

.card.mb-3 h5 {
  font-size: 18px;
  margin: 10px 0;
}

.starability-result {
  font-weight: bold;
}

/* Style the delete button in the review card */
.btn-sm.btn-danger {
  background-color: #dc3545;
  color: #fff;
}

/* Add spacing between elements */
.mb-5 {
  margin-bottom: 5rem;
}

/* Media query for responsiveness */
@media (max-width: 768px) {
  .col-md-6 {
    width: 100%;
  }
}

</style>


   </head>
   <body>
      <div class="hero_area">
         <!-- header section strats -->
        @include('home.header')
         <!-- end header section -->

         
      
     
         <div class="row">
    <div class="col-md-6 mb-5">
        <div class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="/campground/{{$campground->image}}"  alt="{{$campground->title}}">
                 
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </a>
        </div>
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">
                    {{$campground->title}}
                </h5>
                <p class="card-text">
                    {{$campground->description}}
                </p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item text-muted">
                    {{$campground->location}}
                </li>
            </ul>
            <div class="card-footer text-muted">
                Featured in: {{$campground->catagory}}
            </div>
            <div class="card-body">
                <a class="card-link btn btn-dark" href="{{url('updatecampground',$campground->id)}}">Edit Campground</a>
                
               
                <form class="d-inline">
                <a class="btn btn-danger" onclick="return confirm('Are You Sure it Delete this')" href="{{url('deletecampground',$campground->id)}}">Delete Campground</a>
                </form>
            </div>

            

            
        </div>
    </div>
    
    <div class="col-md-6">
    <div id="map" class="mb-4" style="width: 100%; height: 400px;">    
  
  </div>
    
    <h2>Leave a Review</h2>


<form class="needs-validation" action="{{ route('reviews.create', ['campgroundId' => $campground->id]) }}" method="POST" novalidate>
    @csrf

    <div class="mt-3">
            <fieldset class="starability-heart">
                <input type="radio" id="no-rate" class="input-no-rate" name="review[rating]" value="1" checked
                    aria-label="No rating." />
                <input type="radio" id="first-rate1" name="review[rating]" value="1" />
                <label for="first-rate1" title="Terrible">1 star</label>
                <input type="radio" id="first-rate2" name="review[rating]" value="2" />
                <label for="first-rate2" title="Not good">2 stars</label>
                <input type="radio" id="first-rate3" name="review[rating]" value="3" />
                <label for="first-rate3" title="Average">3 stars</label>
                <input type="radio" id="first-rate4" name="review[rating]" value="4" />
                <label for="first-rate4" title="Very good">4 stars</label>
                <input type="radio" id="first-rate5" name="review[rating]" value="5" />
                <label for="first-rate5" title="Amazing">5 stars</label>
            </fieldset>
        </div>

    <div class="textarea mb-3">
        <label class="form-label" for="body">Review</label>
        <textarea class="form-control" name="review[body]" id="body" cols="30" rows="3" required></textarea>
        <div class="valid-feedback">
            Looks good!
        </div>
    </div>
    <button class="btn btn-dark">Submit</button>
</form>
    
   
<!-- Display Existing Reviews -->

<!-- Display Existing Reviews -->
<!-- Display Existing Reviews -->
@foreach ($reviews as $review)
    <div class="card mb-3">
        <div class="card-body">
            <h5 class="card-text">{{ $review->user->name }}</h5>
            <p class="starability-result card-text" data-rating="{{ $review->rating }}">Rated: {{ $review->rating }} stars</p>
            <p class="card-text">{{ $review->body }}</p>
            @auth
            <form action="{{ route('reviews.destroy', ['campgroundId' => $campground->id, 'reviewId' => $review->id]) }}" method="POST">
    @csrf
    @method('DELETE')
    <button class="btn btn-sm btn-danger" type="submit">Delete</button>
</form>
            @endauth
        </div>
    </div>
@endforeach





</div>
</div>





 
     
      <div class="cpy_">
         <p class="mx-auto">© 2021 All Rights Reserved By <a href="https://html.design/">Free Html Templates</a><br>
         
            Distributed By <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>
         
         </p>
      </div>


      <script>
        function initMap() {
            var lat = @json($campground['6.513299']);
            var lng = @json($campground['101.298993']);
            var center = { lat: lat, lng: lng };
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 8,
                center: center,
                scrollwheel: false
            });

            var contentString = `
                <strong>{{ $campground['name'] }}<br />
                {{ $campground['location'] }}</strong>
                <p>{{ $campground['description'] }}</p>
            `;

            var infowindow = new google.maps.InfoWindow({
                content: contentString
            });

            var marker = new google.maps.Marker({
                position: center,
                map: map
            });

            marker.addListener('click', function () {
                infowindow.open(map, marker);
            });
        }
    </script>
     <!-- Replace 'YOUR-API-KEY' with your actual Google Maps API key -->
     <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAnmqIj7seNd1MXeLDdxEgUjpNJKJLYRUQ&callback=initMap"></script>
     
      <!-- jQery -->
      <script src="home/js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="home/js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="home/js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="home/js/custom.js"></script>
   </body>
</html>