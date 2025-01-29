<x-app-layout>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Add Product</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
      
        .form-container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        .form-title {
            text-align: center;
            margin-bottom: 20px;
        }
        .form-label {
            font-weight: bold;
        }
        body{
          background-color: darkgray;
        }
        .message {
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="form-container">
        <h2 class="form-title">Add Product</h2>

        <!-- Success message -->
        @if(session()->has('message'))
            <div class="alert alert-success message">
                {{ session('message') }}
            </div>
        @endif

        <form action="{{ url('/update_product_confirm', $product->id) }}" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- Product Title -->
            <div class="mb-3">
                <label for="title" class="form-label">Product Title</label>
                <input type="text" id="title" name="title" class="form-control" value="{{ $product->title }}" required>
            </div>

            <!-- Product Description -->
            <div class="mb-3">
                <label for="description" class="form-label">Product Description</label>
                <textarea id="description" name="description" class="form-control" rows="4" required>{{ $product->description }}</textarea>
            </div>

            <!-- Product Price -->
            <div class="mb-3">
                <label for="price" class="form-label">Product Price</label>
                <input type="number" id="price" name="price" class="form-control" value="{{ $product->price }}" required>
            </div>

            <!-- Discount Price -->
            <div class="mb-3">
                <label for="dis_price" class="form-label">Discount Price</label>
                <input type="number" id="dis_price" name="dis_price" class="form-control" value="{{ $product->discount_price }}">
            </div>

            <!-- Product Quantity -->
            <div class="mb-3">
                <label for="quantity" class="form-label">Product Quantity</label>
                <input type="number" id="quantity" name="quantity" class="form-control" value="{{ $product->quantity }}" required>
            </div>

            <!-- Product Category -->
            <div class="mb-3">
                <label for="category" class="form-label">Product Category</label>
                <select id="category" name="category" class="form-control" required>
                    <option value="" disabled>Select a category</option>
                    @foreach($category as $cat)
                        <option value="{{ $cat->category_name }}" {{ $product->category == $cat->category_name ? 'selected' : '' }}>
                            {{ $cat->category_name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <!-- Current Product Image -->
            <div class="mb-3">
                <label class="form-label">Current Product Image</label><br>
                <img src="/product/{{ $product->image }}" alt="Product Image" class="img-thumbnail" style="width: 150px; height: auto;">
            </div>

            <!-- Update Product Image -->
            <div class="mb-3">
                <label for="image" class="form-label">Change Product Image</label>
                <input type="file" id="image" name="image" class="form-control">
            </div>

            <!-- Submit Button -->
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Update Product</button>
            </div>
        </form>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
</x-app-layout>