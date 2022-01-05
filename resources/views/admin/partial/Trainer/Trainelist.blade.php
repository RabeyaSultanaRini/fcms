@extends('admin.master')
@section('main')

<div class="container" >
<h3 class="font-weight-bold">Trainer List</h3>
<!-- search button -->
  <form class="form-inline"action="{{route('admin.trainer.list')}}"method='get'>
    <input class="form-control mr-sm-2" name="search"type="search" value="{{$key}}" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>
</nav>

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
      <th scope="col">Action</th>


     
    </tr>
  </thead>
  <tbody>
      @foreach($Addtrainers as $key=>$trainer)
    <tr>
      <th >{{$key+1}}</th>
      <td>{{$trainer->name}}</td>
      <td>{{$trainer->Email}}</td>
      <td>{{$trainer->Address}}</td>
      <td>{{$trainer->Contact_Number}}</td>
      <td>{{$trainer->Time_Slot}}</td>
      <td>{{$trainer->Membership_Number}}</td>
      <td>{{$trainer->Age}}</td>
      <td>
      <a class="btn btn-info" href="{{route('admin.trainer.edit',$trainer->id)}}">Edit</a>
      <a class="btn btn-danger" href="{{route('admin.trainer.delete',$trainer->id)}}">Delete</a>
      </td>

    </tr>
    @endforeach
  </tbody>
</table>
@endsection