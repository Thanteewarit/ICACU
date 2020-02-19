<?php

namespace App\Http\Controllers\officer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Model\Protocol_docs;
use App\Model\UserAll;
use App\Model\UsersDetail;
use App\Model\Protocol_reviewer_list;

class ListController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $UsersDetail = UsersDetail::where('usersId',Auth::user()->id)->first();

        if(auth()->user()->hasRole('secretary'))
        {
            $Protocol_submit = Protocol_docs::where('protocol_status','3')->get();

            $Protocol_review = Protocol_docs::where('protocol_status','>=','4')
            ->get();

            $Protocol_docs = Protocol_docs::where('protocol_status','7')
            ->orWhere('protocol_status','3')
            ->orWhere('protocol_status','11')
            ->get();

            $Protocol_Approve = Protocol_docs::where('protocol_status','10')->get();
            $Protocol_rejected = Protocol_docs::where('protocol_status','12')->orWhere('protocol_status','14')->get();
            $Protocol_Finish = Protocol_docs::where('protocol_status','13')->get();

            $Protocol_docsProgress = Protocol_docs::Where('protocol_status','16')->get();
            
            return view('officer.protocol-list', compact(
                'Protocol_review',
                'Protocol_submit',
                'Protocol_docs',
                'Protocol_Approve',
                'Protocol_rejected',
                'Protocol_Finish',
                'Protocol_docsProgress'
            ));
            
        }
        if(auth()->user()->hasRole('president'))
        {
            $Protocol_submit = Protocol_docs::where('protocol_status','8')->get();
            $Protocol_docs = Protocol_docs::where('protocol_status','5')->orWhere('protocol_status','8')->get();
            $Protocol_review = Protocol_docs::where('protocol_status','>=','4')
            ->where('protocol_status','!=','3')
            ->where('protocol_status','!=','7')
            ->where('protocol_status','!=','10')
            ->where('protocol_status','!=','12')
            ->get();

            $Protocol_Approve = Protocol_docs::where('protocol_status','10')->get();
            $Protocol_rejected = Protocol_docs::where('protocol_status','12')->orWhere('protocol_status','14')->get();
            $Protocol_Finish = Protocol_docs::where('protocol_status','13')->get();
            $Protocol_docsProgress = Protocol_docs::Where('protocol_status','16')->get();

            return view('officer.protocol-list', compact(
                'Protocol_submit',
                'Protocol_review',
                'Protocol_docs',
                'Protocol_Approve',
                'Protocol_rejected',
                'Protocol_Finish',
                'Protocol_docsProgress'
            ));
        }
        if(auth()->user()->hasRole('reviewer'))
        {
            $Protocol_submit = Protocol_docs::where('protocol_status','8')->get();
            $Protocol_reviewer_list     =   Protocol_reviewer_list::where('users_id',Auth::user()->id)->where('status','N')->count();
            if($Protocol_reviewer_list>0){
                $Protocol_docs = Protocol_docs::where('protocol_status','6')->get();
            }else{
                $Protocol_docs = Protocol_docs::where('protocol_status','N')->get();
            }
            
            $Protocol_review = Protocol_docs::where('protocol_status','>=','4')
            ->where('protocol_status','!=','3')
            ->where('protocol_status','!=','7')
            ->where('protocol_status','!=','10')
            ->where('protocol_status','!=','12')
            ->get();
            
            $Protocol_Approve = Protocol_docs::where('protocol_status','10')->get();
            $Protocol_rejected = Protocol_docs::where('protocol_status','12')->orWhere('protocol_status','14')->get();
            $Protocol_Finish = Protocol_docs::where('protocol_status','13')->get();

            $Protocol_docsProgress = Protocol_docs::Where('protocol_status','16')->get();
            return view('officer.protocol-list', compact(
                'Protocol_submit',
                'Protocol_review',
                'Protocol_docs',
                'Protocol_Approve',
                'Protocol_rejected',
                'Protocol_Finish',
                'Protocol_docsProgress'
            ));
        }

    }
}
