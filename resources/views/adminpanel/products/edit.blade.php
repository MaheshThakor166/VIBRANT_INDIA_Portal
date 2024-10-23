@extends('adminpanel.adminlayout')

@section('content')
    <h1 class="form-title">Edit Product</h1>

    <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data" class="product-form">
        @csrf
        @method('PUT')

        <div class="form-row">
            <label for="name">Product Name:</label>
            <input type="text" name="name" id="name" value="{{ old('name', $product->name) }}" required>
        </div>

        <div class="form-row">
            <label for="description">Description:</label>
            <textarea name="description" id="description" required>{{ old('description', $product->description) }}</textarea>
        </div>

        <div class="form-row">
            <label for="price">Price:</label>
            <input type="number" name="price" id="price" value="{{ old('price', $product->price) }}" required>
        </div>

        <div class="form-row">
            <label for="stock">Stock:</label>
            <input type="number" name="stock" id="stock" value="{{ old('stock', $product->stock) }}" required>
        </div>

        <div class="form-row">
            <label for="category_id">Category:</label>
            <select name="category_id" id="category_id" required>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-row">
            <label for="subcategory_id">Subcategory:</label>
            <select name="subcategory_id" id="subcategory_id">
                <option value="">Select Subcategory</option>
                @foreach($subcategories as $subcategory)
                    <option value="{{ $subcategory->id }}" {{ $product->subcategory_id == $subcategory->id ? 'selected' : '' }}>
                        {{ $subcategory->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-row">
            <label for="image_url">Image:</label>
            <input type="file" name="image_url" id="image_url">
            <p class="current-image">Current Image: <img src="{{ asset('storage/' . $product->image_url) }}" alt="{{ $product->name }}" style="width: 150px; border-radius: 5px;"></p>
        </div>

        <div class="form-row">
            <button type="submit" class="btn-submit">Update Product</button>
        </div>
    </form>

    <style>
        .form-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
            text-align: center;
        }

        .product-form {
            max-width: 800px;
            margin: 0 auto;
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .form-row {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }

        .form-row label {
            width: 150px;
            font-weight: 600;
        }

        .form-row input,
        .form-row select,
        .form-row textarea {
            flex: 1;
            padding: 10px;
            border-radius: 4px;
            border: 1px solid #ccc;
            font-size: 16px;
            margin-left: 10px;
        }

        .form-row textarea {
            min-height: 80px;
            resize: vertical;
        }

        .form-row input[type="file"] {
            padding: 5px;
        }

        .current-image {
            margin-left: 160px;
            font-size: 14px;
            color: #555;
        }

        .btn-submit {
            background-color: #28a745; /* Green for success */
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
            margin-left: 160px; /* Align with label width */
        }

        .btn-submit:hover {
            background-color: #218838;
        }
    </style>
@endsection
