@extends('user.v2.main.layout')

@section('content')

    <body>

        <!--[if lte IE 9]>
                                                <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a
                                                    href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
                                                <![endif]-->

        <!-- Preloader Start -->
        <div class="se-pre-con"></div>
        <!-- Preloader Ends -->


        {{-- ------------------------------------------------------------------------------ Navbar ------------------------------------------------------------------------------ --}}

        <x-v2.navbar></x-v2.navbar>

        {{-- ------------------------------------------------------------------------------ Navbar ------------------------------------------------------------------------------ --}}



        <!-- Start Breadcrumb
                                    ============================================= -->
        <div class="breadcrumb-area text-center shadow dark bg-fixed text-light"
            style="background-image: url(assets/img/banner/4.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <h1>About Us</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li><a href="index.html"><i class="fas fa-home"></i> Home</a></li>
                                <li class="active">About</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Breadcrumb -->

        <!-- Start Farmer
                                ============================================= -->
        <div class="farmer-area default-padding bottom-less bg-gray"
            style="background-image: url(assets/img/shape/36.png);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="site-heading text-center">
                            <h5 class="sub-title">Agrigate</h5>
                            <h2 class="title">About Us</h2>
                            <div class="devider"></div>
                            <p style="text-align: justify">
                                Founded in 2021, Agrigate is a for-profit social enterprise that believes in farmer-centric
                                impact. We work with Bangladeshi’s most rural small-scale farmers to supply the region with
                                high-quality commodities. We do this with the aim to move the farmers from poverty and into
                                the middle-class. Through human-centered design, we have managed to co-create an easy model
                                that answers the farmers most pressing questions. We are building digital technologies to
                                revolutionize supply chain and production efficiency in the farm sector. We are passionate
                                to improve the lives of the farmers and Entrepreneurs. Our vision is bold and most efficient
                                to develop supply chain platform and increase income of the farmers, retailers, traders.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <div class="row">

                            <!-- Single Item -->
                            <div class="col-lg-4 farmer-stye-one">
                                <div class="farmer-style-one-item">
                                    <div class="thumb">
                                        <img src="assets/img/farmers/1.jpg" alt="Image Not Found">
                                        <div class="social">
                                            <i class="fas fa-share-alt"></i>
                                            <ul>
                                                <li class="facebook">
                                                    <a href="#">
                                                        <i class="fab fa-facebook-f"></i>
                                                    </a>
                                                </li>
                                                <li class="twitter">
                                                    <a href="#">
                                                        <i class="fab fa-twitter"></i>
                                                    </a>
                                                </li>
                                                <li class="linkedin">
                                                    <a href="#">
                                                        <i class="fab fa-linkedin-in"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="info">
                                        <span>Farmer of tomatoes</span>
                                        <h4><a href="team-details.html">Aleesha Brown</a></h4>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="col-lg-4 farmer-stye-one">
                                <div class="farmer-style-one-item">
                                    <div class="thumb">
                                        <img src="assets/img/farmers/2.jpg" alt="Image Not Found">
                                        <div class="social">
                                            <i class="fas fa-share-alt"></i>
                                            <ul>
                                                <li class="facebook">
                                                    <a href="#">
                                                        <i class="fab fa-facebook-f"></i>
                                                    </a>
                                                </li>
                                                <li class="twitter">
                                                    <a href="#">
                                                        <i class="fab fa-twitter"></i>
                                                    </a>
                                                </li>
                                                <li class="linkedin">
                                                    <a href="#">
                                                        <i class="fab fa-linkedin-in"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="info">
                                        <span>Farmer of cherry</span>
                                        <h4><a href="team-details.html">Kevin Martin</a></h4>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="col-lg-4 farmer-stye-one">
                                <div class="farmer-style-one-item">
                                    <div class="thumb">
                                        <img src="assets/img/farmers/3.jpg" alt="Image Not Found">
                                        <div class="social">
                                            <i class="fas fa-share-alt"></i>
                                            <ul>
                                                <li class="facebook">
                                                    <a href="#">
                                                        <i class="fab fa-facebook-f"></i>
                                                    </a>
                                                </li>
                                                <li class="twitter">
                                                    <a href="#">
                                                        <i class="fab fa-twitter"></i>
                                                    </a>
                                                </li>
                                                <li class="linkedin">
                                                    <a href="#">
                                                        <i class="fab fa-linkedin-in"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="info">
                                        <span>Farmer of potato</span>
                                        <h4><a href="team-details.html">Sarah Albert</a></h4>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->

                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
        <!-- End Farmer -->

        <!-- Start Food Order Process
                                ============================================= -->
        <div class="process-area default-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 process-style-one">
                        <h5 class="sub-title">Agrigate</h5>
                        <h2 class="title">About our services</h2>
                        <div class="call-to-action mt-45">
                            <div class="icon">
                                <i class="fas fa-user-headset"></i>
                            </div>
                            <div class="info">
                                <span>Get quick support</span>
                                <h4><a href="tel:2151234567">+123 34598768</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 process-style-one">
                        <div class="row">
                            <div class="shape">
                                <img src="assets/img/shape/35.webp" alt="Image Not Found">
                            </div>

                            <div class="col-lg-4">
                                <div class="nav nav-tabs order-process-tab-navs" id="nav-tab" role="tablist">
                                    <button class="nav-link" id="nav-id-1" data-bs-toggle="tab" data-bs-target="#tab1"
                                        type="button" role="tab" aria-controls="tab1" aria-selected="true">
                                        <span>Market Segment </span>


                                    </button>



                                    <button class="nav-link active" id="nav-id-2" data-bs-toggle="tab"
                                        data-bs-target="#tab2" type="button" role="tab" aria-controls="tab2"
                                        aria-selected="false">
                                        <span>Services </span>

                                    </button>


                                    <button class="nav-link" id="nav-id-3" data-bs-toggle="tab" data-bs-target="#tab3"
                                        type="button" role="tab" aria-controls="tab3" aria-selected="false">
                                        <span>Market Actors</span>

                                    </button>


                                    <button class="nav-link" id="nav-id-4" data-bs-toggle="tab" data-bs-target="#tab4"
                                        type="button" role="tab" aria-controls="tab4" aria-selected="false">
                                        <span>Service Delivery Channels</span>

                                    </button>
                                </div>
                            </div>



                            <div class="col-lg-8">
                                <div class="tab-content order-process-tab-content" id="nav-tabContent">



                                    <!-- Single Item -->
                                    <div class="tab-pane fade" id="tab1" role="tabpanel" aria-labelledby="nav-id-1">
                                        <h3 class="title">Market Segment</h3>


                                        <p>

                                            Agrigate aims to support all
                                            primary market segments in the
                                            food supply value chain.

                                            Our services extend from
                                            providing farmers with high-
                                            quality feed, seeds, pest
                                            controlling methods to selling
                                            their produce to institutional
                                            buyers.

                                            We train farmers to be better and
                                            more effective managers for their
                                            farms with technology and
                                            training.
                                        </p>

                                        <ul>
                                            <li>Crops</li>
                                            <li>Ruminants</li>
                                            <li>Poultry</li>
                                            <li>Fish</li>
                                        </ul>

                                        {{-- <ul>
                                    <li>Product will be delivered to your door</li>
                                    <li>The product will be checked before being sent to you.</li>
                                </ul> --}}
                                    </div>
                                    <!-- End Single Item -->




                                    <!-- Single Item -->
                                    <div class="tab-pane fade show active" id="tab2" role="tabpanel"
                                        aria-labelledby="nav-id-2">
                                        <div class="row align-center">
                                            <h3 class="title">Services</h3>
                                            <p>
                                                Agrigate provides a variety of services in key segments of the
                                                industry: <br>

                                                1) Marketplace Solutions: By allowing market actors to buy and
                                                sell their products through a community vetted platform. <br>

                                                2) Financial Services: Vetting Farmers and Rural Entrepreneurs
                                                by creating their digital ID to enable and connect them to
                                                financial services. <br>

                                                3) Advisory Services: Providing them with consultation and
                                                advisory services to increase their production yield through
                                                access to better knowledge and resources. <br>


                                                4) Technology-Based Support: Giving them access to data-
                                                driven solutions, soil monitoring devices, early weather
                                                prediction systems, green technology for irrigation, and
                                                sustainable techniques to make their farming more precise
                                                and efficient.

                                            </p>

                                            <ul>
                                                <li>Marketplace</li>
                                                <li>Financial</li>
                                                <li>Advisory</li>
                                                <li>Technology based</li>
                                            </ul>
                                            {{-- <ul>
                                        <li>You must come for purchasing the product</li>
                                        <li>The product quality depends on your choice</li>
                                    </ul> --}}
                                        </div>
                                    </div>
                                    <!-- End Single Item -->



                                    <!-- Single Item -->
                                    <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="nav-id-3">
                                        <div class="row align-center">
                                            <h3 class="title">Market Actors</h3>
                                            <p>
                                                The key stakeholders that Agrigate
                                                has identified are as such: <br>

                                                1) Farmers <br>

                                                2) Development Organizations <br>

                                                3) Institutional Buyers <br>

                                                4) Retailers (Rural Entrepreneurs) <br>

                                                Our network will enable and
                                                enhance interactions between
                                                these key market actors to ensure
                                                a robust service distribution model
                                                along the supply chain.


                                            </p>


                                            <ul>
                                                <li>Organizations</li>
                                                <li>Farmers</li>
                                                <li>Buyers</li>
                                                <li>Retailers</li>
                                            </ul>

                                            {{-- <ul>
                                        <li>You must come for purchasing the product</li>
                                        <li>The product quality depends on your choice</li>
                                    </ul> --}}
                                        </div>
                                    </div>
                                    <!-- End Single Item -->



                                    <!-- Single Item -->
                                    <div class="tab-pane fade" id="tab4" role="tabpanel" aria-labelledby="nav-id-4">
                                        <div class="row align-center">
                                            <h3 class="title">Service Delivery Channels</h3>
                                            <p>
                                                The key stakeholders that Agrigate
                                                has identified are as such: <br>

                                                1) Farmers <br>

                                                2) Development Organizations <br>

                                                3) Institutional Buyers <br>

                                                4) Retailers (Rural Entrepreneurs) <br>

                                                Our network will enable and
                                                enhance interactions between
                                                these key market actors to ensure
                                                a robust service distribution model
                                                along the supply chain.


                                            </p>


                                            <ul>
                                                <li>APP & Web</li>
                                                <li>Agrigate Center</li>
                                                <li>Call Center</li>
                                                <li>SMS Center</li>
                                            </ul>
                                            {{-- <ul>
                                        <li>You must come for purchasing the product</li>
                                        <li>The product quality depends on your choice</li>
                                    </ul> --}}
                                        </div>
                                    </div>
                                    <!-- End Single Item -->

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Food Order Process -->


        <!-- Start Why Choose Us
                                ============================================= -->
        <div class="choose-us-style-one-area overflow-hidden default-padding">
            <div class="container">
                <div class="row align-center">
                    <div class="col-lg-6 choose-us-style-one">
                        <div class="thumb">
                            <img src="https://www.researchgate.net/publication/354492168/figure/fig5/AS:1066309089492994@1631239306961/Bangladeshi-farmer-Md-Khalilur-Rahman-with-a-fresh-harvest-of-Bt-brinjal-in-Hijulii-of.ppm" alt="Image Not Found">
                            <div class="shape">
                                <img class="wow fadeInDown" src="assets/img/shape/22.png" alt="Image not found">
                            </div>
{{--                            <div class="product-produce">--}}
{{--                                <div class="icon">--}}
{{--                                    <i class="flaticon-farmer"></i>--}}
{{--                                </div>--}}
{{--                                <div class="fun-fact">--}}
{{--                                    <div class="counter">--}}
{{--                                        <div class="timer" data-to="258" data-speed="2000">258</div>--}}
{{--                                        <div class="operator">K</div>--}}
{{--                                    </div>--}}
{{--                                    <span class="medium">Agriculture, Organic Products</span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                        </div>
                    </div>
                    <div class="col-lg-6 choose-us-style-one">
                        <h5 class="sub-title">Agrigate Asia</h5>
                        <h2 class="title">Our Purpose</h2>
                        <div class="accordion accordion-regular mt-35" id="faqAccordion">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        To make our country self-sufficient in food by providing improved agricultural
                                        services to the farmers.
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p>
                                            To build strong networks through supply chain development for sustainable
                                            development of farmers, input seller, local buyers and institutional buyers
                                            through Agrigate Platform. Improving the value chain of agricultural products by
                                            providing media of economic development through technology-based services to
                                            rural people and local stakeholders.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        To develop the market by involving multiple stakeholders in market segments of
                                        crops, cattle, poultry, and fisheries.

                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p>
                                            To build strong networks through supply chain development for sustainable
                                            development of farmers, input seller, local buyers and institutional buyers
                                            through Agrigate Platform. Improving the value chain of agricultural products by
                                            providing media of economic development through technology-based services to
                                            rural people and local stakeholders.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        To provide solutions against the problems of farmers through the provision of modern
                                        agricultural technology and service.
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p>
                                            To build strong networks through supply chain development for sustainable
                                            development of farmers, input seller, local buyers and institutional buyers
                                            through Agrigate Platform. Improving the value chain of agricultural products by
                                            providing media of economic development through technology-based services to
                                            rural people and local stakeholders.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Why Choose us -->

        <x-v2.footer></x-v2.footer>

    </body>
@endsection
