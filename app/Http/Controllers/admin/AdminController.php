<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\Animal;
use App\Model\AnimalType;
use App\Model\Animals_type;
use App\Model\Status;
use App\Model\StatusUser;
use App\Model\Animal_common_name;
use App\Model\Animal_stock;
use App\Model\Affiliation_type;
use App\Model\Affiliation;


class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function animalcreate(Request $request)
    {
        $Animal = new Animal;
        $Animal->common_name = $request->common_name;
        $Animal->genus_and_species = $request->genus_and_species;
        $Animal->animal_type = $request->animal_type;
        $Animal->animal_status = "Y";
        $Animal->save();

        return redirect()->route('admin.animal')->with('yes', 'เพิ่มข้อมมูลเรียบร้อยเเล้ว');
    }
    public function addAnimalCommon(Request $request)
    {
        $Animal_common_name                     = new Animal_common_name;
        $Animal_common_name->animals_type       = $request->animals_type;
        $Animal_common_name->common_name_en     = $request->common_name_en;
        $Animal_common_name->common_name_th     = $request->common_name_th;
        $Animal_common_name->scientific_name    = $request->scientific_name;
        $Animal_common_name->genetic_diversty    = $request->genetic_diversty;
        
        $Animal_common_name->status             = "Y";
        $Animal_common_name->save();

        return redirect()->route('admin.animalcommon')->with('yes', 'เพิ่มข้อมมูลเรียบร้อยเเล้ว');
    }
    
    public function addAnimalStock(Request $request)
    {
        $Animal_stock                           = new Animal_stock;
        $Animal_stock->animals_type_id          = $request->animals_type_id;
        $Animal_stock->animal_common_name_id    = $request->animal_common_name_id;
        $Animal_stock->name                     = $request->name;
        $Animal_stock->status                   = "Y";
        $Animal_stock->save();

        return redirect()->route('admin.animalStock')->with('yes', 'เพิ่มข้อมมูลเรียบร้อยเเล้ว');
    }
    public function editAnimalStock(Request $request)
    {
        $Animal_stock                           = Animal_stock::find($request->id);
        $Animal_stock->name                     = $request->name;
        $Animal_stock->status                   = $request->status;
        $Animal_stock->save();

        return redirect()->route('admin.animalStock')->with('yes', 'เพิ่มข้อมมูลเรียบร้อยเเล้ว');
    }
    public function affiliationTypeShow()
    {
        $Affiliation_type   =   Affiliation_type::all();
        $Status   =   Status::all();
        return view('admin.affiliation-type', compact('Affiliation_type','Status'));

    }
    public function affiliationTypeAdd(Request $request)
    {
        $Affiliation_type                       = new Affiliation_type;
        $Affiliation_type->name                 = $request->name;
        $Affiliation_type->save();

        return redirect()->route('admin.affiliationType')->with('yes', 'เพิ่มข้อมมูลเรียบร้อยเเล้ว');
        
    }

    public function affiliationTypeGet(Request $request)
    {
        $Affiliation_type = Affiliation_type::find($request->id);
        $data['Affiliation_type'] = $Affiliation_type;
        echo json_encode($data);
        
    }
    public function affiliationTypeEdit(Request $request)
    {
        $Affiliation_type                       = Affiliation_type::find($request->id);
        $Affiliation_type->name                 = $request->name;
        $Affiliation_type->status               = $request->status;
        $Affiliation_type->save();

        return redirect()->route('admin.affiliationType')->with('yes', 'แก้ไขข้อมมูลเรียบร้อยเเล้ว');
    }

    public function affiliationShow()
    {
        $Affiliation        =   Affiliation::all();
        $Affiliation_type   =   Affiliation_type::all();
        $Status             =   Status::all();
        return view('admin.affiliation', compact('Affiliation','Status','Affiliation_type'));

    }

    public function affiliationAdd(Request $request)
    {
        $Affiliation                       = new Affiliation;
        $Affiliation->affiliation_type_id  = $request->affiliation_type_id;
        $Affiliation->name                 = $request->name;
        $Affiliation->save();

        return redirect()->route('admin.affiliation')->with('yes', 'เพิ่มข้อมมูลเรียบร้อยเเล้ว');

    }

    public function affiliationGet(Request $request)
    {
        $Affiliation = Affiliation::find($request->id);
        $data['Affiliation'] = $Affiliation;
        echo json_encode($data);
        
    }

    public function affiliationEdit(Request $request)
    {
        $Affiliation                       = Affiliation::find($request->id);
        $Affiliation->affiliation_type_id  = $request->affiliation_type_id;
        $Affiliation->name                 = $request->name;
        $Affiliation->status               = $request->status;
        $Affiliation->save();

        return redirect()->route('admin.affiliation')->with('yes', 'แก้ไขข้อมมูลเรียบร้อยเเล้ว');
    }
    
    public function index()
    {
        $Animal   =   Animal::all();
        $AnimalType   =   AnimalType::all();
        $Status   =   Status::all();
    
        return view('admin.animal', compact('Animal','AnimalType','Status'));
    }
    public function showAnimalCommon()
    {
        $Animal         =   Animal::all();
        $Animal_common_name     =   Animal_common_name::all();
        $Animals_type           =   Animals_type::all();
        $AnimalType     =   AnimalType::all();
        $Status         =   Status::all();
    
        return view('admin.animal_common', compact('Animal','AnimalType','Status','Animal_common_name','Animals_type'));
    }

    public function showAnimalStock()
    {
        $Animal_stock         =   Animal_stock::all();
        $Animal_common_name     =   Animal_common_name::all();
        $Animals_type           =   Animals_type::all();
        $AnimalType     =   AnimalType::all();
        $Status         =   Status::all();
    
        return view('admin.animal_stock', compact(
            'AnimalType',
            'Status',
            'Animal_common_name',
            'Animals_type',
            'Animal_stock'));
    }

    public function getAnimals_type(Request $request)
    {
        $Animal_common_name = Animal_common_name::orderby('common_name_en','asc')->where('animals_type',$request->animals_type)->get();
        $data['Animal_common_name'] = $Animal_common_name;
        echo json_encode($data);
    }

    public function gatAnimal_stock(Request $request)
    {
        $Animal_stock = Animal_stock::find($request->id);
        $data['Animal_stock'] = $Animal_stock;
        echo json_encode($data);
    }
    
    
    public function AnimalType_show()
    {
        $Animals_type = Animals_type::all();
        $AnimalType   =   AnimalType::all();
        $Status       =   Status::all();
        return view('admin.animal_type', compact('AnimalType','Status','Animals_type'));
    }

    public function userstatus_show()
    {
        $StatusUser   =   StatusUser::all();
        $AnimalType   =   AnimalType::all();
        $Status       =   Status::all();
        return view('admin.userstatus', compact('AnimalType','Status', 'StatusUser'));
    }
    
    public function userstatusEdit(Request $request)
    {
        $StatusUser = StatusUser::find($request->id);
        $StatusUser->name = $request->name;
        $StatusUser->status = $request->status;
        $StatusUser->save();

        return redirect()->route('admin.userstatus')->with('yes', 'แก้ไขข้อมมูลเรียบร้อยเเล้ว');
    }

    public function getUserstatus(Request $request)
    {
        $StatusUser   =   StatusUser::find($request->id);
        $data['StatusUser'] = $StatusUser;

        echo json_encode($data);
    }

    public function animaltype_create(Request $request)
    {
        $Animals_type = new Animals_type;
        $Animals_type->Name = $request->Name;
        $Animals_type->Type = $request->Type;
        $Animals_type->Status = "Y";
        $Animals_type->save();

        return redirect()->route('admin.animal_type')->with('yes', 'เพิ่ม Type เรียบร้อย');
    }
    
    public function animalShow(Request $request)
    {
        $Animal_common_name     =   Animal_common_name::find($request->id);
        $data['Animal_common_name'] = $Animal_common_name;
        echo json_encode($data);
    }

    public function editAnimalCommon(Request $request)
    {
        $Animal_common_name                     = Animal_common_name::find($request->id);
        $Animal_common_name->animals_type       = $request->animals_type;
        $Animal_common_name->common_name_en     = $request->common_name_en;
        $Animal_common_name->common_name_th     = $request->common_name_th;
        $Animal_common_name->scientific_name    = $request->scientific_name;
        $Animal_common_name->genetic_diversty   = $request->genetic_diversty;
        $Animal_common_name->status             = $request->status;
        $Animal_common_name->save();

        return redirect()->route('admin.animalcommon')->with('yes', 'แก้ไขข้อมมูลเรียบร้อยเเล้ว');
    }

    public function AnimalTypeGet(Request $request)
    {
        $Animals_type =     Animals_type::find($request->id);
        $Status       =     Status::all();
        $data['Animal'] = $Animals_type;
        $data['Status'] = $Status;

        echo json_encode($data);
    }

    public function animalTypeEdit(Request $request)
    {
        $Animals_type = Animals_type::find($request->id);
        $Animals_type->Name = $request->Name;
        $Animals_type->Type = $request->Type;
        $Animals_type->Status = $request->Status;
        $Animals_type->save();

        return redirect()->route('admin.animal_type')->with('yes', 'แก้ไขข้อมมูลเรียบร้อยเเล้ว');
    }
}
