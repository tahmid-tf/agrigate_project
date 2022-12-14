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
                    <h1>App</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="javascript:void(0)"><i class="fas fa-home"></i> Home</a></li>
                            <li class="active">App</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->



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
                            <h5 class="sub-title">APP</h5>
                            <h2 class="title">Agrigate APP</h2>
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
                            {{--                        <a class="btn btn-theme btn-md radius animation" href="services.html">Discover More</a> --}}
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

                            @foreach ($app_slider as $slider)
                                <!-- Single Item -->
                                <div class="swiper-slide">
                                    <div class="services-style-one">
                                        <div class="thumb">
                                            <img src="{{ asset('storage/' . $slider->image) }}" alt="Image Not Found">
                                        </div>
                                        <h5><a href="services-details.html">{{ $slider->title_en }}</a></h5>
                                        <p>
                                            {{--                                        Continue indulged speaking technical out horrible domestic position. Seeing --}}
                                            {{--                                        rather --}}
                                            {{--                                        you. --}}

                                            {!! $slider->content_en !!}
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


    <br><br><br><br><br>


    <x-v2.footer></x-v2.footer>

    <body/>
@endsection
