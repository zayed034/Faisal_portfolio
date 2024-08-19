<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Portfolio</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('backend/img/por.png') }}">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{ url('backend/css/bootstrap.min.css') }}">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{ url('backend/css/font-awesome.min.css') }}">
	<!-- nalika Icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{ url('backend/css/nalika-icon.css') }}">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="{{ url('backend/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ url('backend/css/owl.theme.css') }}">
    <link rel="stylesheet" href="{{ url('backend/css/owl.transitions.css') }}">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="{{ url('backend/css/animate.css') }}">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="{{ url('backend/css/normalize.css') }}">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{ url('backend/css/meanmenu.min.css') }}">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="{{ url('backend/css/main.css') }}">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="{{ url('backend/css/morrisjs/morris.css') }}">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="{{ url('backend/css/scrollbar/jquery.mCustomScrollbar.min.css') }}">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="{{ url('backend/css/metisMenu/metisMenu.min.css') }}">
    <link rel="stylesheet" href="{{ url('backend/css/metisMenu/metisMenu-vertical.css') }}">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="{{ url('backend/css/calendar/fullcalendar.min.css') }}">
    <link rel="stylesheet" href="{{ url('backend/css/calendar/fullcalendar.print.min.css') }}">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="{{ url('backend/style.css') }}">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="{{ url('backend/css/responsive.css') }}">
    <!-- modernizr JS
		============================================ -->
    <script src="{{ url('backend/js/vendor/modernizr-2.8.3.min.js') }}"></script>
</head>

<body>
    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="{{ url('admin/') }}"><img class="main-logo" src="{{ url('backend/img/logo/por.png') }}" alt="" /></a>
                <strong><img src="{{ url('backend/img/logo/por.png') }}" alt="" /></strong>
            </div>
			<div class="nalika-profile">
				<div class="profile-dtl">
					<a href="#"><img src="" alt="" /></a>
					<h2>Faisal <span class="min-dtn">Ahmed</span></h2>
				</div>
				<div class="profile-social-dtl">
					<ul class="dtl-social">
						<li><a href="#"><i class="icon nalika-facebook"></i></a></li>
						<li><a href="#"><i class="icon nalika-twitter"></i></a></li>
						<li><a href="#"><i class="icon nalika-linkedin"></i></a></li>
					</ul>
				</div>
			</div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                        <li class="active">
                            <a class="has" href="{{ url('admin/') }}">
								   <i class="icon nalika-home icon-wrap"></i>
								   <span class="mini-click-non">Dashboard</span>
								</a>
                        </li>
                        <li>
                            <a class="has" href="{{ url('admin/slider') }}" aria-expanded="false"> <i class="icon nalika-home icon-wrap"></i> <span class="mini-click-non">Slider</span></a>
                        </li>
                        <li>
                            <a class="has-arrow" href="#" aria-expanded="false"><i class="icon nalika-diamond icon-wrap"></i> <span class="mini-click-non">Abouts</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="page" href="{{ url('admin/about') }}"><span class="mini-sub-pro">About</span></a></li>
                                <li><a title="from" href="{{ url('admin/skill') }}"><span class="mini-sub-pro">Skill</span></a></li>
                                <li><a title="from" href="{{ url('admin/experience') }}"><span class="mini-sub-pro">Experience</span></a></li>
                                <li><a title="from" href="{{ url('admin/education') }}"><span class="mini-sub-pro">Education</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has" href="{{ url('admin/service') }}" aria-expanded="false"><i class="icon nalika-pie-chart icon-wrap"></i> <span class="mini-click-non">Services</span></a>
                        </li>
                        <li>
                            <a class="has-arrow" href="#" aria-expanded="false"><i class="icon nalika-bar-chart icon-wrap"></i> <span class="mini-click-non">Portfolio</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="page" href="{{ url('admin/portfolio-m') }}"><span class="mini-sub-pro">Portfolio-main</span></a></li>
                                <li><a title="page" href="{{ url('admin/fun') }}"><span class="mini-sub-pro">Fun_Facts</span></a></li>
                                <li><a title="from" href="{{ url('admin/port-client-re') }}"><span class="mini-sub-pro">Client-review</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has" href="{{ url('admin/blog') }}" aria-expanded="false"><i class="icon nalika-table icon-wrap"></i> <span class="mini-click-non">Blog</span></a>
                        </li>
                        <li>
                            <a class="has" href="{{ url('admin/social-media') }}" aria-expanded="false"><i class="icon nalika-table icon-wrap"></i> <span class="mini-click-non">Social Media</span></a>
                        </li>
                        <li>
                            <a class="has" href="{{ url('admin/contact-page') }}" aria-expanded="false"><i class="icon nalika-forms icon-wrap"></i> <span class="mini-click-non">Contacts</span></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>
    </div>
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="{{ url('admin/') }}"><img class="main-logo" src="{{ url('backend/img/logo/por.png') }}" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                        <div class="menu-switcher-pro">
                                            <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
													<i class="icon nalika-menu-task"></i>
											</button>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                        <div class="header-top-menu tabl-d-n">
                                            <div class="breadcome-heading">
												<form role="search" class="">
													<input type="text" placeholder="Search..." class="form-control">
													<a href=""><i class="fa fa-search"></i></a>
												</form>
											</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                                <li class="nav-item">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
															<i class="icon nalika-user nalika-user-rounded header-riht-inf" aria-hidden="true"></i>
															<span class="-name">Faisal</span>
															<i class="icon nalika-down-arrow nalika-angle-dw nalika-icon"></i>
														</a>
                                                    <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                        <li><a href="{{ url('/register') }}"><span class="icon nalika-home author-log-ic"></span> Register</a>
                                                        </li>
                                                        <li><a href="#"><span class="icon nalika-user author-log-ic"></span> My Profile</a>
                                                        </li>
                                                        <li><a href="#"><span class="icon nalika-settings author-log-ic"></span> Settings</a>
                                                        </li>
                                                        <li><a href="{{ url('/login') }}"><span class="icon nalika-unlocked author-log-ic"></span> Log Out</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="nav-item nav-setting-open"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="icon nalika-menu-task"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu start -->
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul class="mobile-menu-nav">
                                        <li><a data-toggle="collapse" data-target="#Charts" href="{{ ('admin/') }}">Dashboard <span class="-project-icon nalika-icon nalika-down-arrow"></span></a>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#demo" href="{{ ('admin/slider') }}">Slider <span class="-project-icon nalika-icon nalika-down-arrow"></span></a>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#others" href="#">Abouts <span class="-project-icon nalika-icon nalika-down-arrow"></span></a>
                                            <ul class="submenu-angle" aria-expanded="false">
                                                <li><a title="page" href="{{ url('admin/about') }}"><span class="mini-sub-pro">About</span></a></li>
                                                <li><a title="from" href="{{ url('admin/about') }}"><span class="mini-sub-pro">Skill</span></a></li>
                                                <li><a title="from" href="{{ url('admin/experience') }}"><span class="mini-sub-pro">Experience</span></a></li>
                                                <li><a title="from" href="{{ url('admin/education') }}"><span class="mini-sub-pro">Education</span></a></li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Miscellaneousmob" href="{{ url('admin/service') }}">Services <span class="-project-icon nalika-icon nalika-down-arrow"></span></a>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Chartsmob" href="#">Portfolio <span class="-project-icon nalika-icon nalika-down-arrow"></span></a>
                                            <ul class="submenu-angle" aria-expanded="false">
                                                <li><a title="page" href="{{ url('admin/portfolio-m') }}"><span class="mini-sub-pro">Portfolio-main</span></a></li>
                                                <li><a title="page" href="{{ url('admin/fun') }}"><span class="mini-sub-pro">Fun Facts</span></a></li>
                                                <li><a title="from" href="{{ url('admin/port-client-re') }}"><span class="mini-sub-pro">Client-review</span></a></li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Tablesmob" href="{{ url('admin/port-client-re') }}">Blog <span class="-project-icon nalika-icon nalika-down-arrow"></span></a>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Tablesmob" href="{{ url('admin/social-media') }}">Social Media <span class="-project-icon nalika-icon nalika-down-arrow"></span></a>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#formsmob" href="{{ url('admin/contact-page') }}">Contacts <span class="-project-icon nalika-icon nalika-down-arrow"></span></a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu end -->