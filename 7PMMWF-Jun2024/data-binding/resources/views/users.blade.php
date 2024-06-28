<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My App - Users</title>
</head>
<body>
    <h1>All Users</h1>
    <ul>
        {{-- <li>Name : {{ $username }} | Gender : {{ $gender }} | City : {{ !empty($city) ? $city : "No City" }}</li> --}}
        
        @foreach ($users as $id => $user)
            <li>
                <b>ID :</b> {{ $id }} | 
                <b>Name :</b> {{ $user['name'] }} | 
                <b>Gender :</b> {{ $user['gender'] }} | 
                <b>Action :</b><a href="{{ route('user',$id) }}">view</a>
            </li>
        @endforeach
    </ul>
</body>
</html>