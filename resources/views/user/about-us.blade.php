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


</head>
<body>
<header>
    <x-user.navbar.navbar-component></x-user.navbar.navbar-component>

</header>

<section>
    <x-user.banner.banner-component></x-user.banner.banner-component>
</section>

<section>
    <div class="section-dark-green-bg py-2">
        <p class="subpages-heading">About Us</p>
    </div>
    <div>
        <img src="{{ asset('images/about-us.png') }}" class="img-fluid" style="width:100%;">
    </div>
</section>

<section>
    <div class="section-light-green-bg py-2">
        <div class="container">
            <div class="card solutions-card">
                <p class="solutions-card-text">
                    Founded in 2021, Agrigate is a for-profit social enterprise that believes in farmer-centric impact.
                    We work with Bangladeshi’s most rural small-scale farmers to supply the region with high-quality
                    commodities. We do this with the aim to move the farmers from poverty and into the middle-class.
                    Through human-centered design, we have managed to co-create an easy model that answers the farmers
                    most pressing questions. We are building digital technologies to revolutionize supply chain and
                    production efficiency in the farm sector. We are passionate to improve the lives of the farmers and
                    Entrepreneurs. Our vision is bold and most efficient to develop supply chain platform and increase
                    income of the farmers, retailers, traders. </p>
            </div>
        </div>
    </div>
</section>
<section class="section-light-green-bg py-4">
    <img src="{{ asset('images/about-us-2.png') }}" class="img-fluid" style="width:100%;">
</section>

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
                            <p class="purpose-texts-style">To provide solutions against the problems of farmers through the provision of modern agricultural technology and service.</p>
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
