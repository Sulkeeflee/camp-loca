<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Campground;
use App\Models\catagory;
use App\Models\catagory_campground;

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
        return view('campground.campground_detail',compact('campground'));          
    
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





  
}
