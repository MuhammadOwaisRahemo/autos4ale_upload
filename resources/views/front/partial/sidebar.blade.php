<div class="col-md-3">
    <div class="user_sidebar">
        <ul class="list-unstyled mb-0">
            <li><a href="{{route('front.my_vehicle')}}" class="{{ Request::routeIs('front.my_vehicle') ? 'active' : '' }}">My Vehicle @if (Request::routeIs('front.my_vehicle'))
                <i class="fa-solid fa-arrow-right"></i>
                @endif</a></li>
            <li><a href="{{ route('front.vehacle_sale_summary') }}" class="{{ Request::is('vehicle-sale*') ? 'active' : '' }}">Vehicles you’re Selling @if (Request::is('vehicle-sale*'))
                <i class="fa-solid fa-arrow-right"></i>
                @endif</a></li>
            <li><a href="{{route('front.subscription')}}" class="{{ Request::routeIs('front.subscription') ? 'active' : '' }}">Subscription @if (Request::routeIs('front.subscription'))
                <i class="fa-solid fa-arrow-right"></i>
                @endif</a></li>
            <li><a href="{{route('front.personal_details')}}" class="{{ Request::is('personal-details*') ? 'active' : '' }}">Personal details @if (Request::is('personal-details*'))
                <i class="fa-solid fa-arrow-right"></i>
                @endif</a></li>
            <li><a href="{{route('front.payment_history')}}" class="{{ Request::routeIs('front.payment_history') ? 'active' : '' }}">Payment History @if (Request::routeIs('front.payment_history'))
                <i class="fa-solid fa-arrow-right"></i>
                @endif</a></li>
            <li><a href="{{route('front.payment_method')}}" class="{{ Request::routeIs('front.payment_method') ? 'active' : '' }}">Payment Method @if (Request::routeIs('front.payment_method'))
                <i class="fa-solid fa-arrow-right"></i>
                @endif</a></li>
            <li><a href="{{route('front.logout')}}">Sign Out</a></li>
        </ul>
    </div>
</div>
