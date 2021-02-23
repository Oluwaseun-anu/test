@extends('books.layout')

@section('content')
    <div class="container bg-danger">
        <h1>Book</h1>
        <div class="cardbox bg-info">
            <div class="card-header">
                <h3 class="text-center">{{ $book->title }}</h3>
            </div>
            <div class="card-body">
                <p>{{ $book->description }}</p>
            </div>
        </div>
    </div>


@endsection