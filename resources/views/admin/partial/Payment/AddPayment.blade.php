@extends('admin.master')
@section('main')
<div class="container" >
<h3 class="font-weight-bold">Payment Form</h3>
<div class="form-colume">

<form action="{{route('admin.Payment.Store')}}" method="POST">
@csrf
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputMember Name4">Member Name</label>
      <input type="member_name" class="form-control" id="inputEmail4" placeholder="ember Name">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Membership Number</label>
      <input type="membership_number" class="form-control" id="inputPassword4" placeholder="Membership Number">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Month Name</label>
    <input type="month_name" class="form-control" id="inputAddress" placeholder="Month Name">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Payment Status</label>
    <input type="payment_status" class="form-control" id="inputAddress2" placeholder="Payment Status">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Date</label>
      <input type="text" class="form-control" id="Date<">
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
@endsection