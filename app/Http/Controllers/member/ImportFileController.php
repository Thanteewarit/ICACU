<?php

namespace App\Http\Controllers\member;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Auth;
use Session;
use App\Model\Protocol_docsfile;
use File;

class ImportFileController extends Controller
{
    public function create(Request $request)
    {
        if(!empty($_FILES['files']["name"])){
            foreach($_FILES['files']['tmp_name'] as $key => $val)
            {
                $file_name  = $_FILES['files']["name"][$key];
                $file_tmp   = $_FILES['files']["tmp_name"][$key];
                $type       = $_FILES['files']["type"][$key];
                $type       = strrchr($file_name,".");

                $file_nameth   =date("YmdHis").$key."FileProtocol"."$type";
                copy($file_tmp, "file-upload/".$file_nameth);

                $Protocol_docsfile  =   new Protocol_docsfile;
                $Protocol_docsfile->file            =   $file_nameth;
                $Protocol_docsfile->protocol_id     =   $request->id;
                $Protocol_docsfile->status          =   "Y";
                $Protocol_docsfile->save();
            }
        }
    }

    public function createNo(Request $request)
    {
        if(!empty($_FILES['files']["name"])){
            foreach($_FILES['files']['tmp_name'] as $key => $val)
            {
                $file_name  = $_FILES['files']["name"][$key];
                $file_tmp   = $_FILES['files']["tmp_name"][$key];
                $type       = $_FILES['files']["type"][$key];
                $type       = strrchr($file_name,".");

                $file_nameth   =date("YmdHis").$key."FileProtocol"."$type";
                copy($file_tmp, "file-upload/".$file_nameth);

                $Protocol_docsfile  =   new Protocol_docsfile;
                $Protocol_docsfile->file            =   $file_nameth;
                $Protocol_docsfile->protocol_id     =   Session::get('protocol_id');
                $Protocol_docsfile->status          =   "Y";
                $Protocol_docsfile->save();
            }
        }
    }

    public function delectFile($id)
    {
        $docsfile = Protocol_docsfile::find($id);
        $Protocol_docsfile = Protocol_docsfile::destroy($id);
        $file_path = "file-upload/".$docsfile->file; 
        if(File::exists($file_path)) File::delete($file_path);
        return redirect()->back()->with('yes', 'ลบข้อมูลไฟล์เรียบร้อย');
    }

}
