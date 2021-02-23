{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
		                <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
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
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header">{{ __('Verify Your Email Address') }}</div>
                
                                <div class="card-body">
                                    @if (session('resent'))
                                        <div class="alert alert-success" role="alert">
                                            {{ __('A fresh verification link has been sent to your email address.') }}
                                        </div>
                                    @endif
                
                                    {{ __('Before proceeding, please check your email for a verification link.') }}
                                    {{ __('If you did not receive the email') }},
                                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                                        @csrf
                                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                
                
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
