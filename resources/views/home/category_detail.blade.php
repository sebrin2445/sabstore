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
   </head>
   <style>
       body{
         background-color: #dfb6b2;
      }
   </style>
   <body>
      <div class="hero_area">
         <!-- header section strats -->
        @include('home.header')
      <section class="product_section layout_padding">
         <div class="container">
            <div class="heading_container heading_center">
               <h2>
                  Our <span>products</span>
               </h2>
            </div>
            <div class="row"> 
                @foreach($category as $category)
               <div class="col-sm-6 col-md-4 col-lg-4">
                  <div class="box">
                     <div class="option_container">
                        <div class="options">
                           <a href="{{url('/product_detail',$category->id)}}" class="option1">
                          Product Details
                           </a>
                          
<form action="{{url('add_cart',$category->id)}}" method="post">

@csrf
   <div class="row">
<div class="col-md-4">
   <input type="number" name="quantity" id="" value="1" min="1" style="width: 100px;">
 
   </div> 
   <div class="col-md-4">

   <input type="submit" value="Add to cart">
   </div>
   </div>
  </form>


                        </div>
                     </div>
                     <div class="img-box">
                        <img src="product/{{$category->image}}"  alt="">
                     </div>
                     <div class="detail-box">
                        <h5>
                          {{$category->title}}
                        </h5>
                        @if($category->discount_price!=null)
                        <h6 style="color:red" >
                           Discount price <br>
                            {{$category->discount_price}}
                        </h6>

                        <h6 style="text-decoration: line-through; color:blue">
                        Price 
                        <br>    ${{$category->price}}
                        </h6>
                        @else
                        <h6 style="color: blue;">
                           Price <br>
                             ${{$category->price}}
                        </h6>
                        @endif
                     </div>
                  </div>
               </div>
            @endforeach
                  
         </div>
      </section>
      <div class="cpy_">
         <p class="mx-auto">© 2021 All Rights Reserved By <a href="https://html.design/">Free Html Templates</a><br>
         
            Distributed By <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>
         
         </p>
      </div>
      <!-- end product section -->
      <!-- footer section -->
     
      <!-- footer section -->
      <!-- jQery -->
      <script src="js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="js/custom.js"></script>
   </body>
</html>