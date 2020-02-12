<?php

namespace App\Http\Controllers\member;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\Protocol_docs;

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

}
