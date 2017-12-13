<?php

namespace App\Http\Controllers\Admin\data_pemasok;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\pemasok;
// use Illuminate\Support\Facades\Validator;
// use DB;

class PemasokController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // public function __construct()
    // {
    //    $this->middleware('guest:admin'); //
    // }
    public function index()
    {
      $pemasok = pemasok::get();
      // return $pemasok;
      return view('admin.data_master.data_pemasok.data_pemasok', compact('pemasok'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.data_master.data_pemasok.addPemasok');
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

          'nama_pemasok' => 'required',
          'email' => 'required|email',
          'tlp' => 'required',
          'alamat' => 'required',

        ]);
        
          $pemasok = new pemasok;
          $pemasok->nama_pemasok = $request->nama_pemasok;
          $pemasok->email = $request->email;
          $pemasok->tlp = $request->tlp;
          $pemasok->alamat = $request->alamat;
          $pemasok->save();
        
        return redirect()->route('data_pemasok.index')->with('status', 'Data Pemasok Has Been Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $pemasok = pemasok::where('id', $id)->first();
      return view('admin.data_master.data_pemasok.editPemasok', compact('pemasok'));

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

        'nama_pemasok' => 'required',
        'email' => 'required|email',
        'tlp' => 'required',
        'alamat' => 'required',

      ]);

      $pemasok = pemasok::find($id);
      $pemasok->nama_pemasok = $request->nama_pemasok;
      $pemasok->email = $request->email;
      $pemasok->tlp = $request->tlp;
      $pemasok->alamat = $request->alamat;
      $pemasok->save();
      // pemasok::where('id_pemasok', $id)->update($request->all());
      // return $request->all();
      return redirect()->route('data_pemasok.index')->with('status', 'Data Pemasok Has Been Edited!');
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
        pemasok::where('id', $id)->delete();
        return redirect()->route('data_pemasok.index')->with('status', 'Data Has Been Deleted!');
    }
}
