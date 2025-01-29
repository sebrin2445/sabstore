<style>
   .register {}

   @media (max-width: 1000px) {
      .register {
         margin-top: 10px;
      }

      .cateul a li:hover {
         color: #FF3B3B;
      }

      .cateul {
         background-color: blue;
      }

      .navbar-brand {
         display: flex;
      }

      .navbar-brand span {
         letter-spacing: 5px;
         font-size: 40px;
         font-weight: 900;
         color: black;
         margin-top: 10px;
      }
   }
</style>

<header class="header_section">
   <div class="container">
      <nav class="navbar navbar-expand-lg custom_nav-container">
         <a class="navbar-brand" href="{{ url('/') }}" style="text-decoration: none; color:#FF3B3B; display: flex;">
            <img width="70" src="images/logosab.jpeg" alt="#" style="border-radius: 50%;" />
            <span style="letter-spacing: 5px; font-size: 35px; font-weight: 900; color: black; margin-top: 10px;">
               Ye<sub>gn</sub>a<sub style="color: #2b124c;">store</sub>
            </span>
         </a>

         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""></span>
         </button>

         <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
               <li class="nav-item active">
                  <a class="nav-link nav2" href="{{ url('/') }}" style="color: #2b124c;">Home <span class="sr-only">(current)</span></a>
               </li>

               <li class="nav-item dropdown">
                  <a class="nav2 nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true"
                     aria-expanded="true">
                     <span class="nav-label">Pages <span class="caret"></span></span>
                  </a>
                  <ul class="dropdown-menu cateul">
                     @foreach($category as $category)
                     <a href="{{ url('category_detail', $category->category_name) }}" style="color: black; background:#2b124c;">
                        <li style="margin-top: 20px;">{{ $category->category_name }}</li>
                     </a>
                     @endforeach
                  </ul>
               </li>

               <li class="nav-item">
                  <a class="nav-link nav2" href="{{ url('our_product') }}">Products</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link nav2" href="{{ url('about') }}">About</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link nav2" href="{{ url('contact') }}">Contact</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link nav2" href="{{ url('show_cart') }}">Cart</a>
               </li>

               @if(Route::has('login'))
               @auth
               <!-- User Profile Dropdown -->
               <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-toggle="dropdown"
                     aria-haspopup="true" aria-expanded="false">
                     {{ Auth::user()->name }}
                  </a>
                  <div class="dropdown-menu" aria-labelledby="profileDropdown">
                     <a class="dropdown-item" href="{{ route('profile.show') }}">Edit Profile</a>
                     <a class="dropdown-item" href="{{ url('usersell') }}">User Sell</a>
                     <div class="dropdown-divider"></div>
                     <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="dropdown-item text-danger">Logout</button>
                     </form>
                  </div>
               </li>
               @else
               <li class="nav-item">
                  <a class="btn btn-primary" id="logincss" href="{{ route('login') }}">Login</a>
               </li>
               <li class="nav-item register">
                  <a class="btn btn-success" href="{{ route('register') }}">Register</a>
               </li>
               @endauth
               @endif
            </ul>
         </div>
      </nav>
   </div>
</header>
