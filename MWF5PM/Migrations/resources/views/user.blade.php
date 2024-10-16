@extends('layouts.master')
@section('title')
    Welcome - {{ $user->name }}
@endsection
@section('main')
    <div class="container my-3">
        <div class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">{{ $user->name }}</h5>
            <ul>
                <li><strong>Gender : </strong>{{ $user->gender }}</li>
                <li><strong>Email : </strong>{{ $user->email }}</li>
            </ul>
            <a href="{{ route('users') }}" class="btn btn-primary"><i class="bi bi-arrow-left"></i> Back</a>
            </div>
        </div>
    </div>    
@endsection