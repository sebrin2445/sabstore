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
         /* Custom Styling */
         .img-box img {
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 10px;
            max-width: 100%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
         }

         .detail-box h5 {
            font-size: 24px;
            font-weight: bold;
            color: #333;
            margin-top: 20px;
         }

         .detail-box h6 {
            font-size: 18px;
            margin-top: 10px;
            color: #555;
         }

         .detail-box .price {
            font-size: 22px;
            color: #ff5733;
            font-weight: bold;
         }

         .detail-box .discount-price {
            font-size: 18px;
            color: red;
            font-weight: bold;
         }

         .detail-box .strike-price {
            text-decoration: line-through;
            font-size: 18px;
            color: #999;
         }

         .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
         }

         .btn-primary:hover {
            background-color: #0056b3;
         }

         .add-to-cart {
            background-color: #28a745;
            color: white;
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
         }

         .add-to-cart:hover {
            background-color: #218838;
         }
      </style>
   </head>
   <body>
      <div class="hero_area">
         <!-- header section starts -->
         @include('home.header')

         <!-- Product Detail Section -->
         <div class="col-sm-6 col-md-4 col-lg-4" style="margin: auto; width:50%; padding:30px; text-align: center;">
            <div class="img-box">
               <img src="product/{{$product->image}}" alt="{{$product->title}}">
            </div>
            <div class="detail-box">
               <h5>{{$product->title}}</h5>
               @if($product->discount_price != null)
               <h6 class="discount-price">Discount Price: ${{$product->discount_price}}</h6>
               <h6 class="strike-price">Original Price: ${{$product->price}}</h6>
               @else
               <h6 class="price">Price: ${{$product->price}}</h6>
               @endif
               <h6>Category: {{$product->catagory}}</h6>
               <h6>Details: {{$product->description}}</h6>
               <h6>Available Quantity: {{$product->quantity}}</h6>
               <h6><a href="{{url('user_contact_detail',$product->user_id)}}" class="btn btn-primary">Contact Seller</a></h6>
               <br>

               <form action="{{url('add_cart',$product->id)}}" method="post">
                  @csrf
                  <div class="row">
                     <div class="col-md-4">
                        <input type="number" name="quantity" id="" value="1" min="1" style="width: 100px;">
                     </div>
                     <div class="col-md-4">
                        <input type="submit" class="add-to-cart" value="Add to Cart">
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>

      <!-- Footer Section -->
      @include('home.footer')

      <!-- Footer End -->
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
