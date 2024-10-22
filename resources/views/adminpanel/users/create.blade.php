@extends('adminpanel.adminlayout')


@section('content')

<div class="container">
    <h1>Create User</h1>

    <form action="{{ route('users.store') }}" method="POST">
        @csrf
        
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="contact_no">Contact Number</label>
            <input type="text" id="contact_no" name="contact_no" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Save User</button>
    </form>
</div>

@endsection 