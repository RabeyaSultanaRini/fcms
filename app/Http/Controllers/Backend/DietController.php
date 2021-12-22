<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Diet;
class DietController extends Controller
{
    public function AddDiet(){
        return view('admin.partial.Diet.AddDiet');
    }
    public function DietStore(Request $request){
        Diet::create([
//database name:::form name
'diet_type'=>$request->diet_type,
'diet_details'=>$request->diet_details,
'Age'=>$request->Age,

        ]);
        return redirect()->back();
    }
    public function Dietlist(){
        $diets=Diet::all();
        return view('admin.partial.Diet.Dietlist',compact('diets'));
    }
}

