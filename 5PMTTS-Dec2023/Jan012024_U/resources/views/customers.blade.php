@extends('layout.master')
@section('title')
All Customers
@endsection
@section('content')
<section class="bg-success py-5">
    <div class="container">
        <div class="row align-items-center py-5">
            <div class="col-md-8 text-white">
                <h1>All Customers</h1>
                <table class="table table-light table-hover">
                    <thead>
                        <tr>
                            <th>Sr.no</th>
                            <th>ID</th>
                            <th>Customer Name</th>
                            <th>Date of Birth</th>
                            <th>Gender</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($customers as $id=>$customer)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $id }}</td>
                            <td>{{ $customer['name'] }}</td>
                            <td>{{ $customer['dob'] }}</td>
                            <td>{{ $customer['gender'] }}</td>
                            <td><a href={{ route('customer',['id'=>$id]) }}><i class="fa fa-eye mx-2"></i></a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
            <div class="col-md-4">
                <img src={{ asset('assets/img/about-hero.svg') }} alt="About Hero">
            </div>
        </div>
    </div>
</section>
@endsection