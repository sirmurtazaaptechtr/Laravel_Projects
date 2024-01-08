@extends('layout.master')
@section('title')
The Customers
@endsection
@section('content')
<section class="bg-success py-5">
    <div class="container">
        <div class="row align-items-center py-5">
            <div class="col-md-8 text-white">
                <h1>The Customers</h1>
                <ul>
                    <li><b>ID : </b>{{ $id }}</li>
                    <li><b>Name : </b>{{ $customer['name'] }}</li>
                    <li><b>DOB : </b>{{ $customer['dob'] }}</li>
                    <li><b>Gender : </b>{{ $customer['gender'] }}</li>
                </ul>
                <a href={{ route('customers') }}><i class="fa fa-arrow-left mx-2">Back to All Customers</i></a>
            </div>
            <div class="col-md-4">
                <img src={{ asset('assets/img/about-hero.svg') }} alt="About Hero">
            </div>
        </div>
    </div>
</section>
@endsection