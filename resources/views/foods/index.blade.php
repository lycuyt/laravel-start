@extends('layouts.app')

@section('content')
    <h1>This is Foods</h1>
    <a href="foods/create" class="btn btn-primary"  role="button" aria-disabled="true">
        Create a new food
    </a>
    
    @foreach ($foods as $food)
        <li class="list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto">
                <div class="fw-bold">{{ $food->name }} </div>
                {{ $food->description }}
            </div>
            <span class="badge bg-primary rounded-pill">{{ $food->count }}</span>
            <a href="foods/{{$food->id}}/edit">Edit</a>
            {{-- delete --}}
            <form action="/foods/{{$food->id}}" method="post">
                @csrf
                @method('delete')
                <button class="btn btn-danger" type="submit">Delete</button>
            </form>
        </li>
    @endforeach
@endsection
