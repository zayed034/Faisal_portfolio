
		@extends('Frontend.layouts.main')
        @section('main-container')

        <!-- ========== Start Page Title ========== -->

        <div class="page-title" id="page-title">
			<div class="container">
				<div class="content">
					<h2>Create a WordPress Theme</h2>
					<ul class="list-unstyled">
						<li><a href="index.html">Nasim</a></li>
						<li>Create a WordPress Theme</li>
					</ul>
				</div>
			</div>
        </div>

        <!-- ========== End Page Title ========== -->

        <!-- ========== Start Blog ========== -->
        
        <section class="blog" id="blog">
            <div class="container">
				<div class="row">
					<div class="col-md-8 col-sm-12">
						<div class="blog-single">
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
										<a href="blog-{{ url('/single') }}" target="_blank"><h4>Create a wordpress theme</h4></a>
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
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua...</p>
                                    </div>
									<div class="more-details">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt labore et dolore magna aliqua. enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                        <p>Excepteur sint ocacat cupidatat non proi dent sunt in culpa qui officia deserunt.mollit anim id est laborum. sed ut pers piciatis unde omnis iste natus sit voluptatem accusantiu.</p>
                                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
										<div class="image">
											<img src="{{ url('frontend/images/blog/7.jpg') }}" class="img-responsive" alt="">
										</div>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt labore et dolore magna aliqua. enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
									    <blockquote>
										    <p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen.</p>
									    </blockquote>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt labore et dolore magna aliqua. enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
									    <p>Excepteur sint ocacat cupidatat non proi dent sunt in culpa qui officia deserunt.mollit anim id est laborum. sed ut pers piciatis unde omnis iste natus sit voluptatem accusantiu doloremque laudantium, totam rem aperiam, eaque ipsa quae.</p>
								    </div>
									<div class="post-footer">
										<div class="post-share">
											<h5>Share The Post</h5>
											<ul class="list-unstyled social-media">
												<li><a href="#"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#"><i class="fa fa-twitter"></i></a></li>
												<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
												<li><a href="#"><i class="fa fa-behance"></i></a></li>
											</ul>
										</div>
										<div class="post-tags">
											<h5>Tags</h5>
											<ul class="tags-list list-unstyled">
												<li>
													<a href="#">design</a>
												</li>
												<li>
													<a href="#">development</a>
												</li>
												<li>
													<a href="#">wordpress</a>
												</li>
											</ul>
										</div>
									</div>
									<div class="post-comments">
										<h3>03 Comments</h3>
										<div class="post-comment">
											<div class="row">
												<div class="col-sm-2">
													<div class="comment-image">
														<img src="{{ url('frontend/images/comments/1.jpg') }}" class="img-responsive" alt="">
													</div>
												</div>
												<div class="col-sm-10">
													<h4>Nihan Doe</h4>
													<span>29 Mar, 2020</span>
													<a class="reply-btn" href="#"><i class="fa fa-reply"></i>Reply</a>
													<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt labore et dolore magna aliqua. enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
												</div>
											</div>
										</div>
										<div class="post-comment reply">
											<div class="row">
												<div class="col-sm-2">
													<div class="comment-image">
														<img src="{{ url('frontend/images/comments/2.jpg') }}" class="img-responsive" alt="">
													</div>
												</div>
												<div class="col-sm-10">
													<h4>Razan Smith</h4>
													<span>29 Mar, 2020</span>
													<a class="reply-btn" href="#"><i class="fa fa-reply"></i>Reply</a>
													<p>Excepteur sint ocacat cupidatat non proi dent sunt in culpa qui officia deserunt.mollit anim id est laborum. sed ut.</p>
												</div>
											</div>
										</div>
										<div class="post-comment">
											<div class="row">
												<div class="col-sm-2">
													<div class="comment-image">
														<img src="{{ url('frontend/images/comments/3.jpg ') }}" class="img-responsive" alt="">
													</div>
												</div>
												<div class="col-sm-10">
													<h4>Karim Doe</h4>
													<span>29 Mar, 2020</span>
													<a class="reply-btn" href="#"><i class="fa fa-reply"></i>Reply</a>
													<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt labore et dolore magna aliqua. enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
												</div>
											</div>
										</div>
									</div>
									<div class="post-form">
										<h3>Leave a Comment</h3>
										<form action="#" method="post">
											<div class="row">
												<div class="col-sm-6 col-xs-12">
													<div class="form-group">
														<input type="text" class="form-control" name="name" placeholder="Name" required>
													</div>
												</div>
												<div class="col-sm-6 col-xs-12">
													<div class="form-group">
														<input type="email" class="form-control" name="email" placeholder="Email" required>
													</div>
												</div>
												<div class="col-sm-12 col-xs-12">
													<div class="form-group">
														<textarea class="form-control" name="message" placeholder="Your Comment" required></textarea>
													</div>
												</div>
												<div class="col-sm-12 col-xs-12">
													<button class="main-btn" type="submit" name="comment">Submit Comment</button>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="blog-sidebar">
							<div class="sidebar-search">
								<form action="#" method="post">
									<div class="form-group">
										<input type="search" class="form-control" name="search-field" placeholder="Search.." required>
										<button class="search-btn" type="submit"><i class="fa fa-search"></i></button>
									</div>
								</form>
							</div>
							<div class="sidebar-categories">
								<h4>Categories</h4>
								<ul class="categories-list list-unstyled">
									<li>
										<a href="#">Web Design <span>16</span></a>
									</li>
									<li>
										<a href="#">Web Development <span>20</span></a>
									</li>
									<li>
										<a href="#">UI &amp; UX Design <span>14</span></a>
									</li>
									<li>
										<a href="#">Photography <span>08</span></a>
									</li>
									<li>
										<a href="#">Marketing <span>13</span></a>
									</li>
								</ul>
							</div>
							<div class="sidebar-posts">
								<h4>Latest Post</h4>
								<div class="post-inner">
									<div class="post-image">
										<img class="img-responsive" src="{{ url('frontend/images/blog/3.jpg') }}" alt>
									</div>
									<div class="post-info">
										<h5><a href="#">Top Graphic Design Topics</a></h5>
										<p>29 Mar, 2020</p>
									</div>
								</div>
								<div class="post-inner">
									<div class="post-image">
										<img class="img-responsive" src="{{ url('frontend/images/blog/5.jpg') }}" alt>
									</div>
									<div class="post-info">
										<h5><a href="#">How to create great logo for your business</a></h5>
										<p>29 Mar, 2020</p>
									</div>
								</div>
								<div class="post-inner">
									<div class="post-image">
										<img class="img-responsive" src="{{ url('frontend/images/blog/6.jpg') }}" alt>
									</div>
									<div class="post-info">
										<h5><a href="#">How to become a successful freelancer</a></h5>
										<p>29 Mar, 2020</p>
									</div>
								</div>
							</div>
							<div class="sidebar-archives">
								<h4>Archives</h4>
								<ul class="archives-list list-unstyled">
									<li>
										<a href="#">Jan 2020</a>
									</li>
									<li>
										<a href="#">Feb 2020</a>
									</li>
									<li>
										<a href="#">Mar 2020</a>
									</li>
								</ul>
							</div>
							<div class="sidebar-tags">
								<h4>Tags</h4>
								<ul class="tags-list list-unstyled">
									<li>
										<a href="#">design</a>
									</li>
									<li>
										<a href="#">development</a>
									</li>
									<li>
										<a href="#">marketing</a>
									</li>
									<li>
										<a href="#">wordpress</a>
									</li>
									<li>
										<a href="#">seo</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
            </div>
        </section>
        
        <!-- ========== End Blog ========== -->
        
        @endsection