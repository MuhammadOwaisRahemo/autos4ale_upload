<div class="row">
    <nav class="navbar navbar-expand-lg navbar-dark bg-light main-navbar">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{route('front.home')}}">
                <img src="{{ asset('front_assets') }}/images/logo.svg" class="img-fluid">
            </a>
            <button class="navbar-toggler side_barbtn" type="button">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('front.home') ? 'active' : null }}" aria-current="page" href="{{route('front.home')}}">Cars</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('front.luxury') ? 'active' : null }}" href="{{route('front.luxury')}}">Luxury Cars</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('front.vans.vans') ? 'active' : null }}" href="{{route('front.vans.vans')}}">Vans</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('front.bikes.bikes') ? 'active' : null }}" href="{{route('front.bikes.bikes')}}">Bikes</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('front.motorhomes.motorhomes') ? 'active' : null }}" href="{{route('front.motorhomes.motorhomes')}}">Motorhomes</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('front.caravans.caravans') ? 'active' : null }}" href="{{route('front.caravans.caravans')}}">Caravans</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('front.trucks.trucks') ? 'active' : null }}" href="{{route('front.trucks.trucks')}}">Trucks</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <ul class="list-inline">
                        @if (auth('user')->check())
                            <li class="list-inline-item">
                                <a href="saved_search.html" class="nav-link fw-500 btn btn-theme px-3">
                                    <i class="fa-solid fa-heart"></i> Saved
                                </a>
                            </li>
                            <li class="list-inline-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    My Account
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="{{route('front.my_vehicle')}}">My Vehicle</a></li>
                                    <li><a class="dropdown-item" href="{{ route('front.vehacle_sale_summary') }}">Vehicles you’re Selling</a></li>
                                    <li><a class="dropdown-item" href="{{ route('front.subscription') }}">Subscription</a></li>
                                    <li><a class="dropdown-item" href="{{ route('front.personal_details') }}">Personal Details</a></li>
                                    <li><a class="dropdown-item" href="{{ route('front.payment_history') }}">Payment History</a></li>
                                    <li><a class="dropdown-item" href="{{ route('front.payment_method') }}">Payment Method</a></li>
                                    <li><a class="dropdown-item" href="{{route('front.logout')}}">Sign Out</a></li>
                                </ul>
                            </li>
                        @else
                        <li class="list-inline-item">
                            <a href="{{route('front.signup')}}" class="nav-link fw-500 btn btn-theme px-3">
                                Register
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="{{route('front.signin')}}" class="nav-link fw-500 btn btn-theme px-3">
                                Sign In
                            </a>
                        </li>
                        @endif

                    </ul>
                </ul>
            </div>
        </div>
    </nav>
</div>

