<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <base href="/public">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
  
   
    @if(session()->has('message'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session()->get('message') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif








<div class="divcent">

<h1 class="h2font">Add product</h1>


<form action="{{url('/update_product_confirm',$product->id)}}" method="POST" enctype="multipart/form-data">

@csrf
<div class="div_design">
<label for="">Product Title:</label>
<input type="text" class="inputcol" name="title" placeholder="write a title" required value="{{$product->title}}">
</div>
<div class="div_design">
<label for="">Product Description:</label>
<input type="text" class="inputcol" name="description" placeholder="write a description" required value="{{$product->description}}">
</div>
<div class="div_design">
<label for="">Product Price:</label>
<input type="number" class="inputcol" name="price" placeholder="write a price" required value="{{$product->price}}">
</div>
<div class="div_design">
<label for="">Discount price:</label>
<input type="number" class="inputcol" name="dis_price" placeholder="write a discount" value="{{$product->discount_price}}">
</div>
<div> 
    <div class="div_design">
<label for="">Product Quantity:</label>
<input type="number" class="inputcol" name="quantity" placeholder="write a quantity" required value="{{$product->quantity}}">
</div>
<div class="div_design">
<label for="">Product Category:</label>
<select name="category" id="" class="inputcol" required>
<option value="  {{$product->catagory}}" selected="" >
  {{$product->catagory}}
</option>

@foreach($category as $category)
<option  value="{{$category->category_name}}">
  {{$category->category_name}}
</option>
@endforeach
</select>
</div>

<div class="div_design">

<label>Current Product Image:</label>
<img style="margin: auto;" src="/product/{{$product->image}}" alt="" height="100" width="100">
</div>
<div class="div_design">

<label>Change Image Here:</label>
<input type="file" name="image"  >
</div>

<div class="div_design">

<input type="submit"  value="Upadte Product" class="btn btn-primary">
</div>
</form>
</div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
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
