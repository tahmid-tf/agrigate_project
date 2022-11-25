@extends('user.v2.main.layout')

@section('content')
    <body>

    <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a
        href="https://browsehappy.com/">upgrade
        your browser</a> to improve your experience and security.</p>
    <![endif]-->

    <!-- Preloader Start -->
    <div class="se-pre-con"></div>
    <!-- Preloader Ends -->

    {{-- ------------------------------------------------------------------------------ Navbar ------------------------------------------------------------------------------ --}}

    <x-v2.navbar></x-v2.navbar>

    {{-- ------------------------------------------------------------------------------ Navbar ------------------------------------------------------------------------------ --}}

    <!-- Start Banner Area
============================================= -->
    <div class="banner-area navigation-circle text-light banner-style-one zoom-effect overflow-hidden">
        <!-- Slider main container -->
        <div class="banner-fade">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">


            @foreach($sliders as $slider)

                <!-- Single Item -->
                    <div class="swiper-slide banner-style-one">
                        <div class="banner-thumb bg-cover shadow dark"
                             {{--                         style="background: url(assets/img/banner/17.jpg);"></div>--}}

                             style="background: url({{asset('storage/'.$slider->image)}});"></div>

                        <div class="container">
                            <div class="row align-center">
                                <div class="col-xl-7">
                                    {{--                                <div class="content">--}}
                                    {{--                                    <h4>Original & Natural</h4>--}}
                                    {{--                                    <h2><strong>Organic Agriculture</strong> Farming Products</h2>--}}
                                    {{--                                    <p>--}}
                                    {{--                                        Dissuade ecstatic and properly saw entirely sir why laughter endeavor. In on my jointure horrible margaret suitable he followed.--}}
                                    {{--                                    </p>--}}
                                    {{--                                    <div class="button">--}}
                                    {{--                                        <a class="btn btn-theme secondary btn-md radius animation" href="about-us.html">Discover More</a>--}}
                                    {{--                                    </div>--}}
                                    {{--                                </div>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->


                @endforeach


            </div>

            <!-- Navigation -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

        </div>
    </div>
    <!-- End Main -->

    <!-- Start About
    ============================================= -->


    {{--    ----------------------------------------------------------- container -----------------------------------------------------------  --}}


    {{--<div class="about-style-one-area default-padding">--}}


    <!-- Shape -->
    {{--    <div class="shape-right-top">--}}
    {{--        <img src="assets/img/shape/leaf.png" alt="Image not found">--}}
    {{--    </div>--}}
    <!-- End Shape -->

    {{--    <div class="container">--}}
    {{--        <div class="row align-center">--}}
    {{--            <div class="col-xl-5 col-lg-6 about-style-one pr-50 pr-md-15 pr-xs-15">--}}
    {{--                <div class="thumb">--}}
    {{--                    <img src="assets/img/about/5.jpg" alt="Image Not Found">--}}
    {{--                    <div class="sub-item">--}}
    {{--                        <img src="assets/img/about/1.jpg" alt="Image Not Found">--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            <div class="col-xl-7 col-lg-6 about-style-one">--}}
    {{--                <div class="row align-center">--}}
    {{--                    <div class="col-xl-7 col-lg-12">--}}
    {{--                        <h2 class="heading">Agriculture For <br> Future Development</h2>--}}
    {{--                        <p>--}}
    {{--                            There are many variations of passages of ipsum available but the majority have suffered--}}
    {{--                            alteration in some form by injected humor or random word which don’t look even. Comparison--}}
    {{--                            new ham melancholy son themselves.--}}
    {{--                        </p>--}}
    {{--                        <ul class="check-solid-list mt-20">--}}
    {{--                            <li>Organic food contains more vitamins</li>--}}
    {{--                            <li>Eat organic because supply meets demand</li>--}}
    {{--                            <li>Organic food is never irradiated</li>--}}
    {{--                        </ul>--}}
    {{--                    </div>--}}
    {{--                    <div class="col-xl-5 col-lg-12 pl-50 pl-md-15 pl-xs-15">--}}
    {{--                        <div class="top-product-item">--}}
    {{--                            <img src="assets/img/icon/1.svg" alt="Icon">--}}
    {{--                            <h5><a href="#">Natural Farming</a></h5>--}}
    {{--                            <p>--}}
    {{--                                Resolve parties but trying she shewing of moment.--}}
    {{--                            </p>--}}
    {{--                        </div>--}}
    {{--                        <div class="top-product-item">--}}
    {{--                            <img src="assets/img/icon/2.svg" alt="Icon">--}}
    {{--                            <h5><a href="#">Quality Products</a></h5>--}}
    {{--                            <p>--}}
    {{--                                Always parties but trying she shewing of moment.--}}
    {{--                            </p>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}


    {{--</div>--}}


    {{--    ----------------------------------------------------------- container -----------------------------------------------------------  --}}

    <!-- End About -->

    <!-- Start Services
    ============================================= -->
    <div class="services-style-one-area default-padding bg-gray half-bg-theme">
        <div class="shape-extra">
            <img src="assets/img/shape/18.png" alt="Image Not Found">
        </div>
        <div class="container">
            <div class="heading-left">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="left-info">
                            <h5 class="sub-title">Our initiative aligns with</h5>
                            <h2 class="title">The Sustainable Development Goals</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 offset-lg-1">
                        <div class="right-info">
                            <p>
                                Agrigate has achieved success by providing sound advice to various stakeholders involved
                                in
                                agriculture, livestock, poultry, and fisheries sectors through education technology
                                based on
                                its priorities to provide them with methods of increasing agricultural productivity.
                                During
                                this period about 4500 farmers and farmers received service advice from the aggregator
                                and
                                expected yield increase.
                            </p>
                            {{--                        <a class="btn btn-theme btn-md radius animation" href="services.html">Discover More</a>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="services-style-one-carousel swiper">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">

                        @foreach($goals as $goal)

                            <!-- Single Item -->
                                <div class="swiper-slide">
                                    <div class="services-style-one">
                                        <div class="thumb">
                                            <img src="{{ asset('storage/'.$goal->image) }}" alt="Image Not Found">
                                        </div>
                                        <h5><a href="services-details.html">{{ $goal->title_en }}</a></h5>
                                        <p>
                                            {{--                                        Continue indulged speaking technical out horrible domestic position. Seeing--}}
                                            {{--                                        rather--}}
                                            {{--                                        you.--}}

                                            {!! \Illuminate\Support\Str::limit($goal->content_en,110,'...')  !!}
                                        </p>

                                    </div>
                                </div>
                                <!-- End Single Item -->

                            @endforeach

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Services -->

    <!-- Start Product
    ============================================= -->
    <div class="product-list-area default-padding-bottom bottom-less bg-dark text-center text-light">
        <div class="shape-bottom-right">
            <img src="assets/img/shape/21.png" alt="Image Not Found">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-10 offset-xl-1 mb-50 mb-xs-30">
                    <h2 class="mask-text" style="background-image: url(assets/img/banner/3.jpg);">Healthy life with
                        fresh
                        products</h2>

                    <br>
                    <p style="text-align: justify">Agrigate produces and sources high-quality seed from small &
                        large-scale
                        farmers. Agrigate approach a
                        premium quality supply of Maize, Soybeans, Seasame, Mustard, Lentil, Mungbean and Groundnuts. We
                        supply seeds to a wide range of customers and organizations. You can find our seeds at leading
                        agrodealers across Bangladesh. We are sourcing quality output through direct purchase.</p>
                </div>
                <div class="product-list-box">


                @foreach($crops as $crop)


                    <!-- Single Item -->
                        <div class="product-list-item">
                            <a href="javascript:void(0)">
                                <img src="{{ asset('storage/'.$crop->image) }}" alt="Icon">
                                <h5>{!! $crop->title_en !!}</h5>
                            </a>
                        </div>
                        <!-- End Single Item -->

                    @endforeach


                </div>
            </div>
        </div>
    </div>
    <!-- End Product Area -->


    {{-- --------------------------------------------------------------------------------- Our Impact --------------------------------------------------------------------------------- --}}

    <!-- Start Services
============================================= -->
    <div class="services-style-one-area default-padding bg-gray half-bg-theme">
        <div class="shape-extra">
            <img src="assets/img/shape/18.png" alt="Image Not Found">
        </div>
        <div class="container">
            <div class="heading-left">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="left-info">
                            <h5 class="sub-title">Agrigate</h5>
                            <h2 class="title">Our Impact</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 offset-lg-1">
                        <div class="right-info">
                            <p>
                                Agrigate procured 1500 MT of maize and 500 MT of soybeans directly from the field last
                                season, enabling farmers to pay their produce to their registered bank accounts within
                                three
                                working days. As a result, the company has been able to pay about Tk 4.5 crore directly
                                into
                                the farmers' accounts. The initiative has enabled farmers and their business partners to
                                grow their businesses sustainably while feeling financially secure.
                            </p>
                            {{--                        <a class="btn btn-theme btn-md radius animation" href="services.html">Discover More</a>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="services-style-one-carousel swiper">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">


                            <!-- Single Item -->
                            <div class="swiper-slide">
                                <div class="services-style-one">
                                    <div class="thumb">
                                        <img src="{{ asset('images/facts-1.png') }}" alt="Image Not Found">
                                    </div>
                                    <h5><a href="services-details.html">Farmers Onboarded</a></h5>
                                    <p>
                                        12,000
                                    </p>

                                </div>
                            </div>
                            <!-- End Single Item -->


                            <!-- Single Item -->
                            <div class="swiper-slide">
                                <div class="services-style-one">
                                    <div class="thumb">
                                        <img src="{{ asset('images/facts-2.png') }}" alt="Image Not Found">
                                    </div>
                                    <h5><a href="services-details.html">Livestock Farmers Onboarded</a></h5>
                                    <p>
                                        300
                                    </p>

                                </div>
                            </div>
                            <!-- End Single Item -->


                            <!-- Single Item -->
                            <div class="swiper-slide">
                                <div class="services-style-one">
                                    <div class="thumb">
                                        <img src="{{ asset('images/facts-3.png') }}" alt="Image Not Found">
                                    </div>
                                    <h5><a href="services-details.html">Input Sellers Onboarded</a></h5>
                                    <p>
                                        100
                                    </p>

                                </div>
                            </div>
                            <!-- End Single Item -->


                            <!-- Single Item -->
                            <div class="swiper-slide">
                                <div class="services-style-one">
                                    <div class="thumb">
                                        <img src="{{ asset('images/facts-4.png') }}" alt="Image Not Found">
                                    </div>
                                    <h5><a href="services-details.html">Advisory service provided</a></h5>
                                    <p>
                                        4500
                                    </p>

                                </div>
                            </div>
                            <!-- End Single Item -->


                            <!-- Single Item -->
                            <div class="swiper-slide">
                                <div class="services-style-one">
                                    <div class="thumb">
                                        <img src="{{ asset('images/facts-5.png') }}" alt="Image Not Found">
                                    </div>
                                    <h5><a href="services-details.html">Advisory service provided</a></h5>
                                    <p>
                                        4500
                                    </p>

                                </div>
                            </div>
                            <!-- End Single Item -->


                            <!-- Single Item -->
                            <div class="swiper-slide">
                                <div class="services-style-one">
                                    <div class="thumb">
                                        <img src="{{ asset('images/facts-6.png') }}" alt="Image Not Found">
                                    </div>
                                    <h5><a href="services-details.html">Grain Moisture Test</a></h5>
                                    <p>
                                        1000
                                    </p>

                                </div>
                            </div>
                            <!-- End Single Item -->


                            <!-- Single Item -->
                            <div class="swiper-slide">
                                <div class="services-style-one">
                                    <div class="thumb">
                                        <img src="{{ asset('images/facts-7.png') }}" alt="Image Not Found">
                                    </div>
                                    <h5><a href="services-details.html">Corn Sourcing</a></h5>
                                    <p>
                                        2000
                                    </p>

                                </div>
                            </div>
                            <!-- End Single Item -->


                            <!-- Single Item -->
                            <div class="swiper-slide">
                                <div class="services-style-one">
                                    <div class="thumb">
                                        <img src="{{ asset('images/facts-8.png') }}" alt="Image Not Found">
                                    </div>
                                    <h5><a href="services-details.html">Soyabean Sourcing</a></h5>
                                    <p>
                                        1000 MT
                                    </p>

                                </div>
                            </div>
                            <!-- End Single Item -->


                            <!-- Single Item -->
                            <div class="swiper-slide">
                                <div class="services-style-one">
                                    <div class="thumb">
                                        <img src="{{ asset('images/facts-9.png') }}" alt="Image Not Found">
                                    </div>
                                    <h5><a href="services-details.html">Bank Account Opening</a></h5>
                                    <p>
                                        1400
                                    </p>

                                </div>
                            </div>
                            <!-- End Single Item -->


                            <!-- Single Item -->
                            <div class="swiper-slide">
                                <div class="services-style-one">
                                    <div class="thumb">
                                        <img src="{{ asset('images/facts-10.png') }}" alt="Image Not Found">
                                    </div>
                                    <h5><a href="services-details.html">Paid Directly into Farmer's Account</a></h5>
                                    <p>
                                        4.5 Cr. BDT
                                    </p>

                                </div>
                            </div>
                            <!-- End Single Item -->


                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Services -->


    {{-- --------------------------------------------------------------------------------- Our Impact --------------------------------------------------------------------------------- --}}



    <!-- Start Why Choose Us
============================================= -->
    <div class="choose-us-style-one-area overflow-hidden default-padding">
        <div class="container">
            <div class="row align-center">
                <div class="col-lg-6 choose-us-style-one">
                    <div class="thumb">
                        <img
                            src="https://www.researchgate.net/publication/354492168/figure/fig5/AS:1066309089492994@1631239306961/Bangladeshi-farmer-Md-Khalilur-Rahman-with-a-fresh-harvest-of-Bt-brinjal-in-Hijulii-of.ppm"
                            alt="Image Not Found">
                        <div class="shape">
                            <img class="wow fadeInDown" src="assets/img/shape/22.png" alt="Image not found">
                        </div>
                        <div class="product-produce">
                            <div class="icon">
                                <i class="flaticon-farmer"></i>
                            </div>
                            {{--                        <div class="fun-fact">--}}
                            {{--                            <div class="counter">--}}
                            {{--                                <div class="timer" data-to="258" data-speed="2000">258</div>--}}
                            {{--                                <div class="operator">K</div>--}}
                            {{--                            </div>--}}
                            {{--                            <span class="medium">Agriculture, Organic Products</span>--}}
                            {{--                        </div>--}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 choose-us-style-one">
                    <h5 class="sub-title">Advisory & Consultation</h5>
                    <p class="title">Agrigate will assist in accessing all emergency services from the field to the
                        market
                        to address the identified problems of the country's agricultural sector through its
                        services.</p>
                    <div class="accordion accordion-regular mt-35" id="faqAccordion">

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Advisory Services
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                 data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <li>1. Production Technology</li>
                                    <li>2. Advisory Consultation</li>
                                    <li>3. Best Practices</li>
                                    <li>4. Weather Information</li>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Digital Market
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                 data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <li>1. Buy products</li>
                                    <li>2. Sell products</li>
                                    <li>3. Market Price Info</li>
                                    <li>4. Input Distribution</li>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThreeF" aria-expanded="false"
                                        aria-controls="collapseThreeF">
                                    IOT Services
                                </button>
                            </h2>
                            <div id="collapseThreeF" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                 data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <li>1. Soil Testing</li>

                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                    Financial Inclusion
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                 data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <li>1. Bank A/C Opening</li>
                                    <li>2. Agri Loan for Farmers</li>
                                    <li>3. Crop Insurance</li>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Why Choose us -->

    <!-- Start Testimonials
    ============================================= -->
    <div class="testimonials-area default-padding bg-gray" style="background-image: url(assets/img/shape/23.png);">
        <div class="container">
            <div class="row align-center">
                <div class="col-lg-5">
                    <div class="testimonial-info text-center">
                        <h4>Testimonial</h4>
                        <div class="thumb">
                            <img src="assets/img/f-1.jpg" alt="Image Not Found">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQe_i4NkKtAIkdOT97P5DAgPOVflbraaoBJhDxPekD2lWywBMGWgylX4KSmF6WlCJZlieg&usqp=CAU" alt="Image Not Found">
                            <img src="assets/img/f-2.jpg" alt="Image Not Found">
                            <img src="https://foodtank.com/wp-content/uploads/2013/06/indian_womanfarmer.jpg" alt="Image Not Found">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1">
                    <div class="testimonial-carousel testimonial-style-one swiper">

                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">

                        @foreach($testimonials as $testimonial)


                            <!-- Single item -->
                                <div class="swiper-slide">

                                    <div class="testimonial-style-two">

                                        <div class="item">
                                            <div class="content">
                                                <p>
                                                    {!!   \Illuminate\Support\Str::limit($testimonial->content_en,'900','...')  !!}
                                                </p>
                                            </div>
                                            <div class="provider">
                                                <div class="info">
                                                    {{--                                                <h4>{{ $testimonial->title_en }}</h4>--}}
                                                    <span>{{ $testimonial->title_en }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single item -->
                            @endforeach

                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Testimonials -->

    <!-- Start Gallery
    ============================================= -->
    {{--<div class="gallery-style-one-area default-padding-top">--}}
    {{--    <div class="container">--}}
    {{--        <div class="row">--}}
    {{--            <div class="col-lg-8 offset-lg-2">--}}
    {{--                <div class="site-heading text-center">--}}
    {{--                    <h5 class="sub-title">Awesome Gallery</h5>--}}
    {{--                    <h2 class="title">Gallery Of Our Products</h2>--}}
    {{--                    <div class="devider"></div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
    {{--    <div class="container container-stage">--}}
    {{--        <div class="row">--}}
    {{--            <div class="col-xl-12">--}}
    {{--                <div class="carousel-stage-right carousel-style-one swiper">--}}
    {{--                    <!-- Additional required wrapper -->--}}
    {{--                    <div class="swiper-wrapper">--}}
    {{--                        <!-- Single Item -->--}}
    {{--                        <div class="swiper-slide">--}}
    {{--                            <div class="gallery-style-one">--}}
    {{--                                <img src="assets/img/gallery/2.jpg" alt="Thumb">--}}
    {{--                                <div class="overlay">--}}
    {{--                                    <span>Fruit</span>--}}
    {{--                                    <h4><a href="project-details.html">Healthy Food</a></h4>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <!-- End Single Item -->--}}
    {{--                        <!-- Single Item -->--}}
    {{--                        <div class="swiper-slide">--}}
    {{--                            <div class="gallery-style-one">--}}
    {{--                                <img src="assets/img/gallery/7.jpg" alt="Thumb">--}}
    {{--                                <div class="overlay">--}}
    {{--                                    <span>Organic</span>--}}
    {{--                                    <h4><a href="project-details.html">Cow Milk</a></h4>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <!-- End Single Item -->--}}
    {{--                        <!-- Single Item -->--}}
    {{--                        <div class="swiper-slide">--}}
    {{--                            <div class="gallery-style-one">--}}
    {{--                                <img src="assets/img/gallery/3.jpg" alt="Thumb">--}}
    {{--                                <div class="overlay">--}}
    {{--                                    <span>Vegetables</span>--}}
    {{--                                    <h4><a href="project-details.html">Organic Vegetables</a></h4>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <!-- End Single Item -->--}}
    {{--                        <!-- Single Item -->--}}
    {{--                        <div class="swiper-slide">--}}
    {{--                            <div class="gallery-style-one">--}}
    {{--                                <img src="assets/img/gallery/5.jpg" alt="Thumb">--}}
    {{--                                <div class="overlay">--}}
    {{--                                    <span>Cereals</span>--}}
    {{--                                    <h4><a href="project-details.html">Fresh Mandrains</a></h4>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <!-- End Single Item -->--}}

    {{--                        <!-- Single Item -->--}}
    {{--                        <div class="swiper-slide">--}}
    {{--                            <div class="gallery-style-one">--}}
    {{--                                <img src="assets/img/gallery/10.jpg" alt="Thumb">--}}
    {{--                                <div class="overlay">--}}
    {{--                                    <span>Havest</span>--}}
    {{--                                    <h4><a href="project-details.html">Crispy Cucumber</a></h4>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <!-- End Single Item -->--}}
    {{--                    </div>--}}

    {{--                    <!-- Pagination -->--}}
    {{--                    <div class="swiper-pagination"></div>--}}

    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
    {{--</div>--}}
    <!-- End Gallery -->

    <!-- Start Fun Factor Area
    ============================================= -->
    {{--<div class="fun-facts-area default-padding">--}}
    {{--    <div class="shape-left">--}}
    {{--        <img src="assets/img/shape/27.png" alt="Image Not Found">--}}
    {{--    </div>--}}
    {{--    <div class="container">--}}
    {{--        <div class="item-inner">--}}
    {{--            <div class="shape-right">--}}
    {{--                <img src="assets/img/shape/26.png" alt="Image Not Found">--}}
    {{--            </div>--}}
    {{--            <div class="row">--}}
    {{--                <div class="col-lg-4 fun-fact-style-one">--}}
    {{--                    <div class="heading">--}}
    {{--                        <div class="sub-title">Achivements</div>--}}
    {{--                        <h2 class="title">Delivering value <br> since 1956</h2>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="col-lg-8 fun-fact-style-one text-end">--}}
    {{--                    <div class="row">--}}
    {{--                        <!-- Single item -->--}}
    {{--                        <div class="col-lg-4 col-md-4 item">--}}
    {{--                            <div class="fun-fact">--}}
    {{--                                <div class="counter">--}}
    {{--                                    <div class="timer" data-to="250" data-speed="2000">250</div>--}}
    {{--                                    <div class="operator">M</div>--}}
    {{--                                </div>--}}
    {{--                                <span class="medium">Growth Tonns of Harvest</span>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <!-- End Single item -->--}}

    {{--                        <!-- Single item -->--}}
    {{--                        <div class="col-lg-4 col-md-4 item">--}}
    {{--                            <div class="fun-fact">--}}
    {{--                                <div class="counter">--}}
    {{--                                    <div class="timer" data-to="98" data-speed="2000">98</div>--}}
    {{--                                    <div class="operator">%</div>--}}
    {{--                                </div>--}}
    {{--                                <span class="medium">Happy clients</span>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <!-- End Single item -->--}}

    {{--                        <!-- Single item -->--}}
    {{--                        <div class="col-lg-4 col-md-4 item">--}}
    {{--                            <div class="fun-fact">--}}
    {{--                                <div class="counter">--}}
    {{--                                    <div class="timer" data-to="688" data-speed="2000">688</div>--}}
    {{--                                    <div class="operator">K</div>--}}
    {{--                                </div>--}}
    {{--                                <span class="medium">Sales of our Products</span>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <!-- End Single item -->--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
    {{--</div>--}}
    <!-- End Fun Factor Area -->

    <!-- Start Contact Us
    ============================================= -->
    <div class="contact-area bg-gray default-padding" style="background-image: url(assets/img/shape/28.png);">
        <div class="container">
            <div class="row align-center">

                <div class="col-tact-stye-one col-lg-7">
                    <div class="contact-form-style-one mb-md-50">
                        <h5 class="sub-title">Have Questions?</h5>
                        <h2 class="heading">Send us a Massage</h2>
                        <form action="assets/mail/contact.php" method="POST" class="contact-form contact-form">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input class="form-control" id="name" name="name" placeholder="Name"
                                               type="text">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" id="email" name="email" placeholder="Email*"
                                               type="email">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" id="phone" name="phone" placeholder="Phone"
                                               type="text">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group comments">
                                    <textarea class="form-control" id="comments" name="comments"
                                              placeholder="Tell Us About Project *"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <button type="submit" name="submit" id="submit">
                                        <i class="fa fa-paper-plane"></i> Get in Touch
                                    </button>
                                </div>
                            </div>
                            <!-- Alert Message -->
                            <div class="col-lg-12 alert-notification">
                                <div id="message" class="alert-msg"></div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-tact-stye-one col-lg-5 pl-60 pl-md-15 pl-xs-15">
                    <div class="contact-style-one-info">
                        <h2>
                            Contact
                            <span>
                                Information
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 150"
                                     preserveAspectRatio="none"><path
                                        d="M14.4,111.6c0,0,202.9-33.7,471.2,0c0,0-194-8.9-397.3,24.7c0,0,141.9-5.9,309.2,0"
                                        style="animation-play-state: running;"></path></svg>
                            </span>
                        </h2>
                        <p>

                        </p>
                        <ul>
                            <li class="wow fadeInUp">
                                <div class="icon">
                                    <i class="fas fa-phone-alt"></i>
                                </div>
                                <div class="content">
                                    <h5 class="title">Hotline</h5>
                                    <a href="">+88 013-24-741615</a>
                                </div>
                            </li>
                            <li class="wow fadeInUp" data-wow-delay="300ms">
                                <div class="icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="info">
                                    <h5 class="title">Our Location</h5>
                                    <p>
                                        House 78, Level B3, Road 11, Banani,
                                        <br> Dhaka-1212, Bangladesh
                                    </p>
                                </div>
                            </li>
                            <li class="wow fadeInUp" data-wow-delay="500ms">
                                <div class="icon">
                                    <i class="fas fa-envelope-open-text"></i>
                                </div>
                                <div class="info">
                                    <h5 class="title">Official Email</h5>
                                    <a href="mailto:info@agrul.com.com">info@agrigate.asia</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End Contact -->

    <!-- Start Blog Area
    ============================================= -->
    <div class="blog-area home-blog blog-grid default-padding bottom-less">
        <div class="container">


            <div class="row">
                @foreach($news as $n)
                    <div class="col-lg-6 col-md-12 mb-30">
                        <div class="blog-style-one">
                            <div class="thumb">
                                <a href="{{ route('single-project',$n->id) }}"><img
                                        src="{{ asset('storage/'.$n->image) }}"
                                        alt="Image Not Found"></a>
                                <div class="date"><strong>{{ $n->created_at->format('d') }}</strong> <span>{{ $n->created_at->format('F') }}, {{ $n->created_at->format('y') }}</span>
                                </div>
                            </div>
                            <div class="info">
                                <div class="meta">
                                    <ul>
                                        <li>
                                            <a href="#"><i class="fas fa-user-circle"></i> Agrigate Asia</a>
                                        </li>
                                        {{--                                    <li>--}}
                                        {{--                                        <a href="#"><i class="fas fa-comments"></i> 26 Comments</a>--}}
                                        {{--                                    </li>--}}
                                    </ul>
                                </div>
                                <h4 class="title">
                                    <a href="{{ route('single-project',$n->id) }}">{!! \Illuminate\Support\Str::limit($n->content_en,100,'...')  !!}</a>
                                </h4>
                            </div>
                        </div>
                    </div>

                @endforeach


                {{--                    @foreach($projects as $n)--}}
                {{--                        <div class="col-lg-6 col-md-12 mb-30">--}}
                {{--                            <div class="blog-style-one">--}}
                {{--                                <div class="thumb">--}}
                {{--                                    <a href="blog-single-with-sidebar.html"><img src="{{ asset('storage/'.$n->image) }}"--}}
                {{--                                                                                 alt="Image Not Found"></a>--}}
                {{--                                    <div class="date"><strong>{{ $n->created_at->format('d') }}</strong> <span>{{ $n->created_at->format('F') }}, {{ $n->created_at->format('y') }}</span>--}}
                {{--                                    </div>--}}
                {{--                                </div>--}}
                {{--                                <div class="info">--}}
                {{--                                    <div class="meta">--}}
                {{--                                        <ul>--}}
                {{--                                            <li>--}}
                {{--                                                <a href="#"><i class="fas fa-user-circle"></i> Agrigate Asia</a>--}}
                {{--                                            </li>--}}
                {{--                                            --}}{{--                                    <li>--}}
                {{--                                            --}}{{--                                        <a href="#"><i class="fas fa-comments"></i> 26 Comments</a>--}}
                {{--                                            --}}{{--                                    </li>--}}
                {{--                                        </ul>--}}
                {{--                                    </div>--}}
                {{--                                    <h4 class="title">--}}
                {{--                                        <a href="{{ route('single-project',$n->id) }}">{!! \Illuminate\Support\Str::limit($n->content_en,100,'...')  !!}</a>--}}
                {{--                                    </h4>--}}
                {{--                                </div>--}}
                {{--                            </div>--}}
                {{--                        </div>--}}

                {{--                    @endforeach--}}

            </div>


        </div>
    </div>
    <!-- End Blog Area -->


    {{--  ---------------------------------------- Our Business Partners ---------------------------------------- --}}

    <style>
        @keyframes scroll {
            0% {
                transform: translateX(0);
            }
            100% {
                transform: translateX(calc(-250px * 7));
            }
        }

        .slider {
            height: 100px;
            margin: auto;
            overflow: hidden;
            position: relative;
            width: auto;
        }

        .slider .slide-track {
            animation: scroll 40s linear infinite;
            display: flex;
            width: calc(250px * 14);
        }

        .slider .slide {
            height: 100px;
            width: 250px;
        }
    </style>

    <div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h5 class="sub-title">Agrigate</h5>
                        <h2 class="title">Our Business Parners</h2>
                        <div class="devider"></div>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="slider">
        <div class="slide-track">
            @foreach($buyers as $buyer)
                <div class="slide">
                    <img src="{{ asset('storage/'.$buyer->image) }}" height="100" width="200"
                         alt=""/>
                </div>
            @endforeach

                @foreach($buyers as $buyer)
                    <div class="slide">
                        <img src="{{ asset('storage/'.$buyer->image) }}" height="100" width="200"
                             alt=""/>
                    </div>
                @endforeach

                @foreach($buyers as $buyer)
                    <div class="slide">
                        <img src="{{ asset('storage/'.$buyer->image) }}" height="100" width="200"
                             alt=""/>
                    </div>
                @endforeach

                @foreach($buyers as $buyer)
                    <div class="slide">
                        <img src="{{ asset('storage/'.$buyer->image) }}" height="100" width="200"
                             alt=""/>
                    </div>
                @endforeach

                @foreach($buyers as $buyer)
                    <div class="slide">
                        <img src="{{ asset('storage/'.$buyer->image) }}" height="100" width="200"
                             alt=""/>
                    </div>
                @endforeach

                @foreach($buyers as $buyer)
                    <div class="slide">
                        <img src="{{ asset('storage/'.$buyer->image) }}" height="100" width="200"
                             alt=""/>
                    </div>
                @endforeach
        </div>
    </div>


    {{--  ---------------------------------------- Our Business Partners ---------------------------------------- --}}

    <br><br><br><br>

    <x-v2.footer></x-v2.footer>
    </body>
@endsection
