@extends('admin.master')
@section('main')
<div class="container" >
<h3 class="font-weight-bold">Package Form</h3>
<div class="form-colume">

<form action="{{route('admin.Package.Store')}}" method="POST">
@csrf
<form>
<div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Package Name</label>
        <input name="package_name" placeholder="Enter Package Name " type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Package Info</label>
        <input name="package_info" placeholder="Enter Package Info"  type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Package Duration</label>
        <input name="package_duration" placeholder="Enter Package Duration"  type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
  
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Package Details</label>
        <input name=" package_details" placeholder="Enter Package Duration"  type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>

    <button type="submit" class="btn btn-success">Submit</button>
</form>
@endsection