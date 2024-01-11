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
                <ul>
                    @foreach ($users as $id=>$user)
                        <li>{{ $id }} - {{ $user['name'] }}</li>        
                    @endforeach
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
