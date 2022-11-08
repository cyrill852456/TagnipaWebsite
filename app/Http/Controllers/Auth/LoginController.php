<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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
        $this->validate($request,[
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if(auth()->attempt(['email'=>$input["email"],'password'=>$input['password']]))
        {
            if(auth()->user()->role == 'junkshop_admin')
            {
                return redirect()->route('home.junkshop');
            }
            else if(auth()->user()->role == 'agent')
            {
                return redirect()->route('home.agent');
            }
            else
            {
                return redirect()->route('admin_dashboard');
            }
        }
        else
        {
            return redirect()->route('login')->with('fail','These credentials do not match our records');
        }
    }
}
