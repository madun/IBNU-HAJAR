<?php

namespace App\Http\Controllers\Admin\data_subkategori;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
// use App\Model\Admin\kategori;
use App\Model\Admin\subkategori;

class SubKategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subkategori = subkategori::all();
        return view('admin.data_master.data_subkategori.data_subkategori', compact('subkategori'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      // $kategori = kategori::all();
      // return view('admin.data_master.data_subkategori.addSubKategori', compact('kategori'));
      return view('admin.data_master.data_subkategori.addSubKategori');
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

        'nama_subkategori' => 'required',
        'description' => 'required',

      ]);
      $subkategori = new subkategori;
      $subkategori->nama_subkategori = $request->nama_subkategori;
      $subkategori->description = $request->description;
      $subkategori->save();
      return redirect()->route('data_subkategori.index')->with('status', 'Data Sub Kategori Has Been Added!');
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
        $subkategori = subkategori::where('id', $id)->first();
        // $kategori = kategori::all();
        return view('admin.data_master.data_subkategori.editSubKategori', compact('subkategori'));

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

        'nama_subkategori' => 'required',
        'description' => 'required',

      ]);
      $subkategori = subkategori::find($id);;
      $subkategori->nama_subkategori = $request->nama_subkategori;
      $subkategori->description = $request->description;
      $subkategori->save();
      return redirect()->route('data_subkategori.index')->with('status', 'Data Sub Kategori Has Been Edited!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      subkategori::where('id', $id)->delete();
      return redirect()->route('data_subkategori.index')->with('status', 'Data Has Been Deleted!');
    }
}
