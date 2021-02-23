@extends('posts.layout')

@section('content')
    <div class="container-fluid bg-info">
        <h1>Posts</h1>
        <div class="m-2">
            <a class="btn btn-sm btn-info" href="/posts/create">New</a>
        </div>
        <div class="row">
            <div class="col-md-8">
                @if(count($posts) > 0)
                    @foreach($posts as $post)
                    <div class="cardbox bg-warning">
                        <div class="card-header">
                            <h4 class="text-center">{{ $post->title }}</h4>
                        </div>
                        <div class="card-body">
                            <p class="">{{ $post->body }}</p>
                        </div>
                        <div class="card-footer m-2 p-2">
                            <a class="btn btn-sm btn-primary" href="/posts/{{ $post->id }}">Read More</a>
                            <a class="btn btn-sm btn-success" href="/posts/{{ $post->id }}/edit">Edit</a>

                        </div>
                        {{ Form::open(['action'=>['PostController@destroy', $post->id], 'method', 'get']) }}
                        
                            {{ Form::hidden('_method', 'DELETE') }}
                            {{ Form::submit('Delete', ['class'=>'btn btn-danger']) }}

                        {!! Form::close() !!}
                    
                    </div>
                    @endforeach
                @endif
            </div>
        </div>

        

    </div>

@endsection