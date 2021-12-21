@extends('admin.master')
@section('main')
<div class="container" >
<h3 class="font-weight-bold">Shift Form</h3>
<div class="form-colume">

<form action="{{route('admin.shift.store')}}" method="POST">
@csrf
<form class="needs-validation" novalidate>
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationCustom01">Trainer Name</label>
      <input name="trainer_Name" class="form-control" id="validationCustom01" placeholder="Member Name"  required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    
    <div class="col-md-4 mb-3">
      <label for="validationCustom02">Starting Time</label>
      <input name="Strating_time" class="form-control" id="validationCustom02" type='datetime-local'  placeholder="Email"  required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    
  </div>
  
    
    <div class="col-md-3 mb-3">
      <label for="validationCustom05">End Time</label>
      <input name="End_time" class="form-control" id="validationCustom05" type='datetime-local' placeholder="Age" required>
      <div class="invalid-feedback">
        Please provide a valid zip.
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
        Agree to terms and conditions
      </label>
      <div class="invalid-feedback">
        You must agree before submitting.
      </div>
    </div>
  </div>
  <button class="btn btn-primary" type="submit">Submit form</button>
</form>
@endsection