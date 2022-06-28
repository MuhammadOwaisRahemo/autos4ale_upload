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

                        <div class="col-md">
                            <label>Registration</label>
                            <input type="text" placeholder="E.g AB12 CDE" class="form-control">
                        </div>
                        <div class="col-md">
                            <label>Current mileage</label>
                            <select class="form-control">
                                <option>E.g 273892</option>
                                <option>Toyota</option>
                                <option>Toyota</option>
                            </select>
                        </div>

                        <div class="col-md-3 text-center">
                            <a href="#" class="more_options d-block">Manage my Adverts</a>

                            <button type="button" class="btn btn-theme fw-500 search_btn">Sell My Bike</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>

    </div>
</div>
