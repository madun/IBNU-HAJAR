<?php

namespace App\Http\Controllers\Admin\data_presence;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\presence;
use Auth;

class presenceController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $presence = presence::all();
      // $member = User::all();->first()
      // $generateQR = $member->get('n_noidentitas');
      return view('admin.data_presence.list_presence', compact('presence'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.data_presence.addPresence');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      // return $request;
      $jam_absen = date("Y-m-d")." ".$request->clock;
      $jam_masuk = date("Y-m-d")." "."08:10:00";
      $state = "";
      if ($jam_absen > $jam_masuk) {
          $state = "Late";
      } else {
          $state = "Attend";
      }
      $estimated = (strtotime($jam_masuk) - strtotime($jam_absen)) / 60;
      if ($estimated < 0) {
          $estimated = $estimated;
      } else {
          $estimated = "";
      }
      $presence = new presence;
      $presence->user_id = Auth::user()->id;
      $presence->start = $jam_absen;
      $presence->status = $state;
      $presence->keterangan = "";
      $presence->estimated = $estimated;
      $result = $presence->save();
      
      if ($result) {
        // return redirect()->route('home')->with('status', "Data Presence Has Been Input");
        return response()->json(['msg' => 'success']);
      } else {
        // return redirect()->route('home')->withErrors('status', 'Some Thing Wrong!');
        return response()->json(['msg' => 'some thing wrong!']);
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
