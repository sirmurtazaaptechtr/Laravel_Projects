@extends('layout.master')
@section('title')
    Welcome {{ $user['name'] }}
@endsection
@section('content')
    <h1>Welcome -  {{ $user['name'] }} </h1>
    <ul>
        <li><b>ID : </b> {{ $id }}</li>
        <li><b>Name : </b> {{ $user['name'] }}</li>
        <li><b>Email : </b> {{ $user['email'] }}</li>
        <li><b>Date of Birth : </b> {{ $user['dob'] }}</li>
        <li><b>Gender : </b> {{ $user['gender'] }}</li>
    </ul>  
@endsection