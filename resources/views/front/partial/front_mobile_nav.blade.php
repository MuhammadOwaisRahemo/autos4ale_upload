<div class="container-fluid sidebar_mobile d-md-none">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-3">
                <!-- </div>
			<div class="col-md-12"> -->
                <a href="{{route('front.home')}}">
                    <img src="{{ asset('front_assets') }}/images/logo-black.svg" class="img-fluid">
                </a>
                <button class="btn btn-theme rounded inner_side_barbtn mt-2 mb-3 px-2 py-0 float-end"><i class="fa-solid fa-bars"></i></button>
            </div>

            <div class="col-md-12 mt-2">
                <div class="dropdown responsive_dropdown">
                    @if (auth('user')->check())
                    <button class="btn btn-theme w-100 text-start dropdown-toggle px-3 py-2" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        My Account
                    </button>
                    <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="{{route('front.my_vehicle')}}">My Vehicle</a></li>
                        <li><a class="dropdown-item" href="{{ route('front.vehacle_sale_summary') }}">Vehicles you’re Selling</a></li>
                        <li><a class="dropdown-item" href="{{route('front.subscription')}}">Subscription</a></li>
                        <li><a class="dropdown-item" href="{{route('front.personal_details')}}">Personal details</a></li>
                        <li><a class="dropdown-item" href="{{route('front.payment_history')}}">Payment History</a></li>
                        <li><a class="dropdown-item" href="{{route('front.payment_method')}}">Payment Method</a></li>
                        <li><a class="dropdown-item" href="{{route('front.logout')}}">Sign Out</a></li>
                    </ul>
                    @else
                        <a href="{{route('front.signup')}}" class="nav-link fw-500 btn btn-theme px-3">
                            Register
                        </a>
                        <br>
                        <a href="{{route('front.signin')}}" class=" nav-link fw-500 btn btn-theme px-3">
                            Sign In
                        </a>
                    @endif
                </div>
            </div>

            <div class="col-md-12 mt-2 text-end">
                <ul class="list-inline responsive_navbar">
                    <li class="list-inline-item">
                        <a href="{{route('front.home')}}" class="{{ request()->routeIs('front.home') ? 'active' : null }}">Cars</a>
                    </li>
                    <li class="list-inline-item">
                        <a class="{{ request()->routeIs('front.luxury') ? 'active' : null }}" href="{{route('front.luxury')}}">Luxury Cars</a>
                    </li>

                    <li class="list-inline-item">
                        <a href="{{route('front.vans.vans')}}" class=" {{ request()->routeIs('front.vans.vans') ? 'active' : null }}">Vans</a>
                    </li>

                    <li class="list-inline-item">
                        <a href="{{route('front.bikes.bikes')}}" class="{{ request()->routeIs('front.bikes.bikes') ? 'active' : null }}">Bikes</a>
                    </li>

                    <li class="list-inline-item me-0">
                        <a href="{{route('front.motorhomes.motorhomes')}}" class="{{ request()->routeIs('front.motorhomes.motorhomes') ? 'active' : null }}">Motorhomes</a>
                    </li>

                    <li class="list-inline-item">
                        <a href="{{route('front.caravans.caravans')}}" class="{{ request()->routeIs('front.caravans.caravans') ? 'active' : null }}">Caravans</a>
                    </li>

                    <li class="list-inline-item">
                        <a href="{{route('front.trucks.trucks')}}" class="{{ request()->routeIs('front.trucks.trucks') ? 'active' : null }}">Trucks</a>
                    </li>
                </ul>
            </div>

            <div class="col-md-12 mt-2 text-end">
                <ul class="list-unstyled responsive_btmnav">
                    <li>
                        <a class="active" href="index.html">Cars for sale</a>
                    </li>
                    <li>
                        <a href="usedcars.html">Used Cars</a>
                    </li>
                    <li>
                        <a href="newcars.html">New Cars</a>
                    </li>

                    <li>
                        <a href="sellcars.html">Sell My Car</a>
                    </li>

                    <li>
                        <a href="electriccars.html">Electric Cars</a>
                    </li>

                    <li>
                        <a href="leasing.html">Car Leasing</a>
                    </li>

                    <li>
                        <a href="carblogs.html">Car Blogs</a>
                    </li>

                    <li>
                        <a href="buyacar.html">Buy A Car</a>
                    </li>

                    <li>
                        <a href="value-car.html">Value Car</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
