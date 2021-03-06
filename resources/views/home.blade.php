@extends('layouts.master')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div> --}}	
    
       <!-- ==============================================
       News Feed Section
       =============================================== --> 
       <section class="newsfeed">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">
                        
                        <a href="#">
                        <div class="storybox" 
                            style="background: linear-gradient( rgba(34,34,34,0.78), rgba(34,34,34,0.78)), url('assets/img/posts/2.gif') no-repeat;
                                    background-size: cover;
                                    background-position: center center;
                                    -webkit-background-size: cover;
                                    -moz-background-size: cover;
                                    -o-background-size: cover;">
                            <div class="story-body text-center">
                            <div class=""><img class="img-circle" src="assets/img/users/10.jpg" alt="user"></div>
                            <h4>Clifford Graham</h4>
                            <p>2 hours ago</p>
                            </div>		  
                        </div>
                        </a>
                        
                        <a href="#">
                        <div class="storybox" 
                            style="background: linear-gradient( rgba(34,34,34,0.78), rgba(34,34,34,0.78)), url('assets/img/posts/3.gif') no-repeat;
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
                        
                        <a href="#">
                        <div class="storybox" 
                            style="background: linear-gradient( rgba(34,34,34,0.78), rgba(34,34,34,0.78)), url('assets/img/posts/4.jpg') no-repeat;
                                    background-size: cover;
                                    background-position: center center;
                                    -webkit-background-size: cover;
                                    -moz-background-size: cover;
                                    -o-background-size: cover;">
                            <div class="story-body text-center">
                            <div class=""><img class="img-circle" src="assets/img/users/12.jpg" alt="user"></div>
                            <h4>Sean Coleman</h4>
                            <p>5 hours ago</p>
                            </div>		  
                        </div>
                        </a>
                        
                        <a href="#">
                        <div class="storybox" 
                            style="background: linear-gradient( rgba(34,34,34,0.78), rgba(34,34,34,0.78)), url('assets/img/posts/15.jpg') no-repeat;
                                    background-size: cover;
                                    background-position: center center;
                                    -webkit-background-size: cover;
                                    -moz-background-size: cover;
                                    -o-background-size: cover;">
                            <div class="story-body text-center">
                            <div class=""><img class="img-circle" src="assets/img/users/15.jpg" alt="user"></div>
                            <h4>Vanessa Wells</h4>
                            <p>5 hours ago</p>
                            </div>		  
                        </div>
                        </a>
                
                        <div class="trending-box hidden-xs">
                        <div class="row">
                            <div class="col-md-12">
                                <a href="photo_stories.html"><h4>More stories</h4></a>
                            </div>
                        </div>
                        </div>
                        
                    </div><!--/ col-lg-3 -->
                <div class="col-md-6">
                
                <div class="cardbox">
                
                    <div class="cardbox-heading">
                    <!-- START dropdown-->
                        <div class="dropdown pull-right">
                            <button class="btn btn-secondary btn-flat btn-flat-icon" type="button" data-toggle="dropdown" aria-expanded="false">
                            <em class="fa fa-ellipsis-h"></em>
                            </button>
                            <div class="dropdown-menu dropdown-scale dropdown-menu-right" role="menu" style="position: absolute; transform: translate3d(-136px, 28px, 0px); top: 0px; left: 0px; will-change: transform;">
                                <a class="dropdown-item" href="#">Hide post</a>
                                <a class="dropdown-item" href="#">Stop following</a>
                                <a class="dropdown-item" href="#">Report</a>
                            </div>
                        </div><!--/ dropdown -->
                    <!-- END dropdown-->
                        <div class="media m-0">
                            <div class="d-flex mr-3">
                                <a href="#"><img class="img-responsive img-circle" src="assets/img/users/18.jpg" alt="User"></a>
                            </div>
                            <div class="media-body">
                                <p class="m-0">Benjamin Robinson</p>
                                <small><span>10 hours ago</span></small>
                            </div>
                        </div><!--/ media -->
                    </div><!--/ cardbox-heading -->
                    
                    <div class="cardbox-item">
                        <a href="#myModal" data-toggle="modal">
                            <img class="img-responsive" src="assets/img/posts/1.jpg" alt="MaterialImg">
                        </a> 
                    </div>
                    <!--/ cardbox-item -->
                    <div class="cardbox-base">
                        <ul>
                            <li><a href="#"><img src="assets/img/users/1.jpg" class="img-responsive img-circle" alt="User"></a></li>
                            <li><a href="#"><img src="assets/img/users/2.jpg" class="img-responsive img-circle" alt="User"></a></li>
                            <li><a href="#"><img src="assets/img/users/3.jpg" class="img-responsive img-circle" alt="User"></a></li>
                            <li><a href="#"><img src="assets/img/users/4.jpg" class="img-responsive img-circle" alt="User"></a></li>
                            <li><a href="#"><img src="assets/img/users/5.jpg" class="img-responsive img-circle" alt="User"></a></li>
                            <li><a href="#"><img src="assets/img/users/6.jpg" class="img-responsive img-circle" alt="User"></a></li>
                            <li><a href="#"><img src="assets/img/users/7.jpg" class="img-responsive img-circle" alt="User"></a></li>
                            <li><a href="#"><img src="assets/img/users/8.jpg" class="img-responsive img-circle" alt="User"></a></li>
                            <li><a href="#"><img src="assets/img/users/9.jpg" class="img-responsive img-circle" alt="User"></a></li>
                            <li><a href="#"><img src="assets/img/users/10.jpg" class="img-responsive img-circle" alt="User"></a></li>
                        </ul>
                    </div><!--/ cardbox-base -->
                    <div class="cardbox-like">
                        <ul>
                            <li><a href="#"><i class="fa fa-heart"></i></a><span> 786,286</span></li>
                            <li><a href="#" title="" class="com"><i class="fa fa-comments"></i></a> <span class="span-last"> 126,400</span></li>
                        </ul>
                    </div><!--/ cardbox-like -->			  
                        
                </div><!--/ cardbox -->	
                
                <div class="cardbox">
                
                    <div class="cardbox-heading">
                    <!-- START dropdown-->
                    <div class="dropdown pull-right">
                    <button class="btn btn-secondary btn-flat btn-flat-icon" type="button" data-toggle="dropdown" aria-expanded="false">
                    <em class="fa fa-ellipsis-h"></em>
                    </button>
                    <div class="dropdown-menu dropdown-scale dropdown-menu-right" role="menu" style="position: absolute; transform: translate3d(-136px, 28px, 0px); top: 0px; left: 0px; will-change: transform;">
                    <a class="dropdown-item" href="#">Hide post</a>
                    <a class="dropdown-item" href="#">Stop following</a>
                    <a class="dropdown-item" href="#">Report</a>
                    </div>
                    </div><!--/ dropdown -->
                    <!-- END dropdown-->
                    <div class="media m-0">
                    <div class="d-flex mr-3">
                    <a href="#"><img class="img-responsive img-circle" src="assets/img/users/7.jpg" alt="User"></a>
                    </div>
                    <div class="media-body">
                    <p class="m-0">Vanessa Wells</p>
                    <small><span>12 hours ago</span></small>
                    </div>
                    </div><!--/ media -->
                    </div><!--/ cardbox-heading -->
                    
                    <div class="cardbox-item">
                    <a href="#myModal" data-toggle="modal">
                    <img class="img-responsive" src="assets/img/posts/5.jpg" alt="MaterialImg">
                    </a> 
                    </div><!--/ cardbox-item -->
                    <div class="cardbox-base">
                    <ul>
                    <li><a href="#"><img src="assets/img/users/1.jpg" class="img-responsive img-circle" alt="User"></a></li>
                    <li><a href="#"><img src="assets/img/users/2.jpg" class="img-responsive img-circle" alt="User"></a></li>
                    <li><a href="#"><img src="assets/img/users/3.jpg" class="img-responsive img-circle" alt="User"></a></li>
                    <li><a href="#"><img src="assets/img/users/4.jpg" class="img-responsive img-circle" alt="User"></a></li>
                    <li><a href="#"><img src="assets/img/users/5.jpg" class="img-responsive img-circle" alt="User"></a></li>
                    <li><a href="#"><img src="assets/img/users/6.jpg" class="img-responsive img-circle" alt="User"></a></li>
                    <li><a href="#"><img src="assets/img/users/7.jpg" class="img-responsive img-circle" alt="User"></a></li>
                    <li><a href="#"><img src="assets/img/users/8.jpg" class="img-responsive img-circle" alt="User"></a></li>
                    <li><a href="#"><img src="assets/img/users/9.jpg" class="img-responsive img-circle" alt="User"></a></li>
                    <li><a href="#"><img src="assets/img/users/10.jpg" class="img-responsive img-circle" alt="User"></a></li>
                    </ul>
                    </div><!--/ cardbox-base -->
                    <div class="cardbox-like">
                    <ul>
                    <li><a href="#"><i class="fa fa-heart"></i></a><span> 786,286</span></li>
                    <li><a href="#" title="" class="com"><i class="fa fa-comments"></i></a> <span class="span-last"> 126,400</span></li>
                    </ul>
                    </div><!--/ cardbox-like -->			  
                        
                </div><!--/ cardbox -->
                
                <div class="cardbox">
                
                    <div class="cardbox-heading">
                    <!-- START dropdown-->
                    <div class="dropdown pull-right">
                    <button class="btn btn-secondary btn-flat btn-flat-icon" type="button" data-toggle="dropdown" aria-expanded="false">
                    <em class="fa fa-ellipsis-h"></em>
                    </button>
                    <div class="dropdown-menu dropdown-scale dropdown-menu-right" role="menu" style="position: absolute; transform: translate3d(-136px, 28px, 0px); top: 0px; left: 0px; will-change: transform;">
                    <a class="dropdown-item" href="#">Hide post</a>
                    <a class="dropdown-item" href="#">Stop following</a>
                    <a class="dropdown-item" href="#">Report</a>
                    </div>
                    </div><!--/ dropdown -->
                    <!-- END dropdown-->
                    <div class="media m-0">
                    <div class="d-flex mr-3">
                    <a href="#"><img class="img-responsive img-circle" src="assets/img/users/2.jpg" alt="User"></a>
                    </div>
                    <div class="media-body">
                    <p class="m-0">Alex Grantte</p>
                    <small><span>12 hours ago</span></small>
                    </div>
                    </div><!--/ media -->
                    </div><!--/ cardbox-heading -->
                    
                    <div class="cardbox-item">
                    <a href="#myModal" data-toggle="modal">
                    <img class="img-responsive" src="assets/img/posts/14.jpg" alt="MaterialImg">
                    </a> 
                    </div><!--/ cardbox-item -->
                    <div class="cardbox-base">
                    <ul>
                    <li><a href="#"><img src="assets/img/users/1.jpg" class="img-responsive img-circle" alt="User"></a></li>
                    <li><a href="#"><img src="assets/img/users/2.jpg" class="img-responsive img-circle" alt="User"></a></li>
                    <li><a href="#"><img src="assets/img/users/3.jpg" class="img-responsive img-circle" alt="User"></a></li>
                    <li><a href="#"><img src="assets/img/users/4.jpg" class="img-responsive img-circle" alt="User"></a></li>
                    <li><a href="#"><img src="assets/img/users/5.jpg" class="img-responsive img-circle" alt="User"></a></li>
                    <li><a href="#"><img src="assets/img/users/6.jpg" class="img-responsive img-circle" alt="User"></a></li>
                    <li><a href="#"><img src="assets/img/users/7.jpg" class="img-responsive img-circle" alt="User"></a></li>
                    <li><a href="#"><img src="assets/img/users/8.jpg" class="img-responsive img-circle" alt="User"></a></li>
                    <li><a href="#"><img src="assets/img/users/9.jpg" class="img-responsive img-circle" alt="User"></a></li>
                    <li><a href="#"><img src="assets/img/users/10.jpg" class="img-responsive img-circle" alt="User"></a></li>
                    </ul>
                    </div><!--/ cardbox-base -->
                    <div class="cardbox-like">
                    <ul>
                    <li><a href="#"><i class="fa fa-heart"></i></a><span> 786,286</span></li>
                    <li><a href="#" title="" class="com"><i class="fa fa-comments"></i></a> <span class="span-last"> 126,400</span></li>
                    </ul>
                    </div><!--/ cardbox-like -->			  
                        
                </div><!--/ cardbox -->
                
                <div class="cardbox">
                
                    <div class="cardbox-heading">
                    <!-- START dropdown-->
                    <div class="dropdown pull-right">
                    <button class="btn btn-secondary btn-flat btn-flat-icon" type="button" data-toggle="dropdown" aria-expanded="false">
                    <em class="fa fa-ellipsis-h"></em>
                    </button>
                    <div class="dropdown-menu dropdown-scale dropdown-menu-right" role="menu" style="position: absolute; transform: translate3d(-136px, 28px, 0px); top: 0px; left: 0px; will-change: transform;">
                    <a class="dropdown-item" href="#">Hide post</a>
                    <a class="dropdown-item" href="#">Stop following</a>
                    <a class="dropdown-item" href="#">Report</a>
                    </div>
                    </div><!--/ dropdown -->
                    <!-- END dropdown-->
                    <div class="media m-0">
                    <div class="d-flex mr-3">
                    <a href="#"><img class="img-responsive img-circle" src="assets/img/users/9.jpg" alt="User"></a>
                    </div>
                    <div class="media-body">
                    <p class="m-0">Anna Morgan</p>
                    <small><span>13 hours ago</span></small>
                    </div>
                    </div><!--/ media -->
                    </div><!--/ cardbox-heading -->
                    
                    <div class="cardbox-item">
                    <a href="#myModal" data-toggle="modal">
                    <img class="img-responsive" src="assets/img/posts/18.jpg" alt="MaterialImg">
                    </a> 
                    </div><!--/ cardbox-item -->
                    <div class="cardbox-base">
                    <ul>
                    <li><a href="#"><img src="assets/img/users/1.jpg" class="img-responsive img-circle" alt="User"></a></li>
                    <li><a href="#"><img src="assets/img/users/2.jpg" class="img-responsive img-circle" alt="User"></a></li>
                    <li><a href="#"><img src="assets/img/users/3.jpg" class="img-responsive img-circle" alt="User"></a></li>
                    <li><a href="#"><img src="assets/img/users/4.jpg" class="img-responsive img-circle" alt="User"></a></li>
                    <li><a href="#"><img src="assets/img/users/5.jpg" class="img-responsive img-circle" alt="User"></a></li>
                    <li><a href="#"><img src="assets/img/users/6.jpg" class="img-responsive img-circle" alt="User"></a></li>
                    <li><a href="#"><img src="assets/img/users/7.jpg" class="img-responsive img-circle" alt="User"></a></li>
                    <li><a href="#"><img src="assets/img/users/8.jpg" class="img-responsive img-circle" alt="User"></a></li>
                    <li><a href="#"><img src="assets/img/users/9.jpg" class="img-responsive img-circle" alt="User"></a></li>
                    <li><a href="#"><img src="assets/img/users/10.jpg" class="img-responsive img-circle" alt="User"></a></li>
                    </ul>
                    </div><!--/ cardbox-base -->
                    <div class="cardbox-like">
                    <ul>
                    <li><a href="#"><i class="fa fa-heart"></i></a><span> 786,286</span></li>
                    <li><a href="#" title="" class="com"><i class="fa fa-comments"></i></a> <span class="span-last"> 126,400</span></li>
                    </ul>
                    </div><!--/ cardbox-like -->			  
                        
                </div><!--/ cardbox -->
                
                </div><!--/ col-lg-6 -->
                <div class="col-md-3">
                
                <div class="suggestion-box full-width">
                    <div class="suggestions-list">
                        <div class="suggestion-body">
                            <img class="img-responsive img-circle" src="assets/img/users/17.jpeg" alt="Image">
                            <div class="name-box">
                                <h4>Anthony McCartney</h4>
                                <span>@antony</span>
                            </div>
                            <span><i class="fa fa-plus"></i></span>
                        </div>
                        <div class="suggestion-body">
                            <img class="img-responsive img-circle" src="assets/img/users/16.jpg" alt="Image">
                            <div class="name-box">
                                <h4>Sean Coleman</h4>
                                <span>@sean</span>
                            </div>
                            <span><i class="fa fa-plus"></i></span>
                        </div>
                        <div class="suggestion-body">
                            <img class="img-responsive img-circle" src="assets/img/users/14.jpg" alt="Image">
                            <div class="name-box">
                                <h4>Francis Long</h4>
                                <span>@francis</span>
                            </div>
                            <span><i class="fa fa-plus"></i></span>
                        </div>
                        <div class="suggestion-body">
                            <img class="img-responsive img-circle" src="assets/img/users/11.jpg" alt="Image">
                            <div class="name-box">
                                <h4>Vanessa Wells</h4>
                                <span>@vannessa</span>
                            </div>
                            <span><i class="fa fa-plus"></i></span>
                        </div>
                        <div class="suggestion-body">
                            <img class="img-responsive img-circle" src="assets/img/users/9.jpg" alt="Image">
                            <div class="name-box">
                                <h4>Anna Morgan</h4>
                                <span>@anna</span>
                            </div>
                            <span><i class="fa fa-plus"></i></span>
                        </div>
                        <div class="suggestion-body">
                            <img class="img-responsive img-circle" src="assets/img/users/8.jpg" alt="Image">
                            <div class="name-box">
                                <h4>Clifford Graham</h4>
                                <span>@clifford</span>
                            </div>
                            <span><i class="fa fa-plus"></i></span>
                        </div>
                    </div><!--suggestions-list end-->
                </div>	
        
                <div class="trending-box">
                    <div class="row">
                        <div class="col-md-12">
                        <h4>Trending Photos</h4>
                        </div>
                    </div>
                </div>
                
                <div class="trending-box">
                    <div class="row">
                        <div class="col-md-6">
                        <a href="#"><img src="assets/img/posts/17.jpg" class="img-responsive" alt="Image"/></a>
                        </div>
                        <div class="col-md-6">
                        <a href="#"><img src="assets/img/posts/12.jpg" class="img-responsive" alt="Image"/></a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                        <a href="#"><img src="assets/img/posts/21.gif" class="img-responsive" alt="Image"/></a>
                        </div>
                        <div class="col-md-6">
                        <a href="#"><img src="assets/img/posts/23.gif" class="img-responsive" alt="Image"/></a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                        <a href="#"><img src="assets/img/posts/11.jpg" class="img-responsive" alt="Image"/></a>
                        </div>
                        <div class="col-md-6">
                        <a href="#"><img src="assets/img/posts/20.jpg" class="img-responsive" alt="Image"/></a>
                        </div>
                    </div>
                </div>		
                
                
                </div>
                
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
                        <form class="d-inline" method="POST" action="">
                            @csrf
                            <div class="form-group">
                                <input id="name" type="text" placeholder="Name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-link p-0 m-0 align-baseline">click here to request another</button>.
                        </form>		
                    </div><!--/ modal-body -->
            
            </div><!--/ modal-content -->
            </div><!--/ modal-dialog -->
        </div><!--/ modal -->
@endsection
