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
                    <h1>Solutions</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="javascript:void(0)"><i class="fas fa-home"></i> Home</a></li>
                            <li class="active">Solutions</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->



    {{--   -------------------------------------------------------------- Solution for Entrepreneurs -------------------------------------------------------------- --}}

    <!-- Start Farmer
                    ============================================= -->
    <div class="farmer-area default-padding bottom-less bg-gray"
         style="background-image: url(assets/img/shape/36.png);">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h5 class="sub-title">Solution For Entrepreneurs</h5>
                        <h2 class="title">Our Partners</h2>
                        <div class="devider"></div>
                        <p style="text-align: justify">
                            Agrigate is a social enterprise that works directly in the field of impoverished
                            communities. We delight in seeing households impacted and lives change for the better. In
                            this regard we are always open for partnership and collaboration for multi-facets of our
                            model or parts that feed to it. Below are some of the avenues that we have partnered worked
                            with other partners and opportunities to work with us.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Farmer -->


    <!-- Start Why Choose Us
                        ============================================= -->
    <div class="choose-us-style-one-area overflow-hidden default-padding">
        <div class="container">
            <div class="row align-center">
                <div class="col-lg-6 choose-us-style-one">
                    <div class="thumb">
                        <img src="assets/img/content-3.png" alt="Image Not Found">
                        <div class="shape">
                            <img class="wow fadeInDown" src="assets/img/shape/22.png" alt="Image not found">
                        </div>
                        <div class="product-produce">
                            <div class="icon">
                                <i class="flaticon-farmer"></i>
                            </div>
                            {{--                            <div class="fun-fact">--}}
                            {{--                                <div class="counter">--}}
                            {{--                                    <div class="timer" data-to="258" data-speed="2000">258</div>--}}
                            {{--                                    <div class="operator">K</div>--}}
                            {{--                                </div>--}}
                            {{--                                <span class="medium">Agriculture, Organic Products</span>--}}
                            {{--                            </div>--}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 choose-us-style-one">
                    <h5 class="sub-title">Agrigate Asia</h5>
                    <h2 class="title">Our Partners</h2>
                    <div class="accordion accordion-regular mt-35" id="faqAccordion">


                        @foreach($partners as $processing)

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne{{$processing->id}}" aria-expanded="false"
                                            aria-controls="collapseOne{{$processing->id}}">
                                        {{ $processing->title_en }}
                                    </button>
                                </h2>
                                <div id="collapseOne{{$processing->id}}" class="accordion-collapse collapse"
                                     aria-labelledby="headingOne{{$processing->id}}" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p>
                                            {!! $processing->content_en !!}
                                        </p>
                                    </div>
                                </div>
                            </div>

                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Why Choose us -->


    {{--   -------------------------------------------------------------- Solution for Entrepreneurs -------------------------------------------------------------- --}}


    <x-v2.footer></x-v2.footer>

    <body/>
@endsection
