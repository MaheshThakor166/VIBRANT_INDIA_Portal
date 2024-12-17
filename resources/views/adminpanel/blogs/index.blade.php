@extends('adminpanel.adminlayout')

@section('content')
<style>
    .top-products table {
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
            Blogs
        </div>
        <div class="btn-view primary-btn">
            <a href="{{ route('admin.blogs.create') }}" class="btn text-white">Create Blog</a>
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

    <section class="top-products mt-5">
        <form action="{{ route('admin.blogs.index') }}" method="GET" class="input-group" style="max-width: 200px;">
            <input type="text" name="search" class="form-control border-primary" placeholder="Search Blog" aria-label="Search Blog" value="{{ request('search') }}" style="border-radius: 3px; box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);">
        </form>

        <div class="table-wrapper">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Heading</th>
                        <th>Created At</th>
                        <th>Image</th>
                        <th>Subcontent</th>
                        <th>Subtitle1</th>
                        <th>Textcontent1</th>
                        <th>Subtitle2</th>
                        <th>Textcontent2</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($blogs as $blog)
                        <tr>
                            <td>{{ $blog->heading }}</td>
                            <td>{{ $blog->created_at }}</td>
                            <td>
                                @if($blog->image_url)
                                    <img src="{{ asset('storage/' .$blog->image_url) }}" alt="{{ $blog->heading }}" style="width: 150px; height: auto;">
                                @else
                                    <span>No Image</span>
                                @endif
                            </td>
                            <td>{{ $blog->detail_subcontent }}</td>
                            <td>{{ $blog->subtitle1 }}</td>
                            <td>{{ $blog->textcontent1 }}</td>
                            <td>{{ $blog->subtitle2 }}</td>
                            <td>{{ $blog->textcontent2 }}</td>
                            <td>
                                <a href="{{ route('admin.blogs.edit', $blog->id) }}" class="btn btn-edit-blue">Edit</a>  
                           </td>
                           <td>
                            <form action="{{ route('admin.blogs.destroy', $blog->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this inquiry?');">
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
