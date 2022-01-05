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
    // trainer list and search er kaj
    public function Trainerlist(){
        $key=null;
        if(request()->search);{
            $key=request()->search;
            $Addtrainers=Addtrainer::where('name','Like','%'.$key.'%')->orwhere('Address','LIKE','%'.$key.'%')
            ->get();
            return view('admin.partial.Trainer.Trainelist',compact('Addtrainers','key'));

        }
        $Addtrainers=Addtrainer::all();
        return view('admin.partial.Trainer.Trainelist',compact('Addtrainers','key'));
    }

    public function trainerEdit($id)
    {

        $trainer=Addtrainer::find($id);
//        $product=Product::where('user_id',$id)->first();

//        dd($product);
        // $all_categories=Category::all();
//        dd($all_categories);
        return view('admin.partial.Trainer.traineredit',compact('trainer'));

    }
    public function trainerUpdate(Request $request,$id)
    {

        $trainer=Addtrainer::find($id);
        $trainer->update([
            // field name from db || field name from form
            'name'=>$request->Trainer_Name,
            'Email'=>$request->Email,
            'Address'=>$request->Address,
            'Contact_Number'=>$request->Contact_Number,
           'Time_Slot'=>$request->Time_Slot,
           'Membership_Number'=>$request->Membership_Number,
            'Age'=>$request->Age,

        ]);
        return redirect()->route('admin.trainer.list')->with('success','Trainer Updated Successfully.');

    }
    public function trainerDelete($trainer_id)
    {
       Addtrainer::find($trainer_id)->delete();
       return redirect()->back()->with('success','Product Deleted.');
    }
 
}
