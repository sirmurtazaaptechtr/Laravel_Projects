@php
    $pagetitle = 'Zay Shop - All Customers';
@endphp
@includeIf('include.connection');
@include('include.header',['title'=> $pagetitle]);
{{ "<h1>Welcome</h1>" }}
{!! "<h1>Welcome</h1>" !!}
{{ "Welcome" }}
@php
    $students = ["Anshara"=>19,"Khadija"=>17,"Ayesha"=>23,"Yusra"=>18,"Hamza"=>20,"Zeeshan"=>18];
@endphp
<ul>
    @foreach ($students as $name=>$age)
    @if($loop->first)
    <li style="color: green">{{ $loop->iteration . "/" . $loop->count . " @ " . $loop->index . " - Dear $name, you are $age years old."}}</li>
    @elseif ($loop->last)
    <li style="color: red">{{ $loop->iteration . "/" . $loop->count . " @ " . $loop->index . " - Dear $name, you are $age years old."}}</li>
    @else
    <li>{{ $loop->iteration . "/" . $loop->count . " @ " . $loop->index . " - Dear $name, you are $age years old."}}</li>    
    @endif
    @endforeach
</ul>
@include('include.footer');