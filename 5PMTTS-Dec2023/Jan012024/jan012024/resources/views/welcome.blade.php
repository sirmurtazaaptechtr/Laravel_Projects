{{ "Welcome" }}

{{-- to write comments --}}
@php
    $name = "<h1>Aptech Learning</h1>";
    $num = NULL;
    $op = -4;
    $students = ["Shoaib"=>19, "Muhammad Ali"=>19, "Affan"=>17, "Junaid"=>17, "Moiz"=>23, "Mujtaba"=>21, "Urooj"=>23, "Hiba"=>17, "Ahmed"=>22];    
@endphp

{!! $name !!}
{{ $name }}

@if (@empty($num))
    {{ "No number provided"  }}
@elseif ($num % 2 == 0)
    {{ "$num is Even"  }}
@else
    {{ "$num is Odd"  }}
@endif

@switch($op)
    @case(0)
        {{ "ZERO" }}
        @break
    @case(1)
        {{ "ONE" }}
        @break
    @case(2)
        {{ "TWO" }}
        @break
    @case(3)
        {{ "THREE" }}
        @break
    @case(4)
        {{ "FOUR" }}
        @break

    @default
        {{ "Number is either less than 0 or greater than 4" }}
@endswitch

@for ($cnt = 1; $cnt <= 10; $cnt++) 
    {{ $cnt }}    
@endfor

@foreach ($students as $name=>$age)
    <ul>
        <li>{{ "$loop->iteration / $loop->count. Dear $name, you are $age years old." }}</li>
    </ul>
@endforeach

