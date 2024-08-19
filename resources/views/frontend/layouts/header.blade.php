
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Nasim - Personal Portfolio HTML Template">
        <meta name="keywords" content="Html, Css, jQuery, JavaScript, Faisal, onepage, personal, Portfolio, design, creative">
        
        <!-- Title -->
        <title>Faisal - Personal Portfolio</title>
        <!-- Favicon -->
        <link rel="icon" href="{{ url('frontend/images/icon.png') }}"> 
        <!-- Google Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800">
                
        <!-- Font Awesome Css -->
        <link rel="stylesheet" href="{{ url('frontend/css/font-awesome.min.css') }}">
        <!-- Magnific css -->
        <link rel="stylesheet" href="{{ url('frontend/css/magnific-popup.css') }}">
        <!-- Bootstrap Css -->
        <link rel="stylesheet" href="{{ url('frontend/css/bootstrap.min.css') }}">
        <!-- Owl Carousel Css -->
        <link rel="stylesheet" href="{{ url('frontend/css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ url('frontend/css/owl.theme.default.min.css') }}">
        <!-- Animate Css -->
        <link rel="stylesheet" href="{{ url('frontend/css/animate.min.css') }}">
        <!-- Main Style Css -->
        <link rel="stylesheet" href="{{ url('frontend/css/main.css') }}">
		<!-- Colors Css -->
        <link rel="stylesheet" href="{{ url('frontend/css/colors/orange_color.css') }}">
    </head>

    <body>
        
        <!-- ========== Start Loading ========== -->
        
        <div class="loading">
            <div class="sk-folding-cube">
                <div class="sk-cube1 sk-cube"></div>
                <div class="sk-cube2 sk-cube"></div>
                <div class="sk-cube4 sk-cube"></div>
                <div class="sk-cube3 sk-cube"></div>
            </div>
        </div>

        <!-- ========== End Loading ========== -->
        
        <!-- ========== Start Navbar ========== -->
        
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button class="menu-toggle">
                        <span class="bar"></span>
                        <span class="bar"></span>
                        <span class="bar"></span>
                    </button>
                    <!-- logo -->
                    <a class="navbar-brand" href="index.html">Faisal<span class="brand-after"></span></a>
                </div>
                <!-- Collect the nav links, and other content for toggling -->
                <div class="navbar-links" id="ournavbar">
                    <!-- links -->
                    <ul class="nav navbar-nav navbar-right">
                        <li><a class="active" href="#" data-value="#home">Home</a></li>
                        <li><a href="#" data-value="#about">About</a></li>
                        <li><a href="#" data-value="#services">Services</a></li>
                        <li><a href="#" data-value="#resume">Resume</a></li>
                        <li><a href="#" data-value="#portfolio">Portfolio</a></li>
                        <li><a href="{{ url('/blog') }}">Blog</a></li>
                        <li><a href="#" data-value="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        
        <!-- ========== End Navbar ========== -->