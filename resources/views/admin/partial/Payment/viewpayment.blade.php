@extends('admin.master')
@section('main')
<div class="container" >
<h3 class="font-weight-bold">Payment </h3>
<div class="form-colume">

    <table class="table">
        <thead>
          <tr>
            <th scope="col">Month</th>
            <th scope="col">Year</th>
            <th scope="col">Amount</th>
            <th scope="col">Payment Method</th>
            <th scope="col">Transation</th>
            
          </tr>
        </thead>
        <tbody>
            @foreach ($paymentinfos as $payment)
            <tr>
                
                <th scope="row">{{$payment->month_name}}</th>
                <th scope="row">{{$payment->year}}</th>
                <th scope="row">{{$payment->ammount}}</th>
                <th scope="row">{{$payment->payment_method}}</th>
                <th scope="row">{{$payment->transation_id}}</th>
               
              </tr>
            @endforeach
          
        </tbody>
      </table>
@endsection