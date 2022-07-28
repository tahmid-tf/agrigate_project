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
        <p class="subpages-heading">Agrigate Center</p>
    </div>
    <div>
        <img src="{{ asset('images/agrigate-center-2.png') }}" class="img-fluid" style="width:100%;">
    </div>
</section>

<section>
    <div class="section-light-green-bg py-2">
        <div class="container">
            <div class="card solutions-card">
                <p class="solutions-card-text">
                    Agrigate is a social enterprise that works directly in the field of impoverished communities. We delight in seeing households impacted and lives change for the better. In this regard we are always open for partnership and collaboration for multi-facets of our model or parts that feed to it. Below are some of the avenues that we have partnered worked with other partners and opportunities to work with us.
                </p>
            </div>
        </div>
    </div>
</section>
<section class="section-light-green-bg py-4">
    <div class="section-dark-green-bg py-2 mb-4">
        <p class="subpages-heading">Services Provided by Agrigate Center</p>
    </div>
    <div>
        <img src="{{ asset('images/agri-services.png') }}" class="img-fluid d-block mx-auto" style="height:400px; width:400px;">
    </div>
</section>

<div class="section-light-green-bg py-4">
    <div class="section-dark-green-bg py-2 mb-4">
        <p class="subpages-heading">Programmes arranged by Agrigate Center</p>
    </div>
    <div>
        <div class="section-light-green-bg py-4">
            <div>
                <section class="section-light-green-bg py-4">
                    <div class="slider-section">
                        <div class="container-fluid">
                            <div id="owl-demo-2" class="owl-carousel">
                                <article class="thumbnail item mb-4">
                                    <div class="card program-card" style="width: 18rem;">
                                        <img class="card-img-top program-card-image" src="{{ asset('images/program-1.png') }}" alt="">
                                        <div class="card-body program-card-bottom section-dark-green-bg" style="">
                                            <h5 class="program-card-title">Farmer's Meeting</h5>

                                        </div>
                                    </div>
                                </article>


                                <article class="thumbnail item mb-4">
                                    <div class="card program-card" style="width: 18rem;">
                                        <img class="card-img-top program-card-image" src="{{ asset('images/program-2.png') }}" alt="">
                                        <div class="card-body program-card-bottom section-dark-green-bg" style="">
                                            <h5 class="program-card-title">Farmers’ Training Programs</h5>
                                        </div>
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
</section>

<section class="section-light-green-bg">
    <div class="section-dark-green-bg py-2">
        <p class="subpages-heading py-4">Want to get services or products from us?</p>
    </div>
    <div class="contact-bg-2">
        <x-user.contact-form.contact-light-component></x-user.contact-form.contact-light-component>
        <br><br>
    </div>
</section>
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
