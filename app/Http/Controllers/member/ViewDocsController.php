<?php

namespace App\Http\Controllers\member;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Auth;
use Session;
use App\Model\Protocol_docs;
use App\Model\Protocol_opic01;
use App\Model\Protocol_opic02;
use App\Model\Protocol_opic02_sub;
use App\Model\Protocol_opic02_sub02;
use App\Model\Protocol_opic03;
use App\Model\StatusUser;
use App\Model\Protocol_opic04;
use App\Model\Protocol_opic05;
use App\Model\Protocol_opic06;
use App\Model\Protocol_opic07;
use App\Model\Protocol_opic08;
use App\Model\Protocol_opic09;
use App\Model\Protocol_opic10;
use App\Model\Protocol_opic11;
use App\Model\Protocol_opic11_sub;
use App\Model\Protocol_opic12;
use App\Model\Protocol_opic13;
use App\Model\Protocol_opic14;
use App\Model\Protocol_opic15;
use App\Model\Protocol_opic16;
use App\Model\Protocol_opic17;
use App\Model\Protocol_opic18;
use App\Model\Protocol_opic18_sub01;
use App\Model\Protocol_opic18_sub02;
use App\Model\Protocol_opic18_sub03;
use App\Model\Protocol_opic18_sub04;
use App\Model\Protocol_opic18_sub05;
use App\Model\Protocol_opic18_sub06;
use App\Model\Protocol_opic19;
use App\Model\Protocol_opic20;
use App\Model\Protocol_opic21;
use App\Model\Protocol_opic22;
use App\Model\Protocol_opic23;
use App\Model\Protocol_opic24;
use App\Model\Protocol_opic25;
use App\Model\Protocol_opic26;
use App\Model\Protocol_opic27;
use App\Model\Protocol_opic28;
use App\Model\Protocol_opic30;
use App\Model\Protocol_opic30_sub01;
use App\Model\Protocol_opic30_sub02;
use App\Model\Budget;
use App\Model\UserAll;
use App\Model\Animal_stock;
use App\Model\Animal_common_name;
use App\Model\Protocol_secretary_opic;
use App\Model\Protocol_docsfile;

class ViewDocsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show($id)
    {
        $Animal_common_name =   Animal_common_name::all();
        $Animal_stock       =   Animal_stock::where('status','Y')->get();
        $Budget             =   Budget::where('status','Y')->get();
        $Protocol_docs      =   Protocol_docs::where('id',$id)->first();
        $Protocol_opic01    =   Protocol_opic01::where('protocol_id',$id)->first();
        $Protocol_opic02    =   Protocol_opic02::where('protocol_id',$id)->get();
        $Protocol_opic02_sub        =   Protocol_opic02_sub::where('protocol_id',$id)->get();
        $Protocol_opic02_sub02      =   Protocol_opic02_sub02::where('protocol_id',$id)->get();
        $Protocol_opic03    =   Protocol_opic03::where('protocol_id',$id)->first();
        $Protocol_opic04    =   Protocol_opic04::where('protocol_id',$id)->first();
        $Protocol_opic05    =   Protocol_opic05::where('protocol_id',$id)->get();
        $Protocol_opic06    =   Protocol_opic06::where('protocol_id',$id)->first();
        $Protocol_opic07    =   Protocol_opic07::where('protocol_id',$id)->first();
        $Protocol_opic08    =   Protocol_opic08::where('protocol_id',$id)->get();
        $Protocol_opic09    =   Protocol_opic09::where('protocol_id',$id)->first();
        $Protocol_opic10    =   Protocol_opic10::where('protocol_id',$id)->first();
        $Protocol_opic11    =   Protocol_opic11::where('protocol_id',$id)->first();
        $Protocol_opic11_sub    =   Protocol_opic11_sub::where('protocol_id',$id)->get();
        $Protocol_opic12    =   Protocol_opic12::where('protocol_id',$id)->first();
        $Protocol_opic13    =   Protocol_opic13::where('protocol_id',$id)->first();
        $Protocol_opic14    =   Protocol_opic14::where('protocol_id',$id)->first();
        $Protocol_opic15    =   Protocol_opic15::where('protocol_id',$id)->first();
        $Protocol_opic16    =   Protocol_opic16::where('protocol_id',$id)->first();
        $Protocol_opic17    =   Protocol_opic17::where('protocol_id',$id)->first();
        $Protocol_opic18    =   Protocol_opic18::where('protocol_id',$id)->first();
        $Protocol_opic18_sub01  =   Protocol_opic18_sub01::where('protocol_id',$id)->get();
        $Protocol_opic18_sub02  =   Protocol_opic18_sub02::where('protocol_id',$id)->get();
        $Protocol_opic18_sub03  =   Protocol_opic18_sub03::where('protocol_id',$id)->get();
        $Protocol_opic18_sub04  =   Protocol_opic18_sub04::where('protocol_id',$id)->get();
        $Protocol_opic18_sub05  =   Protocol_opic18_sub05::where('protocol_id',$id)->get();
        $Protocol_opic18_sub06  =   Protocol_opic18_sub06::where('protocol_id',$id)->get();
        $Protocol_opic19    =   Protocol_opic19::where('protocol_id',$id)->first();
        $Protocol_opic20    =   Protocol_opic20::where('protocol_id',$id)->first();
        $Protocol_opic21    =   Protocol_opic21::where('protocol_id',$id)->first();
        $Protocol_opic22    =   Protocol_opic22::where('protocol_id',$id)->first();
        $Protocol_opic23    =   Protocol_opic23::where('protocol_id',$id)->first();
        $Protocol_opic24    =   Protocol_opic24::where('protocol_id',$id)->first();
        $Protocol_opic25    =   Protocol_opic25::where('protocol_id',$id)->first();
        $Protocol_opic26    =   Protocol_opic26::where('protocol_id',$id)->first();
        $Protocol_opic27    =   Protocol_opic27::where('protocol_id',$id)->first();
        $Protocol_opic28    =   Protocol_opic28::where('protocol_id',$id)->first();
        $Protocol_opic30    =   Protocol_opic30::where('protocol_id',$id)->first();
        $Protocol_opic30_sub01    =   Protocol_opic30_sub01::where('protocol_id',$id)->get();
        $Protocol_opic30_sub02    =   Protocol_opic30_sub02::where('protocol_id',$id)->get();
        $UserAllL3          =   UserAll::where('admin_status','6')->get();
        $StatusUser  = StatusUser::all();
        $Protocol_secretary_opic    =   Protocol_secretary_opic::where('protocol_id',$id)->get();
        $Protocol_docsfile  =   Protocol_docsfile::where('protocol_id',$id)->get();
        $Protocol_secretary_opic    =   Protocol_secretary_opic::where('protocol_id',$id)->get();

        $Protocol_docsID       =   Protocol_docs::find($id);
        $Protocol_secretary_opicV1    =   Protocol_secretary_opic::where('protocol_id',$id)->where('protocol_status','!=','เหมาะสม')->get();
        $Protocol_docsHistory    =   Protocol_docs::where('protocol_number',$Protocol_docsID->protocol_number)->get();

        return view('member.protocol-docs-view',compact(
            'Protocol_docs',
            'Protocol_opic01',
            'Protocol_opic02',
            'Protocol_opic02_sub',
            'Protocol_opic02_sub02',
            'Protocol_opic03',
            'Protocol_opic04',
            'Budget',
            'Protocol_opic05',
            'Protocol_opic06',
            'Protocol_opic07',
            'Protocol_opic08',
            'Protocol_opic09',
            'Protocol_opic10',
            'Protocol_opic11',
            'Animal_common_name',
            'Animal_stock',
            'Protocol_opic11_sub',
            'Protocol_opic12',
            'Protocol_opic13',
            'Protocol_opic14',
            'Protocol_opic15',
            'Protocol_opic16',
            'Protocol_opic17',
            'Protocol_opic18',
            'Protocol_opic18_sub01',
            'Protocol_opic18_sub02',
            'Protocol_opic18_sub03',
            'Protocol_opic18_sub04',
            'Protocol_opic18_sub05',
            'Protocol_opic18_sub06',
            'Protocol_opic19',
            'Protocol_opic20',
            'Protocol_opic21',
            'Protocol_opic22',
            'Protocol_opic23',
            'Protocol_opic24',
            'Protocol_opic25',
            'Protocol_opic26',
            'Protocol_opic27',
            'Protocol_opic28',
            'Protocol_opic30',
            'Protocol_opic30_sub01',
            'Protocol_opic30_sub02',
            'StatusUser',
            'UserAllL3',
            'Protocol_secretary_opic',
            'Protocol_docsfile',
            'Protocol_docsHistory',
            'Protocol_secretary_opicV1'
        ));
    }
}
