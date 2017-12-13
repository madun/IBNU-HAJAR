<?php

namespace App\Http\Controllers\Admin\data_itemkategori;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
// use App\Model\Admin\kategori;
// use App\Model\Admin\subkategori;
use App\Model\Admin\itemkategori;

class ItemKategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $itemkategori= itemkategori::all();
      return view('admin.data_master.data_itemkategori.data_itemkategori', compact('itemkategori'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      // $kategori = kategori::all();
      // $subkategori = subkategori::all();
      // return view('admin.data_master.data_itemkategori.addItemKategori', compact('kategori', 'subkategori'));
      return view('admin.data_master.data_itemkategori.addItemKategori');
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

        'nama_item' => 'required',
        'description' => 'required',

      ]);
      $itemkategori = new itemkategori;
      $itemkategori->nama_item = $request->nama_item;
      $itemkategori->description = $request->description;
      $itemkategori->save();
      return redirect()->route('data_itemkategori.index')->with('status', 'Data Item Kategori Has Been Added!');
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
      $itemkategori = itemkategori::where('id', $id)->first();
      // $kategori = kategori::all();
      // $subkategori = subkategori::all();
      return view('admin.data_master.data_itemkategori.editItemKategori', compact('itemkategori'));
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

        'nama_item' => 'required',
        'description' => 'required',

      ]);
      $itemkategori = itemkategori::find($id);
      $itemkategori->nama_item = $request->nama_item;
      $itemkategori->description = $request->description;
      $itemkategori->save();
      return redirect()->route('data_itemkategori.index')->with('status', 'Data Item Kategori Has Been Edited!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      itemkategori::where('id', $id)->delete();
      return redirect()->route('data_itemkategori.index')->with('status', 'Data Has Been Deleted!');
    }
}
