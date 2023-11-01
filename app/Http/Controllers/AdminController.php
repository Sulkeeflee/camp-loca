<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Catagory;
use App\models\product;
use App\models\campground;
use App\models\oder;
use Illuminate\Support\Facades\Auth;
use PDF;
use App\Models\catagory_campground;

class AdminController extends Controller
{
    public function view_catagory()
    {

    
        if(Auth::id())
        {

            $data=catagory::all();

            return view('admin.catagory',compact('data'));

        }
         
        else
        {

            return redirect('login');

        }
                 
    }

    public function add_catagory(Request $request)
    {

        $data=new catagory;
        
        $data->catagory_name=$request->catagory;
        
        $data->save();
        
        return redirect()->back()->with('message','Catagory Added Successfully');

        
    }

    public function delete_catagory ($id)
    {

        $data=catagory::find($id);

        $data->delete();

        return redirect()->back()->with('message','Catagory Deleted Successfully') ;

    }   

    public function view_product()
    {                
                                                                   
       $catagory=catagory::all(); 

       return view('admin.product',compact('catagory'));
    }

    public function add_product(Request $request)
    {

        $product=new product;
        
        $product->title=$request->title;
        $product->description=$request->description;
        $product->price=$request->price;
        $product->quantity=$request->quantity;
        $product->discount=$request->dis_price;
        $product->catagory=$request->catagory;

        
        $image = $request->image;
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move('product', $imagename);

        $product->image = $imagename;
   
  
        $product->save();
        
        return redirect()->back()->with('message','Product Added Successfully');

        
    }


    public function show_product()
    {
        $product=product::all ();
        return view('admin.show_product',compact('product'));
    }


    public function delete_product($id)
    {
      $product=product::find($id);
      $product->delete() ;
      return redirect()->back()->with('message','Product Deleted Successfully');
    }
    
    public function update_product($id)
    {
        $product = product::find($id);
        $catagory = catagory::all();
        return view('admin.update_product', compact('product', 'catagory'));
    }
    
    
    public function update_product_confirm( Request $request,$id)
    {
 

        if(Auth::id())
        {

            $product=product::find($id);

            $product->title=$request->title;
            $product->description=$request->description;
            $product->price=$request->price;
            $product->discount=$request->dis_price;
            $product->catagory=$request->catagory;
            $product->quantity=$request->quantity;
      
      
            $image=$request->image;
      
            if($image)
            {
              $imagename=time().'.'.$image->getClientOriginalextension () ;
              $request->image->move('product',$imagename);
              $product->image=$imagename;
        
            }
           
            $product->save() ;
            return redirect()->back()->with('message','Product updated Successfully');
          

        }
         
        else
        {

            return redirect('login');

        }

    }


      

    public function order()
    {
        $order=oder:: all( ) ;
       return view('admin.order',compact('order' ));


    }

    public function delivered($id)

    {

    $order=oder::find($id) ;

    $order->delivery_status="delivered";

    $order->payment_status='Paid' ;

    $order->save();

    return redirect()->back();

    }

    public function print_pdf($id)
    {
       
    $order=oder::find($id) ;

    $pdf=PDF::loadView('admin.pdf',compact('order'));

    return $pdf->download('order_details.pdf') ;
    
    }
 

   

    public function searchdata(Request $request)
    {
        $searchText=$request->search;

        $order=oder::where('name','LIKE',"%$searchText%")->orWhere('phone', 'LIKE', "%$searchText%")->orWhere('product_title', 'LIKE', "%$searchText%")->get();

        return view('admin.order',compact('order'));

    }



    public function view_campground()
    {                
                                                                   
       $catagory=catagory_campground::all(); 

       return view('admin.campground',compact('catagory'));
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


    public function show_campground()
    {
        $campground=campground::all ();
        return view('admin.show_campground',compact('campground'));
    }


    
    public function delete_campground($id)
    {
        
      $campground=campground::find($id);
      $campground->delete() ;
     
      
      
        return redirect()->back()->with('message','campground Deleted Successfully');
      
    
    
    }
    
    public function update_campground($id)
    {
        $campground=campground::find($id);
        $catagory=catagory_campground::all();
        return view('admin.update_campground', compact('campground', 'catagory'));
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

    public function catagory_campground()
    {

    
        if(Auth::id())
        {

            $data=catagory_campground::all();

            return view('admin.catagory_campground',compact('data'));

        }
         
        else
        {

            return redirect('login');

        }
                 
    }


    public function add_catagory_campground(Request $request)
    {

        $data=new catagory_campground;
        
        $data->catagory_name=$request->catagory_campground;
        
        $data->save();
        
        return redirect()->back()->with('message','Catagory Added Successfully');

        
    }

    public function delete_catagory_campground ($id)
    {

        $data=catagory_campground::find($id);

        $data->delete();

        return redirect()->back()->with('message','Catagory Deleted Successfully') ;

    }   


}



