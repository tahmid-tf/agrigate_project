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
        <p class="subpages-heading">Careers</p>
    </div>
    <div>
        <img src="{{ asset('storage/'.$banner->image) }}" class="img-fluid" style="width:100%;" alt="No image">
    </div>
</section>

<section class="section-light-green-bg py-4">
    <div class="py-2 mb-4">
        <p class="subpages-heading-2">Join Us</p>
    </div>
    <div class="container">
        <div class="row">

            @foreach($careers as $career)
            <div class="col-lg-4 mb-4"mb-4>
                <div class="card career-card">
                    <div class="container">
                        <p class="career-heading">{{ \App\User::language_change($career->title_en,$career->title_bn) }}</p>
                        <a href="{{ route('apply-now', $career->id) }}"><p class="career-subheading">Read More...</p></a>
                    </div>
                </div>
            </div>
            @endforeach
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
