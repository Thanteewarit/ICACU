<?php

namespace App\Http\Controllers\officer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\Protocol_reviewer_opic;
use App\Model\Protocol_secretary_opic;

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

            $Protocol_secretary_opic     =  new  Protocol_secretary_opic;
            $Protocol_secretary_opic->protocol_id        =   $request->protocol_id;
            $Protocol_secretary_opic->protocol_number    =   $request->protocol_number;
            $Protocol_secretary_opic->protocol_status    =   $request->protocol_status01;
            $Protocol_secretary_opic->secretary_id        =   Auth::user()->id;
            $Protocol_secretary_opic->comment            =   $request->merge_comment01;
            $Protocol_secretary_opic->save();
        }

        if(auth()->user()->hasRole('reviewer')){

            $Protocol_reviewer_opic     =  new  Protocol_reviewer_opic;
            $Protocol_reviewer_opic->protocol_id        =   $request->protocol_id;
            $Protocol_reviewer_opic->protocol_number    =   $request->protocol_number;
            $Protocol_reviewer_opic->protocol_status    =   $request->protocol_status;
            $Protocol_reviewer_opic->reviewer_id        =   Auth::user()->id;
            $Protocol_reviewer_opic->comment            =   $request->comment;
            $Protocol_reviewer_opic->save();

        }

    }
}
