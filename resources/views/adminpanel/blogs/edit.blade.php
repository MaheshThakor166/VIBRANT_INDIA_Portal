@extends('adminpanel.adminlayout')

@section('content')
 
    <h1 class="form-title">Edit Product</h1>

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
    <form action="{{ route('admin.blogs.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="heading">Heading</label>
            <input type="text" class="form-control" name="heading" value="{{ old('heading', $blog->heading) }}" required>
        </div>
        <div class="form-group">
            <label for="detail_subcontent">Detail Subcontent</label>
            <textarea class="form-control" name="detail_subcontent" required>{{ old('detail_subcontent', $blog->detail_subcontent) }}</textarea>
        </div>
        <div class="form-group">
            <label for="subtitle1">Subtitle 1</label>
            <input type="text" class="form-control" name="subtitle1" value="{{ old('subtitle1', $blog->subtitle1) }}" required>
        </div>
        <div class="form-group">
            <label for="textcontent1">Text Content 1</label>
            <textarea class="form-control" name="textcontent1" required>{{ old('textcontent1', $blog->textcontent1) }}</textarea>
        </div>
        <div class="form-group">
            <label for="subtitle2">Subtitle 2</label>
         <input type="text" class="form-control" name="subtitle2" value="{{ old('subtitle2', $blog->subtitle2) }}">
        </div>
        <div class="form-group">
            <label for="textcontent">Text Content 2</label>
            <input type="text" class="form-control" name="textcontent1" value="{{ old('textcontent1',  $blog->textcontent1) }}">
        </div>
    </form>
    

    <a href="{{ route('admin.products.index') }}">Back to Product List</a>


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
 

    <script>
        document.getElementById('category_id').addEventListener('change', function () {
            let categoryId = this.value;

            fetch(`/get-subcategories/${categoryId}`)
                .then(response => response.json())
                .then(data => {
                    let subcategorySelect = document.getElementById('subcategory_id');
                    subcategorySelect.innerHTML = '<option value="">Select a Subcategory</option>';

                    data.subcategories.forEach(subcategory => {
                        let option = document.createElement('option');
                        option.value = subcategory.id;
                        option.textContent = subcategory.name;
                        subcategorySelect.appendChild(option);
                    });
                })
                .catch(error => console.error('Error:', error));
        });
    </script>
@endsection
