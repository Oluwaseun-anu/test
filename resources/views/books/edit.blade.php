@extends('books.layout')

@section('content')
    <div class="container bg-danger">
        <h1>Edit Book</h1>
        
        <div class="row">
            <div class="col-md-7">
                <div class="cardbox bg-info">
                    <div class="card-header">
                        <h3 class="text-center">Fill the form below to continue</h3>
                    </div>
                    <div class="card-body">
                        {!! Form::open(['action'=>['BookController@update', $book->id], 'method'=>'put']) !!}
                        <div class="form-group m-2">
                            {{ Form::label('Title') }}
                            {{ Form::text('title', $book->title, ['class'=>'form-control']) }}
                        </div>
                        <div class="form-group m-2">
                            {{ Form::label('Content') }}
                            {{ Form::text('description', $book->description, ['class'=>'form-control']) }}
                        </div>
                        {{ Form::hidden('_method', 'PUT') }}
                        <div class="form-group m-2">
                            {{ Form::submit('Update', ['class'=>'btn btn-success']) }}
                        </div>
                        
                        {!! Form::close() !!}
                    </div>
                    <div class="card-footer">
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection