<?php

namespace App\Http\Controllers\Backend;
use App\Models\Attendance;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    public function AttendanceAdd(){
        return view('admin.partial.Attendance.AddAttendance');
        
    }
    public function AttendanceStore(Request $request){
      Attendance::create([
            'member_name'=>$request->member_Name,
            'membership_number'=>$request->membership_number,
            'attendance_status'=>$request->attendance_status,
            'date_details'=>$request->date_details,
           

        ] );
        return redirect()->back();
    }
    public function AttendanceList(){
       $Attendances=Attendance::all();
        return view('admin.partial.Attendance.AttendanceList',compact('Attendances'));
    }
}
