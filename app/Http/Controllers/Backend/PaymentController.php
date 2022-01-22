<?php

namespace App\Http\Controllers\Backend;
use App\Models\Member;
use App\Models\Payment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PaymentController extends Controller
{
    public function AddPayment($id){
        $member = Member::find($id);
        return view('admin.partial.payment.AddPayment',compact('member'));
}
public function PaymentStore(Request $request,$id){
    // dd($request->all());
    // dd($id);
    Payment::create([
        'member_id'=>$id,
        'month_name'=>$request->month_name,
        'year'=>$request->year,
        'ammount'=>$request->amount,
        'payment_method'=>$request->payment_method,
        'transation_id'=>$request->transation_id,
       

    ] );
    return redirect()->back();
}
public function PaymentList(){
    $Payments=Payment::all();
    return view('admin.partial.Payment.PaymentList',compact('Payments'));
}

public function Viewpayment($member_id){
    // dd($member_id);
    $paymentinfos = Payment::where('member_id',$member_id)->get();
    return view('admin.partial.payment.viewpayment',compact('paymentinfos'));
}

}
