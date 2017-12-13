<?php

namespace App\Http\Controllers\Admin\wilayah;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\User\User;
use App\Model\Admin\propinsi;
use App\Model\Admin\Kabupaten;
use App\Model\Admin\Kecamatan;
use App\Model\Admin\Kelurahan;

class wilayahController extends Controller
{

    public function getPropinsi(){
      $prop = propinsi::orderBy('id_prov','asc')->get();
      return response()->json(array('data' => $prop));
    }

    public function getKabupaten(Request $request){
      $kabupaten = Kabupaten::where('id_prov','=',$request->propid)->get();
      return response()->json(array('data' => $kabupaten, 'propid'=>$request->propid));
    }

    public function getKecamatan(Request $request){
      $Kecamatan = Kecamatan::where('id_kab','=',$request->kabid)->get();
      return response()->json(array('data' => $Kecamatan, 'kabid'=>$request->kabid));
    }

    public function getKelurahan(Request $request){
      $Kelurahan = Kelurahan::where('id_kec','=',$request->kecid)->get();
      return response()->json(array('data' => $Kelurahan, 'id_kec'=>$request->kecid));
    }

}
