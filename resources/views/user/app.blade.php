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
        <p class="subpages-heading">Agrigate App</p>
    </div>
</section>


<section class="section-light-green-bg py-4">
    <div class="section-light-green-bg py-2 mb-4">
        <p class="subpages-heading-2">Features</p>
    </div>
    <div class="section-dark-green-bg">

    </div>
</section>


<div style="background-color: #fff;">
    <div>
        <div class="row ml-0 mr-0">
            <div class="col-lg-5">
                <div class="mt-5 mb-5">
                    <a href="#"><img src="{{ asset('images/app-store.png') }}" style="width:280px;"
                                    class="d-block mx-auto img-fluid mt-3"></a>
                    <a href="#"><img src="{{ asset('images/play-store.png') }}" style="width:280px;"
                                     class="d-block mx-auto img-fluid mb-2"></a>
                </div>
            </div>
            <div class="col-lg-7">
                <div>
                    <div class="py-4">
                        <div>
                            <section class="py-4">
                                <div class="slider-section">
                                    <div class="container-fluid">
                                        <div id="owl-demo-5" class="owl-carousel">
                                            @foreach($sp_partners as $partner)
                                            <article class="thumbnail item mb-4">
                                                <div>
                                                    <img class="service-card-image"
                                                         src="{{ asset('storage/'.$partner->image) }}" alt="">
                                                </div>
                                            </article>
                                            @endforeach

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
