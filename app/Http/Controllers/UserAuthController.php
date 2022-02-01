<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use  toastr;

class UserAuthController extends Controller
{

    // USER REGISTER    
    // public function register(Request $request)
    // {
    //     $validator = Validator::make($request->all(), [
    //         'name' => 'required|string|max:255',
    //         'email' => 'required|string|email|max:255|unique:users',
    //         'password' => 'required|string|min:6|confirmed',
    //     ]);

    //     $request['password'] = Hash::make($request['password']);
    //     //$request['password'] = bcrypt($request->password);
    //     $user = User::create($request->toArray());

    //     $token = $user->createToken('Laravel passport Grant Client')->accessToken;
    //     $response = ['token' => $token];

    //     return response()->json(['Message' => 'User successfully register', 'User details' => $user, 'Token' => $response], 200);
    // }

    // USER  LOGIN
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        if (Auth::attempt($credentials)) {
             //$res=auth::user()==null;
            //$request->session()->regenerate();
            return response()->json([
                'message' => "successfully login",
                "location" => "http://localhost/chart",
                   //'result' => $res,
            ]);
            // return redirect()->intended('chart');
        } else {
            return response()->json([
                "Errors" => [
                    "password" => "Invalid credentials try again"
                ]
            ], 401);
        }
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->intended('login');
    }
}
