@extends('books.layout')

@section('content')
    <div class="container bg-danger">
        <div class="row">
            <h1>Books</h1>
            <a class="btn btn-info" href="/books/create">New</a>
        
            <div class="col-md-9">
                @if(count($books) > 0)
                    @foreach($books as $book)
                        <div class="cardbox bg-info">
                            <div class="card-header">
                                <h3 class="text-center">{{ $book->title }}</h3>
                            </div>
                            <div class="card-body">
                                <p>{{ $book->description }}</p>
                            </div>
                            <div class="card-footer">
                                <a class="btn btn-primary" href="/books/{{ $book->id }}">Read More</a>
                                <a class="btn btn-success" href="/books/{{ $book->id }}/edit">Edit</a>
                            </div>
                            <nav class="justify-content-end">
                                {!! Form::open(['action'=>['BookController@destroy', $book->id], 'method', 'GET']) !!}
                                    {{ Form::hidden('_method', 'DELETE') }}
                                    {{ Form::submit('Delete', ['class'=>'btn btn-danger']) }}
                                {!! Form::close() !!}
                            </nav>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>


@endsection