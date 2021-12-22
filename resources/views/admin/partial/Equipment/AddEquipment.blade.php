@extends('admin.master')
@section('main')

<div class="container" >
<h3 class="font-weight-bold">Equipment Form</h3>
<div class="form-colume">

<form action="{{route('admin.Equipment.Store')}}" method="POST">
@csrf
<form class="needs-validation" novalidate>
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationCustom01">Equipment Name</label>
      <input name="equipment_name" class="form-control" id="equipment_name" placeholder="Equipment Name"  required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    
    </div>
    
        
        
  <button class="btn btn-primary" type="submit">Submit form</button>
</form>

@endsection
