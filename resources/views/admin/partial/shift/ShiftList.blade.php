@extends('admin.master')
@section('main')
<div class="container" >
<h3 class="font-weight-bold">Shift List</h3>
<div class="form-colume">

<!-- search  -->
<form class="form-inline"action="{{route('admin.Shift.list')}}"method='get'>
    <input class="form-control mr-sm-2" name="search"type="search" value="{{$key}}" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>
</nav>
<table class="table">
  <thead>
    <tr>
    <th scope="col">SL</th>
      <th scope="col">Trainer Name</th>
      <th scope="col">Starting Time</th>
      <th scope="col">Ending Time</th>
      
      
    </tr>
  </thead>
  <tbody>
      @foreach($shifts as $key=>$shift)
    <tr>
      <th >{{$key+1}}</th>
      <td>{{$shift->trainer_name}}</td>
      <td>{{$shift->starting_time}}</td>
      <td>{{$shift->End_time}}</td>
      
    </tr>
    @endforeach
  </tbody>
</table>
@endsection