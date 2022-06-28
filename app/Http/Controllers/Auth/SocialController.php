<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;


class SocialController extends Controller
{
    public function redirectToGoogle(Request $request)
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback(Request $request)
    {
        try {
            $user = Socialite::driver('google')->user();
            $finduser = User::where('social_id', $user->id)->where('signup_method', 'Google')->first();
            if ($finduser) {
                Auth::login($finduser);
                if(auth()->user()->id){
                    $finduser->save();
                    if(session()->get('find_car')){
                        return redirect(session()->get('find_car'));
                    }else{
                        return redirect()->route('front.my_vehicle');
                    }
                }
            } else {
                if (!isset($user->email)) {
                    $msg = [
                        'error' => 'Your Email Cannot be Found'
                    ];
                    return redirect(route('front.main'))->with($msg);
                }
                $check = User::where('email',$user->email)->count();
                if ($check > 0) {
                    $msg = [
                        'error' => 'This Email is already exists'
                    ];
                    return redirect(route('front.main'))->with($msg);
                }
                $newUser = new User();
                $newUser->display_name = $user->name;
                $newUser->password = Hash::make(\Str::random(8));
                $newUser->email = $user->email;
                $newUser->social_id = $user->id;
                $newUser->signup_method = 'Google';
                $newUser->markEmailAsVerified();
                $newUser->is_active = 1;
                $newUser->save();

                Auth::login($newUser);
                if(auth()->user()->id){
                    if(session()->get('find_car')){
                        return redirect(session()->get('find_car'));
                    }else{
                        return redirect()->route('front.my_vehicle');

                    }
                }
            }
        } catch (\Exception $e) {
            // dd($e->getMessage());
            $msg = [
                'haserror' => $e->getMessage(),
            ];
            return redirect()->route('front.main')->with($msg);
        }
    }


    public function redirectToFacebook(Request $request)
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function handleFacebookCallback(Request $request)
    {
        try {
            $user = Socialite::driver('facebook')->user();
            $finduser = User::where('social_id', $user->id)->where('signup_method', 'Facebook')->first();
            if ($finduser) {
                Auth::login($finduser);
                if(auth()->user()->id){
                    $finduser->save();
                    if(session()->get('find_car')){
                        return redirect(session()->get('find_car'));
                    }else{
                        return redirect()->route('front.my_vehicle');
                    }
                }
            } else {
                if (!isset($user->email)) {
                    $msg = [
                        'error' => 'Your Email Cannot be Found'
                    ];
                    return redirect(route('front.main'))->with($msg);
                }
                $check = User::where('email',$user->email)->count();
                if ($check > 0) {
                    $msg = [
                        'error' => 'This Email is already exists'
                    ];
                    return redirect(route('front.main'))->with($msg);
                }
                // dd($user);

                $newUser = new User();
                $newUser->display_name = $user->name;
                $newUser->password = Hash::make(\Str::random(8));
                $newUser->email = $user->email;
                $newUser->social_id = $user->id;
                $newUser->signup_method = 'Facebook';
                $newUser->markEmailAsVerified();
                $newUser->is_active = 1;
                $newUser->save();

                Auth::login($newUser);
                if(auth()->user()->id){
                    if(session()->get('find_car')){
                        return redirect(session()->get('find_car'));
                    }else{
                        return redirect()->route('front.my_vehicle');
                    }
                }
            }
        } catch (\Exception $e) {
            // dd($e->getMessage());
            $msg = [
                'haserror' => $e->getMessage(),
            ];
            return redirect()->route('front.main')->with($msg);
        }
    }
}
