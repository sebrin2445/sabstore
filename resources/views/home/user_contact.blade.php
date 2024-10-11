<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sab-ecommerce</title>

    <!-- plugins:css -->
    <link rel="stylesheet" href="admin/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="admin/assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="admin/assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="admin/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="admin/assets/images/favicon.png" />
  
<style>
  body{
    color: #2b124c;
  }
    .divcent{
text-align: center;
padding-top: 10px;
color: white;
    }
    .h2font{
        font-size: 40px;
        padding-bottom: 40px;
        color: #2b124c;
    }
    .inputcol{
        color: black;
    }
    .center{
        margin: auto;
        width: 50%;
        text-align: center;
        margin-top: 20px;
        border: 3px solid green;
    }
    label{
        display: inline-block;
        width: 200px;
    }
    .div_design{
        padding-bottom: 15px;
    }
    .container-scroller {
        overflow: auto; /* allows scrolling */
        height: 100vh; /* ensures full viewport height */
      }
      .content-wrapper {
        overflow: auto; /* allows scrolling within the content */
        max-height: calc(100vh - 70px); /* adjust the height to accommodate navbar/footer */
      }
      label{
        color: #2b124c;
      }
</style>
</head>
<body >
    <div class="container-scroller" style="background-color: blue;">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
         
      </div>
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar" style="background-color: #2b124c;">
       
        <ul class="nav">
          <li class="nav-item profile">
         
          </li>
          <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('/redirect')}}">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-laptop"></i>
              </span>
              <span class="menu-title">Products</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{url('/usersell')}}">Add Products</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{url('/show_user_product')}}">Show Products</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{url('/user_contact')}}">Add info</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('category_user')}}">
              <span class="menu-icon">
                <i class="mdi mdi-playlist-play"></i>
              </span>
              <span class="menu-title">Category</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar p-0 fixed-top d-flex flex-row" style="background-color: #2b124c;">
       
          <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="mdi mdi-menu"></span>
            </button>
           
            <ul class="navbar-nav navbar-nav-right">
         
           
        
            
                    <li>
                        <x-app-layout></x-app-layout>
                    </li>
                  </div>
</nav>
<div class="main-panel" style="background-color: #dfb6b2;">
    <div class="content-wrapper" style="background-color: #dfb6b2;">

    @if(session()->has('message'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session()->get('message') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

<div class="divcent">

    <h1 class="h2font">Add Your Information</h1>


    <form action="{{url('/add_user_contact')}}" method="POST" enctype="multipart/form-data">

    @csrf
    <div class="div_design">
    <label for="">Your Name:</label>
    <input type="text" class="inputcol" name="name" placeholder="write Your name" >
    </div>
    <div class="div_design">
    <label for="">Phone number:</label>
    <input type="number" class="inputcol" name="phone" placeholder="Type your number" required>
    </div>
    <div class="div_design">
    <label for="">Email:</label>
    <input type="email" class="inputcol" name="email" placeholder="write your email" >
    </div>    <div class="div_design">
    <label for="">Address:</label>
    <input type="text" class="inputcol" name="address" placeholder="write your address" >
    </div>
   
   
    
   
  
    <div class="div_design">

  <input type="submit"  value="Add Info" class="btn btn-primary" style="background-color: #2b124c;">
</div>
</form>
</div>

</div>

</div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="admin/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="admin/assets/vendors/chart.js/Chart.min.js"></script>
    <script src="admin/assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="admin/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="admin/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="admin/assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <script src="admin/assets/js/jquery.cookie.js" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="admin/assets/js/off-canvas.js"></script>
    <script src="admin/assets/js/hoverable-collapse.js"></script>
    <script src="admin/assets/js/misc.js"></script>
    <script src="admin/assets/js/settings.js"></script>
    <script src="admin/assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="admin/assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>