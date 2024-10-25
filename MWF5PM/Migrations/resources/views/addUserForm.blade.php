@extends('layouts.master')
@section('title')
    Update User Information
@endsection
@section('main')
    <div class="container">
        <form action="{{ route('createUser') }}" method="post">
            @csrf
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="name" name="name" placeholder="John Doe"
                    value="">
                <label for="floatingInput">Enter Full Name</label>
            </div>
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com"
                    value="">
                <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="password" name="password" value="">
                <label for="floatingInput">Set Password</label>
            </div>
            <select id="genderid" name="genderid" class="form-select mb-3" aria-label="Default select example">
                <option selected>Select Gender</option>
                @foreach ($genders as $gender)
                    <option value="{{ $gender->id }}">{{ $gender->gender }}</option>
                @endforeach
            </select>
            <div class="col-12">
                <button class="btn btn-primary" type="submit">Save</button>
            </div>
        </form>
    </div>
@endsection
