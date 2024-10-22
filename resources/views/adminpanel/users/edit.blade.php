@extends('adminpanel.adminlayout')

@section('content')
    <div class="container">
        <h1>Edit User</h1>

        <form action="{{ route('users.update', $user->id) }}" method="POST" class="mt-4">
            @csrf
            @method('PUT')

            <div class="form-group mb-3">
                <label for="username">Name</label>
                <input type="text" class="form-control" id="username" name="username" value="{{ $user->username }}" required>
            </div>

            <div class="form-group mb-3">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" required>
            </div>

            <div class="form-group mb-3">
                <label for="contact_no">Contact No</label>
                <input type="text" class="form-control" id="contact_no" name="contact_no" value="{{ $user->contact_no }}" required>
            </div>

          
            <button type="submit" class="btn btn-primary">Update User</button>
            <a href="{{ route('userindex') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
@endsection
