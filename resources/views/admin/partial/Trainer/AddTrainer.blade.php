@extends('admin.master')
@section('main')


<div class="container" >
<h3 class="font-weight-bold">Trainer Form</h3>
<div class="form-colume">
  
<form action="{{route('admin.train.store')}}" method="POST">
  @csrf
  <div class="form-colume">
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputEmail4">Trainer Name</label>
      <input name="Trainer_Name" class="form-control" id="inputEmail4" placeholder="Trainer Name">
    </div>
    <div class="form-group col-md-4">
      <label for="inputPassword4">Email</label>
      <input name="Email" class="form-control" id="inputPassword4" placeholder="Email">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input name="Address" class="form-control" id="inputAddress" placeholder="Address">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Contact Number</label>
    <input name="Contact_Number" class="form-control" id="inputAddress2" placeholder="Contact Number">
  </div>
  <div class="form-row ">
    <div class="form-group col-md-4">
      <label for="inputCity">Time Slot</label>
      <input name="Time_Slot" class="form-control" id="inputCity"placeholder="Time Slot">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">Membership Number</label>
      <input name="Membership_Number" class="form-control" id="inputCity"placeholder="Membership Number">
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Age</label>
      <input name="Age" class="form-control" id="inputZip"placeholder="Age">
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Sign in</button>
</form>
</div>

@endsection