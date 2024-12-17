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
            Inquiries
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
        <form action="{{ route('admin.inquiry.index') }}" method="GET" class="input-group" style="max-width: 200px;">
            <input type="text" name="search" class="form-control border-primary" placeholder="Search inquiry" aria-label="Search Product" value="{{ request('search') }}" style="border-radius: 3px; box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);">
                        </form>
        <div class="table-wrapper">
          
        
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Product Code</th>
                        <th>Product Name</th>
                        <th>Company Name</th>
                        <th>Customer Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Quantity</th>
                        <th>Message</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
               <tbody>
                @foreach($inquiries as $inquiry)
                <tr>
                    <td>{{ $inquiry->product_code }}</td>
                    <td>{{ $inquiry->product_name }}</td>
                    <td>{{ $inquiry->companyname }}</td>
                    <td>{{ $inquiry->name }}</td>
                    <td>{{ $inquiry->email }}</td>
                    <td>{{ $inquiry->phone }}</td>
                    <td>{{ $inquiry->quantity }}</td>
                    <td>{{ $inquiry->message }}</td>
                    <td>
                        <a href="{{ route('admin.inquiry.edit', $inquiry->id) }}" class="btn btn-edit-blue">Edit</a>
                    </td>
                    <td>
                        <form action="{{ route('admin.inquiry.destroy', $inquiry->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this inquiry?');">
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
