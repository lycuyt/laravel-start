@extends('layouts.app')

@section('content')
    <h1>Update food</h1>
    <form action="/foods/{{$food->id}}" method="post">
        @csrf
        @method('PUT')
        <input 
            type="text" 
            class="form-control" 
            placeholder="Enter food's name"
            value="{{ $food->name }}"
            name="name">
        <input 
            type="text" 
            class="form-control" 
            placeholder="Enter food's description"
            value="{{ $food->description }}"
            name="description">
        <input 
            type="text" 
            class="form-control" 
            placeholder="Enter food's count"
            value="{{ $food->count }}"
            name="count">
        <button class="btn btn-primary" type="submit">Create</button>
    </form>
@endsection
