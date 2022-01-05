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
        $key=null;
        if(request()->search);{
            $key=request()->search;
            $shifts=Shift::where('trainer_name','Like','%'.$key.'%')
            ->get();
            return view('admin.partial.Shift.shiftlist',compact('shifts','key'));

        }
        $shifts=Shift::all();
        return view('admin.Shift.list',compact('shifts','key'));
    }
}
