@extends('layout.master')
@section('title')
Student Deleted
@endsection
@section('content')
<div class="alert alert-danger" role="alert">
    Student {{ $id }} has been updated <a href={{ route('students') }} class="alert-link">Go To All Students</a>.
</div>    
@endsection