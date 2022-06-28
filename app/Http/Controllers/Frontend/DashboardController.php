<?php

namespace App\Http\Controllers\Frontend;

use App\Helpers\CommonHelpers;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Validator;

class DashboardController extends Controller
{
    public function index()
    {
        $data = array(
            'title' => 'My Vehicle',
        );
        return view('front.pages.user_dashboard.my_vehicle')->with($data);
    }

    public function personal_details()
    {
        $data = array(
            'title' => 'Personal Details',
        );
        return view('front.pages.user_dashboard.personal_details')->with($data);
    }

    public function edit_personal_details()
    {
        $data = array(
            'title' => 'Edit Personal Details',
        );
        return view('front.pages.user_dashboard.edit_personal_details')->with($data);
    }

    public function save_personal_details(Request $request)
    {
        $rules = [
            'first_name' => 'required',
            'sur_name' => 'required',
            'display_name' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withInput($request->only($request->all()))
                ->withErrors($validator->errors());
        }

        if ($id = auth('user')->user()->id) {
            $user = User::find($id);
            $user->first_name = $request->first_name;
            $user->sur_name = $request->sur_name;
            $user->display_name = $request->display_name;
            $user->save();
            return redirect(route('front.personal_details'));
        } else {
            return redirect()
                ->back()
                ->withInput($request->only($request->all()))
                ->withErrors(['error' => 'Some thing went wronge.']);
        }
    }

    public function edit_trade_seller()
    {
        $data = [
            'title' => 'Personal Details'
        ];

        return view('front.pages.user_dashboard.edit_trade_seller')->with($data);
    }

    public function save_trade_details(Request $request)
    {
        $rules = [
            'trade_name' => 'required',
            'address' => 'required',
            'location' => 'required',
            'country' => 'required',
            'post_code' => 'required',
            'phone_number' => 'required',
            'trade_logo' => 'required',
            'insurance_certificate' => 'required',
            'website_url' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withInput($request->only($request->all()))
                ->withErrors($validator->errors());
        }

        if ($id = auth('user')->user()->id) {
            $user = User::find($id);
            if ($request->hasFile('insurance_certificate')) {
                $insurance_certificate = CommonHelpers::uploadSingleFile($request->file('insurance_certificate'), 'front_assets/uploads/trade_images/');
                if (is_array($insurance_certificate)) {
                    return response()->json($insurance_certificate);
                }
                if (file_exists($user->insurance_certificate)) {
                    @unlink($user->insurance_certificate);
                }
                $user->insurance_certificate = $insurance_certificate;
            }
            if ($request->hasFile('trade_logo')) {
                $trade_logo = CommonHelpers::uploadSingleFile($request->file('trade_logo'), 'front_assets/uploads/trade_images/');
                if (is_array($trade_logo)) {
                    return response()->json($trade_logo);
                }
                if (file_exists($user->trade_logo)) {
                    @unlink($user->trade_logo);
                }
                $user->trade_logo = $trade_logo;
            }

            $user->trade_name = $request->trade_name;
            $user->location = $request->location;
            $user->address = $request->address;
            $user->country = $request->country;
            $user->postal_code = $request->post_code;
            $user->phone_number = $request->phone_number;
            $user->website_url = $request->website_url;
            $user->trade_seller = 1;
            $user->save();
            return redirect(route('front.personal_details'));
        } else {
            return redirect()
                ->back()
                ->withInput($request->only($request->all()))
                ->withErrors(['error' => 'Some thing went wronge.']);
        }
    }

    public function reset_password()
    {
        $data = [
            'title' => 'Personal Details'
        ];

        return view('front.pages.user_dashboard.reset_password')->with($data);
    }

    public function save_password(Request $request)
    {
        $rules = [
            'old_password' => ['required'],
            'new_password' => ['required', Password::min(8)->letters()->mixedCase()->numbers()->symbols(), 'required_with:confrim_password', 'same:confrim_password'],
            'confrim_password' => ['required'],
        ];
        $customMessages = [
            'new_password.same' => 'Your Confrim Password Does Not Match To New Password'
        ];
        $validator = Validator::make($request->all(), $rules, $customMessages);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withInput($request->only($request->all()))
                ->withErrors($validator->errors());
        }

        if ($id = auth()->user()->id) {

            $user = User::find($id);
            if (!(Hash::check($request->old_password, $user->password))) {
                $error = ['old_password' => [0 => 'Your Old Password Does Not Match Our Records']];
                return redirect()
                    ->back()
                    ->withInput($request->only($request->only('old_password')))
                    ->withErrors($error);
            }

            $user->password = Hash::make($request->new_password);
            $user->save();

            return redirect(route('front.personal_details'));
        } else {
            return redirect()
                ->back()
                ->withInput($request->only($request->all()))
                ->withErrors(['error' => 'Some thing went wronge.']);
        }
    }

    public function subscription()
    {
        $data = [
            'title' => 'Subscription'
        ];
        return view('front.pages.user_dashboard.subscription')->with($data);
    }

    public function payment_history()
    {
        $data = [
            'title' => 'Payment History'
        ];
        return view('front.pages.user_dashboard.payment_history')->with($data);
    }

    public function payment_method()
    {
        $data = [
            'title' => 'Payment Method'
        ];
        return view('front.pages.user_dashboard.payment_method')->with($data);
    }

    public function confrim_password(Request $request)
    {
        $rules = ['email_password' => ['required']];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return ['error' => 'The password field is required.'];
        }

        $user = User::find(auth()->user()->id);
        if (!(Hash::check($request->email_password, $user->password))) {
            return response()->json([
                'error' => 'Your Password Does Not Match Our Records.',
            ]);
        }

        return response()->json(['status' => 200]);
    }

}
