@extends('layout.master')
@section('title')
    All Users
@endsection
@push('style')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@endpush
@section('content')
<section class="bg-success py-5">
    <div class="container">
        <div class="row align-items-center py-5">
            <div class="col-md-8 text-white">
                <h1>All Users</h1>
                {{-- {{ "Dear " }}{{ !empty($name) ? $name : 'No Name' }}{{ ", you live in " }}{{ !empty($city) ? $city : 'No City' }} --}}
                {{-- <ul>
                    @foreach ($users as $id=>$user)
                        <li>{{ "NAME : " . $user['name'] . " | DOB : " . $user['dob'] }}</li>
                    @endforeach
                </ul> --}}
                <table id="myTable" class="display table">
                    <thead>
                        <tr>
                            <th>Sr.no.</th>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Date of Birth</th>
                            <th>Gender</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $id => $user)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $id }}</td>
                            <td>{{ $user['name'] }}</td>
                            <td>{{ $user['email'] }}</td>
                            <td>{{ $user['dob'] }}</td>
                            <td>{{ $user['gender'] }}</td>
                            <td><a href={{ route('user',['id' => $id ]) }}><i class="fa fa-eye" style="font-size:36px;color:black"></i></a></td>
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
@endsection
@push('script')
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
<script>
    $(document).ready( function () {
        $('#myTable').DataTable();
    } );

</script>    
@endpush