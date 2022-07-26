
<nav class="navbar navbar-expand-lg navbar-light pb-0" style="background: #E2EFD9">

    <!--Navbar Logo-->
    <a href="#" class="navbar-brand">
        <img src="{{ asset('images/Agrigate-Logos.png') }}" alt="Logo">
    </a>


    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('homepage') }}">Home <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   Solutions
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('solutions') }}">Solution For Farmers</a>
                    <div class="dropdown-divider" style="border-color:#38512E;">></div>
                    <a class="dropdown-item" href="{{ route('agrigate-center') }}">Agrigate
                        Center</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('about') }}">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('app') }}">App</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('team') }}">Team</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('financial-inclusion') }}">Financial Inclusion</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('career') }}">Careers</a>
            </li>


        </ul>


    </div>

</nav>
