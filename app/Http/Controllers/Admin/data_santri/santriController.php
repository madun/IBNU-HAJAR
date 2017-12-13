<?php

namespace App\Http\Controllers\Admin\data_santri;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use App\Model\User\User;
use App\Model\Admin\propinsi;
use App\Model\Admin\Kabupaten;
use App\Model\Admin\Kecamatan;
use App\Model\Admin\Kelurahan;
use Auth;
// use App;

class santriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $member = User::get();
      // $member = User::all();->first()
      // $generateQR = $member->get('n_noidentitas');
      return view('admin.data_master.data_santri.list_member', compact('member'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.data_master.data_santri.addMember');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      // return $request->kecamatan;
      $this->validate($request, [

          'ktp' => 'required|unique:users|max:16',
          'thn_ajaran' => 'required',
          'nama_anggota' => 'required|max:255',
          'propinsi' => 'required',
          'kabupaten' => 'required',
          'kecamatan' => 'required',
          'kelurahan' => 'required',
          'alamat' => 'required',
          'tanggal_lahir' => 'required',
          'jenis_kelamin' => 'required',
          'golongan_darah' => 'required',
          'status' => 'required',
          'agama' => 'required',
          'pekerjaan' => 'required|max:40',
          'rtrw' => 'required',
          'mobile' => 'required|max:13',
          'email' => 'required|max:100',
          'username' => 'required',
          'password' => 'required',

      ]);
      $user = new User;
      if ($request->user_id) {
        $user = User::find($request->user_id);
        $msg = 'Data Santri Has Been Edited!';
      } else {
        $msg = 'Data Santri Has Been Added!';

        // function get jumlah user perkelurahan
        $getLastRecord = User::where('kelurahan', '=', $request->kelurahan)->count();
        if ($getLastRecord == '0' || $getLastRecord == null) {
          $getLastRecord = 1;
        } else {
          // jika id keluahan yg sama sudah ada maka + 1
          $getLastRecord = $getLastRecord+1;
        }
        // $getLastRecord = $getLastRecord-$lastFromAdzky;
        $user->n_noidentitas = substr($request->thn_ajaran, -2).str_pad($getLastRecord, 6, '0', STR_PAD_LEFT);
      }

      $user->id = $request->user_id;
      $user->ktp = $request->ktp;
      $user->thn_ajaran = $request->thn_ajaran;
      $user->nama_anggota = $request->nama_anggota;
      $user->propinsi = $request->propinsi;
      $user->kabupaten = $request->kabupaten;
      $user->kecamatan = $request->kecamatan;
      $user->kelurahan = $request->kelurahan;
      $user->alamat = $request->alamat;
      $user->tanggal_lahir = $request->tanggal_lahir;
      $user->jenis_kelamin = $request->jenis_kelamin;
      $user->goldarah = $request->golongan_darah;
      $user->status = $request->status;
      $user->agama = $request->agama;
      $user->pekerjaan = $request->pekerjaan;
      $user->rtrw = $request->rtrw;
      $user->nohp = $request->mobile;
      $user->email = $request->email;
      $user->username = $request->username;
      $user->password = Hash::make($request->password);
      $user->admin_entry = Auth::user()->id;

      // return $user->n_noidentitas;

      // $result = $user->saveOrFail();
      $result = $user->save();
      if ($result) {
        return redirect()->route('santri.index')->with('status', $msg);
        // return $user;
      } else {
        return redirect()->route('santri.index')->withErrors('status', 'Some Thing Wrong!');
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit_member = User::where('id','=',$id)->first();
        $getProp = propinsi::where('id_prov', '=', $edit_member->propinsi)->first();
        $getKab = Kabupaten::where('id_kab', '=', $edit_member->kabupaten)->first();
        $getKec = Kecamatan::where('id_kec', '=', $edit_member->kecamatan)->first();
        $getKel = Kelurahan::where('id_kel', '=', $edit_member->kelurahan)->first();
        // $generateQR = Hash::make($edit_member->n_noidentitas);
        return view('admin.data_master.data_santri.editMember', compact('edit_member', 'getProp', 'getKab', 'getKec', 'getKel'));
        // return $edit_member;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      // $ktp="";
      // if ($request->ktp) {
      //   $ktp= 'required|unique:users,ktp,'.$request->ktp.'|max:16';
      // } else {
      //   $ktp= 'required|unique:users|max:16';
      // }
      $this->validate($request, [

          'ktp' => 'required|unique:users,ktp,'.$id.'|max:16',
          'nama_anggota' => 'required|max:100',
          'propinsi' => 'required',
          'kabupaten' => 'required',
          'kecamatan' => 'required',
          'kelurahan' => 'required',
          'alamat' => 'required',
          'tanggal_lahir' => 'required',
          'jenis_kelamin' => 'required',
          'golongan_darah' => 'required',
          'status' => 'required',
          'agama' => 'required',
          'pekerjaan' => 'required|max:40',
          'rtrw' => 'required|max:7',
          'mobile' => 'required|max:13',
          'email' => 'required|max:100',
          'username' => 'required|max:100',
          'password' => 'required|max:100',

      ]);
      $user = User::find($id);
      $user->ktp = $request->ktp;
      $user->gelombang = $request->gelombang;
      $user->nama_anggota = $request->nama_anggota;
      $user->propinsi = $request->propinsi;
      $user->kabupaten = $request->kabupaten;
      $user->kecamatan = $request->kecamatan;
      $user->kelurahan = $request->kelurahan;
      $user->alamat = $request->alamat;
      $user->tanggal_lahir = $request->tanggal_lahir;
      $user->jenis_kelamin = $request->jenis_kelamin;
      $user->goldarah = $request->golongan_darah;
      $user->status = $request->status;
      $user->agama = $request->agama;
      $user->pekerjaan = $request->pekerjaan;
      $user->rtrw = $request->rtrw;
      $user->nohp = $request->mobile;
      $user->email = $request->email;
      $user->username = $request->username;
      $user->password = Hash::make($request->password);
      $user->admin_entry = Auth::user()->id;

      $result = $user->save();
      $msg = 'Data Santri Has Been Edited!';

      if ($result) {
        return redirect()->route('data_santri.index')->with('status', $msg);
        // return $user;
      } else {
        return redirect()->route('data_santri.index')->withErrors('status', 'Some Thing Wrong!');
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $msg = 'Data Santri Has Been Deleted!';
        $result = User::where('id', $id)->delete();
        if ($result) {
          return redirect()->route('data_santri.index')->with('status', $msg);
        } else {
          return redirect()->route('data_santri.index')->withErrors('status', 'Some Thing Wrong!');
        }
    }
}
