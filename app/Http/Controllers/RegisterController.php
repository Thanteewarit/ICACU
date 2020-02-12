<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\StatusUser;
use App\Affiliation;
use App\Affiliation_type;

class RegisterController extends Controller
{

    public function index()
    {
        $StatusUser         =   StatusUser::where('status','Y')->get();
        $Affiliation        =   Affiliation::where('status','Y')->get();
        $Affiliation_type   =   Affiliation_type::where('status','Y')->get();
        return view('register', compact('StatusUser','Affiliation','Affiliation_type'));
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
