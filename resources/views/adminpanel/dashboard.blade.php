<!-- resources/views/dashboard.blade.php -->
@extends('adminpanel.adminlayout')

@section('content')
    <section class="dashboard-metrics">
        <div class="card">
            <p>Total Users</p>
            <h3>125</h3>
        </div>
        <div class="card">
            <p>Total Products</p>
            <h3>125</h3>
        </div>
        <div class="card">
            <p>Total Inquiries</p>
            <h3>125</h3>
        </div>
    </section>

    <section class="top-products">
        <h2>Top Products</h2>
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Popularity</th>
                    <th>Sales</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>01</td>
                    <td>Home Decor Range</td>
                    <td><div class="popularity-bar" style="width: 78%;"></div></td>
                    <td>78%</td>
                </tr>
                <tr>
                    <td>02</td>
                    <td>Disney Princess Dress</td>
                    <td><div class="popularity-bar" style="width: 62%;"></div></td>
                    <td>62%</td>
                </tr>
                <tr>
                    <td>03</td>
                    <td>Bathroom Essentials</td>
                    <td><div class="popularity-bar" style="width: 51%;"></div></td>
                    <td>51%</td>
                </tr>
                <tr>
                    <td>04</td>
                    <td>Apple Smartwatch</td>
                    <td><div class="popularity-bar" style="width: 29%;"></div></td>
                    <td>29%</td>
                </tr>
            </tbody>
        </table>
    </section>
@endsection
