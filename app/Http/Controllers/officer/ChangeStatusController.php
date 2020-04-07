<?php

namespace App\Http\Controllers\officer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Protocol_reviewer_list;
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
use App\Model\Protocol_secretary_opic;
use App\Model\protocol_docsfile;
use App\Model\Protocol_reviewer_opic;
use App\Model\Protocol_amendment;

class ChangeStatusController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create(Request $request)
    {
        $sum = count($request->users_id);
        if ($sum != 0) {
            $number =  1;
            for ($i = 0; $i < $sum; $i++) {

                $Protocol_reviewer_list                     = new Protocol_reviewer_list;
                $Protocol_reviewer_list->users_id           = $request->users_id[$i];
                $Protocol_reviewer_list->reviewer_number    = $number++;
                $Protocol_reviewer_list->protocol_id        = $request->protocol_id;
                $Protocol_reviewer_list->save();
            }
        }
        // $Protocol_docs  = Protocol_docs::find($request->protocol_id);
        // $Protocol_docs->protocol_status     = "6";
        // $Protocol_docs->save();
        return redirect()->route('officer.protocol_list.index')->with('yes', 'อนุมัติให้สมาชิกเรียบร้อย');
        
    }

    public function SendtoUser(Request $request)
    {

        $Protocol_docs  = Protocol_docs::find($request->protocol_id);
        $Protocol_docs->protocol_status     = "4";
        $Protocol_docs->protocol_edit     = "1";
        $Protocol_docs->comment     = $request->comment;
        $Protocol_docs->save();

        return redirect()->route('officer.protocol_list.index')->with('yes', 'ทำรายการสำเร็จ');
        
    }

    public function update(Request $request)
    {
        $Protocol_docsStatus  = Protocol_docs::find($request->id);
        if(auth()->user()->hasRole('secretary')){
            
            if($Protocol_docsStatus->protocol_status==3)
            {
                $Protocol_docs  = Protocol_docs::find($request->id);
                $Protocol_docs->protocol_status     = "5";
                $Protocol_docs->save();

            }elseif($Protocol_docsStatus->protocol_status==7){

                $Protocol_docs  = Protocol_docs::find($request->id);
                $Protocol_docs->protocol_status     = "8";
                $Protocol_docs->protocol_edit     = "0";
                $Protocol_docs->save();

            }elseif($Protocol_docsStatus->protocol_status==16){

                $Protocol_docs  = Protocol_docs::find($request->id);
                $Protocol_docs->protocol_status     = "18";
                $Protocol_docs->save();

            }elseif($Protocol_docsStatus->protocol_status==22){

                $Protocol_docs  = Protocol_docs::find($request->id);
                $Protocol_docs->protocol_status     = "23";
                $Protocol_docs->save();

            }
            return redirect()->route('officer.protocol_list.index')->with('yes', 'อนุมัติให้สมาชิกเรียบร้อย');
        }
        if(auth()->user()->hasRole('member')){
            
            if($Protocol_docsStatus->protocol_status==15)
            {
                $Protocol_docs  = Protocol_docs::find($request->id);
                $Protocol_docs->protocol_status     = "3";
                $Protocol_docs->save();

            }elseif($Protocol_docsStatus->protocol_status==7){

                $Protocol_docs  = Protocol_docs::find($request->id);
                $Protocol_docs->protocol_status     = "8";
                $Protocol_docs->save();
            }elseif($Protocol_docsStatus->protocol_status==18){

                $Protocol_docs  = Protocol_docs::find($request->id);
                $Protocol_docs->protocol_status     = "10";
                $Protocol_docs->save();

            }
            return redirect()->route('member.protocol_list.index')->with('yes', 'อนุมัติให้สมาชิกเรียบร้อย');
            
        }
        if(auth()->user()->hasRole('president')){
            if($Protocol_docsStatus->protocol_status==5)
            {
                $Protocol_docs  = Protocol_docs::find($request->id);
                $Protocol_docs->protocol_status     = "6";
                $Protocol_docs->save();
            }elseif($Protocol_docsStatus->protocol_status==8){

                $Protocol_docs  = Protocol_docs::find($request->id);
                $Protocol_docs->protocol_status     = "10";
                $Protocol_docs->save();
            }elseif($Protocol_docsStatus->protocol_status==18){

                $Protocol_docs  = Protocol_docs::find($request->id);
                $Protocol_docs->protocol_status     = "10";
                $Protocol_docs->save();

            }elseif($Protocol_docsStatus->protocol_status==23){

                $Protocol_docs  = Protocol_docs::find($request->id);
                $Protocol_docs->protocol_status     = "24";
                $Protocol_docs->show_status     = "N";
                $Protocol_docs->save();

            }
            return redirect()->route('officer.protocol_list.index')->with('yes', 'อนุมัติให้สมาชิกเรียบร้อย');

        }
        if(auth()->user()->hasRole('reviewer')){
            
            $Protocol_reviewer_list     =   Protocol_reviewer_list::where('protocol_id',$request->id)
            ->where('users_id',Auth::user()->id)
            ->update([
                'status'                 => "Y"
            ]);

            $Protocol_reviewer_listCount     =   Protocol_reviewer_list::where('protocol_id',$request->id)
            ->where('status','N')
            ->count();
            
            if($Protocol_reviewer_listCount==0){
                $Protocol_docs  = Protocol_docs::find($request->id);
                $Protocol_docs->protocol_status     = "7";
                $Protocol_docs->save();
            }
            return redirect()->route('officer.protocol_list.index')->with('yes', 'อนุมัติให้สมาชิกเรียบร้อย');

        }

        
    }

    public function reply(Request $request)
    {
        $Protocol_docs  = Protocol_docs::find($request->id);
        $Protocol_docs->protocol_status     = "4";
        $Protocol_docs->save();
        return redirect()->route('officer.protocol_list.index')->with('yes', 'ส่งกลับให้สมาชิกแก้ไขเรียบร้อย');
    }
    public function replySecretary(Request $request)
    {
        $Protocol_docs  = Protocol_docs::find($request->id);
        $Protocol_docs->protocol_status     = "7";
        $Protocol_docs->protocol_edit     = "1";
        $Protocol_docs->save();
        return redirect()->route('officer.protocol_list.index')->with('yes', 'ทำรายการสำเร็จ');
    }
    public function replyEdit(Request $request)
    {
        $Protocol_docs  = Protocol_docs::find($request->id);
        $Protocol_docs->protocol_status     = "14";
        $Protocol_docs->protocol_edit     = "0";
        $Protocol_docs->protocol_v2     = "0";
        $Protocol_docs->show_status     = "N";
        $Protocol_docs->save();
        

        $Protocol_docsCk  = Protocol_docs::orderBy('id','desc')->first();
        $Protocol_docs  =   new Protocol_docs;
        $Protocol_docs->users_id = $Protocol_docsCk->users_id;
        $Protocol_docs->protocol_number = $Protocol_docsCk->protocol_number;
        $Protocol_docs->protocol_status = "15";
        $Protocol_docs->protocol_edit     = "1";
        $Protocol_docs->protocol_v2     = "1";
        $Protocol_docs->number_ver = ($Protocol_docsCk->number_ver);
        $Protocol_docs->number_run = ($Protocol_docsCk->number_run+1);
        $Protocol_docs->protocol_type = $Protocol_docsCk->protocol_type;
        $Protocol_docs->save();
        Session::put('protocol_id', $Protocol_docs->id);

        //01 Save
        $Protocol_opic01Old     =   Protocol_opic01::where('protocol_id',$request->id)->first();
        $Protocol_opic01 = new Protocol_opic01;
        $Protocol_opic01->protocol_id    =  Session::get('protocol_id');
        $Protocol_opic01->animal_protocol_th    =  $Protocol_opic01Old->animal_protocol_th;
        $Protocol_opic01->animal_protocol_en    =  $Protocol_opic01Old->animal_protocol_en;
        $Protocol_opic01->project_proposal_th    =  $Protocol_opic01Old->project_proposal_th;
        $Protocol_opic01->project_proposal_en    =  $Protocol_opic01Old->project_proposal_en;
        $Protocol_opic01->save();

        //02 SAVE
        $Protocol_opic02Old     =   Protocol_opic02::where('protocol_id',$request->id)->get();
        if(!empty($Protocol_opic02Old)){
            foreach($Protocol_opic02Old as $r){

                $Protocol_opic02    = new Protocol_opic02;
                $Protocol_opic02->protocol_id       = Session::get('protocol_id');
                $Protocol_opic02->number01          = $r->number01;
                $Protocol_opic02->Name_th           = $r->Name_th;
                $Protocol_opic02->Surname_th        = $r->Surname_th;
                $Protocol_opic02->Name_en           = $r->Name_en;
                $Protocol_opic02->Surname_en        = $r->Surname_en;
                $Protocol_opic02->opic02_status     = $r->opic02_status;
                $Protocol_opic02->opic02_Other      = $r->opic02_Other;
                $Protocol_opic02->opic02_Align_th   = $r->opic02_Align_th;
                $Protocol_opic02->opic02_Align_en   = $r->opic02_Align_en;
                $Protocol_opic02->opic02_Other_position_th        = $r->opic02_Other_position_th;
                $Protocol_opic02->opic02_Other_position_en        = $r->opic02_Other_position_en;
                $Protocol_opic02->opic02_Contact_address_th        = $r->opic02_Contact_address_th;
                $Protocol_opic02->opic02_Contact_address_en        = $r->opic02_Contact_address_en;
                $Protocol_opic02->opic02_Tel        = $r->opic02_Tel;
                $Protocol_opic02->opic02_Fax        = $r->opic02_Fax;
                $Protocol_opic02->opic02_email        = $r->opic02_email;
                $Protocol_opic02->opic02_responsible        = $r->opic02_responsible;
                $Protocol_opic02->save();

            }
        }

        //02-01
        $Protocol_opic02_subOld     =   Protocol_opic02_sub::where('protocol_id',$request->id)->get();
        if(!empty($Protocol_opic02_subOld)){
            foreach($Protocol_opic02_subOld as $r){

                $Protocol_opic02_sub                    = new Protocol_opic02_sub;
                $Protocol_opic02_sub->protocol_id       = Session::get('protocol_id');
                $Protocol_opic02_sub->name_th           = $r->name_th;
                $Protocol_opic02_sub->lastname_th       = $r->lastname_th;
                $Protocol_opic02_sub->name_en           = $r->name_en;
                $Protocol_opic02_sub->lastname_en       = $r->lastname_en;
                $Protocol_opic02_sub->position_th       = $r->position_th;
                $Protocol_opic02_sub->position_en       = $r->position_en;
                $Protocol_opic02_sub->address_th        = $r->address_th;
                $Protocol_opic02_sub->address_en        = $r->address_en;
                $Protocol_opic02_sub->Tel               = $r->Tel;
                $Protocol_opic02_sub->Fax               = $r->Fax;
                $Protocol_opic02_sub->email             = $r->email;
                $Protocol_opic02_sub->number01          = $r->number01;
                $Protocol_opic02_sub->save();

            }
        }

        //02-02
        $Protocol_opic02_sub02Old     =   Protocol_opic02_sub02::where('protocol_id',$request->id)->get();
        if(!empty($Protocol_opic02_sub02Old)){
            foreach($Protocol_opic02_sub02Old as $r){

                $Protocol_opic02_sub02                    = new Protocol_opic02_sub02;
                $Protocol_opic02_sub02->protocol_id       = Session::get('protocol_id');
                $Protocol_opic02_sub02->number01          = $r->number01;
                $Protocol_opic02_sub02->protocol_file     = $r->protocol_file;
                $Protocol_opic02_sub02->protocol_01       = $r->protocol_01;
                $Protocol_opic02_sub02->protocol_02       = $r->protocol_02;
                $Protocol_opic02_sub02->protocol_03       = $r->protocol_03;
                $Protocol_opic02_sub02->protocol_04       = $r->protocol_04;
                $Protocol_opic02_sub02->protocol_05       = $r->protocol_05;
                $Protocol_opic02_sub02->protocol_06       = $r->protocol_06;
                $Protocol_opic02_sub02->protocol_07       = $r->protocol_07;
                $Protocol_opic02_sub02->protocol_08       = $r->protocol_08;
                $Protocol_opic02_sub02->protocol_09       = $r->protocol_09;
                $Protocol_opic02_sub02->protocol_10       = $r->protocol_10;
                $Protocol_opic02_sub02->protocol_11       = $r->protocol_11;
                $Protocol_opic02_sub02->protocol_12       = $r->protocol_12;
                $Protocol_opic02_sub02->protocol_13       = $r->protocol_13;
                $Protocol_opic02_sub02->save();

            }
        }
        //03 Save
        $Protocol_opic03Old     =   Protocol_opic03::where('protocol_id',$request->id)->first();
        if(!empty($Protocol_opic03Old)){
            $Protocol_opic03                    = new Protocol_opic03;
            $Protocol_opic03->protocol_id       = Session::get('protocol_id');
            $Protocol_opic03->Name_th           = $Protocol_opic03Old->Name_th;
            $Protocol_opic03->Surname_th        = $Protocol_opic03Old->Surname_th;
            $Protocol_opic03->Name_en           = $Protocol_opic03Old->Name_en;
            $Protocol_opic03->Surname_en        = $Protocol_opic03Old->Surname_en;
            $Protocol_opic03->position_th       = $Protocol_opic03Old->position_th;
            $Protocol_opic03->position_en       = $Protocol_opic03Old->position_en;
            $Protocol_opic03->address_th        = $Protocol_opic03Old->address_th;
            $Protocol_opic03->address_en        = $Protocol_opic03Old->address_en;
            $Protocol_opic03->Tel               = $Protocol_opic03Old->Tel;
            $Protocol_opic03->Fax               = $Protocol_opic03Old->Fax;
            $Protocol_opic03->email             = $Protocol_opic03Old->email;
            $Protocol_opic03->save();
        }

        //04 Save
        $Protocol_opic04Old     =   Protocol_opic04::where('protocol_id',$request->id)->first();
        if(!empty($Protocol_opic04Old)){
            $Protocol_opic04    = new Protocol_opic04;
            $Protocol_opic04->protocol_id           = Session::get('protocol_id');
            $Protocol_opic04->topic4_1              = $request->topic4_1;
            $Protocol_opic04->topic4_1_n1           = $request->topic4_1_n1;
            $Protocol_opic04->topic4_1_n2           = $request->topic4_1_n2;
            $Protocol_opic04->topic4_1_1            = $request->topic4_1_1;
            $Protocol_opic04->topic4_1_1n1          = $request->topic4_1_1n1;
            $Protocol_opic04->topic4_1_1n2          = $request->topic4_1_1n2;
            $Protocol_opic04->topic4_1_1n3          = $request->topic4_1_1n3;
            $Protocol_opic04->topic4_1_1n4          = $request->topic4_1_1n4;
            $Protocol_opic04->topic4_1_1n5          = $request->topic4_1_1n5;
            $Protocol_opic04->topic4_1_1n6          = $request->topic4_1_1n6;
            $Protocol_opic04->topic4_1_1n7          = $request->topic4_1_1n7;
            $Protocol_opic04->topic4_1_1n8          = $request->topic4_1_1n8;
            $Protocol_opic04->topic4_1_1n9          = $request->topic4_1_1n9;
            $Protocol_opic04->topic4_1_1n10         = $request->topic4_1_1n10;
            $Protocol_opic04->topic4_1_1n11         = $request->topic4_1_1n11;
            $Protocol_opic04->topic4_1_2            = $request->topic4_1_2;
            $Protocol_opic04->topic4_2              = $request->topic4_2;
            $Protocol_opic04->topic4_2n1            = $request->topic4_2n1;
            $Protocol_opic04->topic4_2n2            = $request->topic4_2n2;
            $Protocol_opic04->topic4_2n3            = $request->topic4_2n3;
            $Protocol_opic04->topic4_2n4            = $request->topic4_2n4;
            $Protocol_opic04->topic4_2n5            = $request->topic4_2n5;
            $Protocol_opic04->topic4_2n6            = $request->topic4_2n6;
            $Protocol_opic04->topic4_2n7            = $request->topic4_2n7;
            $Protocol_opic04->topic4_2n8            = $request->topic4_2n8;
            $Protocol_opic04->topic4_2n9            = $request->topic4_2n9;
            $Protocol_opic04->topic4_2n10           = $request->topic4_2n10;
            $Protocol_opic04->topic4_3              = $request->topic4_3;
            $Protocol_opic04->topic4_3n1            = $request->topic4_3n1;
            $Protocol_opic04->topic4_3n2            = $request->topic4_3n2;
            $Protocol_opic04->topic4_3n3            = $request->topic4_3n3;
            $Protocol_opic04->topic4_3n4            = $request->topic4_3n4;
            $Protocol_opic04->topic4_3n5            = $request->topic4_3n5;
            $Protocol_opic04->topic4_3n6            = $request->topic4_3n6;
            $Protocol_opic04->topic4_4              = $request->topic4_4;
            $Protocol_opic04->topic4_4n1            = $request->topic4_4n1;
            $Protocol_opic04->topic4_5              = $request->topic4_5;
            $Protocol_opic04->topic4_5n1            = $request->topic4_5n1;
            $Protocol_opic04->save();
        }

        //05 Save
        $Protocol_opic05Old     =   Protocol_opic05::where('protocol_id',$request->id)->get();
        if(!empty($Protocol_opic05Old)){
            foreach($Protocol_opic05Old as $r){
                $Protocol_opic05    = new Protocol_opic05;
                $Protocol_opic05->protocol_id   = Session::get('protocol_id');
                $Protocol_opic05->FundingSource = $r->FundingSource;
                $Protocol_opic05->FundingPeriod = $r->FundingPeriod;
                $Protocol_opic05->Budget        = $r->Budget;
                $Protocol_opic05->save();
            }
        }

        //06 Save
        $Protocol_opic06Old     =   Protocol_opic06::where('protocol_id',$request->id)->first();
        if(!empty($Protocol_opic06Old)){
            $Protocol_opic06 = new Protocol_opic06;
            $Protocol_opic06->protocol_id = Session::get('protocol_id');
            $Protocol_opic06->Executive = $Protocol_opic06Old->Executive;
            $Protocol_opic06->save();
        }

        //07 Save
        $Protocol_opic07Old     =   Protocol_opic07::where('protocol_id',$request->id)->first();
        if(!empty($Protocol_opic07Old)){

            $Protocol_opic07 = new Protocol_opic07;
            $Protocol_opic07->protocol_id = Session::get('protocol_id');
            $Protocol_opic07->Background = $Protocol_opic07Old->Background;
            $Protocol_opic07->Literature = $Protocol_opic07Old->Literature;
            $Protocol_opic07->Lastdate = $Protocol_opic07Old->Lastdate;
            $Protocol_opic07->Period_start = $Protocol_opic07Old->Period_start;
            $Protocol_opic07->Period_end = $Protocol_opic07Old->Period_end;
            $Protocol_opic07->Keywords = $Protocol_opic07Old->Keywords;
            $Protocol_opic07->Results = $Protocol_opic07Old->Results;
            $Protocol_opic07->reference = $Protocol_opic07Old->reference;
            $Protocol_opic07->save();

        }

        //08 Save
        $Protocol_opic08Old     =   Protocol_opic08::where('protocol_id',$request->id)->get();
        if(!empty($Protocol_opic08Old)){
            foreach($Protocol_opic08Old as $r){

                $Protocol_opic08    = new Protocol_opic08;
                $Protocol_opic08->protocol_id   = Session::get('protocol_id');
                $Protocol_opic08->Objective = $r->Objective;
                $Protocol_opic08->save();
            }
        }

        //09 Save
        $Protocol_opic09Old     =   Protocol_opic09::where('protocol_id',$request->id)->first();
        if(!empty($Protocol_opic09Old)){

            $Protocol_opic09    = new Protocol_opic09;
            $Protocol_opic09->protocol_id   = Session::get('protocol_id');
            $Protocol_opic09->Replacement01 = $Protocol_opic09Old->Replacement01;
            $Protocol_opic09->Replacement02 = $Protocol_opic09Old->Replacement02;
            $Protocol_opic09->Replacement03 = $Protocol_opic09Old->Replacement03;
            $Protocol_opic09->save();

        }
        //10 Save
        $protocol_opic10Old     =   protocol_opic10::where('protocol_id',$request->id)->first();
        if(!empty($protocol_opic10Old)){

            $protocol_opic10    = new protocol_opic10;
            $protocol_opic10->protocol_id   = Session::get('protocol_id');
            $protocol_opic10->anticipated01 = $protocol_opic10Old->anticipated01;
            $protocol_opic10->anticipated02 = $protocol_opic10Old->anticipated02;
            $protocol_opic10->save();

        }
        //11 Save
        $protocol_opic11Old     =   protocol_opic11::where('protocol_id',$request->id)->first();
        if(!empty($protocol_opic11Old)){

            $protocol_opic11    = new protocol_opic11;
            $protocol_opic11->protocol_id   = Session::get('protocol_id');
            $protocol_opic11->Period        = $protocol_opic11Old->Period;
            $protocol_opic11->AnimalModel   = $protocol_opic11Old->AnimalModel;
            $protocol_opic11->animalsRequired = $protocol_opic11Old->animalsRequired;
            $protocol_opic11->caseWildlife  = $protocol_opic11Old->caseWildlife;
            $protocol_opic11->save();

        }
        //11-02 Save
        $Protocol_opic11_subOld     =   Protocol_opic11_sub::where('protocol_id',$request->id)->get();
        if(!empty($Protocol_opic11_subOld)){
            foreach($Protocol_opic11_subOld as $r){

                $Protocol_opic11_sub    = new Protocol_opic11_sub;
                $Protocol_opic11_sub->protocol_id   = Session::get('protocol_id');
                $Protocol_opic11_sub->Common_name   = $r->Common_name;
                $Protocol_opic11_sub->Genus_Species = $r->Genus_Species;
                $Protocol_opic11_sub->Strain_Stock  = $r->Strain_Stock;
                $Protocol_opic11_sub->Age           = $r->Age;
                $Protocol_opic11_sub->Weight        = $r->Weight;
                $Protocol_opic11_sub->Sex           = $r->Sex;
                $Protocol_opic11_sub->Number        = $r->Number;
                $Protocol_opic11_sub->status        = "Y";
                $Protocol_opic11_sub->save();
            }
        }

        //12 Save
        $Protocol_opic12Old     =   Protocol_opic12::where('protocol_id',$request->id)->first();
        if(!empty($Protocol_opic12Old)){

            $protocol_opic12    = new Protocol_opic12;
            $protocol_opic12->protocol_id   = Session::get('protocol_id');
            $protocol_opic12->ptc12_01      = $Protocol_opic12Old->ptc12_01;
            $protocol_opic12->ptc12_01_sub  = $Protocol_opic12Old->ptc12_01_sub;
            $protocol_opic12->ptc12_02      = $Protocol_opic12Old->ptc12_02;
            $protocol_opic12->ptc12_02_sub  = $Protocol_opic12Old->ptc12_02_sub;
            $protocol_opic12->ptc12_03      = $Protocol_opic12Old->ptc12_03;
            $protocol_opic12->ptc12_03_sub_01 = $Protocol_opic12Old->ptc12_03_sub_01;
            $protocol_opic12->ptc12_03_sub_02 = $Protocol_opic12Old->ptc12_03_sub_02;
            $protocol_opic12->ptc12_03_sub_03 = $Protocol_opic12Old->ptc12_03_sub_03;
            $protocol_opic12->ptc12_03_sub_04 = $Protocol_opic12Old->ptc12_03_sub_04;
            $protocol_opic12->ptc12_04      = $Protocol_opic12Old->ptc12_04;
            $protocol_opic12->ptc12_03_sub  = $Protocol_opic12Old->ptc12_03_sub;
            $protocol_opic12->ptc12_05_01   = $Protocol_opic12Old->ptc12_05_01;
            $protocol_opic12->ptc12_05_02   = $Protocol_opic12Old->ptc12_05_02;
            $protocol_opic12->ptc12_05_03   = $Protocol_opic12Old->ptc12_05_03;
            $protocol_opic12->ptc12_05_04   = $Protocol_opic12Old->ptc12_05_04;
            $protocol_opic12->ptc12_05_05   = $Protocol_opic12Old->ptc12_05_05;
            $protocol_opic12->ptc12_05_06   = $Protocol_opic12Old->ptc12_05_06;
            $protocol_opic12->ptc12_05_06_sub = $Protocol_opic12Old->ptc12_05_06_sub;
            $protocol_opic12->ptc12_06_01   = $Protocol_opic12Old->ptc12_06_01;
            $protocol_opic12->ptc12_06_02   = $Protocol_opic12Old->ptc12_06_02;
            $protocol_opic12->ptc12_06_03   = $Protocol_opic12Old->ptc12_06_03;
            $protocol_opic12->ptc12_06_03_sub = $Protocol_opic12Old->ptc12_06_03_sub;
            $protocol_opic12->save();

        }
        //13 Save
        $Protocol_opic13Old     =   Protocol_opic13::where('protocol_id',$request->id)->first();
        if(!empty($Protocol_opic13Old)){

            $protocol_opic13    = new Protocol_opic13;
            $protocol_opic13->protocol_id   = Session::get('protocol_id');
            $protocol_opic13->ptc13_01      = $Protocol_opic13Old->ptc13_01;
            $protocol_opic13->ptc13_02      = $Protocol_opic13Old->ptc13_02;
            $protocol_opic13->ptc13_03      = $Protocol_opic13Old->ptc13_03;
            $protocol_opic13->ptc13_04      = $Protocol_opic13Old->ptc13_04;
            $protocol_opic13->ptc13_05      = $Protocol_opic13Old->ptc13_05;
            $protocol_opic13->ptc13_06      = $Protocol_opic13Old->ptc13_06;
            $protocol_opic13->ptc13_07      = $Protocol_opic13Old->ptc13_07;
            $protocol_opic13->ptc13_08      = $Protocol_opic13Old->ptc13_08;
            $protocol_opic13->ptc13_09      = $Protocol_opic13Old->ptc13_09;
            $protocol_opic13->ptc13_10      = $Protocol_opic13Old->ptc13_10;
            $protocol_opic13->ptc13_11      = $Protocol_opic13Old->ptc13_11;
            $protocol_opic13->ptc13_12      = $Protocol_opic13Old->ptc13_12;
            $protocol_opic13->ptc13_12_sub  = $Protocol_opic13Old->ptc13_12_sub;
            $protocol_opic13->ptc13_13      = $Protocol_opic13Old->ptc13_13;
            $protocol_opic13->ptc13_13_sub  = $Protocol_opic13Old->ptc13_13_sub;
            $protocol_opic13->ptc13_14      = $Protocol_opic13Old->ptc13_14;
            $protocol_opic13->ptc13_15      = $Protocol_opic13Old->ptc13_15;
            $protocol_opic13->ptc13_16      = $Protocol_opic13Old->ptc13_16;
            $protocol_opic13->ptc13_17      = $Protocol_opic13Old->ptc13_17;
            $protocol_opic13->ptc13_18      = $Protocol_opic13Old->ptc13_18;
            $protocol_opic13->ptc13_19      = $Protocol_opic13Old->ptc13_19;
            $protocol_opic13->ptc13_19_sub  = $Protocol_opic13Old->ptc13_19_sub;
            $protocol_opic13->ptc13_20      = $Protocol_opic13Old->ptc13_20;
            $protocol_opic13->ptc13_20_sub  = $Protocol_opic13Old->ptc13_20_sub;
            $protocol_opic13->ptc13_21      = $Protocol_opic13Old->ptc13_21;
            $protocol_opic13->save();

        }

        //14 Save
        $Protocol_opic14Old     =   Protocol_opic14::where('protocol_id',$request->id)->first();
        if(!empty($Protocol_opic14Old)){

            $Protocol_opic14    = new Protocol_opic14;
            $Protocol_opic14->protocol_id   = Session::get('protocol_id');
            $Protocol_opic14->ptc14_01      = $Protocol_opic14Old->ptc14_01;
            $Protocol_opic14->ptc14_01_sub  = $Protocol_opic14Old->ptc14_01_sub;
            $Protocol_opic14->ptc14_02      = $Protocol_opic14Old->ptc14_02;
            $Protocol_opic14->ptc14_02_sub  = $Protocol_opic14Old->ptc14_02_sub;
            $Protocol_opic14->ptc14_03      = $Protocol_opic14Old->ptc14_03;
            $Protocol_opic14->ptc14_04      = $Protocol_opic14Old->ptc14_04;
            $Protocol_opic14->ptc14_05      = $Protocol_opic14Old->ptc14_05;
            $Protocol_opic14->ptc14_05_sub  = $Protocol_opic14Old->ptc14_05_sub;
            $Protocol_opic14->save();

        }

        //15 Save
        $Protocol_opic15Old     =   Protocol_opic15::where('protocol_id',$request->id)->first();
        if(!empty($Protocol_opic15Old)){

            $Protocol_opic15    = new Protocol_opic15;
            $Protocol_opic15->protocol_id   = Session::get('protocol_id');
            $Protocol_opic15->ptc15_01      = $Protocol_opic15Old->ptc15_01;
            $Protocol_opic15->ptc15_02      = $Protocol_opic15Old->ptc15_02;
            $Protocol_opic15->ptc15_02_sub  = $Protocol_opic15Old->ptc15_02_sub; 
            $Protocol_opic15->ptc15_03      = $Protocol_opic15Old->ptc15_03; 
            $Protocol_opic15->ptc15_04      = $Protocol_opic15Old->ptc15_04; 
            $Protocol_opic15->ptc15_04_sub  = $Protocol_opic15Old->ptc15_04_sub; 
            $Protocol_opic15->save();

        }

        //16 Save
        $Protocol_opic16Old     =   Protocol_opic16::where('protocol_id',$request->id)->first();
        if(!empty($Protocol_opic16Old)){

            $Protocol_opic16    = new Protocol_opic16;
            $Protocol_opic16->protocol_id   = Session::get('protocol_id');
            $Protocol_opic16->ptc16_01      = $Protocol_opic16Old->ptc16_01; 
            $Protocol_opic16->ptc16_02      = $Protocol_opic16Old->ptc16_02; 
            $Protocol_opic16->ptc16_02_sub      = $Protocol_opic16Old->ptc16_02_sub; 
            $Protocol_opic16->ptc16_03      = $Protocol_opic16Old->ptc16_03; 
            $Protocol_opic16->ptc16_04      = $Protocol_opic16Old->ptc16_04; 
            $Protocol_opic16->ptc16_05      = $Protocol_opic16Old->ptc16_05; 
            $Protocol_opic16->ptc16_06      = $Protocol_opic16Old->ptc16_06; 
            $Protocol_opic16->ptc16_07      = $Protocol_opic16Old->ptc16_07; 
            $Protocol_opic16->ptc16_07_sub      = $Protocol_opic16Old->ptc16_07_sub; 
            $Protocol_opic16->ptc16_08      = $Protocol_opic16Old->ptc16_08; 
            $Protocol_opic16->ptc16_08_sub      = $Protocol_opic16Old->ptc16_08_sub; 
            $Protocol_opic16->ptc16_09      = $Protocol_opic16Old->ptc16_09; 
            $Protocol_opic16->ptc16_09_sub      = $Protocol_opic16Old->ptc16_09_sub; 
            $Protocol_opic16->ptc16_10      = $Protocol_opic16Old->ptc16_10; 
            $Protocol_opic16->ptc16_11      = $Protocol_opic16Old->ptc16_11; 
            $Protocol_opic16->ptc16_12      = $Protocol_opic16Old->ptc16_12; 
            $Protocol_opic16->ptc16_13      = $Protocol_opic16Old->ptc16_13; 
            $Protocol_opic16->ptc16_14      = $Protocol_opic16Old->ptc16_14; 
            $Protocol_opic16->ptc16_15      = $Protocol_opic16Old->ptc16_15; 
            $Protocol_opic16->ptc16_16      = $Protocol_opic16Old->ptc16_16; 
            $Protocol_opic16->ptc16_17      = $Protocol_opic16Old->ptc16_17; 
            $Protocol_opic16->ptc16_18      = $Protocol_opic16Old->ptc16_18; 
            $Protocol_opic16->ptc16_19      = $Protocol_opic16Old->ptc16_19; 
            $Protocol_opic16->ptc16_19_sub      = $Protocol_opic16Old->ptc16_19_sub; 
            $Protocol_opic16->ptc16_20      = $Protocol_opic16Old->ptc16_20; 
            $Protocol_opic16->ptc16_21      = $Protocol_opic16Old->ptc16_21; 
            $Protocol_opic16->ptc16_22      = $Protocol_opic16Old->ptc16_22; 
            $Protocol_opic16->ptc16_23      = $Protocol_opic16Old->ptc16_23; 
            $Protocol_opic16->ptc16_24      = $Protocol_opic16Old->ptc16_24; 
            $Protocol_opic16->ptc16_25      = $Protocol_opic16Old->ptc16_25; 
            $Protocol_opic16->ptc16_26      = $Protocol_opic16Old->ptc16_26; 
            $Protocol_opic16->ptc16_26_sub      = $Protocol_opic16Old->ptc16_26_sub; 
            $Protocol_opic16->ptc16_27      = $Protocol_opic16Old->ptc16_27; 
            $Protocol_opic16->ptc16_28      = $Protocol_opic16Old->ptc16_28; 
            $Protocol_opic16->ptc16_28_sub      = $Protocol_opic16Old->ptc16_28_sub; 
            $Protocol_opic16->ptc16_29      = $Protocol_opic16Old->ptc16_29; 
            $Protocol_opic16->ptc16_30      = $Protocol_opic16Old->ptc16_30; 
            $Protocol_opic16->ptc16_30_sub      = $Protocol_opic16Old->ptc16_30_sub; 
            $Protocol_opic16->ptc16_31      = $Protocol_opic16Old->ptc16_31; 
            $Protocol_opic16->ptc16_32      = $Protocol_opic16Old->ptc16_32; 
            $Protocol_opic16->ptc16_32_sub      = $Protocol_opic16Old->ptc16_32_sub; 
            $Protocol_opic16->ptc16_33      = $Protocol_opic16Old->ptc16_33; 
            $Protocol_opic16->ptc16_33_sub      = $Protocol_opic16Old->ptc16_33_sub; 
            $Protocol_opic16->ptc16_34      = $Protocol_opic16Old->ptc16_34; 
            $Protocol_opic16->ptc16_35      = $Protocol_opic16Old->ptc16_35; 
            $Protocol_opic16->ptc16_35_sub      = $Protocol_opic16Old->ptc16_35_sub; 
            $Protocol_opic16->ptc16_36      = $Protocol_opic16Old->ptc16_36; 
            $Protocol_opic16->ptc16_37      = $Protocol_opic16Old->ptc16_37; 
            $Protocol_opic16->ptc16_37_sub      = $Protocol_opic16Old->ptc16_37_sub; 
            $Protocol_opic16->ptc16_38_      = $Protocol_opic16Old->ptc16_38_; 
            $Protocol_opic16->ptc16_38      = $Protocol_opic16Old->ptc16_38; 
            $Protocol_opic16->ptc16_39      = $Protocol_opic16Old->ptc16_39; 
            $Protocol_opic16->ptc16_39_sub      = $Protocol_opic16Old->ptc16_39_sub; 
            $Protocol_opic16->save();

        }

        //17 Save
        $Protocol_opic17Old     =   Protocol_opic17::where('protocol_id',$request->id)->first();
        if(!empty($Protocol_opic17Old)){

            $Protocol_opic17                = new Protocol_opic17;
            $Protocol_opic17->protocol_id   = Session::get('protocol_id');
            $Protocol_opic17->ptc17_01      = $Protocol_opic17Old->ptc17_01; 
            $Protocol_opic17->ptc17_02      = $Protocol_opic17Old->ptc17_02; 
            $Protocol_opic17->save();

        }

        //18 Save
        $Protocol_opic18Old     =   Protocol_opic18::where('protocol_id',$request->id)->first();
        if(!empty($Protocol_opic18Old)){

            $Protocol_opic18                = new Protocol_opic18;
            $Protocol_opic18->protocol_id   = Session::get('protocol_id');
            $Protocol_opic18->ptc18_01      = $Protocol_opic18Old->ptc18_01; 
            $Protocol_opic18->ptc18_02      = $Protocol_opic18Old->ptc18_02;
            $Protocol_opic18->ptc18_03      = $Protocol_opic18Old->ptc18_03;
            $Protocol_opic18->ptc18_04      = $Protocol_opic18Old->ptc18_04;
            $Protocol_opic18->ptc18_05      = $Protocol_opic18Old->ptc18_05;
            $Protocol_opic18->ptc18_file    = $Protocol_opic18Old->ptc18_file; 
    
            $Protocol_opic18->ptc18_06      = $Protocol_opic18Old->ptc18_06;
            $Protocol_opic18->ptc18_07      = $Protocol_opic18Old->ptc18_07;
            $Protocol_opic18->ptc18_08      = $Protocol_opic18Old->ptc18_08;
            $Protocol_opic18->ptc18_09      = $Protocol_opic18Old->ptc18_09;
            $Protocol_opic18->ptc18_10      = $Protocol_opic18Old->ptc18_10;
            $Protocol_opic18->ptc18_11      = $Protocol_opic18Old->ptc18_11;
            $Protocol_opic18->ptc18_12      = $Protocol_opic18Old->ptc18_12;
            $Protocol_opic18->ptc18_13      = $Protocol_opic18Old->ptc18_13;
            $Protocol_opic18->ptc18_14      = $Protocol_opic18Old->ptc18_14;
            $Protocol_opic18->ptc18_15      = $Protocol_opic18Old->ptc18_15;
            $Protocol_opic18->ptc18_16      = $Protocol_opic18Old->ptc18_16;
            $Protocol_opic18->ptc18_17      = $Protocol_opic18Old->ptc18_17;
            $Protocol_opic18->ptc18_18      = $Protocol_opic18Old->ptc18_18;
            $Protocol_opic18->ptc18_19      = $Protocol_opic18Old->ptc18_19;
            $Protocol_opic18->ptc18_19_sub  = $Protocol_opic18Old->ptc18_19_sub;
            $Protocol_opic18->ptc18_20      = $Protocol_opic18Old->ptc18_20;
            $Protocol_opic18->ptc18_21      = $Protocol_opic18Old->ptc18_21;
            $Protocol_opic18->ptc18_22      = $Protocol_opic18Old->ptc18_22;
            $Protocol_opic18->ptc18_23      = $Protocol_opic18Old->ptc18_23;
            $Protocol_opic18->ptc18_24      = $Protocol_opic18Old->ptc18_24;
            $Protocol_opic18->ptc18_24_1    = $Protocol_opic18Old->ptc18_24_1;
            $Protocol_opic18->ptc18_25      = $Protocol_opic18Old->ptc18_25;
            $Protocol_opic18->ptc18_26      = $Protocol_opic18Old->ptc18_26;
            $Protocol_opic18->ptc18_27      = $Protocol_opic18Old->ptc18_27;
    
            $Protocol_opic18->save();

        }

        //18-02 Save
        $Protocol_opic18_sub01Old     =   Protocol_opic18_sub01::where('protocol_id',$request->id)->get();
        if(!empty($Protocol_opic18_sub01Old)){
            foreach($Protocol_opic18_sub01Old as $r){
                $Protocol_opic18_sub01    = new Protocol_opic18_sub01;
                $Protocol_opic18_sub01->protocol_id   = Session::get('protocol_id');
                $Protocol_opic18_sub01->ptc18_01    = $r->ptc18_01;
                $Protocol_opic18_sub01->ptc18_02    = $r->ptc18_02;
                $Protocol_opic18_sub01->ptc18_03    = $r->ptc18_03;
                $Protocol_opic18_sub01->ptc18_04    = $r->ptc18_04;
                $Protocol_opic18_sub01->save();
            }
        }

        //18-03 Save
        $Protocol_opic18_sub02Old     =   Protocol_opic18_sub02::where('protocol_id',$request->id)->get();
        if(!empty($Protocol_opic18_sub02Old)){
            foreach($Protocol_opic18_sub02Old as $r){

                $Protocol_opic18_sub02    = new Protocol_opic18_sub02;
                $Protocol_opic18_sub02->protocol_id     = Session::get('protocol_id');
                $Protocol_opic18_sub02->ptc18_01        = $r->ptc18_01;
                $Protocol_opic18_sub02->ptc18_02        = $r->ptc18_02;
                $Protocol_opic18_sub02->ptc18_03        = $r->ptc18_03;
                $Protocol_opic18_sub02->ptc18_04        = $r->ptc18_04;
                $Protocol_opic18_sub02->ptc18_05        = $r->ptc18_05;
                $Protocol_opic18_sub02->save();
            }
        }
        //18-04 Save
        $Protocol_opic18_sub03Old     =   Protocol_opic18_sub03::where('protocol_id',$request->id)->get();
        if(!empty($Protocol_opic18_sub03Old)){
            foreach($Protocol_opic18_sub03Old as $r){
                
                $Protocol_opic18_sub03    = new Protocol_opic18_sub03;
                $Protocol_opic18_sub03->protocol_id     = Session::get('protocol_id');
                $Protocol_opic18_sub03->ptc18_01        = $r->ptc18_01;
                $Protocol_opic18_sub03->ptc18_02        = $r->ptc18_02;
                $Protocol_opic18_sub03->ptc18_03        = $r->ptc18_03;
                $Protocol_opic18_sub03->ptc18_04        = $r->ptc18_04;
                $Protocol_opic18_sub03->ptc18_05        = $r->ptc18_05;
                $Protocol_opic18_sub03->ptc18_06        = $r->ptc18_06;
                $Protocol_opic18_sub03->ptc18_07        = $r->ptc18_07;
                $Protocol_opic18_sub03->save();
            }
        }

        //18-05 Save
        $Protocol_opic18_sub04Old     =   Protocol_opic18_sub04::where('protocol_id',$request->id)->get();
        if(!empty($Protocol_opic18_sub04Old)){
            foreach($Protocol_opic18_sub04Old as $r){
                
                $Protocol_opic18_sub04    = new Protocol_opic18_sub04;
                $Protocol_opic18_sub04->protocol_id     = Session::get('protocol_id');
                $Protocol_opic18_sub04->ptc18_01        = $r->ptc18_01;
                $Protocol_opic18_sub04->ptc18_02        = $r->ptc18_02;
                $Protocol_opic18_sub04->ptc18_03        = $r->ptc18_03;
                $Protocol_opic18_sub04->ptc18_04        = $r->ptc18_04;
                $Protocol_opic18_sub04->ptc18_05        = $r->ptc18_05;
                $Protocol_opic18_sub04->ptc18_06        = $r->ptc18_06;
                $Protocol_opic18_sub04->ptc18_07        = $r->ptc18_07;
                $Protocol_opic18_sub04->ptc18_08        = $r->ptc18_08;
                $Protocol_opic18_sub04->ptc18_09        = $r->ptc18_09;
                $Protocol_opic18_sub04->save();
            }
        }

        //18-06 Save
        $Protocol_opic18_sub05Old     =   Protocol_opic18_sub05::where('protocol_id',$request->id)->get();
        if(!empty($Protocol_opic18_sub05Old)){
            foreach($Protocol_opic18_sub05Old as $r){
                
                $Protocol_opic18_sub05    = new Protocol_opic18_sub05;
                $Protocol_opic18_sub05->protocol_id     = Session::get('protocol_id');
                $Protocol_opic18_sub05->ptc18_01        = $r->ptc18_01;
                $Protocol_opic18_sub05->ptc18_02        = $r->ptc18_02;
                $Protocol_opic18_sub05->ptc18_03        = $r->ptc18_03;
                $Protocol_opic18_sub05->ptc18_04        = $r->ptc18_04;
                $Protocol_opic18_sub05->save();
            }
        }

        //18-06 Save
        $Protocol_opic18_sub06Old     =   Protocol_opic18_sub06::where('protocol_id',$request->id)->get();
        if(!empty($Protocol_opic18_sub06Old)){
            foreach($Protocol_opic18_sub06Old as $r){
                
                $Protocol_opic18_sub06    = new Protocol_opic18_sub06;
                $Protocol_opic18_sub06->protocol_id     = Session::get('protocol_id');
                $Protocol_opic18_sub06->ptc18_01        = $r->ptc18_01;
                $Protocol_opic18_sub06->ptc18_02        = $r->ptc18_02;
                $Protocol_opic18_sub06->ptc18_03        = $r->ptc18_03;
                $Protocol_opic18_sub06->ptc18_04        = $r->ptc18_04;
                $Protocol_opic18_sub06->save();
            }
        }

        //19 Save
        $Protocol_opic19Old     =   Protocol_opic19::where('protocol_id',$request->id)->first();
        if(!empty($Protocol_opic19Old)){

            $Protocol_opic19                = new Protocol_opic19;
            $Protocol_opic19->protocol_id   = Session::get('protocol_id');
            $Protocol_opic19->ptc19_01      = $Protocol_opic19Old->ptc19_01; 
            $Protocol_opic19->ptc19_02      = $Protocol_opic19Old->ptc19_02; 
            $Protocol_opic19->ptc19_03      = $Protocol_opic19Old->ptc19_03; 
            $Protocol_opic19->ptc19_04      = $Protocol_opic19Old->ptc19_04; 
            $Protocol_opic19->ptc19_05      = $Protocol_opic19Old->ptc19_05; 
            $Protocol_opic19->ptc19_06      = $Protocol_opic19Old->ptc19_06; 
            $Protocol_opic19->ptc19_07      = $Protocol_opic19Old->ptc19_07; 
            $Protocol_opic19->ptc19_08      = $Protocol_opic19Old->ptc19_08; 
            $Protocol_opic19->save();

        }

        //20 Save
        $Protocol_opic20Old     =   Protocol_opic20::where('protocol_id',$request->id)->first();
        if(!empty($Protocol_opic20Old)){

            $Protocol_opic20                = new Protocol_opic20;
            $Protocol_opic20->protocol_id   = Session::get('protocol_id');
            $Protocol_opic20->ptc20_01      = $Protocol_opic20Old->ptc20_01;
            $Protocol_opic20->ptc20_02      = $Protocol_opic20Old->ptc20_02; 
            $Protocol_opic20->save();
        }

        //21 Save
        $Protocol_opic21Old     =   Protocol_opic21::where('protocol_id',$request->id)->first();
        if(!empty($Protocol_opic21Old)){

            $Protocol_opic21                = new Protocol_opic21;
            $Protocol_opic21->protocol_id   = Session::get('protocol_id');
            $Protocol_opic21->ptc21_01      = $Protocol_opic21Old->ptc21_01;
            $Protocol_opic21->ptc21_02      = $Protocol_opic21Old->ptc21_02;
            $Protocol_opic21->ptc21_03      = $Protocol_opic21Old->ptc21_03;
            $Protocol_opic21->save();
        }

        //21 Save
        $Protocol_opic22Old     =   Protocol_opic22::where('protocol_id',$request->id)->first();
        if(!empty($Protocol_opic22Old)){

            $Protocol_opic22                = new Protocol_opic22;
            $Protocol_opic22->protocol_id   = Session::get('protocol_id');
            $Protocol_opic22->ptc22_01      = $Protocol_opic22Old->ptc22_01;
            $Protocol_opic22->ptc22_02      = $Protocol_opic22Old->ptc22_02;
            $Protocol_opic22->ptc22_03      = $Protocol_opic22Old->ptc22_03;
            $Protocol_opic22->ptc22_04      = $Protocol_opic22Old->ptc22_04;
            $Protocol_opic22->ptc22_05      = $Protocol_opic22Old->ptc22_05;
            $Protocol_opic22->ptc22_06      = $Protocol_opic22Old->ptc22_06;
            $Protocol_opic22->save();
        }

        //23 Save
        $Protocol_opic23Old     =   Protocol_opic23::where('protocol_id',$request->id)->first();
        if(!empty($Protocol_opic23Old)){

            $Protocol_opic23                = new Protocol_opic23;
            $Protocol_opic23->protocol_id   = Session::get('protocol_id');
            $Protocol_opic23->ptc23_01      = $Protocol_opic23Old->ptc23_01;
            $Protocol_opic23->ptc23_02      = $Protocol_opic23Old->ptc23_02;
            $Protocol_opic23->ptc23_03      = $Protocol_opic23Old->ptc23_03;
            $Protocol_opic23->ptc23_04      = $Protocol_opic23Old->ptc23_04;
            $Protocol_opic23->save();
        }

        //24 Save
        $Protocol_opic24Old     =   Protocol_opic24::where('protocol_id',$request->id)->first();
        if(!empty($Protocol_opic24Old)){

            $Protocol_opic24                = new Protocol_opic24;
            $Protocol_opic24->protocol_id   = Session::get('protocol_id');
            $Protocol_opic24->ptc24_01      = $Protocol_opic24Old->ptc24_01;
            $Protocol_opic24->ptc24_02      = $Protocol_opic24Old->ptc24_02;
            $Protocol_opic24->ptc24_03      = $Protocol_opic24Old->ptc24_03;
            $Protocol_opic24->ptc24_04      = $Protocol_opic24Old->ptc24_04;
            $Protocol_opic24->ptc24_05      = $Protocol_opic24Old->ptc24_05;
            $Protocol_opic24->save();
        }

        //25 Save
        $Protocol_opic25Old     =   Protocol_opic25::where('protocol_id',$request->id)->first();
        if(!empty($Protocol_opic25Old)){

            $Protocol_opic25                = new Protocol_opic25;
            $Protocol_opic25->protocol_id   = Session::get('protocol_id');
            $Protocol_opic25->ptc25_01      = $Protocol_opic25Old->ptc25_01;
            $Protocol_opic25->ptc25_02      = $Protocol_opic25Old->ptc25_02;
            $Protocol_opic25->ptc25_03      = $Protocol_opic25Old->ptc25_03;
            $Protocol_opic25->save();
        }

        //26 Save
        $Protocol_opic26Old     =   Protocol_opic26::where('protocol_id',$request->id)->first();
        if(!empty($Protocol_opic26Old)){

            $Protocol_opic26                = new Protocol_opic26;
            $Protocol_opic26->protocol_id   = Session::get('protocol_id');
            $Protocol_opic26->ptc26_01      = $Protocol_opic26Old->ptc26_01;
            $Protocol_opic26->ptc26_02      = $Protocol_opic26Old->ptc26_02;
            $Protocol_opic26->save();
        }

        //27 Save
        $Protocol_opic27Old     =   Protocol_opic27::where('protocol_id',$request->id)->first();
        if(!empty($Protocol_opic27Old)){

            $Protocol_opic27                = new Protocol_opic27;
            $Protocol_opic27->protocol_id   = Session::get('protocol_id');
            $Protocol_opic27->ptc27_01      = $Protocol_opic27Old->ptc27_01;
            $Protocol_opic27->ptc27_02      = $Protocol_opic27Old->ptc27_02;
            $Protocol_opic27->save();
        }

        //28 Save
        $Protocol_opic28Old     =   Protocol_opic28::where('protocol_id',$request->id)->first();
        if(!empty($Protocol_opic28Old)){

            $Protocol_opic28                = new Protocol_opic28;
            $Protocol_opic28->protocol_id   = Session::get('protocol_id');
            $Protocol_opic28->ptc28_01      = $Protocol_opic28Old->ptc28_01;
            $Protocol_opic28->ptc28_02      = $Protocol_opic28Old->ptc28_02;
            $Protocol_opic28->ptc28_03      = $Protocol_opic28Old->ptc28_03;
            $Protocol_opic28->save();
        }

        //30 Save
        $Protocol_opic30Old     =   Protocol_opic30::where('protocol_id',$request->id)->first();
        if(!empty($Protocol_opic30Old)){

            $Protocol_opic30                    = new Protocol_opic30;
            $Protocol_opic30->protocol_id       = Session::get('protocol_id');
            $Protocol_opic30->ptc30_01          = $Protocol_opic30Old->ptc30_01;
            $Protocol_opic30->ptc30_01_sub      = $Protocol_opic30Old->ptc30_01_sub;
            $Protocol_opic30->ptc30_02          = $Protocol_opic30Old->ptc30_02;
            $Protocol_opic30->ptc30_02_sub      = $Protocol_opic30Old->ptc30_02_sub;
            $Protocol_opic30->ptc30_03          = $Protocol_opic30Old->ptc30_03;
            $Protocol_opic30->ptc30_03_sub      = $Protocol_opic30Old->ptc30_03_sub;
            $Protocol_opic30->ptc30_04          = $Protocol_opic30Old->ptc30_04;
            $Protocol_opic30->ptc30_04_sub      = $Protocol_opic30Old->ptc30_04_sub;
            $Protocol_opic30->ptc30_05          = $Protocol_opic30Old->ptc30_05;
            $Protocol_opic30->ptc30_05_sub      = $Protocol_opic30Old->ptc30_05_sub;
            $Protocol_opic30->ptc30_06          = $Protocol_opic30Old->ptc30_06;
            $Protocol_opic30->ptc30_06_sub      = $Protocol_opic30Old->ptc30_06_sub;
            $Protocol_opic30->ptc30_07          = $Protocol_opic30Old->ptc30_07;
            $Protocol_opic30->ptc30_07_sub      = $Protocol_opic30Old->ptc30_07_sub;
            $Protocol_opic30->ptc30_08          = $Protocol_opic30Old->ptc30_08;
            $Protocol_opic30->ptc30_08_sub      = $Protocol_opic30Old->ptc30_08_sub;
            $Protocol_opic30->ptc30_09          = $Protocol_opic30Old->ptc30_09;
            $Protocol_opic30->ptc30_09_sub      = $Protocol_opic30Old->ptc30_09_sub;
            $Protocol_opic30->ptc30_10          = $Protocol_opic30Old->ptc30_10;
            $Protocol_opic30->ptc30_10_sub      = $Protocol_opic30Old->ptc30_10_sub;
            $Protocol_opic30->ptc30_11          = $Protocol_opic30Old->ptc30_11;
            $Protocol_opic30->ptc30_11_sub      = $Protocol_opic30Old->ptc30_11_sub;
            $Protocol_opic30->ptc30_12          = $Protocol_opic30Old->ptc30_12;
            $Protocol_opic30->ptc30_12_sub      = $Protocol_opic30Old->ptc30_12_sub;
            $Protocol_opic30->ptc30_13          = $Protocol_opic30Old->ptc30_13;
            $Protocol_opic30->ptc30_13_sub      = $Protocol_opic30Old->ptc30_13_sub;
            $Protocol_opic30->ptc30_14          = $Protocol_opic30Old->ptc30_14;
            $Protocol_opic30->ptc30_14_sub      = $Protocol_opic30Old->ptc30_14_sub;
            $Protocol_opic30->ptc30_15          = $Protocol_opic30Old->ptc30_15;
            $Protocol_opic30->ptc30_15_sub      = $Protocol_opic30Old->ptc30_15_sub;
            $Protocol_opic30->ptc30_16          = $Protocol_opic30Old->ptc30_16;
            $Protocol_opic30->ptc30_16_sub      = $Protocol_opic30Old->ptc30_16_sub;
            $Protocol_opic30->save();
        }

        //30 - sub01 Save
        $Protocol_opic30_sub01Old     =   Protocol_opic30_sub01::where('protocol_id',$request->id)->get();
        if(!empty($Protocol_opic30_sub01Old)){
            foreach($Protocol_opic30_sub01Old as $r){
                
                $Protocol_opic30_sub01                  = new Protocol_opic30_sub01;
                $Protocol_opic30_sub01->protocol_id     = Session::get('protocol_id');
                $Protocol_opic30_sub01->ptc30_name_01   = $r->ptc30_name_01;
                $Protocol_opic30_sub01->save();
            }
        }

        //30 - sub02  Save
        $protocol_opic30_sub02Old     =   protocol_opic30_sub02::where('protocol_id',$request->id)->get();
        if(!empty($protocol_opic30_sub02Old)){
            foreach($protocol_opic30_sub02Old as $r){
                
                $protocol_opic30_sub02                  = new protocol_opic30_sub02;
                $protocol_opic30_sub02->protocol_id     = Session::get('protocol_id');
                $protocol_opic30_sub02->ptc30_name_02   = $r->ptc30_name_02;
                $protocol_opic30_sub02->save();
            }
        }

        $Protocol_secretary_opicOld     =   Protocol_secretary_opic::where('protocol_id',$request->id)->get();
        if(!empty($Protocol_secretary_opicOld)){
            foreach($Protocol_secretary_opicOld as $r){
                
                $Protocol_secretary_opic                  = new Protocol_secretary_opic;
                $Protocol_secretary_opic->protocol_id         = Session::get('protocol_id');
                $Protocol_secretary_opic->protocol_number     = $r->protocol_number;
                $Protocol_secretary_opic->protocol_status     = $r->protocol_status;
                $Protocol_secretary_opic->comment             = $r->comment;
                $Protocol_secretary_opic->secretary_id        = $r->secretary_id;
                $Protocol_secretary_opic->save();
            }
        }
        $protocol_reviewer_listOld     =   protocol_reviewer_list::where('protocol_id',$request->id)->get();
        if(!empty($protocol_reviewer_listOld)){
            foreach($protocol_reviewer_listOld as $r){
                
                $protocol_reviewer_list                  = new protocol_reviewer_list;
                $protocol_reviewer_list->protocol_id         = Session::get('protocol_id');
                $protocol_reviewer_list->users_id           = $r->users_id;
                $protocol_reviewer_list->reviewer_number     = $r->reviewer_number;
                $protocol_reviewer_list->status             = "N";
                $protocol_reviewer_list->save();
            }
        }

        $protocol_reviewer_opicOld     =   Protocol_reviewer_opic::where('protocol_id',$request->id)->get();
        if(!empty($protocol_reviewer_opicOld)){
            foreach($protocol_reviewer_opicOld as $r){
                
                $protocol_reviewer_opic         = new Protocol_reviewer_opic;
                $protocol_reviewer_opic->protocol_id         = Session::get('protocol_id');
                $protocol_reviewer_opic->protocol_number     = $r->protocol_number;
                $protocol_reviewer_opic->protocol_status     = $r->protocol_status;
                $protocol_reviewer_opic->comment             = $r->comment;
                $protocol_reviewer_opic->reviewer_id         = $r->reviewer_id;
                $protocol_reviewer_opic->save();
            }
        }
        // $protocol_docsfileOld     =   protocol_docsfile::where('protocol_id',$request->id)->get();
        // $protocol_docsfileOld_count     =   protocol_docsfile::where('protocol_id',$request->id)->count();
        // if($protocol_docsfileOld_count!=0){
        //     foreach($protocol_docsfileOld as $r){
                
        //         $protocol_reviewer_list                  = new protocol_docsfile;
        //         $protocol_reviewer_list->protocol_id         = Session::get('protocol_id');
        //         $protocol_reviewer_list->file               = $r->file;
        //         $protocol_reviewer_list->status             = "Y";
        //         $protocol_reviewer_list->save();
        //     }
        // }
        
        
        return redirect()->route('officer.protocol_list.index')->with('yes', 'ส่งกลับให้สมาชิกแก้ไขเรียบร้อย');
    }
    public function rewnewFale(Request $request)
    {
        // if(auth()->user()->hasRole('secretary')){

            $Protocol_docs  = Protocol_docs::find($request->id);
            $Protocol_docs->protocol_status     = "25";
            $Protocol_docs->save();

            $Protocol_amendment       =  new Protocol_amendment;
            $Protocol_amendment->protocol_id             =   $request->id;
            $Protocol_amendment->amendment01             =   $request->amendment01;
            $Protocol_amendment->amendment02             =   $request->amendment02;
            $Protocol_amendment->amendment03             =   $request->amendment03;
            $Protocol_amendment->amendment04             =   $request->amendment04;
            $Protocol_amendment->amendment05             =   $request->amendment05;
            $Protocol_amendment->amendment06             =   $request->amendment06;
            $Protocol_amendment->amendment07             =   $request->amendment07;
            $Protocol_amendment->amendment08             =   $request->amendment08;
            $Protocol_amendment->amendment09             =   $request->amendment09;
            $Protocol_amendment->amendment10             =   $request->amendment10;
            $Protocol_amendment->amendment11             =   $request->amendment11;
            $Protocol_amendment->amendment12             =   $request->amendment12;
            $Protocol_amendment->amendment13             =   $request->amendment13;
            $Protocol_amendment->amendment13_sub             =   $request->amendment13_sub;
            $Protocol_amendment->save();

       // }
       echo json_encode($Protocol_amendment);
        // return redirect()->route('officer.protocol_list.index')->with('yes', 'ส่งกลับให้สมาชิกแก้ไขเรียบร้อย');
        
    }
    public function rewnew(Request $request)
    {

        if(auth()->user()->hasRole('secretary')){
            $Protocol_docs  = Protocol_docs::find($request->id);
            $Protocol_docs->protocol_status     = "12";
            $Protocol_docs->protocol_edit     = "0";
            $Protocol_docs->protocol_v2     = "0";
            $Protocol_docs->save();

            $Protocol_docsStatus = Protocol_docs::where('protocol_number',$Protocol_docs->protocol_number)
            ->update([
                'show_status' => "N"
            ]);
            
            $Protocol_docsCk  = Protocol_docs::orderBy('id','desc')->first();
            $Protocol_docs  =   new Protocol_docs;
            $Protocol_docs->users_id = $Protocol_docsCk->users_id ;
            $Protocol_docs->protocol_number = $Protocol_docsCk->protocol_number;
            $Protocol_docs->protocol_status = "19";
            $Protocol_docs->protocol_edit     = "1";
            $Protocol_docs->protocol_v2     = "0";
            $Protocol_docs->number_ver = ($Protocol_docsCk->number_ver+1);
            $Protocol_docs->number_run = "1";
            $Protocol_docs->protocol_type = $Protocol_docsCk->protocol_type;
            $Protocol_docs->save();
            Session::put('protocol_id', $Protocol_docs->id);

            //01 Save
            $Protocol_opic01Old     =   Protocol_opic01::where('protocol_id',$request->id)->first();
            $Protocol_opic01 = new Protocol_opic01;
            $Protocol_opic01->protocol_id    =  Session::get('protocol_id');
            $Protocol_opic01->animal_protocol_th    =  $Protocol_opic01Old->animal_protocol_th;
            $Protocol_opic01->animal_protocol_en    =  $Protocol_opic01Old->animal_protocol_en;
            $Protocol_opic01->project_proposal_th    =  $Protocol_opic01Old->project_proposal_th;
            $Protocol_opic01->project_proposal_en    =  $Protocol_opic01Old->project_proposal_en;
            $Protocol_opic01->save();

            //02 SAVE
            $Protocol_opic02Old     =   Protocol_opic02::where('protocol_id',$request->id)->get();
            if(!empty($Protocol_opic02Old)){
                foreach($Protocol_opic02Old as $r){

                    $Protocol_opic02    = new Protocol_opic02;
                    $Protocol_opic02->protocol_id       = Session::get('protocol_id');
                    $Protocol_opic02->number01          = $r->number01;
                    $Protocol_opic02->Name_th           = $r->Name_th;
                    $Protocol_opic02->Surname_th        = $r->Surname_th;
                    $Protocol_opic02->Name_en           = $r->Name_en;
                    $Protocol_opic02->Surname_en        = $r->Surname_en;
                    $Protocol_opic02->opic02_status     = $r->opic02_status;
                    $Protocol_opic02->opic02_Other      = $r->opic02_Other;
                    $Protocol_opic02->opic02_Align_th   = $r->opic02_Align_th;
                    $Protocol_opic02->opic02_Align_en   = $r->opic02_Align_en;
                    $Protocol_opic02->opic02_Other_position_th        = $r->opic02_Other_position_th;
                    $Protocol_opic02->opic02_Other_position_en        = $r->opic02_Other_position_en;
                    $Protocol_opic02->opic02_Contact_address_th        = $r->opic02_Contact_address_th;
                    $Protocol_opic02->opic02_Contact_address_en        = $r->opic02_Contact_address_en;
                    $Protocol_opic02->opic02_Tel        = $r->opic02_Tel;
                    $Protocol_opic02->opic02_Fax        = $r->opic02_Fax;
                    $Protocol_opic02->opic02_email        = $r->opic02_email;
                    $Protocol_opic02->opic02_responsible        = $r->opic02_responsible;
                    $Protocol_opic02->save();

                }
            }

            //02-01
            $Protocol_opic02_subOld     =   Protocol_opic02_sub::where('protocol_id',$request->id)->get();
            if(!empty($Protocol_opic02_subOld)){
                foreach($Protocol_opic02_subOld as $r){

                    $Protocol_opic02_sub                    = new Protocol_opic02_sub;
                    $Protocol_opic02_sub->protocol_id       = Session::get('protocol_id');
                    $Protocol_opic02_sub->name_th           = $r->name_th;
                    $Protocol_opic02_sub->lastname_th       = $r->lastname_th;
                    $Protocol_opic02_sub->name_en           = $r->name_en;
                    $Protocol_opic02_sub->lastname_en       = $r->lastname_en;
                    $Protocol_opic02_sub->position_th       = $r->position_th;
                    $Protocol_opic02_sub->position_en       = $r->position_en;
                    $Protocol_opic02_sub->address_th        = $r->address_th;
                    $Protocol_opic02_sub->address_en        = $r->address_en;
                    $Protocol_opic02_sub->Tel               = $r->Tel;
                    $Protocol_opic02_sub->Fax               = $r->Fax;
                    $Protocol_opic02_sub->email             = $r->email;
                    $Protocol_opic02_sub->number01          = $r->number01;
                    $Protocol_opic02_sub->save();

                }
            }

            //02-02
            $Protocol_opic02_sub02Old     =   Protocol_opic02_sub02::where('protocol_id',$request->id)->get();
            if(!empty($Protocol_opic02_sub02Old)){
                foreach($Protocol_opic02_sub02Old as $r){

                    $Protocol_opic02_sub02                    = new Protocol_opic02_sub02;
                    $Protocol_opic02_sub02->protocol_id       = Session::get('protocol_id');
                    $Protocol_opic02_sub02->number01          = $r->number01;
                    $Protocol_opic02_sub02->protocol_file     = $r->protocol_file;
                    $Protocol_opic02_sub02->protocol_01       = $r->protocol_01;
                    $Protocol_opic02_sub02->protocol_02       = $r->protocol_02;
                    $Protocol_opic02_sub02->protocol_03       = $r->protocol_03;
                    $Protocol_opic02_sub02->protocol_04       = $r->protocol_04;
                    $Protocol_opic02_sub02->protocol_05       = $r->protocol_05;
                    $Protocol_opic02_sub02->protocol_06       = $r->protocol_06;
                    $Protocol_opic02_sub02->protocol_07       = $r->protocol_07;
                    $Protocol_opic02_sub02->protocol_08       = $r->protocol_08;
                    $Protocol_opic02_sub02->protocol_09       = $r->protocol_09;
                    $Protocol_opic02_sub02->protocol_10       = $r->protocol_10;
                    $Protocol_opic02_sub02->protocol_11       = $r->protocol_11;
                    $Protocol_opic02_sub02->protocol_12       = $r->protocol_12;
                    $Protocol_opic02_sub02->protocol_13       = $r->protocol_13;
                    $Protocol_opic02_sub02->save();

                }
            }
            //03 Save
            $Protocol_opic03Old     =   Protocol_opic03::where('protocol_id',$request->id)->first();
            if(!empty($Protocol_opic03Old)){
                $Protocol_opic03                    = new Protocol_opic03;
                $Protocol_opic03->protocol_id       = Session::get('protocol_id');
                $Protocol_opic03->Name_th           = $Protocol_opic03Old->Name_th;
                $Protocol_opic03->Surname_th        = $Protocol_opic03Old->Surname_th;
                $Protocol_opic03->Name_en           = $Protocol_opic03Old->Name_en;
                $Protocol_opic03->Surname_en        = $Protocol_opic03Old->Surname_en;
                $Protocol_opic03->position_th       = $Protocol_opic03Old->position_th;
                $Protocol_opic03->position_en       = $Protocol_opic03Old->position_en;
                $Protocol_opic03->address_th        = $Protocol_opic03Old->address_th;
                $Protocol_opic03->address_en        = $Protocol_opic03Old->address_en;
                $Protocol_opic03->Tel               = $Protocol_opic03Old->Tel;
                $Protocol_opic03->Fax               = $Protocol_opic03Old->Fax;
                $Protocol_opic03->email             = $Protocol_opic03Old->email;
                $Protocol_opic03->save();
            }

            //04 Save
            $Protocol_opic04Old     =   Protocol_opic04::where('protocol_id',$request->id)->first();
            if(!empty($Protocol_opic04Old)){
                $Protocol_opic04    = new Protocol_opic04;
                $Protocol_opic04->protocol_id           = Session::get('protocol_id');
                $Protocol_opic04->topic4_1              = $request->topic4_1;
                $Protocol_opic04->topic4_1_n1           = $request->topic4_1_n1;
                $Protocol_opic04->topic4_1_n2           = $request->topic4_1_n2;
                $Protocol_opic04->topic4_1_1            = $request->topic4_1_1;
                $Protocol_opic04->topic4_1_1n1          = $request->topic4_1_1n1;
                $Protocol_opic04->topic4_1_1n2          = $request->topic4_1_1n2;
                $Protocol_opic04->topic4_1_1n3          = $request->topic4_1_1n3;
                $Protocol_opic04->topic4_1_1n4          = $request->topic4_1_1n4;
                $Protocol_opic04->topic4_1_1n5          = $request->topic4_1_1n5;
                $Protocol_opic04->topic4_1_1n6          = $request->topic4_1_1n6;
                $Protocol_opic04->topic4_1_1n7          = $request->topic4_1_1n7;
                $Protocol_opic04->topic4_1_1n8          = $request->topic4_1_1n8;
                $Protocol_opic04->topic4_1_1n9          = $request->topic4_1_1n9;
                $Protocol_opic04->topic4_1_1n10         = $request->topic4_1_1n10;
                $Protocol_opic04->topic4_1_1n11         = $request->topic4_1_1n11;
                $Protocol_opic04->topic4_1_2            = $request->topic4_1_2;
                $Protocol_opic04->topic4_2              = $request->topic4_2;
                $Protocol_opic04->topic4_2n1            = $request->topic4_2n1;
                $Protocol_opic04->topic4_2n2            = $request->topic4_2n2;
                $Protocol_opic04->topic4_2n3            = $request->topic4_2n3;
                $Protocol_opic04->topic4_2n4            = $request->topic4_2n4;
                $Protocol_opic04->topic4_2n5            = $request->topic4_2n5;
                $Protocol_opic04->topic4_2n6            = $request->topic4_2n6;
                $Protocol_opic04->topic4_2n7            = $request->topic4_2n7;
                $Protocol_opic04->topic4_2n8            = $request->topic4_2n8;
                $Protocol_opic04->topic4_2n9            = $request->topic4_2n9;
                $Protocol_opic04->topic4_2n10           = $request->topic4_2n10;
                $Protocol_opic04->topic4_3              = $request->topic4_3;
                $Protocol_opic04->topic4_3n1            = $request->topic4_3n1;
                $Protocol_opic04->topic4_3n2            = $request->topic4_3n2;
                $Protocol_opic04->topic4_3n3            = $request->topic4_3n3;
                $Protocol_opic04->topic4_3n4            = $request->topic4_3n4;
                $Protocol_opic04->topic4_3n5            = $request->topic4_3n5;
                $Protocol_opic04->topic4_3n6            = $request->topic4_3n6;
                $Protocol_opic04->topic4_4              = $request->topic4_4;
                $Protocol_opic04->topic4_4n1            = $request->topic4_4n1;
                $Protocol_opic04->topic4_5              = $request->topic4_5;
                $Protocol_opic04->topic4_5n1            = $request->topic4_5n1;
                $Protocol_opic04->save();
            }

            //05 Save
            $Protocol_opic05Old     =   Protocol_opic05::where('protocol_id',$request->id)->get();
            if(!empty($Protocol_opic05Old)){
                foreach($Protocol_opic05Old as $r){
                    $Protocol_opic05    = new Protocol_opic05;
                    $Protocol_opic05->protocol_id   = Session::get('protocol_id');
                    $Protocol_opic05->FundingSource = $r->FundingSource;
                    $Protocol_opic05->FundingPeriod = $r->FundingPeriod;
                    $Protocol_opic05->Budget        = $r->Budget;
                    $Protocol_opic05->save();
                }
            }

            //06 Save
            $Protocol_opic06Old     =   Protocol_opic06::where('protocol_id',$request->id)->first();
            if(!empty($Protocol_opic06Old)){
                $Protocol_opic06 = new Protocol_opic06;
                $Protocol_opic06->protocol_id = Session::get('protocol_id');
                $Protocol_opic06->Executive = $Protocol_opic06Old->Executive;
                $Protocol_opic06->save();
            }

            //07 Save
            $Protocol_opic07Old     =   Protocol_opic07::where('protocol_id',$request->id)->first();
            if(!empty($Protocol_opic07Old)){

                $Protocol_opic07 = new Protocol_opic07;
                $Protocol_opic07->protocol_id = Session::get('protocol_id');
                $Protocol_opic07->Background = $Protocol_opic07Old->Background;
                $Protocol_opic07->Literature = $Protocol_opic07Old->Literature;
                $Protocol_opic07->Lastdate = $Protocol_opic07Old->Lastdate;
                $Protocol_opic07->Period_start = $Protocol_opic07Old->Period_start;
                $Protocol_opic07->Period_end = $Protocol_opic07Old->Period_end;
                $Protocol_opic07->Keywords = $Protocol_opic07Old->Keywords;
                $Protocol_opic07->Results = $Protocol_opic07Old->Results;
                $Protocol_opic07->reference = $Protocol_opic07Old->reference;
                $Protocol_opic07->save();

            }

            //08 Save
            $Protocol_opic08Old     =   Protocol_opic08::where('protocol_id',$request->id)->get();
            if(!empty($Protocol_opic08Old)){
                foreach($Protocol_opic08Old as $r){

                    $Protocol_opic08    = new Protocol_opic08;
                    $Protocol_opic08->protocol_id   = Session::get('protocol_id');
                    $Protocol_opic08->Objective = $r->Objective;
                    $Protocol_opic08->save();
                }
            }

            //09 Save
            $Protocol_opic09Old     =   Protocol_opic09::where('protocol_id',$request->id)->first();
            if(!empty($Protocol_opic09Old)){

                $Protocol_opic09    = new Protocol_opic09;
                $Protocol_opic09->protocol_id   = Session::get('protocol_id');
                $Protocol_opic09->Replacement01 = $Protocol_opic09Old->Replacement01;
                $Protocol_opic09->Replacement02 = $Protocol_opic09Old->Replacement02;
                $Protocol_opic09->Replacement03 = $Protocol_opic09Old->Replacement03;
                $Protocol_opic09->save();

            }
            //10 Save
            $protocol_opic10Old     =   protocol_opic10::where('protocol_id',$request->id)->first();
            if(!empty($protocol_opic10Old)){

                $protocol_opic10    = new protocol_opic10;
                $protocol_opic10->protocol_id   = Session::get('protocol_id');
                $protocol_opic10->anticipated01 = $protocol_opic10Old->anticipated01;
                $protocol_opic10->anticipated02 = $protocol_opic10Old->anticipated02;
                $protocol_opic10->save();

            }
            //11 Save
            $protocol_opic11Old     =   protocol_opic11::where('protocol_id',$request->id)->first();
            if(!empty($protocol_opic11Old)){

                $protocol_opic11    = new protocol_opic11;
                $protocol_opic11->protocol_id   = Session::get('protocol_id');
                $protocol_opic11->Period        = $protocol_opic11Old->Period;
                $protocol_opic11->AnimalModel   = $protocol_opic11Old->AnimalModel;
                $protocol_opic11->animalsRequired = $protocol_opic11Old->animalsRequired;
                $protocol_opic11->caseWildlife  = $protocol_opic11Old->caseWildlife;
                $protocol_opic11->save();

            }
            //11-02 Save
            $Protocol_opic11_subOld     =   Protocol_opic11_sub::where('protocol_id',$request->id)->get();
            if(!empty($Protocol_opic11_subOld)){
                foreach($Protocol_opic11_subOld as $r){

                    $Protocol_opic11_sub    = new Protocol_opic11_sub;
                    $Protocol_opic11_sub->protocol_id   = Session::get('protocol_id');
                    $Protocol_opic11_sub->Common_name   = $r->Common_name;
                    $Protocol_opic11_sub->Genus_Species = $r->Genus_Species;
                    $Protocol_opic11_sub->Strain_Stock  = $r->Strain_Stock;
                    $Protocol_opic11_sub->Age           = $r->Age;
                    $Protocol_opic11_sub->Weight        = $r->Weight;
                    $Protocol_opic11_sub->Sex           = $r->Sex;
                    $Protocol_opic11_sub->Number        = $r->Number;
                    $Protocol_opic11_sub->status        = "Y";
                    $Protocol_opic11_sub->save();
                }
            }

            //12 Save
            $Protocol_opic12Old     =   Protocol_opic12::where('protocol_id',$request->id)->first();
            if(!empty($Protocol_opic12Old)){

                $protocol_opic12    = new Protocol_opic12;
                $protocol_opic12->protocol_id   = Session::get('protocol_id');
                $protocol_opic12->ptc12_01      = $Protocol_opic12Old->ptc12_01;
                $protocol_opic12->ptc12_01_sub  = $Protocol_opic12Old->ptc12_01_sub;
                $protocol_opic12->ptc12_02      = $Protocol_opic12Old->ptc12_02;
                $protocol_opic12->ptc12_02_sub  = $Protocol_opic12Old->ptc12_02_sub;
                $protocol_opic12->ptc12_03      = $Protocol_opic12Old->ptc12_03;
                $protocol_opic12->ptc12_03_sub_01 = $Protocol_opic12Old->ptc12_03_sub_01;
                $protocol_opic12->ptc12_03_sub_02 = $Protocol_opic12Old->ptc12_03_sub_02;
                $protocol_opic12->ptc12_03_sub_03 = $Protocol_opic12Old->ptc12_03_sub_03;
                $protocol_opic12->ptc12_03_sub_04 = $Protocol_opic12Old->ptc12_03_sub_04;
                $protocol_opic12->ptc12_04      = $Protocol_opic12Old->ptc12_04;
                $protocol_opic12->ptc12_03_sub  = $Protocol_opic12Old->ptc12_03_sub;
                $protocol_opic12->ptc12_05_01   = $Protocol_opic12Old->ptc12_05_01;
                $protocol_opic12->ptc12_05_02   = $Protocol_opic12Old->ptc12_05_02;
                $protocol_opic12->ptc12_05_03   = $Protocol_opic12Old->ptc12_05_03;
                $protocol_opic12->ptc12_05_04   = $Protocol_opic12Old->ptc12_05_04;
                $protocol_opic12->ptc12_05_05   = $Protocol_opic12Old->ptc12_05_05;
                $protocol_opic12->ptc12_05_06   = $Protocol_opic12Old->ptc12_05_06;
                $protocol_opic12->ptc12_05_06_sub = $Protocol_opic12Old->ptc12_05_06_sub;
                $protocol_opic12->ptc12_06_01   = $Protocol_opic12Old->ptc12_06_01;
                $protocol_opic12->ptc12_06_02   = $Protocol_opic12Old->ptc12_06_02;
                $protocol_opic12->ptc12_06_03   = $Protocol_opic12Old->ptc12_06_03;
                $protocol_opic12->ptc12_06_03_sub = $Protocol_opic12Old->ptc12_06_03_sub;
                $protocol_opic12->save();

            }
            //13 Save
            $Protocol_opic13Old     =   Protocol_opic13::where('protocol_id',$request->id)->first();
            if(!empty($Protocol_opic13Old)){

                $protocol_opic13    = new Protocol_opic13;
                $protocol_opic13->protocol_id   = Session::get('protocol_id');
                $protocol_opic13->ptc13_01      = $Protocol_opic13Old->ptc13_01;
                $protocol_opic13->ptc13_02      = $Protocol_opic13Old->ptc13_02;
                $protocol_opic13->ptc13_03      = $Protocol_opic13Old->ptc13_03;
                $protocol_opic13->ptc13_04      = $Protocol_opic13Old->ptc13_04;
                $protocol_opic13->ptc13_05      = $Protocol_opic13Old->ptc13_05;
                $protocol_opic13->ptc13_06      = $Protocol_opic13Old->ptc13_06;
                $protocol_opic13->ptc13_07      = $Protocol_opic13Old->ptc13_07;
                $protocol_opic13->ptc13_08      = $Protocol_opic13Old->ptc13_08;
                $protocol_opic13->ptc13_09      = $Protocol_opic13Old->ptc13_09;
                $protocol_opic13->ptc13_10      = $Protocol_opic13Old->ptc13_10;
                $protocol_opic13->ptc13_11      = $Protocol_opic13Old->ptc13_11;
                $protocol_opic13->ptc13_12      = $Protocol_opic13Old->ptc13_12;
                $protocol_opic13->ptc13_12_sub  = $Protocol_opic13Old->ptc13_12_sub;
                $protocol_opic13->ptc13_13      = $Protocol_opic13Old->ptc13_13;
                $protocol_opic13->ptc13_13_sub  = $Protocol_opic13Old->ptc13_13_sub;
                $protocol_opic13->ptc13_14      = $Protocol_opic13Old->ptc13_14;
                $protocol_opic13->ptc13_15      = $Protocol_opic13Old->ptc13_15;
                $protocol_opic13->ptc13_16      = $Protocol_opic13Old->ptc13_16;
                $protocol_opic13->ptc13_17      = $Protocol_opic13Old->ptc13_17;
                $protocol_opic13->ptc13_18      = $Protocol_opic13Old->ptc13_18;
                $protocol_opic13->ptc13_19      = $Protocol_opic13Old->ptc13_19;
                $protocol_opic13->ptc13_19_sub  = $Protocol_opic13Old->ptc13_19_sub;
                $protocol_opic13->ptc13_20      = $Protocol_opic13Old->ptc13_20;
                $protocol_opic13->ptc13_20_sub  = $Protocol_opic13Old->ptc13_20_sub;
                $protocol_opic13->ptc13_21      = $Protocol_opic13Old->ptc13_21;
                $protocol_opic13->save();

            }

            //14 Save
            $Protocol_opic14Old     =   Protocol_opic14::where('protocol_id',$request->id)->first();
            if(!empty($Protocol_opic14Old)){

                $Protocol_opic14    = new Protocol_opic14;
                $Protocol_opic14->protocol_id   = Session::get('protocol_id');
                $Protocol_opic14->ptc14_01      = $Protocol_opic14Old->ptc14_01;
                $Protocol_opic14->ptc14_01_sub  = $Protocol_opic14Old->ptc14_01_sub;
                $Protocol_opic14->ptc14_02      = $Protocol_opic14Old->ptc14_02;
                $Protocol_opic14->ptc14_02_sub  = $Protocol_opic14Old->ptc14_02_sub;
                $Protocol_opic14->ptc14_03      = $Protocol_opic14Old->ptc14_03;
                $Protocol_opic14->ptc14_04      = $Protocol_opic14Old->ptc14_04;
                $Protocol_opic14->ptc14_05      = $Protocol_opic14Old->ptc14_05;
                $Protocol_opic14->ptc14_05_sub  = $Protocol_opic14Old->ptc14_05_sub;
                $Protocol_opic14->save();

            }

            //15 Save
            $Protocol_opic15Old     =   Protocol_opic15::where('protocol_id',$request->id)->first();
            if(!empty($Protocol_opic15Old)){

                $Protocol_opic15    = new Protocol_opic15;
                $Protocol_opic15->protocol_id   = Session::get('protocol_id');
                $Protocol_opic15->ptc15_01      = $Protocol_opic15Old->ptc15_01;
                $Protocol_opic15->ptc15_02      = $Protocol_opic15Old->ptc15_02;
                $Protocol_opic15->ptc15_02_sub  = $Protocol_opic15Old->ptc15_02_sub; 
                $Protocol_opic15->ptc15_03      = $Protocol_opic15Old->ptc15_03; 
                $Protocol_opic15->ptc15_04      = $Protocol_opic15Old->ptc15_04; 
                $Protocol_opic15->ptc15_04_sub  = $Protocol_opic15Old->ptc15_04_sub; 
                $Protocol_opic15->save();

            }

            //16 Save
            $Protocol_opic16Old     =   Protocol_opic16::where('protocol_id',$request->id)->first();
            if(!empty($Protocol_opic16Old)){

                $Protocol_opic16    = new Protocol_opic16;
                $Protocol_opic16->protocol_id   = Session::get('protocol_id');
                $Protocol_opic16->ptc16_01      = $Protocol_opic16Old->ptc16_01; 
                $Protocol_opic16->ptc16_02      = $Protocol_opic16Old->ptc16_02; 
                $Protocol_opic16->ptc16_02_sub      = $Protocol_opic16Old->ptc16_02_sub; 
                $Protocol_opic16->ptc16_03      = $Protocol_opic16Old->ptc16_03; 
                $Protocol_opic16->ptc16_04      = $Protocol_opic16Old->ptc16_04; 
                $Protocol_opic16->ptc16_05      = $Protocol_opic16Old->ptc16_05; 
                $Protocol_opic16->ptc16_06      = $Protocol_opic16Old->ptc16_06; 
                $Protocol_opic16->ptc16_07      = $Protocol_opic16Old->ptc16_07; 
                $Protocol_opic16->ptc16_07_sub      = $Protocol_opic16Old->ptc16_07_sub; 
                $Protocol_opic16->ptc16_08      = $Protocol_opic16Old->ptc16_08; 
                $Protocol_opic16->ptc16_08_sub      = $Protocol_opic16Old->ptc16_08_sub; 
                $Protocol_opic16->ptc16_09      = $Protocol_opic16Old->ptc16_09; 
                $Protocol_opic16->ptc16_09_sub      = $Protocol_opic16Old->ptc16_09_sub; 
                $Protocol_opic16->ptc16_10      = $Protocol_opic16Old->ptc16_10; 
                $Protocol_opic16->ptc16_11      = $Protocol_opic16Old->ptc16_11; 
                $Protocol_opic16->ptc16_12      = $Protocol_opic16Old->ptc16_12; 
                $Protocol_opic16->ptc16_13      = $Protocol_opic16Old->ptc16_13; 
                $Protocol_opic16->ptc16_14      = $Protocol_opic16Old->ptc16_14; 
                $Protocol_opic16->ptc16_15      = $Protocol_opic16Old->ptc16_15; 
                $Protocol_opic16->ptc16_16      = $Protocol_opic16Old->ptc16_16; 
                $Protocol_opic16->ptc16_17      = $Protocol_opic16Old->ptc16_17; 
                $Protocol_opic16->ptc16_18      = $Protocol_opic16Old->ptc16_18; 
                $Protocol_opic16->ptc16_19      = $Protocol_opic16Old->ptc16_19; 
                $Protocol_opic16->ptc16_19_sub      = $Protocol_opic16Old->ptc16_19_sub; 
                $Protocol_opic16->ptc16_20      = $Protocol_opic16Old->ptc16_20; 
                $Protocol_opic16->ptc16_21      = $Protocol_opic16Old->ptc16_21; 
                $Protocol_opic16->ptc16_22      = $Protocol_opic16Old->ptc16_22; 
                $Protocol_opic16->ptc16_23      = $Protocol_opic16Old->ptc16_23; 
                $Protocol_opic16->ptc16_24      = $Protocol_opic16Old->ptc16_24; 
                $Protocol_opic16->ptc16_25      = $Protocol_opic16Old->ptc16_25; 
                $Protocol_opic16->ptc16_26      = $Protocol_opic16Old->ptc16_26; 
                $Protocol_opic16->ptc16_26_sub      = $Protocol_opic16Old->ptc16_26_sub; 
                $Protocol_opic16->ptc16_27      = $Protocol_opic16Old->ptc16_27; 
                $Protocol_opic16->ptc16_28      = $Protocol_opic16Old->ptc16_28; 
                $Protocol_opic16->ptc16_28_sub      = $Protocol_opic16Old->ptc16_28_sub; 
                $Protocol_opic16->ptc16_29      = $Protocol_opic16Old->ptc16_29; 
                $Protocol_opic16->ptc16_30      = $Protocol_opic16Old->ptc16_30; 
                $Protocol_opic16->ptc16_30_sub      = $Protocol_opic16Old->ptc16_30_sub; 
                $Protocol_opic16->ptc16_31      = $Protocol_opic16Old->ptc16_31; 
                $Protocol_opic16->ptc16_32      = $Protocol_opic16Old->ptc16_32; 
                $Protocol_opic16->ptc16_32_sub      = $Protocol_opic16Old->ptc16_32_sub; 
                $Protocol_opic16->ptc16_33      = $Protocol_opic16Old->ptc16_33; 
                $Protocol_opic16->ptc16_33_sub      = $Protocol_opic16Old->ptc16_33_sub; 
                $Protocol_opic16->ptc16_34      = $Protocol_opic16Old->ptc16_34; 
                $Protocol_opic16->ptc16_35      = $Protocol_opic16Old->ptc16_35; 
                $Protocol_opic16->ptc16_35_sub      = $Protocol_opic16Old->ptc16_35_sub; 
                $Protocol_opic16->ptc16_36      = $Protocol_opic16Old->ptc16_36; 
                $Protocol_opic16->ptc16_37      = $Protocol_opic16Old->ptc16_37; 
                $Protocol_opic16->ptc16_37_sub      = $Protocol_opic16Old->ptc16_37_sub; 
                $Protocol_opic16->ptc16_38_      = $Protocol_opic16Old->ptc16_38_; 
                $Protocol_opic16->ptc16_38      = $Protocol_opic16Old->ptc16_38; 
                $Protocol_opic16->ptc16_39      = $Protocol_opic16Old->ptc16_39; 
                $Protocol_opic16->ptc16_39_sub      = $Protocol_opic16Old->ptc16_39_sub; 
                $Protocol_opic16->save();

            }

            //17 Save
            $Protocol_opic17Old     =   Protocol_opic17::where('protocol_id',$request->id)->first();
            if(!empty($Protocol_opic17Old)){

                $Protocol_opic17                = new Protocol_opic17;
                $Protocol_opic17->protocol_id   = Session::get('protocol_id');
                $Protocol_opic17->ptc17_01      = $Protocol_opic17Old->ptc17_01; 
                $Protocol_opic17->ptc17_02      = $Protocol_opic17Old->ptc17_02; 
                $Protocol_opic17->save();

            }

            //18 Save
            $Protocol_opic18Old     =   Protocol_opic18::where('protocol_id',$request->id)->first();
            if(!empty($Protocol_opic18Old)){

                $Protocol_opic18                = new Protocol_opic18;
                $Protocol_opic18->protocol_id   = Session::get('protocol_id');
                $Protocol_opic18->ptc18_01      = $Protocol_opic18Old->ptc18_01; 
                $Protocol_opic18->ptc18_02      = $Protocol_opic18Old->ptc18_02;
                $Protocol_opic18->ptc18_03      = $Protocol_opic18Old->ptc18_03;
                $Protocol_opic18->ptc18_04      = $Protocol_opic18Old->ptc18_04;
                $Protocol_opic18->ptc18_05      = $Protocol_opic18Old->ptc18_05;
                $Protocol_opic18->ptc18_file    = $Protocol_opic18Old->ptc18_file; 
        
                $Protocol_opic18->ptc18_06      = $Protocol_opic18Old->ptc18_06;
                $Protocol_opic18->ptc18_07      = $Protocol_opic18Old->ptc18_07;
                $Protocol_opic18->ptc18_08      = $Protocol_opic18Old->ptc18_08;
                $Protocol_opic18->ptc18_09      = $Protocol_opic18Old->ptc18_09;
                $Protocol_opic18->ptc18_10      = $Protocol_opic18Old->ptc18_10;
                $Protocol_opic18->ptc18_11      = $Protocol_opic18Old->ptc18_11;
                $Protocol_opic18->ptc18_12      = $Protocol_opic18Old->ptc18_12;
                $Protocol_opic18->ptc18_13      = $Protocol_opic18Old->ptc18_13;
                $Protocol_opic18->ptc18_14      = $Protocol_opic18Old->ptc18_14;
                $Protocol_opic18->ptc18_15      = $Protocol_opic18Old->ptc18_15;
                $Protocol_opic18->ptc18_16      = $Protocol_opic18Old->ptc18_16;
                $Protocol_opic18->ptc18_17      = $Protocol_opic18Old->ptc18_17;
                $Protocol_opic18->ptc18_18      = $Protocol_opic18Old->ptc18_18;
                $Protocol_opic18->ptc18_19      = $Protocol_opic18Old->ptc18_19;
                $Protocol_opic18->ptc18_19_sub  = $Protocol_opic18Old->ptc18_19_sub;
                $Protocol_opic18->ptc18_20      = $Protocol_opic18Old->ptc18_20;
                $Protocol_opic18->ptc18_21      = $Protocol_opic18Old->ptc18_21;
                $Protocol_opic18->ptc18_22      = $Protocol_opic18Old->ptc18_22;
                $Protocol_opic18->ptc18_23      = $Protocol_opic18Old->ptc18_23;
                $Protocol_opic18->ptc18_24      = $Protocol_opic18Old->ptc18_24;
                $Protocol_opic18->ptc18_24_1    = $Protocol_opic18Old->ptc18_24_1;
                $Protocol_opic18->ptc18_25      = $Protocol_opic18Old->ptc18_25;
                $Protocol_opic18->ptc18_26      = $Protocol_opic18Old->ptc18_26;
                $Protocol_opic18->ptc18_27      = $Protocol_opic18Old->ptc18_27;
        
                $Protocol_opic18->save();

            }

            //18-02 Save
            $Protocol_opic18_sub01Old     =   Protocol_opic18_sub01::where('protocol_id',$request->id)->get();
            if(!empty($Protocol_opic18_sub01Old)){
                foreach($Protocol_opic18_sub01Old as $r){
                    $Protocol_opic18_sub01    = new Protocol_opic18_sub01;
                    $Protocol_opic18_sub01->protocol_id   = Session::get('protocol_id');
                    $Protocol_opic18_sub01->ptc18_01    = $r->ptc18_01;
                    $Protocol_opic18_sub01->ptc18_02    = $r->ptc18_02;
                    $Protocol_opic18_sub01->ptc18_03    = $r->ptc18_03;
                    $Protocol_opic18_sub01->ptc18_04    = $r->ptc18_04;
                    $Protocol_opic18_sub01->save();
                }
            }

            //18-03 Save
            $Protocol_opic18_sub02Old     =   Protocol_opic18_sub02::where('protocol_id',$request->id)->get();
            if(!empty($Protocol_opic18_sub02Old)){
                foreach($Protocol_opic18_sub02Old as $r){

                    $Protocol_opic18_sub02    = new Protocol_opic18_sub02;
                    $Protocol_opic18_sub02->protocol_id     = Session::get('protocol_id');
                    $Protocol_opic18_sub02->ptc18_01        = $r->ptc18_01;
                    $Protocol_opic18_sub02->ptc18_02        = $r->ptc18_02;
                    $Protocol_opic18_sub02->ptc18_03        = $r->ptc18_03;
                    $Protocol_opic18_sub02->ptc18_04        = $r->ptc18_04;
                    $Protocol_opic18_sub02->ptc18_05        = $r->ptc18_05;
                    $Protocol_opic18_sub02->save();
                }
            }
            //18-04 Save
            $Protocol_opic18_sub03Old     =   Protocol_opic18_sub03::where('protocol_id',$request->id)->get();
            if(!empty($Protocol_opic18_sub03Old)){
                foreach($Protocol_opic18_sub03Old as $r){
                    
                    $Protocol_opic18_sub03    = new Protocol_opic18_sub03;
                    $Protocol_opic18_sub03->protocol_id     = Session::get('protocol_id');
                    $Protocol_opic18_sub03->ptc18_01        = $r->ptc18_01;
                    $Protocol_opic18_sub03->ptc18_02        = $r->ptc18_02;
                    $Protocol_opic18_sub03->ptc18_03        = $r->ptc18_03;
                    $Protocol_opic18_sub03->ptc18_04        = $r->ptc18_04;
                    $Protocol_opic18_sub03->ptc18_05        = $r->ptc18_05;
                    $Protocol_opic18_sub03->ptc18_06        = $r->ptc18_06;
                    $Protocol_opic18_sub03->ptc18_07        = $r->ptc18_07;
                    $Protocol_opic18_sub03->save();
                }
            }

            //18-05 Save
            $Protocol_opic18_sub04Old     =   Protocol_opic18_sub04::where('protocol_id',$request->id)->get();
            if(!empty($Protocol_opic18_sub04Old)){
                foreach($Protocol_opic18_sub04Old as $r){
                    
                    $Protocol_opic18_sub04    = new Protocol_opic18_sub04;
                    $Protocol_opic18_sub04->protocol_id     = Session::get('protocol_id');
                    $Protocol_opic18_sub04->ptc18_01        = $r->ptc18_01;
                    $Protocol_opic18_sub04->ptc18_02        = $r->ptc18_02;
                    $Protocol_opic18_sub04->ptc18_03        = $r->ptc18_03;
                    $Protocol_opic18_sub04->ptc18_04        = $r->ptc18_04;
                    $Protocol_opic18_sub04->ptc18_05        = $r->ptc18_05;
                    $Protocol_opic18_sub04->ptc18_06        = $r->ptc18_06;
                    $Protocol_opic18_sub04->ptc18_07        = $r->ptc18_07;
                    $Protocol_opic18_sub04->ptc18_08        = $r->ptc18_08;
                    $Protocol_opic18_sub04->ptc18_09        = $r->ptc18_09;
                    $Protocol_opic18_sub04->save();
                }
            }

            //18-06 Save
            $Protocol_opic18_sub05Old     =   Protocol_opic18_sub05::where('protocol_id',$request->id)->get();
            if(!empty($Protocol_opic18_sub05Old)){
                foreach($Protocol_opic18_sub05Old as $r){
                    
                    $Protocol_opic18_sub05    = new Protocol_opic18_sub05;
                    $Protocol_opic18_sub05->protocol_id     = Session::get('protocol_id');
                    $Protocol_opic18_sub05->ptc18_01        = $r->ptc18_01;
                    $Protocol_opic18_sub05->ptc18_02        = $r->ptc18_02;
                    $Protocol_opic18_sub05->ptc18_03        = $r->ptc18_03;
                    $Protocol_opic18_sub05->ptc18_04        = $r->ptc18_04;
                    $Protocol_opic18_sub05->save();
                }
            }

            //18-06 Save
            $Protocol_opic18_sub06Old     =   Protocol_opic18_sub06::where('protocol_id',$request->id)->get();
            if(!empty($Protocol_opic18_sub06Old)){
                foreach($Protocol_opic18_sub06Old as $r){
                    
                    $Protocol_opic18_sub06    = new Protocol_opic18_sub06;
                    $Protocol_opic18_sub06->protocol_id     = Session::get('protocol_id');
                    $Protocol_opic18_sub06->ptc18_01        = $r->ptc18_01;
                    $Protocol_opic18_sub06->ptc18_02        = $r->ptc18_02;
                    $Protocol_opic18_sub06->ptc18_03        = $r->ptc18_03;
                    $Protocol_opic18_sub06->ptc18_04        = $r->ptc18_04;
                    $Protocol_opic18_sub06->save();
                }
            }

            //19 Save
            $Protocol_opic19Old     =   Protocol_opic19::where('protocol_id',$request->id)->first();
            if(!empty($Protocol_opic19Old)){

                $Protocol_opic19                = new Protocol_opic19;
                $Protocol_opic19->protocol_id   = Session::get('protocol_id');
                $Protocol_opic19->ptc19_01      = $Protocol_opic19Old->ptc19_01; 
                $Protocol_opic19->ptc19_02      = $Protocol_opic19Old->ptc19_02; 
                $Protocol_opic19->ptc19_03      = $Protocol_opic19Old->ptc19_03; 
                $Protocol_opic19->ptc19_04      = $Protocol_opic19Old->ptc19_04; 
                $Protocol_opic19->ptc19_05      = $Protocol_opic19Old->ptc19_05; 
                $Protocol_opic19->ptc19_06      = $Protocol_opic19Old->ptc19_06; 
                $Protocol_opic19->ptc19_07      = $Protocol_opic19Old->ptc19_07; 
                $Protocol_opic19->ptc19_08      = $Protocol_opic19Old->ptc19_08; 
                $Protocol_opic19->save();

            }

            //20 Save
            $Protocol_opic20Old     =   Protocol_opic20::where('protocol_id',$request->id)->first();
            if(!empty($Protocol_opic20Old)){

                $Protocol_opic20                = new Protocol_opic20;
                $Protocol_opic20->protocol_id   = Session::get('protocol_id');
                $Protocol_opic20->ptc20_01      = $Protocol_opic20Old->ptc20_01;
                $Protocol_opic20->ptc20_02      = $Protocol_opic20Old->ptc20_02; 
                $Protocol_opic20->save();
            }

            //21 Save
            $Protocol_opic21Old     =   Protocol_opic21::where('protocol_id',$request->id)->first();
            if(!empty($Protocol_opic21Old)){

                $Protocol_opic21                = new Protocol_opic21;
                $Protocol_opic21->protocol_id   = Session::get('protocol_id');
                $Protocol_opic21->ptc21_01      = $Protocol_opic21Old->ptc21_01;
                $Protocol_opic21->ptc21_02      = $Protocol_opic21Old->ptc21_02;
                $Protocol_opic21->ptc21_03      = $Protocol_opic21Old->ptc21_03;
                $Protocol_opic21->save();
            }

            //21 Save
            $Protocol_opic22Old     =   Protocol_opic22::where('protocol_id',$request->id)->first();
            if(!empty($Protocol_opic22Old)){

                $Protocol_opic22                = new Protocol_opic22;
                $Protocol_opic22->protocol_id   = Session::get('protocol_id');
                $Protocol_opic22->ptc22_01      = $Protocol_opic22Old->ptc22_01;
                $Protocol_opic22->ptc22_02      = $Protocol_opic22Old->ptc22_02;
                $Protocol_opic22->ptc22_03      = $Protocol_opic22Old->ptc22_03;
                $Protocol_opic22->ptc22_04      = $Protocol_opic22Old->ptc22_04;
                $Protocol_opic22->ptc22_05      = $Protocol_opic22Old->ptc22_05;
                $Protocol_opic22->ptc22_06      = $Protocol_opic22Old->ptc22_06;
                $Protocol_opic22->save();
            }

            //23 Save
            $Protocol_opic23Old     =   Protocol_opic23::where('protocol_id',$request->id)->first();
            if(!empty($Protocol_opic23Old)){

                $Protocol_opic23                = new Protocol_opic23;
                $Protocol_opic23->protocol_id   = Session::get('protocol_id');
                $Protocol_opic23->ptc23_01      = $Protocol_opic23Old->ptc23_01;
                $Protocol_opic23->ptc23_02      = $Protocol_opic23Old->ptc23_02;
                $Protocol_opic23->ptc23_03      = $Protocol_opic23Old->ptc23_03;
                $Protocol_opic23->ptc23_04      = $Protocol_opic23Old->ptc23_04;
                $Protocol_opic23->save();
            }

            //24 Save
            $Protocol_opic24Old     =   Protocol_opic24::where('protocol_id',$request->id)->first();
            if(!empty($Protocol_opic24Old)){

                $Protocol_opic24                = new Protocol_opic24;
                $Protocol_opic24->protocol_id   = Session::get('protocol_id');
                $Protocol_opic24->ptc24_01      = $Protocol_opic24Old->ptc24_01;
                $Protocol_opic24->ptc24_02      = $Protocol_opic24Old->ptc24_02;
                $Protocol_opic24->ptc24_03      = $Protocol_opic24Old->ptc24_03;
                $Protocol_opic24->ptc24_04      = $Protocol_opic24Old->ptc24_04;
                $Protocol_opic24->ptc24_05      = $Protocol_opic24Old->ptc24_05;
                $Protocol_opic24->save();
            }

            //25 Save
            $Protocol_opic25Old     =   Protocol_opic25::where('protocol_id',$request->id)->first();
            if(!empty($Protocol_opic25Old)){

                $Protocol_opic25                = new Protocol_opic25;
                $Protocol_opic25->protocol_id   = Session::get('protocol_id');
                $Protocol_opic25->ptc25_01      = $Protocol_opic25Old->ptc25_01;
                $Protocol_opic25->ptc25_02      = $Protocol_opic25Old->ptc25_02;
                $Protocol_opic25->ptc25_03      = $Protocol_opic25Old->ptc25_03;
                $Protocol_opic25->save();
            }

            //26 Save
            $Protocol_opic26Old     =   Protocol_opic26::where('protocol_id',$request->id)->first();
            if(!empty($Protocol_opic26Old)){

                $Protocol_opic26                = new Protocol_opic26;
                $Protocol_opic26->protocol_id   = Session::get('protocol_id');
                $Protocol_opic26->ptc26_01      = $Protocol_opic26Old->ptc26_01;
                $Protocol_opic26->ptc26_02      = $Protocol_opic26Old->ptc26_02;
                $Protocol_opic26->save();
            }

            //27 Save
            $Protocol_opic27Old     =   Protocol_opic27::where('protocol_id',$request->id)->first();
            if(!empty($Protocol_opic27Old)){

                $Protocol_opic27                = new Protocol_opic27;
                $Protocol_opic27->protocol_id   = Session::get('protocol_id');
                $Protocol_opic27->ptc27_01      = $Protocol_opic27Old->ptc27_01;
                $Protocol_opic27->ptc27_02      = $Protocol_opic27Old->ptc27_02;
                $Protocol_opic27->save();
            }

            //28 Save
            $Protocol_opic28Old     =   Protocol_opic28::where('protocol_id',$request->id)->first();
            if(!empty($Protocol_opic28Old)){

                $Protocol_opic28                = new Protocol_opic28;
                $Protocol_opic28->protocol_id   = Session::get('protocol_id');
                $Protocol_opic28->ptc28_01      = $Protocol_opic28Old->ptc28_01;
                $Protocol_opic28->ptc28_02      = $Protocol_opic28Old->ptc28_02;
                $Protocol_opic28->ptc28_03      = $Protocol_opic28Old->ptc28_03;
                $Protocol_opic28->save();
            }

            //30 Save
            $Protocol_opic30Old     =   Protocol_opic30::where('protocol_id',$request->id)->first();
            if(!empty($Protocol_opic30Old)){

                $Protocol_opic30                    = new Protocol_opic30;
                $Protocol_opic30->protocol_id       = Session::get('protocol_id');
                $Protocol_opic30->ptc30_01          = $Protocol_opic30Old->ptc30_01;
                $Protocol_opic30->ptc30_01_sub      = $Protocol_opic30Old->ptc30_01_sub;
                $Protocol_opic30->ptc30_02          = $Protocol_opic30Old->ptc30_02;
                $Protocol_opic30->ptc30_02_sub      = $Protocol_opic30Old->ptc30_02_sub;
                $Protocol_opic30->ptc30_03          = $Protocol_opic30Old->ptc30_03;
                $Protocol_opic30->ptc30_03_sub      = $Protocol_opic30Old->ptc30_03_sub;
                $Protocol_opic30->ptc30_04          = $Protocol_opic30Old->ptc30_04;
                $Protocol_opic30->ptc30_04_sub      = $Protocol_opic30Old->ptc30_04_sub;
                $Protocol_opic30->ptc30_05          = $Protocol_opic30Old->ptc30_05;
                $Protocol_opic30->ptc30_05_sub      = $Protocol_opic30Old->ptc30_05_sub;
                $Protocol_opic30->ptc30_06          = $Protocol_opic30Old->ptc30_06;
                $Protocol_opic30->ptc30_06_sub      = $Protocol_opic30Old->ptc30_06_sub;
                $Protocol_opic30->ptc30_07          = $Protocol_opic30Old->ptc30_07;
                $Protocol_opic30->ptc30_07_sub      = $Protocol_opic30Old->ptc30_07_sub;
                $Protocol_opic30->ptc30_08          = $Protocol_opic30Old->ptc30_08;
                $Protocol_opic30->ptc30_08_sub      = $Protocol_opic30Old->ptc30_08_sub;
                $Protocol_opic30->ptc30_09          = $Protocol_opic30Old->ptc30_09;
                $Protocol_opic30->ptc30_09_sub      = $Protocol_opic30Old->ptc30_09_sub;
                $Protocol_opic30->ptc30_10          = $Protocol_opic30Old->ptc30_10;
                $Protocol_opic30->ptc30_10_sub      = $Protocol_opic30Old->ptc30_10_sub;
                $Protocol_opic30->ptc30_11          = $Protocol_opic30Old->ptc30_11;
                $Protocol_opic30->ptc30_11_sub      = $Protocol_opic30Old->ptc30_11_sub;
                $Protocol_opic30->ptc30_12          = $Protocol_opic30Old->ptc30_12;
                $Protocol_opic30->ptc30_12_sub      = $Protocol_opic30Old->ptc30_12_sub;
                $Protocol_opic30->ptc30_13          = $Protocol_opic30Old->ptc30_13;
                $Protocol_opic30->ptc30_13_sub      = $Protocol_opic30Old->ptc30_13_sub;
                $Protocol_opic30->ptc30_14          = $Protocol_opic30Old->ptc30_14;
                $Protocol_opic30->ptc30_14_sub      = $Protocol_opic30Old->ptc30_14_sub;
                $Protocol_opic30->ptc30_15          = $Protocol_opic30Old->ptc30_15;
                $Protocol_opic30->ptc30_15_sub      = $Protocol_opic30Old->ptc30_15_sub;
                $Protocol_opic30->ptc30_16          = $Protocol_opic30Old->ptc30_16;
                $Protocol_opic30->ptc30_16_sub      = $Protocol_opic30Old->ptc30_16_sub;
                $Protocol_opic30->save();
            }

            //30 - sub01 Save
            $Protocol_opic30_sub01Old     =   Protocol_opic30_sub01::where('protocol_id',$request->id)->get();
            if(!empty($Protocol_opic30_sub01Old)){
                foreach($Protocol_opic30_sub01Old as $r){
                    
                    $Protocol_opic30_sub01                  = new Protocol_opic30_sub01;
                    $Protocol_opic30_sub01->protocol_id     = Session::get('protocol_id');
                    $Protocol_opic30_sub01->ptc30_name_01   = $r->ptc30_name_01;
                    $Protocol_opic30_sub01->save();
                }
            }

            //30 - sub02  Save
            $protocol_opic30_sub02Old     =   protocol_opic30_sub02::where('protocol_id',$request->id)->get();
            if(!empty($protocol_opic30_sub02Old)){
                foreach($protocol_opic30_sub02Old as $r){
                    
                    $protocol_opic30_sub02                  = new protocol_opic30_sub02;
                    $protocol_opic30_sub02->protocol_id     = Session::get('protocol_id');
                    $protocol_opic30_sub02->ptc30_name_02   = $r->ptc30_name_02;
                    $protocol_opic30_sub02->save();
                }
            }

            $protocol_reviewer_listOld     =   protocol_reviewer_list::where('protocol_id',$request->id)->get();
            if(!empty($protocol_reviewer_listOld)){
                foreach($protocol_reviewer_listOld as $r){
                    
                    $protocol_reviewer_list                  = new protocol_reviewer_list;
                    $protocol_reviewer_list->protocol_id         = Session::get('protocol_id');
                    $protocol_reviewer_list->users_id           = $r->users_id;
                    $protocol_reviewer_list->reviewer_number     = $r->reviewer_number;
                    $protocol_reviewer_list->status             = "N";
                    $protocol_reviewer_list->save();
                }
            }

            $protocol_reviewer_opicOld     =   Protocol_reviewer_opic::where('protocol_id',$request->id)->get();
            if(!empty($protocol_reviewer_opicOld)){
                foreach($protocol_reviewer_opicOld as $r){
                    
                    $protocol_reviewer_opic         = new Protocol_reviewer_opic;
                    $protocol_reviewer_opic->protocol_id         = Session::get('protocol_id');
                    $protocol_reviewer_opic->protocol_number     = $r->protocol_number;
                    $protocol_reviewer_opic->protocol_status     = $r->protocol_status;
                    $protocol_reviewer_opic->comment             = $r->comment;
                    $protocol_reviewer_opic->reviewer_id         = $r->reviewer_id;
                    $protocol_reviewer_opic->save();
                }
            }
            

            // $Protocol_secretary_opicOld     =   Protocol_secretary_opic::where('protocol_id',$request->id)->get();
            // if(!empty($Protocol_secretary_opicOld)){
            //     foreach($Protocol_secretary_opicOld as $r){
                    
            //         $Protocol_secretary_opic                  = new Protocol_secretary_opic;
            //         $Protocol_secretary_opic->protocol_id         = Session::get('protocol_id');
            //         $Protocol_secretary_opic->protocol_number     = $r->protocol_number;
            //         $Protocol_secretary_opic->protocol_status     = $r->protocol_status;
            //         $Protocol_secretary_opic->comment             = $r->comment;
            //         $Protocol_secretary_opic->secretary_id        = $r->secretary_id;
            //         $Protocol_secretary_opic->save();
            //     }
            // }
        }
        return redirect()->route('officer.protocol_list.index')->with('yes', 'สำเร็จ'); 
        
        
    }

}
