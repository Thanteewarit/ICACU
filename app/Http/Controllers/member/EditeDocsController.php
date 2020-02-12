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
use App\Model\Animal_stock;
use App\Model\Animal_common_name;
use App\Model\Protocol_secretary_opic;

class EditeDocsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function editProtocol_opic01(Request $request)
    {
        $Protocol_opic01   =   Protocol_opic01::where('protocol_id', $request->id)
          ->update([
              'animal_protocol_th' => $request->animal_protocol_th,
              'animal_protocol_en' => $request->animal_protocol_en,
              'project_proposal_th' => $request->project_proposal_th,
              'project_proposal_en' => $request->project_proposal_en
        ]);
    }

    public function editProtocol_opic02(Request $request)
    {
        $ptc_id     =   $request->id;
        $Protocol_opic02        =  Protocol_opic02::Where('protocol_id',$request->id)->delete();
        $Protocol_opic02_sub    =  Protocol_opic02_sub::Where('protocol_id',$request->id)->delete();
        $Protocol_opic02_sub02  =  Protocol_opic02_sub02::Where('protocol_id',$request->id)->delete();
        $sum = count($request->Name_th);
        if ($sum != 0) {
            for ($i = 0; $i < $sum; $i++) {

                $Protocol_opic02    = new Protocol_opic02;
                $Protocol_opic02->protocol_id   = $ptc_id;
                $Protocol_opic02->Name_th = $request->Name_th[$i];
                $Protocol_opic02->Surname_th = $request->Surname_th[$i];
                $Protocol_opic02->Name_en        = $request->Name_en[$i];
                $Protocol_opic02->Surname_en        = $request->Surname_en[$i];
                $Protocol_opic02->opic02_status        = $request->opic02_status[$i];
                $Protocol_opic02->opic02_Other        = $request->opic02_Other[$i];
                $Protocol_opic02->opic02_Align_th        = $request->opic02_Align_th[$i];
                $Protocol_opic02->opic02_Align_en        = $request->opic02_Align_en[$i];
                $Protocol_opic02->opic02_Other_position_th        = $request->opic02_Other_position_th[$i];
                $Protocol_opic02->opic02_Other_position_en        = $request->opic02_Other_position_en[$i];
                $Protocol_opic02->opic02_Contact_address_th        = $request->opic02_Contact_address_th[$i];
                $Protocol_opic02->opic02_Contact_address_en        = $request->opic02_Contact_address_en[$i];
                $Protocol_opic02->opic02_Tel        = $request->opic02_Tel[$i];
                $Protocol_opic02->opic02_Fax        = $request->opic02_Fax[$i];
                $Protocol_opic02->opic02_email        = $request->opic02_email[$i];
                $Protocol_opic02->opic02_responsible        = $request->opic02_responsible[$i];
                $Protocol_opic02->number01     = $request->number0[$i];
                $Protocol_opic02->save();

                if(!empty($request->name_th01[$i])){
                    $Protocol_opic02_sub                    = new Protocol_opic02_sub;
                    $Protocol_opic02_sub->name_th           = $request->name_th01[$i];
                    $Protocol_opic02_sub->protocol_id       = $ptc_id;
                    $Protocol_opic02_sub->lastname_th       = $request->lastname_th01[$i];
                    $Protocol_opic02_sub->name_en           = $request->name_en01[$i];
                    $Protocol_opic02_sub->lastname_en       = $request->lastname_en01[$i];
                    $Protocol_opic02_sub->position_th       = $request->position_th01[$i];
                    $Protocol_opic02_sub->position_en       = $request->position_en01[$i];
                    $Protocol_opic02_sub->address_th        = $request->address_th01[$i];
                    $Protocol_opic02_sub->address_en        = $request->address_en01[$i];
                    $Protocol_opic02_sub->Tel       = $request->Tel01[$i];
                    $Protocol_opic02_sub->Fax       = $request->Fax01[$i];
                    $Protocol_opic02_sub->email     = $request->email01[$i];
                     $Protocol_opic02_sub->number01  = $request->number01[$i];
                    $Protocol_opic02_sub->save();
                 }

                if(!empty($request->protocol_01_02[$i])){
                    
                    if(!empty($_FILES['protocol_file02']["name"][$i])){
                        
                        $file_name  = $_FILES['protocol_file02']["name"][$i];
                        $file_tmp   = $_FILES['protocol_file02']["tmp_name"][$i];
                        $type       = $_FILES['protocol_file02']["type"][$i];
                        $type       = strrchr($file_name,".");
                        $file_nameth    =date("YmdHis").$id."$type";
                        copy($file_tmp, "file-upload/".$file_nameth);
                        
                        $Protocol_opic02_sub02                    = new Protocol_opic02_sub02;
                        $Protocol_opic02_sub02->protocol_id       = $ptc_id;
                        $Protocol_opic02_sub02->number01          = $request->number01[$i]; 
                        $Protocol_opic02_sub02->protocol_file     = $file_nameth;
                        $Protocol_opic02_sub02->protocol_01       = $request->protocol_01_02[$i]; 
                        if(!empty($request->protocol_02_02[$i])){  $Protocol_opic02_sub02->protocol_02       = $request->protocol_02_02[$i]; }
                        if(!empty($request->protocol_03_02[$i])){  $Protocol_opic02_sub02->protocol_03       = $request->protocol_03_02[$i]; }
                        if(!empty($request->protocol_04_02[$i])){  $Protocol_opic02_sub02->protocol_04       = $request->protocol_04_02[$i]; }
                        if(!empty($request->protocol_05_02[$i])){  $Protocol_opic02_sub02->protocol_05       = $request->protocol_05_02[$i]; }
                        if(!empty($request->protocol_06_02[$i])){  $Protocol_opic02_sub02->protocol_06       = $request->protocol_06_02[$i]; }
                        if(!empty($request->protocol_07_02[$i])){  $Protocol_opic02_sub02->protocol_07       = $request->protocol_07_02[$i]; }
                        if(!empty($request->protocol_08_02[$i])){  $Protocol_opic02_sub02->protocol_08       = $request->protocol_08_02[$i]; }
                        if(!empty($request->protocol_09_02[$i])){  $Protocol_opic02_sub02->protocol_09       = $request->protocol_09_02[$i]; }
                        if(!empty($request->protocol_10_02[$i])){  $Protocol_opic02_sub02->protocol_10       = $request->protocol_10_02[$i]; }
                        if(!empty($request->protocol_11_02[$i])){  $Protocol_opic02_sub02->protocol_11       = $request->protocol_11_02[$i]; }
                        if(!empty($request->protocol_12_02[$i])){  $Protocol_opic02_sub02->protocol_12       = $request->protocol_12_02[$i]; }
                        $Protocol_opic02_sub02->protocol_13       = $request->protocol_13_02[$i];
                        $Protocol_opic02_sub02->save();
    
                    }else{
                        $Protocol_opic02_sub02                    = new Protocol_opic02_sub02;
                        $Protocol_opic02_sub02->protocol_id       = $ptc_id;
                        $Protocol_opic02_sub02->number01          = $request->number01[$i]; 
                        $Protocol_opic02_sub02->protocol_01       = $request->protocol_01_02[$i]; 
                        if(!empty($request->protocol_02_02[$i])){  $Protocol_opic02_sub02->protocol_02       = $request->protocol_02_02[$i]; }
                        if(!empty($request->protocol_03_02[$i])){  $Protocol_opic02_sub02->protocol_03       = $request->protocol_03_02[$i]; }
                        if(!empty($request->protocol_04_02[$i])){  $Protocol_opic02_sub02->protocol_04       = $request->protocol_04_02[$i]; }
                        if(!empty($request->protocol_05_02[$i])){  $Protocol_opic02_sub02->protocol_05       = $request->protocol_05_02[$i]; }
                        if(!empty($request->protocol_06_02[$i])){  $Protocol_opic02_sub02->protocol_06       = $request->protocol_06_02[$i]; }
                        if(!empty($request->protocol_07_02[$i])){  $Protocol_opic02_sub02->protocol_07       = $request->protocol_07_02[$i]; }
                        if(!empty($request->protocol_08_02[$i])){  $Protocol_opic02_sub02->protocol_08       = $request->protocol_08_02[$i]; }
                        if(!empty($request->protocol_09_02[$i])){  $Protocol_opic02_sub02->protocol_09       = $request->protocol_09_02[$i]; }
                        if(!empty($request->protocol_10_02[$i])){  $Protocol_opic02_sub02->protocol_10       = $request->protocol_10_02[$i]; }
                        if(!empty($request->protocol_11_02[$i])){  $Protocol_opic02_sub02->protocol_11       = $request->protocol_11_02[$i]; }
                        if(!empty($request->protocol_12_02[$i])){  $Protocol_opic02_sub02->protocol_12       = $request->protocol_12_02[$i]; }
                        $Protocol_opic02_sub02->protocol_13       = $request->protocol_13_02[$i];
                        $Protocol_opic02_sub02->save();
                    }

                }


            }
        }
    }

    public function editProtocol_opic03(Request $request)
    {
        $Protocol_opic03   =   Protocol_opic03::where('protocol_id', $request->id)
          ->update([
              'Name_th'                 => $request->Name_th,
              'Surname_th'              => $request->Surname_th,
              'Name_en'                 => $request->Name_en,
              'Surname_en'              => $request->Surname_en,
              'position_th'             => $request->position_th,
              'position_en'             => $request->position_en,
              'address_th'              => $request->address_th,
              'address_en'              => $request->address_en,
              'Tel'                     => $request->Tel,
              'Fax'                     => $request->Fax,
              'email'                   => $request->email
        ]);
    }

    public function editProtocol_opic04(Request $request)
    {
        $Protocol_opic04   =   Protocol_opic04::where('protocol_id', $request->id)
          ->update([
              'topic4_1'                 => $request->topic4_1,
              'topic4_1_n1'              => $request->topic4_1_n1,
              'topic4_1_n2'                 => $request->topic4_1_n2,
              'topic4_1_1'              => $request->topic4_1_1,
              'topic4_1_1n1'             => $request->topic4_1_1n1,
              'topic4_1_1n2'             => $request->topic4_1_1n2,
              'topic4_1_1n3'              => $request->topic4_1_1n3,
              'topic4_1_1n4'              => $request->topic4_1_1n4,
              'topic4_1_1n5'                     => $request->topic4_1_1n5,
              'topic4_1_1n6'                     => $request->topic4_1_1n6,
              'topic4_1_1n7'                   => $request->topic4_1_1n7,
              'topic4_1_1n8'                   => $request->topic4_1_1n8,
              'topic4_1_1n9'                   => $request->topic4_1_1n9,
              'topic4_1_1n10'                   => $request->topic4_1_1n10,
              'topic4_1_1n11'                   => $request->topic4_1_1n11,
              'topic4_1_2'                   => $request->topic4_1_2,
              'topic4_2'                    => $request->topic4_2,
              'topic4_2n1'                   => $request->topic4_2n1,
              'topic4_2n2'                   => $request->topic4_2n2,
              'topic4_2n3'                   => $request->topic4_2n3,
              'topic4_2n4'                   => $request->topic4_2n4,
              'topic4_2n5'                   => $request->topic4_2n5,
              'topic4_2n6'                   => $request->topic4_2n6,
              'topic4_2n7'                   => $request->topic4_2n7,
              'topic4_2n8'                   => $request->topic4_2n8,
              'topic4_2n9'                   => $request->topic4_2n9,
              'topic4_2n10'                   => $request->topic4_2n10,
              'topic4_3'                   => $request->topic4_3,
              'topic4_3n1'                   => $request->topic4_3n1,
              'topic4_3n2'                   => $request->topic4_3n2,
              'topic4_3n3'                   => $request->topic4_3n3,
              'topic4_3n4'                   => $request->topic4_3n4,
              'topic4_3n5'                   => $request->topic4_3n5,
              'topic4_3n6'                   => $request->topic4_3n6,
              'topic4_4'                   => $request->topic4_4,
              'topic4_4n1'                   => $request->topic4_4n1,
              'topic4_5'                   => $request->topic4_5,
              'topic4_5n1'                   => $request->topic4_5n1
        ]);
    }

    public function editProtocol_opic05(Request $request)
    {
        $Protocol_opic05    =   Protocol_opic05::where('protocol_id', $request->id)->delete();
        $sum = count($request->FundingSource);
        if ($sum != 0) {
            for ($i = 0; $i < $sum; $i++) {

                $Protocol_opic05    = new Protocol_opic05;
                $Protocol_opic05->protocol_id   = $request->id;
                $Protocol_opic05->FundingSource = $request->FundingSource[$i];
                $Protocol_opic05->FundingPeriod = $request->FundingPeriod[$i];
                $Protocol_opic05->Budget        = $request->Budget[$i];
                $Protocol_opic05->save();
            }
        }
    }

    public function editProtocol_opic06(Request $request)
    {
        $Protocol_opic06    =   Protocol_opic06::where('protocol_id', $request->id)->delete();

        $Protocol_opic06    = new Protocol_opic06;
        $Protocol_opic06->protocol_id   = $request->id;
        $Protocol_opic06->Executive     = $request->Executive;
        $Protocol_opic06->save();
    }
    
    public function editProtocol_opic07(Request $request)
    {
        $Protocol_opic07    =   Protocol_opic07::where('protocol_id', $request->id)->delete();
        
        $Protocol_opic07 = new Protocol_opic07;
        $Protocol_opic07->protocol_id = $request->id;
        $Protocol_opic07->Background = $request->Background;
        $Protocol_opic07->Literature = $request->Literature;
        $Protocol_opic07->Lastdate = $request->Lastdate;
        $Protocol_opic07->Period_start = $request->Period_start;
        $Protocol_opic07->Period_end = $request->Period_end;
        $Protocol_opic07->Keywords = $request->Keywords;
        $Protocol_opic07->Results = $request->Results;
        $Protocol_opic07->reference = $request->reference;
        $Protocol_opic07->save();
    }

    public function editProtocol_opic08(Request $request)
    {
        $Protocol_opic08    =   Protocol_opic08::where('protocol_id', $request->id)->delete();

        $sum = count($request->Objective);
        if ($sum != 0) {
            for ($i = 0; $i < $sum; $i++) {

                $Protocol_opic08    = new Protocol_opic08;
                $Protocol_opic08->protocol_id   = $request->id;
                $Protocol_opic08->Objective = $request->Objective[$i];
                $Protocol_opic08->save();
            }
        }

    }
    public function editProtocol_opic09(Request $request)
    {
        $Protocol_opic09    =   Protocol_opic09::where('protocol_id', $request->id)->delete();

        $Protocol_opic09    = new Protocol_opic09;
        $Protocol_opic09->protocol_id   = $request->id;
        $Protocol_opic09->Replacement01 = $request->Replacement01;
        $Protocol_opic09->Replacement02 = $request->Replacement02;
        $Protocol_opic09->Replacement03 = $request->Replacement03;
        $Protocol_opic09->save();
    }

    public function editProtocol_opic10(Request $request)
    {
        $protocol_opic10    =   protocol_opic10::where('protocol_id', $request->id)->delete();

        $protocol_opic10    = new protocol_opic10;
        $protocol_opic10->protocol_id   = $request->id;
        $protocol_opic10->anticipated01 = $request->anticipated01;
        $protocol_opic10->anticipated02 = $request->anticipated02;
        $protocol_opic10->save();
    }

    public function editProtocol_opic11(Request $request)
    {
        $protocol_opic11        =   protocol_opic11::where('protocol_id', $request->id)->delete();
        $Protocol_opic11_sub    =   Protocol_opic11_sub::where('protocol_id', $request->id)->delete();

        $protocol_opic11    = new protocol_opic11;
        $protocol_opic11->protocol_id   = $request->id;
        $protocol_opic11->Period = $request->Period;
        $protocol_opic11->AnimalModel = $request->AnimalModel;
        $protocol_opic11->animalsRequired = $request->animalsRequired;
        $protocol_opic11->caseWildlife = $request->caseWildlife;
        $protocol_opic11->save();

        $sum = count($request->Common_name);
        if ($sum != 0) {
            for ($i = 0; $i < $sum; $i++) {

                $Protocol_opic11_sub    = new Protocol_opic11_sub;
                $Protocol_opic11_sub->protocol_id   = $request->id;
                $Protocol_opic11_sub->Common_name   = $request->Common_name[$i];
                $Protocol_opic11_sub->Genus_Species = $request->Genus_Species[$i];
                $Protocol_opic11_sub->Strain_Stock  = $request->Strain_Stock[$i];
                $Protocol_opic11_sub->Age           = $request->Age[$i];
                $Protocol_opic11_sub->Weight        = $request->Weight[$i];
                $Protocol_opic11_sub->Sex           = $request->Sex[$i];
                $Protocol_opic11_sub->Number        = $request->Number[$i];
                $Protocol_opic11_sub->status        = "Y";
                $Protocol_opic11_sub->save();
            }
        }
    }

    public function editProtocol_opic12(Request $request)
    {
        $protocol_opic12        =   protocol_opic12::where('protocol_id', $request->id)->delete();
        
        $protocol_opic12    = new Protocol_opic12;
        $protocol_opic12->protocol_id   = $request->id;
        if(!empty($request->ptc12_01)){     $protocol_opic12->ptc12_01 = $request->ptc12_01; }
        if(!empty($request->ptc12_01_sub)){ $protocol_opic12->ptc12_01_sub = $request->ptc12_01_sub; }
        if(!empty($request->ptc12_02)){     $protocol_opic12->ptc12_02 = $request->ptc12_02; }
        if(!empty($request->ptc12_02_sub)){ $protocol_opic12->ptc12_02_sub = $request->ptc12_02_sub; }
        if(!empty($request->ptc12_03)){     $protocol_opic12->ptc12_03 = $request->ptc12_03; }
        if(!empty($request->ptc12_03_sub_01)){ $protocol_opic12->ptc12_03_sub_01 = $request->ptc12_03_sub_01; }
        if(!empty($request->ptc12_03_sub_02)){ $protocol_opic12->ptc12_03_sub_02 = $request->ptc12_03_sub_02;}
        if(!empty($request->ptc12_03_sub_03)){ $protocol_opic12->ptc12_03_sub_03 = $request->ptc12_03_sub_03;}
        if(!empty($request->ptc12_03_sub_04)){ $protocol_opic12->ptc12_03_sub_04 = $request->ptc12_03_sub_04;}
        if(!empty($request->ptc12_04)){     $protocol_opic12->ptc12_04 = $request->ptc12_04;}
        if(!empty($request->ptc12_03_sub)){ $protocol_opic12->ptc12_03_sub = $request->ptc12_03_sub; }
        if(!empty($request->ptc12_05_01)){  $protocol_opic12->ptc12_05_01 = $request->ptc12_05_01;}
        if(!empty($request->ptc12_05_02)){  $protocol_opic12->ptc12_05_02 = $request->ptc12_05_02;}
        if(!empty($request->ptc12_05_03)){  $protocol_opic12->ptc12_05_03 = $request->ptc12_05_03;}
        if(!empty($request->ptc12_05_04)){  $protocol_opic12->ptc12_05_04 = $request->ptc12_05_04;}
        if(!empty($request->ptc12_05_05)){  $protocol_opic12->ptc12_05_05 = $request->ptc12_05_05;}
        if(!empty($request->ptc12_05_06)){  $protocol_opic12->ptc12_05_06 = $request->ptc12_05_06;}
        if(!empty($request->ptc12_05_06_sub)){ $protocol_opic12->ptc12_05_06_sub = $request->ptc12_05_06_sub;}
        if(!empty($request->ptc12_06_01)){  $protocol_opic12->ptc12_06_01 = $request->ptc12_06_01;}
        if(!empty($request->ptc12_06_02)){  $protocol_opic12->ptc12_06_02 = $request->ptc12_06_02;}
        if(!empty($request->ptc12_06_03)){  $protocol_opic12->ptc12_06_03 = $request->ptc12_06_03;}
        if(!empty($request->ptc12_06_03_sub)){ $protocol_opic12->ptc12_06_03_sub = $request->ptc12_06_03_sub;}
        $protocol_opic12->save();
    }

    public function editProtocol_opic13(Request $request)
    {
        $protocol_opic13        =   protocol_opic13::where('protocol_id', $request->id)->delete();
        
        $protocol_opic13    = new Protocol_opic13;
        $protocol_opic13->protocol_id   = $request->id;
        if(!empty($request->ptc13_01)){     $protocol_opic13->ptc13_01      = $request->ptc13_01; }
        if(!empty($request->ptc13_02)){     $protocol_opic13->ptc13_02      = $request->ptc13_02; }
        if(!empty($request->ptc13_03)){     $protocol_opic13->ptc13_03      = $request->ptc13_03; }
        if(!empty($request->ptc13_04)){     $protocol_opic13->ptc13_04      = $request->ptc13_04; }
        if(!empty($request->ptc13_05)){     $protocol_opic13->ptc13_05      = $request->ptc13_05; }
        if(!empty($request->ptc13_06)){     $protocol_opic13->ptc13_06      = $request->ptc13_06; }
        if(!empty($request->ptc13_07)){     $protocol_opic13->ptc13_07      = $request->ptc13_07; }
        if(!empty($request->ptc13_08)){     $protocol_opic13->ptc13_08      = $request->ptc13_08; }
        if(!empty($request->ptc13_09)){     $protocol_opic13->ptc13_09      = $request->ptc13_09; }
        if(!empty($request->ptc13_10)){     $protocol_opic13->ptc13_10      = $request->ptc13_10; }
        if(!empty($request->ptc13_11)){     $protocol_opic13->ptc13_11      = $request->ptc13_11; }
        if(!empty($request->ptc13_12)){     $protocol_opic13->ptc13_12      = $request->ptc13_12; }
        if(!empty($request->ptc13_12_sub)){ $protocol_opic13->ptc13_12_sub  = $request->ptc13_12_sub; }
        if(!empty($request->ptc13_13)){     $protocol_opic13->ptc13_13      = $request->ptc13_13; }
        if(!empty($request->ptc13_13_sub)){ $protocol_opic13->ptc13_13_sub  = $request->ptc13_13_sub; }
        if(!empty($request->ptc13_14)){     $protocol_opic13->ptc13_14      = $request->ptc13_14; }
        if(!empty($request->ptc13_15)){     $protocol_opic13->ptc13_15      = $request->ptc13_15; }
        if(!empty($request->ptc13_16)){     $protocol_opic13->ptc13_16      = $request->ptc13_16; }
        if(!empty($request->ptc13_17)){     $protocol_opic13->ptc13_17      = $request->ptc13_17; }
        if(!empty($request->ptc13_18)){     $protocol_opic13->ptc13_18      = $request->ptc13_18; }
        if(!empty($request->ptc13_19)){     $protocol_opic13->ptc13_19      = $request->ptc13_19; }
        if(!empty($request->ptc13_19_sub)){ $protocol_opic13->ptc13_19_sub  = $request->ptc13_19_sub; }
        if(!empty($request->ptc13_20)){     $protocol_opic13->ptc13_20      = $request->ptc13_20; }
        if(!empty($request->ptc13_20_sub)){ $protocol_opic13->ptc13_20_sub  = $request->ptc13_20_sub; }
        if(!empty($request->ptc13_21)){     $protocol_opic13->ptc13_21      = $request->ptc13_21; }
        $protocol_opic13->save();
    }

    public function editProtocol_opic14(Request $request)
    {
        $protocol_opic14        =   protocol_opic14::where('protocol_id', $request->id)->delete();
        
        $Protocol_opic14    = new Protocol_opic14;
        $Protocol_opic14->protocol_id   = $request->id;
        if(!empty($request->ptc14_01)){         $Protocol_opic14->ptc14_01      = $request->ptc14_01; }
        if(!empty($request->ptc14_01_sub)){     $Protocol_opic14->ptc14_01_sub  = $request->ptc14_01_sub; }
        if(!empty($request->ptc14_02)){         $Protocol_opic14->ptc14_02      = $request->ptc14_02; }
        if(!empty($request->ptc14_02_sub)){     $Protocol_opic14->ptc14_02_sub  = $request->ptc14_02_sub; }
        if(!empty($request->ptc14_03)){         $Protocol_opic14->ptc14_03      = $request->ptc14_03; }
        if(!empty($request->ptc14_04)){         $Protocol_opic14->ptc14_04      = $request->ptc14_04; }
        if(!empty($request->ptc14_05)){         $Protocol_opic14->ptc14_05      = $request->ptc14_05; }
        if(!empty($request->ptc14_05_sub)){     $Protocol_opic14->ptc14_05_sub  = $request->ptc14_05_sub; }
        $Protocol_opic14->save();
    }

    public function editProtocol_opic15(Request $request)
    {
        $protocol_opic15        =   protocol_opic15::where('protocol_id', $request->id)->delete();
        
        $Protocol_opic15    = new Protocol_opic15;
        $Protocol_opic15->protocol_id   = $request->id;
        if(!empty($request->ptc15_01)){         $Protocol_opic15->ptc15_01      = $request->ptc15_01; }
        if(!empty($request->ptc15_02)){         $Protocol_opic15->ptc15_02      = $request->ptc15_02; }
        if(!empty($request->ptc15_02_sub)){     $Protocol_opic15->ptc15_02_sub  = $request->ptc15_02_sub; }
        if(!empty($request->ptc15_03)){         $Protocol_opic15->ptc15_03      = $request->ptc15_03; }
        if(!empty($request->ptc15_04)){         $Protocol_opic15->ptc15_04      = $request->ptc15_04; }
        if(!empty($request->ptc15_04_sub)){     $Protocol_opic15->ptc15_04_sub  = $request->ptc15_04_sub; }
        $Protocol_opic15->save();
    }

    public function editProtocol_opic16(Request $request)
    {
        $protocol_opic16        =   protocol_opic16::where('protocol_id', $request->id)->delete();
        
        $Protocol_opic16    = new Protocol_opic16;
        $Protocol_opic16->protocol_id   = $request->id;
        if(!empty($request->ptc16_01)){             $Protocol_opic16->ptc16_01      = $request->ptc16_01; }
        if(!empty($request->ptc16_02)){             $Protocol_opic16->ptc16_02      = $request->ptc16_02; }
        if(!empty($request->ptc16_02_sub)){         $Protocol_opic16->ptc16_02_sub      = $request->ptc16_02_sub; }
        if(!empty($request->ptc16_03)){             $Protocol_opic16->ptc16_03      = $request->ptc16_03; }
        if(!empty($request->ptc16_04)){             $Protocol_opic16->ptc16_04      = $request->ptc16_04; }
        if(!empty($request->ptc16_05)){             $Protocol_opic16->ptc16_05      = $request->ptc16_05; }
        if(!empty($request->ptc16_06)){             $Protocol_opic16->ptc16_06      = $request->ptc16_06; }
        if(!empty($request->ptc16_07)){             $Protocol_opic16->ptc16_07      = $request->ptc16_07; }
        if(!empty($request->ptc16_07_sub)){         $Protocol_opic16->ptc16_07_sub      = $request->ptc16_07_sub; }
        if(!empty($request->ptc16_08)){             $Protocol_opic16->ptc16_08      = $request->ptc16_08; }
        if(!empty($request->ptc16_08_sub)){         $Protocol_opic16->ptc16_08_sub      = $request->ptc16_08_sub; }
        if(!empty($request->ptc16_09)){             $Protocol_opic16->ptc16_09      = $request->ptc16_09; }
        if(!empty($request->ptc16_09_sub)){         $Protocol_opic16->ptc16_09_sub      = $request->ptc16_09_sub; }
        if(!empty($request->ptc16_10)){             $Protocol_opic16->ptc16_10      = $request->ptc16_10; }
        if(!empty($request->ptc16_11)){             $Protocol_opic16->ptc16_11      = $request->ptc16_11; }
        if(!empty($request->ptc16_12)){             $Protocol_opic16->ptc16_12      = $request->ptc16_12; }
        if(!empty($request->ptc16_13)){             $Protocol_opic16->ptc16_13      = $request->ptc16_13; }
        if(!empty($request->ptc16_14)){             $Protocol_opic16->ptc16_14      = $request->ptc16_14; }
        if(!empty($request->ptc16_15)){             $Protocol_opic16->ptc16_15      = $request->ptc16_15; }
        if(!empty($request->ptc16_16)){             $Protocol_opic16->ptc16_16      = $request->ptc16_16; }
        if(!empty($request->ptc16_17)){             $Protocol_opic16->ptc16_17      = $request->ptc16_17; }
        if(!empty($request->ptc16_18)){             $Protocol_opic16->ptc16_18      = $request->ptc16_18; }
        if(!empty($request->ptc16_19)){             $Protocol_opic16->ptc16_19      = $request->ptc16_19; }
        if(!empty($request->ptc16_19_sub)){         $Protocol_opic16->ptc16_19_sub      = $request->ptc16_19_sub; }
        if(!empty($request->ptc16_20)){             $Protocol_opic16->ptc16_20      = $request->ptc16_20; }
        if(!empty($request->ptc16_21)){             $Protocol_opic16->ptc16_21      = $request->ptc16_21; }
        if(!empty($request->ptc16_22)){             $Protocol_opic16->ptc16_22      = $request->ptc16_22; }
        if(!empty($request->ptc16_23)){             $Protocol_opic16->ptc16_23      = $request->ptc16_23; }
        if(!empty($request->ptc16_24)){             $Protocol_opic16->ptc16_24      = $request->ptc16_24; }
        if(!empty($request->ptc16_25)){             $Protocol_opic16->ptc16_25      = $request->ptc16_25; }
        if(!empty($request->ptc16_26)){             $Protocol_opic16->ptc16_26      = $request->ptc16_26; }
        if(!empty($request->ptc16_26_sub)){         $Protocol_opic16->ptc16_26_sub      = $request->ptc16_26_sub; }
        if(!empty($request->ptc16_27)){             $Protocol_opic16->ptc16_27      = $request->ptc16_27; }
        if(!empty($request->ptc16_28)){             $Protocol_opic16->ptc16_28      = $request->ptc16_28; }
        if(!empty($request->ptc16_28_sub)){         $Protocol_opic16->ptc16_28_sub      = $request->ptc16_28_sub; }
        if(!empty($request->ptc16_29)){             $Protocol_opic16->ptc16_29      = $request->ptc16_29; }
        if(!empty($request->ptc16_30)){             $Protocol_opic16->ptc16_30      = $request->ptc16_30; }
        if(!empty($request->ptc16_30_sub)){         $Protocol_opic16->ptc16_30_sub      = $request->ptc16_30_sub; }
        if(!empty($request->ptc16_31)){             $Protocol_opic16->ptc16_31      = $request->ptc16_31; }
        if(!empty($request->ptc16_32)){             $Protocol_opic16->ptc16_32      = $request->ptc16_32; }
        if(!empty($request->ptc16_32_sub)){         $Protocol_opic16->ptc16_32_sub      = $request->ptc16_32_sub; }
        if(!empty($request->ptc16_33)){             $Protocol_opic16->ptc16_33      = $request->ptc16_33; }
        if(!empty($request->ptc16_33_sub)){         $Protocol_opic16->ptc16_33_sub      = $request->ptc16_33_sub; }
        if(!empty($request->ptc16_34)){             $Protocol_opic16->ptc16_34      = $request->ptc16_34; }
        if(!empty($request->ptc16_35)){             $Protocol_opic16->ptc16_35      = $request->ptc16_35; }
        if(!empty($request->ptc16_35_sub)){         $Protocol_opic16->ptc16_35_sub      = $request->ptc16_35_sub; }
        if(!empty($request->ptc16_36)){             $Protocol_opic16->ptc16_36      = $request->ptc16_36; }
        if(!empty($request->ptc16_37)){             $Protocol_opic16->ptc16_37      = $request->ptc16_37; }
        if(!empty($request->ptc16_37_sub)){         $Protocol_opic16->ptc16_37_sub      = $request->ptc16_37_sub; }
        if(!empty($request->ptc16_38_)){            $Protocol_opic16->ptc16_38_      = $request->ptc16_38_; }
        if(!empty($request->ptc16_38)){             $Protocol_opic16->ptc16_38      = $request->ptc16_38; }
        if(!empty($request->ptc16_39)){             $Protocol_opic16->ptc16_39      = $request->ptc16_39; }
        if(!empty($request->ptc16_39_sub)){         $Protocol_opic16->ptc16_39_sub      = $request->ptc16_39_sub; }
        $Protocol_opic16->save();
    }

    public function editProtocol_opic17(Request $request)
    {
        $protocol_opic17        =   protocol_opic17::where('protocol_id', $request->id)->delete();
        
        $Protocol_opic17                = new Protocol_opic17;
        $Protocol_opic17->protocol_id   = $request->id;
        $Protocol_opic17->ptc17_01      = $request->ptc17_01; 
        $Protocol_opic17->ptc17_02      = $request->ptc17_02; 
        $Protocol_opic17->save();
    }

    public function editProtocol_opic18(Request $request)
    {
        $protocol_opic18        =   protocol_opic18::where('protocol_id', $request->id)->delete();
        $Protocol_opic18_sub01        =   Protocol_opic18_sub01::where('protocol_id', $request->id)->delete();
        $Protocol_opic18_sub02        =   Protocol_opic18_sub02::where('protocol_id', $request->id)->delete();
        $Protocol_opic18_sub03        =   Protocol_opic18_sub03::where('protocol_id', $request->id)->delete();
        $Protocol_opic18_sub04        =   Protocol_opic18_sub04::where('protocol_id', $request->id)->delete();
        $Protocol_opic18_sub05        =   Protocol_opic18_sub05::where('protocol_id', $request->id)->delete();
        $Protocol_opic18_sub06        =   Protocol_opic18_sub06::where('protocol_id', $request->id)->delete();
        
        
        $Protocol_opic18                = new Protocol_opic18;
        $Protocol_opic18->protocol_id   = $request->id;
        $Protocol_opic18->ptc18_01      = $request->ptc18_01; 
        $Protocol_opic18->ptc18_02      = $request->ptc18_02;
        $Protocol_opic18->ptc18_03      = $request->ptc18_03;
        $Protocol_opic18->ptc18_04      = $request->ptc18_04;
        $Protocol_opic18->ptc18_05      = $request->ptc18_05;
        $Protocol_opic18->ptc18_06      = $request->ptc18_06;
        $Protocol_opic18->ptc18_07      = $request->ptc18_07;
        $Protocol_opic18->ptc18_08      = $request->ptc18_08;
        $Protocol_opic18->ptc18_09      = $request->ptc18_09;
        $Protocol_opic18->ptc18_10      = $request->ptc18_10;
        $Protocol_opic18->ptc18_11      = $request->ptc18_11;
        $Protocol_opic18->ptc18_12      = $request->ptc18_12;
        $Protocol_opic18->ptc18_13      = $request->ptc18_13;
        $Protocol_opic18->ptc18_14      = $request->ptc18_14;
        $Protocol_opic18->ptc18_15      = $request->ptc18_15;
        $Protocol_opic18->ptc18_16      = $request->ptc18_16;
        $Protocol_opic18->ptc18_17      = $request->ptc18_17;
        $Protocol_opic18->ptc18_18      = $request->ptc18_18;
        $Protocol_opic18->ptc18_19      = $request->ptc18_19;
        $Protocol_opic18->ptc18_19_sub      = $request->ptc18_19_sub;
        $Protocol_opic18->ptc18_20      = $request->ptc18_20;
        $Protocol_opic18->ptc18_21      = $request->ptc18_21;
        $Protocol_opic18->ptc18_22      = $request->ptc18_22;
        $Protocol_opic18->ptc18_23      = $request->ptc18_23;
        $Protocol_opic18->ptc18_24      = $request->ptc18_24;
        $Protocol_opic18->ptc18_24_1      = $request->ptc18_24_1;
        $Protocol_opic18->ptc18_25      = $request->ptc18_25;
        $Protocol_opic18->ptc18_26      = $request->ptc18_26;
        $Protocol_opic18->ptc18_27      = $request->ptc18_27;
        $Protocol_opic18->save();

        $sum = count($request->ptc18_01_l1);
        if ($sum != 0) {
            for ($i = 0; $i < $sum; $i++) {

                $Protocol_opic18_sub01    = new Protocol_opic18_sub01;
                $Protocol_opic18_sub01->protocol_id   = $request->id;
                $Protocol_opic18_sub01->ptc18_01   = $request->ptc18_01_l1[$i];
                $Protocol_opic18_sub01->ptc18_02 = $request->ptc18_02_l1[$i];
                $Protocol_opic18_sub01->ptc18_03  = $request->ptc18_03_l1[$i];
                $Protocol_opic18_sub01->ptc18_04           = $request->ptc18_04_l1[$i];
                $Protocol_opic18_sub01->save();
            }
        }
        $sum = count($request->ptc18_01_l2);
        if ($sum != 0) {
            for ($i = 0; $i < $sum; $i++) {

                $Protocol_opic18_sub02    = new Protocol_opic18_sub02;
                $Protocol_opic18_sub02->protocol_id     = $request->id;
                $Protocol_opic18_sub02->ptc18_01        = $request->ptc18_01_l2[$i];
                $Protocol_opic18_sub02->ptc18_02        = $request->ptc18_02_l2[$i];
                $Protocol_opic18_sub02->ptc18_03        = $request->ptc18_03_l2[$i];
                $Protocol_opic18_sub02->ptc18_04        = $request->ptc18_04_l2[$i];
                $Protocol_opic18_sub02->ptc18_05        = $request->ptc18_05_l2[$i];
                $Protocol_opic18_sub02->save();
            }
        }
        $sum = count($request->ptc18_01_l3);
        if ($sum != 0) {
            for ($i = 0; $i < $sum; $i++) {

                $Protocol_opic18_sub03    = new Protocol_opic18_sub03;
                $Protocol_opic18_sub03->protocol_id     = $request->id;
                $Protocol_opic18_sub03->ptc18_01        = $request->ptc18_01_l3[$i];
                $Protocol_opic18_sub03->ptc18_02        = $request->ptc18_02_l3[$i];
                $Protocol_opic18_sub03->ptc18_03        = $request->ptc18_03_l3[$i];
                $Protocol_opic18_sub03->ptc18_04        = $request->ptc18_04_l3[$i];
                $Protocol_opic18_sub03->ptc18_05        = $request->ptc18_05_l3[$i];
                $Protocol_opic18_sub03->ptc18_06        = $request->ptc18_06_l3[$i];
                $Protocol_opic18_sub03->ptc18_07        = $request->ptc18_07_l3[$i];
                $Protocol_opic18_sub03->save();
            }
        }

        $sum = count($request->ptc18_01_l4);
        if ($sum != 0) {
            for ($i = 0; $i < $sum; $i++) {

                $Protocol_opic18_sub04    = new Protocol_opic18_sub04;
                $Protocol_opic18_sub04->protocol_id     = $request->id;
                $Protocol_opic18_sub04->ptc18_01        = $request->ptc18_01_l4[$i];
                $Protocol_opic18_sub04->ptc18_02        = $request->ptc18_02_l4[$i];
                $Protocol_opic18_sub04->ptc18_03        = $request->ptc18_03_l4[$i];
                $Protocol_opic18_sub04->ptc18_04        = $request->ptc18_04_l4[$i];
                $Protocol_opic18_sub04->ptc18_05        = $request->ptc18_05_l4[$i];
                $Protocol_opic18_sub04->ptc18_06        = $request->ptc18_06_l4[$i];
                $Protocol_opic18_sub04->ptc18_07        = $request->ptc18_07_l4[$i];
                $Protocol_opic18_sub04->ptc18_08        = $request->ptc18_08_l4[$i];
                $Protocol_opic18_sub04->ptc18_09        = $request->ptc18_09_l4[$i];
                $Protocol_opic18_sub04->save();
            }
        }

        $sum = count($request->ptc18_01_l5);
        if ($sum != 0) {
            for ($i = 0; $i < $sum; $i++) {

                $Protocol_opic18_sub05    = new Protocol_opic18_sub05;
                $Protocol_opic18_sub05->protocol_id     = $request->id;
                $Protocol_opic18_sub05->ptc18_01        = $request->ptc18_01_l5[$i];
                $Protocol_opic18_sub05->ptc18_02        = $request->ptc18_02_l5[$i];
                $Protocol_opic18_sub05->ptc18_03        = $request->ptc18_03_l5[$i];
                $Protocol_opic18_sub05->ptc18_04        = $request->ptc18_04_l5[$i];
                $Protocol_opic18_sub05->save();
            }
        }

        $sum = count($request->ptc18_01_l6);
        if ($sum != 0) {
            for ($i = 0; $i < $sum; $i++) {

                $Protocol_opic18_sub06    = new Protocol_opic18_sub06;
                $Protocol_opic18_sub06->protocol_id     = $request->id;
                $Protocol_opic18_sub06->ptc18_01        = $request->ptc18_01_l6[$i];
                $Protocol_opic18_sub06->ptc18_02        = $request->ptc18_02_l6[$i];
                $Protocol_opic18_sub06->ptc18_03        = $request->ptc18_03_l6[$i];
                $Protocol_opic18_sub06->ptc18_04        = $request->ptc18_04_l6[$i];
                $Protocol_opic18_sub06->save();
            }
        }
    }

    public function editProtocol_opic19(Request $request)
    {
        $protocol_opic19        =   protocol_opic19::where('protocol_id', $request->id)->delete();
        
        $Protocol_opic19                = new Protocol_opic19;
        $Protocol_opic19->protocol_id   = $request->id;
        if(!empty($request->ptc19_01)){ $Protocol_opic19->ptc19_01      = $request->ptc19_01; }
        if(!empty($request->ptc19_02)){ $Protocol_opic19->ptc19_02      = $request->ptc19_02; }
        if(!empty($request->ptc19_03)){ $Protocol_opic19->ptc19_03      = $request->ptc19_03; }
        if(!empty($request->ptc19_04)){ $Protocol_opic19->ptc19_04      = $request->ptc19_04; }
        if(!empty($request->ptc19_05)){ $Protocol_opic19->ptc19_05      = $request->ptc19_05; }
        if(!empty($request->ptc19_06)){ $Protocol_opic19->ptc19_06      = $request->ptc19_06; }
        if(!empty($request->ptc19_07)){ $Protocol_opic19->ptc19_07      = $request->ptc19_07; }
        $Protocol_opic19->ptc19_08      = $request->ptc19_08; 
        $Protocol_opic19->save();
    }

    public function editProtocol_opic20(Request $request)
    {
        $protocol_opic20        =   protocol_opic20::where('protocol_id', $request->id)->delete();
        
        $Protocol_opic20                = new Protocol_opic20;
        $Protocol_opic20->protocol_id   = $request->id;
        $Protocol_opic20->ptc20_01      = $request->ptc20_01;
        $Protocol_opic20->ptc20_02      = $request->ptc20_02; 
        $Protocol_opic20->save();
    }

    public function editProtocol_opic21(Request $request)
    {
        $protocol_opic21        =   protocol_opic21::where('protocol_id', $request->id)->delete();
        
        $Protocol_opic21                = new Protocol_opic21;
        $Protocol_opic21->protocol_id   = $request->id;
        $Protocol_opic21->ptc21_01      = $request->ptc21_01;
        $Protocol_opic21->ptc21_02      = $request->ptc21_02;
        $Protocol_opic21->ptc21_03      = $request->ptc21_03;
        $Protocol_opic21->save();
    }

    public function editProtocol_opic22(Request $request)
    {
        $protocol_opic22        =   protocol_opic22::where('protocol_id', $request->id)->delete();
        
        $Protocol_opic22                = new Protocol_opic22;
        $Protocol_opic22->protocol_id   = $request->id;
        $Protocol_opic22->ptc22_01      = $request->ptc22_01;
        $Protocol_opic22->ptc22_02      = $request->ptc22_02;
        $Protocol_opic22->ptc22_03      = $request->ptc22_03;
        $Protocol_opic22->ptc22_04      = $request->ptc22_04;
        $Protocol_opic22->ptc22_05      = $request->ptc22_05;
        $Protocol_opic22->ptc22_06      = $request->ptc22_06;
        $Protocol_opic22->save();
    }

    public function editProtocol_opic23(Request $request)
    {
        $Protocol_opic23        =   Protocol_opic23::where('protocol_id', $request->id)->delete();
        
        $Protocol_opic23                = new Protocol_opic23;
        $Protocol_opic23->protocol_id   = $request->id;
        $Protocol_opic23->ptc23_01      = $request->ptc23_01;
        $Protocol_opic23->ptc23_02      = $request->ptc23_02;
        $Protocol_opic23->ptc23_03      = $request->ptc23_03;
        $Protocol_opic23->ptc23_04      = $request->ptc23_04;
        $Protocol_opic23->save();
    }

    public function editProtocol_opic24(Request $request)
    {
        $Protocol_opic24        =   Protocol_opic24::where('protocol_id', $request->id)->delete();
        
        $Protocol_opic24                = new Protocol_opic24;
        $Protocol_opic24->protocol_id   = $request->id;
        $Protocol_opic24->ptc24_01      = $request->ptc24_01;
        $Protocol_opic24->ptc24_02      = $request->ptc24_02;
        $Protocol_opic24->ptc24_03      = $request->ptc24_03;
        $Protocol_opic24->ptc24_04      = $request->ptc24_04;
        $Protocol_opic24->ptc24_05      = $request->ptc24_05;
        $Protocol_opic24->save();
    }

    public function editProtocol_opic25(Request $request)
    {
        $Protocol_opic25        =   Protocol_opic25::where('protocol_id', $request->id)->delete();
        
        $Protocol_opic25                = new Protocol_opic25;
        $Protocol_opic25->protocol_id   = $request->id;
        $Protocol_opic25->ptc25_01      = $request->ptc25_01;
        $Protocol_opic25->ptc25_02      = $request->ptc25_02;
        $Protocol_opic25->ptc25_03      = $request->ptc25_03;
        $Protocol_opic25->save();
    }

    public function editProtocol_opic26(Request $request)
    {
        $Protocol_opic26        =   Protocol_opic26::where('protocol_id', $request->id)->delete();
        
        $Protocol_opic26                = new Protocol_opic26;
        $Protocol_opic26->protocol_id   = $request->id;
        $Protocol_opic26->ptc26_01      = $request->ptc26_01;
        $Protocol_opic26->ptc26_02      = $request->ptc26_02;
        $Protocol_opic26->save();
    }

    public function editProtocol_opic27(Request $request)
    {
        $Protocol_opic27        =   Protocol_opic27::where('protocol_id', $request->id)->delete();
        
        $Protocol_opic27                = new Protocol_opic27;
        $Protocol_opic27->protocol_id   = $request->id;
        $Protocol_opic27->ptc27_01      = $request->ptc27_01;
        $Protocol_opic27->ptc27_02      = $request->ptc27_02;
        $Protocol_opic27->save();
    }

    public function editProtocol_opic28(Request $request)
    {
        $Protocol_opic28        =   Protocol_opic28::where('protocol_id', $request->id)->delete();
        
        $Protocol_opic28                = new Protocol_opic28;
        $Protocol_opic28->protocol_id   = $request->id;
        $Protocol_opic28->ptc28_01      = $request->ptc28_01;
        $Protocol_opic28->ptc28_02      = $request->ptc28_02;
        $Protocol_opic28->ptc28_03      = $request->ptc28_03;
        $Protocol_opic28->save();
    }

    public function editProtocol_opic30(Request $request)
    {
        $Protocol_opic30        =   Protocol_opic30::where('protocol_id', $request->id)->delete();
        $Protocol_opic30_sub01        =   Protocol_opic30_sub01::where('protocol_id', $request->id)->delete();
        $protocol_opic30_sub02        =   protocol_opic30_sub02::where('protocol_id', $request->id)->delete();
        
        $Protocol_opic30                    = new Protocol_opic30;
        $Protocol_opic30->protocol_id       = $request->id;
        $Protocol_opic30->ptc30_01          = $request->ptc30_01;
        $Protocol_opic30->ptc30_01_sub      = $request->ptc30_01_sub;
        $Protocol_opic30->ptc30_02          = $request->ptc30_02;
        $Protocol_opic30->ptc30_02_sub      = $request->ptc30_02_sub;
        $Protocol_opic30->ptc30_03          = $request->ptc30_03;
        $Protocol_opic30->ptc30_03_sub      = $request->ptc30_03_sub;
        $Protocol_opic30->ptc30_04          = $request->ptc30_04;
        $Protocol_opic30->ptc30_04_sub      = $request->ptc30_04_sub;
        $Protocol_opic30->ptc30_05          = $request->ptc30_05;
        $Protocol_opic30->ptc30_05_sub      = $request->ptc30_05_sub;
        $Protocol_opic30->ptc30_06          = $request->ptc30_06;
        $Protocol_opic30->ptc30_06_sub      = $request->ptc30_06_sub;
        $Protocol_opic30->ptc30_07          = $request->ptc30_07;
        $Protocol_opic30->ptc30_07_sub      = $request->ptc30_07_sub;
        $Protocol_opic30->ptc30_08          = $request->ptc30_08;
        $Protocol_opic30->ptc30_08_sub      = $request->ptc30_08_sub;
        $Protocol_opic30->ptc30_09          = $request->ptc30_09;
        $Protocol_opic30->ptc30_09_sub      = $request->ptc30_09_sub;
        $Protocol_opic30->ptc30_10          = $request->ptc30_10;
        $Protocol_opic30->ptc30_10_sub      = $request->ptc30_10_sub;
        $Protocol_opic30->ptc30_11          = $request->ptc30_11;
        $Protocol_opic30->ptc30_11_sub      = $request->ptc30_11_sub;
        $Protocol_opic30->ptc30_12          = $request->ptc30_12;
        $Protocol_opic30->ptc30_12_sub      = $request->ptc30_12_sub;
        $Protocol_opic30->ptc30_13          = $request->ptc30_13;
        $Protocol_opic30->ptc30_13_sub      = $request->ptc30_13_sub;
        $Protocol_opic30->ptc30_14          = $request->ptc30_14;
        $Protocol_opic30->ptc30_14_sub      = $request->ptc30_14_sub;
        $Protocol_opic30->ptc30_15          = $request->ptc30_15;
        $Protocol_opic30->ptc30_15_sub      = $request->ptc30_15_sub;
        $Protocol_opic30->ptc30_16          = $request->ptc30_16;
        $Protocol_opic30->ptc30_16_sub      = $request->ptc30_16_sub;
        $Protocol_opic30->save();

        $sum = count($request->ptc30_name_01);
        if ($sum != 0) {
            for ($i = 0; $i < $sum; $i++) {
                $Protocol_opic30_sub01                  = new Protocol_opic30_sub01;
                $Protocol_opic30_sub01->protocol_id     = $request->id;
                $Protocol_opic30_sub01->ptc30_name_01   = $request->ptc30_name_01[$i];
                $Protocol_opic30_sub01->save();
            }
        }

        $sum = count($request->ptc30_name_02);
        if ($sum != 0) {
            for ($i = 0; $i < $sum; $i++) {
                $protocol_opic30_sub02                  = new protocol_opic30_sub02;
                $protocol_opic30_sub02->protocol_id     = $request->id;
                $protocol_opic30_sub02->ptc30_name_02   = $request->ptc30_name_02[$i];
                $protocol_opic30_sub02->save();
            }
        }
    }
    public function secretaryShow(Request $request)
    {
        $Protocol_secretary_opic = Protocol_secretary_opic::where('protocol_id',$request->id)
        ->where('protocol_number',$request->number)
        ->first();
        echo json_encode($Protocol_secretary_opic);
    }

}
