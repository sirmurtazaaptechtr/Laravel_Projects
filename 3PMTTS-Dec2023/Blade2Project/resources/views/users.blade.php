@extends('layout.master')
@section('title')
    All Users
@endsection
@section('content')
<section class="bg-success py-5">
    <div class="container">
        <div class="row align-items-center py-5">
            <div class="col-md-8 text-white">
                <h1>All Users</h1>
                {{-- {{ "Dear " }}{{ !empty($name) ? $name : 'No Name' }}{{ ", you live in " }}{{ !empty($city) ? $city : 'No City' }} --}}
                <ul>
                    @foreach ($users as $id=>$user)
                        <li>{{ "NAME : " . $user['name'] . " | DOB : " . $user['dob'] }}</li>
                    @endforeach
                </ul>
            </div>
            <div class="col-md-4">
                <img src="assets/img/about-hero.svg" alt="About Hero">
            </div>
        </div>
    </div>
</section>    
@endsection