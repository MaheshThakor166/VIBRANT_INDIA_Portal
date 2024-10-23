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
   
</style>
<div class="container">
    <div class="heading-section">
        <div class="main-heading text-white">
            UserList
        </div>
        <div class="btn-view primary-btn">
            <a href="{{ route('usercreate') }}" class="btn text-white ">Create Users</a>
        </div>
    </div>
    @if (session('success'))
    <div class="alert alert-success" id="success-alert">
        {{ session('success') }}
    </div>


    <script>
       
        setTimeout(function() {
            document.getElementById('success-alert').style.display = 'none';
        }, 2000); // Change this value to 10000 for 10 seconds
    </script>
@endif
    <section class="top-products mt-5">
        <div class="d-flex flex-row justify-content-between align-items-center mb-2">
       
            <!-- Search Bar -->
            <form action="{{ route('userindex') }}" method="GET" class="input-group" style="max-width: 200px;">
                <input type="text" name="search" class="form-control border-primary" placeholder="Search Users" aria-label="Search Users" value="{{ request('search') }}" style="border-radius: 3px; box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);">
                {{-- <button type="submit" class="btn btn-primary">Search</button> --}}
            </form>
            
            
            <!-- Show Entries Dropdown -->
            
            <!-- Create Users Button -->
           

            {{-- <button class="btn btn-success" >Create Users</button> --}}
        
        </div>
        
        
    
    <div class="table-wrapper">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Contact No</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->username }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->contact_no }}</td>
                        <td>
                            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-edit-blue">Edit</a>
                        </td>
                        
                        <td>
                            <form action="{{ route('users.destroy', $user->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this user?');">
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



