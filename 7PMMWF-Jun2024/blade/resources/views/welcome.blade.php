<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="{{ route('pages') }}">Pages</a></li>
        </ul>
    </nav>
    <h1>Welcome to Blade</h1>
    {{ "this text is from blade" }}
    {!! "<br>" !!}
    {{ 3 + 5 }}
    <br>
    {{ "<p>this is html in blade</p>" }}
    {!! "<p>this is html in blade</p>" !!}
    {{-- {!! "<script>alert('Hello World')</script>" !!} --}}
    {{ "<script>alert('Hello World')</script>" }}

    @php
        $names = ["Sadaf","Abdul Rehman","Mujtaba","Javeria"];
    @endphp

    @for ($cnt = 0; $cnt < count($names); $cnt++)
        <p>{{ $cnt +1 }}. {{ $names[$cnt] }}</p>
    @endfor

    @foreach ($names as $name)
        @if ($loop->first)
            <p style="color: green">{{ $loop->iteration }}. {{ $name }} stored at index {{ $loop->index }}</p>
        @elseif($loop->last)
            <p style="color: red">{{ $loop->iteration }}. {{ $name }} stored at index {{ $loop->index }}</p>
        @else
            <p>{{ $loop->iteration }}. {{ $name }} stored at index {{ $loop->index }}</p>
        @endif
    @endforeach

</body>
</html>