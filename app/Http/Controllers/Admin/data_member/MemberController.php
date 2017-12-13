<?php

namespace App\Http\Controllers\Admin\data_member;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\member;

class MemberController extends Controller
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
    $member = member::get();
    // return $member;
    return view('admin.data_master.data_member.data_member', compact('member'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
      return view('admin.data_master.data_member.addmember');
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

        'nama_member' => 'required',
        'email' => 'required|email',
        'tlp' => 'required',
        'alamat' => 'required',

      ]);
      $member = new member;
      $member->nama_member = $request->nama_member;
      $member->email = $request->email;
      $member->tlp = $request->tlp;
      $member->alamat = $request->alamat;
      $member->save();
      return redirect()->route('data_member.index')->with('status', 'Data kategori Has Been Added!');
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
    $member = member::where('id', $id)->first();
    return view('admin.data_master.data_member.editmember', compact('member'));

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

      'nama_member' => 'required',
      'email' => 'required|email',
      'tlp' => 'required',
      'alamat' => 'required',

    ]);

    $member = member::find($id);
    $member->nama_member = $request->nama_member;
    $member->email = $request->email;
    $member->tlp = $request->tlp;
    $member->alamat = $request->alamat;
    $member->save();
    // member::where('id_member', $id)->update($request->all());
    // return $request->all();
    return redirect()->route('data_member.index')->with('status', 'Data kategori Has Been Edited!');
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
      member::where('id', $id)->delete();
      return redirect()->route('data_member.index')->with('status', 'Data Has Been Deleted!');
  }
}
