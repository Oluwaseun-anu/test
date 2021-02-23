@extends('books.layout')

@section('content')
    <div class="container-fluid">
        <div class="row bg-warning">
            <h2 class="p-2">Article</h2>
                <div class="col-md-8">
                    <div class="cardbox bg-info">
                        <div class="card-header text-center">
                            <h4>{{ $blog->title }}</h4>
                        </div>
                        <div class="card-body bg-danger">
                            @if($blog->image)
                                <img src="/uploads/blog/{{ $blog->image }}" class="img-responsive img-fluid" style="width:500px; height:100%">
                            @endif
                            <p>{{ $blog->content }}</p>
                        </div>
                        <div class="card-footer">
                            {!! Form::open(['action'=>['BlogController@destroy', $blog->id], 'method'=>'post']) !!}
                                {{ Form::hidden('_method', 'DELETE') }}
                                {{ Form::submit('Delete', ['class'=>'btn btn-danger']) }}
                            {!! Form::close() !!}
                            
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