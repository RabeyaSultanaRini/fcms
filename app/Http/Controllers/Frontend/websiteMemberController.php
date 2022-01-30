<?php

namespace App\Http\Controllers\frontend;
use App\Models\Package;
use App\Models\Member;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class websiteMemberController extends Controller
{
    public function Addmember(){
       
        $user=User::all();
        
        $packages=Package::all();
        return view('website.partial.Be-member',compact('packages','user'));
    }
    public function MemberStore(Request $request){
        Member::create([
            
//database name:::form name
'user_id'=>$request->member_Name,
'Email'=>$request->Email,
'Address'=>$request->Address,
'Contact_Number'=>$request->Contact_Number,
'package_id'=>$request->package_name,

'Age'=>$request->Age,

        ]);
        return redirect()->back();
    }

    public function member(){
        if (auth()->user()) {
        return view('website.partial.website-member');
    }
    else{
        return redirect()->back()->with('error','You need to register first');
    }
}
}
