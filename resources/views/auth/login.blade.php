{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}

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
	 Header Section
	 =============================================== -->
        {{-- <section> --}}
        <section class="login">
            <div class="container">
                <div class="banner-content">
            
                    <h1><i class="fa fa-smile"></i> X-Docs</h1>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <h3 class="form-signin-heading">Please sign in</h3>
                        <div class="form-group">
                            {{-- <input name="email" type="text" class="form-control" placeholder="Email"> --}}
                            <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            {{-- <input type="password" class="form-control" name="password" placeholder="Password"> --}}
                            <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <button class="kafe-btn kafe-btn-mint btn-block" type="submit" name="subm">{{  __('Login') }}</button>
                        <br/>
                        <a class="btn btn-dark " href="{{ route('register') }}" role="button">Don't have an account yet? Register Here.</a>
                        @if (Route::has('password.request'))
                            <a class="btn btn-dark " href="{{ route('password.request') }}" role="button">{{ __('Forgot Your Password?') }}</a>
                        
                        @endif
                    </form>
                
                
                </div><!--/. banner-content -->
            </div><!-- /.container -->
        </section> 
  
	 
	 
     <!-- ==============================================
	 Scripts
	 =============================================== -->
        <script src="{{asset('assets/js/jquery.min.js')}}"></script>
        <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('assets/js/base.js')}}"></script>

    </body>
</html>
