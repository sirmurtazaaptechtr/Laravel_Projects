@extends('layout.master')
@section('title')
All Students    
@endsection
@section('contents')
<div class="container">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Sr.no.</th>
                <th>Student ID</th>
                <th>Student Name</th>
                <th>Student Email</th>
                <th>Age</th>
                <th>City</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $student->id }}</td>
                <td>{{ $student->name }}</td>
                <td>{{ $student->email }}</td>
                <td>{{ $student->age }}</td>
                <td>{{ $student->city }}</td>
                <td><a href={{ route('student',[$student->id]) }} type="button" class="btn btn-outline-info">View</a></td>
            </tr>                
            @endforeach
        </tbody>
    </table>
</div>    
@endsection