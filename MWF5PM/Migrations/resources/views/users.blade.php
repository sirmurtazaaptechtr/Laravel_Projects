@extends('layouts.master')
@section('title')
    All Users
@endsection
@section('main')
    <div class="container my-3">
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th>Sr.no.</th>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                @dd($user);
                    <tr>
                        <td>. </td>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{$user->gender->gender ?? 'Not specified' }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <a href="{{ route('user',['id' => $user->id]) }}" type="button" class="btn btn-info">View</a>
                            <a href="{{ route('editUser', ['id'=> $user->id]) }}" type="button" class="btn btn-warning">Edit</a>
                            <a href="" type="button" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
