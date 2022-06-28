    <div class="search_tabs">
        <ul class="nav nav-tabs d-none d-md-flex" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link  {{ request()->routeIs('front.home') ? 'active' : null }}" href="{{ route('front.home') }}">Cars for sale</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link {{ request()->routeIs('front.cars.used_cars') ? 'active' : null }}" href="{{ route('front.cars.used_cars') }}">Used Cars</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link {{ request()->routeIs('front.cars.new_cars') ? 'active' : null }}" href="{{ route('front.cars.new_cars') }}">New Cars</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link {{ request()->routeIs('front.cars.sell_my_car') ? 'active' : null }}" href="{{ route('front.cars.sell_my_car') }}">Sell My Car</a>
            </li>

            <li class="nav-item" role="presentation">
                <a class="nav-link {{ request()->routeIs('front.cars.electric_cars') ? 'active' : null }}" href="{{ route('front.cars.electric_cars') }}">Electric Cars</a>
            </li>

            <li class="nav-item" role="presentation">
                <a class="nav-link {{ request()->routeIs('front.cars.leasing_cars') ? 'active' : null }}" href="{{ route('front.cars.leasing_cars') }}">Car Leasing</a>
            </li>

            <li class="nav-item" role="presentation">
                <a class="nav-link {{ request()->routeIs('front.cars.car_blogs') ? 'active' : null }}" href="{{ route('front.cars.car_blogs') }}">Car Blogs</a>
            </li>

            <li class="nav-item" role="presentation">
                <a class="nav-link {{ request()->routeIs('front.cars.buy_new_car') ? 'active' : null }}" href="{{ route('front.cars.buy_new_car') }}">Buy A Car</a>
            </li>

            <li class="nav-item" role="presentation">
                <a class="nav-link {{ request()->routeIs('front.cars.car_value') ? 'active' : null }}" href="{{ route('front.cars.car_value') }}">Value Car</a>
            </li>

        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="sale" role="tabpanel" aria-labelledby="sale-tab">
                <form>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="main_option">
                                <input type="radio" name="select" id="option-1" checked>
                                <input type="radio" name="select" id="option-2">
                                <label for="option-1" class="option option-1">
                                    <span>On Cash</span>
                                </label>
                                <label for="option-2" class="option option-2">
                                    <span>On Finance</span>
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <label>Postcode</label>
                                <select class="form-control">
                                    <option>WC2N 5DU</option>
                                    <option>WC2N 5DU</option>
                                    <option>WC2N 5DU</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label>Distance</label>
                                <select class="form-control">
                                    <option>National</option>
                                    <option>National</option>
                                    <option>National</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label>Car Make</label>
                                <select class="form-control">
                                    <option>Toyota</option>
                                    <option>Toyota</option>
                                    <option>Toyota</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label>Car Model</label>
                                <select class="form-control">
                                    <option>Corolla Hybrid</option>
                                    <option>Corolla Hybrid</option>
                                    <option>Corolla Hybrid</option>
                                </select>
                            </div>

                            <div class="col-md-2">
                                <label>Min Price</label>
                                <select class="form-control">
                                    <option>Corolla Hybrid</option>
                                    <option>Corolla Hybrid</option>
                                    <option>Corolla Hybrid</option>
                                </select>
                            </div>

                            <div class="col-md-2">
                                <label>Max Price</label>
                                <select class="form-control">
                                    <option>Corolla Hybrid</option>
                                    <option>Corolla Hybrid</option>
                                    <option>Corolla Hybrid</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-8 ms-md-auto text-md-end">
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <button class="more_options d-block border-0" type="reset">Reset Filters</button>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="more_options d-block">More Options</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <button type="submit" class="btn btn-theme fw-500 search_btn">Search Now</button>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
