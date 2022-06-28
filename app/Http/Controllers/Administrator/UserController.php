<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'All Users',
            'data' => User::latest()->paginate(10),
        ];
        // dd(User::latest()->paginate(10));
        return view('admin.web_users.index')->with($data);
    }

    public function seller_details(Request $request)
    {
        $user = User::where('id',hashids_decode($request->id))->where('trade_seller',1)->first();
        
        if ($user) {
            $data = [
                'title' => 'Trade Details',
                'data' => $user
            ];

           return view('admin.web_users.user_trade_details')->with($data);
        }

    }
}
