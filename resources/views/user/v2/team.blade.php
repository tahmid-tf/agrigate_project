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
         style="background-image: url({{ asset('assets/img/bar/team_bar.png') }});">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1>Team Members</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                            <li class="active">Team</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Farmer
    ============================================= -->
    <div class="farmer-area default-padding bottom-less">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="row">

                    @foreach($directors as $director)

                        <!-- Single Item -->
                            <div class="col-lg-4 farmer-stye-one">
                                <div class="farmer-style-one-item">
                                    <div class="thumb">
                                        <img src="{{ asset('storage/'.$director->image) }}" alt="Image Not Found">
                                        <div class="social">
                                            <i class="fas fa-share-alt"></i>
                                            <ul>
                                                <li class="facebook">
                                                    <a href="{{ $director->fb }}">
                                                        <i class="fab fa-facebook-f"></i>
                                                    </a>
                                                </li>
                                                <li class="twitter">
                                                    <a href="{{ $director->g }}">
                                                        <i class="fab fa-google"></i>
                                                    </a>
                                                </li>
                                                <li class="linkedin">
                                                    <a href="{{ $director->ln }}">
                                                        <i class="fab fa-linkedin-in"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="info">
                                        <span>{{ $director->position_en }}</span>
                                        <h4><a href="#">{{ $director->title_en }}</a></h4>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->

                    @endforeach


                    @foreach($advisors as $director)

                        <!-- Single Item -->
                            <div class="col-lg-4 farmer-stye-one">
                                <div class="farmer-style-one-item">
                                    <div class="thumb">
                                        <img src="{{ asset('storage/'.$director->image) }}" alt="Image Not Found">
                                        <div class="social">
                                            <i class="fas fa-share-alt"></i>
                                            <ul>
                                                <li class="facebook">
                                                    <a href="{{ $director->fb }}">
                                                        <i class="fab fa-facebook-f"></i>
                                                    </a>
                                                </li>
                                                <li class="twitter">
                                                    <a href="{{ $director->g }}">
                                                        <i class="fab fa-google"></i>
                                                    </a>
                                                </li>
                                                <li class="linkedin">
                                                    <a href="{{ $director->ln }}">
                                                        <i class="fab fa-linkedin-in"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="info">
                                        <span>{{ $director->position_en }}</span>
                                        <h4><a href="#">{{ $director->title_en }}</a></h4>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->

                    @endforeach


                    @foreach($teams as $director)

                        <!-- Single Item -->
                            <div class="col-lg-4 farmer-stye-one">
                                <div class="farmer-style-one-item">
                                    <div class="thumb">
                                        <img src="{{ asset('storage/'.$director->image) }}" alt="Image Not Found">
                                        <div class="social">
                                            <i class="fas fa-share-alt"></i>
                                            <ul>
                                                <li class="facebook">
                                                    <a href="{{ $director->fb }}">
                                                        <i class="fab fa-facebook-f"></i>
                                                    </a>
                                                </li>
                                                <li class="twitter">
                                                    <a href="{{ $director->g }}">
                                                        <i class="fab fa-google"></i>
                                                    </a>
                                                </li>
                                                <li class="linkedin">
                                                    <a href="{{ $director->ln }}">
                                                        <i class="fab fa-linkedin-in"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="info">
                                        <span>{{ $director->position_en }}</span>
                                        <h4><a href="#">{{ $director->title_en }}</a></h4>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->

                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Farmer -->

    <x-v2.footer></x-v2.footer>

    </body>
@endsection
