<!DOCTYPE html>
<html lang="en">
<head>
   <x-head/>
</head>
<body>
    
    <div class="container">
        <h2>Welcome to the Home Page</h2>
        <p>{{ auth()->user()->username }}, you are logged in!</p>
        <form action="{{ route('logout') }}" method="POST" style="display: inline;">
            @csrf
            <button type="submit" class="btn btn-danger">Logout</button>
        </form>
    </div>
  
</body>
</html>
