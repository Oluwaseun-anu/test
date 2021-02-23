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
						<p>Add Articles</p>
					</div>
				</li>
			</ul>
		</div>
	</section>
  
	 <!-- ==============================================
	 News Feed Section
	 =============================================== --> 
	<section class="newsfeed">
	  	<div class="container">
	  
			<div class="row one-row">
				<div class="col-md-12">
				<a href=""><h4>See All</h4></a>
				</div>
			</div>
	  
	   <div class="row top-row">
	   
	    <div class="col-md-3">
		 	<div class="tr-section">
				<div class="tr-post">
					<div class="entry-header">
						<div class="entry-thumbnail">
							<a href="#"><img class="img-fluid" src="assets/img/posts/30.jpg" alt="Image"></a>
						</div><!-- /entry-thumbnail -->
					</div><!-- /entry-header -->
					<div class="post-content">
						<div class="author-post text-center">
							<a href="#"><img class="img-fluid rounded-circle" src="assets/img/users/2.jpg" alt="Image"></a>
						</div><!-- /author -->
						<div class="card-content">
							<h4>Alex Grantte</h4>
							<span>@alex</span>
						</div>
						<a href="{{ url('/article') }}" class="kafe-btn kafe-btn-mint-small full-width"> View more
						</a>		  
					</div><!-- /.post-content -->									
		  		</div><!-- /.tr-post -->	
	     	</div><!-- /.tr-post -->	
		</div><!-- /col-sm-3 -->
	   
	    <div class="col-md-3">
		 <div class="tr-section">
		  <div class="tr-post">
		   <div class="entry-header">
		    <div class="entry-thumbnail">
		     <a href="{{ url('/article') }}"><img class="img-fluid" src="assets/img/posts/27.jpg" alt="Image"></a>
		    </div><!-- /entry-thumbnail -->
	       </div><!-- /entry-header -->
		   <div class="post-content">
		    <div class="author-post text-center">
		     <a href="#"><img class="img-fluid rounded-circle" src="assets/img/users/3.jpg" alt="Image"></a>
		    </div><!-- /author -->
			<div class="card-content">
			 <h4>Anna Morgan</h4>
		     <span>@anna</span>
			</div>
			 <a href="{{ url('/article') }}" class="kafe-btn kafe-btn-mint-small full-width"> View more
			 </a>		  
		   </div><!-- /.post-content -->									
		  </div><!-- /.tr-post -->	
	     </div><!-- /.tr-post -->	
		</div><!-- /col-sm-3 -->
	   
	    <div class="col-md-3">
		 <div class="tr-section">
		  <div class="tr-post">
		   <div class="entry-header">
		    <div class="entry-thumbnail">
		     <a href="#"><img class="img-fluid" src="assets/img/posts/28.jpg" alt="Image"></a>
		    </div><!-- /entry-thumbnail -->
	       </div><!-- /entry-header -->
		   <div class="post-content">
		    <div class="author-post text-center">
		     <a href="#"><img class="img-fluid rounded-circle" src="assets/img/users/6.jpg" alt="Image"></a>
		    </div><!-- /author -->
			<div class="card-content">
			 <h4>Sean Coleman</h4>
		     <span>@sean</span>
			</div>
			 <a href="{{ url('/article') }}" class="kafe-btn kafe-btn-mint-small full-width"> View more
			 </a>		  
		   </div><!-- /.post-content -->									
		  </div><!-- /.tr-post -->	
	     </div><!-- /.tr-post -->	
		</div><!-- /col-sm-3 -->
	   
	    <div class="col-md-3">
		 <div class="tr-section">
		  <div class="tr-post">
		   <div class="entry-header">
		    <div class="entry-thumbnail">
		     <a href="#"><img class="img-fluid" src="assets/img/posts/31.jpg" alt="Image"></a>
		    </div><!-- /entry-thumbnail -->
	       </div><!-- /entry-header -->
		   <div class="post-content">
		    <div class="author-post text-center">
		     <a href="#"><img class="img-fluid rounded-circle" src="assets/img/users/15.jpg" alt="Image"></a>
		    </div><!-- /author -->
			<div class="card-content">
			 <h4>Vanessa Wells</h4>
		     <span>@vanessa</span>
			</div>
			 <a href="{{ url('/article') }}" class="kafe-btn kafe-btn-mint-small full-width"> View more
			 </a>		  
		   </div><!-- /.post-content -->									
		  </div><!-- /.tr-post -->	
	     </div><!-- /.tr-post -->	
		</div><!-- /col-sm-3 -->
		
	   </div>
	  
	   <div class="row one-row">
	    <div class="col-md-12">
	     <h4>Explore Section</h4>
		</div>
	   </div>
	  
	   <div class="row">
	   
	    <div class="col-md-4">
		 {{-- <a href="#myModal" data-toggle="modal"> --}}
		 <div class="explorebox" 
		   style="background: linear-gradient( rgba(34,34,34,0.2), rgba(34,34,34,0.2)), url('assets/img/posts/22.gif') no-repeat;
		          background-size: cover;
                  background-position: center center;
                  -webkit-background-size: cover;
                  -moz-background-size: cover;
                  -o-background-size: cover;">
		  <div class="explore-top">
		   <div class="explore-like"><i class="fa fa-heart"></i> <span>14,100</span></div>
		   <div class="explore-circle pull-right"><i class="far fa-bookmark"></i></div>
          </div>		  
          <div class="explore-body">
           <div class=""><img class="img-circle" src="assets/img/users/13.jpeg" alt="user"></div>
          </div>		  
		 </div>
		 </a>
		</div><!--/ col-md-4 -->
	   
	    <div class="col-md-4">
		 <a href="#myModal" data-toggle="modal">
		 <div class="explorebox" 
		   style="background: linear-gradient( rgba(34,34,34,0.2), rgba(34,34,34,0.2)), url('assets/img/posts/7.jpg') no-repeat;
		          background-size: cover;
                  background-position: center center;
                  -webkit-background-size: cover;
                  -moz-background-size: cover;
                  -o-background-size: cover;">
		  <div class="explore-top">
		   <div class="explore-like"><i class="fa fa-heart"></i> <span>100,100</span></div>
		   <div class="explore-circle pull-right"><i class="far fa-bookmark"></i></div>
          </div>		  
          <div class="explore-body">
           <div class=""><img class="img-circle" src="assets/img/users/1.jpg" alt="user"></div>
          </div>		  
		 </div>
		 </a>
		</div><!--/ col-md-4 -->
	   
	    <div class="col-md-4">
		 <a href="#myModal" data-toggle="modal">
		 <div class="explorebox" 
		   style="background: linear-gradient( rgba(34,34,34,0.2), rgba(34,34,34,0.2)), url('assets/img/posts/19.jpg') no-repeat;
		          background-size: cover;
                  background-position: center center;
                  -webkit-background-size: cover;
                  -moz-background-size: cover;
                  -o-background-size: cover;">
		  <div class="explore-top">
		   <div class="explore-like"><i class="fa fa-heart"></i> <span>100</span></div>
		   <div class="explore-circle pull-right"><i class="far fa-bookmark"></i></div>
          </div>		  
          <div class="explore-body">
           <div class=""><img class="img-circle" src="assets/img/users/2.jpg" alt="user"></div>
          </div>		  
		 </div>
		 </a>
		</div><!--/ col-md-4 -->
		
	   </div><!--/ row -->
	   
	   <div class="row">
	   
	    <div class="col-md-4">
		 <a href="#myModal" data-toggle="modal">
		 <div class="explorebox" 
		   style="background: linear-gradient( rgba(34,34,34,0.2), rgba(34,34,34,0.2)), url('assets/img/posts/16.jpg') no-repeat;
		          background-size: cover;
                  background-position: center center;
                  -webkit-background-size: cover;
                  -moz-background-size: cover;
                  -o-background-size: cover;">
		  <div class="explore-top">
		   <div class="explore-like"><i class="fa fa-heart"></i> <span>324</span></div>
		   <div class="explore-circle pull-right"><i class="far fa-bookmark"></i></div>
          </div>		  
          <div class="explore-body">
           <div class=""><img class="img-circle" src="assets/img/users/3.jpg" alt="user"></div>
          </div>		  
		 </div>
		 </a>
		</div><!--/ col-md-4 -->
	   
	    <div class="col-md-4">
		 <a href="#myModal" data-toggle="modal">
		 <div class="explorebox" 
		   style="background: linear-gradient( rgba(34,34,34,0.2), rgba(34,34,34,0.2)), url('assets/img/posts/17.jpg') no-repeat;
		          background-size: cover;
                  background-position: center center;
                  -webkit-background-size: cover;
                  -moz-background-size: cover;
                  -o-background-size: cover;">
		  <div class="explore-top">
		   <div class="explore-like"><i class="fa fa-heart"></i> <span>1023</span></div>
		   <div class="explore-circle pull-right"><i class="far fa-bookmark"></i></div>
          </div>		  
          <div class="explore-body">
           <div class=""><img class="img-circle" src="assets/img/users/4.jpg" alt="user"></div>
          </div>		  
		 </div>
		 </a>
		</div><!--/ col-md-4 -->
	   
	    <div class="col-md-4">
		 <a href="#myModal" data-toggle="modal">
		 <div class="explorebox" 
		   style="background: linear-gradient( rgba(34,34,34,0.2), rgba(34,34,34,0.2)), url('assets/img/posts/20.jpg') no-repeat;
		          background-size: cover;
                  background-position: center center;
                  -webkit-background-size: cover;
                  -moz-background-size: cover;
                  -o-background-size: cover;">
		  <div class="explore-top">
		   <div class="explore-like"><i class="fa fa-heart"></i> <span>40</span></div>
		   <div class="explore-circle pull-right"><i class="far fa-bookmark"></i></div>
          </div>		  
          <div class="explore-body">
           <div class=""><img class="img-circle" src="assets/img/users/5.jpg" alt="user"></div>
          </div>		  
		 </div>
		 </a>
		</div><!--/ col-md-4 -->
		
	   </div><!--/ row -->
	   
	   <div class="row">
	   
	    <div class="col-md-4">
		 	<a href="#myModal" data-toggle="modal">
		 	<div class="explorebox" 
				style="background: linear-gradient( rgba(34,34,34,0.2), rgba(34,34,34,0.2)), url('assets/img/posts/8.jpg') no-repeat;
						background-size: cover;
						background-position: center center;
						-webkit-background-size: cover;
						-moz-background-size: cover;
						-o-background-size: cover;">
		  <div class="explore-top">
		   <div class="explore-like"><i class="fa fa-heart"></i> <span>63,453</span></div>
		   <div class="explore-circle pull-right"><i class="far fa-bookmark"></i></div>
          </div>		  
          <div class="explore-body">
           <div class=""><img class="img-circle" src="assets/img/users/6.jpg" alt="user"></div>
          </div>		  
		 </div>
		 </a>
		</div><!--/ col-md-4 -->
	   
	    <div class="col-md-4">
		 <a href="#myModal" data-toggle="modal">
		 <div class="explorebox" 
		   style="background: linear-gradient( rgba(34,34,34,0.2), rgba(34,34,34,0.2)), url('assets/img/posts/9.jpg') no-repeat;
		          background-size: cover;
                  background-position: center center;
                  -webkit-background-size: cover;
                  -moz-background-size: cover;
                  -o-background-size: cover;">
		  <div class="explore-top">
		   <div class="explore-like"><i class="fa fa-heart"></i> <span>1243</span></div>
		   <div class="explore-circle pull-right"><i class="far fa-bookmark"></i></div>
          </div>		  
          <div class="explore-body">
           <div class=""><img class="img-circle" src="assets/img/users/7.jpg" alt="user"></div>
          </div>		  
		 </div>
		 </a>
		</div><!--/ col-md-4 -->
	   
	    <div class="col-md-4">
		 <a href="#myModal" data-toggle="modal">
		 <div class="explorebox" 
		   style="background: linear-gradient( rgba(34,34,34,0.2), rgba(34,34,34,0.2)), url('assets/img/posts/10.jpg') no-repeat;
		          background-size: cover;
                  background-position: center center;
                  -webkit-background-size: cover;
                  -moz-background-size: cover;
                  -o-background-size: cover;">
		  <div class="explore-top">
		   <div class="explore-like"><i class="fa fa-heart"></i> <span>645</span></div>
		   <div class="explore-circle pull-right"><i class="far fa-bookmark"></i></div>
          </div>		  
          <div class="explore-body">
           <div class=""><img class="img-circle" src="assets/img/users/8.jpg" alt="user"></div>
          </div>		  
		 </div>
		 </a>
		</div><!--/ col-md-4 -->
		
	   </div><!--/ row -->
	   
	  </div><!--/ container -->
	</section><!--/ newsfeed -->
  
	  <!-- ==============================================
       Modal Section
       =============================================== -->
	   	<div id="myModal" class="modal fade">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-body">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
							<span aria-hidden="true">×</span><span class="sr-only">Close</span>
						</button><!--/ button -->
						<form method="POST" action="{{ route('articles.update') }}" enctype="multipart/form-data">
							@csrf
							<div class="form-group">
								<input id="title" type="text" placeholder="Title" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required autocomplete="title" autofocus>

								@error('title')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
							</div>
							<div class="form-group">
								<label for="article_image" class="col-md-4 col-form-label text-md-right">{{ __('Add picture') }}</label>
								<input id="article_image" type="file" placeholder="Add picture" class="form-control @error('article_image') is-invalid @enderror" name="article_image" value="{{ old('article_image') }}" required autocomplete="article_image" autofocus>

								@error('article_image')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
							</div>
							<div class="form-group">
								<textarea type="text" class="form-control" name="description" value="{{ old('description') }}" required autocomplete="description" autofocus>Description
								</textarea>
							</div>
							<div class="form-group">
								<textarea type="text" class="form-control" name="article" value="{{ old('article') }}" required autocomplete="article" autofocus>Content
								</textarea>
							</div>
							{{-- <button type="submit" class="btn btn-link p-0 m-0 align-baseline">click here to request another</button>. --}}
							<button type="submit" class="btn btn-success">Upload</button>
						</form>		
					</div><!--/ modal-body -->
			
				</div><!--/ modal-content -->
			</div><!--/ modal-dialog -->
		</div><!--/ modal -->
	 
	 
	 @endsection
