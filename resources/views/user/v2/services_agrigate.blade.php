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
                    <h1>Agrigate Center</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="javascript:void(0)"><i class="fas fa-home"></i> Home</a></li>
                            <li class="active">Agrigate Center</li>
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
                        <h5 class="sub-title">Agrigate Services</h5>
                        <br>
                        {{-- <h2 class="title">Services</h2> --}}
                        <div class="devider"></div>
                        <p style="text-align: justify">
                            Agrigate is a social enterprise that works directly in the field of impoverished
                            communities. We delight in seeing households impacted and lives change for the better. In
                            this regard we are always open for partnership and collaboration for multi-facets of our
                            model or parts that feed to it. Below are some of the avenues that we have partnered worked
                            with other partners and opportunities to work with us.
                        </p>
                    </div>


                    <div style="display: flex; justify-content: center">
                        <img src="{{ asset('assets/img/agri-services.png') }}" alt="" style="width: 60%;">
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- End Farmer -->


    <br><br><br><br><br>


    <x-v2.footer></x-v2.footer>

    <body/>
@endsection
