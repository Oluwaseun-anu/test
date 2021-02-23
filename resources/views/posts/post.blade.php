@extends('posts.layout')

@section('content')
    <div class="container-fluid bg-info">
        <h1>Post</h1>
        <div class="row">
            <div class="col-md-8">
                <div class="cardbox bg-warning">
                    <div class="card-header">
                        <h4 class="text-center">{{ $post->title }}</h4>
                    </div>
                    <div class="card-body">
                        <p class="">{{ $post->body }}</p>
                    </div>
                </div>
            </div>
        </div>

        

    </div>

@endsection