@extends('layouts.master')

@section('content')
       
       <!-- ==============================================
	 Modal Section
	 =============================================== -->
    <section class="single-post">
        <div class="container">
            <div class="row">
       
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                    
                            <div class="row">
                            
                                <div class="col-md-8 modal-image">
                                    <img class="img-responsive" src="assets/img/posts/15.jpg" alt="Image"/>
                                </div><!--/ col-md-8 -->
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
                                                        <img class="img-responsive img-circle" src="assets/img/users/13.jpeg" alt="Image">
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
        
            </div><!--/ modal-dialog -->
        </div><!--/ modal-dialog -->
    </section><!--/ modal -->	
@endsection
