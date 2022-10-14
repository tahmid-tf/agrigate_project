<nav class="navbar navbar-expand-lg navbar-light pb-0" style="background: #E2EFD9">

    <!--Navbar Logo-->
    <a href="{{ route('homepage') }}" class="navbar-brand">
        <img src="{{ asset('images/Agrigate-Logos.png') }}" alt="Logo">
    </a>


    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            {{--            <li class="nav-item active">--}}
            {{--                <a class="nav-link" href="{{ route('homepage') }}">@lang('navbar.Home') <span--}}
            {{--                        class="sr-only">(current)</span></a>--}}
            {{--            </li>--}}


            {{--  -------------------------------- Solutions ------------------------------  --}}


            <li class="nav-item dropdown">
                <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    @lang('navbar.Solutions')
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('solutions') }}">@lang('home.Solution For Farmers')</a>
                    <div class="dropdown-divider" style="border-color:#38512E;">></div>
                    <a class="dropdown-item" href="{{ route('source') }}">@lang('navbar.Solutions for Institutions')</a>
                    <div class="dropdown-divider" style="border-color:#38512E;">></div>
                    <a class="dropdown-item" href="{{ route('work') }}">@lang('home.Solution For entrepreneur')</a>
                </div>
            </li>

            {{--  -------------------------------- Solutions ------------------------------  --}}


            {{--  -------------------------------- Services ------------------------------  --}}

            <li class="nav-item dropdown">
                <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    @lang('navbar.Services')
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                    <a class="dropdown-item" href="{{ route('agrigate-center') }}">@lang('home.Agrigate Center')</a>
                    <div class="dropdown-divider" style="border-color:#38512E;">></div>
                    <a class="dropdown-item" href="{{ route('app') }}">@lang('navbar.App')</a>

                </div>
            </li>

            {{--  -------------------------------- Services ------------------------------  --}}


            <li class="nav-item active">
                <a class="nav-link" href="{{ route('project') }}">@lang('navbar.Projects') <span
                        class="sr-only">(current)</span></a>
            </li>


            <li class="nav-item">
                <a class="nav-link" href="{{ route('team') }}">@lang('navbar.Team')</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('financial-inclusion') }}">@lang('navbar.Financial Inclusion')</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('career') }}">@lang('navbar.Careers')</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('news') }}">@lang('navbar.News')</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('about') }}">@lang('navbar.About')</a>
            </li>

            {{-- ----------------------------------- language ( under construction ) ---------------------------------------- --}}

            <li class="nav-item">
                <a class="nav-link" style="text-decoration: none">
                    <div class="language-div">
                        <button onclick="window.location='{{ route('lang', 'en') }}'" class="language-btn">EN |
                        </button>
                        <button class="language-btn" onclick="window.location='{{ route('lang', 'bn') }}'"> &nbsp;BN
                        </button>
                    </div>
                </a>
            </li>


            {{-- ----------------------------------- language ( under construction ) ---------------------------------------- --}}


        </ul>


    </div>

</nav>
