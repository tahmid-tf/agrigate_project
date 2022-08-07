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
        <p class="subpages-heading">Team</p>
    </div>
    <div>
        <img src="{{ asset('images/team.png') }}" class="img-fluid" style="width:100%;">
    </div>
</section>


<section class="section-light-green-bg py-4">
    <div class="d-flex justify-content-center align-items-center">
        <div class="team-heading">
            <p class="subpages-heading mt-1">Our Directors</p>
        </div>
    </div>
    <div>
        <div class="container">
            <div class="row d-flex justify-content-center">

                @foreach($directors as $director)
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4 mt-4">
                        <div class="card program-card mx-auto " style="width: 18rem;">
                            <img class="card-img-top program-card-image" src="{{ asset('storage/'.$director->image) }}"
                                 alt="">
                            <div class="card-body program-card-bottom section-dark-green-bg" style="">
                                <h6 class="text-white text-right">{{ \App\User::language_change($director->title_en,$director->title_bn) }}</h6>
                                <h6 class="text-white text-right mb-3">{{ \App\User::language_change($director->position_en,$director->position_bn) }}</h6>
                                <div class="d-flex justify-content-end">
                                    <div class="mr-2"><a href="{{ $director->fb }}" target="_blank"><img
                                                src="{{ asset("images/icons/fb.png") }}"
                                                style="width:35px; height:25px;"></a></div>
                                    <div class="mr-2"><a href="{{ $director->ln }}"><img
                                                src="{{ asset("images/icons/in.png") }}"
                                                style="width:20px; height:20px;"></a></div>
                                    <div class="mr-2"><a href="mailto:{{$director->g }}"><img
                                                src="{{ asset("images/icons/mail.png") }}"
                                                style="width:20px; height:20px;"></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<section class="section-light-green-bg py-4">
    <div class="d-flex justify-content-center align-items-center">
        <div class="team-heading">
            <p class="subpages-heading mt-1">Our Advisors</p>
        </div>
    </div>
    <div>
        <div class="container">
            <div class="row d-flex justify-content-center">

                @foreach($advisors as $advisor)
                    <div class="col-lg-4 col-md-6 mb-4 mt-4">
                        <div class="card program-card mx-auto" style="width: 18rem;">
                            <img class="card-img-top program-card-image" src="{{ asset('storage/'.$advisor->image) }}"
                                 alt="">
                            <div class="card-body program-card-bottom section-dark-green-bg" style="">
                                <h6 class="text-white text-right">{{ \App\User::language_change($advisor->title_en,$advisor->title_bn) }}</h6>
                                <h6 class="text-white text-right mb-3">{{ \App\User::language_change($advisor->position_en,$advisor->position_bn) }}</h6>
                                <div class="d-flex justify-content-end">
                                    <div class="mr-2"><a href="{{ $advisor->fb }}"><img
                                                src="{{ asset("images/icons/fb.png") }}"
                                                style="width:35px; height:25px;"></a></div>
                                    <div class="mr-2"><a href="{{ $advisor->ln }}"><img
                                                src="{{ asset("images/icons/in.png") }}"
                                                style="width:20px; height:20px;"></a></div>
                                    <div class="mr-2"><a href="mailto:{{ $advisor->g }}"><img
                                                src="{{ asset("images/icons/mail.png") }}"
                                                style="width:20px; height:20px;"></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
</section>
<section class="section-light-green-bg py-4">
    <div class="d-flex justify-content-center align-items-center">
        <div class="team-heading">
            <p class="subpages-heading mt-1">Our Team</p>
        </div>
    </div>
    <div>
        <div class="container">
            <div class="row d-flex justify-content-center">

                @foreach($teams as $team)
                    <div class="col-lg-4 col-md-6 mb-4 mt-4">
                        <div class="card program-card mx-auto" style="width: 18rem;">
                            <img class="card-img-top program-card-image" src="{{ asset('storage/'.$team->image) }}"
                                 alt="">
                            <div class="card-body program-card-bottom section-dark-green-bg" style="">
                                <h6 class="text-white text-right">{{ \App\User::language_change($team->title_en,$team->title_bn) }}</h6>
                                <h6 class="text-white text-right mb-3">{{ \App\User::language_change($team->position_en,$team->position_bn) }}</h6>
                                <div class="d-flex justify-content-end">
                                    <div class="mr-2"><a href="{{ $team->fb }}"><img
                                                src="{{ asset("images/icons/fb.png") }}"
                                                style="width:35px; height:25px;"></a></div>
                                    <div class="mr-2"><a href="{{ $team->ln }}"><img
                                                src="{{ asset("images/icons/in.png") }}"
                                                style="width:20px; height:20px;"></a></div>
                                    <div class="mr-2"><a href="mailto:{{ $team->g }}"><img
                                                src="{{ asset("images/icons/mail.png") }}"
                                                style="width:20px; height:20px;"></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach


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
