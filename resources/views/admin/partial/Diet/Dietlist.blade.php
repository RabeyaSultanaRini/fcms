@extends('admin.master')
@section('main')
<div class="container" >
<h3 class="font-weight-bold">Diet List</h3>
<div class="form-colume">
<table class="table">
  <thead>
    <tr>
    <th scope="col">SL</th>
      <th scope="col">Diet Type</th>
      <th scope="col">Diet Details</th>
      <th scope="col">Age</th>
      
    </tr>
  </thead>
    <tbody>
       @foreach($diets as $key=> $diet)
    <tr>
      <th >{{$key+1}}</th>
      <td>{{$diet->diet_type}}</td>
      <td>{{$diet->diet_details}}</td>
      <td>{{$diet->age}}</td> 
    </tr>
    @endforeach
  </tbody> 
</table>
@endsection