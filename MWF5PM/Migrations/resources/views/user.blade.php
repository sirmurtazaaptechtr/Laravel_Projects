@extends('layouts.master')
@section('title')
    Welcome - {{ $user->name }}
@endsection
@section('main')
{{-- @dd($user); --}}
    <div class="container my-3">
        <div class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">{{ $user->name }}</h5>
            <ul>
                <li><strong>Gender : </strong>{{ $user->gender }}</li>
                <li><strong>Email : </strong>{{ $user->email }}</li>
            </ul>
            <div class="row">
                <div class="col">
                    <a href="{{ route('users') }}" class="btn btn-primary"><i class="bi bi-arrow-left"></i> Back</a>
                </div>
                <div class="col">
                    <form action="{{ route('user.delete', $user->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this user?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>                    
                </div>
            </div>
            </div>
        </div>
    </div>    
@endsection