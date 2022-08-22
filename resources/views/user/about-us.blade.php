<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agrigate</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css" media="all"/>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.6/assets/owl.carousel.min.css"/>
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.6/assets/owl.theme.default.min.css"/>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>


</head>
<body>
<header>
    <x-user.navbar.navbar-component></x-user.navbar.navbar-component>

</header>

<section>
    {{--    <x-user.banner.banner-component></x-user.banner.banner-component>--}}
</section>

<section>
    <div class="section-dark-green-bg py-2">
        <p class="subpages-heading">About Us</p>
    </div>
    <div>
        <img src="{{ asset('storage/'.$banner->image) }}" class="img-fluid" style="width:100%;" alt="No image">

    </div>
</section>

<section>
    <div class="section-light-green-bg py-2">
        <div class="container">
            <div class="card solutions-card">
                <p class="solutions-card-text">{{ \App\User::language_change($banner->title_en,$banner->title_bn) }}</p>
            </div>
        </div>
    </div>
</section>

{{--<section class="section-light-green-bg py-4">--}}
{{--    <div>--}}
{{--        <img src="{{ asset('images/about-us-2.png') }}" class="img-fluid"--}}
{{--             style="width:60%; margin: auto; display: block">--}}
{{--    </div>--}}
{{--</section>--}}


{{-- ------------------------------------------------------------------------------------------------------- Flower animation part --------------------------------------------------------------------------------------------------------------- --}}


<style>
    .modify-col-agrigate {
        margin-top: 100px;
    }
</style>

<section class="flower_animation_part" style="background-color: white">
    <br>

    <section class="pointer-1">
        <div class="containers">
            <div>
                <div id="slidebox">
                    <img src="{{ asset('images/agrigate.png') }}"
                         class="fade-in slide agrigate-image rotate-image d-block mx-auto img-fluid">
                    <div class="agrigate-text bottom-left" id="iot" style="cursor: pointer; white-space: pre">Services
                    </div>
                    <div class="agrigate-text top" id="advisory" style="cursor: pointer">Market Segment</div>
                    <div class="agrigate-text bottom" id="financial" style="cursor: pointer">Market Actors</a>
                    </div>
                    <div class="agrigate-text bottom-right" id="digital" style="cursor: pointer">SD Channels
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ------------------------- Services ----------------------------------- --}}


    <section class="solution-1" style="display: none">
        <div class="containers" id="service">
            <div class="row ml-0 mr-0">
                <div class="col-lg-4 col-md-6 " id="service">
                    <img src="{{ asset('images/agrigate-half.png') }}"
                         class="agrigate-image-2 d-block mr-auto img-fluid">

                    <div class="agrigate-text bottom-right-2" style="font-size:18px">Services</div>
                </div>
                <div class="col-lg-8 col-md-6  modify-col-agrigate">
                    <div class="agrigate-styles">
                        <img src="{{ asset('images/services_flower.jpg') }}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
            <br>
            <button class="footer-button px-2 py-2" onclick="back()">Go Back</button>
        </div>
    </section>

    {{-- ------------------------- Services ----------------------------------- --}}



    {{-- ------------------------- Market Segment ----------------------------------- --}}

    <section class="solution-2" style="display: none">
        <div class="containers" id="service">
            <div class="row ml-0 mr-0">
                <div class="col-lg-4 col-md-6 " id="service">
                    <img src="{{ asset('images/agrigate-half.png') }}"
                         class="agrigate-image-2 d-block mr-auto img-fluid">

                    <div class="agrigate-text bottom-right-2" style="font-size:18px">Market Segment</div>
                </div>
                <div class="col-lg-8 col-md-6  modify-col-agrigate">
                    <div class="agrigate-styles">
                        <img src="{{ asset('images/market_segment.jpg') }}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
            <br>
            <button class="footer-button px-2 py-2" onclick="back()">Go Back</button>
        </div>

    </section>

    {{-- ------------------------- Market Segment ----------------------------------- --}}


    {{-- ------------------------- Market Actors ----------------------------------- --}}


    <section class="solution-3" style="display: none">

        <div class="containers" id="service">
            <div class="row ml-0 mr-0">
                <div class="col-lg-4 col-md-6 " id="service">
                    <img src="{{ asset('images/agrigate-half.png') }}"
                         class="agrigate-image-2 d-block mr-auto img-fluid">

                    <div class="agrigate-text bottom-right-2" style="font-size:18px">Market Actors</div>
                </div>
                <div class="col-lg-8 col-md-6  modify-col-agrigate">
                    <div class="agrigate-styles">
                        <img src="{{ asset('images/market_actors.png') }}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
            <br>
            <button class="footer-button px-2 py-2" onclick="back()">Go Back</button>
        </div>
    </section>

    {{-- ------------------------- Market Actors ----------------------------------- --}}

    {{-- ------------------------- SD Channels ----------------------------------- --}}


    <section class="solution-4" style="display: none">

        <div class="containers" id="service">
            <div class="row ml-0 mr-0">
                <div class="col-lg-4 col-md-6 " id="service">
                    <img src="{{ asset('images/agrigate-half.png') }}"
                         class="agrigate-image-2 d-block mr-auto img-fluid">

                    <div class="agrigate-text bottom-right-2" style="font-size:18px">SD Channels</div>
                </div>
                <div class="col-lg-8 col-md-6  modify-col-agrigate">
                    <div class="agrigate-styles">
                        <img src="{{ asset('images/sd_flower.jpg') }}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
            <br>
            <button class="footer-button px-2 py-2" onclick="back()">Go Back</button>
        </div>
    </section>

    {{-- ------------------------- SD Channels ----------------------------------- --}}



    {{-- ---------------- script -------------------- --}}

    <script>
        $("#iot").click(function () {

            $("#iot").css("display", "none");
            $("#advisory").css("display", "none");
            $("#financial").css("display", "none");
            $("#digital").css("display", "none");

            $(".pointer-1").animate({
                'margin-right': '30%',
                'opacity': '0',
            }, 500).fadeOut(1);
            $(".solution-1").fadeIn(4500);
        });

        $("#advisory").click(function () {

            $("#iot").css("display", "none");
            $("#advisory").css("display", "none");
            $("#financial").css("display", "none");
            $("#digital").css("display", "none");

            $(".pointer-1").animate({
                'margin-right': '30%',
                'opacity': '0'
            }, 500).fadeOut(1);
            $(".solution-2").fadeIn(4500);
        });


        $("#financial").click(function () {

            $("#iot").css("display", "none");
            $("#advisory").css("display", "none");
            $("#financial").css("display", "none");
            $("#digital").css("display", "none");

            $(".pointer-1").animate({
                'margin-right': '30%',
                'opacity': '0'
            }, 500).fadeOut(1);
            $(".solution-3").fadeIn(4500);
        });

        $("#digital").click(function () {

            $("#iot").css("display", "none");
            $("#advisory").css("display", "none");
            $("#financial").css("display", "none");
            $("#digital").css("display", "none");

            $(".pointer-1").animate({
                'margin-right': '30%',
                'opacity': '0'
            }, 500).fadeOut(1);
            $(".solution-4").fadeIn(4500);
        });

        function back() {

            $("#iot").css("display", "inline");
            $("#advisory").css("display", "inline");
            $("#financial").css("display", "inline");
            $("#digital").css("display", "inline");

            $(".pointer-1").animate({
                'margin-right': '0px',
                'opacity': '1'
            }).fadeIn(1000);
            $(".solution-1").css("display", "none");
            $(".solution-2").css("display", "none");
            $(".solution-3").css("display", "none");
            $(".solution-4").css("display", "none");
        }


        // ------------------------- Hover in and out ----------------------------


        function showThis(variable) {
            $(variable).fadeIn();
        }

        function hideThis(variable) {
            $(variable).fadeOut();
        }


        // ------------------------- Hover in and out ----------------------------
    </script>

    {{-- ---------------- script -------------------- --}}

    <br>

</section>

{{-- ------------------------------------------------------------------------------------------------------- Flower animation part --------------------------------------------------------------------------------------------------------------- --}}

<section class="section-dark-green-bg">
    <div>
        <div class="d-lg-none d-md-block d-sm-block section-dark-green-bg py-1 mb-4">
            <p class="subpages-heading">Our Purpose</p>
        </div>
        <div class="row mr-0 ml-0">
            <div class="col-lg-6 d-none d-lg-block d-sm-none d-md-none" style="height:400px">
                <p class="text-center subpages-heading" style="margin-top: 200px; margin-bottom: 200px">Our Purpose</p>
            </div>
            <div class="col-lg-6" style="background: #becf63">
                <p class="solutions-card-text-2 mt-4 mb-4">To build strong networks through supply chain development for
                    sustainable development of farmers, input seller, local buyers and institutional buyers through
                    Agrigate Platform. Improving the value chain of agricultural products by providing media of economic
                    development through technology-based services to rural people and local stakeholders.</p>
                <div>
                    <div class="d-flex purpose-texts">
                        <button class="purpose-points"><h4 class="purpose-bullet-point">1</h4></button>
                        <div class="container-fluid">
                            <p class="purpose-texts-style">To make our country self-sufficient in food by providing
                                improved agricultural services
                                to the farmers.</p>
                        </div>
                    </div>

                    <div class="d-flex purpose-texts">
                        <button class="purpose-points"><h4 class="purpose-bullet-point">2</h4></button>
                        <div class="container-fluid">
                            <p class="purpose-texts-style">To develop the market by involving multiple stakeholders in
                                market segments of crops, cattle, poultry, and fisheries.</p>
                        </div>
                    </div>

                    <div class="d-flex purpose-texts">
                        <button class="purpose-points"><h4 class="purpose-bullet-point">3</h4></button>
                        <div class="container-fluid">
                            <p class="purpose-texts-style">To provide solutions against the problems of farmers through
                                the provision of modern agricultural technology and service.</p>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>

<div style="background-color: #fff;">
    <div class="section-dark-green-bg py-2 mb-4">
        <p class="subpages-heading">Our Partners</p>
    </div>
    <div>
        <div class="py-4">
            <div>
                <section class="py-4">
                    <div class="slider-section">
                        <div class="container-fluid">
                            <div id="owl-demo-5" class="owl-carousel">
                                <article class="thumbnail item mb-4">
                                    <div>
                                        <img class="finance-card-image" src="{{ asset('images/bank.png') }}" alt="">
                                    </div>
                                </article>
                                <article class="thumbnail item mb-4">
                                    <div>
                                        <img class="finance-card-image" src="{{ asset('images/ucb.png') }}" alt="">
                                    </div>
                                </article>
                                <article class="thumbnail item mb-4">
                                    <div>
                                        <img class="finance-card-image" src="{{ asset('images/green.jpg') }}" alt="">
                                    </div>
                                </article>
                                <article class="thumbnail item mb-4">
                                    <div>
                                        <img class="finance-card-image" src="{{ asset('images/ucb.png') }}" alt="">
                                    </div>
                                </article>

                            </div>
                            <!-- #owl-demo-2 -->
                        </div>
                        <!-- .container -->
                    </div>
                </section>
            </div>
        </div>

    </div>
</div>

<x-user.footer.footer-component></x-user.footer.footer-component>

<script src="{{ asset('js/app.js') }}" defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/3.3.0/jquery-migrate.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="{{ asset('js/image-slider.js') }}"></script>
</body>
</html>
