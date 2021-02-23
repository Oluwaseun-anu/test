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
		<link type="text/css" href="{{asset('assets/css/demos/photo.css')}}" rel="stylesheet" />
		
        <link type="text/css" href="{{asset('assets/css/demos/interest.css')}}" rel="stylesheet" />

        
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
				
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

			
				<li class="dropdown mega-avatar">
					{{-- <a href="{{ url('/profile') }}" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true"> --}}
						{{-- <span class="avatar w-32"> --}}
							{{-- <img src="assets/img/users/2.jpg" class="img-resonsive img-circle" width="25" height="25" alt="..."> --}}
						{{-- </span> --}}
						{{-- <em class="fa fa-user"></em> --}}
						{{-- <img src="/uploads/avatars/{{ Auth::user()->avatar }}" class="img-resonsive img-circle" style="width:32px; height:32px; position:absolute; top:10px; left:10px; border-radius:50%"> --}}
						<!-- hidden-xs hides the username on small devices so only the image appears. -->
						{{-- <span class="hidden-xs">
							{{ Auth::user()->name }}
						</span><span class="caret"></span> --}}
					{{-- </a> --}}
					{{-- <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre> --}}
					<a class="dropdown-toggle" href="{{ url('/profile') }}" data-toggle="dropdown" aria-expanded="true">
						@if (auth()->user()->image)
							<img src="{{ asset(auth()->user()->image) }}" style="width: 40px; height: 40px; border-radius: 50%;">
						@endif
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

    @yield('content')

    
    
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

