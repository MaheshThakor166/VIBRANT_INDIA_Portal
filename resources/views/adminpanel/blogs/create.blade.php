@extends('adminpanel.adminlayout')

@section('content')
    <form action="{{ route('admin.blogs.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="heading">Heading</label>
            <input type="text" class="form-control" name="heading" required>
        </div>
        <div class="form-group">
            <label for="detail_subcontent">Detail Subcontent</label>
            <textarea class="form-control" name="detail_subcontent" required></textarea>
        </div>
        <div class="form-group">
            <label for="subtitle1">Subtitle 1</label>
            <input type="text" class="form-control" name="subtitle1" required>
        </div>
        <div class="form-group">
            <label for="textcontent1">Text Content 1</label>
            <textarea class="form-control" name="textcontent1" required></textarea>
        </div>
        <div class="form-group">
            <label for="subtitle2">Subtitle 2</label>
            <input type="text" class="form-control" name="subtitle2">
        </div>
        <div class="form-group">
            <label for="textcontent2">Text Content 2</label>
            <textarea class="form-control" name="textcontent2"></textarea>
        </div>
        <div class="form-group">
            <label for="image_url">Blog Image</label>
            <input type="file" class="form-control" name="image_url">
        </div>
        <button type="submit" class="btn btn-primary">Create Blog</button>
    </form>
@endsection
