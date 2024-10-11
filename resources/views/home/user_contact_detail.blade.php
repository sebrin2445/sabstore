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
         /* Custom Styles */
         .detail-box {
            background-color: #f8f9fa; /* Light background for contact details */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            text-align: left;
         }

         .detail-box h6 {
            font-size: 18px;
            margin-bottom: 10px;
            color: #333;
         }

         a.inbox-link {
            display: inline-block;
            background-color: #007bff;
            color: white;
            padding: 8px 15px;
            border-radius: 5px;
            text-decoration: none;
            margin-top: 20px;
         }

         a.inbox-link:hover {
            background-color: #0056b3;
         }

         .cpy_ p {
            font-size: 14px;
            color: #ddd;
            margin-bottom: 0;
         }

         .cpy_ a {
            color: #f8f9fa;
         }

         /* Adjust footer background for contrast */
         .cpy_ {
            background-color: #343a40;
            padding: 20px;
         }
      </style>
   </head>
   <body>
      <div class="hero_area">
         <!-- header section strats -->
         @include('home.header')
      
         @foreach($contacts as $contact)
            <div class="col-sm-6 col-md-4 col-lg-4" style="margin: auto; width:50%; padding:30px">
               <div class="detail-box">
                  <h6>Name: {{$contact->name}}</h6>
                  <h6>Phone Number: {{$contact->phone}}</h6>
                  <h6>Email: {{$contact->email}}</h6>
                  <h6>Address: {{$contact->address}}</h6>
                  <br>
                  <a href="{{url('chatbox/' . $contact->id)}}" class="inbox-link">Inbox</a>
               </div>
            </div>
         @endforeach

         @include('home.footer')

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
