@extends('admin.master')
@section('main')
<div class="container" >
<h3 class="font-weight-bold">Member List</h3>
<div class="form-colume">
 
<table class="table"> 
  <thead>
    <tr>
    <th scope="col">SL</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">phone</th>

      <th scope="col">messages</th>
      <th scope="col">status</th>
      {{-- <th scope="col">Age</th>
      <th scope="col"> Payment</th> --}}
   
    </tr>
  </thead>
  <tbody>
       @foreach($callbacks as $key=> $data)
        <tr>
      <th >{{$key+1}}</th>
      <td>{{$data->name}}</td>
      <td>{{$data->email}}</td>
      <td>{{$data->phone}}</td>
      <td>{{$data->message}} </td>
      <td>{{$data->status}}</td>
    
      {{-- <td>

       <a href=""class="btn btn-info">R</a>
       <a href="" class="btn btn-info">View Payment</a>
      </td> --}}
      
    </tr>
    {{-- button pase nibo  --}}
      
      
    @endforeach
  </tbody> 
</table>
@endsection