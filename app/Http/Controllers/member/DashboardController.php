<?php

namespace App\Http\Controllers\member;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Session;
use App\Model\Protocol_docs;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $Protocol_docs          = Protocol_docs::where('users_id',Auth::user()->id)
        ->where('protocol_status','>=','2')
        ->where('protocol_status','!=','14')
        ->where('show_status','Y')
        ->orWhere('protocol_status','4')
        ->get();
        return view('member.dashboard',compact('Protocol_docs'));
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
