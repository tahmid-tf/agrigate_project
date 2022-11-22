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
                    <h1>Career</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="index.html"><i class="fas fa-home"></i> Home</a></li>
                            <li class="active">Career</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Gallery
    ============================================= -->
    <div class="gallery-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 gallery-content">
                    <div class="magnific-mix-gallery masonary">
                        <div id="portfolio-grid" class="gallery-items colums-2">
                        @foreach($careers as $project)
                            <!-- Single Item -->
                                <div class="pf-item">
                                    <div class="gallery-style-two">
                                        <img src="{{ asset('assets/img/banner/4.jpg') }}" alt="Thumb">
                                        <div class="overlay">
                                            {{--                                            <span>Fruit</span>--}}
                                            <h4>
                                                <a href="{{ route('single-project',$project->id) }}">{{ $project->title_en }}</a>
                                            </h4>
                                        </div>
                                        <a class="link" href="{{ route('single-project',$project->id) }}"><i
                                                class="fas fa-arrow-right"></i></a>
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
    <!-- End Gallery -->


    <x-v2.footer></x-v2.footer>

    <body/>


@endsection
