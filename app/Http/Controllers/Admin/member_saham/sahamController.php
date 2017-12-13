<?php

namespace App\Http\Controllers\Admin\member_saham;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\User\User;
use App\Model\Admin\saham;

class sahamController extends Controller
{
    public function addSahamView(){
      $member = User::all();
      return view('admin.member_saham.addSaham', compact('member'));
    }

    public function storeSaham(Request $request){
      $this->validate($request, [

        'id' => 'required',
        'jml_saham1' => 'required',

      ]);
      $saham = new saham;
      if ($request->id_saham) {
        $saham = saham::find($request->id_saham);
        $msg = 'Data Saham Has Been Edited!';
      } else {
        $msg = 'Data Saham Has Been Added!';
      }
      $saham->user_id = $request->id;
      $saham->jml_saham1 = $request->jml_saham1;
      $saham->jml_saham2 = $request->jml_saham2;
      $saham->jml_saham3 = $request->jml_saham3;
      $saham->jml_saham4 = $request->jml_saham4;
      $saham->jml_saham5 = $request->jml_saham5;

      $result = $saham->saveOrFail();
      if ($result) {
        return redirect()->route('member_umart.index')->with('status', $msg);
      } else {
        return redirect()->route('member_umart.index')->withErrors('status', 'Some Thing Wrong!');
      }

    }

    public function getDetailSaham(Request $request){
      // $saham = $request->user_id;
      $saham = saham::where('user_id','=',$request->user_id)->first();
      return response()->json(array('data' => $saham, 'user_id'=>$request->user_id));
    }
}
