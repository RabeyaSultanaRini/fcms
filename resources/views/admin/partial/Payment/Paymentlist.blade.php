@extends('admin.master')
@section('main')
<div class="container" >
<h3 class="font-weight-bold">Payment List</h3>
<div class="form-colume">
<table class="table">
  <thead>
    <tr>
    <th scope="col">SL</th>
      <th scope="col">Month</th>
      <th scope="col">Year</th>
      <th scope="col">Amount</th>
      <th scope="col">Payment Method<</th>
      <th scope="col">Transation Id</th>
      
    </tr>
  </thead>
    <tbody>
       @foreach($Payments as $key=> $Payment)
    <tr>
      <th >{{$key+1}}</th>
      <td>{{$Payment->month_name}}</td>
      <td>{{$Payment->year}}</td>
      <td>{{$Payment->amount}}</td>
      <td>{{$Payment->payment_method}}</td>
      <td>{{$Payment->transation_id}}</td>
    
      
      
    </tr>
    @endforeach
  </tbody> 
</table>
@endsection