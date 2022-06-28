


<div class="search_tabs">
    <ul class="nav nav-tabs" id="myTab" role="tablist">

        <li class="nav-item" role="presentation">
            <a class="nav-link {{ request()->routeIs('front.caravans.caravans') ? 'active' : null }}" href="{{ route('front.caravans.caravans') }}">Caravans</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link {{ request()->routeIs('front.caravans.caravans_used') ? 'active' : null }}" href="{{ route('front.caravans.caravans_used') }}">Used Caravans</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link {{ request()->routeIs('front.caravans.caravans_new') ? 'active' : null }}" href="{{ route('front.caravans.caravans_new') }}">New Caravans</a>
        </li>

        <li class="nav-item" role="presentation">
            <a class="nav-link {{ request()->routeIs('front.caravans.caravans_sell') ? 'active' : null }}" href="{{ route('front.caravans.caravans_sell') }}">Sell Your Caravans</a>
        </li>

        <li class="nav-item" role="presentation">
            <a class="nav-link {{ request()->routeIs('front.caravans.caravans_reviews') ? 'active' : null }}" href="{{ route('front.caravans.caravans_reviews') }}">Reviews</a>
        </li>

        <li class="nav-item" role="presentation">
            <a class="nav-link {{ request()->routeIs('front.caravans.caravans_finance') ? 'active' : null }}" href="{{ route('front.caravans.caravans_finance') }}">Finance</a>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="used" role="tabpanel" aria-labelledby="sale-tab">
            <form>
                <div class="col-md-12 mt-3">
                    <div class="row">
                        <div class="col-md text-center">
                            <a href="#" class="more_options d-block">Manage my Adverts</a>
                            <button type="button" class="btn btn-theme fw-500 search_btn">Sell My Caravan</button>
                        </div>
                    </div>

                </div>
            </form>
        </div>

    </div>
</div>
