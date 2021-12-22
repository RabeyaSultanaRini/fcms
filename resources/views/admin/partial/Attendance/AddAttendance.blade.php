@extends('admin.master')
@section('main')

<div class="container" >
<h3 class="font-weight-bold">Attendance Form</h3>
<div class="form-colume">

<form action="{{route('admin.Attendance.Store')}}" method="POST">
@csrf
<form class="needs-validation" novalidate>
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationCustom01">Member Name</label>
      <input name="member_name" class="form-control" id="member_name" placeholder="Member Name"  required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom02">Membership Number</label>
      <input name="membership_number" class="form-control" id="membership_number" placeholder="Email"  required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom02">Attendance Status</label>
      <input name="attendance_status" class="form-control" id="attendance_status" placeholder="Email"  required>
      <div class="valid-feedback">
        Looks good!
      </div>
        
        </div>
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationCustom03">Date</label>
      <input name="date_details"type="datetime-local" class="form-control" id="date_details" placeholder="Contact Number" required>
      <div class="invalid-feedback">
        Please provide a valid city.
      </div>
    </div>
    
    
  
    </div>
  </div>
  <button class="btn btn-primary" type="submit">Submit form</button>
</form>

@endsection
