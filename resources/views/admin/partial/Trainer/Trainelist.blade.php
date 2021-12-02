@extends('admin.master')
@section('main')
<div class="container" >
<h3 class="font-weight-bold">Trainer List</h3>
<div class="form-colume">
<table class="table">
  <thead>
    <tr>
    <th scope="col">SL</th>
      <th scope="col">Trainer Name</th>
      <th scope="col">Email</th>
      <th scope="col">Address</th>
      <th scope="col">Contact Number</th>
      <th scope="col">Time Slot</th>
      <th scope="col">Membership Number</th>
      <th scope="col">Age</th>
    </tr>
  </thead>
  <tbody>
      @foreach($Addtrainers as $trainer)
    <tr>
      <th >{{$trainer->id}}</th>
      <td>{{$trainer->name}}</td>
      <td>{{$trainer->Email}}</td>
      <td>{{$trainer->Address}}</td>
      <td>{{$trainer->Contact_Number}}</td>
      <td>{{$trainer->Time_Slot}}</td>
      <td>{{$trainer->Membership_Number}}</td>
      <td>{{$trainer->Age}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection