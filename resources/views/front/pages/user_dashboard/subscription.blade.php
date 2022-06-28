@extends('layouts.front_dashboard')
@section('content')
<div class="logintop_content">
    <h1 class="fw-bold">Subscription</h1>
</div>

<div class="user_form subscription mt-4">
    <div class="row">
        <div class="col-12">
            <h4>How you hear from us</h4>
            <p>
                Easily manage what we send you. Any emails will be sent to: <a href="mailto:info@email.com" class="text-theme text-decoration-none">info@email.com</a>
            </p>

            <h4>My car alerts</h4>
            <p>
                We’ll send you reminders about important deadlines for cars you own
            </p>

            <h4>Your car</h4>
            <p>
                Audi R8 5.2 FSI V10 Performance Edition S Tronic Euro 6 (s/s) 2dr
            </p>

            <h4>Remind me</h4>
            <p>Audi R8 5.2 FSI V10 Performance Edition S Tronic Euro 6 (s/s) 2dr</p>

            <div class="col-12">
                <div class="row">
                    <div class="col-md-4">
                        <label class="check_container checkboxes">
                            <input type="checkbox">
                            <span class="checkmark"></span>
                            1 day before
                        </label>
                    </div>
                    <div class="col-md-4">
                        <label class="check_container checkboxes">
                            <input type="checkbox">
                            <span class="checkmark"></span>
                            7 day before
                        </label>
                    </div>

                    <div class="col-md-4">
                        <label class="check_container checkboxes">
                            <input type="checkbox">
                            <span class="checkmark"></span>
                            30 day before
                        </label>
                    </div>
                </div>
            </div>

            <h4 class="mt-3">Remind me about</h4>

            <div class="col-12 mt-3">
                <div class="row">
                    <div class="col-md-4">
                        <label class="check_container checkboxes">
                            <input type="checkbox">
                            <span class="checkmark"></span>
                            MOT reminders
                        </label>
                    </div>
                    <div class="col-md-4">
                        <label class="check_container checkboxes">
                            <input type="checkbox">
                            <span class="checkmark"></span>
                            Insurance reminders
                        </label>
                    </div>

                    <div class="col-md-4">
                        <label class="check_container checkboxes">
                            <input type="checkbox">
                            <span class="checkmark"></span>
                            Vehicle tax reminders
                        </label>
                    </div>
                </div>
            </div>


            <div class="col-12 mt-3">
                <div class="row">
                    <div class="col-md-4">
                        <label class="check_container checkboxes">
                            <input type="checkbox">
                            <span class="checkmark"></span>
                            Service reminders
                        </label>
                    </div>
                    <div class="col-md-4">
                        <label class="check_container checkboxes">
                            <input type="checkbox">
                            <span class="checkmark"></span>
                            Warranty reminders
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
