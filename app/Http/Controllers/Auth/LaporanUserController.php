<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LaporanUserController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth:web');
  }

  public function index(){
    return view('auth.laporan_user');
  }
}
