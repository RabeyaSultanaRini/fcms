@extends('admin.master')
@section('main')
<div class="container" >
<h3 class="font-weight-bold">Member List</h3>
<div class="form-colume">
  
<table class="table">
  <thead>
    <tr>
    <th scope="col">SL</th>
      <th scope="col">Member Name</th>
      <th scope="col">Email</th>
      <th scope="col">Address</th>
      <th scope="col">Contact Number</th>
      <th scope="col">Membership Number</th>
      <th scope="col">packages</th>
      <th scope="col">Age</th>
    </tr>
  </thead>
    <tbody>
       @foreach($members as $key=> $member)
       
    <tr>
      <th >{{$key+1}}</th>
      <td>{{$member->trainers->name}}</td>
      <td>{{$member->Email}}</td>
      <td>{{$member->Address}}</td>
      <td>{{$member->Contact_Number}} </td>
      <td>{{$member->Membership_Number}}</td>
      <td>{{$member->packages->package_name}}</td>
      <td>{{$member->Age}}</td>
    </tr>
    @endforeach
  </tbody> 
</table>
@endsection