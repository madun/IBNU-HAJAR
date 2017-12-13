<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class LoginController extends Controller
{

  protected $redirectTo = '/back';

  public function __construct()
  {
      $this->middleware('guest:admin', ['except' => ['adminLogout']]); //
  }

  public function showLoginForm(){
    return view('admin.login');
  }

  public function login(Request $request)
  {
    $this->validate($request, [
      'email' => 'required|email',
      'password' => 'required|min:6'
    ]);

    if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
      // if success
      return redirect()->intended(route('admin.dashboard'));
    }

    return redirect()->back()->withInput($request->only('email'));
  }

  public function adminLogout()
  {
      Auth::guard('admin')->logout();

      return redirect()->route('admin.login');
      // return 'string';
  }

  public function guard(){
    Auth::guard('admin');
  }

}
