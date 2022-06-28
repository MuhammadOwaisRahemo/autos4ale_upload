<div class="modal fade email_confrim_modal" id="emailpassword" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLongTitle">Please Confirm</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div><br>
                <form action="{{ route('front.user_profile.confrim_password') }}" id="emailPassForm" class="emailPassForm" method="post">
                    <div class="modal-body">

                        <div class="form-group">
                            <input type="password" class="form-control" name="email_password" id="emailpass"
                                placeholder="Confrim Password" required>
                                <span class="email_pass_error text-danger"></span>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="submit" style="width: 20%;" class="btn btn-primary"><b
                            class="spinner-border text-white d-none confrimLoader"  style="width: 25%;height: 17px;"></b><b class="confrimBtnText">Submit</b> </button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"><b>Cancel</b></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@section('page-scripts')
<script>
    $("#updateEmail").click(function(e) {
        e.preventDefault();
        $("#emailpassword").modal('show');
    });

    $(document).ready(function() {
        validations = $(".emailPassForm").validate();
        $(".emailPassForm").submit(function(e) {
            e.preventDefault();
            $(".confrimBtnText").text('');
            $(".confrimLoader").removeClass('d-none');
            $(".email_pass_error").text('');
            validations = $(".emailPassForm").validate();
            if (validations.errorList.length != 0) {
                $(".confrimBtnText").text('Submit');
                $(".confrimLoader").addClass('d-none');
                return false;
            }
            var url = $(this).attr('action');
            var param = new FormData(this);
            var password = $("#emailpass").val();
            $.ajax({
                type: "post",
                url: url,
                data: param,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                processData: false,
                contentType: false,
                // dataType: "json",
                success: function(res) {
                    if (res.status == 200) {
                        $('.updateEmail').prop('readonly', false);
                        $("#emailpassword").modal('hide');
                        $(".email_confrim_modal").removeAttr('id');
                    }else{
                        $(".email_pass_error").text(res.error);
                    }
                    $(".confrimBtnText").text('Submit');
                    $(".confrimLoader").addClass('d-none');
                }
            });
        });
    });
</script>
@endsection
