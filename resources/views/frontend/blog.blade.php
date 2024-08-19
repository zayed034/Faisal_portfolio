
@extends('Frontend.layouts.main')
        @section('main-container')

        <!-- ========== Start Page Title ========== -->

        <div class="page-title" id="page-title">
			<div class="container">
				<div class="content">
					<h2>Blog Posts</h2>
					<ul class="list-unstyled">
						<li><a href="index.html">Nasim</a></li>
						<li>Blog</li>
					</ul>
				</div>
			</div>
        </div>

        <!-- ========== End Page Title ========== -->

        <!-- ========== Start Blog ========== -->
        
        <section class="blog" id="blog">
            <div class="container">
                <div class="row">
                    <!-- New Item -->
                    <div class="col-md-6">
                        <div class="post">
                            <!-- Post Image -->
                            <div class="post-img">
                                <img src="{{ url('frontend/images/blog/1.jpg') }}" class="img-responsive" alt="">
                                <div class="post-category">
                                    <a href="{{ url('/single') }}">Design</a>
                                </div>
                            </div>
                            <!-- Post Content -->
                            <div class="post-content">
                                <div class="post-title">
                                    <a href="{{ url('/single') }}"><h4>Ways To Motivate Yourself</h4></a>
                                </div>
                                <ul class="post-info list-unstyled">
                                    <li>
                                        <i class="fa fa-calendar"></i>
                                        <span>January 9, 2021</span>
                                    </li>
                                     <li>
                                        <i class="fa fa-commenting-o"></i>
                                        <a href="#"><span>2 Comment</span></a>
                                    </li>
                                </ul>
                                <div class="post-text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut...</p>
                                </div>
                                <a href="{{ url('/single') }}" class="post-more">Read more <i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- New Item -->
                    <div class="col-md-6">
                        <div class="post">
                            <!-- Post Image -->
                            <div class="post-img">
                                <img src="{{ url('frontend/images/blog/2.jpg') }}" class="img-responsive" alt="">
                                <div class="post-category">
                                    <a href="{{ url('/single') }}">Logo</a>
                                </div>
                            </div>
                            <!-- Post Content -->
                            <div class="post-content">
                                <div class="post-title">
                                    <a href="{{ url('/single') }}"><h4>Create a WordPress Theme</h4></a>
                                </div>
                                <ul class="post-info list-unstyled">
                                    <li>
                                        <i class="fa fa-calendar"></i>
                                        <span>January 9, 2021</span>
                                    </li>
                                     <li>
                                        <i class="fa fa-commenting-o"></i>
                                        <a href="#"><span>4 Comment</span></a>
                                    </li>
                                </ul>
                                <div class="post-text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut...</p>
                                </div>
                                <a href="{{ url('/single') }}" class="post-more">Read more <i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- New Item -->
                    <div class="col-md-6">
                        <div class="post">
                            <!-- Post Image -->
                            <div class="post-img">
                                <img src="{{ url('frontend/images/blog/3.jpg') }}" class="img-responsive" alt="">
                                <div class="post-category">
                                    <a href="{{ url('/single') }}">Branding</a>
                                </div>
                            </div>
                            <!-- Post Content -->
                            <div class="post-content">
                                <div class="post-title">
                                    <a href="{{ url('/single') }}"><h4>Top Graphic Design Topics</h4></a>
                                </div>
                                <ul class="post-info list-unstyled">
                                    <li>
                                        <i class="fa fa-calendar"></i>
                                        <span>January 9, 2021</span>
                                    </li>
                                     <li>
                                        <i class="fa fa-commenting-o"></i>
                                        <a href="#"><span>4 Comment</span></a>
                                    </li>
                                </ul>
                                <div class="post-text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut...</p>
                                </div>
                                <a href="{{ url('/single') }}" class="post-more">Read more <i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- New Item -->
                    <div class="col-md-6">
                        <div class="post">
                            <!-- Post Image -->
                            <div class="post-img">
                                <img src="{{ url('frontend/images/blog/4.jpg') }}" class="img-responsive" alt="">
                                <div class="post-category">
                                    <a href="{{ url('/single') }}">Photography</a>
                                </div>
                            </div>
                            <!-- Post Content -->
                            <div class="post-content">
                                <div class="post-title">
                                    <a href="{{ url('/single') }}"><h4>Beginner Photographer’s Mistakes</h4></a>
                                </div>
                                <ul class="post-info list-unstyled">
                                    <li>
                                        <i class="fa fa-calendar"></i>
                                        <span>January 9, 2021</span>
                                    </li>
                                     <li>
                                        <i class="fa fa-commenting-o"></i>
                                        <a href="#"><span>4 Comment</span></a>
                                    </li>
                                </ul>
                                <div class="post-text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut...</p>
                                </div>
                                <a href="{{ url('/single') }}" class="post-more">Read more <i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- New Item -->
                    <div class="col-md-6">
                        <div class="post">
                            <!-- Post Image -->
                            <div class="post-img">
                                <img src="{{ url('frontend/images/blog/5.jpg') }}" class="img-responsive" alt="">
                                <div class="post-category">
                                    <a href="{{ url('/single') }}">Logo</a>
                                </div>
                            </div>
                            <!-- Post Content -->
                            <div class="post-content">
                                <div class="post-title">
                                    <a href="{{ url('/single') }}"><h4>How To Create Great Logo For Your Business</h4></a>
                                </div>
                                <ul class="post-info list-unstyled">
                                    <li>
                                        <i class="fa fa-calendar"></i>
                                        <span>January 9, 2021</span>
                                    </li>
                                     <li>
                                        <i class="fa fa-commenting-o"></i>
                                        <a href="#"><span>4 Comment</span></a>
                                    </li>
                                </ul>
                                <div class="post-text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut...</p>
                                </div>
                                <a href="{{ url('/single') }}" class="post-more">Read more <i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- New Item -->
                    <div class="col-md-6">
                        <div class="post">
                            <!-- Post Image -->
                            <div class="post-img">
                                <img src="{{ url('frontend/images/blog/6.jpg') }}" class="img-responsive" alt="">
                                <div class="post-category">
                                    <a href="{{ url('/single') }}">Branding</a>
                                </div>
                            </div>
                            <!-- Post Content -->
                            <div class="post-content">
                                <div class="post-title">
                                    <a href="{{ url('/single') }}"><h4>How To Become a Successful Freelancer</h4></a>
                                </div>
                                <ul class="post-info list-unstyled">
                                    <li>
                                        <i class="fa fa-calendar"></i>
                                        <span>January 9, 2021</span>
                                    </li>
                                     <li>
                                        <i class="fa fa-commenting-o"></i>
                                        <a href="#"><span>4 Comment</span></a>
                                    </li>
                                </ul>
                                <div class="post-text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut...</p>
                                </div>
                                <a href="{{ url('/single') }}" class="post-more">Read more <i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- ========== End Blog ========== -->
       
        @endsection