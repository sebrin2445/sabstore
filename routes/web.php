<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\HomeController;

use App\Http\Controllers\AdminController;

use App\Http\Controllers\PaymentController;





/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


route::get('/',[HomeController::class,'index']);
Route::middleware([
    'auth:sanctum','verified'])->get('/dashboard',function(){
        return view('dashboard'); })->name('dashboard');
    
  

route::get('/redirect',[HomeController::class,'redirect'])->middleware('auth','verified');

route::get('/view_category',[AdminController::class,'view_category']);

route::get('/category_user',[HomeController::class,'category_user']);


route::post('/add_category',[AdminController::class,'add_category']);

route::get('/delete_category/{id}',[AdminController::class,'delete_category']);

route::get('/view_product',[AdminController::class,'view_product']);

route::get('/view_products',[AdminController::class,'view_product']);

route::post('/add_product',[AdminController::class,'add_product']);

route::get('/show_product',[AdminController::class,'show_product']);

route::get('/delete_product/{id}',[AdminController::class,'delete_product']);

route::get('/delete_contact/{id}',[HomeController::class,'delete_contact']);

route::get('/update_product/{id}',[AdminController::class,'update_product']);

route::get('/update_contact/{id}',[HomeController::class,'update_contact']);

route::post('/update_product_confirm/{id}',[AdminController::class,'update_product_confirm']);

route::post('/update_contact_confirm/{id}',[HomeController::class,'update_contact_confirm']);

route::get('/product_detail/{id}',[HomeController::class,'product_detail']);

route::get('/show_cart',[HomeController::class,'show_cart']);

route::get('/about',[HomeController::class,'about']);

route::get('/category_detail/{category_name}',[HomeController::class,'category_detail']);

route::get('/remove_cart/{id}',[HomeController::class,'remove_cart']);

route::get('/our_product',[HomeController::class,'our_product']);

route::get('/orders_table',[AdminController::class,'orders_table']);

route::post('/add_cart/{id}',[HomeController::class,'add_cart']);

route::get('/cash_order',[HomeController::class,'cash_order']);

route::get('/delivered/{id}',[AdminController::class,'delivered']);


Route::post('pay', 'App\Http\Controllers\ChapaController@initialize')->name('pay');

// The callback url after a payment
Route::get('callback/{reference}', 'App\Http\Controllers\ChapaController@callback')->name('callback');

route::get('/search',[AdminController::class,'searchdata']);

route::get('/contact',[HomeController::class,'contact']);

Route::post('/pay', [PaymentController::class, 'payWithTelebirr'])->name('pay');

route::get('/searchPro',[HomeController::class,'searchPro']);

route::get('/usersell',[HomeController::class,'usersell']);

route::get('/stripe/{totalprice}',[HomeController::class,'stripe']);

route::get('/show_user_product',[HomeController::class,'show_user_product']);

route::get('/user_contact',[HomeController::class,'user_contact']);

route::get('/show_info',[HomeController::class,'show_info']);

route::post('/add_user_product',[HomeController::class,'add_user_product']);

route::post('/add_user_contact',[HomeController::class,'add_user_contact']);

route::get('/user_contact_detail/{user_id}',[HomeController::class,'user_contact_detail']);

Route::get('/chatboxbyname/{name}', [HomeController::class, 'chatboxbyname'])->name('chat.messages');





Route::post('stripe/{totalprice}', [HomeController::class,'stripePost'])->name('stripe.post');
use App\Http\Controllers\ChatController;

Route::post('/send-message', [HomeController::class, 'add_message'])->name('send.message');

Route::get('/chatbox/{recipient_id}', [HomeController::class, 'chat_messages'])->name('chat.messages');
?>