<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@lang('home.agrigate')</title>

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

<section class="section-dark-green-bg py-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <img src="{{ asset('images/image 2.png') }}" class="d-block mx-auto img-fluid">
                <a href="{{ route('source') }}"><p class="text-center top-section-text-style">Source from Us</p></a>
            </div>
            <div class="col-lg-4 col-md-6">
                <img src="{{ asset('images/image 3.png') }}" class="d-block mx-auto img-fluid">
                <a href="{{ route('work') }}"><p class="text-center top-section-text-style">Work with Us</p></a>
            </div>
            <div class="col-lg-4 col-md-6">
                <img src="{{ asset('images/image 1.png') }}" class="d-block mx-auto img-fluid">
                <a href="{{ route('solutions') }}"><p class="text-center top-section-text-style">Grow with Us</p></a>
            </div>
        </div>
    </div>
</section>

<section class="section-light-green-bg py-4">
    <p class="text-center heading-text-style px-2">Our initiative aligns with the Sustainable Development Goals:</p>
    <div>
        <section class="section-dark-green-bg py-4">
            <div class="slider-section">
                <div class="container-fluid">
                    <div id="owl-demo-2" class="owl-carousel">
                        <article class="thumbnail item mb-4">
                            <div class="flip-card">
                                <div class="flip-card-inner">
                                    <div class="flip-card-front">
                                        <img src="{{ asset('images/goal-1.png') }}" class="img-card" alt="">
                                    </div>
                                    <div class="flip-card-back" style="background-color: #ec1c2c;">
                                        <div class="container">
                                            <p class="flipcard-text">Agrigate provides the quality services, inputs to
                                                the farmers to boost their incomes grow, consumers increase their
                                                consumption of manufactured goods and services faster than their
                                                consumption of food. Paradoxically, the process is usually accompanied
                                                by rising incomes and a lower incidence of poverty among those who
                                                depend on agriculture for a living.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article class="thumbnail item mb-4">
                            <div class="flip-card">
                                <div class="flip-card-inner">
                                    <div class="flip-card-front">
                                        <img src="{{ asset('images/goal-2.png') }}" class="img-card" alt="">
                                    </div>
                                    <div class="flip-card-back" style="background-color: #cd9b18;">
                                        <div class="container">
                                            <p class="flipcard-text">Agrigate provides the quality services, inputs to
                                                the farmers to boost their incomes grow, consumers increase their
                                                consumption of manufactured goods and services faster than their
                                                consumption of food. Paradoxically, the process is usually accompanied
                                                by rising incomes and a lower incidence of poverty among those who
                                                depend on agriculture for a living.</p>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </article>
                        <article class="thumbnail item mb-4">
                            <div class="flip-card">
                                <div class="flip-card-inner">
                                    <div class="flip-card-front">
                                        <img src="{{ asset('images/goal-3.png') }}" class="img-card" alt="">
                                    </div>
                                    <div class="flip-card-back" style="background-color: #8f1838;">
                                        <div class="container">
                                            <p class="flipcard-text">Agrigate provides the quality services, inputs to
                                                the farmers to boost their incomes grow, consumers increase their
                                                consumption of manufactured goods and services faster than their
                                                consumption of food. Paradoxically, the process is usually accompanied
                                                by rising incomes and a lower incidence of poverty among those who
                                                depend on agriculture for a living.</p>
                                        </div>

                                    </div>
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
</section>
<section class="section-light-green-bg py-4">
    <p class="text-center heading-text-style-2">Facts & Figures/(Our Impact)</p>
    <section class="section-dark-green-bg py-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 mb-4">
                    <div class="card facts-card">
                        <h5 class="card-top-text">@lang('home.Farmers Onboarded')</h5>

                        <img class="card-image-top img-fluid" src="{{ asset('images/facts-1.png') }}" alt="">
                        <div class="card-body">
                            <p class="card-bottom-text">12,000</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-4">
                    <div class="card facts-card">
                        <h5 class="card-top-text">Livestock Farmers Onboarded</h5>

                        <img class="card-image-top img-fluid" src="{{ asset('images/facts-2.png') }}" alt="">
                        <div class="card-body">
                            <p class="card-bottom-text">300</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-4">
                    <div class="card facts-card">
                        <h5 class="card-top-text">Input Sellers
                            Onboarded</h5>

                        <img class="card-image-top img-fluid" src="{{ asset('images/facts-3.png') }}" alt="">
                        <div class="card-body">
                            <p class="card-bottom-text">100</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-4">
                    <div class="card facts-card">
                        <h5 class="card-top-text">Advisory service provided</h5>

                        <img class="card-image-top img-fluid" src="{{ asset('images/facts-4.png') }}" alt="">
                        <div class="card-body">
                            <p class="card-bottom-text">4500</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-4">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-3 mb-4">
                    <div class="card facts-card">
                        <h5 class="card-top-text">Soil Testing
                            (pH & Moisture)</h5>

                        <img class="card-image-top img-fluid" src="{{ asset('images/facts-5.png') }}" alt="">
                        <div class="card-body">
                            <p class="card-bottom-text">3500</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-4">
                    <div class="card facts-card">
                        <h5 class="card-top-text">Grain Moisture Test</h5>

                        <img class="card-image-top img-fluid" src="{{ asset('images/facts-6.png') }}" alt="">
                        <div class="card-body">
                            <p class="card-bottom-text">1000</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mt-5">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-3 mb-4">
                    <div class="card facts-card">
                        <h5 class="card-top-text">Corn Sourcing</h5>

                        <img class="card-image-top img-fluid" src="{{ asset('images/facts-7.png') }}" alt="">
                        <div class="card-body">
                            <p class="card-bottom-text">2000 MT</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-4">
                    <div class="card facts-card">
                        <h5 class="card-top-text">Soyabean Sourcing</h5>

                        <img class="card-image-top img-fluid" src="{{ asset('images/facts-8.png') }}" alt="">
                        <div class="card-body">
                            <p class="card-bottom-text">1000 MT</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mt-5">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-3 mb-4">
                    <div class="card facts-card">
                        <h5 class="card-top-text">Bank Account Opening</h5>

                        <img class="card-image-top img-fluid" src="{{ asset('images/facts-9.png') }}" alt="">
                        <div class="card-body">
                            <p class="card-bottom-text">1400</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-4">
                    <div class="card facts-card">
                        <h5 class="card-top-text">Paid Directly into Farmer's Account</h5>

                        <img class="card-image-top img-fluid" src="{{ asset('images/facts-10.png') }}" alt="">
                        <div class="card-body">
                            <p class="card-bottom-text">1 Cr. BDT</p>
                        </div>
                    </div>
                </div>
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
    <p class="text-center heading-text-style-2">Where we work?</p>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-4">
                <p class="subtext-style text-center">Regions</p>
                <img src="{{ asset('images/map.png') }}" class="img-fluid d-block mx-auto"
                     style="height:200px;">
                <p class="subtext-style text-center">2</p>
            </div>

            <div class="col-lg-4">
                <p class="subtext-style text-center">Districts</p>
                <img src="{{ asset('images/map.png') }}" class="img-fluid d-block mx-auto"
                     style="height:200px;">
                <p class="subtext-style text-center">5</p>
            </div>

            <div class="col-lg-4">
                <p class="subtext-style text-center">Agrigate Centres</p>
                <img src="{{ asset('images/agrigate-center.png') }}" class="img-fluid d-block mx-auto"
                     style="height:200px;">
                <p class="subtext-style text-center">3</p>
            </div>
        </div>
    </div>
</section>

<section class="section-light-green-bg py-4">
    <p class="text-center heading-text-style-2">Testimonials</p>
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

                    {{--                    <article class="card project-card thumbnail item mb-4"--}}
                    {{--                             style="background: #E2EFD9; border-radius:60px;">--}}
                    {{--                        <div class="container mt-4">--}}
                    {{--                            <img src="{{ asset('images/testimonial-2.png') }}"--}}
                    {{--                                 class="d-block mx-auto slider-image img-fluid"--}}
                    {{--                                 style="width:200px; height:200px;"/>--}}
                    {{--                        </div>--}}

                    {{--                        <div class="caption p-4">--}}
                    {{--                            <h4 class="card-subheading">Corn Trader, Dinajpur</h4>--}}
                    {{--                            <p class="card-text">--}}
                    {{--                                My name is Md. Mozammel Haque. I am a corn trader from Mukundpur union in--}}
                    {{--                                Birganj upazila of Dinajpur district. I have been involved in this business for--}}
                    {{--                                the past few years. In light of this, I have decided to do business with--}}
                    {{--                                Agrigate this year. I collect corn from selected farmers of Agrigate and deliver--}}
                    {{--                                them to the purchasing center. I am really happy to do business with Agrigate.--}}
                    {{--                                First of all, their product collection method is very advanced and their--}}
                    {{--                                transaction is very good. They transact through banks very quickly. I am very--}}
                    {{--                                happy to have all the opportunities. Hopefully business with Agrigate will--}}
                    {{--                                continue in the future. </p>--}}
                    {{--                        </div>--}}
                    {{--                    </article>--}}

                    {{--                    <article class="card project-card thumbnail item mb-4"--}}
                    {{--                             style="background: #E2EFD9; border-radius:60px;">--}}
                    {{--                        <div class="container mt-4">--}}
                    {{--                            <img src="{{ asset('images/testimonial-1.png') }}"--}}
                    {{--                                 class="d-block mx-auto slider-image img-fluid"--}}
                    {{--                                 style="width:200px; height:200px;"/>--}}
                    {{--                        </div>--}}

                    {{--                        <div class="caption p-4">--}}
                    {{--                            <h4 class="card-subheading">Farmer, Lalmonirhat</h4>--}}
                    {{--                            <p class="card-text">--}}
                    {{--                                I am Md. Ariful Islam. I am a farmer from Dakshin Sindurna village in Sindurna--}}
                    {{--                                union of Hatibandha upazila in Lalmonirhat district. Since I planted the corn--}}
                    {{--                                this season, Agrigate's field officers have extended a helping hand to me. They--}}
                    {{--                                informed me about the modern maize cultivation method and gave me instructions--}}
                    {{--                                on how much fertilizer is required for the soil by testing the soil of my land--}}
                    {{--                                for free which helped me to get high yield this time. Agrigate also arranges for--}}
                    {{--                                bank accounts to be opened for marginal farmers like us at a cost of Tk 10 only.--}}
                    {{--                                Thinking of all these opportunities, I sell my corn directly to Agrigate. This--}}
                    {{--                                time I got advice from Agrigate about cultivating maize crop and also got fair--}}
                    {{--                                price by selling products to them. Payment through my bank account in a very--}}
                    {{--                                short time after delivery of goods to them which is very secure for me. I look--}}
                    {{--                                forward to working with them as a contract farmer in the future, accepting all--}}
                    {{--                                agricultural assistance from Agrigate, especially modern farming methods, high--}}
                    {{--                                quality seeds, fertilizers, pesticides and financial assistance. I hope I can--}}
                    {{--                                make a financial profit by selling my products through Agrigate InshaAllah.--}}
                    {{--                            </p>--}}
                    {{--                        </div>--}}
                    {{--                    </article>--}}

                    {{--                    <article class="card project-card thumbnail item mb-4"--}}
                    {{--                             style="background: #E2EFD9; border-radius:60px;">--}}
                    {{--                        <div class="container mt-4">--}}
                    {{--                            <img src="{{ asset('images/testimonial-2.png') }}"--}}
                    {{--                                 class="d-block mx-auto slider-image img-fluid" style="width:200px; height:200px;"/>--}}
                    {{--                        </div>--}}

                    {{--                        <div class="caption p-4">--}}
                    {{--                            <h4 class="card-subheading">Corn Trader, Dinajpur</h4>--}}
                    {{--                            <p class="card-text">--}}
                    {{--                                My name is Md. Mozammel Haque. I am a corn trader from Mukundpur union in Birganj--}}
                    {{--                                upazila of Dinajpur district. I have been involved in this business for the past few--}}
                    {{--                                years. In light of this, I have decided to do business with Agrigate this year. I--}}
                    {{--                                collect corn from selected farmers of Agrigate and deliver them to the purchasing--}}
                    {{--                                center. I am really happy to do business with Agrigate. First of all, their product--}}
                    {{--                                collection method is very advanced and their transaction is very good. They transact--}}
                    {{--                                through banks very quickly. I am very happy to have all the opportunities. Hopefully--}}
                    {{--                                business with Agrigate will continue in the future. </p>--}}
                    {{--                        </div>--}}
                    {{--                    </article>--}}


                </div>
                <!-- #owl-demo-2 -->
            </div>
            <!-- .container -->
        </div>

    </section>

</section>
<section class="section-light-green-bg py-4">
    <p class="text-center heading-text-style-2">News</p>
    <section class="section-dark-green-bg py-4">
        <div class="mx-auto mb-3" id="news-card">
            <div class="row">
                <div class="col-md-8">
                    <div class="card-body mt-3">
                        <h5 class="subtext-style">UCB signs deal with Agrigate Network</h5>
                        <a href="{{ route('single-news') }}" class="read-more"><p>Read more...</p></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('images/news-1.png') }}" class="news-image px-2 mt-4 mb-4 img-fluid">
                </div>
            </div>
        </div>

        <div class="mx-auto mb-3" id="news-card">
            <div class="row">
                <div class="col-md-8">
                    <div class="card-body mt-3">
                        <h5 class="subtext-style">UCB signs deal with Agrigate Network</h5>
                        <a href="{{ route('single-news') }}" class="read-more"><p>Read more...</p></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('images/news-1.png') }}" class="news-image px-2 mt-4 mb-4 img-fluid">
                </div>
            </div>
        </div>
        <div class="text-center">
            <a href="{{ route('news') }}">
                <button type="button" class="news-button py-2">View All News</button>
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
