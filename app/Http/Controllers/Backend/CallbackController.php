<?php

namespace App\Http\Controllers\backend;

use App\Models\Callback;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CallbackController extends Controller
{

    public function callbackStore(Request $request){
        Callback::create([
            'name'=>$request->name,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'message'=>$request->message,
            
        ]);
        return redirect()->back()->with('msg','message sent successfully!');
    }

    public function callbackList(){
       $callbacks=Callback::all();
       return view('admin.partial.inquiry.inquiryList',compact('callbacks')) ;
      
    }
}
