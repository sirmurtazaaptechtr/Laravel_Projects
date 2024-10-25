@extends('layouts.master')
@section('title')
    All Users
@endsection
@section('main')
    <div class="container my-3">
        <div class="row">
            <div class="col-sm-2 mb-3">
                <a href="{{ route('addUser') }}" type="button" class="btn btn-primary">+ ADD New User</a>
            </div>
        </div>
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
                {{-- @dd($user); --}}
                    <tr>
                        <td>. </td>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->gender->gender ?? 'Not specified' }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <div class="row justify-content-center">
                                <div class="col-sm-2">
                                    <a href="{{ route('user',['id' => $user->id]) }}" type="button" class="btn btn-info">View</a>
                                </div>
                                <div class="col-sm-2">
                                    <a href="{{ route('editUser', ['id'=> $user->id]) }}" type="button" class="btn btn-warning">Edit</a>
                                </div>
                                <div class="col-sm-2">
                                    <form action="{{ route('user.delete', $user->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this user?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
