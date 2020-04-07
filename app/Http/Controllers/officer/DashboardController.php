<?php

namespace App\Http\Controllers\officer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Auth;
use App\Model\Protocol_docs;
use DB;
class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if(auth()->user()->hasRole('reviewer')){
            $Protocol_docs      =   DB::select("
            SELECT * , r4.animal_protocol_th as Asanimal_protocol_th , r3.name as StatusTodo, r4.project_proposal_th as project_proposal_th
            FROM protocol_docs as r1 
            JOIN protocol_reviewer_list as r2 ON r1.id = r2.protocol_id 
            JOIN job_status as r3 ON r1.protocol_status = r3.id
            JOIN protocol_opic01 as r4 ON r4.protocol_id = r1.id
            WHERE r1.protocol_status = '6' 
            AND r2.users_id = '".Auth::user()->id."'
            ");
            //dd( $Protocol_docs );

        }elseif(auth()->user()->hasRole('secretary')){
           
            // $Protocol_docs          = Protocol_docs::where('protocol_status','3')
            // ->Orwhere('protocol_status','7')
            // ->Orwhere('protocol_status','16')
            // ->get();      

            $Protocol_docs = DB::select("
            SELECT * , r5.name  AS typeName, r3.name as StatusTodo , r1.id as ptcId ,r4.animal_protocol_th as Asanimal_protocol_th
            FROM protocol_docs as r1 
            JOIN job_status as r3 ON r1.protocol_status = r3.id
            JOIN protocol_opic01 as r4 ON r4.protocol_id = r1.id
            JOIN protocol_type as r5 ON r5.id = r1.protocol_type
            WHERE r1.protocol_status = '3' 
            OR  r1.protocol_status = '7'
            OR  r1.protocol_status = '11'
            OR  r1.protocol_status = '16'
            OR  r1.protocol_status = '22'
            ");          
        }elseif(auth()->user()->hasRole('president')){
           
            // $Protocol_docs          = Protocol_docs::where('protocol_status','5')
            // ->Orwhere('protocol_status','8')
            // ->Orwhere('protocol_status','18')
            // ->get();

            $Protocol_docs = DB::select("
            SELECT * , r5.name  AS typeName, r3.name as StatusTodo , r1.id as ptcId
            FROM protocol_docs as r1 
            JOIN job_status as r3 ON r1.protocol_status = r3.id
            JOIN protocol_opic01 as r4 ON r4.protocol_id = r1.id
            JOIN protocol_type as r5 ON r5.id = r1.protocol_type
            WHERE r1.protocol_status = '5' 
            OR  r1.protocol_status = '8'
            OR  r1.protocol_status = '18'
            OR  r1.protocol_status = '23'
            ");
        }
        return view('officer.dashboard',compact(
            'Protocol_docs'
        ));

    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
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
