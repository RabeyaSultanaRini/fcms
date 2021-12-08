<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\member;
class MemberController extends Controller
{
    public function Addmember(){
        return view('admin.partial.Trainer.AddMember');

    }
    public function MemberStore(Request $request){
        Addmember::create([
//database name:::form name
'name'=>$request->member_Name,
'Email'=>$request->Email,
'Address'=>$request->Address,
'Contact_Number'=>$request->Contact_Number,

'Membership_Number'=>$request->Membership_Number,
'Age'=>$request->Age,

        ]);
        return redirect()->back();
    }
    public function Memberlist(){
        //$Addmembers=Addmember::all();
        return view('admin.partial.Trainer.memberlist');//compact('AddMemberss'));
    }
}
