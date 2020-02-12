<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Hash;
use App\Model\UserAll;
use App\Model\Role;
use App\Model\HasPermissions;
use App\Model\Permissions;
use App\Model\HasRoles;
use App\Model\Status;

class UserAllController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $Status         =   Status::all();
        $role           =   Role::all();
        $user           =   UserAll::where('status','!=', 'D')->get();
        return view('admin.home', compact('role' , 'user', 'Status'));
    }


    public function create(Request $request)
    {
        $UserAll = new UserAll;
        $UserAll->name      = $request->name;
        $UserAll->email     = $request->email;
        $UserAll->password  =   Hash::make($request->password); 
        $UserAll->admin_status     = $request->position;
        $UserAll->status     = "Y";
        $UserAll->save();
       
        $HasRoles   = new  HasRoles;
        $HasRoles->role_id    = $request->position;
        $HasRoles->model_type    = "App\User";
        $HasRoles->model_id    = $UserAll->id;
        $HasRoles->save();
        

        $sum = count($request->permission_id);
        if ($sum != 0) {
            for ($i = 0; $i < $sum; $i++) {

                $HasPermissions = new HasPermissions;
                $HasPermissions->model_id = $UserAll->id;
                $HasPermissions->permission_id = $request->permission_id[$i];
                $HasPermissions->model_type = "App\User";
                $HasPermissions->save();
            }
        }
        return redirect()->route('admin.home.index')->with('yes', 'อนุมัติให้สมาชิกเรียบร้อย');
    }


    public function get(Request $request)
    {
        $UserAll    = UserAll::find($request->id);
        $HasPermissions = HasPermissions::where('model_id', $UserAll->id)->get();
        $HasRoles   =   HasRoles::where('model_id', $request->id)->first();

        $data['userall'] = $UserAll;
        $data['HasPermissions'] = $HasPermissions;
        $data['HasRoles'] = $HasRoles;
        echo json_encode($data);
    }


    public function show()
    {
        $role   =   Role::all();
        $user   =   UserAll::where('status', 'D')->get();
        return view('admin.approve', compact('user','role'));
    }


    public function edit(Request $request)
    {

        $UserAll = UserAll::find($request->id);
        $UserAll->name = $request->name;
        $UserAll->email = $request->email;
        $UserAll->status = $request->status;
        $UserAll->save();

        // $HasRoles   = new HasRoles;
        // $HasRoles->role_id      = $request->position;
        // $HasRoles->model_type   = "App\User";
        // $HasRoles->model_id     = $UserAll->id;
        // $HasRoles->save();

        $HasRoles   =   HasRoles::where('model_id', $request->id)
        ->update(['role_id' => $request->position]);

        $HasPermissions = HasPermissions::where('model_id', $request->id)->delete();

        $sum = count($request->permission_id);
        if ($sum != 0) {
            for ($i = 0; $i < $sum; $i++) {

                $UserAll = new HasPermissions;
                $UserAll->model_id = $request->id;
                $UserAll->permission_id = $request->permission_id[$i];
                $UserAll->model_type = "App\User";
                $UserAll->save();
            }
        }
        return redirect()->route('home')->with('yes', 'แก้ไขสถานะสมาชิกสำเร็จ');
    }
    public function approveed(Request $request)
    {

        $UserAll = UserAll::find($request->id);
        $UserAll->name = $request->name;
        $UserAll->email = $request->email;
        $UserAll->admin_status = $request->position;
        $UserAll->status = 'Y';
        $UserAll->save();
       
        $HasRoles   =   HasRoles::where('model_id', $request->id)
          ->update(['role_id' => $request->position]);

        $HasPermissions = HasPermissions::where('model_id', $request->id)->delete();

        $sum = count($request->permission_id);
        if ($sum != 0) {
            for ($i = 0; $i < $sum; $i++) {

                $UserAll = new HasPermissions;
                $UserAll->model_id = $request->id;
                $UserAll->permission_id = $request->permission_id[$i];
                $UserAll->model_type = "App\User";
                $UserAll->save();
            }
        }
        return redirect()->route('admin.approve.show')->with('yes', 'อนุมัติให้สมาชิกเรียบร้อย');
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
