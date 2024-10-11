<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Session;

use Stripe;

     
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Category;

use App\Models\Product;
use App\Models\Carts;
use App\Models\Order;
use App\Models\productss;
use App\Models\UserContact;
use App\Models\Message;

use App\Models\UserProduct;

class HomeController extends Controller
{
    public function index(){
        $productss=productss::paginate(10);
        $category=category::all();

return view('home.userpage',compact('productss','category'));
    }


    public function redirect(){
        $usertype=Auth::user()->usertype;
        $productss=productss::all();
        $product=Product::paginate(10);
        $category=category::all();


        if($usertype=='1'){
            $contact=UserContact::all();
            $total_product=Productss::all()->count();
            $total_order=Order::all()->count();
            $total_user=user::all()->count();
            $order=Order::all();
            $total_revenue=0;
            foreach($order as $order){
                $total_revenue=$total_revenue+$order->price;
            }
            return view('admin.home',compact('total_product','total_order','total_user','total_revenue','contact'));
        } else{
            return view('home.userpage',compact('category','productss'));
        }
    }

    public function product_detail($id){


        $product=productss::all();
        $category=category::all();
        $product=productss::find($id);


       return view('home.product_detail',compact('product','category'));
    }
    public function show_cart(){
        $category=category::all();
        


if(Auth::id()){
    $id=Auth::user()->id;
    $cart=carts::where('user_id','=',$id)->get();
    return view('home.show_cart',compact('cart','category'));

}
else{
    return redirect('login');
}

          }

public function about(){
    $category=Category::all();
    $product=Product::all();
    return view('home.about',compact('category','product'));
}


          public function remove_cart($id){

           $cart=carts::find($id);

           $cart->delete();

           return redirect()->back();
        }

        public function add_cart(Request $request, $id){

            if(Auth::id()){
                $user=Auth::user();
                $product=productss::find($id);
                $cart=new carts;

                $cart->name=$user->name;
                $cart->email=$user->email;
                $cart->phone=$user->phone;
                $cart->address=$user->address;
                $cart->user_id=$user->id;


                $cart->product_title=$product->title;

                if($product->discount_price!=null){
                    $cart->price=$product->discount_price * $request->quantity; 

                }
else{
    $cart->price=$product->price * $request->quantity;

}

                $cart->image=$product->image;
                $cart->product_id=$product->id;
                $cart->quantity=$request->quantity;

$cart->save();
return redirect()->back();



            }
            else{
                return redirect('login');
            }


        }
        public function cash_order(){
            $contact=UserContact::all();
$user=Auth::user();
$userid=$user->id;

$data=carts::where('user_id','=',$userid)->get();

foreach($data as $data){


    $order=new order;

    $order->name=$data->name;
    $order->phone=$data->phone;
    $order->email=$data->email;
    $order->address=$data->address;
    $order->user_id=$data->user_id;
    $order->product_title=$data->product_title;
    $order->price=$data->price;
    $order->quantity=$data->quantity;
    $order->image=$data->image;
    $order->product_id=$data->product_id;

    $order->payment_status='cash on delivery';
    $order->delivery_status='processing';

    $order->save();

    $cart_id=$data->id;

    $cart=carts::find($cart_id);

    $cart->delete();





}

return redirect()->back()->with('message','we have received your order.we will connect with you soon...');
        }



        public function category_detail($category_name){




$category=Productss::where('catagory','=',$category_name)->get();
return view('home.category_detail',compact('category'));
        }

public function our_product(){

    $product=Productss::all();
    $category=Category::all();
    return view('home.our_product',compact('product','category'));
}

public function contact(){
    $category=Category::all();
    $product=Product::all();
    return view('home.contact',compact('product','category'));
}

public function searchPro(Request $request){
    $searchText=$request->searchPro;
    $category=Category::all();
    $product=Productss::where('title','LIKE',"%$searchText%")->orWhere('catagory','LIKE',"%$searchText%")->get();
    return view('home.our_product',compact('product','category'));
        }

        public function usersell(){
            $category=Category::all();
            $contact=UserContact::all();
            

            return view('home.productadd',compact('category','contact'));
        }

    public function add_user_product(Request $request){



    
        
        
        
        
     
      
        $user=Auth::user();
        $userid=$user->id;

      
            $productss=new productss();

            $productss->name=$user->name;
            $productss->phone=$user->phone;
            $productss->email=$user->email;
            $productss->address=$user->address;
            $productss->user_id=$userid;
        
        $productss->title=$request->title;
        $productss->description=$request->description;
        $productss->price=$request->price;
        $productss->quantity=$request->quantity;
        $productss->discount_price=$request->dis_price;
        $productss->catagory=$request->category;

        $image=$request->image;

        $imagename=time().'.'.$image->getClientOriginalExtension();

        $request->image->move('product',$imagename);
        $productss->image=$imagename;
        $productss->save();
        
        return redirect()->back()->with('message','product Added SuccessFully');
   
    }
public function show_user_product(){
    $user=Auth::user();
    $userid=$user->id;
    $product=productss::where('user_id','=',$userid)->get();

    
    $category=Category::all();

    return view('home.show_user_product',compact('category','product'));
  



}

        public function stripe($totalprice){
            $category=Category::all();

return view('home.stripe',compact('totalprice','category'));
        }

       

        public function stripePost(Request $request,$totalprice)
        {
            Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        
            Stripe\Charge::create ([
                    "amount" => $totalprice * 100,
                    "currency" => "usd",
                    "source" => $request->stripeToken,
                    "description" => "Thanks for payment" 
            ]);
            $user=Auth::user();
            $userid=$user->id;
            
            $data=carts::where('user_id','=',$userid)->get();
            
            foreach($data as $data){
            
            
                $order=new order;
            
                $order->name=$data->name;
                $order->phone=$data->phone;
                $order->email=$data->email;
                $order->address=$data->address;
                $order->user_id=$data->user_id;
                $order->product_title=$data->product_title;
                $order->price=$data->price;
                $order->quantity=$data->quantity;
                $order->image=$data->image;
                $order->product_id=$data->product_id;
            
                $order->payment_status='paid';
                $order->delivery_status='processing';
            
                $order->save();
            
                $cart_id=$data->id;
            
                $cart=carts::find($cart_id);
            
                $cart->delete();
            
            
            
            
            
            }
            Session::flash('success', 'Payment successful!');
                  
            return back();
        }
        public function category_user(){

            $data=category::all();
            return view('home.category_user',compact('data'));
        }
        public function user_contact(){
            $category=Category::all();
            return view('home.user_contact',compact('category'));
        }
        public function add_user_contact(Request $request){

     
      
        $user=Auth::user();
        $userid=$user->id;

            $contact=new UserContact();

          
     
            $contact->name=$request->name;
            $contact->phone=$request->phone;
            $contact->email=$request->email;
            $contact->address=$request->address;
            $contact->user_id=$userid;

        $contact->save();
        
        return redirect()->back()->with('message','product Added SuccessFully');
   

        }

        public function user_contact_detail($user_id){
       
$category=Category::all();
$contacts = UserContact::where('user_id', $user_id)->get();
if ($contacts) {
    return view('home.user_contact_detail', compact('contacts','category'));
} else {
    session()->flash('error', 'No contacts found.');
    return view('home.user_contact_detail');
}

                }    public function add_message(Request $request)
                {
                    // Get the currently authenticated user
                    $user = Auth::user();
                    $userId = $user->id;
            
                    // Create a new Message instance
                    $message = new Message();
            
                    // Set the message's properties from the request
                    $message->user_id = $userId;
                    $message->recipient_id = $request->recipient_id; // ID of the recipient
                    $message->message = $request->message;
            
                    // Save the message to the database
                    $message->save();
            
                    // Redirect back with a success message
                    return redirect()->back()->with('message', 'Message sent successfully');
                }
            
                // Retrieve chat messages for the logged-in user
                public function chat_messages($recipient_id)
{
    $userId = Auth::id();

    // Retrieve messages between the logged-in user and the recipient
    $messages = Message::where(function ($query) use ($userId, $recipient_id) {
        $query->where('user_id', $userId)
              ->where('recipient_id', $recipient_id);
    })->orWhere(function ($query) use ($userId, $recipient_id) {
        $query->where('user_id', $recipient_id)
              ->where('recipient_id', $userId);
    })->orderBy('created_at', 'asc')->get();

    // Retrieve recipient information
    $contact=UserContact::all();
    $recipient = UserContact::find($recipient_id);
$category=Category::all();
    // Return the view with messages and recipient data
    return view('home.chatbox', compact('messages', 'recipient','contact','category'));
}

public function chatboxbyname($name){

}


public function show_info(){
    $user=Auth::user();
    $users=$user->id;
    $category=Category::all();
    $contact = UserContact::where('user_id', $users)->get();


    if ($contact) {
        return view('home.show_info', compact('contact','category'));
    } else { 
        return redirect()->back()->with('message','no contact');

    }
}
public function delete_contact($id){
    $contact=UserContact::find($id);

    $contact->delete();

    return redirect()->back()->with('message','Product deleted successfully');
}
public function update_contact($id){


    $category=category::all();
  

    $contact = UserContact::find($id)->get();

    if ($contact) {
        return view('home.update_contact',compact('contact','category'));
    } else { 
        return redirect()->back()->with('message','no contact');

    }

}
public function update_contact_confirm(Request $request, $id){
    $contact=UserContact::find($id);
    
    $contact->name=$request->name;
    $contact->phone=$request->phone;
    $contact->email=$request->email;
    $contact->address=$request->address;
  
    $contact->save();
    
    
    return redirect()->back()->with('message','Contact Updated SuccessFully');
    
        }
        }
