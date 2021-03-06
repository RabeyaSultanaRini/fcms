@extends('admin.master')
@section('main')
<div class="container" >
<h3 class="font-weight-bold">Attendance List</h3>
<div class="form-colume">
<table class="table">
  <thead>
    <tr>
    <th scope="col">SL</th>
      <th scope="col">Member Name</th>
      <th scope="col">Membership Number</th>
      <th scope="col">Attendance Status</th>
      <th scope="col">Date</th>
      
    </tr>
  </thead>
    <tbody>
       @foreach($Attendances as $key=> $attendance)
    <tr>
      <th >{{$key+1}}</th>
      <td>{{$attendance->member_name}}</td>
      <td>{{$attendance->membership_number}}</td>
      <td>{{$attendance->attendance_status}}</td>
      <td>{{$attendance->date_details}}</td>
      
    </tr>
    @endforeach
  </tbody> 
</table>
@endsection