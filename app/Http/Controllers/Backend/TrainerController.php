<?php

namespace App\Http\Controllers\Backend;
use App\Models\Addtrainer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TrainerController extends Controller
{
    public function Addtrainer(){
        return view('admin.partial.Trainer.AddTrainer');

    }
    public function TrainerStore(Request $request){
        Addtrainer::create([
//database name:::form name
'name'=>$request->Trainer_Name,
'Email'=>$request->Email,
'Address'=>$request->Address,
'Contact_Number'=>$request->Contact_Number,
'Time_Slot'=>$request->Time_Slot,
'Membership_Number'=>$request->Membership_Number,
'Age'=>$request->Age,

        ]);
        return redirect()->back();
    }
    public function Trainerlist(){
        $Addtrainers=Addtrainer::all();
        return view('admin.partial.Trainer.Trainelist',compact('Addtrainers'));
    }
}
