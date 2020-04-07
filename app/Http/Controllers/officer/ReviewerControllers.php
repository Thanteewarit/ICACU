<?php

namespace App\Http\Controllers\officer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\Protocol_reviewer_opic;
use App\Model\Protocol_secretary_opic;
use App\Model\Protocol_docs;

use Auth;

class ReviewerControllers extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create(Request $request)
    {
        if(auth()->user()->hasRole('secretary')){
            $Protocol_docs = Protocol_docs::find($request->protocol_id);
            if($Protocol_docs->protocol_edit==0){

                $Protocol_secretary_opic     =  new  Protocol_secretary_opic;
                $Protocol_secretary_opic->protocol_id        =   $request->protocol_id;
                $Protocol_secretary_opic->protocol_number    =   $request->protocol_number;
                $Protocol_secretary_opic->protocol_status    =   $request->protocol_status01;
                $Protocol_secretary_opic->secretary_id        =   Auth::user()->id;
                $Protocol_secretary_opic->comment            =   $request->merge_comment01;
                $Protocol_secretary_opic->save();

                if($request->protocol_number==30){
                    $Protocol_docs = Protocol_docs::find($request->protocol_id);
                    $Protocol_docs->protocol_edit   =   "1";
                    $Protocol_docs->protocol_v2   =   "1";
                    $Protocol_docs->save();
                }
            }else{
                $Protocol_secretary_opic     =    Protocol_secretary_opic::where('protocol_id',$request->protocol_id)
                ->where('protocol_number',$request->protocol_number)
                ->where('secretary_id',Auth::user()->id)
                ->update([
                    'protocol_status'   => $request->protocol_status01,
                    'comment'           => $request->merge_comment01
                ]);
            }


        }

        if(auth()->user()->hasRole('reviewer')){

            $Protocol_docs = Protocol_docs::find($request->protocol_id);
            if($Protocol_docs->protocol_edit==0){
                $Protocol_reviewer_opic     =  new  Protocol_reviewer_opic;
                $Protocol_reviewer_opic->protocol_id        =   $request->protocol_id;
                $Protocol_reviewer_opic->protocol_number    =   $request->protocol_number;
                $Protocol_reviewer_opic->protocol_status    =   $request->protocol_status;
                $Protocol_reviewer_opic->reviewer_id        =   Auth::user()->id;
                $Protocol_reviewer_opic->comment            =   $request->comment;
                $Protocol_reviewer_opic->save();
            }else{
                $Protocol_reviewer_opic     =    Protocol_reviewer_opic::where('protocol_id',$request->protocol_id)
                ->where('protocol_number',$request->protocol_number)
                ->where('reviewer_id',Auth::user()->id)
                ->update([
                    'protocol_status'   => $request->protocol_status,
                    'comment'           => $request->comment
                ]);
            }

        }

    }
}
