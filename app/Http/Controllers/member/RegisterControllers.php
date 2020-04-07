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
use Auth;

class RegisterControllers extends Controller
{
    public function index()
    {
        $StatusUser         =   StatusUser::where('status','Y')->get();
        $Affiliation        =   Affiliation::where('status','Y')->get();
        $Affiliation_type   =   Affiliation_type::where('status','Y')->get();
        return view('member.register', compact('StatusUser','Affiliation','Affiliation_type'));
    }
    public function forgetpass()
    {
        $StatusUser         =   StatusUser::where('status','Y')->get();
        $Affiliation        =   Affiliation::where('status','Y')->get();
        $Affiliation_type   =   Affiliation_type::where('status','Y')->get();
        return view('member.forget-pass', compact('StatusUser','Affiliation','Affiliation_type'));
    }
    public function Profile()
    {
        $UserAll            =   UserAll::find(Auth::user()->id);
        $UsersDetail        =   UsersDetail::where('usersId',Auth::user()->id)->first();
        $StatusUser         =   StatusUser::where('status','Y')->get();
        $Affiliation        =   Affiliation::where('status','Y')->get();
        $Affiliation_type   =   Affiliation_type::where('status','Y')->get();
        return view('member.member', compact('StatusUser','Affiliation','Affiliation_type','UserAll','UsersDetail'));
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

    public function edit(Request $request)
    {
        if(!empty($request->password)){

            $UserAll =  UserAll::find(Auth::user()->id);
            $UserAll->name = $request->firstNameTh;
            $UserAll->email = $request->email;
            $UserAll->password = bcrypt($request->password);
            $UserAll->save();

            $UsersDetail =  UsersDetail::where('usersId',Auth::user()->id)
            ->update([
                'firstNameTh'   => $request->firstNameTh,
                'firstNameEn'   => $request->firstNameEn,
                'lastNameTh'   => $request->lastNameTh,
                'lastNameEn'   => $request->lastNameEn,
                'alignAcademicTh'   => $request->alignAcademicTh,
                'alignAcademicEn'   => $request->alignAcademicEn,
                'otherPositionTh'   => $request->otherPositionTh,
                'otherPositionEn'   => $request->otherPositionEn,
                'contactAddressTh'   => $request->contactAddressTh,
                'contactAddressEn'   => $request->contactAddressEn,
                'statusUser'   => $request->statusUser,
                'tell'   => $request->tell,
                'fax'   => $request->fax
            ]);

        }else{

            $UserAll =  UserAll::find(Auth::user()->id);
            $UserAll->name = $request->firstNameTh;
            $UserAll->email = $request->email;
            $UserAll->save();

            $UsersDetail =  UsersDetail::where('usersId',Auth::user()->id)
            ->update([
                'firstNameTh'   => $request->firstNameTh,
                'firstNameEn'   => $request->firstNameEn,
                'lastNameTh'   => $request->lastNameTh,
                'lastNameEn'   => $request->lastNameEn,
                'alignAcademicTh'   => $request->alignAcademicTh,
                'alignAcademicEn'   => $request->alignAcademicEn,
                'otherPositionTh'   => $request->otherPositionTh,
                'otherPositionEn'   => $request->otherPositionEn,
                'contactAddressTh'   => $request->contactAddressTh,
                'contactAddressEn'   => $request->contactAddressEn,
                'statusUser'   => $request->statusUser,
                'tell'   => $request->tell,
                'fax'   => $request->fax
            ]);
        }

        return redirect()->route('member.dashboard.index')->with('yes', 'แก้ไขข้อมูลสมาชิกสำเร็จ');
    }
}
