@extends('books.layout')

@section('content')
    <div class="container-fluid">
        <div class="row bg-danger">
            <h2 class="p-2">Create New Articles</h2>
                <div class="col-md-8">
                    <div class="cardbox bg-info">
                        <div class="card-header text-center">
                            <h4>Fill the form below to continue</h4>
                        </div>
                        <div class="card-body">
                            {{ Form::open(['action'=>'BlogController@store', 'method'=>'post', 'files' => true]) }}
                            <div class="form-group">
                                {{Form::label('Title')  }}
                                {{ Form::text('title', '', ['class'=>'form-control']) }}
                            </div>
                            <div class="form-group">
                                {{Form::label('Content')  }}
                                {{ Form::textarea('content', '', ['class'=>'form-control']) }}
                            </div>
                            <div class="form-group p-2">
                                {{Form::label('Image')  }}
                                {{ Form::file('image', $attributes = []) }}
                            </div>
                            <div class="form-group p-2">
                                {{ Form::submit('Submit', ['class'=>'btn btn-success']) }}
                            </div>
                            {{ Form::close() }}
                        </div>
                        <div class="card-footer">
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="cardbox bg-secondary">
                        <div class="card-header bg-white">
                            Coming soon!
                        </div>
                        <div class="card-body bg-warning text-success">
                            <ul>
                                <li>Heralds of His coming.</li>
                                <li>The Storks Magazine.</li>
                                <li>Harmattan Festival.</li>
                                <li>The Commisioner's report on health.</li>
                                <li class="btn btn-sm btn-success">See more...</li>
                            </ul>
                        </div>
                    </div>
                </div>
        </div>
    </div>


@endsection

