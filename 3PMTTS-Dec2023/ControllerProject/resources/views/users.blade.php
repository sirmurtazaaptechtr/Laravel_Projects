@extends('layout.master')
@section('title')
    - All Users
@endsection
@section('content')
    <section class="bg-success py-5">
        <div class="container">
            <div class="row align-items-center py-5">
                <div class="col-md-8 text-white">
                    <h1>All Users</h1>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Sr.no.</th>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Gender</th>
                                <th>Date of Birth</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $id=>$user)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $id }}</td>
                                <td>{{ $user['name'] }}</td>
                                <td>{{ $user['gender'] }}</td>
                                <td>{{ $user['dob'] }}</td>
                                <td><a href={{ route('user',['id'=>$id]) }}>View</a></td>
                            </tr>                                
                            @endforeach                            
                        </tbody>
                    </table>
                </div>
                <div class="col-md-4">
                    <img src="assets/img/about-hero.svg" alt="About Hero">
                </div>
            </div>
        </div>
    </section>
    <!-- Close Banner -->
@endsection