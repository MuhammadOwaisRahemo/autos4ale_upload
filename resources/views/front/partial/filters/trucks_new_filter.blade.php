<div class="search_tabs">
    <ul class="nav nav-tabs" id="myTab" role="tablist">

        <li class="nav-item" role="presentation">
            <a class="nav-link {{ request()->routeIs('front.trucks.trucks') ? 'active' : null }}"
                href="{{ route('front.trucks.trucks') }}">Trucks</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link {{ request()->routeIs('front.trucks.trucks_used') ? 'active' : null }}"
                href="{{ route('front.trucks.trucks_used') }}">Used Truck</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link {{ request()->routeIs('front.trucks.trucks_new') ? 'active' : null }}"
                href="{{ route('front.trucks.trucks_new') }}">New Truck</a>
        </li>

        <li class="nav-item" role="presentation">
            <a class="nav-link {{ request()->routeIs('front.trucks.trucks_sell') ? 'active' : null }}"
                href="{{ route('front.trucks.trucks_sell') }}">Sell Your Truck</a>
        </li>

        <li class="nav-item" role="presentation">
            <a class="nav-link {{ request()->routeIs('front.trucks.trucks_reviews') ? 'active' : null }}"
                href="{{ route('front.trucks.trucks_reviews') }}">Reviews</a>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="used" role="tabpanel" aria-labelledby="sale-tab">
            <form>
                <div class="col-md-12">
                    <div class="row">

                        <div class="col-md post_code">
                            <label>Postcode</label>
                            <img src="{{ asset('front_assets') }}/images/location.png" class="img-fluid">
                            <select class="form-select">
                                <option>WC2N 5DU</option>
                                <option>WC2N 5DU</option>
                                <option>WC2N 5DU</option>
                            </select>
                        </div>
                        <div class="col-md">
                            <label>Distance</label>
                            <select class="form-control">
                                <option>National</option>
                                <option>National</option>
                                <option>National</option>
                            </select>
                        </div>
                        <div class="col-md">
                            <label>Make</label>
                            <select class="form-control">
                                <option>Toyota</option>
                                <option>Corolla Hybrid</option>
                                <option>Corolla Hybrid</option>
                            </select>
                        </div>
                        <div class="col-md">
                            <label>Model</label>
                            <select class="form-control">
                                <option>Corolla Hybrid</option>
                                <option>Corolla Hybrid</option>
                                <option>Corolla Hybrid</option>
                            </select>
                        </div>

                        <div class="col-md text-center">
                            <a href="#" class="more_options d-block">More Options</a>
                            <button type="submit" class="btn btn-theme fw-500 search_btn">Search Now</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
