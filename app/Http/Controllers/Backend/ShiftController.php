<?php

namespace App\Http\Controllers\Backend;
use App\Models\Shift;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShiftController extends Controller
{
    public function ShiftAdd(){
        return view('admin.partial.shift.AddShift');
    }
    public function ShiftStore(Request $request){
        Shift::create([
            'trainer_name'=>$request->trainer_Name,
            'starting_time'=>$request->Strating_time,
            'End_time'=>$request->End_time

        ]);
        return redirect()->back();
    }
    public function ShiftList(){
        $shifts=Shift::all();
        return view('admin.partial.shift.ShiftList',compact('shifts'));
    }
}
