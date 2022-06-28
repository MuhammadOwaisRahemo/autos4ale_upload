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

                        <div class="col-md-3">
                            <label>Van Make</label>
                            <select class="form-control">
                                <option>Corolla Hybrid</option>
                                <option>National</option>
                                <option>National</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label>Van Model</label>
                            <select class="form-control">
                                <option>Toyota</option>
                                <option>Toyota</option>
                                <option>Toyota</option>
                            </select>
                        </div>

                        <div class="col-md-3">
                            <label>Genration</label>
                            <select class="form-control">
                                <option>Toyota</option>
                                <option>Toyota</option>
                                <option>Toyota</option>
                            </select>
                        </div>

                        <div class="col-md-3 text-center">
                            <!-- <a href="#" class="more_options d-block">More Options</a> -->

                            <button type="button" class="value_searchbtn btn btn-theme fw-500 search_btn">Show Reviews</button>
                        </div>

                    </div>
                </div>
            </form>
        </div>

    </div>
</div>
