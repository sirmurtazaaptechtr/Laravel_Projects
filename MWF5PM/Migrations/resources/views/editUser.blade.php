@extends('layouts.master')
@section('title')
    Update User Information
@endsection
@section('main')
    <div class="container">
        <form action="{{ route('updateUser') }}" method="post">
            @csrf
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="userid" name="userid" value="{{ $user->id }}" readonly>
                <label for="floatingInput">User ID</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="name" name="name" placeholder="John Doe"
                    value="{{ $user->name }}">
                <label for="floatingInput">Enter Full Name</label>
            </div>
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com"
                    value="{{ $user->email }}">
                <label for="floatingInput">Email address</label>
            </div>
            <select id="genderid" name="genderid" class="form-select mb-3" aria-label="Default select example">
                <option selected>Select Gender</option>
                @foreach ($genders as $gender)
                    <option value="{{ $gender->id }}">{{ $gender->gender }}</option>
                @endforeach
            </select>
            <div class="col-12">
                <button class="btn btn-primary" type="submit">Update</button>
            </div>
        </form>
    </div>
@endsection
