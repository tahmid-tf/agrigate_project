<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@lang('navbar.Agrigate')</title>

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
    <x-user.banner.banner-component></x-user.banner.banner-component>
</section>

<section class="section-dark-green-bg py-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <a href="{{ route('source') }}"><img src="{{ asset('images/image 2.png') }}" class="d-block mx-auto img-fluid"></a>
                <a href="{{ route('source') }}"><p class="text-center top-section-text-style">@lang('home.Source from Us')</p></a>
            </div>
            <div class="col-lg-4 col-md-6">
                <a href="{{ route('work') }}"><img src="{{ asset('images/image 3.png') }}" class="d-block mx-auto img-fluid"></a>
                <a href="{{ route('work') }}"><p class="text-center top-section-text-style">@lang('home.Work with Us')</p></a>
            </div>
            <div class="col-lg-4 col-md-6">
                <a href="{{ route('solutions') }}"><img src="{{ asset('images/image 1.png') }}" class="d-block mx-auto img-fluid"></a>
                <a href="{{ route('solutions') }}"><p class="text-center top-section-text-style">@lang('home.Grow with Us')</p></a>
            </div>
        </div>
    </div>
</section>

<section class="section-light-green-bg py-4">
    <p class="text-center heading-text-style px-2">@lang('home.Our initiative aligns with the Sustainable Development Goals:')</p>
    <div>
        <section class="section-dark-green-bg py-4">
            <div class="slider-section">
                <div class="container-fluid">
                    <div id="owl-demo-2" class="owl-carousel">

                        @foreach($goals as $goal)
                        <article class="thumbnail item mb-4">
                            <div class="flip-card">
                                <div class="flip-card-inner">
                                    <div class="flip-card-front">
                                        <img src="{{ asset('storage/'.$goal->image) }}" class="img-card" alt="">
                                    </div>
                                    <div class="flip-card-back" style="background-color: {{ $goal->hex_color }};">
                                        <div class="container">
                                            <p class="flipcard-text">
                                                {!! \App\User::language_change($goal->content_en,$goal->content_bn) !!}

                                            </p>
                                        </div>
                                    </div>
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
<section class="section-light-green-bg py-4">
    <p class="text-center heading-text-style-2">@lang('home.Facts & Figures/(Our Impact)')</p>
    <section class="section-dark-green-bg py-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 mb-4">
                    <div class="card facts-card">
                        <h5 class="card-top-text">@lang('home.Farmers Onboarded')</h5>

                        <img class="card-image-top img-fluid" src="{{ asset('images/facts-1.png') }}" alt="">
                        <div class="card-body">
                            <p class="card-bottom-text">12,000</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 mb-4">
                    <div class="card facts-card">
                        <h5 class="card-top-text">@lang('home.Livestock Farmers Onboarded')</h5>

                        <img class="card-image-top img-fluid" src="{{ asset('images/facts-2.png') }}" alt="">
                        <div class="card-body">
                            <p class="card-bottom-text">300</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 mb-4">
                    <div class="card facts-card">
                        <h5 class="card-top-text">@lang('home.Input Sellers Onboarded')</h5>

                        <img class="card-image-top img-fluid" src="{{ asset('images/facts-3.png') }}" alt="">
                        <div class="card-body">
                            <p class="card-bottom-text">100</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 mb-4">
                    <div class="card facts-card">
                        <h5 class="card-top-text">@lang('home.Advisory service provided')</h5>

                        <img class="card-image-top img-fluid" src="{{ asset('images/facts-4.png') }}" alt="">
                        <div class="card-body">
                            <p class="card-bottom-text">4500</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 mb-4">
                    <div class="card facts-card">
                        <h5 class="card-top-text">@lang('home.Soil Testing (pH & Moisture)')</h5>

                        <img class="card-image-top img-fluid" src="{{ asset('images/facts-5.png') }}" alt="">
                        <div class="card-body">
                            <p class="card-bottom-text">3500</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 mb-4">
                    <div class="card facts-card">
                        <h5 class="card-top-text">@lang('home.Grain Moisture Test')</h5>

                        <img class="card-image-top img-fluid" src="{{ asset('images/facts-6.png') }}" alt="">
                        <div class="card-body">
                            <p class="card-bottom-text">1000</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="container mt-4">
            <div class="row d-flex justify-content-center">
{{--                <div class="col-lg-3 mb-4">--}}
{{--                    <div class="card facts-card">--}}
{{--                        <h5 class="card-top-text">@lang('home.Soil Testing (pH & Moisture)')</h5>--}}

{{--                        <img class="card-image-top img-fluid" src="{{ asset('images/facts-5.png') }}" alt="">--}}
{{--                        <div class="card-body">--}}
{{--                            <p class="card-bottom-text">3500</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-lg-3 mb-4">--}}
{{--                    <div class="card facts-card">--}}
{{--                        <h5 class="card-top-text">@lang('home.Grain Moisture Test')</h5>--}}

{{--                        <img class="card-image-top img-fluid" src="{{ asset('images/facts-6.png') }}" alt="">--}}
{{--                        <div class="card-body">--}}
{{--                            <p class="card-bottom-text">1000</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

            </div>
        </div>

        <div class="container mt-5">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-3 mb-4">
                    <div class="card facts-card">
                        <h5 class="card-top-text">@lang('home.Corn Sourcing')</h5>

                        <img class="card-image-top img-fluid" src="{{ asset('images/facts-7.png') }}" alt="">
                        <div class="card-body">
                            <p class="card-bottom-text">2000 MT</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-4">
                    <div class="card facts-card">
                        <h5 class="card-top-text">@lang('home.Soyabean Sourcing')</h5>

                        <img class="card-image-top img-fluid" src="{{ asset('images/facts-8.png') }}" alt="">
                        <div class="card-body">
                            <p class="card-bottom-text">1000 MT</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-4">
                    <div class="card facts-card">
                        <h5 class="card-top-text">@lang('home.Bank Account Opening')</h5>

                        <img class="card-image-top img-fluid" src="{{ asset('images/facts-9.png') }}" alt="">
                        <div class="card-body">
                            <p class="card-bottom-text">1400</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 mb-4">
                    <div class="card facts-card">
                        <h5 class="card-top-text">@lang("home.Paid Directly into Farmer's Account")</h5>

                        <img class="card-image-top img-fluid" src="{{ asset('images/facts-10.png') }}" alt="">
                        <div class="card-body">
                            <p class="card-bottom-text">1 Cr. BDT</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="container mt-5">
            <div class="row d-flex justify-content-center">
{{--                <div class="col-lg-3 mb-4">--}}
{{--                    <div class="card facts-card">--}}
{{--                        <h5 class="card-top-text">@lang('home.Bank Account Opening')</h5>--}}

{{--                        <img class="card-image-top img-fluid" src="{{ asset('images/facts-9.png') }}" alt="">--}}
{{--                        <div class="card-body">--}}
{{--                            <p class="card-bottom-text">1400</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-lg-3 mb-4">--}}
{{--                    <div class="card facts-card">--}}
{{--                        <h5 class="card-top-text">@lang("home.Paid Directly into Farmer's Account")</h5>--}}

{{--                        <img class="card-image-top img-fluid" src="{{ asset('images/facts-10.png') }}" alt="">--}}
{{--                        <div class="card-body">--}}
{{--                            <p class="card-bottom-text">1 Cr. BDT</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-lg-3 mb-4">--}}
{{--                    <div class="card facts-card">--}}
{{--                        <h5 class="card-top-text">Turnover</h5>--}}

{{--                        <div class="card-body">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>
    </section>
</section>

<!-- Where We Work-->

<section class="section-light-green-bg py-4">
    <p class="text-center heading-text-style-2">@lang('home.Where we work?')</p>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-4">
                <p class="subtext-style text-center">@lang('home.Regions')</p>
                <img src="{{ asset('images/map.png') }}" class="img-fluid d-block mx-auto"
                     style="height:200px;">
                <p class="subtext-style text-center">2</p>
            </div>

            <div class="col-lg-4">
                <p class="subtext-style text-center">@lang('home.Districts')</p>
                <img src="{{ asset('images/map.png') }}" class="img-fluid d-block mx-auto"
                     style="height:200px;">
                <p class="subtext-style text-center">5</p>
            </div>

            <div class="col-lg-4">
                <p class="subtext-style text-center">@lang('home.Agrigate Centres')</p>
                <img src="{{ asset('images/agrigate-center.png') }}" class="img-fluid d-block mx-auto"
                     style="height:200px;">
                <p class="subtext-style text-center">3</p>
            </div>
        </div>
    </div>
</section>

<section class="section-light-green-bg py-4">
    <p class="text-center heading-text-style-2">@lang('home.Testimonials')</p>
    <section class="section-dark-green-bg py-4">
        <div class="slider-section">
            <div class="container-fluid">
                <div id="owl-demo-3" class="owl-carousel">

                    @foreach($testimonials as $testimonial)

                        <article class="card project-card thumbnail item mb-4"
                                 style="background: #E2EFD9; border-radius:60px;">
                            <div class="container mt-4">
                                <img src="{{ asset('storage/'.$testimonial->image) }}"
                                     class="d-block mx-auto slider-image img-fluid"
                                     style="width:200px; height:200px;"/>
                            </div>

                            <div class="caption p-4">
                                <h4 class="card-subheading">{{ \App\User::language_change($testimonial->title_en,$testimonial->title_bn) }}</h4>
                                <p class="card-text">
                                    {!! \App\User::language_change($testimonial->content_en,$testimonial->content_bn) !!}
                                </p>
                            </div>
                        </article>

                    @endforeach



                </div>
                <!-- #owl-demo-2 -->
            </div>
            <!-- .container -->
        </div>

    </section>

</section>
<section class="section-light-green-bg py-4">
    <p class="text-center heading-text-style-2">@lang('navbar.News')</p>
    <section class="section-dark-green-bg py-4">

        @foreach($news as $news)
        <div class="mx-auto mb-3" id="news-card">
            <div class="row">
                <div class="col-md-8">
                    <div class="card-body mt-3">
                        <h5 class="subtext-style">{{ \App\User::language_change($news->title_en,$news->title_bn) }}</h5>
                        <a href="{{ route('single-news', $news->id) }}" class="read-more"><p>Read more...</p></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('storage/'.$news->image) }}" class="news-image px-2 mt-4 mb-4 img-fluid">
                </div>
            </div>
        </div>
        @endforeach

        <div class="text-center">
            <a href="{{ route('news') }}">
                <button type="button" class="news-button py-2">@lang('home.View All News')</button>
            </a>
        </div>
    </section>
</section>

<x-user.footer.footer-component></x-user.footer.footer-component>

<script src="{{ asset('js/app.js') }}" defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/3.3.0/jquery-migrate.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="{{ asset('js/image-slider.js') }}"></script>
</body>
</html>
