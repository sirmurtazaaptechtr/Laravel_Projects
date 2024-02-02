@extends('layout.master')
@section('title')
Add new Student
@endsection
@section('content')
<!-- Start Student Form -->
<div class="container py-5">
    <h1>Add New Student</h1>
    {{-- Dev Method 1 to show errors --}}
    {{-- <pre>
        @php
        print_r($errors->all());
        @endphp
    </pre> --}}

    {{-- Dev Method 2 to show errors --}}
    {{-- <ul class="text-danger">
    @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>        
    @endforeach
    </ul> --}}
    <div class="row py-5">
        <form class="col-md-9 m-auto" method="post" role="form" action={{ route('addStudent') }}>
            @csrf
            <div class="row">
                <div class="form-group col-md-6 mb-3">
                    <label for="inputname">Name</label>
                    <input type="text" class="form-control mt-1 @error('name') is-invalid @enderror" id="name" name="name" placeholder="Name" value="{{ old('name') }}">
                    <span class="text-danger">
                        @error('name')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                <div class="form-group col-md-6 mb-3">
                    <label for="inputemail">Email</label>
                    <input type="email" class="form-control mt-1 @error('email') is-invalid @enderror" id="email" name="email" placeholder="Email" value="{{ old('email') }}">
                    <span class="text-danger">
                        @error('email')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
            </div>
            <div class="mb-3">
                <label for="age">age</label>
                <input type="number" min="1" class="form-control mt-1 @error('age') is-invalid @enderror" id="age" name="age" placeholder="Age" value="{{ old('age') }}">
                <span class="text-danger">
                    @error('age')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <div class="mb-3">
                <label for="inputgender">Gender</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="male" value="male" @if (old('gender') == 'male') @checked(true) @endif>
                    <label class="form-check-label" for="male">Male</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="female" value="female" @if (old('gender') == 'female') @checked(true) @endif>
                    <label class="form-check-label" for="female">Female</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="other" value="other" @if (old('gender') == 'other') @checked(true) @endif>
                    <label class="form-check-label" for="other">Other</label>
                </div>
                <span class="text-danger">
                    @error('gender')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <div class="row">
                <div class="col text-end mt-2">
                    <button type="submit" class="btn btn-success btn-lg px-3" name="saveBtn">Save</button>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- End Student Form -->
@endsection