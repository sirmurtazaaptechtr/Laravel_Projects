@extends('layout.master')
@section('title')
Student    
@endsection
@section('content')
<div class="container">
    <h1>Welcome Student</h1>
    <ul>
        @foreach ($student as $data)    
        <li><b>NAME : </b>{{ $data->name }}</li>        
        <li><b>EMAIL : </b>{{ $data->email }}</li>        
        <li><b>AGE : </b>{{ $data->age }}</li>        
        <li><b>GENDER : </b>{{ $data->gender }}</li>        
        @endforeach    
    </ul>
</div>

@endsection