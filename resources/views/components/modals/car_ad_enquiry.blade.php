<div class="modal fade" id="car_ad_enquiry" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form method="POST" action="{{ route('front.save_enquiry') }}" class="ajaxForm">
            @csrf
            <input type="hidden" name="car_ad_id" value="{{ $adId ?? '' }}">
            <input type="hidden" name="dealer_id" value="{{ $dealerId ?? '' }}">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Your enquiry</h5>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    {{-- <p class="text-center">Contact Oxford Audi about this MINI Hatch</p> --}}
                    <div class="row" style="line-height: 50px;">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="first_name" style="float: left;">First Name</label>
                                <input type="text" class="form-control" name="first_name" id="first_name"
                                    aria-describedby="first_name" placeholder="Enter email" required value="{{ auth('user')->user()->first_name }}">

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="last_name" style="float: left;">Last Name</label>
                                <input type="text" class="form-control" id="last_name"
                                    placeholder="Last Name" name="last_name" required  value="{{ auth('user')->user()->last_name }}">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="email" style="float: left;">Email</label>
                                <input type="email" class="form-control" id="email"
                                    placeholder="example@gmail.com" name="email" required  value="{{ auth('user')->user()->email }}">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="ph_number" style="float: left;">Phone number (optional)</label>
                                <input type="text" class="form-control" id="ph_number"
                                    placeholder="Phone Number" name="ph_number">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="message" style="float: left;">Your message (optional)</label>
                                <textarea name="message" id="message" cols="50" rows="3" placeholder="Message"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" id="enquiry_btn">Submit</button>
                </div>
        </form>
    </div>
</div>
</div>
