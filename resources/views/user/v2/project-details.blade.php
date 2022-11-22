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
         style="background-image: url({{ asset('assets/img/banner/4.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1>Project Details</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="index.html"><i class="fas fa-home"></i> Home</a></li>
                            <li class="active">Project Details</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Star Project Details Area
    ============================================= -->
    <div class="project-details-area default-padding">
        <div class="container">
            <div class="project-details-items">
                <div class="project-thumb">
                    <img src="{{ asset('storage/'.$project_details->image) }}" alt="Thumb">
                </div>
                <div class="project-info text-light">
                    <div class="content">
                        <ul class="project-basic-info">
                            <li>
                                Posted By <span>Admin</span>
                            </li>
{{--                            <li>--}}
{{--                                Project Type <span>Website Growth</span>--}}
{{--                            </li>--}}
                            <li>
                                Date <span>{{ $project_details->created_at->format('d-F-Y') }}</span>
                            </li>
{{--                            <li>--}}
{{--                                Address <span>New York United state</span>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a class="btn btn-md circle btn-theme animation" href="project-details.html">Live--}}
{{--                                    Preview</a>--}}
{{--                            </li>--}}
                        </ul>
                    </div>
                </div>
                <div class="top-info">
                    <div class="row">
                        <div class="col-xl-12 left-info">
                            <h2>{{ $project_details->title_en }}</h2>
                            <p>
                                {!! $project_details->content_en !!}
                            </p>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End Project Details Area -->


    <x-v2.footer></x-v2.footer>

    </body>
@endsection

