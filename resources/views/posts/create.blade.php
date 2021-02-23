@extends('posts.layout')

@section('content')
    <div class="container-fluid bg-info">
        <h1>Post</h1>
        <div class="row">
            <div class="col-md-8">
                <div class="cardbox bg-warning">
                    <div class="card-header">
                        <h4 class="text-center">Create Post</h4>
                    </div>
                    <div class="card-body">
                        {!! Form::open(['action'=>['PostController@store'], 'method'=>'post']) !!}
                            <div class="form-group m-2 p-2">
                                {{ Form::label('Title') }}
                                {{ Form::text('title', '', ['class'=>'form-control']) }}
                            </div>
                            <div class="form-group m-2 p-2">
                                
                                {{ Form::label('Content') }}
                                {{ Form::textarea('body', '', ['class'=>'form-control']) }}
                            </div>
                            <div class="form-group m-2 p-2">
                                {{ Form::submit('Submit', ['class'=>'btn btn-success']) }}
                            </div>

                        {!! Form::close() !!}
                    </div>
                
                </div>
            </div>
        </div>

        

    </div>

@endsection