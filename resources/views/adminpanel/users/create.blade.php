@extends('adminpanel.adminlayout')

@section('content')

<div class="container user-form-container">
    <h1 class="form-title">Create User</h1>

    <form action="{{ route('admin.users.store') }}" method="POST" class="user-form">
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

<style>
    .user-form-container {
        max-width: 600px;
        margin: 0 auto;
        background: #f9f9f9;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .form-title {
        font-size: 24px;
        font-weight: bold;
        margin-bottom: 20px;
        text-align: center;
        color: #333;
    }

    .user-form .form-group {
        margin-bottom: 15px;
    }

    .user-form label {
        display: block;
        font-weight: 600;
        margin-bottom: 5px;
        color: #555;
    }

    .user-form .form-control {
        width: 100%;
        padding: 10px;
        border-radius: 4px;
        border: 1px solid #ccc;
        font-size: 16px;
    }

    .user-form .btn-primary {
        background-color: #28a745;
        color: #fff;
        border: none;
        padding: 10px 15px;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
        transition: background-color 0.3s;
        width: 100%;
        margin-top: 10px;
    }

    .user-form .btn-primary:hover {
        background-color: #218838;
    }

    .form-control:focus {
        border-color: #80bdff;
        outline: none;
        box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
    }
</style>

@endsection
