    <div class="search_tabs">
        <ul class="nav nav-tabs d-none d-md-flex" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link  {{ request()->routeIs('front.home') ? 'active' : null }} {{ request()->routeIs('front.main') ? 'active' : null }}" href="{{ route('front.home') }}">Cars for sale</a>
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
                            <div class="col-md">
                                <label>Postcode</label>
                                <input type="text" name="post_code" id="post_code" value="S1OPSWQ1">
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
                                <label>Car Make</label>
                                <select class="form-control" name="brand" id="brand" required>
                                    <option value="">Make</option>
                                    @foreach ($brands as $item)
                                        <option value="{{ $item->id }}" id="brand_id{{ $item->id }}" data-value="{{ $item->name }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md">
                                <label>Car Model</label>
                                <select class="form-control" name="model" id="model" required disabled>
                                    <option value=""><strong>Model</strong></option>
                                </select>
                            </div>
                            <div class="col-md text-center">
                                <a href="javascript:void(0);" class="more_options d-block">More Options</a>
                                <button type="button" class="btn btn-theme fw-500 search_btn search_filter_data">Search Now</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
