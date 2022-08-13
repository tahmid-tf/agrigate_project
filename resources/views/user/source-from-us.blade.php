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
        <img src="{{ asset('storage/'.$banner->image) }}" class="img-fluid" style="width:100%;" alt="No image">

    </div>
</section>

<section>
    <div class="section-light-green-bg py-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card solutions-card">
                        <p class="solutions-card-text">{{\App\User::language_change($banner->title_en,$banner->title_bn) ?? 'Agrigate produces and sources high-quality seed from small & large-scale farmers. Agrigate
                            approach a premium quality supply of Maize, Soybeans, Seasame, Mustard, Lentil, Mungbean and
                            Groundnuts.
                            We supply seeds to a wide range of customers and organizations. You can find our seeds at
                            leading agrodealers across Bangladesh. We are sourcing quality output through direct
                            purchase.'}}
                        </p>
                    </div>
                </div>
                {{--                <div class="col-lg-6">--}}
                {{--                    <img src="{{ asset('images/source-2.png') }}" class="source-image img-fluid d-block mx-auto">--}}
                {{--                </div>--}}
            </div>

        </div>
    </div>
</section>
<section class="section-light-green-bg py-4">
    <div class="section-dark-green-bg py-2 mb-4">
        <p class="subpages-heading">Crops</p>
    </div>
    <div>
        <section class="section-light-green-bg py-4">
            <div class="slider-section">
                <div class="container-fluid">
                    <div id="owl-demo-3" class="owl-carousel">

                        @foreach($crops as $crop)
                            <article class="thumbnail item mb-4">
                                <div class="card program-2-card" style="width: 18rem;">
{{--                                    <h5 class="program-2-card-title mt-4">{{ \App\User::language_change($crop->title_en,$crop->title_bn) }}</h5>--}}
                                    <br>
                                    <img class="card-img-top program-2-card-image d-block mx-auto"
                                         src="{{asset('storage/'.$crop->image) }}" alt="">
                                    <div class="card-body text-center" style="">
                                      <span>{!! \App\User::language_change($crop->title_en,$crop->title_bn) !!}</span>

                                    </div>
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
</section>

<div class="section-light-green-bg py-4">
    <div class="section-dark-green-bg py-2 mb-4">
        <p class="subpages-heading">Processing and Trade</p>
    </div>
    <div>
        <div class="section-light-green-bg py-4">
            <div class="container">
                <p class="solutions-card-text-2">Agrigate works with agro-processors, outgrower networks and traders
                    looking for specific quantities and consistent supplies of premium outputs. We listen to our
                    client’s requirements and work with breeders and research institutes to develop the seed to meet the
                    right crop characteristics. Through networks of smallholder farmers, we can grow and process what
                    you need.</p>

            </div>
        </div>

    </div>
</div>
<section class="section-dark-green-bg">
    <div>

        @foreach($processings as $processing)
            @if($processing->id%2==1)

                <div class="row ml-0 mr-0">
                    <div class="col-lg-6 mb-4">
                        <img src="{{ asset('storage/'.$processing->image) }}"
                             class="d-sm-block mx-auto processing-image img-fluid">
                    </div>
                    <div class="col-lg-6 mt-5">
                        <div style="padding-right: 2rem; padding-left: 2rem;">
                            <p class="subpages-heading">{{ \App\User::language_change($processing->title_en,$processing->title_bn) }}</p>
                            <p class="solutions-card-text">
                                {!! \App\User::language_change($processing->content_en,$processing->content_bn) !!}
                            </p>
                        </div>

                    </div>
                </div>
            @elseif($processing->id%2==0)

                <div class="row ml-0 mr-0">
                    <div class="col-lg-6 mt-5">
                        <div style="padding-right: 2rem; padding-left: 2rem;">
                            <p class="subpages-heading">{{ \App\User::language_change($processing->title_en,$processing->title_bn) }}</p>
                            <p class="solutions-card-text">
                                {!! \App\User::language_change($processing->content_en,$processing->content_bn) !!}
                            </p>
                        </div>

                    </div>
                    <div class="col-lg-6 mb-4">
                        <img src="{{ asset('storage/'.$processing->image) }}"
                             class="d-sm-block mx-auto img-fluid processing-image">
                    </div>
                </div>
            @endif
        @endforeach

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

                                @foreach($buyers as $buyer)
                                    <article class="thumbnail item mb-4">
                                        <div>
                                            <img class="finance-card-image" src="{{ asset('storage/'.$buyer->image) }}"
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
