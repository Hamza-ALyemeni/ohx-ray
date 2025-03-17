<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\VerificationRequest;
use App\Http\Resources\User\UserCollection;
use App\Model\Country;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Handles Login Request
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(LoginRequest $request)
    {
        $credentials = request(['email', 'password']);
        if(!Auth::attempt($credentials) )
            return response()->json([
                'success' => 0,
                'msg' => 'Invalid Email or Password'
            ], 200);

        $user = $request->user();
        $user = User::with('company')->find($user->id);

        if($user->is_verified == 1){
            $tokenResult = $user->createToken('Personal Access Token');
            return response()->json([
                'success' => 1,
                'access_token' => 'Bearer '.$tokenResult->accessToken,
                'data' => new UserCollection($user),
                'token_type' => 'Bearer',
                'msg' => 'You have successfully logged in.'
            ], 200);
        }else{
            return response()->json([
                'success' => 2,
                'data' => new UserCollection($user),
                'msg' => 'Account Not Verified'
            ], 200);
        }

    }


    /**
     * Logout user (Revoke the token)
     *
     * @return [string] message
     */
    public function logout(Request $request)
    {
        $user = $request->user();
        $user->token()->revoke();

        return response()->json([
            'success' => 1,
            'msg' => 'You have signed out successfully'
        ], 200);
    }

    /**
     * Get the authenticated User
     *
     * @return [json] user object
     */
    public function user(Request $request)
    {
        $user = User::with('company')->find($request->user()->id);

        return response()->json([
            'success' => 1,
            'data' => new UserCollection($user),
        ], 200);
    }
    public function verification(VerificationRequest $request)
    {
        $user = User::with('company')->where('email', $request->email)->where('verification_code', $request->code)->first();
        if ($user) {
            $user->is_verified = 1;
            $user->save();
            $tokenResult = $user->createToken('Personal Access Token');

            return response()->json([
                'success' => 1,
                'access_token' => 'Bearer '.$tokenResult->accessToken,
                'data' => new UserCollection($user),
                'token_type' => 'Bearer',
                'msg' => 'Verified Successfully'
            ], 200);

        } else {
            return response()->json([
                'success' => 0,
                'msg' => 'Invalid Verification code'
            ], 200);
        }
    }
    public function countries()
    {
        return response()->json([
            'success' => 1,
            'data' => Country::all()
        ], 200);
    }
}
