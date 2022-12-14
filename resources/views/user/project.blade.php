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
        <p class="subpages-heading">Project</p>
    </div>
</section>

<section class="section-dark-green-bg py-4">

    @foreach($news as $news)
        <div class="mx-auto mb-3" id="news-card-2">
            <div class="row">
                <div class="col-md-8">
                    <div class="card-body mt-3">
                        <h5 class="subtext-style">{{ \App\User::language_change($news->title_en,$news->title_bn) }}</h5>
                        <a href="{{ route('single-project', $news->id) }}" class="read-more"><p>Read more...</p></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('storage/'.$news->image) }}" class="news-image px-2 mt-4 mb-4 img-fluid">
                </div>
            </div>
        </div>
    @endforeach
</section>


<x-user.footer.footer-component></x-user.footer.footer-component>

<script src="{{ asset('js/app.js') }}" defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/3.3.0/jquery-migrate.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="{{ asset('js/image-slider.js') }}"></script>
</body>
</html>
