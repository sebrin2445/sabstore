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
      .container-scroller {
        overflow: auto;
        height: 100vh;
      }
      .content-wrapper {
        overflow: auto;
        max-height: calc(100vh - 70px);
      }

      /* Custom styling for sidebar */
      .sidebar {
        background-color: black;
      }
      .sidebar .nav-link {
        color: white;
      }
      .sidebar .nav-link:hover {
        background-color: #555;
      }

      /* Main content area */
      .main-panel {
        background-color: #dfb6b2;
      }

      .divcent {
        text-align: center;
        padding-top: 10px;
        color: white;
      }
      .h2font {
        font-size: 40px;
        padding-bottom: 40px;
        color: darkgray;
      }
      .inputcol {
        color: black;
      }
      .inputcol {
        color: #555;
      }
      .center {
        margin: auto;
        width: 100%;
        text-align: center;
        margin-top: 20px;
        border: 3px solid green;
      }
      label {
        display: inline-block;
        width: 200px;
        color: #555;
      }
      .div_design {
        padding-bottom: 15px;
      }

      /* Media Queries for responsiveness */
      @media (min-width: 768px) {
        .div_design {
          padding-bottom: 20px;
        }
        .center {
          width: 75%;
        }
      }

      @media (min-width: 992px) {
        .center {
          width: 50%;
        }
        .h2font {
          font-size: 45px;
        }
        .divcent {
          padding-top: 40px;
        }
      }

      @media (min-width: 1200px) {
        .center {
          width: 40%;
        }
        .h2font {
          font-size: 50px;
        }
      }
    </style>
  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0"></div>
      </div>

      <!-- Sidebar -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item profile"></li>
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
                <li class="nav-item"><a class="nav-link" href="{{url('/usersell')}}">Add Products</a></li>
                <li class="nav-item"><a class="nav-link" href="{{url('/show_user_product')}}">Show Products</a></li>
                <li class="nav-item"><a class="nav-link" href="{{url('/user_contact')}}">Add info</a></li>
                <li class="nav-item"><a class="nav-link" href="{{url('/show_info')}}">Show info</a></li>
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

      <!-- Main Content -->
      <div class="container-fluid page-body-wrapper">
        <!-- Navbar -->
        <nav class="navbar p-0 fixed-top d-flex flex-row" style="background-color: darkgray;">
          <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="mdi mdi-menu"></span>
            </button>
            <ul class="navbar-nav navbar-nav-right">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" data-bs-toggle="dropdown">
                  {{ Auth::user()->name }}
                </a>
                <div class="dropdown-menu dropdown-menu-end">
                  <a class="dropdown-item" href="{{ route('profile.show') }}">Edit Profile</a>
                  <div class="dropdown-divider"></div>
                  <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="dropdown-item text-danger">Logout</button>
                  </form>
                </div>
              </li>
            </ul>
          </div>
        </nav>

        <!-- Main Panel -->
        <div class="main-panel" style="background-color: gray;">
        <div class="content-wrapper" style="background-color: darkgray; color:black;">
        @if(session()->has('message'))
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session()->get('message') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            @endif
            <div class="divcent">
              <h1 class="h2font" style="color:#555;">Add Product</h1>
              <form action="{{url('/add_user_product')}}" method="POST" enctype="multipart/form-data" style="color: #555;">
                @csrf
                <div class="div_design">
                  <label for="title">Product Title:</label>
                  <input type="text" class="inputcol" name="title" placeholder="Write a title" required>
                </div>
                <div class="div_design">
                  <label for="description">Product Description:</label>
                  <input type="text" class="inputcol" name="description" placeholder="Write a description" required>
                </div>
                <div class="div_design">
                  <label for="price">Product Price:</label>
                  <input type="number" class="inputcol" name="price" placeholder="Write a price" required>
                </div>
                <div class="div_design">
                  <label for="dis_price">Discount Price:</label>
                  <input type="number" class="inputcol" name="dis_price" placeholder="Write a discount">
                </div>
                <div class="div_design">
                  <label for="quantity">Product Quantity:</label>
                  <input type="number" class="inputcol" name="quantity" placeholder="Write a quantity" required>
                </div>
                <div class="div_design">
                  <label for="category">Product Category:</label>
                  <select name="category" id="category" class="inputcol" required>
                    <option value="" selected="">Add a category here</option>
                    @foreach($category as $category)
                      <option value="{{ $category->category_name }}">{{ $category->category_name }}</option>
                    @endforeach
                  </select>
                </div>
                <div class="div_design">
                  <label for="image">Product Image:</label>
                  <input type="file" name="image" required>
                </div>
                <div class="div_design">
                  <input type="submit" value="Add Product" class="btn btn-primary">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Plugins:js -->
    <script src="admin/assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="admin/assets/vendors/chart.js/Chart.min.js"></script>
    <script src="admin/assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="admin/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="admin/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="admin/assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <script src="admin/assets/js/off-canvas.js"></script>
    <script src="admin/assets/js/hoverable-collapse.js"></script>
    <script src="admin/assets/js/misc.js"></script>
    <script src="admin/assets/js/settings.js"></script>
    <script src="admin/assets/js/todolist.js"></script>
    <script src="admin/assets/js/dashboard.js"></script>
  </body>
</html>
