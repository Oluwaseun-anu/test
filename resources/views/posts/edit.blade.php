@extends('posts.layout')

@section('content')
    <div class="container-fluid bg-info">
        <h1>Post</h1>
        <div class="row">
            <div class="col-md-8">
                <div class="cardbox bg-warning">
                    <div class="card-header">
                        <h4 class="text-center">Edit Post</h4>
                    </div>
                    <div class="card-body">
                        {{-- <form action="/posts/{{ $post->id }}" method="POST">
                           
                            {{ method_field('PUT') }}
                            @csrf
                            <div class="form-group">
                                <label for="title">Title</label>
                                <textarea id="title" type="text">{{ $post->title }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="body">Content</label>
                                <textarea id="body" type="text">{{ $post->body }}</textarea>
                            </div>
                                
                                <div class="form-group">
                                    <button type="submit" class="btn btn-md btn-success">Update</button>
                                </div>

                        </form> --}}
                        {!! Form::open(['action'=>['PostController@update', $post->id], 'method'=>'post']) !!}
                            <div class="form-group m-2 p-2">
                                {{ Form::text('title', $post->title, ['class'=>'form-control']) }}
                            </div>
                            <div class="form-group m-2 p-2">
                                {{ Form::textarea('body', $post->body, ['class'=>'form-control']) }}
                            </div>
                            {{Form::hidden('_method', 'put')}}
                            <div class="form-group m-2 p-2">
                                {{ Form::submit('Update', ['class'=>'btn btn-success']) }}
                            </div>

                        {!! Form::close() !!}
                    </div>
                
                </div>
            </div>
        </div>

        

    </div>

@endsection