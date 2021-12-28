@extends('admin.master')
@section('main')
<div class="container" >
<h3 class="font-weight-bold">Payment List</h3>
<div class="form-colume">
<table class="table">
  <thead>
    <tr>
    <th scope="col">SL</th>
      <th scope="col">Member Name</th>
      <th scope="col">Membership Number</th>
      <th scope="col">Month Name</th>
      <th scope="col">Payment Status</th>
      <th scope="col">Date</th>
      
    </tr>
  </thead>
    <tbody>
       @foreach($Payments as $key=> $Payment)
    <tr>
      <th >{{$key+1}}</th>
      <td>{{$Payment->member_name}}</td>
      <td>{{$Payment->membership_number}}</td>
      <td>{{$Payment->month_name}}</td>
      <td>{{$Payment->payment_status}}</td>
      <td>{{$Payment->date}}</td>
    
      
      
    </tr>
    @endforeach
  </tbody> 
</table>
@endsection