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
<body class="section-light-green-bg">
<header>
    <x-user.navbar.navbar-component></x-user.navbar.navbar-component>

</header>

<section>
    <x-user.banner.banner-component></x-user.banner.banner-component>
</section>

<section>
    <div class="section-dark-green-bg py-2">
        <p class="subpages-heading">Source From Us</p>
    </div>
    <div>
        <img src="{{ asset('images/source-from-us.png') }}" class="img-fluid" style="width:100%;">
    </div>
</section>

<section>
    <div class="section-light-green-bg py-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card solutions-card">
                        <p class="solutions-card-text">
                            Agrigate produces and sources high-quality seed from small & large-scale farmers. Agrigate approach a premium quality supply of Maize, Soybeans, Seasame, Mustard, Lentil, Mungbean and Groundnuts.
                            We supply seeds to a wide range of customers and organizations. You can find our seeds at leading agrodealers across Bangladesh. We are sourcing quality output through direct purchase.                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="{{ asset('images/source-2.png') }}" class="source-image img-fluid d-block mx-auto">
                </div>
            </div>

        </div>
    </div>
</section>
<section class="section-light-green-bg py-4">
    <div class="section-dark-green-bg py-2 mb-4">
        <p class="subpages-heading">Crops</p>
    </div>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 mb-4">
                    <h3 class="crops-text">Maize</h3>
                    <img src="{{ asset('images/maize.png') }}" class="crops-image img-fluid d-block mx-auto">
                </div>
                <div class="col-lg-3 mb-4">
                    <h3 class="crops-text">Soybean</h3>
                    <img src="{{ asset('images/soybean.png') }}" class="crops-image img-fluid d-block mx-auto">
                </div>
                <div class="col-lg-3 mb-4">
                    <h3 class="crops-text">Ground Nuts</h3>
                    <img src="{{ asset('images/nuts.png') }}" class="crops-image img-fluid d-block mx-auto">
                </div>
                <div class="col-lg-3 mb-4">
                    <h3 class="crops-text">Sesame</h3>
                    <img src="{{ asset('images/sesame.png') }}" class="crops-image img-fluid d-block mx-auto">
                </div>
                <div class="col-lg-3 mb-4">
                    <h3 class="crops-text">Mungbeans</h3>
                    <img src="{{ asset('images/mungbeans.png') }}" class="crops-image img-fluid d-block mx-auto">
                </div>
                <div class="col-lg-3 mb-4">
                    <h3 class="crops-text">Mustard</h3>
                    <img src="{{ asset('images/mustard.png') }}" class="crops-image img-fluid d-block mx-auto">
                </div>
                <div class="col-lg-3 mb-4">
                    <h3 class="crops-text">Black Cumin</h3>
                    <img src="{{ asset('images/cumin.png') }}" class="crops-image img-fluid d-block mx-auto">
                </div>
            </div>
        </div>
    </div>
</section>

<div class="section-light-green-bg py-4">
    <div class="section-dark-green-bg py-2 mb-4">
        <p class="subpages-heading">Processing and Trade</p>
    </div>
    <div>
        <div class="section-light-green-bg py-4">
            <div class="container">
                <p class="solutions-card-text-2">Agrigate works with agro-processors, outgrower networks and traders looking for specific quantities and consistent supplies of premium outputs. We listen to our client’s requirements and work with breeders and research institutes to develop the seed to meet the right crop characteristics. Through networks of smallholder farmers, we can grow and process what you need.</p>

            </div>
        </div>

    </div>
</div>
<section class="section-dark-green-bg">
    <div>
        <div class="row ml-0 mr-0">
            <div class="col-lg-6 mb-4">
                <img src="{{ asset('images/work-with-farmer.png') }}" class="img-fluid">
            </div>
            <div class="col-lg-6 mt-5">
                <p class="subpages-heading">Working With Farmers</p>
                <p class="solutions-card-text">Agrigate works with selected farmers community to grow their crops and creating a market for farmers. Agrigate works with other institutional buyers that want hassle free sourcing for output. Agrigate can be contracted at the start of the season with specific seed requirement to be produced. We use our network of growers to bulk up the output needed.</p>
            </div>
        </div>
        <div class="row ml-0 mr-0">
            <div class="col-lg-6 mt-5">
                <p class="subpages-heading">Working with Buyers</p>
                <p class="solutions-card-text">Direct Purchase: Agrigate produces a number of crop varieties, if you are interested in any of the varieties here to be sold both quality declared output, we are more than happy to supply. Please refer to the products page to see.</p>
            </div>
            <div class="col-lg-6 mb-4">
                <img src="{{ asset('images/buyers.png') }}" class="img-fluid">
            </div>
        </div>

    </div>
</section>

<section class="section-light-green-bg">
    <div class="section-dark-green-bg py-1 mt-5">
        <p class="subpages-heading py-3">Want to be our Partner?</p>
    </div>
    <div class="contact-bg-2">
        <x-user.contact-form.contact-light-component></x-user.contact-form.contact-light-component>
        <br><br>
    </div>
</section>

<div style="background-color: #fff;">
    <div class="section-dark-green-bg py-2 mb-4">
        <p class="subpages-heading">Our Buyers</p>
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
                                        <img class="finance-card-image" src="{{ asset('images/astha.png') }}" alt="">
                                    </div>
                                </article>
                                <article class="thumbnail item mb-4">
                                    <div>
                                        <img class="finance-card-image" src="{{ asset('images/eco.png') }}" alt="">
                                    </div>
                                </article>
                                <article class="thumbnail item mb-4">
                                    <div>
                                        <img class="finance-card-image" src="{{ asset('images/rrp.png') }}" alt="">
                                    </div>
                                </article>
                                <article class="thumbnail item mb-4">
                                    <div>
                                        <img class="finance-card-image" src="{{ asset('images/buyer.png') }}" alt="">
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

<style>
    .contact-bg-2{
        background-image: url("{{ asset('images/cover-bg-2.png') }}");
        background-color:  #E2EFD9 ;
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
