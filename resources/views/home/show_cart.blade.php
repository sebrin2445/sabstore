<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
    <base href="/public">

      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="images/favicon.png" type="">
      <title>Sab-ecommerce</title>

      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="home/css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="home/css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="home/css/responsive.css" rel="stylesheet" />
   <style>
      body{
         background-color: #dfb6b2;
      }
    .center{
        margin: auto;
        width: 70%;
        text-align: center;
        padding: 30px;
    }
    table,th,td{
        display:flexbox;
        border: 5px solid #522b58;
    }
    .th_deg{
        font-size: 30px;
        padding: 5px;
        background: skyblue;
    }
    .imgg{
        display: flex;
        object-fit:contain;
    }
    .total_deg{
        font-size:20px;
        padding: 40px;
    }
    
table{
    display: flex;
    align-items: center;
    justify-content: center;
}
 
        
 
   </style>
   
    </head>
   <body>
      <div class="hero_area">
         <!-- header section strats -->
        @include('home.header')
      
        <div class="main-panel">
    <div class="content-wrapper">

    @if(session()->has('message'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session()->get('message') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
    </div>
        </div>

<div class="center">
    <table>
<tr>  
<th class="namee" ><b class="name">Product Title</b></p></th>
<th class="namee" ><b class="name">Product Quantity</b></p></th>
<th class="namee" ><b class="name">Price</b></p></th>
<th class="namee" ><b class="name">Image</b></p></th>
<th class="namee" ><b class="name">Action</b></p></th>

 
</tr>

        <?php $totalPrice=0; ?>


@foreach($cart as $cart)

<tr>
<td class="namee" ><b class="name">{{$cart->product_title}}</b></p></td>
<td class="namee" ><b class="name">{{$cart->quantity}}</b></p></td>
<td class="namee" ><b class="name">{{$cart->price}}ETB</b></p></td>
<td> <img  class=" imgg" src="/product/{{$cart->image}}" alt="" style="width: 200px; height: 200px;"> </td>

<td><a class="btn btn-danger " onclick="return confirm('Are you sure to remove this product?')"  href="{{url('/remove_cart',$cart->id)}}" style="background-color:#522b58; ">Remove</a></td>

</tr>
        <?php $totalPrice=$totalPrice+$cart->price ?>

        @endforeach

    </table>
    <div>
        
        <h1 class="total_deg">Total Price: {{$totalPrice}}ETB </h1>
    </div>
    <div>
        <h1 style="font-size:25px; padding-bottom:15px">Proceed to order</h1>
        <a href="{{url('cash_order')}}" class="btn btn-danger" style="background-color:#522b58; ">Cash on Delivery</a>
        <a href="{{url('stripe',$totalPrice)}}" class="btn btn-danger" style="background-color:#522b58; ">with card</a>
      

       
        
    </div>


  
</div>















    
      <!-- footer end -->
      <div class="cpy_">
         <p class="mx-auto">© 2021 All Rights Reserved By <a href="https://html.design/">Free Html Templates</a><br>
         
            Distributed By <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>
         
         </p>
      </div>
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