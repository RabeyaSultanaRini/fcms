<?php

namespace App\Http\Controllers\Backend;

use App\Models\User;
use App\Models\Level;
use App\Models\Member;
use App\Models\Package;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MemberController extends Controller

{
    public function Addmember(){
        $packages=Package::all();
        return view('admin.partial.Member.AddMember',compact('packages'));

    }
    public function MemberStore(Request $request){
        Member::create([
//database name:::form name
'name'=>$request->member_Name,
'Email'=>$request->Email,
'Address'=>$request->Address,
'Contact_Number'=>$request->Contact_Number,
'package_id'=>$request->package_name,
'Membership_Number'=>$request->Membership_Number,
'Age'=>$request->Age,

        ]);
        return redirect()->back();
    }
    public function Memberlist(){
        
        $members=Member::with('packages','trainers')->get();
        return view('admin.partial.Member.memberlist',compact('members'));
    }
    public function Viewlevel(){
        return view('admin.partial.Level.levelview');
    }
    public function Addlevel(Request $request){
        Level::create([
            'level_type'=>$request->type,
            'w_from'=>$request->from,
            'w_to'=>$request->to,
            'e_type'=>$request->excercise_type,
            'description'=>$request->description,

        ]);
        return redirect()->back();
    }
    public function level($id){
        $member=Member::find($id);
        $levels=Level::all();
        return view('admin.partial.Level.levelselect',compact('member','levels'));
    }

    public function selectlevel(Request $request,$id){
        $member=Member::find($id);
        $member->update([
            'level_id'=>$request->level
        ]);
       
        return redirect()->route('admin.member.list');
    }
}
