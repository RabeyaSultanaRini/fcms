@extends('admin.master')
@section('main')

<div class="container" >
<h3 class="font-weight-bold">Member Form</h3>
<div class="form-colume">

<form action="{{route('admin.add.level')}}" method="POST">
@csrf
<form class="needs-validation" novalidate>
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationCustom01">Level Type</label>
      <input name="type" class="form-control" id="validationCustom01" placeholder="level type"  required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom02">Weight From</label>
      <input name="from" class="form-control" id="validationCustom02" placeholder="from"  required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustomUsername">Weight To</label>
      <div class="input-group">
        <div class="input-group-prepend">
          
        </div>
        <input name="to" class="form-control" id="validationCustomUsername" placeholder="to" aria-describedby="inputGroupPrepend" required>
        <div class="invalid-feedback">
          Please choose a username.
        </div>
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationCustom03">Excercise Type</label>
      <input name="excercise_type" class="form-control" id="validationCustom03" placeholder="excercise_type" required>
      <div class="invalid-feedback">
        Please provide a valid city.
      </div>
    </div>
</div>
<div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationCustom03">description</label>
      <input name="description" class="form-control" id="validationCustom03" placeholder="description" required>
      <div class="invalid-feedback">
        Please provide a valid city.
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
  </div>
  <button class="btn btn-primary" type="submit">Submit </button>
</form>

@endsection
