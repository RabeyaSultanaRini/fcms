<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Member;
class MemberController extends Controller
{
    public function Addmember(){
        return view('admin.partial.Member.AddMember');

    }
    public function MemberStore(Request $request){
        Member::create([
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
        $members=Member::all();
        return view('admin.partial.Member.memberlist',compact('members'));
    }
}
