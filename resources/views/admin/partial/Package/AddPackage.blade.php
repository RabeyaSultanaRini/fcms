@extends('admin.master')
@section('main')
<div class="container" >
<h3 class="font-weight-bold">Package Form</h3>
<div class="form-colume">

<form action="{{route('admin.Package.Store')}}" method="POST">
@csrf
<form class="needs-validation" novalidate>
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationCustom01">Package Name</label>
      <input name="package_name" class="form-control" id="validationCustom01" placeholder="Member Name"  required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom02">Package Info</label>
      <input name="package_info" class="form-control" id="validationCustom02" placeholder="Email"  required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom02">Package Duration</label>
      <input name="package_duration" class="form-control" id="validationCustom02" placeholder="Email"  required>
      <div class="valid-feedback">
        Looks good!
      </div>
        </div>
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationCustom03">Package Details</label>
      <input name="package_details" class="form-control" id="validationCustom03" placeholder="Contact Number" required>
      <div class="invalid-feedback">
        Please provide a valid city.
      </div>
   
    
   
      </label>
      <div class="invalid-feedback">
        You must agree before submitting.
      </div>
    </div>
  </div>
  <button class="btn btn-primary" type="submit">Submit form</button>
</form>
@endsection