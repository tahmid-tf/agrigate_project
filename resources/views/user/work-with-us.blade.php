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
<body class="section-light-green-bg">
<header>
    <x-user.navbar.navbar-component></x-user.navbar.navbar-component>

</header>

<section>
    {{--    <x-user.banner.banner-component></x-user.banner.banner-component>--}}
</section>

<section>
    <div class="section-dark-green-bg py-2">
        <p class="subpages-heading">Work with Us</p>
    </div>
    <div>
        <!-- ----------------------------- optimized image ------------------------ -->

        <a href="{{ asset('storage/' . $banner->image) }}" class="progressive replace">
            <img src="{{ asset('storage/' . $banner->image) }}" class="preview img-fluid " style="width:100%;"
                 alt="No image"/>
        </a>

        <!-- ----------------------------- optimized image ------------------------ -->

    </div>
</section>

<section>
    <div class="section-light-green-bg py-2">
        <div class="container">
            <div class="card solutions-card">
                <p class="solutions-card-text">
                    {{ \App\User::language_change($banner->title_en,$banner->title_bn) ?? ' Agrigate is a social enterprise that works directly in the field of impoverished communities. We
                    delight in seeing households impacted and lives change for the better. In this regard we are always
                    open for partnership and collaboration for multi-facets of our model or parts that feed to it. Below
                    are some of the avenues that we have partnered worked with other partners and opportunities to work
                    with us. '}}</p>
            </div>
        </div>
    </div>
</section>

<section class="section-light-green-bg">
    <div class="section-dark-green-bg py-2">
        <p class="subpages-heading">Our Partners</p>
    </div>
    <div>
        @foreach($partners as $partner)
            @if($partner->id%2==1)

                <div class="row ml-0 mr-0">
                    <div class="col-lg-6 mb-4">
                        <img src="{{ asset('storage/'.$partner->image) }}"
                             class="d-sm-block mx-auto processing-image img-fluid">
                    </div>
                    <div class="col-lg-6 mt-5">
                        <div class="team-heading mx-auto">
                            <p class="subpages-heading mt-1">{{ \App\User::language_change($partner->title_en,$partner->title_bn) }}</p>
                        </div>
                        <div style="padding-right: 2rem; padding-left: 2rem;">
                            <p class="solutions-card-text-2">{!! \App\User::language_change($partner->content_en,$partner->content_bn) !!}</p>

                        </div>
                    </div>
                </div>
            @elseif($partner->id%2==0)

                <div class="row ml-0 mr-0">

                    <div class="col-lg-6 mt-5">
                        <div class="team-heading-2 mx-auto">
                            <p class="subpages-heading mt-1">{{ \App\User::language_change($partner->title_en,$partner->title_bn) }}</p>
                        </div>
                        <div style="padding-right: 2rem; padding-left: 2rem;">
                            <p class="solutions-card-text-2">{!! \App\User::language_change($partner->content_en,$partner->content_bn) !!}</p>

                        </div>
                    </div>
                    <div class="col-lg-6 mb-4">
                        <img src="{{ asset('storage/'.$partner->image) }}"
                             class="d-sm-block mx-auto processing-image img-fluid">
                    </div>
                </div>
            @endif
        @endforeach

    </div>
</section>

<div style="background-color: #fff;">
    <div class="section-dark-green-bg py-2 mb-4">
        <p class="subpages-heading">Our Development Partners</p>
    </div>
    <div>
        <div class="py-4">
            <div>
                <section class="py-4">
                    <div class="slider-section">
                        <div class="container-fluid">
                            <div id="owl-demo-5" class="owl-carousel">
                                @foreach($dev_partners as $partner)

                                    <article class="thumbnail item mb-4">
                                        <div>
                                            <img class="finance-card-image"
                                                 src="{{ asset('storage/'.$partner->image) }}"
                                                 alt="">
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

<section class="section-light-green-bg">
    <div class="section-dark-green-bg py-1">
        <p class="subpages-heading py-3">Want to be our Partner?</p>
    </div>
    <div class="contact-bg-2">
        <x-user.contact-form.contact-light-component></x-user.contact-form.contact-light-component>
        <br><br>
    </div>
</section>


<style>
    .contact-bg-2 {
        background-image: url("{{ asset('images/cover-bg-2.png') }}");
        background-color: #E2EFD9;
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
