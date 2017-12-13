<?php

namespace App\Http\Controllers\Admin\data_pelanggan;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\pelanggan;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $pelanggan = pelanggan::get();
      // return $pemasok;
      return view('admin.data_master.data_pelanggan.data_pelanggan', compact('pelanggan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.data_master.data_pelanggan.addPelanggan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request, [

        'nama_perusahaan' => 'required',
        'nama_pelanggan' => 'required',
        'email' => 'required|email',
        'tlp' => 'required',
        'alamat' => 'required',

      ]);
      $pelanggan = new pelanggan;
      $pelanggan->nama_perusahaan = $request->nama_perusahaan;
      $pelanggan->nama_pelanggan = $request->nama_pelanggan;
      $pelanggan->email = $request->email;
      $pelanggan->tlp = $request->tlp;
      $pelanggan->alamat = $request->alamat;
      $pelanggan->save();
      return redirect()->route('data_pelanggan.index')->with('status', 'Data Pelanggan Has Been Added!');
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
        $pelanggan = pelanggan::where('id', $id)->first();
        return view('admin.data_master.data_pelanggan.editPelanggan', compact('pelanggan'));
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
      $this->validate($request, [

        'nama_perusahaan' => 'required',
        'nama_pelanggan' => 'required',
        'email' => 'required|email',
        'tlp' => 'required',
        'alamat' => 'required',

      ]);
      $pelanggan = pelanggan::find($id);
      $pelanggan->nama_perusahaan = $request->nama_perusahaan;
      $pelanggan->nama_pelanggan = $request->nama_pelanggan;
      $pelanggan->email = $request->email;
      $pelanggan->tlp = $request->tlp;
      $pelanggan->alamat = $request->alamat;
      $pelanggan->save();
      return redirect()->route('data_pelanggan.index')->with('status', 'Data Pelanggan Has Been Edited!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      // return $id;
      pelanggan::where('id', $id)->delete();
      return redirect()->route('data_pelanggan.index')->with('status', 'Data Has Been Deleted!');
    }
}
