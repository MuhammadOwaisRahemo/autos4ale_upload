<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Notification;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    // public function showRegistrationForm()
    // {
    //     return view('front.pages.presale');
    // }

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'first_name' => ['required', 'string', 'max:80'],
            'last_name' => ['required', 'string', 'max:80'],
            'email' => ['string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:80'],
            'email' => ['required', 'string', 'email', 'max:190', 'unique:users'],
            'password' => ['min:8','required_with:conf_password','same:conf_password'],
        ]);

        if ($validator->fails()) {
            return ['errors' => $validator->errors()];
        }

        $user = new User();
        $user->email = $request->email;
        $user->signup_method = 'Website';
        $user->is_active = 0;
        $user->password = Hash::make($request->password);
        $user->save();
        if($user->id){
            Auth::guard('user')->loginUsingId($user->id);
            $data = [
                'status' => 200,
                'success' => 'Account Created Successfully',
                'redirect' => route('front.dashboard'),
            ];
        }else{
            $data = [
                'status' => 500,
                'error' => 'Something Went Wrong!',
                'redirect' => route('front.home'),
            ];
        }

        return response()->json($data);
    }


    public function saveUser(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => ['required', 'string', 'email', 'max:190', 'unique:users'],
        ]);

        if ($validator->fails()) {
            return ['errors' => $validator->errors()];
        }

        $user = new User();
        $user->email = $request->email;
        $user->save();

        $msg = [
            'redirect' => route('register.createPassword',$user->hashid),
        ];

        return response()->json($msg);
    }

    public function createPassword(Request $request)
    {
        $data = array(
            'title' => 'Create Password',
            'id' => $request->id
        );

        return view('front.pages.login_register.create_password')->with($data);
    }

    public function setUserPassword(Request $request)
    {
        $rule = [
            'password' => ['required',Password::min(8)->mixedCase()
            ->symbols()]
        ];

        $validator = Validator::make($request->all(), $rule);

        if ($validator->fails()) {
            return ['errors' => $validator->errors()];
        }

        if ($request->password != $request->confirmed) {
            $msg = [
                'error' => 'Your Conformed Password Is Not Match With Password. Try Again !',
            ];
        }else{
            $user = User::hashidFind($request->user_id);
            $user->password = Hash::make($request->password);
            $user->signup_method = 'E-mail';
            $user->is_active = 1;
            $user->save();
            event(new Registered($user));
            Auth::guard('user')->loginUsingId($user->id);

            $msg = [
                'success' => 'Password Created Successfully',
                'redirect' => route('front.home'),
            ];
        }

        return response()->json($msg);
    }
}