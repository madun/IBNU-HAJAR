<?php

namespace App\Http\Controllers\qrcode;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\User\User;
use Illuminate\Support\Facades\Hash;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class qrcodeController extends Controller
{

    public function getQRCODE(Request $request){
      $generateQR = Hash::make($request->n_noidentitas);
      // $generateQR = $request->n_noidentitas;
      return view('qrcode')->with('generateQR', $generateQR);
    }

}
