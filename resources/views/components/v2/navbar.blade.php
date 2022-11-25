<!-- Start Header Top
============================================= -->
<div class="top-bar-area text-light">
    <div class="container">
        <div class="row align-center">
            <div class="col-lg-9">
                <div class="flex-item left">
{{--                    <p>--}}
{{--                        That's right, we only sell 100% organic--}}
{{--                    </p>--}}
                    <ul>
                        <li>
                            <a href="https://www.google.com/maps/place/Agrigate+Network+Limited/@23.790099,90.4073644,17z/data=!3m1!4b1!4m5!3m4!1s0x3755c7896c1a4c3f:0xf0c074963d9ee0cb!8m2!3d23.7900941!4d90.4095531">   <i class="fas fa-map-marker-alt"></i>House 78, Level B3, Road 11, Banani,
                                Dhaka-1212, Bangladesh</a>

                        </li>
                        <li>
                            <i class="fas fa-phone-alt"></i> +88 013-24-741615
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 text-end">
                <div class="social">
                    <ul>
                        <li>
                            <a href="#">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Header Top -->

<!-- Header
============================================= -->
<header>
    <!-- Start Navigation -->
    <nav class="navbar mobile-sidenav inc-shape navbar-common navbar-sticky navbar-default validnavs">

        <!-- Start Top Search -->
        <div class="top-search">
            <div class="container-xl">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-search"></i></span>
                    <input type="text" class="form-control" placeholder="Search">
                    <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
                </div>
            </div>
        </div>
        <!-- End Top Search -->

        <div class="container d-flex justify-content-between align-items-center">


            <!-- Start Header Navigation -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="/">
                    <img src="{{ asset('assets/img/logos.png') }}" class="logo" alt="Logo">
                </a>
            </div>
            <!-- End Header Navigation -->

            <!-- Main Nav -->
            <div class="main-nav-content">
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">

                    <img src="assets/img/logo.png" alt="Logo">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-times"></i>
                    </button>

                    <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="">
                            <a href="{{ route('homepage') }}" class="dropdown-toggle" data-toggle="dropdown">Home</a>
                            {{--                            <ul class="dropdown-menu"> --}}
                            {{--                                <li><a href="index.html">Agriculture</a></li> --}}
                            {{--                                <li><a href="index-3.html">Farm Shop</a></li> --}}
                            {{--                                <li><a href="index-2.html">Organic Farm</a></li> --}}
                            {{--                            </ul> --}}
                        </li>

                        <li class="">
                            <a href="{{ route('team') }}" class="dropdown-toggle" data-toggle="dropdown">Team</a>
                            {{--                            <ul class="dropdown-menu"> --}}
                            {{--                                <li><a href="about-us.html">About Us</a></li> --}}
                            {{--                                <li><a href="team.html">Team</a></li> --}}
                            {{--                                <li><a href="team-details.html">Team Details</a></li> --}}
                            {{--                                <li><a href="contact-us.html">Contact Us</a></li> --}}
                            {{--                                <li><a href="faq.html">Faq</a></li> --}}
                            {{--                                <li><a href="404.html">Error Page</a></li> --}}
                            {{--                            </ul> --}}
                        </li>

                        <li class="">
                            <a href="{{ route('project') }}" class="dropdown-toggle" data-toggle="dropdown">Projects</a>
                            {{--                            <ul class="dropdown-menu"> --}}
                            {{--                                <li><a href="project.html">Project</a></li> --}}
                            {{--                                <li><a href="project-details.html">Project Details</a></li> --}}
                            {{--                            </ul> --}}
                        </li>
                        <li class="dropdown">

                            <a href="{{ route('solutions') }}" class="" data-toggle="dropdown">Solutions</a>

                            {{--                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Solutions</a>--}}
                            {{--                            <ul class="dropdown-menu">--}}
                            {{--                                <li><a href="services.html">Solution for Farmer</a></li>--}}
                            {{--                                <li><a href="services-2.html">Solution for Institutions</a></li>--}}
                            {{--                                <li><a href="services-details.html">Agrigate Center</a></li>--}}
                            {{--                            </ul>--}}
                        </li>

                        <li class="dropdown">
                            <a href="{{ route('app') }}" class="" data-toggle="dropdown">Services</a>
                            {{--                            <ul class="dropdown-menu"> --}}
                            {{--                                <li><a href="shop.html">Shop</a></li> --}}
                            {{--                                <li><a href="shop-single.html">Shop Single</a></li> --}}
                            {{--                                <li><a href="shop-single-thumb-only.html">Shop Single Two</a></li> --}}
                            {{--                            </ul> --}}
                        </li>


                        <li class="dropdown">
                            <a href="{{ route('about') }}" class="" data-toggle="dropdown">About</a>
                            {{--                            <ul class="dropdown-menu"> --}}
                            {{--                                <li><a href="blog-standard.html">Blog Standard</a></li> --}}
                            {{--                                <li><a href="blog-with-sidebar.html">Blog With Sidebar</a></li> --}}
                            {{--                                <li><a href="blog-2-colum.html">Blog Grid Two Colum</a></li> --}}
                            {{--                                <li><a href="blog-3-colum.html">Blog Grid Three Colum</a></li> --}}
                            {{--                                <li><a href="blog-single.html">Blog Single</a></li> --}}
                            {{--                                <li><a href="blog-single-with-sidebar.html">Blog Single With Sidebar</a></li> --}}
                            {{--                            </ul> --}}
                        </li>
                        <li class="dropdown">
                            <a href="{{ route('career') }}" class="" data-toggle="dropdown">Career</a>
                            {{--                            <ul class="dropdown-menu"> --}}
                            {{--                                <li><a href="shop.html">Shop</a></li> --}}
                            {{--                                <li><a href="shop-single.html">Shop Single</a></li> --}}
                            {{--                                <li><a href="shop-single-thumb-only.html">Shop Single Two</a></li> --}}
                            {{--                            </ul> --}}
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->

                <div class="attr-right">
                    <!-- Start Atribute Navigation -->
                    <div class="attr-nav">
                        <ul>
                            <li class="contact">
                                <div class="call">
                                    <div class="icon">
                                        <i class="fas fa-comments-alt-dollar"></i>
                                    </div>
                                    <div class="info">
                                        <p>Have any Questions?</p>
                                        <h5><a href="mailto:info@crysta.com">info@agrigate.asia</a></h5>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- End Atribute Navigation -->

                </div>

                <!-- Overlay screen for menu -->
                <div class="overlay-screen"></div>
                <!-- End Overlay screen for menu -->

            </div>
            <!-- Main Nav -->

        </div>
    </nav>
    <!-- End Navigation -->
</header>
<!-- End Header -->
