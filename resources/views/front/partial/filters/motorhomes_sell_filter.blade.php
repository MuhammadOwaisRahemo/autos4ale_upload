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

                            <button type="button" class="btn btn-theme fw-500 search_btn">Sell My Motohome</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>

    </div>
</div>
