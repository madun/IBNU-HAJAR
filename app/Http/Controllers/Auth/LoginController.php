<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
// use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use Illuminate\Http\Request;

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

    // use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/umart';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:web', ['except' => ['logout', 'userLogout']]);
    }

    public function showLoginForm(){
      return view('auth.login');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
          'username' => 'required',
          'password' => 'required|min:6'
        ]);
        // return $request->n_noidentitas;
        if (Auth::guard('web')->attempt(['username' => $request->username, 'password' => $request->password], $request->remember)) {
          // if success
          return redirect()->intended(route('home'));
        }

        return redirect()->back()->withInput($request->only('username'))->withErrors(['Password / Username Tidak Diketahui']);

    }

    public function userLogout()
    {
        Auth::guard('web')->logout();

        return redirect('/');
    }

}
