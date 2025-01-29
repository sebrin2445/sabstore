<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sab-eCommerce</title>
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/style.css') }}">
    <link rel="shortcut icon" href="{{ asset('admin/assets/images/favicon.png') }}">
    <style>
        .container-scroller {
            overflow: auto;
            height: 100vh;
        }
        .content-wrapper {
            overflow: auto;
            max-height: calc(100vh - 70px);
        }
        .sidebar {
            background-color: black;
        }
        .sidebar .nav-link {
            color: white;
        }
        .sidebar .nav-link:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
<div class="container-scroller">
    <!-- Sidebar -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
            <li class="nav-item nav-category">Navigation</li>
            <li class="nav-item menu-items">
                <a class="nav-link" href="{{ url('/redirect') }}">
                    <span class="menu-icon">
                        <i class="mdi mdi-speedometer"></i>
                    </span>
                    <span class="menu-title">Dashboard</span>
                </a>
            </li>
            <li class="nav-item menu-items">
                <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false">
                    <span class="menu-icon">
                        <i class="mdi mdi-laptop"></i>
                    </span>
                    <span class="menu-title">Products</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="ui-basic">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"><a class="nav-link" href="{{ url('/usersell') }}">Add Products</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/show_user_product') }}">Show Your Products</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/show_product') }}">Show All Products</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/user_contact') }}">Add Info</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/show_info') }}">Show Info</a></li>
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
        <nav class="navbar p-0 fixed-top d-flex flex-row" style="background-color: darkgray;">
            <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
                <button class="navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="mdi mdi-menu"></span>
                </button>
            </div>
        </nav>

        <div class="main-panel" style="background-color: darkgray;">
            <div class="content-wrapper">
                @if(session()->has('message'))
                    <div class="alert alert-success alert-dismissible fade show">
                        {{ session()->get('message') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                @endif

                <h1>Add Your Information</h1>
                <form action="{{ url('/add_user_contact') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div>
                        <label for="name">Your Name:</label>
                        <input type="text" name="name" class="form-control" placeholder="Write Your Name">
                    </div>
                    <div>
                        <label for="phone">Phone Number:</label>
                        <input type="number" name="phone" class="form-control" placeholder="Type Your Number" required>
                    </div>
                    <div>
                        <label for="email">Email:</label>
                        <input type="email" name="email" class="form-control" placeholder="Write Your Email">
                    </div>
                    <div>
                        <label for="address">Address:</label>
                        <input type="text" name="address" class="form-control" placeholder="Write Your Address">
                    </div>
                    <div>
                        <input type="submit" value="Add Info" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('admin/assets/vendors/js/vendor.bundle.base.js') }}"></script>
<script src="{{ asset('admin/assets/js/off-canvas.js') }}"></script>
<script src="{{ asset('admin/assets/js/hoverable-collapse.js') }}"></script>
</body>
</html>
