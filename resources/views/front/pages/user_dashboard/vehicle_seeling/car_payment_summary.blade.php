@extends('layouts.front_dashboard')
@section('content')
    <div class="logintop_content">
        <h1 class="fw-bold"><i class="fa-solid fa-arrow-left"></i> Vehicles you’re selling</h1>
    </div>

    <div class="row mt-3">
        <div class="d-flex top_steps align-items-center">
            <div class="content active text-theme">Vehicle Details</div>
            <div class="border_line active"></div>
            <div class="content active text-theme">Your advert</div>
            <div class="border_line"></div>
            <div class="content text_color">Package & Payment</div>
        </div>
    </div>

    <h4 class="black_colored fs-20 mt-4">Payment Summary</h4>

    <div class="paybox">
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <tr>
                        <th>Contact details</th>
                        <th>Packages</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Zahid Imam</td>
                        <td>Basic - 2 weeks</td>
                    </tr>

                    <tr>
                        <td>020 79460628</td>
                        <td>£51.54</td>
                    </tr>

                    <tr>
                        <td style="padding-bottom: 15px;">WC2N 5DU (not shown in ad)</td>
                        <td style="padding-bottom: 15px;"></td>
                    </tr>

                    <tr style="border-top: 1px solid #F2F2F2">
                        <td>Sub total</td>
                        <td>£42.95</td>
                    </tr>

                    <tr>
                        <td>VAT (20%)</td>
                        <td>£8.59</td>
                    </tr>

                    <tr>
                        <td>Total to pay</td>
                        <td>£51.54</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <h4 class="black_colored fs-16 mt-4">Payment Method</h4>

    <form action="{{ route('front.save_car_payment_summary') }}" id="payment-form" method="post">
        @csrf
        <input type="hidden" name="user_id" value="{{ $user_id }}">
        <input type="hidden" name="ad_id" value="{{ $ad_id }}">
        <input type="hidden" name="amount" value="{{ $price }}">

        {{-- <div class="row">
            <div class="col-md-6">
                <input type="text" class="form-control" placeholder="Name on card">
            </div>

            <div class="col-md-6">
                <div class="cards position-relative">
                    <input type="text" class="form-control" placeholder="1234 1234 1234">
                    <img src="{{ asset('front_assets') }}/images/card_payment.jpg" class="position-absolute">
                </div>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-md-6">
                <input type="text" class="form-control" placeholder="Postcode">
            </div>

            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-6">
                        <input type="text" class="form-control" placeholder="Exp date">
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" placeholder="CVC">
                    </div>
                </div>
            </div>
        </div> --}}
        @if (isset($price) && $price !== "FREE")
        <div class="card">

            <div id="card-element" style="padding: 20px !important;">
                <!-- A Stripe Element will be inserted here. -->
            </div>
        </div>
        <!-- Used to display form errors. -->
        <div id="card-errors" role="alert" style="color: red;"></div>

        <div class="row mt-3">
            <div class="col-md-12">
                <label class="check_container checkboxes">
                    <input type="checkbox">
                    <span class="checkmark"></span>
                    Save this card for further purchases
                </label>
            </div>

            <div class="col-md-12 mt-3">
                <label class="check_container checkboxes">
                    <input type="checkbox">
                    <span class="checkmark"></span>
                    I accept Auto4sale terms and advertising guidelines. I also acknowledge that my advert will be processed
                    immediately and I consent for the service to start within the cancellation period.
                </label>
            </div>
        </div>
        @endif


        <div class="vehicleadd_btm mt-3 text-end">
            <button type="submit" class="btn btn-theme fw-500">Pay £{{ $price == 'FREE' ? 0 : $price }}</button>
        </div>
    </form>
@endsection
@section('page-script')
    <script src="https://js.stripe.com/v3/"></script>
    <script>
        // Create a Stripe client.
        var stripe = Stripe('{{ config('app.STRIPE_KEY') }}');

        // Create an instance of Elements.
        var elements = stripe.elements();

        // Custom styling can be passed to options when creating an Element.
        // (Note that this demo uses a wider set of styles than the guide below.)
        var style = {
            base: {
                color: '#32325d',
                lineHeight: '18px',
                fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
                fontSmoothing: 'antialiased',
                fontSize: '16px',
                '::placeholder': {
                    color: '#aab7c4'
                }
            },
            invalid: {
                color: '#fa755a',
                iconColor: '#fa755a'
            }
        };

        // Create an instance of the card Element.
        var card = elements.create('card', {
            style: style
        });

        // Add an instance of the card Element into the `card-element` <div>.
        card.mount('#card-element');

        // Handle real-time validation errors from the card Element.
        card.addEventListener('change', function(event) {
            var displayError = document.getElementById('card-errors');
            if (event.error) {
                displayError.textContent = event.error.message;
            } else {
                displayError.textContent = '';
            }
        });

        // Handle form submission.
        var form = document.getElementById('payment-form');
        form.addEventListener('submit', function(event) {
            event.preventDefault();

            stripe.createToken(card).then(function(result) {
                if (result.error) {
                    // Inform the user if there was an error.
                    var errorElement = document.getElementById('card-errors');
                    errorElement.textContent = result.error.message;
                } else {
                    // Send the token to your server.
                    stripeTokenHandler(result.token);
                }
            });
        });

        // Submit the form with the token ID.
        function stripeTokenHandler(token) {
            // Insert the token ID into the form so it gets submitted to the server
            var form = document.getElementById('payment-form');
            var hiddenInput = document.createElement('input');
            hiddenInput.setAttribute('type', 'hidden');
            hiddenInput.setAttribute('name', 'stripeToken');
            hiddenInput.setAttribute('value', token.id);
            form.appendChild(hiddenInput);

            // Submit the form
            form.submit();
        }
    </script>
@endsection
