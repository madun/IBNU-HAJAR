<?php

namespace App\Http\Controllers\Auth;

use App\Model\User\User;
use App\Http\Controllers\Controller;
// use Illuminate\Support\Facades\Validator;
// use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;

class RegisterController extends Controller
{

    public function register(Request $request){
      $this->validation($request);
      // User::create($request->all());
      $this->createUser($request->all());
      return redirect()->route('user.login')->with('Status', 'Success Register, Lets Login!');
      // return 'hai';
    }

    public function validation($request){ // unique: users table
      $this->validate($request, [
          'email' => 'required|email|unique:users|max:255',
          'name' => 'required|max:255',
          'password' => 'required|confirmed|max:255',
      ]);
    }

    private function createUser($request){
      return User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
        ]);
    }
    // use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    // protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('guest:web');
    // }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    // protected function validator(array $data)
    // {
    //     return Validator::make($data, [
    //         'name' => 'required|string|max:255',
    //         'email' => 'required|string|email|max:255|unique:users',
    //         'password' => 'required|string|min:6|confirmed',
    //     ]);
    // }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    // protected function create(array $data)
    // {
    //     return User::create([
    //         'name' => $data['name'],
    //         'email' => $data['email'],
    //         'password' => bcrypt($data['password']),
    //     ]);
    // }
}
