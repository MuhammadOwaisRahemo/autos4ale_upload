<div class="modal fade " id="loginModal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <!-- <i class="fa-solid fa-trash-can" data-dismiss="modal"></i> -->



                <h4 class="col-12 mt-3">
                    <center> <b> Login To Your Account </b> </center>
                    <p class="titleDescription">Welcome back! Login below to view your saved work.</p>
                    <center>
                        <span class="titleDescription text-danger loginError"></span>
                    </center>
                </h4>

            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form method="POST" class="LoginForm" action="{{ route('front.login') }}">
                    <div class="form-row">
                        <div class="col">
                            <input type="email" class="form-control" id="emaillogin" placeholder="Email Address"
                                name="email" style="padding: 25px !important;" required>
                        </div>
                        <div class="col">
                            <input type="password" class="form-control" placeholder="Password" name="password"
                                style="padding: 25px !important;" id="passlogin" required>
                        </div>
                    </div>

                    <div class="form-row mt-4">
                        <div class="col">
                            <button type="submit" class="col-12 btn btn-primary"> <b
                                    class="spinner-border text-white d-none loginLoader"></b> <b
                                    class="loginBtnText">Login</b></button>
                            {{-- <div class="spinner-border text-primary" role="status">
                                <span class="sr-only">Loading...</span>
                              </div> --}}
                        </div>
                    </div>
                    <div class="form-row mt-3">
                        <div class="col">
                            <a href="{{route('auth.facebook')}}"> <button type="button" class="col-12 btn btn-danger">
                                    <span><i class="fa-brands fa-facebook"></i> <b> FACEBOOK LOGIN </b>
                                    </span> </button></a>
                        </div>
                        <div class="col">
                            <a href="{{ route('auth.google') }}"> <button type="button" class="col-12 btn btn-success">
                                    <span><i class="fa-brands fa-google"></i> <b> GOOGLE LOGIN </b>
                                    </span> </button></a>
                        </div>
                    </div>
                    <div class="form-row mt-4">
                        <div class="col-12">
                            <center>

                                <a href="#forgotModal" data-toggle="modal" data-target="#forgotModal">
                                    <p style="font-size: 16px; color: #939FCB; text-decoration: underline;">
                                        Forgot your password?</p>
                                </a>

                            </center>
                        </div>
                    </div>
                    <div class="form-row mt-1">
                        <div class="col-12">
                            <center>

                                <p style="font-size: 12px; color: #939FCB; ">Don’t have an account yet?
                                    Signup <a href="#SignupModal" data-toggle="modal" data-target="#SignupModal"
                                        data-dismiss="modal"
                                        style="text-decoration: underline; color: #939FCB !important;">
                                        here.</a></p>

                            </center>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@section('login-scripts')
    <script>
        $(document).ready(function() {
            validations = $(".LoginForm").validate();
            $('.LoginForm').submit(function(e) {
                e.preventDefault();
                $(".loginBtnText").text('');
                $(".loginLoader").removeClass('d-none');
                validations = $(".LoginForm").validate();
                if (validations.errorList.length != 0) {
                    $(".loginBtnText").text('Login');
                    $(".loginLoader").addClass('d-none');
                    return false;
                }
                var url = $(this).attr('action');
                var param = new FormData(this);
                $.ajax({
                    type: "post",
                    url: url,
                    data: param,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    processData: false,
                    contentType: false,
                    dataType: "json",
                    success: function(res) {
                        if (res.status == 200) {
                            window.location.href = res.redirect;
                        }else{
                            $(".loginBtnText").text('Login');
                            $(".loginLoader").addClass('d-none');
                            $(".loginError").text(res.error);
                        }
                    }
                });
            })
        });
    </script>
@endsection
