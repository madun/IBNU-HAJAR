<?php

namespace App\Http\Controllers\Admin\Berita;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\Admin\tb_perusahaan;
use DB;

class PerusahaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $berita = DB::table('tb_perusahaans')->get();
        return view('admin.data_master.berita.perusahaan.listPost', compact('berita'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.data_master.berita.perusahaan.addPost');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->all();
        $this->validate($request, [

          'title' => 'required',
          'subtitle' => 'required',
          'slug' => 'required',
          'body' => 'required',
          // 'status' => 'status',
          'image' => 'required',

        ]);

        $perusahaan = new tb_perusahaan;
        $perusahaan->title = $request->title;
        $perusahaan->subtitle = $request->subtitle;
        $perusahaan->slug = $request->slug;
        $perusahaan->body = $request->body;
        $perusahaan->status = $request->status;
        $perusahaan->image = $request->image;
        $perusahaan->save();

        return redirect()->route('berita-perusahaan.index')->with('status', 'Data Has Been Added!');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
