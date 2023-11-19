<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Campground;
use App\Models\catagory;
use App\Models\catagory_campground;
use App\Models\Review;
use App\Models\product;
use Geocoder\Provider\GoogleMaps\GoogleMaps;
use Geocoder\Query\GeocodeQuery;


class CampgroundController extends Controller
{
    public function campground()

       {

        $campground=campground::paginate(10);
        $catagory=catagory_campground::all();
       
        return view( 'campground.all_campground', compact('campground', 'catagory'));

       }
    
    
    public function campground_detail($id)
    {  

        $campground=campground::find($id) ;
        $product = Product::all();
        $reviews = Review::where('campground_id', $id)->get();

        

       

        return view('campground.campground_detail',compact('campground', 'reviews','product'));          
    
    }

  

    public function view_campground()
    {                
        if(Auth::id())
        {
                                                             
        $catagory=catagory_campground::all(); 

       return view('campground.add_campground',compact('catagory'));

    }
         
    else
    {

        return redirect('login');

    }
    }

    public function add_campground(Request $request)
    {
       
        $campground=new campground;
        
        $campground->title=$request->title;
        $campground->description=$request->description;
        $campground->location=$request->location;
        $campground->catagory=$request->catagory_campground;

         
        
        $image = $request->image;
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move('campground', $imagename);

        $campground->image = $imagename;
  
        $campground->save();
        
        return redirect()->back()->with('message','campground Added Successfully');
   

        
    }

    public function delete_campground($id)
    {
        if(Auth::id())
        {

      $campground=campground::find($id);
      $campground->delete();
     

    return redirect('/campgrounds')->with('message','campground Deleted Successfully');
}
         
else
{
return redirect('login');
}
    }


    
    
    public function update_campground($id)
    {
        if(Auth::id())
        {
        $campground=campground::find($id);
        $catagory=catagory_campground::all();
        return view('campground.update_campground', compact('campground', 'catagory'));
        }
         
          else
        {
        return redirect('login');
        }
    }
    


    public function update_campground_confirm( Request $request,$id)
    {


        if(Auth::id())
       {

            $campground=campground::find($id);

            $campground->title=$request->title;
            $campground->description=$request->description;
            $campground->location=$request->location;        
            $campground->catagory=$request->catagory_campground;
         
      
            $image=$request->image;
      
            if($image)
            {
              $imagename=time().'.'.$image->getClientOriginalextension () ;
              $request->image->move('campground',$imagename);
              $campground->image=$imagename;
        
            }
           
            $campground->save() ;
            return redirect()->back()->with('message','campground updated Successfully');
        }
         
        else
        {

            return redirect('login');

        }

       
    }

    public function geocodeAddress($address)
{
    // Set your Google Maps API key
    $apiKey = config('services.google.maps_api_key');

    // Create a Geocoder instance with the Google Maps provider
    $geocoder = new \Geocoder\Provider\GoogleMaps\GoogleMaps($apiKey);

    try {
        // Geocode the address
        $result = $geocoder->geocodeQuery(GeocodeQuery::create($address));

        // Access the latitude and longitude
        $latitude = $result->first()->getCoordinates()->getLatitude();
        $longitude = $result->first()->getCoordinates()->getLongitude();

        // Use $latitude and $longitude as needed in your application
        // ...

    } catch (\Exception $e) {
        // Handle geocoding errors
        // ...
    }
}




  
}
