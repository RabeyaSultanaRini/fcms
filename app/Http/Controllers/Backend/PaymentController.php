<?php

namespace App\Http\Controllers\Backend;
use App\Models\Payment;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function AddPayment(){
        return view('admin.partial.payment.AddPayment');
}
public function PaymentStore(Request $request){
    Payment::create([
        'member_name'=>$request->member_name,
        'membership_number'=>$request->membership_number,
        'month_name'=>$request->month_name,
        'payment_status'=>$request->payment_status,
        'date'=>$request->date,
       

    ] );
    return redirect()->back();
}
public function PaymentList(){
    $Payments=Payment::all();
    return view('admin.partial.Payment.PaymentList',compact('Payments'));
}
}
