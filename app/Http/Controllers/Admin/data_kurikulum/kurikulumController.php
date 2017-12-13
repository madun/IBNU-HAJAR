<?php

namespace App\Http\Controllers\Admin\data_kurikulum;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\kurikulum;

class kurikulumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kurikulum = kurikulum::all();
        return view('admin.data_master.data_kurikulum.list_kurikulum', compact('kurikulum'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.data_master.data_kurikulum.addKurikulum');
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

          'nama' => 'required|unique:kurikulums|max:30',

      ]);
      $kurikulum = new kurikulum;

      $kurikulum->nama = $request->nama;
      // $result = $user->saveOrFail();
      $result = $kurikulum->save();
      if ($result) {
        return redirect()->route('kurikulum.index')->with('status', 'Data Kurikulum Has Been Saved');
      } else {
        return redirect()->route('kurikulum.index')->withErrors('status', 'Some Thing Wrong!');
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
