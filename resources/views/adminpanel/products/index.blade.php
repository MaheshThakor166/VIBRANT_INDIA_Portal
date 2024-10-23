@extends('adminpanel.adminlayout')

@section('content')
<style>
    .top-products table{
      color: #f1f1f1;
    }
    .btn-edit-blue {
        background-color:#4434a0; /* Blue */
        color: white;
}

img {
            width: 150px; /* Adjust width as needed */
            height: auto; /* Maintain aspect ratio */
        }
   
</style>


    <div class="container">
        <div class="heading-section">
            <div class="main-heading text-white">
                Product List
            </div>
            <div class="btn-view primary-btn">
                <a href="{{ route('products.create') }}" class="btn text-white">Create Product</a>
            </div>
        </div>

        @if (session('success'))
            <div class="alert alert-success" id="success-alert">
                {{ session('success') }}
            </div>
            <script>
                setTimeout(function() {
                    document.getElementById('success-alert').style.display = 'none';
                }, 2000);
            </script>
        @endif
          <!-- Search Bar -->
        
        <section class="top-products mt-5">
            <form action="{{ route('products.index') }}" method="GET" class="input-group" style="max-width: 200px;">
                <input type="text" name="search" class="form-control border-primary" placeholder="Search Product" aria-label="Search Product" value="{{ request('search') }}" style="border-radius: 3px; box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);">
                {{-- <button type="submit" class="btn btn-primary">Search</button> --}}
            </form>
            <div class="table-wrapper">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Product Name</th>
                            <th>Description</th>
                            <th>Price</th>
                            <th>Category</th>
                            <th>Subcategory</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                            <tr>
                               
                                <td>{{ $product->name }}</td>
                                <td>
                                    @if($product->image_url)
                                        <img src="{{ asset('storage/' . $product->image_url) }}" alt="{{ $product->name }}">
                                    @else
                                        <span>No Image</span>
                                    @endif
                                </td>
                                <td>{{ $product->description }}</td>
                                <td>${{ number_format($product->price, 2) }}</td>
                                <td>{{ $product->category->name ?? 'N/A' }}</td>
                                <td>{{ $product->subcategory->name ?? 'N/A' }}</td>
                                <td>
                                    <a href="{{ route('products.edit', $product->id) }}" class="btn btn-edit-blue">Edit</a>
                                </td>
                                
                                <td>
                                    <form action="{{ route('products.destroy', $product->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this product?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                                
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </section>
    </div>
@endsection
