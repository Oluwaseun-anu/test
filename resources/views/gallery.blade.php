@extends('layouts.master')

@section('content')
      
    <section class="stories">
		
		<div class="stories-base">
			<ul class="list-group">
				<li class="list-group-item full-width">
					<div class="pull-left">
						<a href="#myModal" data-toggle="modal">
							<button class="btn btn-stories">
								<i class="fa fa-plus"></i>
							</button>
						</a>
						<p>Add To Gallery</p>
					</div>
				</li>
			</ul>
			@if (count($errors) > 0)
				<div class="alert alert-danger">
					<ul>
						@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
			@endif
			@if(session('status'))
				<div class="alert alert-success">
				{{ session('status') }}
				</div> 
			@endif
		</div>
	</section>
  
	 <!-- ==============================================
	 News Feed Section
	 =============================================== --> 
	<section class="stories">
		<div class="container">
			<div class="row">
				{{-- @foreach($data ?? as $image)
					<tr><td>{{$image->id}}</td>
						<td>  --}}
							<?php 
							// foreach (json_decode($image->filename)as $picture) { 
								?>
								{{-- <img src="{{ asset('/uploads/gallery/'.$picture) }}"/> --}}
								<?php 
							// } 
							?>
						{{-- </td>
					</tr>
				@endforeach --}}
				@foreach( $data ?? as $image)
					
					@foreach (json_decode($image->filename)as $picture) 
					
					<div class="col-md-4">
						<a href="#">
						<div class="storybox" 
						style="background: linear-gradient( rgba(228, 183, 183, 0.78), rgba(34,34,34,0.78)), url('asset('/uploads/gallery/{{ $picture }})') no-repeat;
								background-size: cover;
								background-position: center center;
								-webkit-background-size: cover;
								-moz-background-size: cover;
								-o-background-size: cover;">
						<div class="story-body text-center">
						<div class=""><img class="img-circle" src="{{ asset(auth()->user()->image) }}" alt="user"></div>
						<h4>{{ Auth::user()->name }}</h4>
						<p>2 hours ago</p>
						{{ $article->created_at->diffForHumans() }}
						</div>		  
						</div>
						</a>
					</div> 
					 
					@endforeach
					
				@endforeach
{{-- 
				@foreach($data ?? as $image)
					<tr>
						<td>{{$image->id}}</td>
						<td>{{$image->filename}}</td>
						<td>
							<img src="{{public_path() . '/uploads/gallery/' . $image->filename}}" width="200">
						</td>
						<td>{{$image->created_at}}</td>
					</tr>
				@endforeach --}}
				
				<div class="col-md-4">
					<a href="#">
					<div class="storybox" 
					style="background: linear-gradient( rgba(34,34,34,0.78), rgba(34,34,34,0.78)), url('assets/img/posts/2.gif') no-repeat;
							background-size: cover;
							background-position: center center;
							-webkit-background-size: cover;
							-moz-background-size: cover;
							-o-background-size: cover;">
					<div class="story-body text-center">
					<div class=""><img class="img-circle" src="assets/img/users/13.jpeg" alt="user"></div>
					<h4>Eleanor Harper</h4>
					<p>4 hours ago</p>
					</div>		  
					</div>
					</a>
				</div> 

				<div class="col-md-4">
					<a href="#">
					<div class="storybox" 
					style="background: linear-gradient( rgba(34,34,34,0.78), rgba(34,34,34,0.78)), url('assets/img/posts/4.jpg') no-repeat;
							background-size: cover;
							background-position: center center;
							-webkit-background-size: cover;
							-moz-background-size: cover;
							-o-background-size: cover;">
					<div class="story-body text-center">
					<div class=""><img class="img-circle" src="assets/img/users/1.jpg" alt="user"></div>
					<h4>Vanessa Wells</h4>
					<p>5 hours ago</p>
					</div>		  
					</div>
					</a>
				</div> 
					
			</div>
			<div class="row">

				<div class="col-md-4">
					<a href="#">
					<div class="storybox" 
					style="background: linear-gradient( rgba(34,34,34,0.78), rgba(34,34,34,0.78)), url('assets/img/posts/23.gif') no-repeat;
							background-size: cover;
							background-position: center center;
							-webkit-background-size: cover;
							-moz-background-size: cover;
							-o-background-size: cover;">
					<div class="story-body text-center">
					<div class=""><img class="img-circle" src="assets/img/users/18.jpg" alt="user"></div>
					<h4>Benjamin Robinson</h4>
					<p>2 hours ago</p>
					</div>		  
					</div>
					</a>
				</div> 

				<div class="col-md-4">
					<a href="#">
					<div class="storybox" 
					style="background: linear-gradient( rgba(34,34,34,0.78), rgba(34,34,34,0.78)), url('assets/img/posts/8.jpg') no-repeat;
							background-size: cover;
							background-position: center center;
							-webkit-background-size: cover;
							-moz-background-size: cover;
							-o-background-size: cover;">
					<div class="story-body text-center">
					<div class=""><img class="img-circle" src="assets/img/users/17.jpeg" alt="user"></div>
					<h4>Sean Coleman</h4>
					<p>5 hours ago</p>
					</div>		  
					</div>
					</a>
				</div> 

				<div class="col-md-4">
					<a href="#">
					<div class="storybox" 
					style="background: linear-gradient( rgba(34,34,34,0.78), rgba(34,34,34,0.78)), url('assets/img/posts/3.gif') no-repeat;
							background-size: cover;
							background-position: center center;
							-webkit-background-size: cover;
							-moz-background-size: cover;
							-o-background-size: cover;">
					<div class="story-body text-center">
					<div class=""><img class="img-circle" src="assets/img/users/16.jpg" alt="user"></div>
					<h4>Anthony McCartney</h4>
					<p>6 hours ago</p>
					</div>		  
					</div>
					</a>
				</div> 
				
			</div>
			<div class="row">

				<div class="col-md-4">
					<a href="#">
					<div class="storybox" 
					style="background: linear-gradient( rgba(34,34,34,0.78), rgba(34,34,34,0.78)), url('assets/img/posts/6.jpg') no-repeat;
							background-size: cover;
							background-position: center center;
							-webkit-background-size: cover;
							-moz-background-size: cover;
							-o-background-size: cover;">
					<div class="story-body text-center">
					<div class=""><img class="img-circle" src="assets/img/users/3.jpg" alt="user"></div>
					<h4>Vanessa Wells</h4>
					<p>7 hours ago</p>
					</div>		  
					</div>
					</a>
				</div> 

				<div class="col-md-4">
					<a href="#">
					<div class="storybox" 
					style="background: linear-gradient( rgba(34,34,34,0.78), rgba(34,34,34,0.78)), url('assets/img/posts/13.gif') no-repeat;
							background-size: cover;
							background-position: center center;
							-webkit-background-size: cover;
							-moz-background-size: cover;
							-o-background-size: cover;">
					<div class="story-body text-center">
					<div class=""><img class="img-circle" src="assets/img/users/15.jpg" alt="user"></div>
					<h4>Anna Morgan</h4>
					<p>10 hours ago</p>
					</div>		  
					</div>
					</a>
				</div> 

				<div class="col-md-4">
					<a href="#">
					<div class="storybox" 
					style="background: linear-gradient( rgba(34,34,34,0.78), rgba(34,34,34,0.78)), url('assets/img/posts/24.jpg') no-repeat;
							background-size: cover;
							background-position: center center;
							-webkit-background-size: cover;
							-moz-background-size: cover;
							-o-background-size: cover;">
					<div class="story-body text-center">
					<div class=""><img class="img-circle" src="assets/img/users/6.jpg" alt="user"></div>
					<h4>Francis Long</h4>
					<p>2 hours ago</p>
					</div>		  
					</div>
					</a>
				</div> 
				
			</div>

		</div><!--/ container -->
	</section><!--/ newsfeed -->
	 <!-- ==============================================
		
	<! ==============================================
       Modal Section
       =============================================== -->
	<div id="myModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-body">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
						<span aria-hidden="true">×</span><span class="sr-only">Close</span>
					</button><!--/ button -->
					
					<form method="POST" action="{{ route('gallery.update') }}" enctype="multipart/form-data">
						@csrf
						{{-- <div class="form-group">
							<input id="name" type="text" placeholder="Full Name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

							@error('name')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
						</div> --}}
						<div class="form-group">
							<label for="image" class="col-md-4 col-form-label text-md-right">{{ __('Add picture') }}(can attach more than one)</label>
							<input id="image" type="file" placeholder="Add picture" class="form-control @error('filename') is-invalid @enderror" name="filename[]" multiple value="{{ old('filename') }}" required autocomplete="filename" autofocus>

							@error('filename')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
						</div>
						{{-- <button type="submit" class="btn btn-link p-0 m-0 align-baseline">click here to request another</button>. --}}
						<button type="submit" class="btn btn-success">Upload</button>
					</form>		
				</div><!--/ modal-body -->
		
			</div><!--/ modal-content -->
		</div><!--/ modal-dialog -->
	</div><!--/ modal -->
@endsection
