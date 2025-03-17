<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Validator;
class ForgotPasswordController extends Controller
{
    public function sendResetLinkEmail(Request $request)
    {
        $rules = array(
            'email' => 'required|email|exists:users,email'
        );

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return response()->json([
                'success' => 0,
                'msg' => implode(",",$validator->messages()->all())
            ], 200);
        } else {
            $credentials = request()->validate(['email' => 'required|email']);

            Password::sendResetLink($credentials);
            return response()->json(['success' => 1,"msg" => 'Reset password link sent on your email id.']);

        }
    }


    public function reset() {
        $credentials = request()->validate([
            'email' => 'required|email',
            'token' => 'required|string',
            'password' => 'required|string|confirmed'
        ]);

        $reset_password_status = Password::reset($credentials, function ($user, $password) {
            $user->password = $password;
            $user->save();
        });

        if ($reset_password_status == Password::INVALID_TOKEN) {
            return response()->json(['success' => 0,"msg" => "Invalid token provided"], 400);
        }

        return response()->json(['success' => 1,"msg" => "Password has been successfully changed"]);
    }
}
