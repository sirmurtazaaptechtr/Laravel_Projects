@extends('layout.master')
@section('title')
Student    
@endsection
@section('contents')
<div class="container">
    @foreach ($student as $data)
    <ul>
        <li><b>ID : </b>{{ $data->id }}</li>
        <li><b>Name : </b>{{ $data->name }}</li>
        <li><b>Email : </b>{{ $data->email }}</li>
        <li><b>Age : </b>{{ $data->age }}</li>
        <li><b>City : </b>{{ $data->city }}</li>
    </ul>
        
    @endforeach
</div>    
@endsection