<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserAuthController extends Controller
{

    // USER REGISTER    
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);

        $request['password'] = Hash::make($request['password']);
        //$request['password'] = bcrypt($request->password);
        $user = User::create($request->toArray());

        $token = $user->createToken('Laravel passport Grant Client')->accessToken;
        $response = ['token' => $token];

        return response()->json(['Message' => 'User successfully register', 'User details' => $user, 'Token' => $response], 200);
    }

    // USER  LOGIN
    public function login(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:6|confirmed',
        ]);
    
        $user = User::where('email', $request->email)->first();
        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                $token = $user->createToken('Laravel passport Grant Client')->accessToken;
                $response = ['token' => $token];
                return redirect('chart');
                //return response()->json(['Message' => 'User successfully Login', 'User details' => $user, 'Token' => $response], 200);
            } else {
                $response = ["message" => "Password Wrong"];
                return response()->json($response, 422);
            }
        } else {
            $response = ["message" => 'User does not exist'];
            return response()->json($response, 422);
        }
    }
}
