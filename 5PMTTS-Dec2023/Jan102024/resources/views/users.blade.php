<h1>All Users</h1>
<ul>
    @foreach ($users as $id=>$user)
        <li>{{ $id }} - {{ $user['name'] }}</li>        
    @endforeach
</ul>