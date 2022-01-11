<link rel="stylesheet" href="{{url('frontend/css/bootstrap.min.css')}}">

<div class="container" >
<h3 class="font-weight-bold">Diet List</h3>
<!-- search button -->
  
</nav>

<div class="form-colume">
<div class="row">
  @foreach($diet as $key=>$diet)
  <div class="col-lg-4" style="margin-bottom: 20px;">
  <div class="card" style="width: 18rem; border-radius: 9%;">
  <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
  <div class="card-body" >
    <h5 class="card-title">{{$diet->diet_type}}</h5>
    <h5 class="card-title">{{$diet->diet_details}}</h5>

    <h5 class="card-title">{{$diet->age}}</h5>
  
    <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
  </div>
</div>
</div>
  @endforeach
</div>
</div>