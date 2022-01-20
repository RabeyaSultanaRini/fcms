@extends('admin.master')
@section('main')
<div class="container" >
<h3 class="font-weight-bold">Package List</h3>
<div class="form-colume">
<table class="table">
  <thead>
    <tr>
    <th scope="col">SL</th>
      <th scope="col">Package Name</th> 
      <th scope="col">Package Info</th>
      <th scope="col">Package Duration</th>
      <th scope="col">Package details</th>
      
      
    </tr>
  </thead>
    <tbody>
       @foreach($Packages as $key=> $Package)
    <tr>
      <th >{{$key+1}}</th>
      <td>{{$Package->package_name}}</td> 
      <td>{{$Package->package_info}}</td>
      <td>{{$Package->package_duration}}</td>
      <td>{{$Package->package_details}}</td>
     
      <a class="btn btn-info" href="{{route('admin.package.edit',$Package->id)}}">Edit</a>
      <a class="btn btn-danger" href="{{route('admin.package.delete',$Package->id)}}">Delete</a>
      
      
    </tr>
    @endforeach
  </tbody> 
</table>
@endsection