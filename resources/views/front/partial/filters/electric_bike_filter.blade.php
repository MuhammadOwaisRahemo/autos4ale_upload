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
                            <label>Bike Make</label>
                            <select class="form-control">
                                <option>Toyota</option>
                                <option>Toyota</option>
                                <option>Toyota</option>
                            </select>
                        </div>
                        <div class="col-md">
                            <label>Bike Model</label>
                            <select class="form-control">
                                <option>Corolla Hybrid</option>
                                <option>Corolla Hybrid</option>
                                <option>Corolla Hybrid</option>
                            </select>
                        </div>

                        <div class="col-md text-center">
                            <!-- <a href="#" class="more_options d-block">More Options</a> -->

                            <button type="button" class="value_searchbtn btn btn-theme fw-500 search_btn">Search Now</button>
                        </div>

                    </div>
                </div>
            </form>
        </div>

    </div>
</div>
