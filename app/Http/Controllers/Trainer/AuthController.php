<?php

namespace App\Http\Controllers\Trainer;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;


class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => 'required',
            'device_id' => 'required',
        ]);
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $token = Str::random(80);
            Auth::user()->api_token = $token;
            Auth::user()->device_id = $request->device_id;
            Auth::user()->save();

            return response()->json(['token' => $token, 'user' => Auth::user()], 200);
        }
        return response()->json(["status" => "Incorrect Details"], 403);
    }

    public function logout()
    {
        Auth::user()->api_token = "";
        Auth::user()->save();
        return response()->json(["message" => "Successfully logged out"]);
    }


    public function forgotPassword(Request $request)
    {
        $validation = $request->validate([
            'email' => ['required', 'string', 'email', 'max:255'],
        ]);

        $user = User::where("email", $request->email)->first();
        if ($user) {
            $user->remember_token = mt_rand(100000, 999999);
            $user->save();
            Mail::raw("Your Password reset code is: " . $user->remember_token, function ($message) use ($user) {
                $message->to($user->email)->subject("Password reset code");
            });
            return \response()->json(["We have e-mailed your password reset code!"], 200);
        }
        return \response()->json(["user not registered"], 404);
    }


    public function verifyCode(Request $request)
    {
        $user = User::where([
            ["email", '=', $request->email],
            ["remember_token", '=', $request->code],
        ])->first();
        if ($user) {
            $user->remember_token = Hash::make($user->remember_token);
            $user->save();
            return \response()->json(["status" => "verified", "token" => $user->remember_token], 200);
        }
        return \response()->json(["status" => "UnVerified"], 403);
    }

    public function updatePassword(Request $request)
    {

        $request->validate([
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8'],
            'password_confirmation' => 'required',
            'token' => 'required',
        ]);

        $user = User::where([
            ["email", '=', $request->email],
            ["remember_token", '=', $request->token],
        ])->first();

        if ($request->password != $request->password_confirmation) {
            return \response()->json(["status" => "Passwords do not match."], 403);
        }

        if ($user) {
            $user->password = Hash::make($request->password);
            $user->remember_token = "";
            $user->save();
            return \response()->json(["status" => "Password has been Updated"], 200);
        }
        return \response()->json(["status" => "Email doesn't exist or the token is invalid"], 403);
    }
}
