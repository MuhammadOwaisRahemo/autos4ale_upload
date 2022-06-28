<div class="search_tabs">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <a class="nav-link {{ request()->routeIs('front.bikes.bikes') ? 'active' : null }}" href="{{ route('front.bikes.bikes') }}">Used Bike</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link {{ request()->routeIs('front.bikes.new_bikes') ? 'active' : null }}" href="{{ route('front.bikes.new_bikes') }}">New Bike</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link {{ request()->routeIs('front.bikes.sell_bike') ? 'active' : null }}" href="{{ route('front.bikes.sell_bike') }}">Sell Your Bike</a>
        </li>

        <li class="nav-item" role="presentation">
            <a class="nav-link {{ request()->routeIs('front.bikes.bike_reviews') ? 'active' : null }}" href="{{ route('front.bikes.bike_reviews') }}">Reviews</a>
        </li>

        <li class="nav-item" role="presentation">
            <a class="nav-link {{ request()->routeIs('front.bikes.bike_finance') ? 'active' : null }}" href="{{ route('front.bikes.bike_finance') }}">Finance</a>
        </li>

        <li class="nav-item" role="presentation">
            <a class="nav-link {{ request()->routeIs('front.bikes.electric_bikes') ? 'active' : null }}" href="{{ route('front.bikes.electric_bikes') }}">Electric Bike</a>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="used" role="tabpanel" aria-labelledby="sale-tab">
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
                        <div class="col-md-2 post_code">
                            <label>Postcode</label>
                            <img src="{{ asset('front_assets') }}/images/location.png" class="img-fluid">
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
                            <label>Bike Make</label>
                            <select class="form-control">
                                <option>Honda</option>
                                <option>Toyota</option>
                                <option>Toyota</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label>Bike Model</label>
                            <select class="form-control">
                                <option>Had</option>
                                <option>Corolla Hybrid</option>
                                <option>Corolla Hybrid</option>
                            </select>
                        </div>

                        <div class="col-md-2">
                            <label>Min Price</label>
                            <select class="form-control">
                                <option>£ 234,00</option>
                                <option>Corolla Hybrid</option>
                                <option>Corolla Hybrid</option>
                            </select>
                        </div>

                        <div class="col-md-2">
                            <label>Max Price</label>
                            <select class="form-control">
                                <option>£ 234,00</option>
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
