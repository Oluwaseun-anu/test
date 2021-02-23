<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

            <!-- ==============================================
            Title and Meta Tags
            =============================================== -->
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
            <link type="text/css" href="{{asset('assets/css/style.css')}}" rel="stylesheet" />
                    
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
  <header class="fluffs">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-10 col-md-offset-1">
                <h1>X-Docs</h1>
            </div>
            <div class="col-md-10 col-md-offset-1">
                <h4>Platform for social network of medical doctors.</h4>
                {{-- <a class="kafe-btn kafe-btn-default top-cart" href=""><i class="fa fa-shopping-cart"></i><span> Purchase now at $20</span></a> --}}
            </div>
        </div><!-- /.row -->
    </div><!-- /.container -->
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
            <div class="top-right links">
                @auth
                    <h4><a href="{{ url('/home') }}">Home</a></h4>
                @else
                    <h4><a href="{{ route('login') }}">Login</a></h4>

                    @if (Route::has('register'))
                        <h4><a href="{{ route('register') }}">Register</a></h4>
                    @endif
                @endauth
            </div>
        @endif
    </div>

  </header><!-- /header -->

  <section class="demo">
    <div class="container">
    
      <div class="row text-center">
        <div class="section-title-bold-home">
          
      {{-- <div class="flex-center position-ref full-height"> --}}
    

      {{-- </div> --}}
          <h1>Medical experirence Sharing Network</h1>
        </div>
        <div class="separator_wrapper">
          <div class="separator_first_circle">
            <div class="separator_second_circle"></div>
          </div><!-- /.separator_first_circle -->
        </div>		
      </div>
      
      <div class="row">
        
        <div class="col-md-4 col-sm-6">
          <div class="demo-box">
            <a href="{{ url('/home') }}" target="_blank">
            <img src="{{asset('assets/img/demo/1.jpg')}}" alt="demo-img" class="img-responsive img-thumbnail">
            </a>
            <h4>Home</h4>
          </div>
        </div>	   
        
        <div class="col-md-4 col-sm-6">
          <div class="demo-box">
            <a href="{{ url('/articles') }}" target="_blank">
            <img src="assets/img/demo/2.jpg" alt="demo-img" class="img-responsive img-thumbnail">
            </a>
            <h4>Articles</h4>
          </div>
        </div>	
        
        <div class="col-md-4 col-sm-6">
          <div class="demo-box">
            <a href="{{ url('/gallery') }}" target="_blank">
            <img src="assets/img/demo/4.png" alt="demo-img" class="img-responsive img-thumbnail">
            </a>
            <h4>Gallery</h4>
          </div>
        </div>
      
      </div><!--/row -->
      
      <div class="row">
        
        <div class="col-md-4 col-sm-6">
          <div class="demo-box">
            <a href="{{ url('/games') }}" target="_blank">
            <img src="assets/img/demo/4.png" alt="demo-img" class="img-responsive img-thumbnail">
            </a>
            <h4>Games</h4>
          </div>
        </div>
        
        
        <div class="col-md-4 col-sm-6">
          <div class="demo-box">
            <a href="{{ url('/chats') }}" target="_blank">
            <img src="assets/img/demo/9.png" alt="demo-img" class="img-responsive img-thumbnail">
            </a>
            <h4>Chat Page</h4>
          </div>
        </div>
        
        <div class="col-md-4 col-sm-6">
          <div class="demo-box">
            <a href="{{ url('/biography') }}" class="small-two" target="_blank">
              <img src="assets/img/demo/15.png" alt="demo-img" class="img-responsive img-thumbnail">
            </a>
            <h4>Biography</h4>
          </div>
        </div>	
      
      </div><!--/row -->
      
      
      <div class="row">
                
        <div class="col-md-4 col-sm-6">
          <div class="demo-box">
            <a href="{{ route('login') }}" class="small" target="_blank">
            <img src="assets/img/demo/11.png" alt="demo-img" class="img-responsive img-thumbnail">
            </a>
            <h4>Login</h4>
          </div>
        </div>
        
        <div class="col-md-4 col-sm-6">
          <div class="demo-box">
            <a href="{{ route('register') }}" class="small" target="_blank">
            <img src="assets/img/demo/12.png" alt="demo-img" class="img-responsive img-thumbnail">
            </a>
            <h4>Register</h4>
          </div>
        </div>

        <div class="col-md-4 col-sm-6">
          <div class="demo-box">
            <a target="_blank">
              <img src="assets/img/demo/more.jpg" alt="demo-img" class="img-responsive img-thumbnail">
            </a>
            <h4>More Coming Soon</h4>
          </div>
        </div>
      
      </div><!--/row -->
      
     
      
    
    </div>
  </section>	 
<!-- ==============================================
	 Footer Section
	 =============================================== -->
   <footer class="footerWhite">

    <!-- COPY RIGHT -->
    <div class="clearfix copyRight">
     <div class="container">
      <div class="row">
       
   <div class="col-xs-12">
        <div class="copyRightWrapper">
         <div class="row">
     
          <div class="col-sm-5 col-sm-push-7 col-xs-12">
     <ul class="list-inline socialLink">
      <li><a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
      <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
      <li><a href="#"><i class="fab fa-pinterest-p" aria-hidden="true"></i></a></li>
      <li><a href="#"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
     </ul>
          </div><!-- /col-sm-5 -->
    
      <div class="col-sm-7 col-sm-pull-5 col-xs-12">
     <div class="copyRightText">
      <p>Copyright © 2018. All Rights Reserved</p>
     </div>
      </div><!-- /col-sm-7 -->
    
         </div><!-- /row -->
        </div><!-- /copyRightWrapper -->
       </div><!-- /col-xs-2 -->

      </div><!-- /row -->
     </div><!-- /container -->
    </div><!-- /copyRight -->
  
  </footer>	

   <a id="scrollup">Scroll</a>	 
 
 
   <!-- ==============================================
 Scripts
 =============================================== -->
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/base.js')}}"></script>

</body>
</html>

