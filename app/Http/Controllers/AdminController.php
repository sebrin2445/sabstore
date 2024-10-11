<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use App\Models\Category;
use App\Models\Product;
use App\Models\Order;
use App\Models\productss;
use App\Models\UserContact;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function view_category(){

        $data=category::all();
        return view('admin.category',compact('data'));
    }
    
    public function add_category( Request $request){
       $data=new category;

       $data->category_name=$request->category;
       $data->save();
       return redirect()->back()->with('message','Category Added SuccessFully');
    }

    public function delete_category($id){
        $data=category::find($id);

        $data->delete();

        return redirect()->back()->with('message','Category deleted successfully');
    }

    public function view_product(){
        $contact=UserContact::all();
        $category=category::all();
        return view('admin.product',compact('category','contact'));
        return view('admin.product');
    }
    public function add_product(Request $request){
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
    public function show_product(){
$contact=UserContact::all();
        $product=productss::all();
        return view('admin.show_product',compact('product','contact'));
        return view('admin.show_product');

    }

    public function delete_product($id){
        $product=productss::find($id);

        $product->delete();

        return redirect()->back()->with('message','Product deleted successfully');
    }

    public function update_product($id){


        $category=category::all();
        $contact=UserContact::all();
        $product=productss::find($id);


       return view('admin.update_product',compact('product','category','contact'));
    }
    public function update_product_confirm(Request $request, $id){
$product=productss::find($id);
$contact=UserContact::all();
$product->title=$request->title;
$product->description=$request->description;
$product->price=$request->price;
$product->discount_price=$request->dis_price;
$product->catagory=$request->category;
$product->quantity=$request->quantity;
$image=$request->image;

if($image){


    $imagename=time().'.'.$image->getClientOriginalExtension();
    $request->image->move('product',$imagename);
    $product->image=$imagename;

}
$product->save();


return redirect()->back()->with('message','Product Updated SuccessFully');

    }
    public function orders_table(){
        $order=Order::all();
        $contact=UserContact::all();

        return view('admin.orders_table',compact('order','contact'));
    }
    public function delivered($id){
        $order=Order::find($id);
        $order->delivery_status="delivered";
        $order->save();
        return redirect()->back();
    }
    public function searchdata(Request $request){
$searchText=$request->search;
$order=Order::where('name','LIKE',"%$searchText%")->orWhere('product_title','LIKE',"%$searchText%")->get();
return view('admin.orders_table',compact('order'));
    }
}
