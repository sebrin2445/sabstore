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
        border: 1px solid grey;
    }
    .th_deg{
        font-size: 30px;
        padding: 5px;
        background: skyblue;
    }
    .img_deg{
        width: 200px;
        height: 200px;
    }
    .total_deg{
        font-size:20px;
        padding: 40px;
    }
    
   </style>
   
    </head>
   <body>
      <div class="hero_area">
         <!-- header section strats -->
        @include('home.header')
        <section class="product_section layout_padding">
         <div class="container">
            <div class="heading_container heading_center">
            <ul class="navbar-nav w-100">
              <li class="nav-item w-100">
                <form class="nav-link mt-2 mt-md-0  d-lg-flex search" action="{{url('searchPro')}}" method="get">
        @csrf

                  <input type="text" class="form-control" placeholder="Search products" name="searchPro"  >
                  <form class="form-inline" >
                           <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit" style="margin-top: -35px;">
                           <i class="fa fa-search" aria-hidden="true" style="margin-top: -235px;" ></i>
                           </button>
                        </form>
                </form>
             
              
             
            <h2>
             
                  Our <span>products</span>
               </h2>
            </div>
            <div class="row">
               @foreach($product as $products)
               <div class="col-sm-6 col-md-4 col-lg-4">
                  <div class="box">
                     <div class="option_container">
                        <div class="options">
                           <a href="{{url('/product_detail',$products->id)}}" class="option1">
                          Product Details
                           </a>
                          
<form action="{{url('add_cart',$products->id)}}" method="post">

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
                        <img src="product/{{$products->image}}"  alt="">
                     </div>
                     <div class="detail-box">
                        <h5>
                          {{$products->title}}
                        </h5>
                        @if($products->discount_price!=null)
                        <h6 style="color:red" >
                           Discount price <br>
                            {{$products->discount_price}}
                        </h6>

                        <h6 style="text-decoration: line-through; color:blue">
                        Price 
                        <br>    ${{$products->price}}
                        </h6>
                        @else
                        <h6 style="color: blue;">
                           Price <br>
                             ${{$products->price}}
                        </h6>
                        @endif
                     </div>
                  </div>
               </div>
            @endforeach
            </div>
      </section>
   

    
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