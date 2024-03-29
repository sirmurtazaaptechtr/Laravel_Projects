@extends('layout.master')
@section('title')
    All Students
@endsection
@section('content')
<main class="container">
    <h1 class="display-1">All Students</h1>
    <a href={{ route('studentForm') }} type="button" class="btn btn-primary"> + Add Student</a>
{{-- @php
    echo "<pre>";
    print_r($students);
    echo "</pre>";
@endphp --}}
<table class="table table-hover">
    <thead>
        <tr>
            <th>Sr.no.</th>
            <th>Student Name</th>
            <th>Student email</th>
            <th>Age</th>
            <th>Gender</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($students as $student)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $student->name }}</td>
                <td>{{ $student->email }}</td>
                <td>{{ $student->age }}</td>
                <td>{{ $student->gender }}</td>
                <td>
                    <a href={{ route('student',[$student->id]) }} type="button" class="btn btn-outline-info">view</a>
                    <a href={{ route('delStudent',[$student->id]) }} type="button" class="btn btn-outline-danger">Delete</a>
                    <a href={{ route('updateForm',[$student->id]) }} type="button" class="btn btn-outline-warning">Edit</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
</main>    
@endsection