<?php

namespace App\Http\Controllers\member;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Auth;
use App\Model\Protocol_docs;
class ListController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $Protocol_docs          = Protocol_docs::where('protocol_status','>','2')
        ->where('users_id',Auth::user()->id)
        ->where('protocol_status','<','8')
        ->Orwhere('protocol_status','25')
        ->get();
        
        $Protocol_docsRewiew    = Protocol_docs::where('protocol_status','>','2')
        ->where('protocol_status','!=','19')
        ->where('users_id',Auth::user()->id)
        ->get();

        $Protocol_docsApprove   = Protocol_docs::where('protocol_status','>','2')
        ->where('users_id',Auth::user()->id)
        ->where('protocol_status','10')
        ->get();
        
        $Protocol_docsRejected  = Protocol_docs::where('protocol_status','9')
        ->where('users_id',Auth::user()->id)
        ->get();

        $Protocol_docsRenew     =  Protocol_docs::where('protocol_status','11')
        ->Orwhere('protocol_status','19')
        ->where('users_id',Auth::user()->id)
        ->get();

        $Protocol_docsWaiting     =  Protocol_docs::where('protocol_status','15')
        ->Orwhere('protocol_status','25')
        ->where('users_id',Auth::user()->id)
        ->get();

        $Protocol_docsProgress    =  Protocol_docs::where('protocol_status','16')
        ->where('users_id',Auth::user()->id)
        ->get();

        $Protocol_docsFinish    =  Protocol_docs::where('protocol_status','17')
        ->Orwhere('protocol_status','24')
        ->where('users_id',Auth::user()->id)
        ->get();



        return view('member.protocol-list-view', compact(
            'Protocol_docs',
            'Protocol_docsRewiew',
            'Protocol_docsApprove',
            'Protocol_docsRejected',
            'Protocol_docsRenew',
            'Protocol_docsWaiting',
            'Protocol_docsProgress',
            'Protocol_docsFinish'
        ));
        
    }

}
