<!DOCTYPE html>
<html lang="en">
  	<head>

	    <!-- ==============================================
		Title and Meta Tags
		=============================================== -->
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">  
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>X-Docs</title>
		<meta name="description" content="" />
        <meta name="keywords" content="" />
        <meta property="og:title" content="" />
        <meta property="og:url" content="" />
        <meta property="og:description" content="" />		
		
		<!-- ==============================================
		Favicons
		=============================================== --> 
		<link rel="icon" href="{{asset('assets/img/logo.jpg')}}">
		<link rel="apple-touch-icon" href="{{asset('img/favicons/apple-touch-icon.png')}}">
		<link rel="apple-touch-icon" sizes="72x72" href="{{asset('img/favicons/apple-touch-icon-72x72.png')}}">
		<link rel="apple-touch-icon" sizes="114x114" href="{{asset('img/favicons/apple-touch-icon-114x114.png')}}">
		
	    <!-- ==============================================
		CSS
		=============================================== -->
        <link type="text/css" href="{{asset('assets/css/demos/interest.css')}}" rel="stylesheet" />
				
		<!-- ==============================================
		Feauture Detection
		=============================================== -->
		<script src="{{asset('assets/js/modernizr-custom.js')}}"></script>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->	
		
  	</head>

	<body>

     <!-- ==============================================
     Navigation Section
     =============================================== -->  
     	<header class="tr-header">
			<nav class="navbar navbar-default">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					<a class="navbar-brand" href="{{ route('index') }}"><i class="fab fa-instagram"></i> X-Docs</a>
					</div><!-- /.navbar-header -->
					<div class="navbar-left">
						<div class="collapse navbar-collapse" id="navbar-collapse">
							<ul class="nav navbar-nav">
							</ul>
						</div>
					</div><!-- /.navbar-left -->
					<div class="navbar-right">                          
						<ul class="nav navbar-nav">
							<li>
									<div class="search-dashboard">
										<form>
												<input placeholder="Search here" type="text">
												<button type="submit"><i class="fa fa-search"></i></button>
										</form>
									</div>							
							</li>

							<li class="dropdown notification-list">
								<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
								<i class="fa fa-bell noti-icon"></i>
								<span class="badge badge-danger badge-pill noti-icon-badge">4</span>
								</a>
								<div class="dropdown-menu dropdown-menu-right dropdown-lg">
								
								<div class="dropdown-item noti-title">
								<h6 class="m-0">
								<span class="pull-right">
									<a href="" class="text-dark"><small>Clear All</small></a> 
								</span>Notification
								</h6>
								</div>

								<div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 416.983px;">
								<div class="slimscroll" style="max-height: 230px; overflow: hidden; width: auto; height: 416.983px;">
								<div id="Slim">
									<a href="javascript:void(0);" class="dropdown-item notify-item">
									<div class="notify-icon bg-success"><i class="fa fa-comment"></i></div>
									<p class="notify-details">Caleb Flakelar commented on Admin<small class="text-muted">1 min ago</small></p>
									</a><!--/ dropdown-item-->
									<a href="javascript:void(0);" class="dropdown-item notify-item">
									<div class="notify-icon bg-success"><i class="fa fa-user-plus"></i></div>
									<p class="notify-details">Grace Flake followed you.<small class="text-muted">5 hours ago</small></p>
									</a><!--/ dropdown-item-->
									<a href="javascript:void(0);" class="dropdown-item notify-item">
									<div class="notify-icon bg-success"><i class="fa fa-heart"></i></div>
									<p class="notify-details">Carlos Crouch liked your photo.<small class="text-muted">3 days ago</small></p>
									</a><!--/ dropdown-item-->
									<a href="javascript:void(0);" class="dropdown-item notify-item">
									<div class="notify-icon bg-success"><i class="fa fa-comment"></i></div>
									<p class="notify-details">Caleb Flakelar commented on Admin<small class="text-muted">4 days ago</small></p>
									</a><!--/ dropdown-item-->
									<a href="javascript:void(0);" class="dropdown-item notify-item">
									<div class="notify-icon bg-success"><i class="fa fa-user-plus"></i></div>
									<p class="notify-details">Maureen Hilda followed you.<small class="text-muted">7 days ago</small></p>
									</a><!--/ dropdown-item-->
									<a href="javascript:void(0);" class="dropdown-item notify-item">
									<div class="notify-icon bg-success"><i class="fa fa-heart"></i></div>
									<p class="notify-details">Carlos Crouch liked your photo.<small class="text-muted">13 days ago</small></p>
									</a><!--/ dropdown-item-->
								</div><!--/ .Slim-->
								<div class="slimScrollBar" style="background: rgb(158, 165, 171) none repeat scroll 0% 0%; width: 8px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px;"></div>
								<div class="slimScrollRail" style="width: 8px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51) none repeat scroll 0% 0%; opacity: 0.2; z-index: 90; right: 1px;"></div>
								</div><!--/ .slimscroll-->
								</div><!--/ .slimScrollDiv-->
								<a href="photo_notifications.html" class="dropdown-item text-center notify-all">
								View all <i class="fa fa-arrow-right"></i>
								</a><!-- All-->
								</div><!--/ dropdown-menu-->
							</li>

							<li class="dropdown notification-list">
								<a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
								<i class="fa fa-envelope noti-icon"></i>
								<span class="badge badge-success badge-pill noti-icon-badge">6</span>
								</a>
								<div class="dropdown-menu dropdown-menu-right dropdown-lg dropdown-new">
								<div class="dropdown-item noti-title">
								<h6 class="m-0">
								<span class="float-right">
									<a href="" class="text-dark"><small>Clear All</small></a> 
								</span>Chat
								</h6>
								</div>

								<div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 416.983px;">
								<div class="slimscroll" style="max-height: 230px; overflow: hidden; width: auto; height: 416.983px;">
								<div id="Slim2">
									<a href="javascript:void(0);" class="dropdown-item notify-item nav-user">
									<div class="notify-icon"><img src="assets/img/users/1.jpg" class="img-responsive img-circle" alt=""> </div>
									<p class="notify-details">Cristina Pride</p>
									<p class="text-muted font-13 mb-0 user-msg">Hi, How are you? What about our next meeting</p>
									</a><!--/ dropdown-item-->
									<a href="javascript:void(0);" class="dropdown-item notify-item nav-user">
									<div class="notify-icon"><img src="assets/img/users/2.jpg" class="img-responsive img-circle" alt=""> </div>
									<p class="notify-details">Sam Garret</p>
									<p class="text-muted font-13 mb-0 user-msg">Yeah everything is fine</p>
									</a><!--/ dropdown-item-->
									<a href="javascript:void(0);" class="dropdown-item notify-item nav-user">
									<div class="notify-icon"><img src="assets/img/users/3.jpg" class="img-responsive img-circle" alt=""> </div>
									<p class="notify-details">Karen Robinson</p>
									<p class="text-muted font-13 mb-0 user-msg">Wow that's great</p>
									</a><!--/ dropdown-item-->
									<a href="javascript:void(0);" class="dropdown-item notify-item nav-user">
									<div class="notify-icon"><img src="assets/img/users/4.jpg" class="img-responsive img-circle" alt=""> </div>
									<p class="notify-details">Sherry Marshall</p>
									<p class="text-muted font-13 mb-0 user-msg">Hi, How are you? What about our next meeting</p>
									</a><!--/ dropdown-item-->
									<a href="javascript:void(0);" class="dropdown-item notify-item nav-user">
									<div class="notify-icon"><img src="assets/img/users/5.jpg" class="img-responsive img-circle" alt=""> </div>
									<p class="notify-details">Shawn Millard</p>
									<p class="text-muted font-13 mb-0 user-msg">Yeah everything is fine</p>
									</a><!--/ dropdown-item-->
								</div><!--/ .Slim-->
								<div class="slimScrollBar" style="background: rgb(158, 165, 171) none repeat scroll 0% 0%; width: 8px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px;"></div>
								<div class="slimScrollRail" style="width: 8px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51) none repeat scroll 0% 0%; opacity: 0.2; z-index: 90; right: 1px;"></div>
								</div><!--/ slimscroll-->
								</div> <!--/ slimScrollDiv-->
								<a href="photo_chat.html" class="dropdown-item text-center notify-all">
								View all <i class="fa fa-arrow-right"></i>
								</a>
								</div><!--/ dropdown-menu-->
							</li>
						
						
							<li class="dropdown mega-avatar">
								<a href="{{ url('/profile') }}" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
								<span class="avatar w-32"><img src="assets/img/users/2.jpg" class="img-resonsive img-circle" width="25" height="25" alt="..."></span>
								<!-- hidden-xs hides the username on small devices so only the image appears. -->
								<span class="hidden-xs">
								{{ Auth::user()->name }}
								</span><span class="caret"></span>
								</a>
								<div class="dropdown-menu w dropdown-menu-scale pull-right">
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="{{ url('/profile') }}"><span>Profile</span></a> 
								<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="{{ route('logout') }}"
										onclick="event.preventDefault();
														document.getElementById('logout-form').submit();">
											{{ __('Logout') }}
									</a>
									<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
										@csrf
									</form>
								</div>
							</li><!-- /navbar-item -->	
						
						</ul><!-- /.sign-in -->   
					</div><!-- /.nav-right -->
				</div><!-- /.container -->
			</nav><!-- /.navbar -->
     	</header><!-- Page Header --> 
  
	 <!-- ==============================================
	 Stories Section
	 =============================================== -->
		<section class="stories">
			<div class="container-fluid">
				<div class="row">
			
					<div class="stories-base">
						<ul class="list-group">
							<li class="list-group-item full-width">
								<div class="pull-left">
									<a href="#myModal" data-toggle="modal">
										<button class="btn btn-stories">
											<i class="fa fa-plus"></i>
										</button>
									</a>
									<a href=""><img src="assets/img/users/1.jpg" alt="" class="img-circle"></a>
									<a href=""><img src="assets/img/users/2.jpg" alt="" class="img-circle"></a>
									<a href=""><img src="assets/img/users/3.jpg" alt="" class="img-circle"></a>
									<a href=""><img src="assets/img/users/4.jpg" alt="" class="img-circle"></a>
									<a href=""><img src="assets/img/users/5.jpg" alt="" class="img-circle"></a>
									<a href=""><img src="assets/img/users/6.jpg" alt="" class="img-circle"></a>
									<a href=""><img src="assets/img/users/7.jpg" alt="" class="img-circle"></a>
									<a href=""><img src="assets/img/users/8.jpg" alt="" class="img-circle"></a>
									<a href=""><img src="assets/img/users/9.jpg" alt="" class="img-circle"></a>
									<a href=""><img src="assets/img/users/10.jpg" alt="" class="img-circle"></a>
									<a href=""><img src="assets/img/users/11.jpg" alt="" class="img-circle"></a>
									<a href=""><img src="assets/img/users/12.jpg" alt="" class="img-circle"></a>
									<a href=""><img src="assets/img/users/13.jpeg" alt="" class="img-circle"></a>
									<a href=""><img src="assets/img/users/14.jpg" alt="" class="img-circle"></a>
								</div><!--/ pull-left -->
							</li> 					   
						</ul>
					</div><!--/ followers-base -->	  
			
				</div>
			</div>
		</section>	
	
		<!-- ==============================================
		News Feed Section
		=============================================== --> 
		<section class="channel-one">
			<div class="container-fluid">
				<div class="row">
			
					<div class="col-lg-3">
						<aside class="sidebar">		  
							<ul>
								<li class="active"><a href=""><i class="fa fa-align-left"></i> Channels One</a></li>
								<li><a href=""><i class="fa fa-align-left"></i> Channels Two</a></li>
								<li><a href=""><i class="fa fa-align-left"></i> Channels Three</a></li>
								<li class="hr"></li>
								<li><a href=""><i class="fa fa-chart-bar"></i> Trending</a></li>
								<li><a href=""><i class="far fa-copy"></i> Channel Newsfeed</a></li>
								<li><a href=""><i class="fa fa-align-left"></i> Newsfeed</a></li>
								<li class="hr"></li>
								<li><a href=""><i class="fa fa-users"></i> People</a></li>
								<li><a href=""><i class="fa fa-user"></i> Profile</a></li>
								<li><a href=""><i class="fa fa-align-left"></i> Lists</a></li>
							</ul>
						</aside>		  
					
					</div><!--/ col-lg-3 -->
				
					<div class="col-lg-9">
				
					<div class="row">
					
						<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="photo-rounded-fluffs">
						<a href="#"> 
						<img class="img-responsive" src="assets/img/fluffs/1.jpg" alt="Image">
						<h1 class="text-center">Moments</h1>
						</a> 
						</div>
						</div> 
						
						<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="photo-rounded-fluffs">
						<a href="#">
						<img class="img-responsive" src="assets/img/fluffs/2.jpg" alt="Image">
						<h1 class="text-center">Comedy</h1>
						</a> 
						</div>
						</div>
						
						<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="photo-rounded-fluffs">
						<a href="#"> 
						<img class="img-responsive" src="assets/img/fluffs/3.jpg" alt="Image">
						<h1 class="text-center">Womanly</h1>
						</a> 
						</div>
						</div>
					
						<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="photo-rounded-fluffs">
						<a href="#">
						<img class="img-responsive" src="assets/img/fluffs/4.jpg" alt="Image">
						<h1 class="text-center">Manly</h1>
						</a> 
						</div>
						</div>
						
					</div><!--/ row -->
				
					<div class="row"> 
						
						<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="photo-rounded-fluffs">
						<a href="#">
						<img class="img-responsive" src="assets/img/fluffs/5.jpg" alt="Image">
						<h1 class="text-center">Movies</h1>
						</a> 
						</div>
						</div>
						
						<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="photo-rounded-fluffs">
						<a href="#">
						<img class="img-responsive" src="assets/img/fluffs/6.jpg" alt="Image">
						<h1 class="text-center">Music</h1>
						</a> 
						</div>
						</div>
					
						<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="photo-rounded-fluffs">
						<a href="#">
						<img class="img-responsive" src="assets/img/fluffs/7.jpg" alt="Image">
						<h1 class="text-center">Celebs</h1>
						</a> 
						</div>
						</div> 
						
						<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="photo-rounded-fluffs">
						<a href="#">
						<img class="img-responsive" src="assets/img/fluffs/11.jpg" alt="Image">
						<h1 class="text-center">Politics</h1>
						</a> 
						</div>
						</div>
						
					</div><!--/ row -->
				
					<div class="row">
						
						<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="photo-rounded-fluffs">
						<a href="#">
						<img class="img-responsive" src="assets/img/fluffs/8.jpg" alt="Image">
						<h1 class="text-center">Sports</h1>
						</a>  
						</div>
						</div>
				
						<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="photo-rounded-fluffs">
						<a href="#">
						<img class="img-responsive" src="assets/img/fluffs/9.jpg" alt="Image">
						<h1 class="text-center">Technology</h1>
						</a> 
						</div>
						</div> 
						
						<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="photo-rounded-fluffs">
						<a href="#">
						<img class="img-responsive" src="assets/img/fluffs/10.jpg" alt="Image">
						<h1 class="text-center">Business</h1>
						</a> 
						</div>
						</div>
						
						<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="photo-rounded-fluffs">
						<a href="#">
						<img class="img-responsive" src="assets/img/fluffs/12.jpg" alt="Image">
						<h1 class="text-center">Games</h1>
						</a> 
						</div>
						</div>
						
					</div><!--/ row -->
					
					</div><!--/ col-lg-9 -->
				
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
						<form method="POST" action="{{ route('biography') }}" enctype="multipart/form-data">
							@csrf
							<div class="form-group">
								<input id="name" type="text" placeholder="Full Name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

								@error('name')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
							</div>
							<div class="form-group">
								<label for="image" class="col-md-4 col-form-label text-md-right">{{ __('Add your picture') }}</label>
								<input id="image" type="file" placeholder="Add your picture" class="form-control @error('Image') is-invalid @enderror" name="image" value="{{ old('image') }}" required autocomplete="image" autofocus>

								@error('image')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
							</div>
							<div class="form-group">
								<textarea type="text"class="form-control" name="biography" value="{{ old('biography') }}" required autocomplete="biography" autofocus>Content
								</textarea>
							</div>
							{{-- <button type="submit" class="btn btn-link p-0 m-0 align-baseline">click here to request another</button>. --}}
							<button type="submit" class="btn btn-success">Upload</button>
						</form>		
					</div><!--/ modal-body -->
			
				</div><!--/ modal-content -->
			</div><!--/ modal-dialog -->
		</div><!--/ modal -->
     <!-- ==============================================
	 Scripts
	 =============================================== -->
		<script src="{{asset('assets/js/jquery.min.js')}}"></script>
		<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
		<script src="{{asset('assets/js/base.js')}}"></script>
		<script src="{{asset('assets/plugins/slimscroll/jquery.slimscroll.js')}}"></script>
		<script>
		$('#Slim,#Slim2').slimScroll({
				height:"auto",
				position: 'right',
				railVisible: true,
				alwaysVisible: true,
				size:"8px",
			});		
		</script>

  	</body>
</html>
