@extends('layouts.master')

@section('content')
   
       <!-- ==============================================
       News Feed Section
       =============================================== --> 
      <section class="profile">
        <div class="container-fluid">
          <div class="profilebox-large hidden-xs hidden-sm" 
             style="background: linear-gradient( hsla(138, 85%, 34%, 0.451), hsla(138, 85%, 34%, 0.451)), url('assets/img/posts/9.jpg') no-repeat;
                    background-size: cover;
                    background-position: center center;
                    -webkit-background-size: cover;
                    -moz-background-size: cover;
                    -o-background-size: cover;">		  
          </div>
        </div><!--/ container -->
      </section><!--/ profile -->
    
       <!-- ==============================================
       User Profile Section
       =============================================== --> 
        <section class="user-profile">
          <div class="container-fluid">
            <div class="row">
            
              <div class="col-md-12">
                <div class="post-content">
                  <div class="author-post text-center">
                    {{-- <div class="stories-base">
                      <ul class="list-group"> --}}
                        {{-- <li class="list-group-item full-width"> --}}
                            <a href="#myModals" data-toggle="modal">
                                
                                @if (auth()->user()->image)
                                  {{-- <img src="{{ asset(auth()->user()->image) }}" style="width: 300px; height: 100px; border-radius: 100%;"> --}}
                                  <img class="img-fluid img-circle" src="{{ asset(auth()->user()->image) }}">
                                @else
                                <button class="btn btn-stories">
                                  <i class="fa fa-user"></i>
                                </button>
                                @endif
                            </a>
                        {{-- </li>
                      </ul>
                    </div> --}}
                  </div><!-- /author -->
                </div><!-- /.post-content -->		
              </div><!-- /col-sm-12 -->
              
            </div><!--/ row-->	
          </div><!--/ container -->
        </section><!--/ profile -->
    
       <!-- ==============================================
       User Profile Section
       =============================================== --> 
      <section class="details">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
            
              <div class="details-box row">
                <div class="col-md-9">
                  <div class="content-box">
                    <h4>{{ Auth::user()->name }} <i class="fa fa-check"></i></h4>
                    <p>Welcome to the offical account of {{ Auth::user()->name }}. Success is in the PIXELS, <span class="hashtag">#pixels</span></p>
                    <small><span>www.themashabrand.com</span></small>
                  </div><!--/ media -->
                </div> 
                <div class="col-md-3">
                  <div class="follow-box">
                    <a href="" class="kafe-btn kafe-btn-mint"><i class="fa fa-check"></i> Following</a>
                  </div><!--/ dropdown -->
                </div>
              </div><!--/ details-box -->
              
            </div>
          </div>
        </div><!--/ container -->
      </section><!--/ profile -->
  
       <!-- ==============================================
       Home Menu Section
       =============================================== -->	
       <section class="home-menu">
        <div class="container">
         <div class="row">
  
          <div class="menu-category">
           <ul class="menu">
            <li class="current-menu-item"><a href="photo_profile.html">Posts <span>1.7k</span></a></li>
            <li><a href="photo_followers.html">Followers <span>1.3M</span></a></li>
            <li><a href="photo_followers.html">Following <span>1200</span></a></li>
           </ul>
          </div>
          
         </div><!--/row -->
        </div><!--/container -->
       </section><!--/home-menu -->	
  
       <!-- ==============================================
       News Feed Section
       =============================================== --> 
       <section class="newsfeed">
        <div class="container">
        
         <div class="row">
         
          <div class="col-md-4">
            <a href="#myModal" data-toggle="modal">
              <div class="explorebox" 
              style="background: linear-gradient( rgba(34,34,34,0.2), rgba(34,34,34,0.2)), url('assets/img/posts/14.jpg') no-repeat;
                      background-size: cover;
                      background-position: center center;
                      -webkit-background-size: cover;
                      -moz-background-size: cover;
                      -o-background-size: cover;">
                <div class="explore-top">
                  <div class="explore-like"><i class="fa fa-heart"></i> <span>14,100</span></div>
                  <div class="explore-circle pull-right"><i class="far fa-bookmark"></i></div>
                </div>		  
              </div>
            </a>
          </div><!--/ col-md-4 -->
         
          <div class="col-md-4">
           <a href="#myModal" data-toggle="modal">
            <div class="explorebox" 
             style="background: linear-gradient( rgba(34,34,34,0.2), rgba(34,34,34,0.2)), url('assets/img/posts/18.jpg') no-repeat;
                    background-size: cover;
                    background-position: center center;
                    -webkit-background-size: cover;
                    -moz-background-size: cover;
                    -o-background-size: cover;">
            <div class="explore-top">
             <div class="explore-like"><i class="fa fa-heart"></i> <span>100,100</span></div>
             <div class="explore-circle pull-right"><i class="far fa-bookmark"></i></div>
            </div>			  
           </div>
           </a>
          </div><!--/ col-md-4 -->
         
          <div class="col-md-4">
           <a href="#myModal" data-toggle="modal">
           <div class="explorebox" 
             style="background: linear-gradient( rgba(34,34,34,0.2), rgba(34,34,34,0.2)), url('assets/img/posts/15.jpg') no-repeat;
                    background-size: cover;
                    background-position: center center;
                    -webkit-background-size: cover;
                    -moz-background-size: cover;
                    -o-background-size: cover;">
            <div class="explore-top">
             <div class="explore-like"><i class="fa fa-heart"></i> <span>100</span></div>
             <div class="explore-circle pull-right"><i class="far fa-bookmark"></i></div>
            </div>		  
           </div>
           </a>
          </div><!--/ col-md-4 -->
          
         </div><!--/ row -->
         
         <div class="row">
         
          <div class="col-md-4">
           <a href="#myModal" data-toggle="modal">
           <div class="explorebox" 
             style="background: linear-gradient( rgba(34,34,34,0.2), rgba(34,34,34,0.2)), url('assets/img/posts/25.jpg') no-repeat;
                    background-size: cover;
                    background-position: center center;
                    -webkit-background-size: cover;
                    -moz-background-size: cover;
                    -o-background-size: cover;">
            <div class="explore-top">
             <div class="explore-like"><i class="fa fa-heart"></i> <span>324</span></div>
             <div class="explore-circle pull-right"><i class="far fa-bookmark"></i></div>
            </div>		  
           </div>
           </a>
          </div><!--/ col-md-4 -->
         
          <div class="col-md-4">
           <a href="#myModal" data-toggle="modal">
           <div class="explorebox" 
             style="background: linear-gradient( rgba(34,34,34,0.2), rgba(34,34,34,0.2)), url('assets/img/posts/36.jpg') no-repeat;
                    background-size: cover;
                    background-position: center center;
                    -webkit-background-size: cover;
                    -moz-background-size: cover;
                    -o-background-size: cover;">
            <div class="explore-top">
             <div class="explore-like"><i class="fa fa-heart"></i> <span>1023</span></div>
             <div class="explore-circle pull-right"><i class="far fa-bookmark"></i></div>
            </div>			  
           </div>
           </a>
          </div><!--/ col-md-4 -->
         
          <div class="col-md-4">
           <a href="#myModal" data-toggle="modal">
           <div class="explorebox" 
             style="background: linear-gradient( rgba(34,34,34,0.2), rgba(34,34,34,0.2)), url('assets/img/posts/26.jpg') no-repeat;
                    background-size: cover;
                    background-position: center center;
                    -webkit-background-size: cover;
                    -moz-background-size: cover;
                    -o-background-size: cover;">
            <div class="explore-top">
             <div class="explore-like"><i class="fa fa-heart"></i> <span>40</span></div>
             <div class="explore-circle pull-right"><i class="far fa-bookmark"></i></div>
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
          
           <div class="row">
           
            {{-- <div class="col-md-8 modal-image">
             <img class="img-responsive" src="assets/img/posts/15.jpg" alt="Image"/>
            </div> --}}
            <!--/ col-md-8 -->
            <div class="col-md-4 modal-meta">
             <div class="modal-meta-top">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
               <span aria-hidden="true">×</span><span class="sr-only">Close</span>
              </button><!--/ button -->
              <div class="img-poster clearfix">
               <a href=""><img class="img-responsive img-circle" src="assets/img/users/18.jpg" alt="Image"/></a>
               <strong><a href="">Benjamin</a></strong>
               <span>12 minutes ago</span><br/>
               <a href="" class="kafe kafe-btn-mint-small"><i class="fa fa-check-square"></i> Following</a>
              </div><!--/ img-poster -->
                
              <ul class="img-comment-list">
               <li>
                <div class="comment-img">
                 <img src="assets/img/users/17.jpeg" class="img-responsive img-circle" alt="Image"/>
                </div>
                <div class="comment-text">
                 <strong><a href="">Anthony McCartney</a></strong>
                 <p>Hello this is a test comment.</p> <span class="date sub-text">on December 5th, 2016</span>
                </div>
               </li><!--/ li -->
               <li>
                <div class="comment-img">
                 <img src="assets/img/users/15.jpg" class="img-responsive img-circle" alt="Image"/>
                </div>
                <div class="comment-text">
                 <strong><a href="">Vanessa Wells</a></strong>
                 <p>Hello this is a test comment and this comment is particularly very long and it goes on and on and on.</p> <span>on December 5th, 2016</span>
                </div>
               </li><!--/ li -->
               <li>
                <div class="comment-img">
                 <img src="assets/img/users/14.jpg" class="img-responsive img-circle" alt="Image"/>
                </div>
                <div class="comment-text">
                 <strong><a href="">Sean Coleman</a></strong>
                 <p class="">Hello this is a test comment.</p> <span class="date sub-text">on December 5th, 2016</span>
                </div>
               </li><!--/ li -->
               <li>
                <div class="comment-img">
                 <img src="assets/img/users/13.jpeg" class="img-responsive img-circle" alt="Image"/>
                </div>
                <div class="comment-text">
                 <strong><a href="">Anna Morgan</a></strong>
                 <p class="">Hello this is a test comment.</p> <span class="date sub-text">on December 5th, 2016</span>
                </div>
               </li><!--/ li -->
               <li>
                <div class="comment-img">
                 <img src="assets/img/users/3.jpg" class="img-responsive img-circle" alt="Image"/>
                </div>
                <div class="comment-text">
                 <strong><a href="">Allison Fowler</a></strong>
                 <p class="">Hello this is a test comment.</p> <span class="date sub-text">on December 5th, 2016</span>
                </div>
               </li><!--/ li -->
              </ul><!--/ comment-list -->
                
              <div class="modal-meta-bottom">
               <ul>
                <li><a class="modal-like" href="#"><i class="fa fa-heart"></i></a><span class="modal-one"> 786,286</span> | 
                    <a class="modal-comment" href="#"><i class="fa fa-comments"></i></a><span> 786,286</span> </li>
                <li>
                 <span class="thumb-xs">
                  <img class="img-responsive img-circle" src="assets/img/users/13.jpeg" alt="...">
                 </span>
                 <div class="comment-body">
                   <input class="form-control input-sm" type="text" placeholder="Write your comment...">
                 </div><!--/ comment-body -->	
                </li>				
               </ul>				
              </div><!--/ modal-meta-bottom -->
                
             </div><!--/ modal-meta-top -->
            </div><!--/ col-md-4 -->
            
           </div><!--/ row -->
          </div><!--/ modal-body -->
          
         </div><!--/ modal-content -->
        </div><!--/ modal-dialog -->
      </div><!--/ modal -->	
       
       <!-- ==============================================
       Modals Section
       =============================================== -->
	   	<div id="myModals" class="modal fade">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-body">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                <span aria-hidden="true">×</span><span class="sr-only">Close</span>
              </button><!--/ button -->
              <div class="row">
                <div class="col-md-6  modal-meta">
                  <a href="{{ url('/profilepage') }}" class="kafe-btn kafe-btn-mint-small"> Add Profile Picture
                  </a>
                </div>
                {{-- <div class="col-md-6  modal-meta">
                  <a href="{{ url('/article') }}" class="kafe-btn kafe-btn-mint-small"> Edit Profile
                  </a>	
                </div> --}}
              </div>	
            </div><!--/ modal-body -->
        
          </div><!--/ modal-content -->
        </div><!--/ modal-dialog -->
      </div><!--/ modal -->
@endsection
