<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('guest')->except('logout');
    // }

    public function login(Request $request)
    {

        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if (Auth::guard('user')->attempt(['email' => $request->email, 'password' => $request->password])) {
            if (auth('user')->user()->id) {
                $user = User::where('id',auth()->user()->id)->first();
                $user->save();
                if(session()->get('find_car')){
                    $data = [
                        'success' => 'Login Successfull',
                        'redirect' => session()->get('find_car'),
                    ];
                }else{
                    $data = [
                        'success' => 'Login Successfull',
                        'redirect' => route('front.my_vehicle'),
                    ];
                }

            }
        }else{
            $data = [
                'error' => 'These credentials do not match our records.',
            ];

        }
        return response()->json($data);

    }

    public function logout()
    {
        Auth::guard('user')->logout();
        return redirect(route('front.main'));
    }
}
