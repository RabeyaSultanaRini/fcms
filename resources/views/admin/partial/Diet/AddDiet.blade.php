@extends('admin.master')
@section('main')



<div class="container" >
<h3 class="font-weight-bold">Basic Diet</h3>
<div class="form-colume">
  
<form action="{{route('admin.Diet.Store')}}" method="POST">
  @csrf
  <div class="form-colume">
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputEmail4">Diet Type</label>
      <input name="diet_type" class="form-control" id="inputEmail4" placeholder="Diet Type">
    </div>
    
  </div>
  <div class="form-group">
    <label for="inputAddress">Diet Details</label>
    <input name="diet_details" class="form-control" id="inputAddress" placeholder="Diet Details">
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