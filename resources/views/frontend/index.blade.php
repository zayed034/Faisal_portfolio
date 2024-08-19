
        @extends('Frontend.layouts.main')
        @section('main-container')
        
        <!-- ========== Start Home ========== -->
        
        <section class="home" id="home">
            <div class="overlay">
                <div class="container">
                    <div class="intro display-table">
                        <div class="display-table-cell">
                            <h1>Hi, I’m Faisal Ahmed</h1>
                            <h3><span>Digital Marketing</span><span>SEO Expert</span><span>Wordpress</span></h3>
                            <div class="my-btn">
                                <a href="#" class="main-btn">Hire Me</a>
                            </div>
                        </div>
                    </div>
                    <div class="divider">
                        <svg class="wave" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="1920px" height="322.61px" viewBox="0 0 1920 322.61" enable-background="new 0 0 1920 322.61" xml:space="preserve">
                            <path opacity="0.5" fill="#201e20" d="M1920,0.125c-119.022-1.873-267.412,16.756-405.666,93.152
                            C1217.826,257.123,1036.001,280.94,802.595,239.68s-268.61-60.067-530.169,3.501C161.642,270.105,69.463,273.733,0,268.972v53.639
                            h1920V0.125z"/>
                            <path class="my-wave" opacity="0.6" d="M1920,41.35c-111.979-14.35-253.634-4.298-401.009,78.27
                            C1186.982,305.628,981,284.61,781.744,247.61s-216.231-44.568-477.79,19C183.522,295.88,78.391,296.893,0,289.466v33.145h1920V41.35
                            z"/>
                            <path fill="#1b191b" d="M1920,55.904c-99.143-1.178-229.965,20.125-392.831,92.893
                            c-419.874,187.597-610.347,138.584-745.425,111.032s-204.133-34.643-465.692,28.926C192.241,318.846,81.893,318.814,0,310.438
                            v12.173h1920V55.904z"/>  
                        </svg>
                    </div>
                </div>
            </div> 
        </section>
        
        <!-- ========== End Home ========== -->
        
        <!-- ========== Start About Me ========== -->
        
        {{--  <section class="about-me" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <div class="about-image">
                            <img class="img-responsive" src="{{ url('frontend/images/faisal.png') }}" alt="">
                        </div>
                    </div> 
                    <div class="col-md-7">
                        <div class="about-info">
                            <div class="main-title">
                                <h2>About Me
                                    <span class="holder"></span>
                                    <span> 01.</span>
                                </h2>
                            </div>
                            <h3>I am Ayloul Smith, Im a passionate web designer &amp; developer with 5 Years of Experience</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi sed do eiusm tempor incididunt ut labore et dolore magna.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm tempor incididunt ut labore et dolore magna aliqua.</p>
                            <div class="personal-info">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p>Name: <span>Faisal Ahmed</span></p>
                                    </div>

                                    <div class="col-sm-6">
                                        <p>Age: <span>26</span></p>
                                    </div>

                                    <div class="col-sm-6">
                                        <p>Phone: <span>+8880 1799 262412</span></p>
                                    </div>

                                    <div class="col-sm-6">
                                        <p>Address: <span>Dhaka, Bangladesh</span></p>
                                    </div>

                                </div>
                                <span class="info-bg"><i class="fa fa-address-card"></i></span>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </section>  --}}

        <section class="about-me" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <div class="about-image">
                            @if($about && $about->image)
                                <img class="img-responsive" src="{{ asset('storage/' . $about->image) }}" alt="{{ $about->title }}">
                            @else
                                <img class="img-responsive" src="{{ url('frontend/images/default-about-image.png') }}" alt="Default Image">
                            @endif
                        </div>
                    </div> 
                    <div class="col-md-7">
                        <div class="about-info">
                            <div class="main-title">
                                <h2>About Me
                                    <span class="holder"></span>
                                    <span> 01.</span>
                                </h2>
                            </div>
                            @if($about)
                                <h3>{{ $about->title }}</h3>
                                <p>{{ $about->description }}</p>
                            @else
                                <h3>Default Title</h3>
                                <p>Default description about me.</p>
                            @endif
                            <div class="personal-info">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p>Name: <span>Faisal Ahmed</span></p>
                                    </div>

                                    <div class="col-sm-6">
                                        <p>Age: <span>26</span></p>
                                    </div>

                                    <div class="col-sm-6">
                                        <p>Phone: <span>+8880 1799 262412</span></p>
                                    </div>

                                    <div class="col-sm-6">
                                        <p>Address: <span>Dhaka, Bangladesh</span></p>
                                    </div>
                                </div>
                                <span class="info-bg"><i class="fa fa-address-card"></i></span>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </section>


        
        <!-- ========== End About Me ========== -->
        
        <!-- ========== Start Skills ========== -->
        
        <section class="skills">
            <div class="container">
                <div class="main-title">
                    <h2>My Skills
                        <span class="holder"></span>
                        <span> 02.</span>
                    </h2>
                </div>
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="skills-content">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="personal-skills">
                                        <h3>
                                            <i class="fa fa-vcard"></i>
                                            Personal Skills
                                        </h3>
                                        <div class="progress-container">
                                            <span class="percent" data-from="0" data-to="85" data-speed="1100" data-refresh-interval="50">0</span>
                                            <h4>Communication</h4>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="progress-container">
                                            <span class="percent" data-from="0" data-to="80" data-speed="1100" data-refresh-interval="50">0</span>
                                            <h4>Teamwork</h4>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="progress-container">
                                            <span class="percent" data-from="0" data-to="75" data-speed="1100" data-refresh-interval="50">0</span>
                                            <h4>Self-motivation</h4>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="professional-skills">
                                        <h3>
                                            <i class="fa fa-tasks"></i>
                                            Professional Skills
                                        </h3>
                                        <div class="progress-container">
                                            <span class="percent" data-from="0" data-to="95" data-speed="1100" data-refresh-interval="50">0</span>
                                            <h4>Digital Marketing</h4>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="progress-container">
                                            <span class="percent" data-from="0" data-to="75" data-speed="1100" data-refresh-interval="50">0</span>
                                            <h4>SEO</h4>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="progress-container">
                                            <span class="percent" data-from="0" data-to="89" data-speed="1100" data-refresh-interval="50">0</span>
                                            <h4>Wordpress</h4>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- ========== End Skills ========== -->
        
        <!-- ========== Start Services ========== -->
        
        {{--  <section class="services" id="services">
            <div class="container">
                 <div class="main-title">
                    <h2>My Services
                        <span class="holder"></span>
                        <span> 03.</span>
                    </h2>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="service">
                            <div class="service-icon">
                                <i class="fa fa-pencil fa-lg"></i>
                            </div>
                            <h4>Creative Design</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed eiusm.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="service">
                            <div class="service-icon">
                                <i class="fa fa-flag fa-lg"></i>
                            </div>
                            <h4>Branding</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed eiusm.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="service">
                            <div class="service-icon">
                                <i class="fa fa-laptop fa-lg"></i>
                            </div>
                            <h4>User Interface</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed eiusm.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="service">
                            <div class="service-icon">
                                <i class="fa fa-briefcase fa-lg"></i>
                            </div>
                            <h4>User Experience</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed eiusm.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="service">
                            <div class="service-icon">
                                <i class="fa fa-code fa-lg"></i>
                            </div>
                            <h4>Clean Code</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed eiusm.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="service">
                            <div class="service-icon">
                                <i class="fa fa-support fa-lg"></i>
                            </div>
                            <h4>Fast Support</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed eiusm.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>  --}}
        <section class="services" id="services">
    <div class="container">
        <div class="main-title">
            <h2>My Services
                <span class="holder"></span>
                <span> 03.</span>
            </h2>
        </div>
        <div class="row">
            @foreach($services as $service)
                <div class="col-md-4 col-sm-6">
                    <div class="service">
                        <div class="service-icon">
                            <i class="fa fa-pencil fa-lg"></i> <!-- Replace with a dynamic icon if needed -->
                        </div>
                        <h4>{{ $service->service_name }}</h4>
                        <p>{{ $service->description }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

        
        <!-- ========== End Services ========== -->
        
        <!-- ========== Start Resume ========== -->
        
        <section class="resume" id="resume">
            <div class="container">
                <div class="main-title">
                    <h2>My Resume
                        <span class="holder"></span>
                        <span> 04.</span>
                    </h2>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="timeline">
                            <ul>
                                <li>
                                    <div class="timeline-content wow fadeInLeft" data-wow-duration=".8s" data-wow-offset="100">
                                        <span class="date">2017 - 2021</span>
                                        <h4>Freelancer</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm tempor incididunt ut labore et dolore magna aliqua Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="timeline-content wow fadeInRight" data-wow-duration=".8s" data-wow-offset="100">
                                        <span class="date">2015 - 2017</span>
                                        <h4>Company Name</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm tempor incididunt ut labore et dolore magna aliqua Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="timeline-content wow fadeInLeft" data-wow-duration=".8s" data-wow-offset="100">
                                        <span class="date">2014 - 2015</span>
                                        <h4>Front-End Developer</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm tempor incididunt ut labore et dolore magna aliqua Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="timeline-content wow fadeInRight" data-wow-duration=".8s" data-wow-offset="100">
                                        <span class="date">2013 - 2014</span>
                                        <h4>Web Developer</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm tempor incididunt ut labore et dolore magna aliqua Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="timeline-content wow fadeInLeft" data-wow-duration=".8s" data-wow-offset="100">
                                        <span class="date">2011 - 2013</span>
                                        <h4>Stanford University</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm tempor incididunt ut labore et dolore magna aliqua Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- ========== End Resume ========== -->
        
        <!-- ========== Start Portfolio ========== -->
        
        <section class="portfolio" id="portfolio">
            <div class="container">
                <div class="main-title">
                    <h2>My Portfolio
                        <span class="holder"></span>
                        <span> 05.</span>
                    </h2>
                </div>
                <div class="filter-menu">
                    <ul id="control" class="list-filter list-unstyled">
                        <li class="active" data-filter="all">All</li>
                        <li data-filter="1">Digital Marketing</li>
                        <li data-filter="2">SEO</li>
                        <li data-filter="3">Wordpress</li>
                    </ul>
                </div>
                <div class="portfolio-content">
                    <div id="filtr-container" class="row">
                        <div class="col-md-4 col-sm-6 filtr-item" data-category="1" data-sort="value">
                            <div class="item">
                                <img class="img-responsive" src="{{ url('frontend/images/portfolio/item-1.jpg') }}" alt="">
                                <a class="overlay" href="{{ url('frontend/images/portfolio/item-1.jpg') }}">
                                    <span class="icon-img"><i class="fa fa-image"></i></span>
                                    <div class="item-title">
                                        <h4>Digital Marketing</h4>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 filtr-item" data-category="2" data-sort="value">
                            <div class="item">
                                <img class="img-responsive" src="{{ url('frontend/images/portfolio/item-2.jpg') }}" alt="">
                                <a class="overlay" href="{{ url('frontend/images/portfolio/item-2.jpg') }}">
                                    <span class="icon-img"><i class="fa fa-image"></i></span>
                                    <div class="item-title">
                                        <h4>SEO</h4>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 filtr-item" data-category="3" data-sort="value">
                            <div class="item">
                                <img class="img-responsive" src="{{ url('frontend/images/portfolio/item-3.jpg') }}" alt="">
                                <a class="overlay" href="{{ url('frontend/images/portfolio/item-3.jpg') }}">
                                    <span class="icon-img"><i class="fa fa-image"></i></span>
                                    <div class="item-title">
                                        <h4>Wordpress</h4>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 filtr-item" data-category="1" data-sort="value">
                            <div class="item">
                                <img class="img-responsive" src="{{ url('frontend/images/portfolio/item-4.jpg') }}" alt="">
                                <a class="overlay" href="{{ url('frontend/images/portfolio/item-4.jpg') }}">
                                    <span class="icon-img"><i class="fa fa-image"></i></span>
                                    <div class="item-title">
                                        <h4>Digital Marketing</h4>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 filtr-item" data-category="2" data-sort="value">
                            <div class="item">
                                <img class="img-responsive" src="{{ url('frontend/images/portfolio/item-5.jpg') }}" alt="">
                                <a class="overlay" href="{{ url('frontend/images/portfolio/item-5.jpg') }}">
                                    <span class="icon-img"><i class="fa fa-image"></i></span>
                                    <div class="item-title">
                                        <h4>SEO</h4>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 filtr-item" data-category="3" data-sort="value">
                            <div class="item">
                                <img class="img-responsive" src="{{ url('frontend/images/portfolio/item-6.jpg') }}" alt="">
                                <a class="overlay" href="{{ url('frontend/images/portfolio/item-6.jpg') }}">
                                    <span class="icon-img"><i class="fa fa-image"></i></span>
                                    <div class="item-title">
                                        <h4>Wordpress</h4>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- ========== End Portfolio ========== -->
        
        <!-- ========== Start Fun Facts ========== -->
        
        {{--  <section class="facts">
            <div class="container">
                <div class="main-title">
                    <h2>Fun Facts
                        <span class="holder"></span>
                        <span> 06.</span>
                    </h2>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="fact-item">
                            <span class="fact-number" data-from="0" data-to="554" data-speed="2500"></span>
                            <h4>Projects Done</h4>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="fact-item">
                            <span class="fact-number" data-from="0" data-to="548" data-speed="2500"></span>
                            <h4>Happy Clients</h4>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="fact-item">
                            <span class="fact-number" data-from="0" data-to="860" data-speed="2500"></span>
                            <h4>Hours Of Work</h4>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="fact-item">
                            <span class="fact-number" data-from="0" data-to="3200" data-speed="2500"></span>
                            <h4>Awards Received</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>  --}}
        <section class="facts">
    <div class="container">
        <div class="main-title">
            <h2>Fun Facts
                <span class="holder"></span>
                <span> 06.</span>
            </h2>
        </div>
        <div class="row">
            @foreach($funFacts as $funFact)
            <div class="col-md-3 col-sm-6">
                <div class="fact-item">
                    <span class="fact-number" data-from="0" data-to="{{ $funFact->number }}" data-speed="2500"></span>
                    <h4>{{ $funFact->subject }}</h4>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

        
        <!-- ========== End Fun Facts ========== -->
        
        <!-- ========== Start Testimonials ========== -->
        
        {{--  <section id="testimonials" class="testimonials">
            <div class="container">
                <div class="main-title">
                    <h2>Testimonials
                        <span class="holder"></span>
                        <span> 07.</span>
                    </h2>
                </div>
                <div class="row">
                    <div class="col-md-12 owl-carousel owl-theme">
                        <!-- New Item -->
                        <div class="testimonial-box">
                            <div class="client-pic">
                                <img src="{{ url('frontend/images/testimonials/1.jpg') }}" alt="client">
                            </div>
                            <div class="client-details">
                                <h6> Joe Paulian </h6>
                                <span>Web Developer</span>
                            </div>
                            <div class="clearfix"></div>
                            <div class="description">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                        </div>
                        <!-- New Item -->
                        <div class="testimonial-box">
                            <div class="client-pic">
                                <img src="{{ url('frontend/images/testimonials/2.jpg') }}" alt="client">
                            </div>
                            <div class="client-details">
                                <h6> Silvia Hatmun </h6>
                                <span>SEO Manager</span>
                            </div>
                            <div class="clearfix"></div>
                            <div class="description">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                        </div>
                        <!-- New Item -->
                        <div class="testimonial-box">
                            <div class="client-pic">
                                <img src="{{ url('frontend/images/testimonials/3.jpg') }}" alt="client">
                            </div>
                            <div class="client-details">
                                <h6> Alexander Smith </h6>
                                <span>Graphic Designer</span>
                            </div>
                            <div class="clearfix"></div>
                            <div class="description">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                        </div>
                        <!-- New Item -->
                        <div class="testimonial-box">
                            <div class="client-pic">
                                <img src="{{ url('frontend/images/testimonials/4.jpg') }}" alt="client">
                            </div>
                            <div class="client-details">
                                <h6> Cristina Jordan </h6>
                                <span>Web Developer</span>
                            </div>
                            <div class="clearfix"></div>
                            <div class="description">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>  --}}

        <section id="testimonials" class="testimonials">
    <div class="container">
        <div class="main-title">
            <h2>Testimonials
                <span class="holder"></span>
                <span> 07.</span>
            </h2>
        </div>
        <div class="row">
            <div class="col-md-12 owl-carousel owl-theme">
                @foreach ($reviews as $review)
                    <div class="testimonial-box">
                        <div class="client-pic">
                            <img src="{{ $review->image ? Storage::url($review->image) : url('frontend/images/default.jpg') }}" alt="client">
                        </div>
                        <div class="client-details">
                            <h6>{{ $review->name }}</h6>
                            <span>{{ $review->designation }}</span>
                        </div>
                        <div class="clearfix"></div>
                        <div class="description">
                            <p>{{ $review->description }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

        
        <!-- ========== End Testimonials ========== -->
        
        <!-- ========== Start Blog ========== -->
        
        {{--  <section class="blog" id="blog">
            <div class="container">
                <div class="main-title">
                    <h2>My Blog
                        <span class="holder"></span>
                        <span> 08.</span>
                    </h2>
                </div>
                <div class="row">
                    <!-- New Item -->
                    <div class="col-md-4">
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
                    <div class="col-md-4">
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
                    <div class="col-md-4">
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
                </div>
            </div>
        </section>  --}}
        <section class="blog" id="blog">
    <div class="container">
        <div class="main-title">
            <h2>My Blog
                <span class="holder"></span>
                <span> 08.</span>
            </h2>
        </div>
        <div class="row">
            @foreach($blogs as $blog)
            <div class="col-md-6">
                <div class="post">
                    <!-- Post Image -->
                    <div class="post-img">
                        <img src="{{ Storage::url($blog->image) }}" class="img-responsive" alt="{{ $blog->title }}">
                        <div class="post-category">
                            <a href="{{ url('/single', $blog->id) }}">{{ $blog->subject }}</a>
                        </div>
                    </div>
                    <!-- Post Content -->
                    <div class="post-content">
                        <div class="post-title">
                            <a href="{{ url('/single', $blog->id) }}"><h4>{{ $blog->title }}</h4></a>
                        </div>
                        <ul class="post-info list-unstyled">
                            <li>
                                <i class="fa fa-calendar"></i>
                                <span>{{ $blog->created_at->format('F j, Y') }}</span>
                            </li>
                        </ul>
                        <div class="post-text">
                            <p>{{ Str::limit($blog->description, 150) }}</p>
                        </div>
                        <a href="{{ url('/single', $blog->id) }}" class="post-more">Read more <i class="fa fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

        
        <!-- ========== End Blog ========== -->
        
        <!-- ========== Start Contact ========== -->

        <section class="contact" id="contact">
            <div class="container">
                <div class="main-title">
                    <h2>Contact Me
                        <span class="holder"></span>
                        <span> 09.</span>
                    </h2>
                </div>
                <div class="row">
                    <div class="col-lg-10 col-lg-offset-1">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="contact-box">
                                    <div class="title-box">
                                        <div class="icon-box">
                                            <i class="fa fa-map-marker"></i>
                                        </div>
                                        <div class="name-box">
                                            <h4>Location</h4>
                                        </div>
                                    </div>
                                    <div class="content-box">
                                        <p>{{ $contact->address }}</p>
                                    </div>
                                    <div class="number-box"><span>01.</span></div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="contact-box">
                                    <div class="title-box">
                                        <div class="icon-box">
                                            <i class="fa fa-envelope"></i>
                                        </div>
                                        <div class="name-box">
                                            <h4>Email</h4>
                                        </div>
                                    </div>
                                    <div class="content-box">
                                        <p>{{ $contact->email }}</p>
                                    </div>
                                    <div class="number-box"><span>02.</span></div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="contact-box">
                                    <div class="title-box">
                                        <div class="icon-box">
                                            <i class="fa fa-phone"></i>
                                        </div>
                                        <div class="name-box">
                                            <h4>Phone</h4>
                                        </div>
                                    </div>
                                    <div class="content-box">
                                        <p>{{ $contact->number }}</p>
                                    </div>
                                    <div class="number-box"><span>03.</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-10 col-lg-offset-1">
                                <form class="contact-form" action="#" method="post">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="name" placeholder="Name" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input type="email" class="form-control" name="email" placeholder="Email" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <textarea class="form-control" name="message" placeholder="Your Message" required></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Button Send Message  -->
                                    <button class="main-btn" type="submit" name="send">Send Message</button>
                                </form>
                            </div>
                </div>
            </div>
        </section>

        
        <!-- ========== End Contact ========== -->
        
       @endsection