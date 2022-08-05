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
        <p class="subpages-heading">News</p>
    </div>

</section>

<section>
    <div class="section-light-green-bg py-2">
        <div class="container mt-5">
            <h5 class="subtext-style">UCB signs deal with Agrigate Network</h5>
            <h6>12 August, 2022 </h6>
            <div class="mt-3 mb-3">
                <img src="{{ asset('images/news-1.png') }}" class="img-fluid">
            </div>
            <div>
                <p class="solutions-card-text-2">
                    For a farmer to produce, farmers need seeds, fertilizers, services and crop protection products,
                    plus the advisory services that allows there to make good use of the inputs and get a crop that is
                    marketable. Because when products are sold, farmers get the income that can be re-invested in the
                    next cycle. Together they should make sure that farmers have what they need to produce: inputs can
                    be sold on credit and processors can give inputs on credit to secure supply; the larger the company
                    the less issues they have to obtain financing from a financial institution. Farmers will invest
                    their saved income from the last season and might need an agricultural insurance to make sure they
                    can deliver on their commitments to the input companies and off takers. </p>
            </div>
        </div>
    </div>
</section>


<x-user.footer.footer-component></x-user.footer.footer-component>

<script src="{{ asset('js/app.js') }}" defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/3.3.0/jquery-migrate.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="{{ asset('js/image-slider.js') }}"></script>
</body>
</html>
