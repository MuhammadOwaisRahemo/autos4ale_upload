<div class="search_tabs">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <a class="nav-link {{ request()->routeIs('front.vans.vans') ? 'active' : null }}" href="{{ route('front.vans.vans') }}">Used Vans</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link {{ request()->routeIs('front.vans.new_vans') ? 'active' : null }}" href="{{ route('front.vans.new_vans') }}">New Van</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link {{ request()->routeIs('front.vans.sell_van') ? 'active' : null }}" href="{{ route('front.vans.sell_van') }}">Sell Your Van</a>
        </li>

        <li class="nav-item" role="presentation">
            <a class="nav-link {{ request()->routeIs('front.vans.van_blogs') ? 'active' : null }}" href="{{ route('front.vans.van_blogs') }}">Van Blog</a>
        </li>

        <li class="nav-item" role="presentation">
            <a class="nav-link {{ request()->routeIs('front.vans.van_reviews') ? 'active' : null }}" href="{{ route('front.vans.van_reviews') }}">Reviews</a>
        </li>

        <li class="nav-item" role="presentation">
            <a class="nav-link {{ request()->routeIs('front.vans.van_finance') ? 'active' : null }}" href="{{ route('front.vans.van_finance') }}">Finance</a>
        </li>

        <li class="nav-item" role="presentation">
            <a class="nav-link {{ request()->routeIs('front.vans.electric_van') ? 'active' : null }}" href="{{ route('front.vans.electric_van') }}">Electric Van</a>
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
