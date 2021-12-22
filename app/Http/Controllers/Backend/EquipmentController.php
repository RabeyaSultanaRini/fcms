<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Equipment;
class EquipmentController extends Controller
{
    public function AddEquipment(){
        return view('admin.partial.Equipment.AddEquipment');
    }
    public function EquipmentStore(Request $request){
        Equipment::create([
//database name:::form name
'equipment_name'=>$request->equipment_name,


        ]);
        return redirect()->back();
    }
    public function Equipmentlist(){
        $equipments=Equipment::all();
        return view('admin.partial.Equipment.Equipmentlist',compact('equipments'));
    }
}
