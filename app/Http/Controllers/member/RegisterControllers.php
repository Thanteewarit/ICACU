<?php

namespace App\Http\Controllers\member;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\StatusUser;
use App\Model\Affiliation;
use App\Model\Affiliation_type;

use App\Model\UsersDetail;
use App\Model\UserAll;
use App\Model\HasRoles;

class RegisterControllers extends Controller
{
    public function index()
    {
        $StatusUser         =   StatusUser::where('status','Y')->get();
        $Affiliation        =   Affiliation::where('status','Y')->get();
        $Affiliation_type   =   Affiliation_type::where('status','Y')->get();
        return view('member.register', compact('StatusUser','Affiliation','Affiliation_type'));
    }

    public function create(Request $request)
    {
        $UserAll = new UserAll;
        $UserAll->name = $request->firstNameTh;
        $UserAll->email = $request->email;
        $UserAll->password = bcrypt($request->password);
        $UserAll->save();

        $HasRoles   = new HasRoles;
        $HasRoles->role_id      = 5;
        $HasRoles->model_type   = "App\User";
        $HasRoles->model_id     = $UserAll->id;
        $HasRoles->save();

        $UsersDetail = new UsersDetail;
        $UsersDetail->usersId = $UserAll->id;
        $UsersDetail->firstNameTh       = $request->firstNameTh;
        $UsersDetail->firstNameEn       = $request->firstNameEn;
        $UsersDetail->lastNameTh        = $request->lastNameTh;
        $UsersDetail->lastNameEn        = $request->lastNameEn;
        $UsersDetail->alignAcademicTh   = $request->alignAcademicTh;
        $UsersDetail->alignAcademicEn   = $request->alignAcademicEn;
        $UsersDetail->otherPositionTh   = $request->otherPositionTh;
        $UsersDetail->otherPositionEn   = $request->otherPositionEn;
        $UsersDetail->contactAddressTh  = $request->contactAddressTh;
        $UsersDetail->contactAddressEn  = $request->contactAddressEn;
        $UsersDetail->statusUser        = $request->statusUser;
        $UsersDetail->tell              = $request->tell;
        $UsersDetail->fax               = $request->fax;
        $UsersDetail->save();

        return redirect()->route('LoginOut')->with('yes', 'สมัครสมาชิกสำเร็จ');
    }

    public function store(Request $request)
    {
        //
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
