@extends('adminpanel.adminlayout')

@section('content')
    <h1 class="form-title">Add Product</h1>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data" class="product-form">
        @csrf

        <div class="form-row">
            <label for="name">Product Name:</label>
            <input type="text" name="name" value="{{ old('name') }}" required>
        </div>

        <div class="form-row">
            <label for="description">Description:</label>
            <textarea name="description" required>{{ old('description') }}</textarea>
        </div>

        <div class="form-row">
            <label for="price">Price:</label>
            <input type="number" name="price" step="0.01" value="{{ old('price') }}" required>
        </div>

        <div class="form-row">
            <label for="stock">Stock:</label>
            <input type="number" name="stock" value="{{ old('stock') }}" required>
        </div>

        <div class="form-row">
            <label for="category_id">Category:</label>
            <select name="category_id" id="category_id" required>
                <option value="">Select a Category</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-row">
            <label for="subcategory_id">Subcategory:</label>
            <select name="subcategory_id" id="subcategory_id">
                <option value="">Select a Subcategory</option>
                @foreach($subcategories as $subcategory)
                    <option value="{{ $subcategory->id }}" {{ old('subcategory_id') == $subcategory->id ? 'selected' : '' }}>
                        {{ $subcategory->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-row">
            <label for="image_url">Image:</label>
            <input type="file" name="image_url" accept="image/*" required>
        </div>

        <div class="form-row">
            <button type="submit" class="btn-submit">Add Product</button>
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

        .alert {
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 4px;
        }

        .alert-success {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }

        .alert-danger {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }

        .alert ul {
            margin: 0;
            padding-left: 20px;
        }
    </style>
@endsection
