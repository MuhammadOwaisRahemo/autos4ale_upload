<div class="search_tabs">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <a class="nav-link {{ request()->routeIs('front.motorhomes.motorhomes') ? 'active' : null }}" href="{{ route('front.motorhomes.motorhomes') }}">Motorhomes</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link {{ request()->routeIs('front.motorhomes.motorhomes_used') ? 'active' : null }}" href="{{ route('front.motorhomes.motorhomes_used') }}">Used Motorhome</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link {{ request()->routeIs('front.motorhomes.motorhomes_new') ? 'active' : null }}" href="{{ route('front.motorhomes.motorhomes_new') }}">New Motorhome</a>
        </li>

        <li class="nav-item" role="presentation">
            <a class="nav-link {{ request()->routeIs('front.motorhomes.motorhomes_sell') ? 'active' : null }}" href="{{ route('front.motorhomes.motorhomes_sell') }}">Sell Your Motorhome</a>
        </li>

        <li class="nav-item" role="presentation">
            <a class="nav-link {{ request()->routeIs('front.motorhomes.motorhomes_reviews') ? 'active' : null }}" href="{{ route('front.motorhomes.motorhomes_reviews') }}">Reviews</a>
        </li>

        <li class="nav-item" role="presentation">
            <a class="nav-link {{ request()->routeIs('front.motorhomes.motorhomes_finance') ? 'active' : null }}" href="{{ route('front.motorhomes.motorhomes_finance') }}">Finance</a>
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
                            <label>Berth</label>
                            <select class="form-control">
                                <option>Toyota</option>
                                <option>Toyota</option>
                                <option>Toyota</option>
                            </select>
                        </div>
                        <div class="col-md">
                            <label>Make</label>
                            <select class="form-control">
                                <option>Corolla Hybrid</option>
                                <option>Corolla Hybrid</option>
                                <option>Corolla Hybrid</option>
                            </select>
                        </div>

                        <div class="col-md">
                            <label>Min Price</label>
                            <select class="form-control">
                                <option>Corolla Hybrid</option>
                                <option>Corolla Hybrid</option>
                                <option>Corolla Hybrid</option>
                            </select>
                        </div>

                        <div class="col-md">
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
