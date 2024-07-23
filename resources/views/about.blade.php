@extends('layouts.app')

@section('content')
<h1>This is about page, da su</h1>
{{-- {{
    $x = 1;
}}
@if($x >2)
    <h3>x is greater than 2</h3>
@elseif($x < 2)
    <h3>x is less than 2</h3>
@else
    <h3>x is equal to 2</h3>    
@endif --}}
{{-- unless = if not --}}
{{-- @unless (empty($name))

    <h3>Name is not empty</h3>
@endunless --}}

{{-- @if(!empty($name))
    <h3>Name is not empty dsdsfsd</h3>
@endif --}}
{{-- 
@empty(!$name)
    <h3>Name is not empty</h3>
@endempty

@empty($age)
    <h3>Age is empty</h3>
@endempty

@isset($name)
    <h3>Name has been set</h3>
@endisset

@switch($name)
    @case('Hoang')
        <h3>This is mr Hoang</h3>
        @break
    @case("LY Ly")
        <h3>This is mis Ly</h3>
        @break
    @default
        <h3>No No</h3>
@endswitch

@for($i = 0; $i < 10; $i++)
    <h3>{{ $i }}</h3>
@endfor

@foreach ($names as $item)
    <h3>each name :{{ $item }} </h3>
@endforeach --}}
{{-- {{ $i = 0}}
@while ( $i <10)
    <h3>{{ $i }}</h3>
    {{ $i++ }}
@endwhile --}}


@endsection
