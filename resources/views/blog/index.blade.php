@extends('books.layout')

@section('content')
    <div class="container">
        <div class="row bg-warning">
            <h2>Blog</h2>
            <a href="/blog/create" class="btn btn-info">New</a>
            
            @if(count($blogs)>0)
                @foreach($blogs as $blog)
                    <div class="col-md-8">
                        <div class="cardbox bg-info">
                            <div class="card-header bg-danger text-center">
                                <h4>{{ $blog->title }}</h4>
                            </div>
                            <div class="card-body">
                                <p>{{ $blog->content }}</p>
                            </div>
                            <div class="card-footer">
                                <a href="/blog/{{ $blog->id }}/edit" class="btn btn-info">Edit</a>
                                <a href="/blog/{{ $blog->id }}" class="btn btn-warning">Read more</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <p>There are no articles to show</p>
            @endif
            
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