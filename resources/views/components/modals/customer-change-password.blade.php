<div class="modal fade email_confrim_modal" id="changePassword" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content website_data">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLongTitle">Change Password</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div><br>
            <form action="{{ route('admin.customer.change_password') }}" id="changePassword"
                class="changePassword ajaxForm" method="post">
                @csrf
                <input type="hidden" value="" id="customer_id" name="id">
                <div class="modal-body">

                    <div class="form-group">
                        <label for="old_password">Current Passowrd</label>
                        <input type="password" class="form-control" name="old_password" placeholder="Current Password"
                            id="old_password" required>
                        <span class="text-danger"></span>
                    </div>
                    <div class="form-group">
                        <label for="new_password">New Passowrd</label>
                        <input type="password" class="form-control" name="new_password" placeholder="New Password"
                            id="new_password" required>
                        <span class="text-danger"></span>
                    </div>
                    <div class="form-group">
                        <label for="conf_password">Confrim Passowrd</label>
                        <input type="password" class="form-control" name="conf_password"
                            placeholder="Confrim Password" id="conf_password" required>
                        <span class="text-danger"></span>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><b>Cancel</b></button>
                    <button type="submit" style="width: 20%;" class="btn btn-primary"><b
                            class="spinner-border text-white d-none confrimLoader"
                            style="width: 25%;height: 17px;"></b><b class="confrimBtnText">Submit</b> </button>
                </div>
            </form>
        </div>

        <div class="modal-content  social_data d-none">
            <div class="modal-body">

                    Password cannot be updated if your account was created using
                    Google
                    or Facebook.

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal"><b>OK</b></button>
            </div>
            </form>
        </div>
    </div>
</div>
