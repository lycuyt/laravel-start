@extends('layouts.app')

@section('content')
    <h1>This is Foods Create</h1>
    <form action="/foods" method="post" enctype="multipart/form-data">
        @csrf
        <input class="form-control" 
            type="file" name="image" >
        <input 
            type="text" 
            class="form-control" 
            placeholder="Enter food's name"
            name="name">
        <input 
            type="text" 
            class="form-control" 
            placeholder="Enter food's description"
            name="description">
        <input 
            type="text" 
            class="form-control" 
            placeholder="Enter food's count"
            name="count">
        <button class="btn btn-primary" type="submit">Create</button>
    </form>
@endsection
