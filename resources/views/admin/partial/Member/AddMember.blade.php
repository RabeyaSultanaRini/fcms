@extends('admin.master')
@section('main')

<div class="container" >
<h3 class="font-weight-bold">Member Form</h3>
<div class="form-colume">

<form action="{{route('admin.member.store')}}" method="POST">
@csrf
<form class="needs-validation" novalidate>
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationCustom01">Member Name</label>
      <input name="member_Name" class="form-control" id="validationCustom01" placeholder="Member Name"  required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom02">Email</label>
      <input name="Email" class="form-control" id="validationCustom02" placeholder="Email"  required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustomUsername">Address</label>
      <div class="input-group">
        <div class="input-group-prepend">
          
        </div>
        <input name="Address" class="form-control" id="validationCustomUsername" placeholder="Address" aria-describedby="inputGroupPrepend" required>
        <div class="invalid-feedback">
          Please choose a username.
        </div>
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationCustom03">Contact Number</label>
      <input name="Contact_Number" class="form-control" id="validationCustom03" placeholder="Contact Number" required>
      <div class="invalid-feedback">
        Please provide a valid city.
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationCustom04">Membership Number</label>
      <input name="Membership_Number" class="form-control" id="validationCustom04" placeholder="Membership Number" required>
      <div class="invalid-feedback">
        Please provide a valid state.
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationCustom05">Age</label>
      <input name="Age" class="form-control" id="validationCustom05" placeholder="Age" required>
      <div class="invalid-feedback">
        Please provide a valid zip.
      </div>
    </div>
    <div class="form-group">
      <label for="validationCustom05">Enter packages:</label>
      <select name=package_name>
         @foreach($packages as $package)
         <option value="{{$package->id}}">{{$package->package_name}}>
            @endforeach
         </select>
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
  <button class="btn btn-primary" type="submit">Submit </button>
</form>

@endsection
