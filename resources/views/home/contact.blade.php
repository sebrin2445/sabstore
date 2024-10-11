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
   <style >

body{
    background-color: #dfb6b2;
}
      /* Slider Background */
.slider_bg_box img {
    width: 100%;
    max-height: 700px;
}

/* Text Styling */
.slider_section h1 span {
    color: #ff3b3b; /* Red color for Sale text */
}

.slider_section h1 {
    color: #ffffff; /* White color for other text */
    font-size: 3em;
    font-weight: bold;
    font-family: 'Arial', sans-serif;
}

.slider_section p {
    color: #dddddd; /* Light gray color for paragraph */
    font-size: 1.2em;
    font-family: 'Verdana', sans-serif;
}

/* Button Styling */
.btn1 {
    background-color: #ff3b3b; /* Red background for the button */
    border-color: #ff3b3b; /* Red border */
    color: #ffffff; /* White text */
    padding: 10px 20px;
    text-transform: uppercase;
}

.btn1:hover {
    background-color: #e74c3c; /* Darker red on hover */
    border-color: #e74c3c; /* Darker red border on hover */
}

/* Carousel Indicators */
.carousel-indicators li {
    background-color: #ff3b3b; /* Red color for indicators */
}

.carousel-indicators .active {
    background-color: #e74c3c; /* Darker red for active indicator */
}

/* Responsive Adjustments */
@media (max-width: 768px) {
    .slider_section h1 {
        font-size: 2em; /* Smaller font size for tablets */
    }
    .slider_section p {
        font-size: 1em; /* Smaller font size for tablets */
    }
}

@media (max-width: 576px) {
    .slider_section h1 {
        font-size: 1.5em; /* Smaller font size for mobile */
    }
    .slider_section p {
        font-size: 0.9em; /* Smaller font size for mobile */
    }
}

/* Carousel Speed */
#customCarousel1 {
    interval: 5000; /* 5 seconds per slide */
}

   </style>
   
   
   </head>
   <body>
      <div class="hero_area">
         <!-- header section strats -->
        @include('home.header')
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