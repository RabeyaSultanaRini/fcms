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
      <th scope="col">packages</th>
      <th scope="col">Age</th>
      <th scope="col">level</th>
      <th scope="col"> Payment</th>
   
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
      <td>{{$member->packages->package_name}}</td>
      <td>{{$member->Age}}</td>
      <td>{{$member->level?$member->level->level_type:'pending'}}</td>
      <td>

       <a href="{{route('admin.addpayment',$member->id)}}" class="btn btn-info">Add Payment</a>
       <a href="{{route('admin.Payment.Viewpayment',$member->id)}}" class="btn btn-info">View Payment</a>
       
       <a href="{{route('admin.select.level',$member->id)}}" class="btn btn-info">level</a>
      </td>
      
    </tr>
    {{-- button pase nibo  --}}
      
      
    @endforeach
  </tbody> 
</table>
@endsection