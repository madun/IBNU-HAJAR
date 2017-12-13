<?php

namespace App\Http\Controllers\Admin\data_barang;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\barang;
use App\Model\Admin\kategori;
use App\Model\Admin\subkategori;
use App\Model\Admin\itemkategori;
use App\Model\Admin\satuan_barang;

class BarangController extends Controller
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
    $barang = barang::all();
    // return $barang;
    return view('admin.data_master.data_barang.data_barang', compact('barang'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
      $kategori = kategori::all();
      $subkategori = subkategori::all();
      $itemkategori = itemkategori::all();
      $satuan = satuan_barang::all();
      return view('admin.data_master.data_barang.addBarang', compact('kategori', 'subkategori', 'itemkategori', 'satuan'));
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

        'nama_barang' => 'required',
        'kategori_id' => 'required',
        'nama_barang' => 'required',
        'brand' => 'required',
        'satuan_barang_id' => 'required',
        'harga_beli' => 'required',
        'harga_jual' => 'required',

      ]);
      $barang = new barang;
      $barang->nama_barang = $request->nama_barang;
      $barang->kategori_id = $request->kategori_id;
      $barang->subkategori_id = $request->subkategori_id;
      $barang->itemkategori_id = $request->itemkategori_id;
      $barang->brand = $request->brand;
      $barang->satuan_barang_id = $request->satuan_barang_id;
      $barang->harga_beli = $request->harga_beli;
      $barang->harga_jual = $request->harga_jual;
      $barang->keterangan = '-';
      $barang->tanggal_expired = '2017-08-15';
      $barang->save();
      return redirect()->route('data_barang.index')->with('status', 'Data Barang Has Been Added!');
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
    $barang = barang::where('id', $id)->first();

    $kategori = kategori::all();
    $subkategori = subkategori::all();
    $itemkategori = itemkategori::all();
    $satuan = satuan_barang::all();
    return view('admin.data_master.data_barang.editbarang', compact('barang', 'kategori', 'subkategori', 'itemkategori', 'satuan'));

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

      'nama_barang' => 'required',
      'kategori_id' => 'required',
      'nama_barang' => 'required',
      'brand' => 'required',
      'satuan_barang_id' => 'required',
      'harga_beli' => 'required',
      'harga_jual' => 'required',

    ]);
    $barang = barang::find($id);
    $barang->nama_barang = $request->nama_barang;
    $barang->kategori_id = $request->kategori_id;
    $barang->subkategori_id = $request->subkategori_id;
    $barang->itemkategori_id = $request->itemkategori_id;
    $barang->brand = $request->brand;
    $barang->satuan_barang_id = $request->satuan_barang_id;
    $barang->harga_beli = $request->harga_beli;
    $barang->harga_jual = $request->harga_jual;
    $barang->keterangan = '-';
    $barang->tanggal_expired = '2017-08-15';
    $barang->save();
    return redirect()->route('data_barang.index')->with('status', 'Data Barang Has Been Edited!');
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
      barang::where('id', $id)->delete();
      return redirect()->route('data_barang.index')->with('status', 'Data Has Been Deleted!');
  }

}
