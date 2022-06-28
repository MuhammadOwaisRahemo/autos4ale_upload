<div class="modal fade " id="SignupModal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <!-- <i class="fa-solid fa-trash-can" data-dismiss="modal"></i> -->



                <h4 class="col-12 mt-3">
                    <center> <b> Sign Up For Free And
                            Get More Out Of Your Work </b> </center>
                    <p class="titleDescription">Sign up for a free account to download your designs,
                        build multiple pages, and create additional projects.</p>
                </h4>

            </div>


            <!-- Modal body -->
            <div class="modal-body">
                <form method="POST" class="ajaxForm" action="{{ route('register.save') }}">

                    <div class="form-row">
                        <div class="col">
                            <input type="text" class="form-control" id="name" placeholder="Full Name"
                                name="name" style="padding: 25px !important;" required>
                        </div>
                        <div class="col">
                            <input type="email" class="form-control" id="email"
                                placeholder="Email Address" name="email"
                                style="padding: 25px !important;" required>
                                <span class="text-danger signup_error email_error"></span>

                        </div>
                    </div>

                    <div class="form-row mt-2">
                        <div class="col">
                            <input type="password" class="form-control" placeholder="Password"
                                name="password" style="padding: 25px !important;" required>
                                <span class="text-danger signup_error password_error"></span>
                        </div>
                        <div class="col">
                            <input type="password" class="form-control" placeholder="Confirm Password"
                                name="conf_password" style="padding: 25px !important;" required>
                                <span class="text-danger signup_error conf_password_error"></span>
                        </div>
                    </div>

                    <div class="form-row mt-4">
                        <div class="col">
                            <button type="submit" class="col-12 btn btn-primary"> <b class="spinner-border text-white d-none registerLoader"></b> <b class="registerBtnText">Sign Up</b></button></a>

                        </div>
                    </div>
                    <div class="form-row mt-3">
                        <div class="col">
                            <a href="{{ route('auth.facebook') }}"> <button type="button" class="col-12 btn btn-danger">
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

                                <p style="font-size: 12px; color: #939FCB; ">Don’t have an account yet?
                                    Login <a href="#loginModal" data-toggle="modal"
                                        data-target="#loginModal" data-dismiss="modal"
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
@section('signup-scripts')
    <script>
    $(document).ready(function() {
            validations = $(".ajaxForm").validate();
            $('.ajaxForm').submit(function(e) {
                e.preventDefault();
                $(".registerBtnText").text('');
                $(".registerLoader").removeClass('d-none');
                validations = $(".ajaxForm").validate();
                if (validations.errorList.length != 0) {
                    $(".registerBtnText").text('Sign Up');
                    $(".registerLoader").addClass('d-none');
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
                            $(".registerBtnText").text('Sign Up');
                            $(".registerLoader").addClass('d-none');
                            $.each(res.errors, function(index, value) {
                            $('.' + index + "_error").html(value);
                        });
                        }
                    }
                });
            })
        });
</script>
@endsection
