<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\Committees;
use App\Model\Status;

class CommitteesControllers extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $Committees         =   Committees::all();
        $Status             =   Status::all();
        return view('admin.add_committee', compact('Committees','Status'));
    }

    public function create(Request $request)
    {
        $Committees         =   new Committees;
        $Committees->name   =   $request->name;
        $Committees->email  =   $request->email;
        $Committees->tel    =   $request->tel;
        $Committees->save();

        return redirect()->route('admin.committee.index')->with('yes', 'ทำรายการสำเร็จ');
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Request $request)
    {
        $Committees         =   Committees::find($request->id)->first();

        $data['Committees'] = $Committees;
        echo json_encode($data);
    }


    public function edit(Request $request)
    {
        $Committees         =   Committees::find($request->id);
        $Committees->name   =   $request->name;
        $Committees->email  =   $request->email;
        $Committees->tel    =   $request->tel;
        $Committees->save();

        return redirect()->route('admin.committee.index')->with('yes', 'ทำรายการสำเร็จ');
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
