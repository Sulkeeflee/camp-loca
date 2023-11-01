<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

use App\Models\Product;

use App\Models\Cart;

use App\Models\Oder;

use App\Models\Catagory;

use Session; 

use Stripe;



class HomeController extends Controller
{

    public function index()
    {  

        $product=Product::paginate(6);
        return view('home.userpage',compact('product'));
    }
        
    public function redirect()
    {
        $usertype=Auth::user()->usertype;

        if($usertype=='1')
        {

            $total_product=product::all()->count();

            $total_order=product::all()->count();

            $total_user=product::all()->count();

            $order=oder::all();

            $total_revenue=0;

            foreach ($order as $order)

            { 

                $total_revenue=$total_revenue + $order->price;

            }


            $total_delivered=oder::where('delivery_status','=','delivered')->get()->count();

            $total_processing=oder::where('delivery_status','=','processing')->get()->count();

 


            return view('admin.home',compact('total_product','total_order','total_user','total_revenue','total_delivered','total_processing'));
        }
        else
            {
                $product=Product::paginate(6);
                return view('home.userpage',compact('product'));
            }
    }
    public function product_details($id)
    {  

        $product=product:: find ($id) ;
        return view('home.product_details',compact('product'));          
    
    }
    public function add_cart(Request $request,$id)
     {
        if (Auth::id())
        { 

            $user=Auth::user();

            $userid=$user->id;

            $product=product::find($id);

            $product_exist_id=cart::where('Product_id','=',$id)->where('user_id', '=' ,$userid)->get('id')->first();

            if($product_exist_id)
            {

                $cart=cart::find($product_exist_id)->first();

                $quantity=$cart->quantity;

                $cart->quantity=$quantity + $request->quantity;

                if($product->discount!=null)

                {
                    $cart->price=$product->discount * $cart->quantity;
                }
    
                else
    
                {
                    $cart->price=$product->price * $cart->quantity; 
                }

                $cart->save();

                return redirect()->back();


            }

            else

            {
                
            $cart=new cart;
            $cart->name=$user->name;
            $cart->email=$user->email;
            $cart->phone=$user->phone;
            $cart->address=$user->address;
            $cart->user_id=$user->id;
           

            $cart->Product_title=$product->title;

            if($product->discount!=null)

            {
                $cart->price=$product->discount * $request->quantity;
            }

            else

            {
                $cart->price=$product->price * $request->quantity; 
            }

            $cart->image=$product->image;
            $cart->Product_id=$product->id;
            $cart->quantity=$request->quantity;

            $cart->save();

            return redirect()->back();



            }

        





        }
        
        else

        {
            return redirect('login');
        }
        
    }

    public function show_cart()
    {

        if(Auth::id())

        {
            $id=Auth::user()->id; 
            $cart=cart::where('user_id','=',$id)->get();
            return view('home.showcart',compact('cart'));
        }

        else
        {
            return redirect('login');
        }

    }

    public function remove_cart($id)
    {
        $cart=cart::find($id);

        $cart->delete();

        return redirect()->back();
    }
    
    public function cash_order()
    {
        $user=Auth::user();

        $userid=$user->id;

        $data=cart::where('user_id','=',$userid)->get();
        

        foreach($data as $data)
{
       $order=new Oder;

       $order->name=$data->name;

       $order->email=$data->email;

       $order->phone=$data->phone;

       $order->address=$data->address;

       $order->user_id=$data->user_id;

       $order->product_title=$data->product_title;

       $order->price=$data->price;

       $order->quantity=$data->quantity;

       $order->image=$data->image;

       $order->product_id=$data->Product_id;

       $order->payment_status='cash on delivery' ;

       $order->delivery_status='processing' ;

       $order ->save();

       $cart_id=$data->id;
       $cart=cart::find($cart_id) ;
       $cart->delete();

     }

     return redirect()->back()->with('message','We have Received
     your  Order. We will with you soon...' ) ;


         }

         public function stripe($totalprice)
         
         {

         return view('home.stripe', compact('totalprice'));


        }


        public function stripePost(Request $request,$totalprice)
    {

        
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
    
        Stripe\Charge::create ([
                "amount" => $totalprice * 100,
                "currency" => "THB",
                "source" => $request->stripeToken,
                "description" => "Thanks for payment."
            ]);


            $user=Auth::user();

            $userid=$user->id;
    
            $data=cart::where('user_id','=',$userid)->get();
            
    
            foreach($data as $data)
    {
           $order=new Oder;
    
           $order->name=$data->name;
    
           $order->email=$data->email;
    
           $order->phone=$data->phone;
    
           $order->address=$data->address;
    
           $order->user_id=$data->user_id;
    
           $order->product_title=$data->product_title;
    
           $order->price=$data->price;
    
           $order->quantity=$data->quantity;
    
           $order->image=$data->image;
    
           $order->product_id=$data->Product_id;
    
           $order->payment_status='Paid' ;
    
           $order->delivery_status='processing' ;
    
           $order ->save();
    
           $cart_id=$data->id;
           $cart=cart::find($cart_id) ;
           $cart->delete();
    
         }
      
        Session::flash('success','Payment successful!');
              
        return back();
    }


       public function show_order()
       {

        if(Auth::id())
        {
            $user=Auth::user();

            $userid=$user->id;

            $order=oder::where('user_id','=',$userid)->get();


            return view('home.order',compact('order'));
        }

        else

        {
            return redirect('login');
        }

       }


       public function cancel_order($id)

       {

        $order=oder::find($id);

        $order->delivery_status='You canceled the order';
 
        $order->save();
 
        return redirect()->back();

       }

       public function product()

       {

        $product=Product::paginate(10);
        $catagory=catagory::all();
       
        return view( 'home.all_product',compact('product', 'catagory'));

       }

     

       public function product_search(Request $request)
       {
        $serach_text=$request->search;
     
        $product=product::where('title','LIKE',"%$serach_text%")->orWhere('catagory','LIKE',"$serach_text")->paginate(10);
       
        return view('home.userpage', compact('product'));
       }

     
   
    

    
}
    
