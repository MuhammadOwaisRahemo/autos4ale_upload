<div class="container-fluid sidebar_mobile d-md-none">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-3">
                <!-- </div>
			<div class="col-md-12"> -->
                <a href="index.html">
                    <img src="{{ asset('front_assets') }}/images/logo-black.svg" class="img-fluid">
                </a>
                <button class="btn btn-theme rounded inner_side_barbtn mt-2 mb-3 px-2 py-0 float-end"><i class="fa-solid fa-bars"></i></button>
            </div>

            <div class="col-md-12 mt-2">
                <div class="dropdown responsive_dropdown">
                    <button class="btn btn-theme w-100 text-start dropdown-toggle px-3 py-2" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        My Account
                    </button>
                    <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="{{route('front.my_vehicle')}}">My Vehicle</a></li>
                        <li><a class="dropdown-item" href="vehicle_sale.html">Vehicles you’re Selling</a></li>
                        <li><a class="dropdown-item" href="subscription.html">Subscription</a></li>
                        <li><a class="dropdown-item" href="pay_history.html">Payment History</a></li>
                        <li><a class="dropdown-item" href="pay_method.html">Payment Method</a></li>
                        <li><a class="dropdown-item" href="{{route('front.logout')}}">Sign Out</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-12 mt-2 text-end">
                <ul class="list-inline responsive_navbar">
                    <li class="list-inline-item">
                        <a class="active" href="index.html">Cars</a>
                    </li>
                    <li class="list-inline-item">
                        <a href="luxurycars.html">Luxury Cars</a>
                    </li>

                    <li class="list-inline-item">
                        <a href="vans.html">Vans</a>
                    </li>

                    <li class="list-inline-item">
                        <a href="bikes.html">Bikes</a>
                    </li>

                    <li class="list-inline-item me-0">
                        <a href="motorhomes.html">Motorhomes</a>
                    </li>

                    <li class="list-inline-item">
                        <a href="caravans.html">Caravans</a>
                    </li>

                    <li class="list-inline-item">
                        <a href="trucks.html">Trucks</a>
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
