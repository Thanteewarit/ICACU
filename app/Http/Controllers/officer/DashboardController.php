<?php

namespace App\Http\Controllers\officer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Auth;
use App\Model\Protocol_docs;
class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if(auth()->user()->hasRole('reviewer')){
            $Protocol_docs          = Protocol_docs::where('protocol_status','6')
            ->get();

        }elseif(auth()->user()->hasRole('secretary')){
           
            $Protocol_docs          = Protocol_docs::where('protocol_status','3')
            ->Orwhere('protocol_status','7')
            ->get();
        }elseif(auth()->user()->hasRole('president')){
           
            $Protocol_docs          = Protocol_docs::where('protocol_status','5')
            ->Orwhere('protocol_status','8')
            ->get();
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
