@extends('layout.master')
@section('title')
    - {{ $user['name'] }}
@endsection
@section('content')
    <section class="bg-success py-5">
        <div class="container">
            <div class="row align-items-center py-5">
                <div class="col-md-8 text-white">
                    <h1>Welcome {{ $user['name'] }}</h1>
                    <ul>
                        <li><b>ID : </b>{{ $id }}</li>
                        <li><b>Name : </b>{{ $user['name'] }}</li>
                        <li><b>Gender : </b>{{ $user['gender'] }}</li>
                        <li><b>Date of Birth : </b>{{ $user['dob'] }}</li>
                        <li><a href={{ route('users') }}><---Back</a></li>
                    </ul>                    
                </div>
                <div class="col-md-4">
                    <img src={{ asset('assets/img/about-hero.svg') }} alt="About Hero">
                </div>
            </div>
        </div>
    </section>
    <!-- Close Banner -->
@endsection