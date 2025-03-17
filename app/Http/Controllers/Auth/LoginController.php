<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Auth as FacadesAuth;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {
        $input = $request->all();

        $this->validate($request, [
            'email' => 'required',
            'password' => 'required',
        ]);

        $userdata = array(

            'email'  => $input['email'],
            'password'     => $input['password']
        );


        if(auth()->attempt($userdata,true))
        {
            if(FacadesAuth::user()->is_verified == 1)
                return redirect('/');
            else
                return redirect('verify');
        }else{
            return redirect()->route('login')
                ->withErrors(['email'=>'Email-Address And Password Are Wrong.']);
        }

    }

    public function check()
    {
        if(FacadesAuth::check()){
            if(FacadesAuth::user()->is_verified == 1)
                return redirect('/');
            else
                return redirect('verify');
        }else{
            return redirect('login');
        }
    }
}
