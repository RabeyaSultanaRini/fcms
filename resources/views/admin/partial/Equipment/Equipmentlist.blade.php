@extends('admin.master')
@section('main')
<div class="container" >
<h3 class="font-weight-bold">Equipment List</h3>
<div class="form-colume">
<table class="table">
  <thead>
    <tr>
    <th scope="col">SL</th>
      <th scope="col">Equipment Name</th>
      
      
    </tr>
  </thead>
    <tbody>
    @foreach($equipments as $key=> $equipment)


    <tr>
      <th >{{$key+1}}</th>
      <td>{{$equipment->equipment_name}}</td>
      
    </tr>
    @endforeach
  </tbody> 
</table>
@endsection