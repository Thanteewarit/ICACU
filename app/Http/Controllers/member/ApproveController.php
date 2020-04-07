<?php

namespace App\Http\Controllers\member;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\Protocol_docs;
use App\Model\Protocol_amendment;

class ApproveController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function sendDraft(Request $request)
    {
        $Protocol_docs                      =   Protocol_docs::find($request->id);
        $Protocol_docs->protocol_status     =   "3";
        $Protocol_docs->protocol_edit     =   "0";
        $Protocol_docs->save();
    }

    public function Renew(Request $request)
    {
        $Protocol_docs                      =   Protocol_docs::find($request->id);
        $Protocol_docs->protocol_status     =   "11";
        $Protocol_docs->comment             =   $request->comment;
        $Protocol_docs->save();
        return redirect()->route('member.dashboard.index')->with('yes', 'ทำรายการสำเร็จ');
    }

    public function Amendment(Request $request)
    {
        $Protocol_amendment       =  new Protocol_amendment;
        $Protocol_amendment->protocol_id             =   $request->id;
        $Protocol_amendment->amendment01             =   $request->amendment01;
        $Protocol_amendment->amendment02             =   $request->amendment02;
        $Protocol_amendment->amendment03             =   $request->amendment03;
        $Protocol_amendment->amendment04             =   $request->amendment04;
        $Protocol_amendment->amendment05             =   $request->amendment05;
        $Protocol_amendment->amendment06             =   $request->amendment06;
        $Protocol_amendment->amendment07             =   $request->amendment07;
        $Protocol_amendment->amendment08             =   $request->amendment08;
        $Protocol_amendment->amendment09             =   $request->amendment09;
        $Protocol_amendment->amendment10             =   $request->amendment10;
        $Protocol_amendment->amendment11             =   $request->amendment11;
        $Protocol_amendment->amendment12             =   $request->amendment12;
        $Protocol_amendment->amendment13             =   $request->amendment13;
        $Protocol_amendment->amendment13_sub             =   $request->amendment13_sub;
        $Protocol_amendment->save();

        $Protocol_docs                      =   Protocol_docs::find($request->id);
        $Protocol_docs->protocol_status     =   "11";
        $Protocol_docs->save();

        return redirect()->route('member.dashboard.index')->with('yes', 'ทำรายการสำเร็จ');
    }
    

}
