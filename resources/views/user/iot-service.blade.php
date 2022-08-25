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


    <!-- -------------------- optimize image linkup --------------------------- -->

    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/progressive-image.js/dist/progressive-image.css"
    />
    <script
        src="https://cdn.jsdelivr.net/npm/progressive-image.js/dist/progressive-image.js"
        async
    ></script>

    <!-- -------------------- optimize image linkup --------------------------- -->

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
        <p class="subpages-heading">Our Solution for Farmers</p>
    </div>
    <div>
        <img src="{{ asset('images/green-red.png') }}" class="img-fluid" style="width:100%;">
    </div>
</section>

<section>
    <div class="section-light-green-bg py-2">
        <div class="container">
            <div class="card solutions-card">
                <p class="solutions-card-text">Agrigate works with farmers to increase incomes. Whether they grow seeds
                    for commodity. We work closely with communities to maximize impact and profitability. Agrigate
                    Source is open to farmers interested in growing cereal, oil and pulses for trade and edible
                    commodity. Farmers will be informed about the right doze of input as well as the best available crop
                    consultation. It also provides the farmers with the flexibility to order input through our App and
                    even sell their output directly to Agrigate through the app at Arot price. Farmers will get advisory
                    services through messages and voice calls based on real-time information.</p>
            </div>
        </div>
    </div>
</section>
<section class="section-light-green-bg py-4">
    <div class="section-dark-green-bg py-2 mb-4">
        <p class="subpages-heading">Contract Farming</p>
    </div>
    <div class="container">
        <p class="contract-farming-text">Achieving the Agrigates’ Goals remains a challenge, and especially in villages.
            Farmers are often trapped in a vicious type of low-intensity farming, low yields, limited market access, and
            insufficient profits, all of which prevents beneficial investments. Contract farming is commonly seen as a
            suitable means of linking farmers to markets, improving household welfare, and promoting the modernization
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
                <div class="text-center">
                    <button class="image-footer"></button>
                </div>
            </div>

            <div class="col-lg-3 mb-4">
                <div class="text-style-1">2. TRAIN</div>
                <div class="text-style-2">Knowledgeable Person to Person Trainers</div>
                <div class="mt-4 mb-4">
                    <img src="{{ asset('images/contract-2.png') }}" class="d-block mx-auto img-fluid"
                         style="height: 300px">
                </div>
                <div class="text-center">
                    <button class="image-footer"></button>
                </div>
            </div>

            <div class="col-lg-3 mb-4">
                <div class="text-style-1">3. FINANCE</div>
                <div class="text-style-2"> Custom Input Packages for Growers</div>
                <div class="mt-4 mb-4">
                    <img src="{{ asset('images/contract-3.png') }}" class="d-block mx-auto img-fluid"
                         style="height: 300px">
                </div>
                <div class="text-center">
                    <button class="image-footer"></button>
                </div>
            </div>

            <div class="col-lg-3 mb-4">
                <div class="text-style-1">4. MARKET</div>
                <div class="text-style-2"> High Value Market when Selling to Agrigate</div>
                <div class="mt-4 mb-4">
                    <img src="{{ asset('images/contract-4.png') }}" class="d-block mx-auto img-fluid"
                         style="height: 300px">
                </div>
                <div class="text-center">
                    <button class="image-footer"></button>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="section-light-green-bg py-4">
    <div class="section-dark-green-bg py-2 mb-4">
        <p class="subpages-heading">Advisory & Consultation</p>
        <div class="container">
            <p class="advisory-text">(Agrigate will assist in accessing all emergency services from the field to the
                market to address the identified problems of the country's agricultural sector through its services.
                Agrigate is a multifaceted service provider on the platform that allows multiple stakeholders to easily
                access our services.)</p>
        </div>
    </div>
    <div class="containers" id="service">
        <div class="row ml-0 mr-0">
            <div class="col-lg-4 col-md-6 " id="service">
                <img src="{{ asset('images/agrigate-half.png') }}" class="agrigate-image-2 d-block mr-auto img-fluid">

                <div class="agrigate-text bottom-right-2" style="font-size:18px">IOT Services</div>
            </div>
            <div class="col-lg-8 col-md-6  col-agrigate">
                <div class="agrigate-styles">
                    <p class="agrigate-text"><a href="{{ route('delivery-channel-9') }}">Soil Testing</a></p>

                </div>
            </div>
        </div>
    </div>


    {{--    <div class="container d-flex justify-content-end">--}}
    {{--        <div style="font-weight: 700;">Delivery Channels</div>--}}
    {{--    </div>--}}
    {{--    <div class="section-dark-green-bg">--}}
    {{--        <div class="container">--}}
    {{--            <div class="row py-2">--}}
    {{--                <div class="col delivery-channels-text">SERVICES</div>--}}
    {{--                <div class="col delivery-channels-text text-center">APP</div>--}}
    {{--                <div class="col delivery-channels-text text-center">WEB</div>--}}
    {{--                <div class="col delivery-channels-text text-center">AGRIGATE CENTER</div>--}}
    {{--                <div class="col delivery-channels-text text-center">CALL CENTER</div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
    {{--    <div class="section-light-green-bg">--}}
    {{--        <div class="container">--}}
    {{--            <div class="row py-2">--}}
    {{--                <div class="col delivery-channels-text-2">Digital Market</div>--}}

    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
    {{--    <div class="section-dark-green-bg">--}}
    {{--        <div class="container">--}}
    {{--            <div class="row py-2">--}}
    {{--                <div class="col delivery-channels-text-3">--}}
    {{--                    Buy Products--}}
    {{--                    <hr>--}}
    {{--                    Sell Products--}}
    {{--                    <hr>--}}
    {{--                    Market Price Info--}}
    {{--                    <hr>--}}
    {{--                    Input Distribution--}}
    {{--                    <hr>--}}
    {{--                </div>--}}
    {{--                <div class="col delivery-channels-text">--}}
    {{--                    <div class="tick-style">✓</div>--}}
    {{--                    <hr class="hr-style">--}}
    {{--                    <div class="tick-style">✓</div>--}}
    {{--                    <hr>--}}
    {{--                    <div class="tick-style">✓</div>--}}
    {{--                    <hr>--}}
    {{--                    <div class="tick-style">✓</div>--}}
    {{--                    <hr>--}}
    {{--                </div>--}}
    {{--                <div class="col delivery-channels-text">--}}
    {{--                    <div class="tick-style"><br></div>--}}
    {{--                    <hr>--}}
    {{--                    <div class="tick-style"><br></div>--}}
    {{--                    <hr>--}}
    {{--                    <div class="tick-style">✓</div>--}}
    {{--                    <hr>--}}
    {{--                    <div class="tick-style"><br></div>--}}
    {{--                    <hr>--}}
    {{--                </div>--}}
    {{--                <div class="col delivery-channels-text">--}}
    {{--                    <div class="tick-style"><br></div>--}}
    {{--                    <hr>--}}
    {{--                    <div class="tick-style"><br></div>--}}
    {{--                    <hr>--}}
    {{--                    <div class="tick-style"><br></div>--}}
    {{--                    <hr>--}}
    {{--                    <div class="tick-style">✓</div>--}}
    {{--                    <hr>--}}
    {{--                </div>--}}
    {{--                <div class="col delivery-channels-text">--}}
    {{--                    <div class="tick-style"><br></div>--}}
    {{--                    <hr>--}}
    {{--                    <div class="tick-style"><br></div>--}}
    {{--                    <hr>--}}
    {{--                    <div class="tick-style"><br></div>--}}
    {{--                    <hr>--}}
    {{--                    <div class="tick-style"><br></div>--}}
    {{--                    <hr>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
    {{--    <div class="section-light-green-bg">--}}
    {{--        <div class="container">--}}
    {{--            <div class="row py-2">--}}
    {{--                <div class="col delivery-channels-text-2">Advisory Services</div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
    {{--    <div class="section-dark-green-bg">--}}
    {{--        <div class="container">--}}
    {{--            <div class="row py-2">--}}
    {{--                <div class="col delivery-channels-text-3">--}}
    {{--                    Production Technology--}}
    {{--                    <hr>--}}
    {{--                    Advisory Consultation--}}
    {{--                    <hr>--}}
    {{--                    Best Practices--}}
    {{--                    <hr>--}}
    {{--                    Weather Information--}}
    {{--                    <hr>--}}
    {{--                </div>--}}
    {{--                <div class="col delivery-channels-text">--}}
    {{--                    <div class="tick-style">✓</div>--}}
    {{--                    <hr class="hr-style">--}}
    {{--                    <div class="tick-style">✓</div>--}}
    {{--                    <hr>--}}
    {{--                    <div class="tick-style">✓</div>--}}
    {{--                    <hr>--}}
    {{--                    <div class="tick-style">✓</div>--}}
    {{--                    <hr>--}}
    {{--                </div>--}}
    {{--                <div class="col delivery-channels-text">--}}
    {{--                    <div class="tick-style"><br></div>--}}
    {{--                    <hr>--}}
    {{--                    <div class="tick-style"><br></div>--}}
    {{--                    <hr>--}}
    {{--                    <div class="tick-style">✓</div>--}}
    {{--                    <hr>--}}
    {{--                    <div class="tick-style"><br></div>--}}
    {{--                    <hr>--}}
    {{--                </div>--}}
    {{--                <div class="col delivery-channels-text">--}}
    {{--                    <div class="tick-style"><br></div>--}}
    {{--                    <hr>--}}
    {{--                    <div class="tick-style">✓</div>--}}
    {{--                    <hr>--}}
    {{--                    <div class="tick-style"><br></div>--}}
    {{--                    <hr>--}}
    {{--                    <div class="tick-style"><br></div>--}}
    {{--                    <hr>--}}
    {{--                </div>--}}
    {{--                <div class="col delivery-channels-text">--}}
    {{--                    <div class="tick-style"><br></div>--}}
    {{--                    <hr>--}}
    {{--                    <div class="tick-style">✓</div>--}}
    {{--                    <hr>--}}
    {{--                    <div class="tick-style"><br></div>--}}
    {{--                    <hr>--}}
    {{--                    <div class="tick-style"><br></div>--}}
    {{--                    <hr>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}

    {{--    <div class="section-light-green-bg">--}}
    {{--        <div class="container">--}}
    {{--            <div class="row py-2">--}}
    {{--                <div class="col delivery-channels-text-2">IOT Based Services</div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
    {{--    <div class="section-dark-green-bg">--}}
    {{--        <div class="container">--}}
    {{--            <div class="row py-2">--}}
    {{--                <div class="col delivery-channels-text-3">--}}
    {{--                    Soil Testing--}}
    {{--                    <hr>--}}
    {{--                </div>--}}
    {{--                <div class="col delivery-channels-text">--}}
    {{--                    <div class="tick-style">✓</div>--}}
    {{--                    <hr class="hr-style">--}}

    {{--                </div>--}}
    {{--                <div class="col delivery-channels-text">--}}
    {{--                    <div class="tick-style"><br></div>--}}
    {{--                    <hr>--}}

    {{--                </div>--}}
    {{--                <div class="col delivery-channels-text">--}}
    {{--                    <div class="tick-style">✓</div>--}}
    {{--                    <hr>--}}

    {{--                </div>--}}
    {{--                <div class="col delivery-channels-text">--}}
    {{--                    <div class="tick-style"><br></div>--}}
    {{--                    <hr>--}}

    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}

    {{--    <div class="section-light-green-bg">--}}
    {{--        <div class="container">--}}
    {{--            <div class="row py-2">--}}
    {{--                <div class="col delivery-channels-text-2">Financial Inclusion</div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
    {{--    <div class="section-dark-green-bg">--}}
    {{--        <div class="container">--}}
    {{--            <div class="row py-2">--}}
    {{--                <div class="col delivery-channels-text-3">--}}
    {{--                    Bank A/C Opening--}}
    {{--                    <hr>--}}
    {{--                   Agri Loan for Farmers--}}
    {{--                    <hr>--}}
    {{--                    Crop Insurance--}}
    {{--                    <hr>--}}

    {{--                </div>--}}
    {{--                <div class="col delivery-channels-text">--}}
    {{--                    <div class="tick-style">✓</div>--}}
    {{--                    <hr class="hr-style">--}}
    {{--                    <div class="tick-style">✓</div>--}}
    {{--                    <hr>--}}
    {{--                    <div class="tick-style">✓</div>--}}
    {{--                    <hr>--}}

    {{--                </div>--}}
    {{--                <div class="col delivery-channels-text">--}}
    {{--                    <div class="tick-style">✓</div>--}}
    {{--                    <hr>--}}
    {{--                    <div class="tick-style"><br></div>--}}
    {{--                    <hr>--}}
    {{--                    <div class="tick-style"><br></div>--}}
    {{--                    <hr>--}}

    {{--                </div>--}}
    {{--                <div class="col delivery-channels-text">--}}
    {{--                    <div class="tick-style"><br></div>--}}
    {{--                    <hr>--}}
    {{--                    <div class="tick-style"><br></div>--}}
    {{--                    <hr>--}}
    {{--                    <div class="tick-style"><br></div>--}}
    {{--                    <hr>--}}

    {{--                </div>--}}
    {{--                <div class="col delivery-channels-text">--}}
    {{--                    <div class="tick-style"><br></div>--}}
    {{--                    <hr>--}}
    {{--                    <div class="tick-style"><br></div>--}}
    {{--                    <hr>--}}
    {{--                    <div class="tick-style"><br></div>--}}
    {{--                    <hr>--}}

    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
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
    .contact-bg{
        background-image: url("{{ asset('images/contact-bg-1.png') }}");
        background-color:  #255302 ;

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
