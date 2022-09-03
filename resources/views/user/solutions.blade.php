<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agrigate</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css" media="all" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.6/assets/owl.carousel.min.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.6/assets/owl.theme.default.min.css" />

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!-- -------------------- optimize image linkup --------------------------- -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/progressive-image.js/dist/progressive-image.css" />
    <script src="https://cdn.jsdelivr.net/npm/progressive-image.js/dist/progressive-image.js" async></script>

    <!-- -------------------- optimize image linkup --------------------------- -->


</head>

<body>
    <header>
        <x-user.navbar.navbar-component></x-user.navbar.navbar-component>

    </header>

    <section>
        {{-- <x-user.banner.banner-component></x-user.banner.banner-component> --}}
    </section>

    <section>
        <div class="section-dark-green-bg py-2">
            <p class="subpages-heading">Our Solution for Farmers</p>
        </div>
        <div>


            <!-- ----------------------------- optimized image ------------------------ -->

            <a href="{{ asset('storage/' . $banner->image) }}" class="progressive replace">
                <img src="{{ asset('storage/' . $banner->image) }}" class="preview img-fluid " style="width:100%;"
                    alt="No image" />
            </a>

            <!-- ----------------------------- optimized image ------------------------ -->

            {{-- <img src="{{ asset('storage/' . $banner->image) }}" class="img-fluid" style="width:100%;" alt="No image"> --}}
        </div>
    </section>

    <section>
        <div class="section-light-green-bg py-2">
            <div class="container">
                <div class="card solutions-card">
                    <p class="solutions-card-text">
                        {{ \App\User::language_change($banner->title_en, $banner->title_bn) ??
                            "Agrigate works with farmers to increase incomes. Whether they grow seeds
                                                                                                                                                                                                                                                                                                                                                                                                                for commodity. We work closely with communities to maximize impact and profitability. Agrigate
                                                                                                                                                                                                                                                                                                                                                                                                                Source is open to farmers interested in growing cereal, oil and pulses for trade and edible
                                                                                                                                                                                                                                                                                                                                                                                                                commodity. Farmers will be informed about the right doze of input as well as the best available crop
                                                                                                                                                                                                                                                                                                                                                                                                                consultation. It also provides the farmers with the flexibility to order input through our App and
                                                                                                                                                                                                                                                                                                                                                                                                                even sell their output directly to Agrigate through the app at Arot price. Farmers will get advisory
                                                                                                                                                                                                                                                                                                                                                                                                                services through messages and voice calls based on real-time information." }}
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="section-light-green-bg py-4">
        <div class="section-dark-green-bg py-2 mb-4">
            <p class="subpages-heading">Contract Farming</p>
        </div>
        <div class="container">
            <p class="contract-farming-text">Achieving the Agrigates’ Goals remains a challenge, and especially in
                villages.
                Farmers are often trapped in a vicious type of low-intensity farming, low yields, limited market access,
                and
                insufficient profits, all of which prevents beneficial investments. Contract farming is commonly seen as
                a
                suitable means of linking farmers to markets, improving household welfare, and promoting the
                modernization
                of the agricultural sector. </p>
            <p class="subpages-heading-2 mt-4 mb-4">Our Model is Designed to Help Farmers</p>
            <div class="row">
                <div class="col-lg-3 mb-4">
                    <div class="text-style-1">1. SELECT</div>
                    <div class="text-style-2">Guaranteed Sales Contract for Farmers</div>
                    <div class="mt-4 mb-4">
                        <img src="{{ asset('images/contract-1.png') }}" class="d-block mx-auto img-fluid"
                            style="height: 300px">
                    </div>
                    {{-- <div class="text-center"> --}}
                    {{-- <button class="image-footer"></button> --}}
                    {{-- </div> --}}
                </div>

                <div class="col-lg-3 mb-4">
                    <div class="text-style-1">2. TRAIN</div>
                    <div class="text-style-2">Knowledgeable Person to Person Trainers</div>
                    <div class="mt-4 mb-4">
                        <img src="{{ asset('images/contract-2.png') }}" class="d-block mx-auto img-fluid"
                            style="height: 300px">
                    </div>
                    {{-- <div class="text-center"> --}}
                    {{-- <button class="image-footer"></button> --}}
                    {{-- </div> --}}
                </div>

                <div class="col-lg-3 mb-4">
                    <div class="text-style-1">3. FINANCE</div>
                    <div class="text-style-2"> Custom Input Packages for Growers</div>
                    <div class="mt-4 mb-4">
                        <img src="{{ asset('images/contract-3.png') }}" class="d-block mx-auto img-fluid"
                            style="height: 300px">
                    </div>
                    {{-- <div class="text-center"> --}}
                    {{-- <button class="image-footer"></button> --}}
                    {{-- </div> --}}
                </div>

                <div class="col-lg-3 mb-4">
                    <div class="text-style-1">4. MARKET</div>
                    <div class="text-style-2"> High Value Market when Selling to Agrigate</div>
                    <div class="mt-4 mb-4">
                        <img src="{{ asset('images/contract-4.png') }}" class="d-block mx-auto img-fluid"
                            style="height: 300px">
                    </div>
                    {{-- <div class="text-center"> --}}
                    {{-- <button class="image-footer"></button> --}}
                    {{-- </div> --}}
                </div>

            </div>
        </div>
    </section>

    <section class="section-light-green-bg py-4">
        <div class="section-dark-green-bg py-2 mb-4">
            <p class="subpages-heading">Advisory & Consultation</p>
            <div class="container">
                <p class="advisory-text">Agrigate will assist in accessing all emergency services from the field to the
                    market to address the identified problems of the country's agricultural sector through its services.
                    Agrigate is a multifaceted service provider on the platform that allows multiple stakeholders to
                    easily
                    access our services.</p>
            </div>
        </div>

        <section>
            <div style="display: flex; justify-content: center;">
                {{-- <img src="{{ asset('images/service_delivery_channels_info.png') }}" alt="" class="img-fluid"> --}}
                <img src="{{ asset('images/delivery_channels_info_2.png') }}" alt="" class="img-fluid"
                    style="width: 800px;">
            </div>
        </section>

        <br>


        {{-- ------------------------------------------------------------------------------------------------------- Flower animation part --------------------------------------------------------------------------------------------------------------- --}}


        <section class="flower_animation_part">

            <section class="pointer-1">
                <div class="containers">
                    <div>
                        <div id="slidebox">
                            <img src="{{ asset('images/agrigate.png') }}"
                                class="fade-in slide agrigate-image rotate-image d-block mx-auto img-fluid">
                            <div class="agrigate-text bottom-left" id="iot" style="cursor: pointer">IOT Services
                            </div>
                            <div class="agrigate-text top" id="advisory" style="cursor: pointer">Advisory Services
                            </div>
                            <div class="agrigate-text bottom" id="financial" style="cursor: pointer">Financial
                                Inclusion</a>
                            </div>
                            <div class="agrigate-text bottom-right" id="digital" style="cursor: pointer">Digital
                                Market
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            {{-- ------------------------- IoT Services ----------------------------------- --}}


            <section class="solution-1" style="display: none">
                <div class="containers" id="service">
                    <div class="row ml-0 mr-0">
                        <div class="col-lg-4 col-md-6 " id="service">
                            <img src="{{ asset('images/agrigate-half.png') }}"
                                class="agrigate-image-2 d-block mr-auto img-fluid">

                            <div class="agrigate-text bottom-right-2" style="font-size:18px">IOT Services</div>
                        </div>
                        <div class="col-lg-8 col-md-6  col-agrigate">
                            <div class="agrigate-styles">
                                <p class="agrigate-text" style="cursor: pointer"><a
                                        onmouseover="showThis('.agrigate-text-soil')"
                                        onmouseout="hideThis('.agrigate-text-soil')">Soil Testing</a></p>
                                <div class="agrigate-text-soil" style="display: none">
                                    <img src="{{ asset('images/agrigate.png') }}" class="img-fluid"
                                        style="width:30px;height:30px;">
                                    <img src="{{ asset('images/agrigate.png') }}" class="img-fluid"
                                        style="width:30px;height:30px;">
                                </div>
                            </div>
                        </div>
                    </div>

                    <button class="footer-button px-2 py-2" onclick="back()">Go Back</button>
                </div>
            </section>

            {{-- ------------------------- IoT Services ----------------------------------- --}}



            {{-- ------------------------- Advisory ----------------------------------- --}}

            <section class="solution-2" style="display: none">
                <div class="containers" id="service">
                    <div class="row ml-0 mr-0">
                        <div class="col-lg-4 col-md-6 " id="service">
                            <img src="{{ asset('images/agrigate-half.png') }}"
                                class="agrigate-image-2 d-block mr-auto img-fluid">

                            <div class="agrigate-text bottom-right-2" style="font-size:18px">Advisory Services</div>
                        </div>
                        <div class="col-lg-8 col-md-6  col-agrigate">
                            <div class="agrigate-styles">
                                <p class="agrigate-text" style="cursor: pointer"><a
                                        onmouseover="showThis('.agrigate-text-services')"
                                        onmouseout="hideThis('.agrigate-text-services')">Production
                                        Technology</a>
                                </p>

                                <div class="agrigate-text-services" style="display: none">
                                    <img src="{{ asset('images/icon_1.png') }}" class="img-fluid"
                                        style="width:30px;height:30px;">
                                </div>

                                <p class="agrigate-text" style="cursor: pointer"><a
                                        onmouseover="showThis('.agrigate-text-Consultation')"
                                        onmouseout="hideThis('.agrigate-text-Consultation')">Advisory
                                        Consultation</a>
                                </p>

                                <div class="agrigate-text-Consultation" style="display: none">
                                    <img src="{{ asset('images/icon_1.png') }}" class="img-fluid"
                                        style="width:30px;height:30px;">
                                    <img src="{{ asset('images/icon_2.png') }}" class="img-fluid"
                                        style="width:30px;height:30px;">
                                    <img src="{{ asset('images/icon_3.png') }}" class="img-fluid"
                                        style="width:30px;height:30px;">
                                </div>


                                <p class="agrigate-text" style="cursor: pointer"><a
                                        onmouseover="showThis('.agrigate-text-Best-Practices')"
                                        onmouseout="hideThis('.agrigate-text-Best-Practices')">Best Practices</a></p>

                                <div class="agrigate-text-Best-Practices" style="display: none">
                                    <img src="{{ asset('images/icon_1.png') }}" class="img-fluid"
                                        style="width:30px;height:30px;">
                                    <img src="{{ asset('images/icon_2.png') }}" class="img-fluid"
                                        style="width:30px;height:30px;">
                                </div>


                                <p class="agrigate-text" style="cursor: pointer"><a
                                        onmouseover="showThis('.agrigate-text-Weather')"
                                        onmouseout="hideThis('.agrigate-text-Weather')">Weather
                                        Information</a></p>

                                <div class="agrigate-text-Weather" style="display: none">
                                    <img src="{{ asset('images/icon_1.png') }}" class="img-fluid"
                                        style="width:30px;height:30px;">
                                </div>

                            </div>
                        </div>
                    </div>
                    <button class="footer-button px-2 py-2" onclick="back()">Go Back</button>
                </div>

            </section>

            {{-- ------------------------- Advisory ----------------------------------- --}}


            {{-- ------------------------- Financial Inclusion ----------------------------------- --}}


            <section class="solution-3" style="display: none">

                <div class="containers" id="service">
                    <div class="row ml-0 mr-0">
                        <div class="col-lg-4 col-md-6 " id="service">
                            <img src="{{ asset('images/agrigate-half.png') }}"
                                class="agrigate-image-2 d-block mr-auto img-fluid">

                            <div class="agrigate-text bottom-right-2" style="font-size:18px">Financial Inclusion</div>
                        </div>
                        <div class="col-lg-8 col-md-6  col-agrigate">
                            <div class="agrigate-styles">
                                <p class="agrigate-text" style="cursor: pointer"><a
                                        onmouseover="showThis('.agrigate-text-Opening')"
                                        onmouseout="hideThis('.agrigate-text-Opening')">Bank A/C Opening</a>
                                </p>

                                <div class="agrigate-text-Opening" style="display: none">
                                    <img src="{{ asset('images/icon_1.png') }}" class="img-fluid"
                                        style="width:30px;height:30px;">
                                    <img src="{{ asset('images/icon_2.png') }}" class="img-fluid"
                                        style="width:30px;height:30px;">

                                </div>

                                <p class="agrigate-text" style="cursor: pointer"><a
                                        onmouseover="showThis('.agrigate-text-Farmers')"
                                        onmouseout="hideThis('.agrigate-text-Farmers')">Agri Loan for
                                        Farmers</a>
                                </p>

                                <div class="agrigate-text-Farmers" style="display: none">
                                    <img src="{{ asset('images/icon_1.png') }}" class="img-fluid"
                                        style="width:30px;height:30px;">
                                </div>

                                <p class="agrigate-text" style="cursor: pointer"><a
                                        onmouseover="showThis('.agrigate-text-Insurance')"
                                        onmouseout="hideThis('.agrigate-text-Insurance')">Crop Insurance</a>
                                </p>

                                <div class="agrigate-text-Insurance" style="display: none">
                                    <img src="{{ asset('images/icon_1.png') }}" class="img-fluid"
                                        style="width:30px;height:30px;">
                                    <img src="{{ asset('images/icon_2.png') }}" class="img-fluid"
                                        style="width:30px;height:30px;">
                                    <img src="{{ asset('images/icon_3.png') }}" class="img-fluid"
                                        style="width:30px;height:30px;">
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="footer-button px-2 py-2" onclick="back()">Go Back</button>
                </div>
            </section>

            {{-- ------------------------- Financial Inclusion ----------------------------------- --}}

            {{-- ------------------------- Digital Market ----------------------------------- --}}


            <section class="solution-4" style="display: none">

                <div class="containers" id="service">
                    <div class="row ml-0 mr-0">
                        <div class="col-lg-4 col-md-6 " id="service">
                            <img src="{{ asset('images/agrigate-half.png') }}"
                                class="agrigate-image-2 d-block mr-auto img-fluid">

                            <div class="agrigate-text bottom-right-2" style="font-size:18px">Digital Market</div>
                        </div>
                        <div class="col-lg-8 col-md-6  col-agrigate">
                            <div class="agrigate-styles">
                                <p class="agrigate-text" style="cursor: pointer"><a
                                        onmouseover="showThis('.agrigate-text-Buy')"
                                        onmouseout="hideThis('.agrigate-text-Buy')">Buy
                                        products</a></p>

                                <div class="agrigate-text-Buy" style="display: none">
                                    <img src="{{ asset('images/icon_1.png') }}" class="img-fluid"
                                        style="width:30px;height:30px;">
                                </div>

                                <p class="agrigate-text" style="cursor: pointer"><a
                                        onmouseover="showThis('.agrigate-text-products')"
                                        onmouseout="hideThis('.agrigate-text-products')">Sell products</a></p>

                                <div class="agrigate-text-products" style="display: none">
                                    <img src="{{ asset('images/icon_1.png') }}" class="img-fluid"
                                        style="width:30px;height:30px;">
                                </div>

                                <p class="agrigate-text" style="cursor: pointer"><a
                                        onmouseover="showThis('.agrigate-text-Info')"
                                        onmouseout="hideThis('.agrigate-text-Info')">Market Price Info</a></p>

                                <div class="agrigate-text-Info" style="display: none">
                                    <img src="{{ asset('images/icon_1.png') }}" class="img-fluid"
                                        style="width:30px;height:30px;">
                                    <img src="{{ asset('images/icon_2.png') }}" class="img-fluid"
                                        style="width:30px;height:30px;">
                                </div>


                                <p class="agrigate-text" style="cursor: pointer"><a
                                        onmouseover="showThis('.agrigate-text-Distribution')"
                                        onmouseout="hideThis('.agrigate-text-Distribution')">Input Distribution</a></p>

                                <div class="agrigate-text-Distribution" style="display: none">
                                    <img src="{{ asset('images/icon_1.png') }}" class="img-fluid"
                                        style="width:30px;height:30px;">
                                    <img src="{{ asset('images/icon_2.png') }}" class="img-fluid"
                                        style="width:30px;height:30px;">
                                </div>


                            </div>
                        </div>
                    </div>
                    <button class="footer-button px-2 py-2" onclick="back()">Go Back</button>
                </div>
            </section>

            {{-- ------------------------- Digital Market ----------------------------------- --}}



            {{-- ---------------- script -------------------- --}}

            <script>
                $("#iot").click(function() {

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

                $("#advisory").click(function() {

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


                $("#financial").click(function() {

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

                $("#digital").click(function() {

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


        </section>

        {{-- ------------------------------------------------------------------------------------------------------- Flower animation part --------------------------------------------------------------------------------------------------------------- --}}


    </section>
    <section class="section-light-green-bg py-4"></section>
    <section class="section-dark-green-bg">
        <div class="section-dark-green-bg py-2 mb-4">
            <p class="subpages-heading py-4">Want to do Contract Farming with us?</p>
        </div>
        <div class="contact-bg">
            <x-user.contact-form.contact-component></x-user.contact-form.contact-component>
            <br><br>
        </div>
    </section>
    <style>
        .contact-bg {
            background-image: url("{{ asset('images/contact-bg-1.png') }}");
            background-color: #255302;

            object-fit: cover;
            background-repeat: no-repeat;
        }
    </style>
    <x-user.footer.footer-component></x-user.footer.footer-component>

    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/3.3.0/jquery-migrate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="{{ asset('js/image-slider.js') }}"></script>

</body>

</html>
