@extends('admin.master')
@section('main')
<div class="container" >
<h3 class="font-weight-bold">Payment </h3>
<div class="form-colume">

<form action="{{route('admin.Payment.Store',$member->id)}}" method="POST">
@csrf
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputMember Name4">Month</label>
      <input name="month_name" class="form-control" id="inputEmail4" placeholder="member Name">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Year</label>
      <input name="year" class="form-control" id="inputPassword4" placeholder="Membership Number">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Amount</label>
    <input name="amount" class="form-control" id="inputAddress" placeholder="Month Name">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Payment Method</label>
    <input name="payment_method" class="form-control" id="inputAddress2" placeholder="Payment Status">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Transation Id</label>
      <input name="transation_id" class="form-control" id="Date<">
    </div>
    </div>
    <div class="form-group">
   
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection