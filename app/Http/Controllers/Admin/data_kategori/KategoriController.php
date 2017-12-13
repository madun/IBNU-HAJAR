<?php

namespace App\Http\Controllers\Admin\data_kategori;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\kategori;

class KategoriController extends Controller
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
    $kategori = kategori::get();
    // return $kategori;
    return view('admin.data_master.data_kategori.data_kategori', compact('kategori'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
      return view('admin.data_master.data_kategori.addKategori');
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

        'nama_kategori' => 'required',
        'description' => 'required',

      ]);
      $kategori = new kategori;
      $kategori->nama_kategori = $request->nama_kategori;
      $kategori->description = $request->description;
      $kategori->save();
      return redirect()->route('data_kategori.index')->with('status', 'Data kategori Has Been Added!');
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
    $kategori = kategori::where('id', $id)->first();
    return view('admin.data_master.data_kategori.editKategori', compact('kategori'));

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

      'nama_kategori' => 'required',
      'description' => 'required',

    ]);

    $kategori = kategori::find($id);
    $kategori->nama_kategori = $request->nama_kategori;
    $kategori->description = $request->description;
    $kategori->save();
    // kategori::where('id_kategori', $id)->update($request->all());
    // return $request->all();
    return redirect()->route('data_kategori.index')->with('status', 'Data kategori Has Been Edited!');
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
      kategori::where('id', $id)->delete();
      return redirect()->route('data_kategori.index')->with('status', 'Data Has Been Deleted!');
  }
}
